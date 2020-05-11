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
    //'middleware' => ['jwt.auth']
    'middleware' => ['api']
    ], function (){

    Route::group(['middleware' => ['role:sysadmin']], function (){
        Route::post('acl/user/role', 'Acl\UserController@assignedRole');
        Route::get('acl/select/permission', 'Acl\PermissionController@select');
        Route::get('acl/user/role/{user}/{role}', 'Acl\UserController@revokeRole');
        Route::post('acl/role/permission', 'Acl\RoleController@assignedPermission');
        Route::get('acl/role/permission/{role}/{permission}', 'Acl\RoleController@revokePermission');
        Route::get('acl/select/role', 'Acl\RoleController@selectRole');

        Route::get('acl/role', 'Acl\RoleController@index');
        Route::post('acl/role', 'Acl\RoleController@store');
        Route::put('acl/role/{id}', 'Acl\RoleController@update');
        Route::delete('acl/role/{id}', 'Acl\RoleController@destroy');

        Route::get('acl/permission', 'Acl\PermissionController@index');
        Route::post('acl/permission', 'Acl\PermissionController@store');
        Route::put('acl/permission/{id}', 'Acl\PermissionController@update');
        Route::delete('acl/permission/{id}', 'Acl\PermissionController@destroy');

        Route::get('accounts', 'AccountController@index');
        Route::post('accounts', 'AccountController@store');
        Route::put('accounts/{id}', 'AccountController@update');
        Route::delete('accounts/{id}', 'AccountController@destroy');
    });

    Route::group(['middleware' => ['role:admin,sysadmin']], function (){
        Route::post('users', 'Acl\UserController@store');
        Route::put('users/{id}', 'Acl\UserController@update');
        Route::delete('users/{id}', 'Acl\UserController@destroy');
        Route::get('users/select/role', 'Acl\RoleController@selectRoleNotSysadmin');

        Route::post('projects', 'ProjectController@store');
        Route::put('projects/{id}', 'ProjectController@update');
        Route::delete('projects/{id}', 'ProjectController@destroy');

        Route::post('sectors', 'SectorController@store');
        Route::put('sectors/{id}', 'SectorController@update');
        Route::delete('sectors/{id}', 'SectorController@destroy');
        Route::put('racks/box/{id}', 'SectorController@updateRack');


       // Route::post('boxes', 'Acl\UserController@store');
       // Route::put('boxes/{id}', 'Acl\UserController@update');
       // Route::delete('boxes/{id}', 'Acl\UserController@destroy');
        Route::put('racks/import/{id}', 'SectorController@updateImportBoxes');
        Route::put('sectors/references/{id}', 'SectorController@updateReferences');
        Route::post('typeracks', 'TypeRackController@store');
        Route::put('typeracks/{id}', 'TypeRackController@update');
        Route::delete('typeracks/{id}', 'TypeRackController@destroy');

    });

    Route::group(['middleware' => ['role:operator,admin,sysadmin']], function (){
        Route::get('projects', 'ProjectController@index');
        Route::get('probes', 'ProbeController@index');
        Route::get('boxes', 'Acl\UserController@index');
        Route::get('users', 'Acl\UserController@index');
        Route::get('sectors', 'SectorController@index');
        Route::get('sectors/racks/{id}', 'SectorController@findRacks');
        Route::get('typeracks', 'TypeRackController@index');
    });

        Route::group(['prefix' => 'select'], function () {

        });

        Route::group(['prefix' => 'charts'], function () {

        });

        Route::group(['prefix' => 'type'], function () {

        });
  //  Route::resource('typeracks', 'TypeRackController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
});



