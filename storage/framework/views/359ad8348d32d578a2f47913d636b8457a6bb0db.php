

<?php $__env->startSection('title', 'Estudiantes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Ver estudiante</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.students.students-show', ['student' => $student])->html();
} elseif ($_instance->childHasBeenRendered($student->id)) {
    $componentId = $_instance->getRenderedChildComponentId($student->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($student->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($student->id);
} else {
    $response = \Livewire\Livewire::mount('admin.students.students-show', ['student' => $student]);
    $html = $response->html();
    $_instance->logRenderedChild($student->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/students/show.blade.php ENDPATH**/ ?>