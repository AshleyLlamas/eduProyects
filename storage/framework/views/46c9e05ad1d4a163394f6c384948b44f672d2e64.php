

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Nueva carrera</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.careers.careers-create')->html();
} elseif ($_instance->childHasBeenRendered('MWigh8W')) {
    $componentId = $_instance->getRenderedChildComponentId('MWigh8W');
    $componentTag = $_instance->getRenderedChildComponentTagName('MWigh8W');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MWigh8W');
} else {
    $response = \Livewire\Livewire::mount('admin.careers.careers-create');
    $html = $response->html();
    $_instance->logRenderedChild('MWigh8W', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/careers/create.blade.php ENDPATH**/ ?>