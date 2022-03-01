@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.flash_messages')
            </div>
        </div>
        <h1 class="float-start">Manage Employees</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-success float-end">
            Create
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Company Name</th>
            </tr>
            </thead>
            <tbody>
            @forelse($employees as $key => $value)
                <tr>
                    <td>{{ $value->first_name }}</td>
                    <td>{{ $value->last_name }}</td>
                    <td>{{ $value->phone }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                        {{ $value->company->name }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="font-monospace text-center">There are no Employees.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {!! $employees->links() !!}
    </div>
@endsection
