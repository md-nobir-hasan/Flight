 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>{{ ENV('APP_NAME') }} - @stack('title')</title>
     <link rel="stylesheet" href="{{ asset('asset/bootstrap53.min.css') }}" />
     <link rel="stylesheet" href="{{asset('asset/toastr/toastr.css')}}">
     @stack('css_linking')
     <style>
         #sidenav {
             width: 360px;
             height: 100vh;
             margin-left: -360px;
             transition: .5s;
         }

         #sidenav.nshow {
             margin-left: 0;
             transition: .5s;
         }

         #wrapper {
             margin-left: 0;
             transition: .5s;
         }

         #wrapper.nshow {
             margin-left: 360px;
             transition: .5s;
         }

         @media screen and (max-width:767px) {
             #sidenav {
                 margin-left: 0;
                 transition: .5s;
             }

             #sidenav.nshow {
                 margin-left: -360px;
                 transition: .5s;
             }

             #wrapper {
                 margin-left: 0px;
             }

             #wrapper.nshow {
                 margin-left: 0;
             }
         }
     </style>
     @stack('custom_css')
 </head>

 <body>
     <div class="position-fixed text-bg-dark nshow mobile_hide z-1" id="sidenav">
         <div class="py-2 text-center bg-black position-relative">
             <a href="" class="text-white fs-2 text-decoration-none fw-bold"> Brand Name</a>
             <span class="top-0 position-absolute end-0 bg-danger d-md-none" id="close_sidenav">
                 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                     class="bi bi-x-lg" viewBox="0 0 16 16">
                     <path
                         d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                 </svg>
             </span>
         </div>
         <ul class="nav nav-pills flex-column">
             <li class="nav-item">
                 <a href="#"
                     class="nav-link fw-bold fs-5 {{Request::is('admin.dashboard') ? 'active' : '' }}">Home</a>
             </li>
             <li class="nav-item">
                 <a href="{{ route('admin.category.index') }}"
                     class="nav-link fw-bold fs-5 {{ Request::is('admin.category.*') ? 'active' : '' }} text-decoration-none">Category</a>
             </li>
             <li class="nav-item">
                 <a href="#sn1" data-bs-toggle="collapse" class="nav-link fw-bold fs-5"
                     aria-expanded="false">Multiple component</a>
                 <div class="bg-black collapse" id="sn1">
                     <ul class="nav nav-pills flex-column ps-3">
                         <li class="nav-item">
                             <a href="components/form.html" class="nav-link fs-5">Form</a>
                         </li>
                         <li class="nav-item">
                             <a href="./components/report.html" class="nav-link fs-5">Report</a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link fs-5">Secondary menue</a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item">
                 <a href="" class="nav-link fw-bold fs-5">menu 3</a>
             </li>
         </ul>
     </div>
