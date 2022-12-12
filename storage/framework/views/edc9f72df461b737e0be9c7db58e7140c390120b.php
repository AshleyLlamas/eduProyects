<div>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><i class="fa-solid fa-list"></i> Todas las asistencias <span class="badge badge-light"> <?php echo e($all_assistances); ?></span></h5>
        </div>
        <div class="card-header">
            <input type="date" wire:model="date" class="form-control my-2">
        </div>
        <div class="card-body p-0 table-responsive">
            <?php if($assistances->count()): ?>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Asistencia</th>
                            <th>Usuario</th>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.assistances.show')): ?>
                                <th></th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $assistances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assistance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($assistance->id); ?></td>
                                <td>
                                    <?php if(isset($assistance->check)): ?>
                                        <?php echo e($assistance->check->fecha); ?>

                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($assistance->asistencia)): ?>
                                        <?php echo e($assistance->asistencia); ?>

                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($assistance->student_id)): ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.students.show')): ?>
                                            <a href="<?php echo e(route('admin.students.show', $assistance->student)); ?>"><?php echo e($assistance->student->nombre); ?></a>
                                        <?php else: ?>
                                            <?php echo e($assistance->students->nombre); ?>

                                        <?php endif; ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.assistances.show')): ?>
                                    <td width="10px"><a class="btn btn-default btn-sm" href="<?php echo e(route('admin.assistances.show', $assistance)); ?>"><i class="fas fa-eye"></i></a></td>
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
            <?php echo e($assistances->links()); ?>

        </div>
    </div>
</div><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/assistances/assistances-index.blade.php ENDPATH**/ ?>