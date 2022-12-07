<div>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><i class="fa-solid fa-list"></i> Todos los checks <span class="badge badge-light"> <?php echo e($all_checks); ?></span></h5>
        </div>
        <div class="card-header">
            <div class="row">
                <input type="date" wire:model="search" class="form-control">
            </div>
        </div>
        <div class="card-body p-0 table-responsive">
            <?php if($checks->count()): ?>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Estudiante</th>
                            <th>Entrada</th>
                            <th>Salida</th>
                            <th>Estatus</th>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.checks.show')): ?>
                                <th></th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $checks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $check): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($check->id); ?></td>
                                <td>
                                    <?php if(isset($check->student_id)): ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.students.show')): ?>
                                            <a href="<?php echo e(route('admin.students.show', $check->student)); ?>"><?php echo e($check->student->nombre); ?></a>
                                        <?php else: ?>
                                            <?php echo e($check->students->name); ?>

                                        <?php endif; ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($check->in)): ?>
                                        <?php echo e($check->in->hora); ?>

                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($check->out)): ?>
                                        <?php echo e($check->out->hora); ?>

                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($check->assistance)): ?>
                                        <i class="fa-solid fa-circle-check" style="color: green"></i>
                                    <?php else: ?>
                                        <i class="fa-solid fa-hourglass-start" style="color: gray"></i>
                                    <?php endif; ?>
                                </td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.checks.show')): ?>
                                    <td width="10px"><a class="btn btn-default btn-sm" href="<?php echo e(route('admin.checks.show', $check)); ?>"><i class="fas fa-eye"></i></a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="my-5">
                    <p class="text-center text-danger"><strong>Sin registro</strong></p>
                </div>
            <?php endif; ?>
        </div>
        <div class="card-footer">
            <?php echo e($checks->links()); ?>

        </div>
    </div>
</div><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/checks/checks-index.blade.php ENDPATH**/ ?>