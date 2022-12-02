<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.campuses.index')): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.campuses.index')); ?>">Todos los campus</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active">Nuevo campus</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><?php echo e($campus); ?></h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos del campus</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Nombre del campus')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="campus" class="form-control" wire:model="campus" placeholder="Ingrese el nombre del campus">
                                    <?php $__errorArgs = ['campus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-map-marker-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Dirección (Opcional)</h5>
                            </div>
                            <div>
                                <?php if(!is_null($calle) || !is_null($número_exterior) || !is_null($número_interior) || !is_null($colonia) || !is_null($código_postal) || !is_null($municipio) || !is_null($estado)): ?>
                                    <div class="py-2">
                                        <div class="p-2 bg-light border rounded text-center" data-toggle="tooltip" data-placement="right" title="Vista previa de la dirección">
                                            <?php if(!is_null($calle)): ?> <?php echo e($calle); ?><?php endif; ?> <?php if(!is_null($número_exterior)): ?>, <?php echo e($número_exterior); ?><?php endif; ?> <?php if(!is_null($número_interior)): ?>, <?php echo e($número_interior); ?><?php endif; ?> <?php if(!is_null($colonia)): ?>, <?php echo e($colonia); ?>,<?php endif; ?> <?php if(!is_null($código_postal)): ?> C.P. <?php echo e($código_postal); ?>, <?php endif; ?> <?php if(!is_null($municipio)): ?> <?php echo e($municipio); ?>, <?php endif; ?> <?php if(!is_null($estado)): ?> <?php echo e($estado); ?> <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="col-form-label">
                                                <?php echo e(__('Estado')); ?>

                                                <span class="text-danger">*</span>
                                            </label>
                                            <select wire:model="state" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($state->id); ?>"><?php echo e($state->nombre_del_estado); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <?php if(!is_null($municipalities)): ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">
                                                    <?php echo e(__('Municipio / Alcaldia')); ?>

                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select wire:model="municipality" class="form-control">
                                                    <option value="">Selecciona una opción</option>
                                                    <?php $__currentLoopData = $municipalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($municipality->id); ?>"><?php echo e($municipality->nombre_del_municipio); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['municipality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="c.p" class="col-form-label"><?php echo e(__('C.P')); ?></label>
                                    <input type="text" id="código_postal" class="form-control" wire:model="código_postal" placeholder="Ingrese el código postal">
                                    <?php $__errorArgs = ['código_postal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label">
                                            <?php echo e(__('Calle')); ?>

                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" wire:model="calle" placeholder="Calle">
                                        <?php $__errorArgs = ['calle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label">
                                            <?php echo e(__('Número exterior')); ?>

                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" wire:model="número_exterior" placeholder="Número exterior">
                                        <?php $__errorArgs = ['número_exterior'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label"><?php echo e(__('Número interior')); ?></label>
                                        <input type="text" class="form-control" wire:model="número_interior" placeholder="Número interior">
                                        <?php $__errorArgs = ['número_interior'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label">
                                            <?php echo e(__('Colonia')); ?>

                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" wire:model="colonia" placeholder="Colonia">
                                        <?php $__errorArgs = ['colonia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" wire:click.prevent="save()" wire:target="save" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/campuses/campuses-create.blade.php ENDPATH**/ ?>