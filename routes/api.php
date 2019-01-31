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
Route::post('/login', ['uses' => 'Auth\AuthController@login', 'as' => 'login']);
Route::post('/logout', ['middleware' => ['jwt.auth'], 'uses' => 'Auth\AuthController@logout', 'as' => 'logout']);
Route::get('/validate', ['middleware' => ['jwt.auth'], 'uses' => 'Auth\AuthController@validate', 'as' => 'validate']);


//Route::group([
//    'middleware' => ['jwt.auth']
//    ], function (){

        Route::resource('users', 'Acl\UserController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('params', 'Acl\ParamController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('roles', 'Acl\RoleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('permissions', 'Acl\PermissionController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('permissions/roles', 'Acl\PermissionRoleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::post('users/role', 'Acl\UserController@assignedRole');
        Route::get('users/role/{user}/{role}', 'Acl\UserController@revokeRole');
        Route::post('roles/permission', 'Acl\RoleController@assignedPermission');
        Route::get('roles/permission/{role}/{permission}', 'Acl\RoleController@revokePermission');
        Route::get('roles/permission/{role}/{permission}', 'Acl\RoleController@revokePermission');
//});
 

 
/** routes para Company **/

Route::resource('companies', 'CompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);


/** routes para PersonType **/ 
 
Route::resource('persontypes', 'PersonTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para Person **/ 
 
Route::resource('people', 'PersonController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para Employee **/ 
 
Route::resource('employees', 'EmployeeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para Access **/ 
 
Route::resource('accesses', 'AccessController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
