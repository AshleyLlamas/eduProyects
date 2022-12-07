

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Todos los checks</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.checks.checks-index')->html();
} elseif ($_instance->childHasBeenRendered('YGNRstJ')) {
    $componentId = $_instance->getRenderedChildComponentId('YGNRstJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('YGNRstJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YGNRstJ');
} else {
    $response = \Livewire\Livewire::mount('admin.checks.checks-index');
    $html = $response->html();
    $_instance->logRenderedChild('YGNRstJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/checks/index.blade.php ENDPATH**/ ?>