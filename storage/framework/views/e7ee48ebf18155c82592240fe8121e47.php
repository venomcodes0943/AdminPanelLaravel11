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
                                            <?php if(count($categories)): ?>
                                                <span>Categories</span>
                                            <?php else: ?>
                                                <span>No Categories</span>
                                            <?php endif; ?>
                                            <span>
                                                <img src="<?php echo e(asset('/assets/images/down-arrow.png')); ?>" alt=""
                                                    width="15px">
                                            </span>
                                        </div>
                                        <div class="overflow-auto" style="height: 90px">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <form x-show="open" style="display: none" method="GET">
                                                    <button type="submit" name="search"
                                                        value="<?php echo e($category->categoryName); ?>"
                                                        class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0
                                                        text-left
                                                        placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 cursor-pointer block">
                                                        <?php echo e($category->categoryName); ?>

                                                    </button>
                                                </form>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                            <?php if(count($products) > 0): ?>
                                                                <?php
                                                                    $i = 0;
                                                                ?>
                                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php
                                                                        $i++;
                                                                    ?>
                                                                    <tr
                                                                        class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                                        <td
                                                                            class="p-3 font-bold text-[#000] text-sm whitespace-nowrap dark:text-gray-400">
                                                                            <?php echo e($loop->iteration + $products->perPage() * ($products->currentPage() - 1)); ?>

                                                                        </td>
                                                                        <td
                                                                            class="p-3  text-sm font-medium whitespace-nowrap dark:text-white">
                                                                            <div class="flex items-center">
                                                                                <?php if(strpos($product->image, 'https://via.placeholder.com') !== false): ?>
                                                                                    <img src="<?php echo e($product->image); ?>"
                                                                                        alt="<?php echo e($product->title); ?>"
                                                                                        class="me-2 h-8 rounded shadow"
                                                                                        width="40px">
                                                                                <?php else: ?>
                                                                                    <img src="<?php echo e(asset('storage/' . $product->image)); ?>"
                                                                                        alt="<?php echo e($product->title); ?>"
                                                                                        class="me-2 h-8 rounded shadow"
                                                                                        width="40px">
                                                                                <?php endif; ?>
                                                                                <div class="self-center">
                                                                                    <h5
                                                                                        class="text-sm font-semibold text-slate-700 dark:text-gray-400">
                                                                                        <?php echo e($product->title); ?></h5>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                            <a href="#"
                                                                                class="text-brand-500 underline">
                                                                                <?php if($product->category !== null): ?>
                                                                                    <?php echo e($product->category->categoryName); ?>

                                                                                <?php else: ?>
                                                                                    Unknown Category
                                                                                <?php endif; ?>
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
                                                                            $ <?php echo e($product->price); ?>

                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                            <?php echo e($product->created_at->diffForHumans()); ?>

                                                                        </td>
                                                                        <td
                                                                            class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                            <a
                                                                                href="<?php echo e(route('product.edit', $product->id)); ?>"><i
                                                                                    class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                            <form class="inline-block"
                                                                                action="<?php echo e(route('product.destroy', $product->id)); ?>"
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
                                                                        <div class="text-3xl text-center">No Product
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
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
                    <?php echo e($products->links()); ?>

                </div>
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
                        <!-- end Footer -->
                    </div>
                </div>


            </div><!--end container-->
        </div><!--end page-wrapper-->
    </div>
     <?php $__env->slot('script', null, []); ?> 
        <script src="assets/libs/lucide/umd/lucide.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>
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
<?php /**PATH /home/haseeb/What Else/AdminPanel/resources/views/products/show.blade.php ENDPATH**/ ?>