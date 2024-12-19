<?php
session_start();
require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/services/api/users/UserControllers.php";
$router = new AltoRouter();
$router->map( 'GET', '/home', function() {
	require __DIR__."/views/home/index.php";
},'come_home');
$router->map( 'GET', '/test', function() {
	require __DIR__."/test.php";
});

// start users
$router->map( 'GET', '/login', function() {
	require __DIR__."/views/users/index.php";
});
$router->map('GET', '/register', [new UserControllers(), 'register_page'], 'register');
$router->map('POST', '/post/register', [new UserControllers(), 'validation_register'], 'post_register');
$router->map('POST', '/post/user', [new UserControllers(), 'validation_login'], 'post_user');
// end users


// set path on menu
$GLOBALS['come_home'] = $router->generate('come_home');
$GLOBALS['post_user'] = $router->generate('post_user');

$GLOBALS['register'] = $router->generate('register');
$GLOBALS['post_register'] = $router->generate('post_register');




$match = $router->match();
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
