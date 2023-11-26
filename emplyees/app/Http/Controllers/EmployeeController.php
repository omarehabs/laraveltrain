<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        // $employees = employee::all();
        $employees = Employee::orderBy('id')->simplePaginate(12);
        return view('pages.employees', compact('employees'));
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        // return view('pages.employees');
        return view('pages.show', compact('employee'));
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        // return view('pages.employees');
        return view('pages.edit', compact('employee'));
    }

    // Add New employee
    public function store(Request $request)
    {
        // Validate Form Data
        $request->validate([
            'first_name' => 'required|max:24',
            'last_name' => 'required',
            'job' => 'required',
            'salary' => 'required',
            'phone_number' => 'required',

        ]);
        //  Create New Object
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->salary = $request->salary;
        $employee->job = $request->job;
        $employee->phone_number = $request->phone_number;
        //  Save employee
        $employee->save();
        // Redirect /employees
        return redirect('/employees');
    }
    public function update($id, Request $request)
    {
        // Validate Form Data
        $request->validate([
            'first_name' => 'required|max:24',
            'last_name' => 'required',
            'job' => 'required',
            'salary' => 'required',
            'phone_number' => 'required',

        ]);
        //  Create New Object
        $employee = Employee::find($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->salary = $request->salary;
        $employee->job = $request->job;
        $employee->phone_number = $request->phone_number;
        //  Save employee
        $employee->save();
        // Redirect /employees
        return redirect('/employees');
    }
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return   redirect('./');
    }
}
