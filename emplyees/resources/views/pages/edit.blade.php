@extends('layouts.master')

@section('title', 'Add Employee Page')

@section('main')
    <div class="alert alert-primary text-center
     py-3 my-5 container w-50 fs-4">
        Edit Employee
    </div>

    <div class="container my-5 w-50 mx-auto">
        <form action={{ '/update-employee/' . $employee->id }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group my-3">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first-name" name="first_name" value={{ $employee->first_name }}>
            </div>

            <div class="form-group my-3">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="last_name" value={{ $employee->last_name }}>
            </div>

            <div class="form-group my-3">
                <label for="job">Job</label>
                <input type="text" class="form-control" id="job" name="job" value={{ $employee->job }}>
            </div>
            <div class="form-group my-3">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number"
                    value={{ $employee->phone_number }}>
            </div>

            <div class="form-group my-3">
                <label for="salary">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary" value={{ $employee->salary }}>
            </div>


            <input type="submit" value="Edit Employee" class="btn btn-dark my-2">
        </form>
    </div>
@endsection
