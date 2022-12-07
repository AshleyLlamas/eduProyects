<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.index')): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.questionnaires.index')); ?>">Todos los cuestionarios</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active">Nuevo cuestionario</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><?php echo e($título); ?></h5>
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
                                <h5 class="py-1 text-center">Cuestionario</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Título')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="título" placeholder="Ingrese el título del cuestionario" wire:model="título">
                                    <?php $__errorArgs = ['título'];
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
                                <div class="my-auto"><i class="fa-solid fa-question"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Preguntas</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        <?php echo e(__('Título')); ?>

                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">1</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="pregunta" placeholder="Pregunta" wire:model="pregunta">
                                    </div>
                                    
                                </div>
                                <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card bg-light col-12">
                                        <div class="card-header">
                                            <button class="btn btn-danger float-right <?php if($question == 0): ?> disabled <?php else: ?>" wire:click.prevent="removeQuestion(<?php echo e($question); ?>)" <?php endif; ?>"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <div class="form-group">
                                                            <label class="col-form-label">
                                                                <?php echo e(__('Título')); ?>

                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text" id="spanPregunta.<?php echo e($question); ?>"><?php echo e($question+1); ?></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Ingrese una pregunta" id="pregunta.<?php echo e($question); ?>" required wire:model="pregunta.<?php echo e($question); ?>">
                                                            </div>
                                                            <?php $__errorArgs = ['pregunta.'.$question];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <th>Opciones</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $numero => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                          <span class="input-group-text" id="spanOpción.<?php echo e($question); ?>.<?php echo e($numero); ?>"><?php echo e(($question+1).'.'.($numero+1)); ?></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Ingrese una opción" id="inputoOpción.<?php echo e($question); ?>.<?php echo e($numero); ?>" wire:model="opción.<?php echo e($question); ?>.<?php echo e($numero); ?>">
                                                                    </div>
                                                                    <?php $__errorArgs = ['opción.'.$question.'.'.$numero];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                            </td>
                                                            <td style="width: 10px;">
                                                                <button class="btn btn-danger <?php if($numero == 0): ?> disabled" <?php else: ?>" wire:click.prevent="removeOption(<?php echo e($question); ?>,<?php echo e($numero); ?>)" <?php endif; ?> id="buttonOpción.<?php echo e($question); ?>.<?php echo e($numero); ?>"><i class="fas fa-times"></i></button>
                                                            </td>
                                                        </tr> 
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="btn-group mr-2" role="group">
                                                <button type="button" class="btn btn-secondary" wire:click.prevent="removeOption(<?php echo e($question); ?>,<?php echo e($numero); ?>)">-</button>
                                                <button type="button" class="btn btn-secondary" wire:click.prevent="addOption(<?php echo e($question); ?>,<?php echo e($numero); ?>)">+</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 pb-2">
                                    <button type="button" class="btn btn-secondary btn-lg btn-block" wire:click.prevent="addQuestion(<?php echo e($x); ?>)">
                                        Agregar pregunta
                                    </button>
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
</div><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/questionnaires/questionnaires-create.blade.php ENDPATH**/ ?>