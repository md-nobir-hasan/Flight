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
    <div class="container px-5">
        @isset($msg)
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endisset

        <div class="shadow-lg card">
            <div class="card-header">
                <h4 class="float-start">Add Category</h4>
                <h4 class="float-end">
                    <a href="{{ url()->previous() }}" class="text-decoration-none btn btn-info">Back</a>
                </h4>
            </div>
            <div class="p-5 card-body" >
                <form  action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="m-auto w-md-75">
                        <div class="card">
                        <div class="card-body">
                            <div class="row g-3">
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
                            <div class="text-center">
                                <button type="submit" class="mt-5 w-75 btn btn-primary">Add</button>
                            </div>
                        </div>
                        {{-- <div class="text-center card-footer">

                        </div> --}}
                    </div>

                    </div>
                </form>
            </div>


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
