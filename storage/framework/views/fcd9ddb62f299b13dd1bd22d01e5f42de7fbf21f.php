<div class="container">
    <div class="card card-outline card-info">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4 justify-content-center align-self-center">
                    <div class="text-center my-4 mx-4">
                        <img class="img-fluid"
                        src="<?php echo e(asset('img/logo-negro.svg')); ?>"
                        alt="Fotografía">
                    </div>
                </div> 
                <div class="col-12 col-md-8">
                    <div class="text-center text-secondary">
                        <h4>
                            <?php echo e($user->name); ?>

                        </h4>
                        <p>
                            <span class="badge badge-pill badge badge-info py-2">
                                <?php if($user->roles->count()): ?>
                                    <?php echo e($user->roles->pluck('name')[0]); ?>

                                <?php endif; ?>
                            </span>
                        </p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <strong>Nombre</strong>

                            <p class="text-muted mb-1">
                                <?php if(isset($user->name)): ?>
                                    <?php echo e($user->name); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </p>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <strong>Correo electrónico</strong>

                            <p class="text-muted mb-1">
                                <?php if(isset($user->email)): ?>
                                    <?php echo e($user->email); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </p>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <strong>Rol</strong>

                            <p class="text-muted mb-1">
                                <?php if($user->roles->count()): ?>
                                    <?php echo e($user->roles->pluck('name')[0]); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/users/users-show.blade.php ENDPATH**/ ?>