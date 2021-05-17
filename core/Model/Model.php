<?php

namespace Core\Model;

use Core\DataBase\DataBase;
use PDO;

abstract class Model extends DataBase
{
	public function find(int $id):object
	{
		return $this->db->query("SELECT * FROM $this->table WHERE `id` LIKE $id")
					->fetch(PDO::FETCH_OBJ);
	}

	public function get():array
	{
		return $this->db->query("SELECT * FROM $this->table")
					->fetchAll(PDO::FETCH_OBJ);
	}

}