<?php
require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/services/api/users/UserControllers.php";
$router = new AltoRouter();
$router->map( 'GET', '/home', function() {
	require __DIR__."/views/home/index.php";
},'come_home');
$router->map( 'GET', '/test', function() {
	require __DIR__."/services/config/test_path.php";
});
$router->map( 'GET', '/login', function() {
	require __DIR__."/views/users/index.php";
});
$router->map( 'GET', '/post/user', 'UserControllers#getClass','post_user');

$GLOBALS['come_home'] = $router->generate('come_home');
$GLOBALS['post_user'] = $router->generate('post_user');

$match = $router->match();
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
