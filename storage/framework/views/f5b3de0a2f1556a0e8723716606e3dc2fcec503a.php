

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.acceso-administrativo')->html();
} elseif ($_instance->childHasBeenRendered('sQhzrUc')) {
    $componentId = $_instance->getRenderedChildComponentId('sQhzrUc');
    $componentTag = $_instance->getRenderedChildComponentTagName('sQhzrUc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sQhzrUc');
} else {
    $response = \Livewire\Livewire::mount('auth.acceso-administrativo');
    $html = $response->html();
    $_instance->logRenderedChild('sQhzrUc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/auth/acceso-administrativo.blade.php ENDPATH**/ ?>