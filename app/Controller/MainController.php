<?php

namespace App\Controller;

use App\Model\User;
use Core\Controller\Controller;

class MainController extends Controller
{
	public function index()
	{
		return view('users', [
			'users' => (new User)->get()
		]);
	}

}