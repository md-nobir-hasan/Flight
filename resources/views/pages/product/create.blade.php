@extends('layouts.app')
@push('title')
    Add Product
@endpush
@push('css_linking')
    @vite(['resources/js/app.js'])
@endpush

@push('custom_css')
<style>
    .ck-editor__editable {
    min-height: 250px;
}
</style>
@endpush

@section('container')
    <div class="container px-5">

        <div class="shadow-lg card">
            <div class="card-header">
                <h4 class="float-start">Add Product</h4>
                <h4 class="float-end">
                    <a href="{{ url()->previous() }}" class="text-decoration-none btn btn-info">Back</a>
                </h4>
            </div>
            <div class="p-5 card-body">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="m-auto w-md-75">
                        <div class="card">
                            <div class="card-body" x-data="{img:'/storage/default/image-icon.png',subcats:[],fetch(id){
                                axios.post('{{route('admin.fetch')}}',{id:id,mt:'SubCategory'}).then((res)=>{
                                    this.subcats = res.data
                                })
                            }}">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Product Name:</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="sku" class="form-label">SKU:</label>
                                        <input type="text" name="sku" class="form-control" id="sku"
                                            value="{{ old('sku') }}">
                                        @error('sku')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="short_des" class="form-label">Short Description:</label>
                                        <textarea name="short_des" id="short_des" cols="30" rows="6" class="form-control"
                                            placeholder="Short Description"> {{ old('short_des') }}</textarea>
                                        @error('short_des')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="des" class="form-label">Description:</label>
                                        <textarea name="des" id="des" cols="30" rows="6" class="form-control"
                                            placeholder="Short Description"> {{ old('des') }}</textarea>
                                        @error('des')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="category_id" class="form-label">Category:</label>
                                        <select x-on:change="fetch($event.target.value)" name="category_id" id="category_id" class="form-select">
                                            <option value="" hidden>Choose a category</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}"
                                                    @if ($cat->id == old('category_id')) selected @endif>{{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="col-md-12" >
                                        <label for="subcategory_id" class="form-label">Sub-category:</label>
                                        <select name="subcategory_id" id="subcategory_id" class="form-select ">
                                            <option value="" hidden>Choose a Sub-category</option>
                                            <template x-for="subcat in subcats" :key="subcat.id">
                                                <option x-text="subcat.name" :value="subcat.id"></option>
                                            </template>
                                        </select>
                                        @error('subcategory_id')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="price" class="form-label">Price:</label>
                                        <input type="number" name="price" class="form-control" id="price" step="1"
                                            value="{{ old('price') }}">
                                        @error('price')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="discount" class="form-label">Discount:</label>
                                        <input type="number" name="discount" class="form-control" id="discount" step="1"
                                            value="{{ old('discount') }}">
                                        @error('discount')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12" >
                                        <label for="img" class="form-label">Image:</label>
                                        <input type="file" name="img" x-on:change='img=URL.createObjectURL($event.target.files[0])' class="form-control" id="img"
                                            value="{{ old('img') }}" placeholder="Choose image">
                                        @error('img')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                        <div class="text-center">
                                            <img :src="img" alt="" class="mt-2 rounded img-thumbnail" height="200px" width="200px">

                                        </div>
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
<script src="{{asset('asset/ck-editor/ckeditor.js')}}"></script>
@endpush

@push('custom_js')
<script>
        ClassicEditor
        .create( document.querySelector( '#des' ))
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#short_des' ))
        .catch( error => {
            console.error( error );
        } );

</script>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}")
        @endif
        // toastr.success('kljfaskd')
    </>
@endpush
