@extends('layouts.master')

@section('title', 'Add Employee Page')

@section('main')

    <form action={{ '/update-employee/' . $employee->id }} method="POST">
        @csrf
        @method('DELETE')

    </form>

@endsection
