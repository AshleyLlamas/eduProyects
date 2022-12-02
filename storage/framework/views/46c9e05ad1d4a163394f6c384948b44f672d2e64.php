

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Nueva carrera</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.careers.careers-create')->html();
} elseif ($_instance->childHasBeenRendered('FJ12tYr')) {
    $componentId = $_instance->getRenderedChildComponentId('FJ12tYr');
    $componentTag = $_instance->getRenderedChildComponentTagName('FJ12tYr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FJ12tYr');
} else {
    $response = \Livewire\Livewire::mount('admin.careers.careers-create');
    $html = $response->html();
    $_instance->logRenderedChild('FJ12tYr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/careers/create.blade.php ENDPATH**/ ?>