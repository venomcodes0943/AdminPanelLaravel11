<x-customer-layout.layout>
    <x-slot name="head">
        <link rel="stylesheet" href="{{ asset('assets/libs/nice-select2/css/nice-select2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/libs/icofont/icofont.min.css') }}">
        <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.min.css') }}">
    </x-slot>
    <div class="container my-4 min-h-80">
        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                <div class="grid grid-cols-1">
                    <div class="sm:-mx-6 lg:-mx-8">
                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                            <table class="w-full">
                                <thead class="bg-gray-50 dark:bg-gray-600/20">
                                    <tr>
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
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (session('wishlist'))
                                        @foreach (session()->get('wishlist') as $item)
                                            <tr
                                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <div class="flex items-center">
                                                        {{-- <img src="assets/images/products/02.png" alt=""
                                                            class="me-2 h-8 inline-block"> --}}
                                                        @if (strpos($item['image'], 'https://via.placeholder.com') !== false)
                                                            <img src="{{ $item['image'] }}" alt="product image"
                                                                class="me-2 h-8 inline-block rounded">
                                                        @else
                                                            <a href="#">
                                                                <img src="{{ asset('storage/' . $item['image']) }}"
                                                                    alt="product image"
                                                                    class="me-2 h-8 inline-block rounded">
                                                            </a>
                                                        @endif
                                                        <div class="self-center">
                                                            <h5
                                                                class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                {{ $item['title'] }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <a href="#" class="text-brand-500 underline">
                                                        {{ $item['category'] }}</a>
                                                </td>
                                                <td
                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <span
                                                        class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">In
                                                        stock</span>
                                                </td>
                                                <td
                                                    class="p-3 font-semibold text-lg text-gray-800 whitespace-nowrap dark:text-gray-400">
                                                    ${{ $item['price'] }}
                                                </td>

                                                <td
                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <form action="{{ route('product.cart', ['id' => $item['id']]) }}"
                                                        method="POST" class="inline-block gap-4">
                                                        @csrf
                                                        <input
                                                            class="form-input border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent  rounded-md mt-1 border-gray-200 px-3 py-2 text-sm focus:outline-none focus:ring-0 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand-500  dark:hover:border-slate-700"
                                                            style="width:50px;" type="number" min="1"
                                                            id="example-number-input" name="quantity">
                                                        <button type="submit"><i
                                                                class="icofont-shopping-cart text-2xl text-gray-500 dark:text-gray-400"></i></button>
                                                    </form>
                                                    <a
                                                        href="{{ route('cart.single.clear', ['itemId' => $item['id'], 'sessionName' => 'wishlist']) }}"><i
                                                            class="icofont-ui-delete text-2xl text-red-500 dark:text-red-400"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr
                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                            <td colspan="6"
                                                class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                <div class="text-3xl text-center">No Product In Wishlist</div>
                                            </td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div><!--end div-->
                    </div><!--end div-->
                </div><!--end grid-->
            </div><!--end col-->
        </div> <!--end grid-->
    </div>
    <x-slot name="script">
        <script src="{{ asset('assets/libs/lucide/umd/lucide.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>

        <script src="{{ asset('assets/libs/nice-select2/js/nice-select2.js') }}"></script>
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script>
            NiceSelect.bind(document.querySelector(".nice-select"));
            var swiper = new Swiper(".defaultSwiper", {
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
    </x-slot>
</x-customer-layout.layout>
