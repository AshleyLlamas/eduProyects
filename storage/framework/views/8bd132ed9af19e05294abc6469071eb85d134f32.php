

<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.mi-perfil')->html();
} elseif ($_instance->childHasBeenRendered('jTx4NuH')) {
    $componentId = $_instance->getRenderedChildComponentId('jTx4NuH');
    $componentTag = $_instance->getRenderedChildComponentTagName('jTx4NuH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jTx4NuH');
} else {
    $response = \Livewire\Livewire::mount('auth.mi-perfil');
    $html = $response->html();
    $_instance->logRenderedChild('jTx4NuH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('css/mi-perfil.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/auth/mi-perfil.blade.php ENDPATH**/ ?>