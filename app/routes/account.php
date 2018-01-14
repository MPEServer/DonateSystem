<?php

use Solovey\Routing\Router;

Router::GET('Account', '/account', 'AccountController:page');

Router::GET('Login', '/account/login', 'LoginController:page');
Router::POST('Login', '/account/login', 'LoginController:login');
Router::GET('Logout', '/account/logout', 'LoginController:logout');