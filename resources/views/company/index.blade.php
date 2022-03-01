@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('layouts.flash_messages')
            </div>
        </div>
        <h1 class="float-start">Manage Companies</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-success float-end">
            Create
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
                <th width="300px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($companies as $key => $value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                        <img src="{{ Storage::url($value->logo) }}" alt="{{ $value->logo }}" class="img-thumbnail">
                    </td>
                    <td>
                        <a href="{{ $value->website }}" target="_blank">{{ $value->website }}</a>
                    </td>
                    <td>
                        <div class="btn-group float-end">
                            <a href="{{ route('employees.index',['company_id'=>$value->id]) }}"
                               class="btn btn-info btn-sm">
                                Employees
                            </a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="font-monospace text-center">There are no Companies.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {!! $companies->links() !!}
    </div>
@endsection
