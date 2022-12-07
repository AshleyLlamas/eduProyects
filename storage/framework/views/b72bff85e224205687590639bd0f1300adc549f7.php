

<?php $__env->startSection('title', 'Estudiantes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Nuevo estudiante</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.students.students-create')->html();
} elseif ($_instance->childHasBeenRendered('nYDNQ0a')) {
    $componentId = $_instance->getRenderedChildComponentId('nYDNQ0a');
    $componentTag = $_instance->getRenderedChildComponentTagName('nYDNQ0a');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nYDNQ0a');
} else {
    $response = \Livewire\Livewire::mount('admin.students.students-create');
    $html = $response->html();
    $_instance->logRenderedChild('nYDNQ0a', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/students/create.blade.php ENDPATH**/ ?>