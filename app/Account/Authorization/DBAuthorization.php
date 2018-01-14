<?php

namespace Account\Authorization;


use Service\CustomUserService;
use Solovey\Account\AbstractUser;
use Solovey\Account\Authorization\Authorization;

class DBAuthorization implements Authorization
{

	/**
	 * @param $username
	 * @param $password
	 * @return AbstractUser|bool
	 */
	function authorize($username, $password)
	{
		$user = CustomUserService::getByUsername($username);

		if (isset($user) && $user->password === $password) {
			return $user;
		}

		return false;
	}
}