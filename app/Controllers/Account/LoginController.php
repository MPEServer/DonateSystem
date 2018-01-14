<?php

use Service\CustomUserService;
use Solovey\Routing\Controller;

class LoginController extends Controller
{

	private $userService;

	public function __construct()
	{
		$this->userService = new CustomUserService();
	}

	function page()
	{
		if ($this->userService::isAuth()) header('Location: /account');

		$this->render('account/login');
	}

	function login()
	{
		$this->checkLogin();

		$username = $_POST['username'];
		$password = $_POST['password'];

		$error = null;

		$auth = $this->userService->login($username, $password);

		if ($auth) {
			header('Location: /account');
		} else {
			$error = 'Error';

			$this->render('account/login', [
				'error' => $error
			]);
		}
	}

	function logout() {
		$this->checkLogin();

		$this->userService::logout();
		header('Location: /account/login');
	}

	private function checkLogin()
	{
		if ($this->userService::isAuth()) header('Location: /account/login');
	}

}