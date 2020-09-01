<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
// api
$router->group(['prefix' => 'api'], function() use ($router) {
    // Matches "/api/register
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');
    $router->group(['middleware' => 'auth'], function() use ($router) {
        $router->get('category', 'CategoryController@all');
    });
    // Matches "/api/profile
    $router->get('profile', 'UserController@profile');
    // Matches "/api/users/1
    //get one user by id
    $router->get('users/{id}', 'UserController@singleUser');
    // Matches "/api/users
    $router->get('users', 'UserController@allUsers');
});
// route vue
$router->get('/{route:.*}/', function() {
    return view('app');
});
