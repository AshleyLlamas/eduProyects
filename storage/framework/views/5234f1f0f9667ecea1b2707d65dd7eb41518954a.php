

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Todos los campus</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.campuses.campuses-index')->html();
} elseif ($_instance->childHasBeenRendered('WcDsKH1')) {
    $componentId = $_instance->getRenderedChildComponentId('WcDsKH1');
    $componentTag = $_instance->getRenderedChildComponentTagName('WcDsKH1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WcDsKH1');
} else {
    $response = \Livewire\Livewire::mount('admin.campuses.campuses-index');
    $html = $response->html();
    $_instance->logRenderedChild('WcDsKH1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/campuses/index.blade.php ENDPATH**/ ?>