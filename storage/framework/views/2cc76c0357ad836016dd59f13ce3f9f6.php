<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('head', null, []); ?> 
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link rel="stylesheet" href="assets/libs/icofont/icofont.min.css">
        <link href="assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/tailwind.min.css">
     <?php $__env->endSlot(); ?>
    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div
            class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
            <div class="xl:w-full">
                <div class="flex flex-wrap">
                    <div class="flex items-center py-4 w-full">
                        <div class="w-full">
                            <div class="">
                                <div class="flex flex-wrap justify-between">
                                    <div class="items-center ">
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">Ecommerce</h1>
                                        <ol class="list-reset flex text-sm">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a>
                                            </li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Dashboard</li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                                Ecommerce</li>
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
                    <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="text-gray-800 font-semibold dark:text-slate-400 text-lg uppercase">
                                            Total orders</p>
                                        <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">14253</h3>
                                    </div>
                                    <div class="self-center">
                                        <i data-lucide="shopping-cart" class=" h-16 w-16 stroke-primary-500/30"></i>
                                    </div>
                                </div>
                                <p class="truncate text-slate-400"><span class="text-green-500"><i
                                            class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                            </div><!--end card-body-->
                            <div class="flex-auto p-0 overflow-hidden">
                                <div class="flex mb-0 h-full">
                                    <div class="w-full">
                                        <div class="apexchart-wrapper">
                                            <div id="apex_column1" class="chart-gutters"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end inner-grid-->
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">New
                                            customers</p>
                                        <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">532</h3>
                                    </div>
                                    <div class="self-center">
                                        <i data-lucide="users" class=" h-16 w-16 stroke-green/30"></i>
                                    </div>
                                </div>
                                <p class="truncate text-slate-400"><span class="text-red-500"><i
                                            class="mdi mdi-trending-down"></i>0.6%</span> Bounce Rate Weekly</p>
                            </div><!--end card-body-->
                            <div class="flex-auto p-0 overflow-hidden">
                                <div class="flex mb-0 h-full">
                                    <div class="w-full">
                                        <div class="apexchart-wrapper">
                                            <div id="dash_spark_1" class="chart-gutters"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end inner-grid-->
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">Top
                                            coupons
                                        </p>
                                        <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">78%</h3>
                                    </div>
                                    <div class="self-center">
                                        <i data-lucide="gem" class=" h-16 w-16 stroke-yellow-500/30"></i>
                                    </div>
                                </div>
                                <p class="truncate text-slate-400"><span class="text-green-500"><i
                                            class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                            </div><!--end card-body-->
                            <div class="flex-auto p-0 overflow-hidden">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-6">
                                        <div id="ana_device" class="apex-charts"></div>
                                    </div><!--end col-->
                                    <div class="col-span-6">
                                        <ol class="list-none list-inside">
                                            <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i
                                                    class="icofont-caret-right text-primary-500 text-lg"></i> Sent</li>
                                            <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i
                                                    class="icofont-caret-right text-green-500 text-lg"></i> Opened</li>
                                            <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i
                                                    class="icofont-caret-right text-red-500 text-lg"></i> Not Opened
                                            </li>
                                        </ol>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div><!--end card-body-->
                        </div> <!--end inner-grid-->
                    </div>
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                        <div
                            class="bg-[#1b1b22] shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                            <div class="flex-auto p-4">
                                <div class="flex justify-between xl:gap-x-2 items-cente">
                                    <div class="self-center">
                                        <p class="text-gray-300 font-semibold dark:text-slate-400 uppercase">Total
                                            Revenue</p>
                                        <h3 class="my-4 font-semibold text-[30px] text-slate-200">$85000</h3>
                                    </div>
                                    <div class="self-center">
                                        <i data-lucide="dollar-sign" class=" h-16 w-16 stroke-[#2ecee1]/30"></i>
                                    </div>
                                </div>
                                <p class="truncate text-slate-400"><span class="text-green-500"><i
                                            class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                            </div><!--end card-body-->
                            <div class="flex-auto p-4 pt-0 -mt-1">
                                <div
                                    class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">

                                    <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-3">
                                        <img src="assets/images/widgets/wallet.png" alt=""
                                            class="w-full h-auto">
                                    </div>
                                    <div
                                        class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-8 text-end self-center">
                                        <button
                                            class="px-4 py-1 font-medium text-white transition duration-200 ease-in-out delay-200 skew-y-6 bg-brand-600 border-b-4 border-brand-700 rounded shadow-lg shadow-brand-600/50 hover:skew-y-0 hover:border-brand-700">Withdrawal</button>
                                        <!-- <button class="px-2 py-1 bg-brand-500 border border-transparent collapse:bg-green-100 text-white text-sm rounded hover:bg-brand-600 hover:text-white">Withdrawal</button> -->
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end inner-grid-->
                    </div><!--end col-->
                </div> <!--end grid-->

                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-4 xl:col-span-4">
                        <div class="w-full relative mb-4">
                            <div class="flex-auto p-4">
                                <div class="grid grid-cols-12 gap-4">
                                    <div class="col-span-12 sm:col-span-4">
                                        <img src="assets/images/widgets/user.png" alt=""
                                            class="h-auto w-full">
                                    </div><!--end col-->
                                    <div class="col-span-12 sm:col-span-8 self-center">
                                        <h4
                                            class="font-medium flex-1 self-center mb-2 md:mb-0 dark:text-slate-400 text-xl">
                                            A Guide to Analyze and Optimize Your Online Business</h4>
                                    </div><!--end col-->
                                </div><!--end grid-->

                                <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3">
                                </div>
                                <div class="grid grid-cols-12 gap-4 mb-8">
                                    <div class="col-span-12 sm:col-span-6">
                                        <div id="email_report" class="apex-charts -mb-4"></div>
                                    </div><!--end col-->
                                    <div class="col-span-12 sm:col-span-6 self-center">
                                        <ol class="list-none list-inside mb-3">
                                            <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i
                                                    class="icofont-ui-play me-2 text-brand-500"></i> Tablet</li>
                                            <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i
                                                    class="icofont-ui-play me-2 text-yellow-400"></i> Desktop</li>
                                            <li class="mb-1 text-slate-700 dark:text-slate-400 text-sm"><i
                                                    class="icofont-ui-play me-2 text-[#13939c]"></i> Moble</li>
                                        </ol>
                                        <button type="button"
                                            class="inline-block shadow-sm dark:shadow-slate-700/10 focus:outline-none text-slate-600 hover:bg-brand-500 hover:text-white bg-transparent border border-slate-300 dark:bg-transparent dark:text-slate-400 dark:hover:text-white dark:border-gray-700 dark:hover:bg-brand-500  text-sm font-medium py-1 px-3 rounded">View
                                            Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div><!--end col-->
                                </div><!--end grid-->
                                <h6
                                    class="bg-brand-400/5 shadow-sm dark:shadow-slate-700/10 border border-dashed dark:text-brand-300 border-brand dark:bg-slate-700/40 py-3 px-2 rounded-md  text-center text-brand-500 font-medium mt-3">
                                    <i class="ti ti-calendar self-center text-lg mr-1"></i>
                                    01 January 2023 to 31 December 2024
                                </h6>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-8 xl:col-span-8">
                        <div class="w-full relative mb-4">
                            <div
                                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                <div class="flex-none md:flex">
                                    <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Sales Report</h4>
                                    <div class="dropdown inline-block">
                                        <button data-fc-autoclose="both" data-fc-type="dropdown"
                                            class="dropdown-toggle px-3 py-1 text-xs font-medium text-gray-500 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-50 hover:text-slate-800 focus:z-10 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                            type="button">
                                            This Month
                                            <i class="fas fa-chevron-down text-xs ml-2"></i>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div
                                            class="right-auto md:right-0 hidden z-10 w-28 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownDefault">
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                        Week</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                                        Month</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-600 dark:hover:text-white">This
                                                        Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-auto p-4">
                                <div id="crm-dash" class="apex-charts mt-5"></div>
                            </div><!--end card-body-->
                        </div> <!--end inner-grid-->
                    </div><!--end col-->


                </div> <!--end grid-->
                <div
                    class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                        <div
                            class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900   rounded-md w-full relative">
                            <div
                                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-4 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Earnings Reports</h4>
                                <p class="text-sm text-slate-400">Earnings Reports Last Week <span
                                        class="focus:outline-none text-[11px] bg-brand-500/10 text-brand-500 dark:text-brand-300 rounded font-medium py-[2px] px-2">$18532</span>
                                </p>
                            </div><!--end header-title-->
                            <div class="grid grid-cols-1 p-4">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                        <table class="w-full">
                                            <thead class="bg-brand-400/10 dark:bg-slate-700/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Date
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Item Count
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Tex
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Earnings
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- 1 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        01 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        50
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-red-500">$70</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$15,000</span>
                                                    </td>
                                                </tr>
                                                <!-- 2 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        02 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        25
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-slate-100">-</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$15,000</span>
                                                    </td>
                                                </tr>
                                                <!-- 3 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        03 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        65
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-red-500">$115</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$35,000</span>
                                                    </td>
                                                </tr>
                                                <!-- 4 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        04 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        20
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-slate-500">-</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$8,500</span>
                                                    </td>
                                                </tr>
                                                <!-- 5 -->
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                    <td
                                                        class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        05 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        20
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-slate-500">-</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$8,500</span>
                                                    </td>
                                                </tr>
                                                <!-- 6 -->
                                                <tr class="bg-white  dark:bg-gray-900">
                                                    <td
                                                        class="p-3 text-base  text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                        06 January
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        40
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <span class="text-red-500">$60</span>
                                                    </td>
                                                    <td
                                                        class="p-3 text-base text-gray-700 whitespace-nowrap dark:text-gray-400">
                                                        <span class="font-semibold">$12,000</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                        <div
                            class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900   rounded-md w-full relative">
                            <div
                                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-4 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Most Populer Products
                                </h4>
                                <p class="text-sm text-slate-400">New Products Last Week <span
                                        class="focus:outline-none text-[11px] bg-brand-500/10 text-brand-500 dark:text-brand-300 rounded font-medium py-[2px] px-2">5</span>
                                </p>
                            </div><!--end header-title-->
                            <div class="grid grid-cols-1 p-4">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                        <table class="w-full">
                                            <thead class="bg-brand-400/10 dark:bg-slate-700/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Product
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Price
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Sell
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Status
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-base font-medium tracking-wider text-start text-gray-700 uppercase dark:text-gray-400">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(count($product)): ?>
                                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr
                                                            class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td
                                                                class="p-3 text-base font-medium whitespace-nowrap dark:text-white">
                                                                <?php if(strpos($data->image, 'https://via.placeholder.com') !== false): ?>
                                                                    <img src="<?php echo e($data->image); ?>"
                                                                        alt="<?php echo e($data->title); ?>"
                                                                        class="me-2 h-8 rounded shadow inline-block"
                                                                        width="40px">
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('storage/' . $data->image)); ?>"
                                                                        alt="<?php echo e($data->title); ?>"
                                                                        class="me-2 h-8 rounded shadow inline-block"
                                                                        width="40px">
                                                                <?php endif; ?>
                                                                <?php echo e($data->title); ?>

                                                            </td>
                                                            <td
                                                                class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                $<?php echo e($data->price); ?>

                                                            </td>
                                                            <td
                                                                class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <?php echo rand(200, 400);?><small
                                                                    class="text-gray-400">(<?php echo rand(400, 800);?>)</small>
                                                            </td>
                                                            <td
                                                                class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span
                                                                    class="focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                            </td>
                                                            <td
                                                                class="p-3 text-base text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="<?php echo e(route('product.edit', $data->id)); ?>"><i
                                                                        class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <form class="inline-block"
                                                                    action="<?php echo e(route('product.destroy', $data->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('delete'); ?>
                                                                    <button type="submit">
                                                                        <i
                                                                            class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="6">
                                                            <div class="pt-4 font-semibold text-center text-2xl">No
                                                                Product Now</div>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div>
                <?php if(session()->has('updated')): ?>
                    <script>
                        Swal.fire({
                            title: "Product Updated Successfully :)",
                            icon: 'success'
                        });
                    </script>
                <?php endif; ?>
                <?php if(session()->has('deleted')): ?>
                    <script>
                        Swal.fire({
                            title: "Product Deleted Successfully :)",
                            icon: 'success'
                        });
                    </script>
                <?php endif; ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php $__env->slot('script', null, []); ?> 
        <script src="assets/libs/lucide/umd/lucide.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/pages/analytics-index.init.js"></script>
        <script src="assets/js/app.js"></script>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH /home/haseeb/What Else/AdminPanel/resources/views/admin/index.blade.php ENDPATH**/ ?>