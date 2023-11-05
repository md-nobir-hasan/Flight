
<body x-data="{ desktopMenuOpen: false, mobileMenuOpen: false }">
    <!-- Header -->
    <header class="mx-auto flex h-16 max-w-[1200px] items-center justify-between px-5">
        <a href="{{route('home')}}">
            <img class="cursor-pointer sm:h-auto sm:w-auto" src="storage/product/company-logo.3dc1d5f6.svg"
                alt="company logo">
        </a>

        <div class="md:hidden">
            <button @click="mobileMenuOpen = ! mobileMenuOpen">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </button>
        </div>

        <form class="items-center hidden w-2/5 border h-9 md:flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 mx-3">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
            </svg>

            <input class="hidden w-11/12 outline-none md:block" type="search" placeholder="Search">

            <button class="h-full px-4 ml-auto bg-amber-400 hover:bg-yellow-300">
                Search
            </button>
        </form>

        <div class="hidden gap-3 md:!flex">
            <a href="/wishlist.html" class="flex flex-col items-center justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                    </path>
                </svg>

                <p class="text-xs">Wishlist</p>
            </a>

            <a href="{{route('cart')}}" class="flex flex-col items-center justify-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                        clip-rule="evenodd"></path>
                </svg>

                <p class="text-xs">Cart</p>
            </a>

            <a href="/account-page.html" class="relative flex flex-col items-center justify-center cursor-pointer">
                <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                    <span
                        class="absolute inline-flex w-full h-full bg-red-400 rounded-full opacity-75 animate-ping"></span>
                    <span class="relative inline-flex w-2 h-2 bg-red-500 rounded-full"></span>
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                    </path>
                </svg>

                <p class="text-xs">Account</p>
            </a>
        </div>
    </header>
    <!-- /Header -->

    <!-- Burger menu  -->
    <section x-show="mobileMenuOpen" @click.outside="mobileMenuOpen = false"
        class="absolute left-0 right-0 z-50 w-full h-screen bg-white" style="display: none">
        <div class="mx-auto">
            <div class="flex justify-center w-full gap-3 py-4 mx-auto">
                <a href="/wishlist.html" class="flex flex-col items-center justify-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                        </path>
                    </svg>

                    <p class="text-xs">Wishlist</p>
                </a>

                <a href="/cart.html" class="flex flex-col items-center justify-center cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <p class="text-xs">Cart</p>
                </a>

                <a href="/account-page.html"
                    class="relative flex flex-col items-center justify-center cursor-pointer">
                    <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                        <span
                            class="absolute inline-flex w-full h-full bg-red-400 rounded-full opacity-75 animate-ping"></span>
                        <span class="relative inline-flex w-2 h-2 bg-red-500 rounded-full"></span>
                    </span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                        </path>
                    </svg>

                    <p class="text-xs">Account</p>
                </a>
            </div>

            <form class="flex items-center mx-5 my-4 border h-9">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 mx-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>

                <input class="hidden w-11/12 outline-none md:block" type="search" placeholder="Search">

                <button type="submit" class="h-full px-4 ml-auto bg-amber-400 hover:bg-yellow-300">
                    Search
                </button>
            </form>
            <ul class="font-medium text-center">
                <li class="py-2"><a href="/index.html">Home</a></li>
                <li class="py-2"><a href="/catalog.html">Catalog</a></li>
                <li class="py-2"><a href="/about-us.html">About Us</a></li>
                <li class="py-2"><a href="/contact-us.html">Contact Us</a></li>
            </ul>
        </div>
    </section>
    <!-- /Burger menu  -->

    <!-- Nav bar -->
    <!-- hidden on small devices -->

    <nav class="relative bg-violet-900">
        <div class="mx-auto hidden h-12 w-full max-w-[1200px] items-center md:flex">
            <button @click="desktopMenuOpen = ! desktopMenuOpen"
                class="flex items-center justify-center w-40 h-full ml-5 cursor-pointer bg-amber-400">
                <div class="flex justify-around" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mx-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>

                    All categories
                </div>
            </button>

            <div class="flex gap-8 mx-7">
                <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                    href="/index.html">Home</a>
                <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                    href="/catalog.html">Catalog</a>
                <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                    href="/about-us.html">About Us</a>
                <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                    href="/contact-us.html">Contact Us</a>
            </div>
            @auth
                <div class="flex gap-4 px-5 ml-auto">
                    <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                        href="{{route('logout')}}">Logout</a>
                </div>
            @else
                <div class="flex gap-4 px-5 ml-auto">
                    <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                        href="{{route('login')}}">Login</a>

                    <span class="text-white">&#124;</span>

                    <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                        href="{{route('register')}}">Sign Up</a>
                </div>
            @endauth
        </div>
    </nav>
    <!-- /Nav bar -->

    <!-- Menu  -->
    <section x-show="desktopMenuOpen" @click.outside="desktopMenuOpen = false"
        class="absolute left-0 right-0 z-10 w-full bg-white border-b border-l border-r" style="display: none">
        <div class="mx-auto flex max-w-[1200px] py-10">
            <div class="w-[300px] border-r">
                <ul class="px-5">
                    <li class="flex items-center gap-2 px-3 py-2 active:blue-900 bg-amber-400 active:bg-amber-400">
                        <img width="15px" height="15px" src="storage/product/bed.04cf3a64.svg"
                            alt="Bedroom icon">
                        Bedroom
                        <span class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </span>
                    </li>

                    <li
                        class="flex items-center gap-2 px-3 py-2 active:blue-900 hover:bg-neutral-100 active:bg-amber-400">
                        <img width="15px" height="15px" src="storage/product/sleep.9a0124df.svg"
                            alt="bedroom icon">
                        Matrass
                        <span class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </span>
                    </li>

                    <li
                        class="flex items-center gap-2 px-3 py-2 active:blue-900 hover:bg-neutral-100 active:bg-amber-400">
                        <img width="15px" height="15px" src="storage/product/outdoor.6bcefbeb.svg"
                            alt="bedroom icon">
                        Outdoor
                        <span class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </span>
                    </li>

                    <li
                        class="flex items-center gap-2 px-3 py-2 active:blue-900 hover:bg-neutral-100 active:bg-amber-400">
                        <img width="15px" height="15px" src="storage/product/sofa.388e9859.svg"
                            alt="bedroom icon">
                        Sofa
                        <span class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </span>
                    </li>

                    <li
                        class="flex items-center gap-2 px-3 py-2 active:blue-900 hover:bg-neutral-100 active:bg-amber-400">
                        <img width="15px" height="15px" src="storage/product/kitchen.32f46d4a.svg"
                            alt="bedroom icon">
                        Kitchen
                        <span class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </span>
                    </li>

                    <li
                        class="flex items-center gap-2 px-3 py-2 active:blue-900 hover:bg-neutral-100 active:bg-amber-400">
                        <img width="15px" height="15px" src="storage/product/food.f539762e.svg" alt="Food icon">
                        Living room
                        <span class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="flex justify-between w-full">
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">BEDS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="/product-overview.html">Italian bed</a></li>
                            <li><a href="/product-overview.html">Queen-size bed</a></li>
                            <li><a href="/product-overview.html">Wooden craft bed</a></li>
                            <li><a href="/product-overview.html">King-size bed</a></li>
                        </ul>
                    </div>

                    <div class="mx-5">
                        <p class="font-medium text-gray-500">LAMPS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="/product-overview.html">Italian Purple Lamp</a></li>
                            <li><a href="/product-overview.html">APEX Lamp</a></li>
                            <li><a href="/product-overview.html">PIXAR lamp</a></li>
                            <li><a href="/product-overview.html">Ambient Nightlamp</a></li>
                        </ul>
                    </div>

                    <div class="mx-5">
                        <p class="font-medium text-gray-500">BEDSIDE TABLES</p>
                        <ul class="text-sm leading-8">
                            <li><a href="/product-overview.html">Purple Table</a></li>
                            <li><a href="/product-overview.html">Easy Bedside</a></li>
                            <li><a href="/product-overview.html">Soft Table</a></li>
                            <li><a href="/product-overview.html">Craft Table</a></li>
                        </ul>
                    </div>

                    <div class="mx-5">
                        <p class="font-medium text-gray-500">SPECIAL</p>
                        <ul class="text-sm leading-8">
                            <li><a href="/product-overview.html">Humidifier</a></li>
                            <li><a href="/product-overview.html">Bed Cleaner</a></li>
                            <li><a href="/product-overview.html">Vacuum Cleaner</a></li>
                            <li><a href="/product-overview.html">Pillow</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Menu  -->

       <!-- breadcrumbs  -->

        <nav class="mx-auto w-full mt-4 max-w-[1200px] px-5">
          <ul class="flex items-center">
            <li class="cursor-pointer">
              <a href="/index.html">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                  <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path>
                  <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path>
                </svg>
              </a>
            </li>
            <li>
              <span class="mx-2 text-gray-500">&gt;</span>
            </li>

            <li class="text-gray-500">Big italian sofa</li>
          </ul>
        </nav>
        <!-- /breadcrumbs  -->
      </div>
