<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.students.index')): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.students.index')); ?>">Todos los estudiantes</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active">Nuevo estudiante</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><?php echo e($nombre); ?></h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    
                    <div class="row rounded border  mb-3">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-image"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Foto</h5>
                            </div>
                            <div class="custom-file mt-3 pt-3">
                                <input type="file" class="custom-file-input" lang="es" wire:model="foto" accept="image/*">
                                <label class="custom-file-label" for="customFileLang">Selecciona una foto</label>
                                <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div>
                                <div wire:loading wire:target="foto">
                                    <button class="btn btn-white mt-3" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Cargando...
                                    </button>
                                </div>
                                <div class="pt-3">
                                    <?php if($foto): ?>
                                        <img class="img-fluid rounded" style="display: block; margin-left: auto; margin-right: auto;" src="<?php echo e($foto->temporaryurl()); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos del estudiante</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Nombre completo')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="nombre" class="form-control" wire:model="nombre" placeholder="Ingrese el nombre del estudiante">
                                    <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Correo')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="correo" class="form-control" wire:model="email" placeholder="Ingrese el correo del estudiante">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('CURP')); ?>

                                    </label>
                                    <input type="text" id="curp" class="form-control" wire:model="curp" placeholder="Ingrese el CURP del estudiante">
                                    <?php $__errorArgs = ['curp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Sexo')); ?>

                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="sexo">
                                        <option value="">Selecciona una opción</option>
                                        <option>FEMENINO</option>
                                        <option>MASCULINO</option>
                                    </select>
                                    <?php $__errorArgs = ['sexo'];
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
                    
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa-solid fa-truck-medical"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Seguro del estudiante (Opcional)</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Número de afiliciadión')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="número_de_afiliación" class="form-control" wire:model="número_de_afiliación" placeholder="Ingrese el número de afiliación del estudiante">
                                    <?php $__errorArgs = ['número_de_afiliación'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Tipo de aseguranza')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="tipo_de_aseguranza" class="form-control" wire:model="tipo_de_aseguranza" placeholder="Ingrese el tipo de aseguranza del estudiante">
                                    <?php $__errorArgs = ['tipo_de_aseguranza'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Tipo de sangre')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="tipo_de_sangre" class="form-control" wire:model="tipo_de_sangre" placeholder="Ingrese el tipo de sangre del estudiante">
                                    <?php $__errorArgs = ['tipo_de_sangre'];
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
                                <div class="my-auto"><i class="fa-solid fa-people-roof"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Padre / Tutor (Opcional)</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Nombre del tutor')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="nombre_del_tutor" class="form-control" wire:model="nombre_del_tutor" placeholder="Ingrese el nombre del tutor">
                                    <?php $__errorArgs = ['nombre_del_tutor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Correo electrónico')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="email_del_tutor" class="form-control" wire:model="email_del_tutor" placeholder="Ingrese el correo electrónico del padre o tutor">
                                    <?php $__errorArgs = ['email_del_tutor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Número celular')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="celular_del_tutor" class="form-control" wire:model="celular_del_tutor" placeholder="Ingrese el número celular del padre o tutor">
                                    <?php $__errorArgs = ['celular_del_tutor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Número teléfonico')); ?>

                                    </label>
                                    <input type="text" id="teléfono_del_tutor" class="form-control" wire:model="teléfono_del_tutor" placeholder="Ingrese el número teléfono del padre o tutor">
                                    <?php $__errorArgs = ['teléfono_del_tutor'];
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
                                <div class="my-auto"><i class="fa-solid fa-school"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos escolares del estudiante</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Matricula')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="matrícula" class="form-control" wire:model="matrícula" placeholder="Ingrese el matrícula del estudiante">
                                    <?php $__errorArgs = ['matrícula'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        <?php echo e(__('Semestre')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" id="semestre" class="form-control" wire:model="semestre" placeholder="Ingrese el semestre del estudiante">
                                    <?php $__errorArgs = ['semestre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        <?php echo e(__('Grupo')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="grupo" class="form-control" wire:model="grupo" placeholder="Ingrese el grupo del estudiante">
                                    <?php $__errorArgs = ['grupo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        <?php echo e(__('Carrera')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="career">
                                        <option value="">Selecciona una opción</option>
                                        <?php $__currentLoopData = $careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $career): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($career->id); ?>"><?php echo e($career->carrera); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['career'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        <?php echo e(__('Turno')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="turno">
                                        <option value="">Selecciona una opción</option>
                                        <option>MATUTINO</option>
                                        <option>INTERMEDIO</option>
                                        <option>VESPERTINO</option>
                                        <option>HORARIO COMPLETO</option>
                                        <option>NOCTURNO</option>
                                    </select>
                                    <?php $__errorArgs = ['turno'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        <?php echo e(__('Ciclo escolar')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="ciclo_escolar" class="form-control" wire:model="ciclo_escolar" placeholder="Ingrese el ciclo escolar del estudiante">
                                    <?php $__errorArgs = ['ciclo_escolar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        <?php echo e(__('Campus')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="campus">
                                        <option value="">Selecciona una opción</option>
                                        <?php $__currentLoopData = $campuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($campus->id); ?>"><?php echo e($campus->campus); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['campus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Días laborales a la semana')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div wire:ignore>
                                        <select class="w-100" id="days" name="days[]" multiple="multiple">
                                            <option>Lunes</option>
                                            <option>Martes</option>
                                            <option>Miercoles</option>
                                            <option>Jueves</option>
                                            <option>Viernes</option>
                                            <option>Sabado</option>
                                            <option>Domingo</option>
                                        </select>
                                    </div>
                                </div>
                                <?php if(count($days)): ?>
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table text-center border">
                                                <thead>
                                                    <tr>
                                                        <th colspan="<?php echo e(count($days)+1); ?>">Horario</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="bg-secondary"><i class="fa-solid fa-clock"></i></th>
                                                        <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <th class="border-left bg-secondary"><?php echo e($day); ?></th>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row" class="bg-light">Entrada</th>
                                                    <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td class="border-left">
                                                            <input type="time" class="form-control border-0" id="entrada<?php echo e($day); ?>" required wire:model="hora_de_entrada.<?php echo e($n); ?>">
                                                            <?php $__errorArgs = ['hora_de_entrada.'.$n];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                                    <tr>
                                                        <th scope="row" class="bg-light">Salida</th>
                                                        <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <td class="border-left">
                                                                <input type="time" class="form-control border-0" id="salida<?php echo e($day); ?>" required wire:model="hora_de_salida.<?php echo e($n); ?>">
                                                                <?php $__errorArgs = ['hora_de_salida.'.$n];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            </td>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa-solid fa-qrcode"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Códigos</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Slug')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="slug" class="form-control" wire:model="slug" disabled>
                                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('QR')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="qr" class="form-control" wire:model="qr" disabled>
                                    <?php $__errorArgs = ['qr'];
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
            </form>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button type="button" wire:click.prevent="save()" wire:target="save" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('css'); ?>
    <style>
    .select2 {
        width:100%!important;
    }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function () {
            $('#days').select2();
            $('#days').on('change', function (e) {
                var data = $('#days').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('days', data);
            });
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/students/students-create.blade.php ENDPATH**/ ?>