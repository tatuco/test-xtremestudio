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
        Route::post('confirmer/workpack', 'FileController@confirmedWorkpack');
        Route::get('download/{file}', 'FileController@download');
        Route::resource('user', 'Acl\UserController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('params', 'Acl\ParamController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('roles', 'Acl\RoleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('permissions', 'Acl\PermissionController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::resource('permissions/roles', 'Acl\RoleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        Route::post('users/role', 'Acl\UserController@assignedRole');
        Route::get('users/role/{user}/{role}', 'Acl\UserController@revokeRole');
        Route::post('roles/permission', 'Acl\RoleController@assignedPermission');
        Route::get('roles/permission/{role}/{permission}', 'Acl\RoleController@revokePermission');
        Route::get('roles/permission/{role}/{permission}', 'Acl\RoleController@revokePermission');
        Route::get('detentions/list', 'DetentionController@list');


        Route::group(['prefix' => 'select'], function () {
            Route::get('/companies', 'CompanyController@select');
            Route::get('/contracts', 'ContractsController@select');
            Route::get('/detentions', 'DetentionController@select');
            Route::get('/clasifications', 'ClasificationController@select');
        });

        Route::group(['prefix' => 'charts'], function () {
            Route::get('/fte', 'ChartController@fte');
            Route::get('/eecc', 'ChartController@eecc');
            Route::get('/ages', 'ChartController@ages');
            Route::get('/ultimates', 'ChartController@access12Hours');
        });

        Route::group(['prefix' => 'type'], function () {
            Route::resource('detention', 'DetentionTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
            Route::resource('file', 'FileTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
            Route::resource('person', 'PersonTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
            Route::resource('event', 'EventTypeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
        });

        Route::get('file/download', 'FileController@download');
        Route::post('event/file', 'EventController@assignFileEvent');
        Route::delete('file/destroy/{id}/{event}', 'FileController@fileDestroy');
        Route::get('detentions/clasification', 'DetentionController@clasifications');

Route::resource('companies', 'CompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('people', 'PersonController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('employees', 'EmployeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('accesses', 'AccessController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('contracts', 'ContractsController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('peoplecompanies', 'PeopleCompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('positioncompanies', 'PositionCompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('turns', 'TurnController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('requirementscompanies', 'RequirementsCompanyController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('requirementspeoples', 'RequirementsPeopleController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('accessdetails', 'AccessDetailsController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('employes', 'EmployeController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('subevents', 'SubEventController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('events', 'EventController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('detentions', 'DetentionController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('files', 'FileController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('statusevents', 'StatusEventController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Route::resource('notices', 'NoticeController', ['only' => ['store', 'update', 'destroy']]);
Route::resource('clasifications', 'ClasificationController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

});

/** routes para Account **/

Route::resource('accounts', 'AccountController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
