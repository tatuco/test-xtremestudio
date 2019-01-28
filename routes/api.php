<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', ['uses' => 'Tatuco\AuthController@login', 'as' => 'login']);
Route::post('/logout', ['middleware' => ['jwt.auth'], 'uses' => 'Tatuco\AuthController@logout', 'as' => 'logout']);
Route::get('/validate', ['middleware' => ['jwt.auth'], 'uses' => 'Tatuco\AuthController@validate', 'as' => 'validate']);


Route::group([
    'middleware' => ['jwt.auth']
    ], function (){

        Route::resource('users', 'Tatuco\UserController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('roles', 'Tatuco\RoleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('permissions', 'Tatuco\PermissionController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('permissions/roles', 'Tatuco\PermissionRoleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::get('/backup', 'Tatuco\TatucoController@backup')->middleware('permission:run.backup');
        Route::post('users/role', 'Tatuco\UserController@assignedRole');
        Route::get('users/role/{user}/{role}', 'Tatuco\UserController@revokeRole');
        Route::post('roles/permission', 'Tatuco\RoleController@assignedPermission');
        Route::get('roles/permission/{role}/{permission}', 'Tatuco\RoleController@revokePermission');
        Route::get('roles/permission/{role}/{permission}', 'Tatuco\RoleController@revokePermission');
});
