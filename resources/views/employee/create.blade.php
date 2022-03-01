@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add new Employee
                <a href="{{ route('employees.index') }}" class="btn btn-warning float-end">
                    Back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    @include('employee.form')
                </form>
            </div>
        </div>
    </div>
@endsection
