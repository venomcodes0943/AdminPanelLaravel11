<header class="relative z-40 w-full bg-white print:hidden">
    <div class="hidden border-b dark:border-slate-700/40 sm:block py-1 bg-black">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 md:w-1/2 lg:w-1/2 self-center">
                    <ul class="-mx-3 flex items-center">
                        <li class="mx-1">
                            <a href="javascript:void(0)"
                                class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                About Us
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="customers-wishlist.html"
                                class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                Wishlist <span
                                    class="bg-green-600/5 text-green-600 text-[11px] font-medium px-1 py-0.5 rounded-full h-5">3</span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="customers-order-track.html"
                                class="inline-block  px-2 text-sm font-medium text-gray-400 border border-slate-500/40 rounded-full text-body-color hover:text-white">
                                Order Tracking
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/2">
                    <div class="-mx-3 hidden items-center justify-end md:flex">
                        <div class="me-2">
                            <div class="hidden items-center pe-1 md:flex">
                                <div class="me-3">
                                    <i data-lucide="phone" class="w-4 h-4 stroke-slate-300"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-400">
                                        Need Help?
                                        <span class="text-gray-300">+001 123 456 789</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="me-2">
                            <div class="relative z-20 border border-slate-500/40 rounded-full px-2">
                                <select
                                    class="relative z-20 w-full appearance-none text-slate-200  bg-transparent ps-2 pe-4 text-sm font-medium  outline-none transition">
                                    <option value="" class="text-slate-700">English</option>
                                    <option value="" class="text-slate-700">Urdu</option>
                                    <option value="" class="text-slate-700">Hindi</option>
                                </select>
                                <span
                                    class="absolute right-2 top-1/2 z-10 mt-[-2px] h-2 w-2 -translate-y-1/2 rotate-45 border-r border-b border-slate-400"></span>
                            </div>
                        </div>
                        <div class="me-2">
                            <div class="relative z-20 border border-slate-500/40 rounded-full px-2">
                                <select
                                    class="relative z-20 w-full appearance-none text-slate-200  bg-transparent ps-2 pe-4 text-sm font-medium  outline-none transition">
                                    <option value="" class="text-slate-700">USD</option>
                                    <option value="" class="text-slate-700">INR</option>
                                    <option value="" class="text-slate-700">ERU</option>
                                </select>
                                <span
                                    class="absolute right-2 top-1/2 z-10 mt-[-2px] h-2 w-2 -translate-y-1/2 rotate-45 border-r border-b border-slate-400"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b dark:border-slate-700/40 lg:py-3 bg-[#EEF0FC]">
        <div class="container mx-auto">
            <div class="relative -mx-4 flex items-center justify-center sm:justify-between">
                <div class="w-64 max-w-full px-4 sm:w-60 lg:w-48">
                    <a href="{{ route('customer.index') }}" class="block w-full py-5 lg:py-3">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo"
                            class="w-6 md:w-8 inline-block">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo"
                            class="w-20 md:w-24 inline-block">
                    </a>
                </div>
                <div class="w-full items-center justify-end px-4 sm:flex lg:justify-between">
                    <div class="hidden w-full lg:flex">
                        <form
                            class="relative flex w-full items-center rounded-md border dark:border-slate-700/40 bg-[#fff]">

                            <input type="text" placeholder="I'm shopping for..."
                                class="w-full bg-transparent py-3 ps-6 pe-[200px] text-base font-medium text-body-color outline-none">
                            <div class="absolute right-12 z-20 border-s border-[#d9d9d9] px-2">
                                <select id="default"
                                    class="nice-select border-0 relative z-20 appearance-none bg-transparent ps-2 pe-6 font-medium text-black outline-none">
                                    <option>All categories</option>
                                    <option>Best matches</option>
                                    <option>Newest</option>
                                </select>
                            </div>
                            <a href="javascript:void(0)"
                                class="absolute top-0 right-0 flex h-full w-[52px] items-center justify-center rounded-tr-md rounded-br-md border-s ">
                                <i data-lucide="search" class="w-6 h-6"></i>
                            </a>
                        </form>
                    </div>
                    <div class="flex w-full items-center justify-end space-x-2 md:space-x-4">
                        <div class=" dropdown relative block lg:hidden">
                            <button type="button"
                                class="dropdown-toggle flex rounded-full md:me-0 h-10 w-10 items-center justify-center  border-[.5px] dark:border-slate-700/40 bg-[#f4f7ff] text-dark"
                                aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                                <span data-lucide="search" class="w-5 h-5"></span>
                            </button>

                            <div class="-left-40 md:left-auto right-0 z-50 my-1 hidden min-w-[300px] sm:min-w-[400px] md:min-w-[400px] lg:min-w-[500px] max-w-full
                list-none divide-y  divide-gray-100 rounded-md border-slate-700
                md:border-white text-base shadow dark:divide-gray-600 bg-white
                dark:bg-slate-800"
                                onclick="event.stopPropagation()">
                                <form
                                    class="relative flex w-full items-center rounded-md border dark:border-slate-700/40 bg-[#f4f7ff] ">
                                    <div class="relative z-20 border-r border-[#d9d9d9] px-2 hidden lg:block">
                                        <select id="default"
                                            class="nice-select border-0 relative z-20 appearance-none bg-transparent ps-2 pe-6 font-medium text-black outline-none">
                                            <option>All</option>
                                            <option>Best matches</option>
                                            <option>Newest</option>
                                        </select>
                                    </div>
                                    <input type="text" placeholder="I'm shopping for..."
                                        class="w-full bg-transparent py-3 ps-6 pe-[58px] text-base font-medium text-body-color outline-none">
                                    <a href="javascript:void(0)"
                                        class="absolute top-0 right-0 flex h-full w-[52px] items-center justify-center rounded-tr-md rounded-br-md border-s ">
                                        <i data-lucide="search" class="w-6 h-6"></i>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown relative">
                            <button type="button"
                                class="dropdown-toggle flex rounded-full md:me-0 h-10 w-10 items-center justify-center  border-[.5px] dark:border-slate-700/40 bg-[#f4f7ff] text-dark"
                                id="Notifications" aria-expanded="false" data-fc-autoclose="both"
                                data-fc-type="dropdown">
                                <span data-lucide="shopping-cart" class=" w-5 h-5"></span>
                                <span
                                    class="absolute -top-1 -right-1 h-4 w-4 leading-4 rounded-full bg-brand text-[10px] font-semibold text-white">
                                    2
                                </span>
                            </button>

                            <div
                                class="left-auto -right-10 md:right-0 z-50 my-1 hidden list-none
                divide-y divide-gray-100 rounded border-slate-700 md:border-white
                text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-72 p-5">
                                <div class="mb-5 border-b dark:border-slate-700/40 pb-3">
                                    <div class="-mx-1 flex items-center justify-between pb-4">
                                        <div class="flex items-center px-1">
                                            <div class="me-3 h-10 w-full max-w-[40px] overflow-hidden rounded">
                                                <img src="{{ asset('assets/images/products/01.png') }}"
                                                    alt="product image" class="w-8 h-8">
                                            </div>
                                            <div>
                                                <a href="product-details.html"
                                                    class="text-sm font-medium text-black hover:text-brand">
                                                    Circular Sienna
                                                </a>
                                                <p class="truncate text-xs font-medium text-body-color">
                                                    Awesome white shirt
                                                </p>
                                            </div>
                                        </div>
                                        <div class="px-1">
                                            <p class="text-base font-semibold text-black">$36.00</p>
                                        </div>
                                    </div>
                                    <div class="-mx-1 flex items-center justify-between py-4">
                                        <div class="flex items-center px-1">
                                            <div class="me-3 h-10 w-full max-w-[40px] overflow-hidden rounded">
                                                <img src="{{ asset('assets/images/products/02.png') }}"
                                                    alt="product image" class="w-8 h-8">
                                            </div>
                                            <div>
                                                <a href="product-details.html"
                                                    class="text-sm font-medium text-black hover:text-brand">
                                                    Black T-shirt
                                                </a>
                                                <p class="truncate text-xs font-medium text-body-color">
                                                    It's a nice black t-shirt
                                                </p>
                                            </div>
                                        </div>
                                        <div class="px-1">
                                            <p class="text-base font-semibold text-black">$36.00</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="-mx-1 flex items-center justify-between  pb-6">
                                    <div class="px-1">
                                        <p class="text-base font-medium text-black">
                                            Total Payable
                                        </p>
                                    </div>
                                    <div class="px-1">
                                        <p class="text-base font-semibold text-black">$88.15</p>
                                    </div>
                                </div>

                                <div>
                                    <a href="customers-checkout.html"
                                        class="flex w-full items-center justify-center rounded-md bg-brand py-[10px] px-10 text-center text-base font-normal text-white hover:bg-opacity-90">
                                        Place Order
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="me-2  dropdown relative">
                            <button type="button"
                                class="dropdown-toggle flex items-center rounded-full text-sm
                focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0"
                                id="user-profile" aria-expanded="false" data-fc-autoclose="both"
                                data-fc-type="dropdown">
                                <img class="h-8 w-8 rounded-full"
                                    src="{{ asset('/assets/images/users/avatar-10.png') }}" alt="user photo" />
                                <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                                    <span class="block font-medium text-slate-600 dark:text-gray-300">Maria
                                        Gibson</span>
                                </span>
                            </button>

                            <div class="left-auto right-0 z-50 my-1 hidden list-none
                divide-y divide-gray-100 rounded border-slate-700 md:border-white
                text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-40"
                                id="navUserdata">

                                <ul class="py-1" aria-labelledby="navUserdata">
                                    <li>
                                        <a href="customers-profile.html"
                                            class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                      dark:text-gray-200 dark:hover:bg-gray-900/20
                      dark:hover:text-white">
                                            <span data-lucide="user"
                                                class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a href="customers-invoice.html"
                                            class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                      dark:text-gray-200 dark:hover:bg-gray-900/20
                      dark:hover:text-white">
                                            <span data-lucide="file-spreadsheet"
                                                class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                            Invoice</a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html"
                                            class="flex items-center py-2 px-3 text-sm text-red-400 hover:bg-gray-50 hover:text-red-500
                      dark:text-red-400 dark:hover:bg-gray-900/20
                      dark:hover:text-red-500">
                                            <span data-lucide="power"
                                                class="w-4 h-4 inline-block text-red-400 dark:text-red-400 me-2"></span>
                                            Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container mx-auto">
            <div class="relative -mx-4 flex items-center justify-between">
                <div class="w-full max-w-full px-4 lg:w-60">
                    <div class="relative py-4 group categories">
                        <a href="javascript:void(0)"
                            class="inline-flex  relative items-center justify-between whitespace-nowrap rounded bg-brand-50/70 px-5 py-2 text-base font-medium text-brand-500 hover:bg-opacity-90">
                            <span class="pe-2">
                                <i data-lucide="menu" class="h-5 w-5"></i>
                            </span>
                            All categories
                        </a>

                        <div
                            class="absolute left-0 top-[100%] z-10 w-[250px] rounded-lg border-[.5px] dark:border-slate-700/40 bg-white py-4   duration-400 group-[.categories]:group-hover:block  hidden">
                            <span
                                class="absolute -top-[6px] left-6 -z-10 hidden h-3 w-3 rotate-45 rounded-sm border-[.5px] border-r-0 border-b-0 dark:border-slate-700/40 bg-white lg:block"></span>

                            <div class="group submenu relative px-6">
                                <a href="javascript:void(0)"
                                    class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand group-hover:text-brand">
                                    Fashion
                                    <span>
                                        <i data-lucide="chevron-right" class="h-4"></i>
                                    </span>
                                </a>

                                <div
                                    class="left-full top-0 dark:border-slate-700/40 bg-white py-2 group-[.submenu]:group-hover:visible group-[.submenu]:group-hover:opacity-100 lg:invisible lg:absolute lg:w-[600px] lg:rounded lg:border-[.5px] lg:py-8 lg:px-8 lg:opacity-0 xl:w-[650px] block">
                                    <div class="-mx-2 flex flex-wrap">
                                        <div class="w-full px-2 lg:w-1/3">
                                            <div>
                                                <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                    Man
                                                </h3>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Cargo Pants
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Jackets
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    T-Shirts
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Shirts
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Jeans
                                                </a>
                                            </div>
                                        </div>
                                        <div class="w-full px-2 lg:w-1/3">
                                            <div>
                                                <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                    Woman
                                                </h3>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Dresses
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Tees
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Leggings
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Wedding Dresses
                                                </a>
                                                <a href="#"
                                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                    Prom Dresses
                                                </a>
                                            </div>
                                        </div>
                                        <div class="w-full px-2 lg:w-1/3">
                                            <h3 class="mb-3 text-base font-semibold text-black uppercase">
                                                Kids
                                            </h3>
                                            <a href="#"
                                                class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                Body Wash
                                            </a>
                                            <a href="#"
                                                class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                Nightwear
                                            </a>
                                            <a href="#"
                                                class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                Shorts
                                            </a>
                                            <a href="#"
                                                class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                Sunglasses
                                            </a>
                                            <a href="#"
                                                class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                                Summer Caps
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-6">
                                <a href="#"
                                    class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                    Phone & Smartwatch
                                </a>
                            </div>
                            <div class="px-6">
                                <a href="#"
                                    class="flex items-center justify-between rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                    Laptops
                                </a>
                            </div>
                            <div class="px-6">
                                <a href="#"
                                    class="block rounded py-2 text-sm font-medium text-body-color hover:text-brand">
                                    Jewelry
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div class="w-full">
                        <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu"
                            class=" block ms-auto h-10 w-10 leading-10 border rounded-full  ring-brand focus:ring-1 lg:hidden"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <i data-lucide="menu" class="w-5 h-5 mx-auto stroke-slate-600 "></i>
                            <i data-lucide="x" class="w-5 h-5 hidden mx-auto stroke-slate-600 "></i>
                        </button>
                        <nav id="mobile-menu-2"
                            class="order-2 hidden w-full items-center justify-between md:order-1 md:ms-5 lg:flex md:w-auto">
                            <ul class="blcok items-center lg:flex px-4 md:px-0">
                                <li>
                                    <a href="customers-home.html"
                                        class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="customers-products.html"
                                        class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                        Products
                                    </a>
                                </li>
                                <li>
                                    <a href="customers-wishlist.html"
                                        class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a href="customers-stores.html"
                                        class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                        Stores
                                    </a>
                                </li>
                                <li>
                                    <a href="customers-checkout.html"
                                        class="flex justify-between py-2 text-base font-medium text-dark hover:text-brand lg:mx-5 lg:inline-flex lg:py-6 2xl:mx-6">
                                        Checkout
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="w-full max-w-full hidden lg:flex px-4 lg:w-[300px] xl:w-72 items-center">
                    <h5 class="text-xl font-semibold uppercase text-brand-500 flex items-center"><i
                            class="icofont-sale-discount me-1 text-4xl"></i>up to <span
                            class="text-xxl text-pink-500 font-bold">70%</span> off</h5>
                </div>
            </div>
        </div>
    </div>
</header>
