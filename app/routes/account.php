<?php

use Controllers\Account\AccountController;
use Controllers\Account\LoginController;
use Solovey\Routing\Router;

Router::GET('Account', '/account', AccountController::class);

Router::GET('Login', '/account/login', LoginController::class);
Router::POST('Login', '/account/login', LoginController::class, 'login');
Router::GET('Logout', '/account/logout', LoginController::class, 'logout');