<x-layout>
    <x-slot name="head">
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link rel="stylesheet" href="assets/libs/icofont/icofont.min.css">
        <link href="assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
    </x-slot>
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div
            class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">Products</h1>
                                        <ol class="list-reset flex text-sm">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a>
                                            </li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                                Products</li>
                                        </ol>
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <input type="text"
                                                class="dash_date border-0 focus:border-0 focus:outline-none" readonly
                                                required="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                        <div class="w-full relative mb-4">
                            <div class="flex-auto p-0 md:p-4">
                                <div class="flex flex-wrap gap-4 mb-3">
                                    <div class="mb-2 w-44" x-data="{ open: false }" @click.away ="open=false">
                                        <div id="Category" @click="open = !open"
                                            class="w-full flex items-center justify-between rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 cursor-pointer">
                                            @if (count($categories))
                                                <span>Categories</span>
                                            @else
                                                <span>No Categories</span>
                                            @endif
                                            <span>
                                                <img src="{{ asset('/assets/images/down-arrow.png') }}" alt=""
                                                    width="15px">
                                            </span>
                                        </div>
                                        <div class="overflow-auto" style="height: 90px">
                                            <form x-show="open" style="display: none" method="GET">
                                                <a href="{{ route('product.index') }}"
                                                    class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0
                                                text-left
                                                placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 cursor-pointer block">
                                                    All
                                                </a>
                                                @foreach ($categories as $category)
                                                    <button type="submit" name="search"
                                                        value="{{ $category->categoryName }}"
                                                        class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0
                                                        text-left
                                                        placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 cursor-pointer block">
                                                        {{ $category->categoryName }}
                                                    </button>
                                                @endforeach
                                            </form>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <form method="GET" class="flex gap-3">
                                            <div class="relative">
                                                <div
                                                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                    <i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
                                                </div>
                                                <input type="search" id="productSearch" name="search"
                                                    class="form-input w-52 rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 pl-10 p-2.5"
                                                    placeholder="search">
                                            </div>
                                            <div>
                                                <button type="submit"
                                                    class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                                    Search product
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="myTabContent">
                                    <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-900" id="all"
                                        role="tabpanel" aria-labelledby="all-tab">
                                        <div class="grid grid-cols-1 p-0 md:p-4">
                                            <div class="sm:-mx-6 lg:-mx-8">
                                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                    <table class="w-full">
                                                        <thead class="bg-gray-50 dark:bg-slate-700/20">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="pl-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    No.
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Product & Title
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Categories
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Stock status
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Price
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Date
                                                                </th>
                                                                <th scope="col"
                                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                    Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (count($products) > 0)
                                                                @php
                                                                    $i = 0;
                                                                @endphp
                                                                @foreach ($products as $product)
                                                                    @php
                                                                        $i++;
                                                                    @endphp
                                                                    <tr
                                                                        class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                        <td
                                                                            class="p-3 font-bold text-[#000] text-sm whitespace-nowrap dark:text-gray-400">
                                                                            {{ $loop->iteration + $products->perPage() * ($products->currentPage() - 1) }}
                                                                        </td>
                                                                        <td
                                                                            class="p-3  text-sm font-medium whitespace-nowrap dark:text-white">
                                                                            <div class="flex items-center">
                                                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                                                    alt="{{ $product->title }}"
                                                                                    class="me-2 h-8 rounded shadow"
                                                                                    width="40px">
                                                                                <div class="self-center">
                                                                                    <h5
                                                                                        class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                        {{ $product->title }}</h5>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                            <a href="#"
                                                                                class="text-brand-500 underline">
                                                                                @if ($product->category !== null)
                                                                                    {{ $product->category->categoryName }}
                                                                                @else
                                                                                    Unknown Category
                                                                                @endif
                                                                            </a>
                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                            <span
                                                                                class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">In
                                                                                stock</span>
                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                                            $ {{ $product->price }}
                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                            {{ $product->created_at->diffForHumans() }}
                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                            <a
                                                                                href="{{ route('product.edit', $product->id) }}"><i
                                                                                    class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                            <form class="inline-block"
                                                                                action="{{ route('product.destroy', $product->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit">
                                                                                    <i
                                                                                        class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i>
                                                                                </button>
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @else
                                                                <tr>
                                                                    <td colspan="6">
                                                                        <div class="text-3xl text-center">No Product
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div><!--end div-->
                                            </div><!--end grid-->
                                        </div><!--end div-->
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>
                <div class="container mx-auto p-4">
                    {{ $products->links() }}
                </div>
                @if (session()->has('deleted'))
                    <script>
                        Swal.fire({
                            title: "Product Deleted Successfully :)",
                            icon: 'success'
                        });
                    </script>
                @endif
                <div
                    class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                    <div class="container">
                        <!-- Footer Start -->
                        <footer
                            class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left ">
                            &copy;
                            <script>
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script>
                            Robotech
                            <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted
                                with <i class="ti ti-heart text-red-500"></i> by
                                Mannatthemes</span>
                        </footer>
                        <!-- end Footer -->
                    </div>
                </div>


            </div><!--end container-->
        </div><!--end page-wrapper-->
    </div>
    <x-slot name="script">
        <script src="assets/libs/lucide/umd/lucide.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>
        <script src="assets/js/app.js"></script>
    </x-slot>
</x-layout>
