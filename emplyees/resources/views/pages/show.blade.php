@extends('layouts.master')

@section('title', 'Employee')

@section('main')
    <div class="alert alert-primary text-center
     py-3 my-5 container w-50 fs-4">
     {{ $employee->first_name . ' ' . $employee->last_name }}
        <div class="card text-bg-light mt-3">
            
            <div class="card-header">
                <strong class="text-warning">{{ $employee->job }}</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    Salary: {{ $employee->salary }}
                </h5>
                <hr>
                <p class="card-text">
                    {{ $employee->phone_number }}
                </p>
                <hr>
                <div class="alert alert-secondary rounded py-3 my-3">
                    Hired At {{ $employee->created_at->format('d-m-Y') }} By <br>
                </div>
                <hr>
                <a href="{{'/edit/'. $employee->id}}" class="btn btn-md btn-success my-2 mx-1">edit</a>
                <form action={{ '/delete/' . $employee->id }} method="GET">
                    @csrf
                    @method('DELETE')

                    <button type="submit"  class="btn btn-md btn-danger my-2 mx-1"/> delete</button>
                </form>
            </div>
            {{-- </div> --}}
        </div>

    </div>
@endsection
