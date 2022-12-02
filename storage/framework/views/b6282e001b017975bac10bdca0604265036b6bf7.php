<div>
    <div class="body-slider">
        <div class="slider">
            <div class="container">
                <div class="content-home" style="padding-top: 10%; padding-bottom: 40%;">
                    <div class="rounded shadow p-5 bg-white">
                        <div class="text-center">
                            <i class="fa-solid fa-graduation-cap fa-5x"></i>
                            <h1><strong>Bienvenido alumno</strong></h1>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12" wire:ignore>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Ingrece su email" wire:model="email">
                                        <label for="telefono" class="col-md-4 col-form-label"><?php echo e(__('Correo')); ?></label>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12" wire:ignore>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" name="curp" id="curp" aria-describedby="curp" placeholder="Ingrece su curp" wire:model="curp">
                                        <label for="telefono" class="col-md-4 col-form-label"> <?php echo e(__('CURP')); ?></label>
                                        <?php $__errorArgs = ['curp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-danger"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-success btn-lg m-1" wire:loading.attr="disabled" wire:click.prevent="search">Ingresar</button>
                                </div>
                            </div>
                            <div wire:loading wire:target="search">
                                <button class="btn btn-white mt-3" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    Cargando...
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if(session('error') == 'No se encuentran resultados o los datos no coinciden.'): ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'No se encuentran resultados o los datos no coinciden.',
                showConfirmButton: false,
                timer: 4000
            })
        </script> 
    <?php endif; ?>
<?php $__env->stopPush(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/auth/acceso.blade.php ENDPATH**/ ?>