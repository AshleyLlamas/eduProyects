

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Todas las asistencias</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.assistances.assistances-index')->html();
} elseif ($_instance->childHasBeenRendered('UePWY6a')) {
    $componentId = $_instance->getRenderedChildComponentId('UePWY6a');
    $componentTag = $_instance->getRenderedChildComponentTagName('UePWY6a');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UePWY6a');
} else {
    $response = \Livewire\Livewire::mount('admin.assistances.assistances-index');
    $html = $response->html();
    $_instance->logRenderedChild('UePWY6a', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/assistances/index.blade.php ENDPATH**/ ?>