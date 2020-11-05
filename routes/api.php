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

Route::group(['prefix' => 'company/'], function ($router) {

	//companies

	$router->get('/','CompanyController@listCompanies');
	$router->post('/','CompanyController@createCompany');
	$router->get('/{company_id}','CompanyController@getCompany');
	$router->post('/{company_id}','CompanyController@editCompany');
	$router->delete('/{company_id}','CompanyController@deleteCompany');

	//

	$router->get('{company_id}/employee','EmployeesController@listEmployees');
    $router->post('{company_id}/employee','EmployeesController@createEmployee');
    $router->get('{company_id}/employee/{employee_id}/','EmployeesController@getEmployee');
    $router->post('{company_id}/employee/{employee_id}','EmployeesController@editEmployee');
    $router->delete('{company_id}/employee/{employee_id}','EmployeesController@deleteEmployee');



});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
