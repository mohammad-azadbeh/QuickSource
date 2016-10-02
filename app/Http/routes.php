<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index');


//Menu Route
Route::group([
    //'namespace'  => 'Laraveldaily\Quickadmin\Controllers',
    'middleware' => ['web', 'auth']
], function () {
    // Dashboard home page route
    Route::get(config('quickadmin.homeRoute'), 'QuickAdmin\QuickadminController@index');
    Route::group([
        'middleware' => 'role'
    ], function () {
        // Menu routing
        Route::get(config('quickadmin.route') . '/menu', [
            'as' => 'menu',
            'uses' => 'QuickAdmin\QuickadminMenuController@index'
        ]);
        Route::post(config('quickadmin.route') . '/menu', [
            'as' => 'menu',
            'uses' => 'QuickAdmin\QuickadminMenuController@rearrange'
        ]);

        Route::get(config('quickadmin.route') . '/menu/edit/{id}', [
            'as' => 'menu.edit',
            'uses' => 'QuickAdmin\QuickadminMenuController@edit'
        ]);
        Route::post(config('quickadmin.route') . '/menu/edit/{id}', [
            'as' => 'menu.edit',
            'uses' => 'QuickAdmin\QuickadminMenuController@update'
        ]);

        Route::get(config('quickadmin.route') . '/menu/crud', [
            'as' => 'menu.crud',
            'uses' => 'QuickAdmin\QuickadminMenuController@createCrud'
        ]);
        Route::post(config('quickadmin.route') . '/menu/crud', [
            'as' => 'menu.crud.insert',
            'uses' => 'QuickAdmin\QuickadminMenuController@insertCrud'
        ]);

        Route::get(config('quickadmin.route') . '/menu/parent', [
            'as' => 'menu.parent',
            'uses' => 'QuickAdmin\QuickadminMenuController@createParent'
        ]);
        Route::post(config('quickadmin.route') . '/menu/parent', [
            'as' => 'menu.parent.insert',
            'uses' => 'QuickAdmin\QuickadminMenuController@insertParent'
        ]);

        Route::get(config('quickadmin.route') . '/menu/custom', [
            'as' => 'menu.custom',
            'uses' => 'QuickAdmin\QuickadminMenuController@createCustom'
        ]);
        Route::post(config('quickadmin.route') . '/menu/custom', [
            'as' => 'menu.custom.insert',
            'uses' => 'QuickAdmin\QuickadminMenuController@insertCustom'
        ]);

        Route::get(config('quickadmin.route') . '/actions', [
            'as' => 'actions',
            'uses' => 'QuickAdmin\UserActionsController@index'
        ]);
        Route::get(config('quickadmin.route') . '/actions/ajax', [
            'as' => 'actions.ajax',
            'uses' => 'QuickAdmin\UserActionsController@table'
        ]);
    });
});

// Auth Route
Route::group([
    //'namespace'  => 'App\Http\Controllers',
    'middleware' => ['web']
], function () {
    // Point to App\Http\Controllers\UsersController as a resource
    Route::group([
        'middleware' => 'role'
    ], function () {
        Route::resource('users', 'UsersController');
        Route::resource('roles', 'RolesController');
    });

    // Authentication Routes...
    $this->get('login', 'Auth\AuthController@showLoginForm');
    $this->post('login', 'Auth\AuthController@login');
    $this->get('logout', 'Auth\AuthController@getLogout');

    // Registration Routes...
    $this->get('register', 'Auth\AuthController@showRegistrationForm');
    $this->post('register', 'Auth\AuthController@register');

    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Auth\PasswordController@reset');
});

// Api Route
Route::group(
    [
        'prefix' => '/api/v1',
        'namespace' => 'Api\V1',
        //'as' => 'api.',
        'middleware' => 'auth:api'
    ],
    function () {
            // User Route
        Route::resource('users', 'UsersController@index');
        Route::resource('users/get', 'UsersController@get');
        Route::resource('users/getAl', 'UsersController@getAll');
        Route::resource('users/create', 'UsersController@create');
        Route::resource('users/update', 'UsersController@update');
        Route::resource('users/delete', 'UsersController@delete');
    });