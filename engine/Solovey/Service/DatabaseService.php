<?php

namespace Solovey\Service;

use Solovey\Database\Database;

class DatabaseService extends Service
{
	public static $staticDB;
	public $db;

	/**
	 * DatabaseService constructor.
	 */
	public function __construct()
	{
		$this->db = new Database(
			DATABASE['host'],
			DATABASE['port'],
			DATABASE['user'],
			DATABASE['name'],
			DATABASE['password'],
			DATABASE['driver']
		);

		self::$staticDB = $this->db;
	}
}