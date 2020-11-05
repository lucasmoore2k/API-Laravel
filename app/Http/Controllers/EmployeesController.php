<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;




class EmployeesController extends Controller
{

 public function listEmployees($company_id)
 {
    
    $data = Employee::byCompany($company_id)->get();

    return response()->json($data);
}

public function getEmployee(Request $request)
{
   
    

    $employee = Employee::findOrFail($request->employee_id);
    if($employee->company_id == $request->company_id){

        return $employee;
    }else{
        return response()->json(['message'=>'Employee not found!'],404);
    }
    
    
}

public function createEmployee(Request $request)
{
    $employee = new Employee($request->all());
    $employee->save();

    return $employee;
}

public function editEmployee(Request $request)
{
    $employee = Employee::findOrFail($request->employee_id);
    $employee->update($request->all());

    return $employee;
}

public function deleteEmployee(Request $request)
{
    Employee::findOrFail($request->employee_id)->delete();
}
}