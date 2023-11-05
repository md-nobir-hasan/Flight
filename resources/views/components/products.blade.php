
<div class="flex flex-col">
    <div class="relative flex">
        <img class="" src="/storage/{{$product->img}}" alt="{{$product->name}}">
        <div
            class="absolute flex items-center justify-center w-full h-full gap-3 duration-150 opacity-0 hover:opacity-100">
            <a href="{{route('pd',$product->id)}}">
                <span class="flex items-center justify-center w-8 h-8 rounded-full cursor-pointer bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                        </path>
                    </svg>
                </span>
            </a>
            <span class="flex items-center justify-center w-8 h-8 rounded-full cursor-pointer bg-amber-400">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path
                        d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                    </path>
                </svg>
            </span>
        </div>

        <div class="absolute flex items-center justify-center mt-3 right-1 bg-amber-400">
            <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
        </div>
    </div>

    <div>
        <p class="mt-2">{{$product->name}}</p>
        <p class="font-medium text-violet-900">
            {{$product->price}}
            <span class="text-sm text-gray-500 line-through">{{$product->price+$product->discount}}</span>
        </p>

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                class="w-4 h-4 text-yellow-400">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                    clip-rule="evenodd"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                class="w-4 h-4 text-yellow-400">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                    clip-rule="evenodd"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                class="w-4 h-4 text-yellow-400">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                    clip-rule="evenodd"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                class="w-4 h-4 text-yellow-400">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                    clip-rule="evenodd"></path>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                class="w-4 h-4 text-gray-200">
                <path fill-rule="evenodd"
                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                    clip-rule="evenodd"></path>
            </svg>
            <p class="text-sm text-gray-400">(38)</p>
        </div>

        <div >
            <button class="w-full h-10 my-5 text-white bg-violet-900" onclick="save({{$product->id}},'Cart')">
                Add to cart
            </button>
        </div>
    </div>
</div>
