<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/style.css') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="/storage/product/apple-touch-icon.69428293.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/product/favicon-32x32.8818b031.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/product/favicon-16x16.196eacaf.png">
    <link rel="mask-icon" href="/storage/product/safari-pinned-tab.43f69cb9.svg" color="#207891">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    @vite(['resources/js/app.js']);
    <title>{{$title}} || {{ENV('APP_NAME')}}</title>
    {!! $custom_stylesheet !!}
</head>
    <x-top-header/>

        {{ $slot }}

    <x-footer />

    <script src="{{asset('asset/toastr/toastr-helper.js')}}"></script>
    <script src="{{asset('asset/toastr/toastr.js')}}"></script>
        <script>
            function save(id){
                axios.post("{{route('save')}}",{id:id,mt:"Cart"}).then((res)=>{
                    if(res){
                        toastr.success('Susscessfully added')
                    }else{
                        taostr.error("Cant't added")
                    }
                })
            }
        </script>
    {!! $custom_js !!}
</body>

</html>
