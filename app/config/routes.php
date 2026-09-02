<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/** @var object $router **/

$router->get('/', 'Welcome::index');

$router->get('/student', 'StudentController::index');

$router->get('/student/profile', 'StudentController::profile')
       ->middleware('student');

$router->get('/student/access', 'StudentController::grantAccess');

$router->get('/student/lock', 'StudentController::lockProfile');

$router->get('/users', 'UsersController::index');
