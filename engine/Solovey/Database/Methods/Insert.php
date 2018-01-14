<?php

namespace Solovey\Database\Methods;


use Solovey\Database\Database;

class Insert
{

	private $query = 'INSERT INTO ';
	private $data = [];

	/**
	 * Insert constructor.
	 * @param string $where
	 */
	public function __construct($where)
	{
		$this->query .= "$where ";
	}

	/**
	 * @param $val
	 * @return $this
	 */
	public function values($val)
	{
		$items = '';
		$values = '';

		foreach ($val as $item => $value) {
			$items .= $item . ', ';

			if (preg_match('/^solovey_database_unbind\((.*)\)$/i', $value, $match)) {
				$values .= "$item = $match[1], ";
			} else {
				$values .= "?, ";
				array_push($this->data, $value);
			}
		}

		$items = substr($items, 0, strlen($items) - 2);
		$values = substr($values, 0, strlen($values) - 2);

		$this->query .= "($items) VALUES ($values) ";

		return $this;
	}

	/**
	 * @param $i
	 * @return $this
	 */
	public function i($i)
	{
		$this->query .= "$i ";
		return $this;
	}

	/**
	 * @return \PDOStatement
	 */
	public function execute()
	{

		Database::$pdo->beginTransaction();

		$stmt = Database::$pdo->prepare($this->query);

		$stmt->execute($this->data);

		Database::$pdo->commit();

		return $stmt;
	}

}