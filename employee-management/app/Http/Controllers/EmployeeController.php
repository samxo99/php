<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $employees = Employee::paginate(10);
        return view('employees.index', compact('employees'));
    }

    public function edit($id){
        $employee = Employee::findOrFail($id);
        return View ('employees.edit', compact('employee'));
    }



    public function update(Request $request, $id){
        $employee = Employee::findOrFail($id);

        $employee->update($request->all());
        return redirect('/index');

    }
    public function delete($id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->back();
    }

}
