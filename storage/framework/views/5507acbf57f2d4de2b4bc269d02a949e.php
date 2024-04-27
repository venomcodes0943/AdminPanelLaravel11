<?php if (isset($component)) { $__componentOriginal08735d9b99bd539905c5264be490a0d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08735d9b99bd539905c5264be490a0d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.customer-layout.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('customer-layout.layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('head', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('assets/libs/nice-select2/css/nice-select2.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/libs/swiper/swiper-bundle.min.css')); ?>">
        <!-- Main Css -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/libs/icofont/icofont.min.css')); ?>">
        <link href="<?php echo e(asset('assets/libs/flatpickr/flatpickr.min.css')); ?>" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.min.css')); ?>">

     <?php $__env->endSlot(); ?>
    <div class="container my-4">
        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
            <div class="col-span-12 sm:col-span-4 md:col-span-3 lg:col-span-3 xl:col-span-3">
                <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative">
                    <div
                        class="border-b border-dashed border-slate-200 dark:border-slate-700 py-4 px-4 dark:text-slate-300/70">
                        <h4 class="font-medium flex-1 self-center mb-2 md:mb-0 text-xxl">Filters</h4>
                    </div>
                    <div class="flex-auto p-4">
                        <h4 class="font-medium flex-1 self-center mb-3 text-base">Categories</h4>
                        <form action="">
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Fashion</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Phone</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Smartwatch</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Laptops</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Jewelry</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Kitchen pro.</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Home decor</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Shoes</span>
                                </label>
                            </div>
                        </form>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <h4 class="font-medium flex-1 self-center mb-3 text-base">Colors</h4>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <form action="">
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-black dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Black</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-blue-500 dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Blue</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-amber-700 dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Brown</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-green-600 dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Green</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-orange-500 dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Orange</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-pink dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Pink</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-purple-500 dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Purple</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-yellow-500 dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Yellow</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-gray-800 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">White</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-red-500 dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden" checked>
                                        <i
                                            class="icofont-verification-check hidden text-base text-white dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">Red</span>
                                </label>
                            </div>
                        </form>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <h4 class="font-medium flex-1 self-center mb-3 text-base">Price Range</h4>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <div class="flex relative justify-center items-center h-20 w-full mx-auto rounded">
                            <div class="min-value numberVal">
                                <input type="number" class="border text-center rounded-full" min="0"
                                    max="100" value="25" disabled>
                            </div>
                            <div class="range-slider">
                                <div class="progress"></div>
                                <span class="range-min-wrapper">
                                    <input class="range-min" type="range" min="0" max="100"
                                        value="25">
                                </span>
                                <span class="range-max-wrapper">
                                    <input class="range-max" type="range" min="0" max="100"
                                        value="100">
                                </span>
                            </div>
                            <div class="max-value numberVal">
                                <input type="number" class="border text-center rounded-full" min="0"
                                    max="100" value="100" disabled>
                            </div>
                        </div>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <h4 class="font-medium flex-1 self-center mb-3 text-base">Size</h4>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <form action="">
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">S</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">M</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">L</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">XL</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">XXL</span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">XXXL</span>
                                </label>
                            </div>
                        </form>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <h4 class="font-medium flex-1 self-center mb-3 text-base">Rating</h4>
                        <div class="border-b border-dashed border-slate-300 dark:border-slate-700/40 my-3"></div>
                        <form action="">
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                    </span>
                                </label>
                            </div>
                            <div class="block my-2">
                                <label class="custom-label inline-block dark:text-slate-300">
                                    <div
                                        class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-5 h-5 relative inline-block leading-5 text-center -mb-[3px]">
                                        <input type="checkbox" class="hidden">
                                        <i
                                            class="icofont-verification-check hidden text-base text-brand-500 dark:text-brand-200 absolute inset-x-0 -top-[2px]"></i>
                                    </div>
                                    <span class="ms-1">
                                        <i class="icofont-star text-yellow-400 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                        <i class="icofont-star text-slate-300 inline-block"></i>
                                    </span>
                                </label>
                            </div>
                        </form>
                    </div><!--end card-body-->
                </div> <!--end inner-grid-->
            </div><!--end col-->
            <div class="col-span-12 sm:col-span-8 md:col-span-9 lg:col-span-9 xl:col-span-9">
                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="sm:col-span-12  md:col-span-4 lg:col-span-3 xl:col-span-3 ">
                            <div
                                class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative">
                                <div class="flex-auto  text-center">
                                    <div class="flex-auto text-center bg-gray-100">
                                        <span
                                            class="absolute right-2 top-2 focus:outline-none text-[12px] bg-green-600/10 text-green-700 dark:text-green-600 rounded font-medium py-0 px-2 mb-5 inline-block">
                                            <?php
                                                $random = rand(20, 80);
                                                echo $random;
                                            ?>
                                            %
                                            off</span>
                                        <?php if(strpos($product->image, 'https://via.placeholder.com') !== false): ?>
                                            <a href="<?php echo e(route('product.detail', ['id' => $product->id])); ?>">
                                                <img src="<?php echo e($product->image); ?>" alt=""
                                                    class="h-36 inline-block my-4 rounded transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('product.detail', ['id' => $product->id])); ?>">
                                                <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt=""
                                                    class="h-36 inline-block my-4 rounded transition ease-in-out delay-50  hover:-translate-y-1 hover:scale-110 duration-500">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex-auto  text-center p-4">
                                        <span
                                            class="focus:outline-none text-[12px] text-slate-500 border border-slate-200 rounded font-medium py-0 px-2 mb-5 inline-block"><?php echo e($product->category->categoryName); ?></span>
                                        <a href="ecommerce-product-detail.html"
                                            class="text-xl font-semibold text-slate-500 dark:text-gray-400 leading-3 block mb-2"><?php echo e($product->title); ?></a>
                                        <?php
                                        $numStars = rand(2, 5);
                                        $rating = ($numStars / 5) * 5;
                                        echo '<div class="mb-4">';
                                        for ($i = 0; $i < $numStars; $i++) {
                                            echo '<i class="icofont-star text-yellow-400 inline-block"></i>';
                                        }
                                        echo '<span class="text-slate-800 font-semibold px-2">' . $rating . '</span>';
                                        echo '</div>';
                                        ?>
                                        <h4 class="text-3xl font-medium dark:text-slate-300 mb-4"><sup
                                                class="text-sm text-slate-500">$</sup><?php echo e(round($product->price * ($random / 100))); ?><del
                                                class="text-base text-slate-400">$<?php echo e($product->price); ?></del>
                                        </h4>
                                        <div class="flex flex-col gap-2">
                                            <a href="<?php echo e(route('product.detail', ['id' => $product->id])); ?>"
                                                class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 rounded font-semibold w-full">Buy
                                                Now</a>
                                            <a href="<?php echo e(route('customer.wishlist', ['id' => $product->id])); ?>"
                                                class="px-4 py-1 lg:px-4 bg-transparent  text-brand text-base  transition hover:bg-brand-500/10 hover:text-brand-500 border border-slate-200 rounded font-semibold w-full">Add
                                                To Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-->
                        </div><!--end col-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><!--end inner-grid-->
                <?php echo e($products->links()); ?>

            </div><!--end col-->
        </div> <!--end grid-->
    </div>
    <?php if(session()->has('addtowish')): ?>
        <script>
            Swal.fire({
                title: "Successfully Added to Wishlist :)",
                icon: 'success'
            });
        </script>
    <?php endif; ?>
    <?php if(session()->has('beenThere')): ?>
        <script>
            Swal.fire({
                title: "Product Already In Wishlist :)",
                icon: 'warning'
            });
        </script>
    <?php endif; ?>
     <?php $__env->slot('script', null, []); ?> 
        <script src="<?php echo e(asset('assets/libs/lucide/umd/lucide.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/@frostui/tailwindcss/frostui.js')); ?>"></script>

        <script src="<?php echo e(asset('assets/libs/nice-select2/js/nice-select2.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/swiper/swiper-bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
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

            const range = document.querySelectorAll(".range-slider span input");
            progress = document.querySelector(".range-slider .progress");
            let gap = 0.1;
            const inputValue = document.querySelectorAll(".numberVal input");

            range.forEach((input) => {
                input.addEventListener("input", (e) => {
                    let minRange = parseInt(range[0].value);
                    let maxRange = parseInt(range[1].value);

                    if (maxRange - minRange < gap) {
                        if (e.target.className === "range-min") {
                            range[0].value = maxRange - gap;
                        } else {
                            range[1].value = minRange + gap;
                        }
                    } else {
                        progress.style.left = (minRange / range[0].max) * 100 + "%";
                        progress.style.right = 100 - (maxRange / range[1].max) * 100 + "%";
                        inputValue[0].value = minRange;
                        inputValue[1].value = maxRange;
                    }
                });
            });
        </script>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08735d9b99bd539905c5264be490a0d8)): ?>
<?php $attributes = $__attributesOriginal08735d9b99bd539905c5264be490a0d8; ?>
<?php unset($__attributesOriginal08735d9b99bd539905c5264be490a0d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08735d9b99bd539905c5264be490a0d8)): ?>
<?php $component = $__componentOriginal08735d9b99bd539905c5264be490a0d8; ?>
<?php unset($__componentOriginal08735d9b99bd539905c5264be490a0d8); ?>
<?php endif; ?>
<?php /**PATH /home/haseeb/What Else/AdminPanel/resources/views/customer/products.blade.php ENDPATH**/ ?>