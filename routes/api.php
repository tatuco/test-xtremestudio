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
Route::post('/prueba', function(){
   return response()->json(['respiesta' => 'soy la api'], 200);
});
Route::post('/login', ['uses' => 'Auth\AuthController@login', 'as' => 'login']);
Route::post('/logout', ['middleware' => ['jwt.auth'], 'uses' => 'Auth\AuthController@logout', 'as' => 'logout']);
Route::get('/validate', ['middleware' => ['jwt.auth'], 'uses' => 'Auth\AuthController@validate', 'as' => 'validate']);


Route::group([
    'middleware' => ['jwt.auth']
    ], function (){

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



        Route::group(['prefix' => 'select'], function () {
            Route::get('/companies', 'CompanyController@select');
            Route::get('/contracts', 'ContractsController@select');
        });

        Route::group(['prefix' => 'charts'], function () {
            Route::get('/fte', 'ChartController@fte');
            Route::get('/eecc', 'ChartController@eecc');
            Route::get('/ages', 'ChartController@ages');
        });
        
        Route::group(['prefix' => 'type'], function () {
            Route::resource('detention', 'DetentionTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
            Route::resource('file', 'FileTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
            Route::resource('person', 'PersonTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
            Route::resource('event', 'EventTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        });

/** routes para Company **/

Route::resource('companies', 'CompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);


/** routes para PersonType **/ 
 

 
/** routes para Person **/ 
 
Route::resource('people', 'PersonController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para Employee **/ 
 
Route::resource('employees', 'EmployeeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para Access **/ 
 
Route::resource('accesses', 'AccessController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para Contracts **/ 
 
Route::resource('contracts', 'ContractsController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para AdmContracts **/ 
 
Route::resource('admcontracts', 'AdmContractsController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para PeopleCompany **/ 
 
Route::resource('peoplecompanies', 'PeopleCompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para PositionCompany **/ 
 
Route::resource('positioncompanies', 'PositionCompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para Turn **/ 
 
Route::resource('turns', 'TurnController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para RequirementsCompany **/ 
 
Route::resource('requirementscompanies', 'RequirementsCompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para RequirementsPeople **/ 
 
Route::resource('requirementspeoples', 'RequirementsPeopleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
/** routes para AccessDetails **/ 
 
Route::resource('accessdetails', 'AccessDetailsController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
 
    /** routes para Employe **/
 
    Route::resource('employes', 'EmployeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

    /** routes para FileType **/



    /** routes para SubEvent **/

    Route::resource('subevents', 'SubEventController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

    /** routes para Event **/

    Route::resource('events', 'EventController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

    /** routes para Detention **/

    Route::resource('detentions', 'DetentionController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

    /** routes para File **/

    Route::resource('files', 'FileController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

    /** routes para DetentionEvent **/

    Route::resource('detentionevents', 'DetentionEventController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

    /** routes para DetentionType **/

});
 


 
