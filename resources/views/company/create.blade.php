@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add new Company
                <a href="{{ route('companies.index') }}" class="btn btn-warning float-end">
                    Back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    @include('company.form')
                </form>
            </div>
        </div>
    </div>
@endsection
