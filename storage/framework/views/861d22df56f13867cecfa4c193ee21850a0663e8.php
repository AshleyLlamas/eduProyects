

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Ver asistencia</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.assistances.assistances-show', ['assistance' => $assistance])->html();
} elseif ($_instance->childHasBeenRendered($assistance->id)) {
    $componentId = $_instance->getRenderedChildComponentId($assistance->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($assistance->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($assistance->id);
} else {
    $response = \Livewire\Livewire::mount('admin.assistances.assistances-show', ['assistance' => $assistance]);
    $html = $response->html();
    $_instance->logRenderedChild($assistance->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/assistances/show.blade.php ENDPATH**/ ?>