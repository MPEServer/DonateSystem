<?php

namespace Controllers;

use Service\CustomUserService;
use Solovey\Routing\Controller;

class HomeController extends Controller
{

	private $userService;

	public function __construct()
	{
		$this->userService = new CustomUserService();
	}

	function main()
	{
		$this->render('home');
	}

	function test()
	{
		$this->render('test');
	}

}