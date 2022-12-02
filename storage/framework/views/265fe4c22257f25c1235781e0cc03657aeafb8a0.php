

<?php $__env->startSection('title', 'Estudiantes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Todos los estudiantes</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.students.students-index')->html();
} elseif ($_instance->childHasBeenRendered('8nE5H91')) {
    $componentId = $_instance->getRenderedChildComponentId('8nE5H91');
    $componentTag = $_instance->getRenderedChildComponentTagName('8nE5H91');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8nE5H91');
} else {
    $response = \Livewire\Livewire::mount('admin.students.students-index');
    $html = $response->html();
    $_instance->logRenderedChild('8nE5H91', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/students/index.blade.php ENDPATH**/ ?>