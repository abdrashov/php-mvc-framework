<?php

namespace Core\Controller;

abstract class Controller
{
	protected $param;

	public function __construct($param)
	{
		$this->param = $param;
	}
}