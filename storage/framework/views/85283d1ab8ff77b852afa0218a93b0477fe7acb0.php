

<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1 class="text-center mb-1">Ver usuario</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users.users-show', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered($user->id)) {
    $componentId = $_instance->getRenderedChildComponentId($user->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($user->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($user->id);
} else {
    $response = \Livewire\Livewire::mount('admin.users.users-show', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild($user->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/admin/users/show.blade.php ENDPATH**/ ?>