<x-frontend-layout>

    <x-slot name='title'>Home page</x-slot>

    <div>
        <h1>I am home page frontend.layout.app</h1>
    </div>
    <div class="card">
      <div class="card-body">
           Yes, I am that you are looking for.
      </div>
    </div>


    <x-slot name='custom_stylesheet'>
    <link rel="stylesheet" href="{{asset('asset/bootstrap53.min.css')}}">
    </x-slot>

    <x-slot name='custom_js'>
    <link rel="stylesheet" href="{{asset('asset/bootstrap53.min.js')}}">
    </x-slot>
</x-frontend-layout>
