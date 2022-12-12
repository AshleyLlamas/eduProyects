<div>
    <div class="main-body">
        <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo e(Storage::url($student->image->url)); ?>" alt="foto" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>
                                    <?php echo e($student->nombre); ?>

                                    <br><?php echo e($student->semestre.$student->grupo.$student->career->abreviatura); ?>

                                </h4>
                                <p class="text-secondary mb-1"><?php echo e($student->campus->campus); ?></p>
                                <p class="text-muted font-size-sm">
                                    <?php echo e($student->ciclo_escolar); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow mt-4">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Estadisticas de asistencia</i></h6>
                        <small>Faltas</small>
                        <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo e($porcentaje_de_faltas); ?>%" aria-valuenow="<?php echo e($porcentaje_de_faltas); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Retardos</small>
                        <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e($porcentaje_de_retardos); ?>%" aria-valuenow="<?php echo e($porcentaje_de_retardos); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <h2 class="mb-0 text-center">Checador</h2>
                            </div>
                        </div>
                        <hr>
                        <div class="row pt-2">
                            <div class="col">
                                <div class="text-start text-secondary">
                                    <?php if(isset($check->in)): ?>
                                        <p class="mb-1 h5"><span class="badge rounded-pill bg-secondary text-white shadow-sm py-2"><i class="fa-solid fa-clock" style="color: gainsboro"></i> <b>Entrada:</b> <?php echo e($check->in->hora); ?></span></p>
                                    <?php endif; ?>
                                    <?php if(isset($check->out)): ?>
                                        <p class="mb-1 h5"><span class="badge rounded-pill bg-secondary text-white shadow-sm py-2"><i class="fa-solid fa-clock" style="color: gainsboro"></i> <b>Salida:</b> <?php echo e($check->out->hora); ?></span></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col h1 text-center text-secondary">
                                <?php if(isset($check->in)): ?>
                                    <i class="fa-solid fa-clock"></i>
                                <?php else: ?>
                                    <i class="fa-regular fa-clock"></i>
                                <?php endif; ?>
                                /
                                <?php if(isset($check->out)): ?>
                                    <i class="fa-solid fa-clock"></i>
                                <?php else: ?>
                                    <i class="fa-regular fa-clock"></i>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if(!isset($check->in) || !isset($check->out)): ?>
                            <div class="text-center">
                                <button class="btn btn-lg btn-info text-white shadow" wire:loading.attr="disabled" wire:click.prevent.debounce.500ms="cheking()" wire:target="cheking"><?php if(isset($check->in)): ?> Check out  <?php else: ?> Check in <?php endif; ?></button>
                            </div>
                        <?php else: ?>
                            <hr>
                            <h5 class="text-info text-center pt-2"><em>Check completado, asistencia generada</em> <i class="fa-solid fa-check-double" style="color: green"></i> </h5>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
    </div>
    
</div><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/auth/mi-perfil.blade.php ENDPATH**/ ?>