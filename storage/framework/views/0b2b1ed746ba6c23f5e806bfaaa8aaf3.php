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
        <link rel="shortcut icon" href="<?php echo e(asset('assets/css/tailwind.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/libs/filepond/filepond.min.css')); ?>">
        <link rel="stylesheet"
            href="<?php echo e(asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/libs/vanillajs-datepicker/css/datepicker.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/libs/mobius1-selectr/selectr.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/libs/icofont/icofont.min.css')); ?>">
        <link href="<?php echo e(asset('assets/libs/flatpickr/flatpickr.min.css')); ?>" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.min.css')); ?>">
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
                                        <h1 class="font-medium text-3xl block dark:text-slate-100">Add Category</h1>
                                        <ol class="list-reset flex text-sm">
                                            <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a>
                                            </li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                            <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                            <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                                Add Category</li>
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
            <div class="xl:w-full min-h-[calc(100vh-138px)] relative pb-14">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-6 lg:col-start-2">
                        <div class="w-full relative mb-4">
                            <form action="<?php echo e(route('category.update', $data->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="flex-auto p-0 md:p-4">
                                    <div class="mb-2">
                                        <label for="title"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Category
                                            Title</label>
                                        <input type="text" id="title" name="categoryName"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                            placeholder="Category Title" value="<?php echo e($data->categoryName); ?>" required>
                                    </div>
                                    <?php $__errorArgs = ['categoryName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="font-bold text-red-500 p-2"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="mb-2">
                                        <label for="slug"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Category
                                            Slug</label>
                                        <input type="text" id="slug" name="categorySlug"
                                            value="<?php echo e($data->categorySlug); ?>"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700"
                                            placeholder="Category Slug" required>
                                    </div>
                                    <?php $__errorArgs = ['categorySlug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="font-bold text-red-500 p-2"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <div class="">
                                        <button
                                            class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Update
                                            Category</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--end card-->
                    </div><!--end col-->
                </div> <!--end grid-->

                <!-- footer -->
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
    </div><!--end /div-->
    <?php if(session()->has('success')): ?>
        <script>
            Swal.fire({
                title: "Category Successfully Updated :)",
                icon: 'success'
            });
        </script>
    <?php endif; ?>
     <?php $__env->slot('script', null, []); ?> 
        <script src="<?php echo e(asset('assets/libs/lucide/umd/lucide.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/@frostui/tailwindcss/frostui.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/filepond/filepond.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/vanillajs-datepicker/js/datepicker-full.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/mobius1-selectr/selectr.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
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
<?php /**PATH /home/haseeb/What Else/AdminPanel/resources/views/categories/edit.blade.php ENDPATH**/ ?>