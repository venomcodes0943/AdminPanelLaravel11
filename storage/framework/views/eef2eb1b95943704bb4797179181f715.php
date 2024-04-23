<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Robotech - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('/assets/images/favicon.ico')); ?>" />
    <!-- Css -->
    <?php echo e($head); ?>

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->
    <?php if (isset($component)) { $__componentOriginal48ae152b6b1c3543c2e179772b10de79 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48ae152b6b1c3543c2e179772b10de79 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.customer-layout.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('customer-layout.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48ae152b6b1c3543c2e179772b10de79)): ?>
<?php $attributes = $__attributesOriginal48ae152b6b1c3543c2e179772b10de79; ?>
<?php unset($__attributesOriginal48ae152b6b1c3543c2e179772b10de79); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48ae152b6b1c3543c2e179772b10de79)): ?>
<?php $component = $__componentOriginal48ae152b6b1c3543c2e179772b10de79; ?>
<?php unset($__componentOriginal48ae152b6b1c3543c2e179772b10de79); ?>
<?php endif; ?>

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">


                <?php echo e($slot); ?>



                <?php if (isset($component)) { $__componentOriginala0f7d260444c782f9eebdc95d5075c12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0f7d260444c782f9eebdc95d5075c12 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.customer-layout.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('customer-layout.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0f7d260444c782f9eebdc95d5075c12)): ?>
<?php $attributes = $__attributesOriginala0f7d260444c782f9eebdc95d5075c12; ?>
<?php unset($__attributesOriginala0f7d260444c782f9eebdc95d5075c12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0f7d260444c782f9eebdc95d5075c12)): ?>
<?php $component = $__componentOriginala0f7d260444c782f9eebdc95d5075c12; ?>
<?php unset($__componentOriginala0f7d260444c782f9eebdc95d5075c12); ?>
<?php endif; ?>
            </div><!--end main-->
        </div><!--end page-wrapper-->
    </div><!--end div-->


    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <?php echo e($script); ?>

    <!-- JAVASCRIPTS -->
</body>

</html>
<?php /**PATH /home/haseeb/What Else/AdminPanel/resources/views/components/customer-layout/layout.blade.php ENDPATH**/ ?>