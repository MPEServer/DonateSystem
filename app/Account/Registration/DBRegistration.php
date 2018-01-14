<?php

namespace Registration;


use Service\CustomUserService;
use Solovey\Account\AbstractUser;
use Solovey\Account\Registration\Registration;
use Solovey\Database\Database;

class DBRegistration implements Registration
{

	/**
	 * @param AbstractUser $user
	 * @return bool|AbstractUser
	 */
	function register(AbstractUser $user)
	{
		$db = new Database(
			DATABASE['host'],
			DATABASE['port'],
			DATABASE['user'],
			DATABASE['name'],
			DATABASE['password'],
			DATABASE['driver']
		);

		$user = CustomUserService::getByUsername($user->username);

		if (isset($user)) die('user already registered');

		$db->insert('admins', (array)$user);

		return true;
	}
}