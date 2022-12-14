

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Nuevo campus</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.campuses.campuses-create')->html();
} elseif ($_instance->childHasBeenRendered('58dzsIA')) {
    $componentId = $_instance->getRenderedChildComponentId('58dzsIA');
    $componentTag = $_instance->getRenderedChildComponentTagName('58dzsIA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('58dzsIA');
} else {
    $response = \Livewire\Livewire::mount('admin.campuses.campuses-create');
    $html = $response->html();
    $_instance->logRenderedChild('58dzsIA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/campuses/create.blade.php ENDPATH**/ ?>