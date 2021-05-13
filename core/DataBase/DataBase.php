<?php

namespace Core\DataBase;

use PDO;

class DataBase
{
	private const DB = 'mysql';
	private const HOST = 'localhost';
	private const DBNAME = 'abdrashoff_mvc';
	private const USER = 'abdrashoff_mvc';
	private const PASSWORD = 'iiiklllER123';

	public function __construct()
	{
		$db = self::DB.':host='.self::HOST.';dbname='.self::DBNAME.';charset=utf8';

		$dbh = new PDO($db, self::USER, self::PASSWORD, [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_CASE => PDO::CASE_NATURAL,
			PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,
		]);
	}

	
}