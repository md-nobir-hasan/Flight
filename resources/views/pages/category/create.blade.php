@extends('layouts.app')
@push('title')
    Add Category
@endpush
@push('css_linking')
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
                <h4 class="float-start">Add Category</h4>
                <h4 class="float-end">
                    <a href="{{ url()->previous() }}" class="text-decoration-none">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="title" class="form-control" id="name" value="{{old('title')}}">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

            </div>
            <div class="text-center card-footer">
                <button type="submit" class="btn btn-primary full-width">Add</button>
            </div>
            </form>
        </div>
    </div>

@endsection

@push('js_linking')
@endpush

@push('custom_js')
<script>

    @if(session('success'))
        toastr.success("{{session('success')}}")
    @endif
    // toastr.success('kljfaskd')
</script>
@endpush
