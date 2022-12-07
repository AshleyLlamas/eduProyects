

<?php $__env->startSection('title', 'Panel Administrativo'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Todos los cuestionarios</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.questionnaires.questionnaires-index')->html();
} elseif ($_instance->childHasBeenRendered('jzmI6YR')) {
    $componentId = $_instance->getRenderedChildComponentId('jzmI6YR');
    $componentTag = $_instance->getRenderedChildComponentTagName('jzmI6YR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jzmI6YR');
} else {
    $response = \Livewire\Livewire::mount('admin.questionnaires.questionnaires-index');
    $html = $response->html();
    $_instance->logRenderedChild('jzmI6YR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/questionnaires/index.blade.php ENDPATH**/ ?>