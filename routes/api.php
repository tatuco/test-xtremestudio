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

Route::get('/', function (){
   return response()->json([
       "version"=> app()->version(),
       "time" => \Carbon\Carbon::now()
   ]);
});
Route::post('/auth/login', ['uses' => 'Auth\AuthController@login', 'as' => 'login']);
Route::post('/confirm/workpack', 'FileController@confirmedWorkPack');
Route::get('/confirmer/workpack/{id}', 'FileController@viewWorkPack');
Route::post('/logout', ['middleware' => ['jwt.auth'], 'uses' => 'Auth\AuthController@logout', 'as' => 'logout']);
Route::get('/validate', ['middleware' => ['jwt.auth'], 'uses' => 'Auth\AuthController@validate', 'as' => 'validate']);
Route::post('/password/email', 'Auth\ResetPasswordController@postEmail');
//Route::post('/password/create', 'Auth\PasswordResetController@create');
Route::get('/password/find/{token}', 'Auth\PasswordResetController@find');
//Route::post('/password/reset', 'Auth\PasswordResetController@reset');
Route::post('/password/reset', 'Auth\PasswordResetController@resetPass');
Route::post('/password/create', 'Auth\PasswordResetController@createTokenTemp');
Route::post('/password/change', 'Auth\PasswordResetController@changePassword');
Route::get('/notices', 'NoticeController@index');

Route::group([
    'middleware' => ['jwt.auth']
    ], function (){
        Route::post('email', 'FileController@email');
        Route::get('email/{id}/{user}', 'FileController@detentionEmail');
        Route::get('download/{file}', 'FileController@download');

        Route::post('acl/user/role', 'Acl\UserController@assignedRole')->middleware('permission:assigned.role');
        Route::get('acl/select/role', 'Acl\RoleController@selectRole')->middleware('permission:index.roles');
        Route::get('acl/select/permission', 'Acl\PermissionController@select')->middleware('permission:index.permissions');
        Route::get('acl/user/role/{user}/{role}', 'Acl\UserController@revokeRole')->middleware('permission:revoke.role');
        Route::post('acl/role/permission', 'Acl\RoleController@assignedPermission')->middleware('permission:assigned.permission');
        Route::get('acl/role/permission/{role}/{permission}', 'Acl\RoleController@revokePermission')->middleware('permission:revoke.permission');

        Route::get('acl/role', 'Acl\UserController@index')->middleware('permission:index.roles');
        Route::post('acl/role', 'Acl\UserController@index')->middleware('permission:store.roles');
        Route::put('acl/role/{id}', 'Acl\UserController@index')->middleware('permission:update.roles');
        Route::delete('acl/role/{id}', 'Acl\UserController@index')->middleware('permission:delete.roles');

        Route::get('acl/permission', 'Acl\UserController@index')->middleware('permission:index.permissions');
        Route::post('acl/permission', 'Acl\UserController@index')->middleware('permission:store.permissions');
        Route::put('acl/permission/{id}', 'Acl\UserController@index')->middleware('permission:update.permissions');
        Route::delete('acl/permission/{id}', 'Acl\UserController@index')->middleware('permission:delete.permissions');

        Route::get('user', 'Acl\UserController@index')->middleware('permission:index.users');
        Route::post('user', 'Acl\UserController@index')->middleware('permission:store.users');
        Route::put('user/{id}', 'Acl\UserController@index')->middleware('permission:update.users');
        Route::delete('user/{id}', 'Acl\UserController@index')->middleware('permission:delete.users');

        Route::get('project', 'ProjectController@index')->middleware('permission:index.projects');
        Route::post('project', 'ProjectController@index')->middleware('permission:store.projects');
        Route::put('project/{id}', 'ProjectController@index')->middleware('permission:update.projects');
        Route::delete('project/{id}', 'ProjectController@index')->middleware('permission:delete.projects');

        Route::get('account', 'AccountController@index')->middleware('permission:index.accounts');
        Route::post('account', 'AccountController@index')->middleware('permission:store.accounts');
        Route::put('account/{id}', 'AccountController@index')->middleware('permission:update.accounts');
        Route::delete('account/{id}', 'AccountController@index')->middleware('permission:delete.accounts');

        Route::get('probe', 'ProbeController@index')->middleware('permission:index.probes');
        Route::post('probe', 'ProbeController@index')->middleware('permission:store.probes');
        Route::put('probe/{id}', 'ProbeController@index')->middleware('permission:update.probes');
        Route::delete('probe/{id}', 'ProbeController@index')->middleware('permission:delete.probes');

        Route::get('box', 'Acl\UserController@index')->middleware('permission:index.boxes');
        Route::post('box', 'Acl\UserController@index')->middleware('permission:store.boxes');
        Route::put('box/{id}', 'Acl\UserController@index')->middleware('permission:update.boxes');
        Route::delete('box/{id}', 'Acl\UserController@index')->middleware('permission:delete.boxes');


        Route::group(['prefix' => 'select'], function () {

        });

        Route::group(['prefix' => 'charts'], function () {

        });

        Route::group(['prefix' => 'type'], function () {

        });

});


