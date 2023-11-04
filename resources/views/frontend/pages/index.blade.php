<x-frontend-layout>

    {{-- Page title  --}}
    <x-slot name='title'>Home page</x-slot>

    {{-- Custom Stylesheet  --}}
    <x-slot name='custom_stylesheet'>
        <link rel="stylesheet" href="{{asset('asset/bootstrap53.min.css')}}">
    </x-slot>

    {{-- Custom Stylesheet  --}}
    <x-slot name='custom_js'>
        <link rel="stylesheet" href="{{asset('asset/bootstrap53.min.js')}}">
    </x-slot>



    <!-- Offer image  -->

    <div class="relative">
        <img class="w-full object-cover brightness-50 filter lg:h-[500px]"
            src="storage/product/header-bg.6b2a5943.jpeg" alt="Living room image">

        <div
            class="absolute top-1/2 left-1/2 mx-auto flex w-11/12 max-w-[1200px] -translate-x-1/2 -translate-y-1/2 flex-col text-center text-white lg:ml-5">
            <h1 class="text-4xl font-bold sm:text-5xl lg:text-left">
                Best Collection for Home decoration
            </h1>
            <p class="pt-3 text-xs lg:w-3/5 lg:pt-5 lg:text-left lg:text-base">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur
                aperiam natus, nulla, obcaecati nesciunt, itaque adipisci earum
                ducimus pariatur eaque labore.
            </p>
            <button
                class="mx-auto mt-5 w-1/2 bg-amber-400 px-3 py-1 text-black duration-100 hover:bg-yellow-300 lg:mx-0 lg:h-10 lg:w-2/12 lg:px-10">
                Order Now
            </button>
        </div>
    </div>

    <!-- /Offer image  -->

    <!-- Cons bages -->

    <section class="container mx-auto my-8 flex flex-col justify-center gap-3 lg:flex-row">
        <!-- 1 -->

        <div class="mx-5 flex flex-row items-center justify-center border-2 border-yellow-400 py-4 px-5">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6 text-violet-900 lg:mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12">
                    </path>
                </svg>
            </div>

            <div class="ml-6 flex flex-col justify-center">
                <h3 class="text-left text-xs font-bold lg:text-sm">Free Delivery</h3>
                <p class="text-light text-center text-xs lg:text-left lg:text-sm">
                    Orders from $200
                </p>
            </div>
        </div>

        <!-- 2 -->

        <div class="mx-5 flex flex-row items-center justify-center border-2 border-yellow-400 py-4 px-5">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6 text-violet-900 lg:mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z">
                    </path>
                </svg>
            </div>

            <div class="ml-6 flex flex-col justify-center">
                <h3 class="text-left text-xs font-bold lg:text-sm">Money returns</h3>
                <p class="text-light text-left text-xs lg:text-sm">
                    30 Days guarantee
                </p>
            </div>
        </div>

        <!-- 3 -->

        <div class="mx-5 flex flex-row items-center justify-center border-2 border-yellow-400 py-4 px-5">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6 text-violet-900 lg:mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z">
                    </path>
                </svg>
            </div>

            <div class="ml-6 flex flex-col justify-center">
                <h3 class="text-left text-xs font-bold lg:text-sm">24/7 Supports</h3>
                <p class="text-light text-left text-xs lg:text-sm">
                    Consumer support
                </p>
            </div>
        </div>
    </section>

    <!-- /Cons bages  -->

    <h2 class="mx-auto mb-5 max-w-[1200px] px-5">SHOP BY CATHEGORY</h2>

    <!-- Cathegories -->
    <section class="mx-auto grid max-w-[1200px] grid-cols-2 px-5 lg:grid-cols-3 lg:gap-5">
        <!-- 1 -->

        <a href="#">
            <div class="relative cursor-pointer">
                <img class="mx-auto h-auto w-auto brightness-50 duration-300 hover:brightness-100"
                    src="storage/product/bedroom.50988bc9.png" alt="bedroom cathegory image">

                <p
                    class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white lg:text-xl">
                    Bedroom
                </p>
            </div>
        </a>

        <!-- 2 -->

        <a href="#">
            <div class="relative cursor-pointer">
                <img class="mx-auto h-auto w-auto brightness-50 duration-300 hover:brightness-100"
                    src="storage/product/matrass.7d5e26e0.png" alt="Matrass cathegory image">

                <p
                    class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white lg:text-xl">
                    Matrass
                </p>
            </div>
        </a>

        <!-- 3  -->

        <a href="#">
            <div class="relative cursor-pointer">
                <img class="mx-auto h-auto w-auto brightness-50 duration-300 hover:brightness-100"
                    src="storage/product/outdoors.f59c9c66.png" alt="kitchen cathegory image">

                <p
                    class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white lg:text-xl">
                    Outdoor
                </p>
            </div>
        </a>

        <!-- 4 -->

        <a href="#">
            <div class="relative cursor-pointer">
                <img class="mx-auto h-auto w-auto brightness-50 duration-300 hover:brightness-100"
                    src="storage/product/product-bigsofa.108e8435.png" alt="bedroom cathegory image">

                <p
                    class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white lg:text-xl">
                    Sofa
                </p>
            </div>
        </a>

        <!-- 5  -->

        <a href="#">
            <div class="relative cursor-pointer">
                <img class="mx-auto h-auto w-auto brightness-50 duration-300 hover:brightness-100"
                    src="storage/product/kitchen.3fb766a4.png" alt="bedroom cathegory image">

                <p
                    class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white lg:text-xl">
                    Kitchen
                </p>
            </div>
        </a>

        <!-- 6 -->

        <a href="#">
            <div class="relative cursor-pointer">
                <img class="mx-auto h-auto w-auto brightness-50 duration-300 hover:brightness-100"
                    src="storage/product/living-room.7fafab49.png" alt="bedroom cathegory image">

                <p
                    class="pointer-events-none absolute top-1/2 left-1/2 w-11/12 -translate-x-1/2 -translate-y-1/2 text-center text-white lg:text-xl">
                    Living room
                </p>
            </div>
        </a>
    </section>
    <!-- /Cathegories  -->

    <!-- /Slider  -->

    <p class="mx-auto mt-10 mb-5 max-w-[1200px] px-5">TOP NEW ARRIVAL</p>

    <!-- Slider  -->

    <section class="splide mx-auto max-w-[1200px] px-5 py-2" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list mx-auto max-w-[1200px]">
                <!-- 1 -->
                <li class="splide__slide">
                    <div class="flex flex-col">
                        <img class="" src="storage/product/product-bigsofa.108e8435.png" alt="sofa image">

                        <div>
                            <p class="mt-2">GUYER CHAIR</p>
                            <p class="font-medium text-violet-900">
                                $45.00
                                <span class="text-sm text-gray-500 line-through">$500.00</span>
                            </p>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-gray-200">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-400">(38)</p>
                            </div>

                            <div>
                                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- 2 -->
                <li class="splide__slide">
                    <div class="flex flex-col">
                        <img class="" src="storage/product/product-chair.f690d528.png" alt="Chair image">

                        <div>
                            <p class="mt-2">PURPLE CHAIR</p>
                            <p class="font-medium text-violet-900">
                                $45.00
                                <span class="text-sm text-gray-500 line-through">$500.00</span>
                            </p>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-gray-200">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-400">(38)</p>
                            </div>

                            <div>
                                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- 3 -->
                <li class="splide__slide">
                    <div class="flex flex-col">
                        <img class="" src="storage/product/product-sofa.14c399c2.png" alt="Sofa image">

                        <div>
                            <p class="mt-2">LARGE SOFA</p>
                            <p class="font-medium text-violet-900">
                                $45.00
                                <span class="text-sm text-gray-500 line-through">$500.00</span>
                            </p>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-gray-200">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-400">(38)</p>
                            </div>

                            <div>
                                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- 4 -->

                <li class="splide__slide">
                    <div class="flex flex-col">
                        <img class="" src="storage/product/kitchen.3fb766a4.png" alt="Kitchen image">

                        <div>
                            <p class="mt-2">PERFECTO KITCHEN</p>
                            <p class="font-medium text-violet-900">
                                $45.00
                                <span class="text-sm text-gray-500 line-through">$500.00</span>
                            </p>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-gray-200">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-400">(38)</p>
                            </div>

                            <div>
                                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- 5 -->

                <li class="splide__slide">
                    <div class="flex flex-col">
                        <img class="" src="storage/product/matrass.7d5e26e0.png" alt="Matrass image">

                        <div>
                            <p class="mt-2">MATRASS COMFORT +</p>
                            <p class="font-medium text-violet-900">
                                $45.00
                                <span class="text-sm text-gray-500 line-through">$500.00</span>
                            </p>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-gray-200">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-400">(38)</p>
                            </div>

                            <div>
                                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- 6 -->

                <li class="splide__slide">
                    <div class="flex flex-col">
                        <img class="" src="storage/product/bedroom.50988bc9.png" alt="Bedroom image">

                        <div>
                            <p class="mt-2">QUEEN SIZE BED</p>
                            <p class="font-medium text-violet-900">
                                $45.00
                                <span class="text-sm text-gray-500 line-through">$500.00</span>
                            </p>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-yellow-400">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                                    class="h-4 w-4 text-gray-200">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm text-gray-400">(38)</p>
                            </div>

                            <div>
                                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Special offer card -->

    <div class="mx-auto max-w-[1200px] px-5">
        <section class="mt-10 flex max-w-[1200px] justify-between bg-violet-900 px-5">
            <div class="py-8 px-3 lg:px-16">
                <p class="text-white">ONLINE EXCLUSIVE</p>
                <h2 class="pt-6 text-5xl font-bold text-yellow-400">15% OFF</h2>
                <p class="pt-4 text-white">
                    ACCENT CHAIRS, <br>
                    TABLES & OTTOMANS
                </p>
                <button href="#" class="mt-6 bg-amber-400 px-4 py-2 duration-100 hover:bg-yellow-300">
                    Shop now
                </button>
            </div>

            <img class="-mr-5 hidden w-[550px] object-cover md:block" src="storage/product/sale-bage.b3539327.jpeg"
                alt="Rainbow credit card with macbook on a background">
        </section>
    </div>

    <!-- /Special offer card -->

    <p class="mx-auto mt-10 mb-5 max-w-[1200px] px-5">RECOMMENDED FOR YOU</p>

    <!-- Recommendations -->
    <section class="mx-auto grid max-w-[1200px] grid-cols-2 gap-3 px-5 pb-10 lg:grid-cols-4">

        @foreach ($products as $product)
            <x-products :product="$product"/>
        @endforeach
{{--
         <!-- 1 -->
        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/product-chair.f690d528.png" alt="sofa image">
                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">CHAIR</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- 2 -->

        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/product-sofa.14c399c2.png" alt="sofa image">

                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">SOFA</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- 3 -->

        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/kitchen.3fb766a4.png" alt="kitchen image">
                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">GUYER KITCHEN</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- 4 -->

        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/living-room.7fafab49.png" alt="living room image">
                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">GUYER ROOM</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- 5 -->

        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/bedroom.50988bc9.png" alt="Bedroom image">
                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">BEDROOM</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- 6 -->

        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/header-bg.6b2a5943.jpeg" alt="living room image">
                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">LIVING GUYER</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- 7 -->

        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/outdoors.f59c9c66.png" alt="Outdoors image">
                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">STREET CHAIR</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        <!-- 8 -->

        <div class="flex flex-col">
            <div class="relative flex">
                <img class="" src="storage/product/product-bigsofa.108e8435.png" alt="sofa image">
                <div
                    class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                    <a href="/product-overview.html">
                        <span
                            class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg>
                        </span>
                    </a>
                    <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                    <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                </div>
            </div>

            <div>
                <p class="mt-2">WHITE SOFA</p>
                <p class="font-medium text-violet-900">
                    $45.00
                    <span class="text-sm text-gray-500 line-through">$500.00</span>
                </p>

                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-yellow-400">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        class="h-4 w-4 text-gray-200">
                        <path fill-rule="evenodd"
                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-gray-400">(38)</p>
                </div>

                <div>
                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                        Add to cart
                    </button>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- /Recommendations -->


</x-frontend-layout>
