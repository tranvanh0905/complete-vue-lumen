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
    // api category
    $router->group(['middleware' => 'auth'], function() use ($router) {
        $router->get('category', 'CategoryController@all');
        $router->get('category/{title}', 'CategoryController@filter');
        $router->get('category/update/{id}', 'CategoryController@getOne');
        $router->delete('category/{id}', 'CategoryController@delete');
        $router->post('category', 'CategoryController@create');
        $router->put('category/update/{id}', 'CategoryController@update');
        $router->get('category/sort/{attribute}/{sort}', 'CategoryController@sort');
    });
    // api news
    $router->group(['middleware' => 'auth'], function() use ($router) {
        $router->get('news', 'NewsController@all');
        $router->post('news', 'NewsController@create');
        $router->delete('news/{id}', 'NewsController@delete');
    });
    // api user
    $router->group(['middleware' => 'auth'], function() use ($router) {
        $router->get('users', 'UserController@allUser');
        $router->delete('users/{id}', 'UserController@delete');
    });
    // Matches "/api/profile
    $router->get('profile', 'UserController@profile');
    // Matches "/api/users/1
    //get one user by id
    $router->get('users/{id}', 'UserController@singleUser');
    // Matches "/api/users
    $router->get('users', 'UserController@allUsers');
});
$router->group(['prefix' => 'front-end'], function() use ($router) {
    $router->get('list-data-news', 'NewsController@getDataFrontend');
    $router->get('list-data-news-detail', 'NewsController@getDataFrontendDetail');
    $router->get('detail-news/{id}', 'NewsController@getDetailNews');
});
// api frontend
// route vue
$router->get('/admin/{route:.*}/', function() {
    return view('app');
});
$router->get('/{route:.*}/', function() {
    return view('frontend');
});
