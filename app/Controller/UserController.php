<?php

namespace App\Controller;

use Core\Controller\Controller;

class UserController extends Controller
{
	public function index()
	{
		redirect('/');
		return dd("UserController pribeve");
	}

}