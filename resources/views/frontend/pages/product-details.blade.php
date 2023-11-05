<x-frontend-layout>

    {{-- Page title  --}}
    <x-slot name='title'>Product Details</x-slot>

    {{-- Custom Stylesheet  --}}
    <x-slot name='custom_stylesheet'>

    </x-slot>

    {{-- Custom Stylesheet  --}}
    <x-slot name='custom_js'>

    </x-slot>


 <section class="container flex-grow mx-auto max-w-[1200px] border-b py-5 lg:grid lg:grid-cols-2 lg:py-10">
     <!-- image gallery -->

     <div class="container px-4 mx-auto">
         <img class="w-full" src="/storage/{{$product->img}}" alt="Sofa image">

         <div class="grid grid-cols-4 gap-4 mt-3">
             <div>
                 <img class="cursor-pointer" src="/storage/{{$product->img}}" alt="kitchen image">
             </div>

             <div>
                 <img class="cursor-pointer" src="/storage/{{$product->img}}" alt="kitchen image">
             </div>

             <div>
                 <img class="cursor-pointer" src="/storage/{{$product->img}}" alt="kitchen image">
             </div>

             <div>
                 <img class="cursor-pointer" src="/storage/{{$product->img}}" alt="kitchen image">
             </div>
         </div>
         <!-- /image gallery  -->
     </div>

     <!-- description  -->

     <div class="px-5 mx-auto lg:px-5">
         <h2 class="pt-3 text-2xl font-bold lg:pt-0">{{$product->name}}</h2>
         <div class="mt-1">
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

                 <p class="ml-3 text-sm text-gray-400">({{$product->view}} reviews)</p>
             </div>
         </div>

         <p class="mt-5 font-bold">
             Availability: <span class="text-green-600">In Stock</span>
         </p>
         <p class="font-bold">Brand: <span class="font-normal">Apex</span></p>
         <p class="font-bold">
             Cathegory: <span class="font-normal">{{$product->category->name}}</span>
         </p>
         <p class="font-bold">
             SKU: <span class="font-normal">{{$product->sku}}</span>
         </p>

         <p class="mt-4 text-4xl font-bold text-violet-900">
             ${{$product->price}} <span class="text-xs text-gray-400 line-through">${{$product->price + $product->discount}}</span>
         </p>

         <p class="pt-5 text-sm leading-5 text-gray-500">
            {!! $product->short_des !!}
         </p>

         <div class="mt-6">
             <p class="pb-2 text-xs text-gray-500">Size</p>

             <div class="flex gap-1">
                 <div
                     class="flex items-center justify-center w-8 h-8 duration-100 border cursor-pointer hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                     XS
                 </div>
                 <div
                     class="flex items-center justify-center w-8 h-8 duration-100 border cursor-pointer hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                     S
                 </div>
                 <div
                     class="flex items-center justify-center w-8 h-8 duration-100 border cursor-pointer hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                     M
                 </div>

                 <div
                     class="flex items-center justify-center w-8 h-8 duration-100 border cursor-pointer hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                     L
                 </div>

                 <div
                     class="flex items-center justify-center w-8 h-8 duration-100 border cursor-pointer hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                     XL
                 </div>
             </div>
         </div>

         <div class="mt-6">
             <p class="pb-2 text-xs text-gray-500">Color</p>

             <div class="flex gap-1">
                 <div
                     class="w-8 h-8 bg-gray-600 border border-white cursor-pointer focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                 </div>
                 <div
                     class="w-8 h-8 border border-white cursor-pointer bg-violet-900 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                 </div>
                 <div
                     class="w-8 h-8 bg-red-900 border border-white cursor-pointer focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                 </div>
             </div>
         </div>

         {{-- <div class="mt-6">
             <p class="pb-2 text-xs text-gray-500">Quantity</p>

             <div class="flex">
                 <button
                     class="flex items-center justify-center w-8 h-8 duration-100 border cursor-pointer hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                     &minus;
                 </button>
                 <div
                     class="flex items-center justify-center w-8 h-8 border-t border-b cursor-text active:ring-gray-500">
                     1
                 </div>
                 <button
                     class="flex items-center justify-center w-8 h-8 duration-100 border cursor-pointer hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                     &#43;
                 </button>
             </div>
         </div> --}}

         <div class="flex flex-row items-center gap-6 mt-7">
             <button onclick="save({{$product->id}},'Cart')"
                 class="flex items-center justify-center w-1/3 h-12 text-white duration-100 bg-violet-900 hover:bg-blue-800">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-4 h-4 mr-3">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                     </path>
                 </svg>

                 Add to cart
             </button>
             <button class="flex items-center justify-center w-1/3 h-12 duration-100 bg-amber-400 hover:bg-yellow-300">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-4 h-4 mr-3">
                     <path stroke-linecap="round" stroke-linejoin="round"
                         d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                     </path>
                 </svg>

                 Wishlist
             </button>
         </div>
     </div>
 </section>

 <!-- product details  -->

 <section class="container mx-auto max-w-[1200px] px-5 py-5 lg:py-10">
     <h2 class="text-xl">Product details</h2>
     <p class="mt-4 lg:w-3/4">
        {!! $product->des !!}
     </p>

     <table class="w-full divide-x divide-y table-auto mt-7 lg:w-1/2">
         <tbody class="border divide-x">
             <tr>
                 <td class="pl-4 font-bold border">Color</td>
                 <td class="pl-4 border">Black, Brown, Red</td>
             </tr>

             <tr>
                 <td class="pl-4 font-bold border">Material</td>
                 <td class="pl-4 border">Latex</td>
             </tr>

             <tr>
                 <td class="pl-4 font-bold border">Weight</td>
                 <td class="pl-4 border">55 Kg</td>
             </tr>
         </tbody>
     </table>
 </section>
 <!-- /product details  -->

 <!-- /description  -->

 <p class="mx-auto mt-10 mb-5 max-w-[1200px] px-5">RELATED PRODUCTS</p>

 <!-- Recommendations -->
 <section class="container mx-auto grid max-w-[1200px] grid-cols-2 gap-3 px-5 pb-10 lg:grid-cols-4">
    @forelse ($product->category->product as $rp)
        <x-products :product="$rp" />
    @empty
        <p>There are no related product</p>
    @endforelse

 
 </section>
 <!-- /Recommendations -->
</x-frontend-layout>
