<div>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><i class="fa-solid fa-list"></i> Todas los cuestionarios <span class="badge badge-light"> <?php echo e($all_questionnaires); ?></span></h5>
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
                        </div>
                        <input wire:model="search" class="form-control" placeholder="Ingrese el título del cuestionario">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="form-group my-2" wire:model="order">
                        <select class="form-control" id="orderFormControlSelect">
                        <option value="1">Ordernar por más reciente</option>
                        <option value="2">Ordernar por más antiguo</option>
                        <option value="2">Ordernar por título del A-Z</option>
                        <option value="2">Ordernar por título del Z-A</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2">
                    <a class="btn btn-success btn-block  my-2 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('admin.questionnaires.create')): ?> disabled <?php endif; ?>" href="<?php echo e(route('admin.questionnaires.create')); ?>"><i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body p-0 table-responsive">
            <?php if($questionnaires->count()): ?>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.show')): ?>
                                <th></th>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.edit')): ?>
                                <th></th>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.destroy')): ?>
                                <th></th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($questionnaire->id); ?></td>
                                <td>
                                    <?php if(isset($questionnaire->título)): ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.show')): ?>
                                            <a href="<?php echo e(route('admin.questionnaires.show', $questionnaire)); ?>"><?php echo e($questionnaire->título); ?></a>
                                        <?php else: ?>
                                            <?php echo e($questionnaire->título); ?>

                                        <?php endif; ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.show')): ?>
                                    <td width="10px"><a class="btn btn-default btn-sm" href="<?php echo e(route('admin.questionnaires.show', $questionnaire)); ?>"><i class="fas fa-eye"></i></a></td>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.edit')): ?>
                                    <td width="10px"><a class="btn btn-default btn-sm" href="<?php echo e(route('admin.questionnaires.edit', $questionnaire)); ?>"><i class="fas fa-edit"></i></a></td>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.questionnaires.destroy')): ?>
                                    <td width="10px">
                                        <form action="<?php echo e(route('admin.questionnaires.destroy', $questionnaires)); ?>" method="POST" class="alert-delete">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="delete()"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
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
            <?php echo e($questionnaires->links()); ?>

        </div>
    </div>
</div>

<?php $__env->startPush('js'); ?>
    <?php if(session('eliminar') == 'ok'): ?>
        <script>
            Swal.fire(
            '¡Eliminado!',
            'El cuestionario se elimino con éxito.',
            'success'
            )
        </script>
    <?php endif; ?>

    <script>
        $('.alert-delete').submit(function (e) {
        e.preventDefault();
        Swal.fire({
        title: '¿Estas seguro?',
        text: "El cuestionario se eliminara definitivamente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, ¡Eliminar!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
        })
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/questionnaires/questionnaires-index.blade.php ENDPATH**/ ?>