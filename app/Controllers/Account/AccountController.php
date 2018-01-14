<?php

use Service\CustomUserService;
use Solovey\Routing\Controller;

class AccountController extends Controller
{

	private $userService;

	public function __construct()
	{
		$this->userService = new CustomUserService();
	}

	function page()
	{
		$this->checkLogin();

		$this->render('account/account', [
			'user' => $this->userService::getActiveUser()
		]);
	}

	private function checkLogin()
	{
		if (!$this->userService::isAuth()) header('Location: /account/login');
	}

}