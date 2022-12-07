

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.acceso-administrativo')->html();
} elseif ($_instance->childHasBeenRendered('qnsU7QO')) {
    $componentId = $_instance->getRenderedChildComponentId('qnsU7QO');
    $componentTag = $_instance->getRenderedChildComponentTagName('qnsU7QO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qnsU7QO');
} else {
    $response = \Livewire\Livewire::mount('auth.acceso-administrativo');
    $html = $response->html();
    $_instance->logRenderedChild('qnsU7QO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/auth/acceso-administrativo.blade.php ENDPATH**/ ?>