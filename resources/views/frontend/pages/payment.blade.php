
<x-frontend-layout>

    {{-- Page title  --}}
    <x-slot name='title'>Payment</x-slot>

    {{-- Custom Stylesheet  --}}
    <x-slot name='custom_stylesheet'>


    </x-slot>

    {{-- Custom Stylesheet  --}}
    <x-slot name='custom_js'>

    </x-slot>
        <section class="flex-grow">
            <section class="container mx-auto max-w-[1200px] py-5 lg:flex lg:flex-row lg:py-10">
                <h2 class="px-5 mx-auto text-2xl font-bold md:hidden">
                    Payment Method
                </h2>
                <!-- form  -->
                <section class="grid w-full max-w-[1200px] grid-cols-1 gap-3 px-5 pb-10">
                    <table class="hidden lg:table">
                        <thead class="h-16 bg-neutral-100">
                            <tr>
                                <th>ADDRESS</th>
                                <th>DELIVERY METHOD</th>
                                <th class="text-white bg-neutral-600">PAYMENT METHOD</th>
                                <th>ORDER REVIEW</th>
                            </tr>
                        </thead>
                    </table>

                    <div class="py-5">
                        <form class="flex flex-col w-full gap-3" action="">
                            <div class="flex flex-col w-full">
                                <label class="flex" for="name">Payment Card Number</label>
                                <input x-mask="9999 9999 9999 9999" class="w-full px-4 py-2 border lg:w-1/2"
                                    placeholder="1223 4568 7644 4839">
                            </div>

                            <div class="flex flex-col w-full">
                                <label class="flex" for="name">Card Holder</label>
                                <input class="w-full px-4 py-2 border lg:w-1/2" type="text"
                                    placeholder="SARAH JOHNSON">
                            </div>

                            <div class="flex items-center gap-5 lg:w-1/2">
                                <div class="flex flex-col">
                                    <label class="flex" for="name">Expiry Date</label>

                                    <div class="flex w-[150px] items-center gap-1">
                                        <input x-mask="99" class="w-1/2 px-4 py-2 text-center border"
                                            name="" id="" placeholder="10">

                                        <span>&bsol;</span>

                                        <input x-mask="99" class="w-1/2 px-4 py-2 text-center border"
                                            name="" id="" placeholder="36">
                                    </div>
                                </div>

                                <div class="flex flex-col w-[60px] lg:w-[110px]">
                                    <label class="flex" for="">CVV/CVC</label>
                                    <input x-mask="999" class="w-full py-2 text-center border lg:w-1/2"
                                        type="password" placeholder="&bull;&bull;&bull;">
                                </div>
                            </div>

                            <!-- another payment-methods -->

                            <h2 class="mt-10 text-xl font-medium text-left">
                                Another methods:
                            </h2>
                            <section class="grid grid-cols-3 gap-4 my-4 w-fit lg:grid-cols-5">
                                <img class="w-[100px] cursor-pointer" src="/payment-method-bitcoin.d253ddb4.svg"
                                    alt="bitcoin icon">
                                <img class="w-[100px] cursor-pointer" src="/payment-method-paypal.82e2199b.svg"
                                    alt="paypal icon">
                                <img class="w-[100px] cursor-pointer" src="/payment-method-stripe.97999724.svg"
                                    alt="stripe icon">
                                <img class="w-[100px] cursor-pointer" src="/payment-method-visa.7f3307d5.svg"
                                    alt="visa icon">
                                <img class="w-[100px] cursor-pointer" src="/payment-method-mastercard.043a5b74.svg"
                                    alt="mastercard icon">
                            </section>
                            <!-- another payment-methods -->
                        </form>
                    </div>

                    <div class="flex items-center justify-between w-full">
                        <a href="/catalog.html" class="hidden text-sm text-violet-900 lg:block">&larr; Back to the
                            shop</a>

                        <div class="flex justify-center gap-2 mx-auto lg:mx-0">
                            <a href="/checkout-delivery.html" class="px-4 py-2 text-white bg-purple-900">Previous
                                step</a>

                            <a href="/checkout-review.html" class="px-4 py-2 bg-amber-400">Checkout review</a>
                        </div>
                    </div>
                </section>
                <!-- /form  -->

                <!-- Summary  -->

                <section class="mx-auto w-full px-4 md:max-w-[400px]">
                    <div class="">
                        <div class="px-4 py-5 border shadow-md">
                            <p class="font-bold">ORDER SUMMARY</p>

                            <div class="flex justify-between py-5 border-b">
                                <p>Subtotal</p>
                                <p>$1280</p>
                            </div>

                            <div class="flex justify-between py-5 border-b">
                                <p>Shipping</p>
                                <p>Free</p>
                            </div>

                            <div class="flex justify-between py-5">
                                <p>Total</p>
                                <p>$1280</p>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <!-- /Summary -->

            <!-- Cons bages -->

            <section class="container flex flex-col justify-center gap-3 mx-auto my-8 lg:flex-row">
                <!-- 1 -->

                <div class="flex flex-row items-center justify-center px-5 py-4 mx-5 border-2 border-yellow-400">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-violet-900 lg:mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12">
                            </path>
                        </svg>
                    </div>

                    <div class="flex flex-col justify-center ml-6">
                        <h3 class="text-xs font-bold text-left lg:text-sm">
                            Free Delivery
                        </h3>
                        <p class="text-xs text-center text-light lg:text-left lg:text-sm">
                            Orders from $200
                        </p>
                    </div>
                </div>

                <!-- 2 -->

                <div class="flex flex-row items-center justify-center px-5 py-4 mx-5 border-2 border-yellow-400">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-violet-900 lg:mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z">
                            </path>
                        </svg>
                    </div>

                    <div class="flex flex-col justify-center ml-6">
                        <h3 class="text-xs font-bold text-left lg:text-sm">
                            Money returns
                        </h3>
                        <p class="text-xs text-left text-light lg:text-sm">
                            30 Days guarantee
                        </p>
                    </div>
                </div>

                <!-- 3 -->

                <div class="flex flex-row items-center justify-center px-5 py-4 mx-5 border-2 border-yellow-400">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-violet-900 lg:mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z">
                            </path>
                        </svg>
                    </div>

                    <div class="flex flex-col justify-center ml-6">
                        <h3 class="text-xs font-bold text-left lg:text-sm">
                            24/7 Supports
                        </h3>
                        <p class="text-xs text-left text-light lg:text-sm">
                            Consumer support
                        </p>
                    </div>
                </div>
            </section>

            <!-- /Cons bages  -->
        </section>
</x-frontend-layout>


