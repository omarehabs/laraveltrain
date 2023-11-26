@extends('layouts.master')

@section('title', 'Employees Page')

@section('main')
    <div class="alert alert-info text-center py-3 my-5 container w-50 fs-4">
        All Employees
    </div>

    <div class="container text-center my-5 ">
        @if (count($employees) > 0)
            <div class="row">
                @foreach ($employees as $employee)
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="card text-bg-light mb-3" style="max-width: 25rem;">
                            <div class="card-header">
                                {{ $employee->first_name . ' ' . $employee->last_name }}
                            </div>
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
                                <a href="{{ 'employees/' . $employee->id }}"
                                    class="btn btn-md btn-primary my-2 mx-1">show</a>
                                <a href="{{ 'edit/' . $employee->id }}" class="btn btn-md btn-success my-2 mx-1">edit</a>
                                <form action={{ 'delete/' . $employee->id }} method="GET">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"  class="btn btn-md btn-danger my-2 mx-1"/> delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @endif
        <div class="row my-4 d-flex justify-content-center">
            {{ $employees->links() }}
        </div>
    </div>
@endsection
