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
    <script src="//unpkg.com/alpinejs" defer></script>
    <?php echo e($head); ?>

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->

    <?php if (isset($component)) { $__componentOriginal0ee764428868984c303733ce7705af3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ee764428868984c303733ce7705af3e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-layout.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ee764428868984c303733ce7705af3e)): ?>
<?php $attributes = $__attributesOriginal0ee764428868984c303733ce7705af3e; ?>
<?php unset($__attributesOriginal0ee764428868984c303733ce7705af3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ee764428868984c303733ce7705af3e)): ?>
<?php $component = $__componentOriginal0ee764428868984c303733ce7705af3e; ?>
<?php unset($__componentOriginal0ee764428868984c303733ce7705af3e); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal36ee46bc85d1969a9a7ae4869111ee6a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36ee46bc85d1969a9a7ae4869111ee6a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-layout.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36ee46bc85d1969a9a7ae4869111ee6a)): ?>
<?php $attributes = $__attributesOriginal36ee46bc85d1969a9a7ae4869111ee6a; ?>
<?php unset($__attributesOriginal36ee46bc85d1969a9a7ae4869111ee6a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36ee46bc85d1969a9a7ae4869111ee6a)): ?>
<?php $component = $__componentOriginal36ee46bc85d1969a9a7ae4869111ee6a; ?>
<?php unset($__componentOriginal36ee46bc85d1969a9a7ae4869111ee6a); ?>
<?php endif; ?>

    <?php echo e($slot); ?>


    <?php echo e($script); ?>

</body>

</html>
<?php /**PATH /home/haseeb/What Else/AdminPanel/resources/views/components/admin-layout/layout.blade.php ENDPATH**/ ?>