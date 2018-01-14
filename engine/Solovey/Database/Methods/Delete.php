<?php

namespace Solovey\Database\Methods;


use Solovey\Database\Database;

class Delete
{

	private $query = 'DELETE FROM ';
	private $data = [];
	private $separator = ',';

	/**
	 * Delete constructor.
	 * @param $from
	 */
	public function __construct($from)
	{
		$this->query .= "$from ";
		$this->separator = Database::$separator;
	}

	/**
	 * @param array $where
	 * @return $this
	 */
	public function where(array $where)
	{
		$w = '';

		foreach ($where as $item => $value) {
			$sep = '=';
			if (preg_match('/[\s]+/i', $item, $match)) {
				$sep = '';
			}

			if (preg_match('/^solovey_database_unbind\((.+)\)$/i', $value, $match)) {
				$w .= "$item $sep $match[1] $this->separator ";
			} else {
				$w .= "$item $sep ? $this->separator ";
				array_push($this->data, $value);
			}
		}

		$w = substr($w, 0, strlen($w) - ($this->separator === ',' ? 2 : 5));

		$this->query .= "WHERE $w ";

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