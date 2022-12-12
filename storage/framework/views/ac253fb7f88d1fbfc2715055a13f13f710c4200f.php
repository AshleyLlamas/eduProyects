

<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Nuevo usuario</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users.users-create')->html();
} elseif ($_instance->childHasBeenRendered('c1J4MMm')) {
    $componentId = $_instance->getRenderedChildComponentId('c1J4MMm');
    $componentTag = $_instance->getRenderedChildComponentTagName('c1J4MMm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('c1J4MMm');
} else {
    $response = \Livewire\Livewire::mount('admin.users.users-create');
    $html = $response->html();
    $_instance->logRenderedChild('c1J4MMm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/users/create.blade.php ENDPATH**/ ?>