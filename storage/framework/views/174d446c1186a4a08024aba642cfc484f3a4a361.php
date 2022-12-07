

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.acceso')->html();
} elseif ($_instance->childHasBeenRendered('ctf6pel')) {
    $componentId = $_instance->getRenderedChildComponentId('ctf6pel');
    $componentTag = $_instance->getRenderedChildComponentTagName('ctf6pel');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ctf6pel');
} else {
    $response = \Livewire\Livewire::mount('auth.acceso');
    $html = $response->html();
    $_instance->logRenderedChild('ctf6pel', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/auth/acceso.blade.php ENDPATH**/ ?>