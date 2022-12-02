

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Todas las carreras</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.careers.careers-index')->html();
} elseif ($_instance->childHasBeenRendered('llTINB2')) {
    $componentId = $_instance->getRenderedChildComponentId('llTINB2');
    $componentTag = $_instance->getRenderedChildComponentTagName('llTINB2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('llTINB2');
} else {
    $response = \Livewire\Livewire::mount('admin.careers.careers-index');
    $html = $response->html();
    $_instance->logRenderedChild('llTINB2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/careers/index.blade.php ENDPATH**/ ?>