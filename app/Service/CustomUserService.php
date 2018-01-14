<?php

namespace Service;

use Account\Authorization\DBAuthorization;
use Model\Admin;
use Model\User;
use Solovey\Account\AbstractUser;
use Solovey\Service\DatabaseService;
use Solovey\Service\I\UserService;

class CustomUserService extends DatabaseService implements UserService
{

	static function getActiveUser()
	{
		return self::isAuth() ? objectToObject(json_decode($_SESSION['user']), Admin::class) : false;
	}

	static function isAuth()
	{
		return isset($_SESSION['user']);
	}

	static function logout()
	{
		session_destroy();
	}

	function login($username, $password)
	{
		$testAuth = new DBAuthorization();
		$success = $testAuth->authorize($username, $password);

		if ($success) {
			$_SESSION['user'] = json_encode($success);
			return true;
		}

		return false;
	}

	function register(AbstractUser $admin)
	{
//		$reg = new DBRegistration();
//
//		return $reg->register($user);
	}

	function update(AbstractUser $abstractUser)
	{
		$this->db
			->update('admins')
			->set((array)$abstractUser)
			->where(["username" => $abstractUser->username])
			->execute();

		$_SESSION['user'] = json_encode(self::getByUsername($abstractUser->username));
	}

	/**
	 * @param $username
	 * @return bool|Admin
	 */
	static function getByUsername($username)
	{
		$stmt = self::$staticDB
			->select('*')
			->from('admins')
			->where(['username =' => $username])
			->execute()
			->fetchAll();

		debug($stmt);

		foreach ($stmt as $item => $value) {
			return arrayToObject($value, Admin::class);
		}

		return null;
	}

	function remove($id)
	{
		// TODO: Implement remove() method.
	}
}