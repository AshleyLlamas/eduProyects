

<?php $__env->startSection('title', 'Estudiantes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Todos los estudiantes</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.students.students-index')->html();
} elseif ($_instance->childHasBeenRendered('w1sD7ds')) {
    $componentId = $_instance->getRenderedChildComponentId('w1sD7ds');
    $componentTag = $_instance->getRenderedChildComponentTagName('w1sD7ds');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('w1sD7ds');
} else {
    $response = \Livewire\Livewire::mount('admin.students.students-index');
    $html = $response->html();
    $_instance->logRenderedChild('w1sD7ds', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/students/index.blade.php ENDPATH**/ ?>