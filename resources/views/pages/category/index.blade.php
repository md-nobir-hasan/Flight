@extends('layouts.app')
@push('title')
    Category
@endpush
@push('css_linking')
    <link rel="stylesheet" href="style.css">
@endpush

@push('custom_css')
    <style>

    </style>
@endpush

@section('container')
    <div class="container">
        @isset($msg)
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endisset

        <div class="card">
            <div class="card-header">
                <h4 class="float-start">Category</h4>
                <h4 class="float-end">
                    <a href="{{ route('admin.category.create') }}" class="text-decoration-none">Add a new category</a>
                </h4>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="title" class="form-control" id="name">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary full-width">Create</button>
            </div>
            </form>
        </div>
    </div>
@endsection

@push('js_linking')
@endpush

@push('custom_js')
@endpush
