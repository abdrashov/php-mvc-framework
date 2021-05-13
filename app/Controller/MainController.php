<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\DataBase\DataBase;

class MainController extends Controller
{
	public function index()
	{
		return view('main', [
			'title' => 'asdasd'
		]);
	}

}