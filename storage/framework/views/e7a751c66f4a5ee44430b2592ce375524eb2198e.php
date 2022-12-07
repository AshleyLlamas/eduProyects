<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.students.index')): ?>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.students.index')); ?>">Todos los estudiantes</a></li>
            <?php endif; ?>
            <li class="breadcrumb-item active">Ver estudiante</li>
        </ol>
    </nav>
    <!-- Main content -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-info card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center m-4">
                                <img class="profile-student-img img-fluid img-circle"
                                src="<?php if($student->image): ?> <?php echo e(Storage::url($student->image->url)); ?> <?php else: ?> <?php echo e(asset('recursos/foto-default.png')); ?> <?php endif; ?>"
                                alt="Fotografía">
                            </div>
                            <div class="mt-3 text-center">
                                <h4>
                                    <?php echo e($student->nombre); ?>

                                    <br><?php echo e($student->semestre.$student->grupo.$student->career->abreviatura); ?>

                                </h4>
                                <p class="text-secondary mb-1"><?php echo e($student->campus->campus); ?></p>
                                <p class="text-muted font-size-sm">
                                    <?php echo e($student->ciclo_escolar); ?>

                                </p>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action">
    	                            <strong>Sexo</strong>

                                    <p class="text-muted mb-1">
                                        <?php if(isset($student->sexo)): ?>
                                            <?php echo e($student->sexo); ?>

                                        <?php else: ?>
                                            N/A
                                        <?php endif; ?>
                                    </p>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <strong>Correo electrónico</strong>

                                    <p class="text-muted mb-1">
                                        <?php if(isset($student->email)): ?>
                                            <?php echo e($student->email); ?>

                                        <?php else: ?>
                                            N/A
                                        <?php endif; ?>
                                    </p>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <strong>CURP</strong>

                                    <p class="text-muted mb-1">
                                        <?php if(isset($student->curp)): ?>
                                            <?php echo e($student->curp); ?>

                                        <?php else: ?>
                                            N/A
                                        <?php endif; ?>
                                    </p>
                                </li>
                                <li class="list-group-item list-group-item-action mb-1">
                                    <strong>Dirección</strong>

                                    <p class="text-muted mb-1">
                                        <?php if(isset($student->address)): ?> 
                                            <?php if($student->address->calle): ?> <?php echo e($student->address->calle); ?><?php endif; ?> <?php if($student->address->número_exterior): ?>, <?php echo e($student->address->número_exterior); ?><?php endif; ?> <?php if($student->address->número_interior): ?>, <?php echo e($student->address->número_interior); ?><?php endif; ?> <?php if($student->address->colonia): ?>, <?php echo e($student->address->colonia); ?>,<?php endif; ?> <?php if($student->address->código_postal): ?> C.P. <?php echo e($student->address->código_postal); ?>, <?php endif; ?> <?php if($student->address->municipality): ?> <?php echo e($student->address->municipality->nombre_del_municipio); ?>, <?php endif; ?> <?php if($student->address->municipality->state): ?> <?php echo e($student->address->municipality->state->nombre_del_estado); ?>. <?php endif; ?>
                                        <?php else: ?>
                                            N/A
                                        <?php endif; ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">
                            <strong>Ver información sobre</strong>
                            <div class="btn-group w-100 row" role="group">
                                <button type="button" class="rounded-0 btn <?php if($student->insurances->count()): ?> btn-secondary <?php else: ?> btn-outline-secondary <?php endif; ?> col-12 col-xl-4 mb-2" data-toggle="modal" data-target="#seguroModal">Seguro</button>
                                <button type="button" class="rounded-0 btn <?php if($student->tutors->count()): ?> btn-secondary <?php else: ?> btn-outline-secondary <?php endif; ?> col-12 col-xl-4 mb-2" data-toggle="modal" data-target="#padreModal">Padre</button>
                                <button type="button" class="rounded-0 btn btn-secondary col-12 col-xl-4 mb-2" data-toggle="modal" data-target="#escuelaModal">Escolar</button>
                            </div>

                            <!-- Seguro -->
                            <div class="modal fade" id="seguroModal" tabindex="-1" role="dialog" aria-labelledby="seguroModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title" id="seguroModalLabel">información sobre el seguro</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php if($student->insurances->count()): ?>
                                                <?php $__currentLoopData = $student->insurances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insurance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <ul class="list-group">
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Número de afiliación</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                <?php if(isset($insurance->número_de_afiliación)): ?>
                                                                    <?php echo e($insurance->número_de_afiliación); ?>

                                                                <?php else: ?>
                                                                    N/A
                                                                <?php endif; ?>
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Tipo de aseguranza</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                <?php if(isset($insurance->tipo_de_aseguranza)): ?>
                                                                    <?php echo e($insurance->tipo_de_aseguranza); ?>

                                                                <?php else: ?>
                                                                    N/A
                                                                <?php endif; ?>
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Tipo de sangre</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                <?php if(isset($student->tipo_de_sangre)): ?>
                                                                    <?php echo e($student->tipo_de_sangre); ?>

                                                                <?php else: ?>
                                                                    N/A
                                                                <?php endif; ?>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <p class="text-center pt-2"><strong>Sin seguro</strong></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Padre -->
                            <div class="modal fade" id="padreModal" tabindex="-1" role="dialog" aria-labelledby="padreModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title" id="padreModalLabel">información sobre el padre / tutor</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php if($student->tutors->count()): ?>
                                                <?php $__currentLoopData = $student->tutors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tutor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <ul class="list-group">
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Nombre</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                <?php if(isset($tutor->nombre)): ?>
                                                                    <?php echo e($tutor->nombre); ?>

                                                                <?php else: ?>
                                                                    N/A
                                                                <?php endif; ?>
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Correo electónico</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                <?php if(isset($tutor->email)): ?>
                                                                    <?php echo e($tutor->email); ?>

                                                                <?php else: ?>
                                                                    N/A
                                                                <?php endif; ?>
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Celular</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                <?php if(isset($tutor->celular)): ?>
                                                                    <?php echo e($tutor->celular); ?>

                                                                <?php else: ?>
                                                                    N/A
                                                                <?php endif; ?>
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Turno</strong>
                    
                                                            <p class="text-muted mb-1">
                                                                <?php if(isset($tutor->teléfono)): ?>
                                                                    <?php echo e($tutor->teléfono); ?>

                                                                <?php else: ?>
                                                                    N/A
                                                                <?php endif; ?>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <p class="text-center pt-2"><strong>Sin tutores</strong></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Escuela -->
                            <div class="modal fade" id="escuelaModal" tabindex="-1" role="dialog" aria-labelledby="escuelaModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title" id="escuelaModalLabel">información escolar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Matrícula</strong>
                
                                                    <p class="text-muted mb-1">
                                                        <?php if(isset($student->matrícula)): ?>
                                                            <?php echo e($student->matrícula); ?>

                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Semestre</strong>
                
                                                    <p class="text-muted mb-1">
                                                        <?php if(isset($student->semestre)): ?>
                                                            <?php echo e($student->semestre); ?>

                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Grupo</strong>
                
                                                    <p class="text-muted mb-1">
                                                        <?php if(isset($student->grupo)): ?>
                                                            <?php echo e($student->grupo); ?>

                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Turno</strong>
            
                                                    <p class="text-muted mb-1">
                                                        <?php if(isset($student->turno)): ?>
                                                            <?php echo e($student->turno); ?>

                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Carrera</strong>

                                                    <p class="text-muted mb-1">
                                                        <?php if(isset($student->career)): ?>
                                                            <?php echo e($student->career->carrera); ?> (<?php echo e($student->career->abreviatura); ?>)
                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Ciclo escolar</strong>
                
                                                    <p class="text-muted mb-1">
                                                        <?php if(isset($student->ciclo_escolar)): ?>
                                                            <?php echo e($student->ciclo_escolar); ?>

                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Campus</strong>
                
                                                    <p class="text-muted mb-1">
                                                        <?php if(isset($student->campus)): ?>
                                                            <?php echo e($student->campus->campus); ?>

                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-4">
                                <strong>Qr de acceso</strong>
                                <p class="text-center"><?php echo e($student->qr); ?></p>
                                
                                <?php echo QrCode::size(300)->generate($student->qr); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <!-- Escuela -->
                    <div class="row">
                        <div class="col">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger"><i class="fa-regular fa-calendar-xmark"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Faltas</span>
                                    <span class="info-box-number"><?php echo e($faltas); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fa-solid fa-business-time"></i></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Retardos</span>
                                    <span class="info-box-number"><?php echo e($retardos); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fa-solid fa-triangle-exclamation"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Accidentes</span>
                                    <span class="info-box-number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Horario -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title pt-1">Horario</h3>
                            <button type="button" class="btn btn-sm btn-default float-right"><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <div class="table-responsive">
                                    <?php if($student->schedules->count()): ?>
                                        <table class="table text-center border">
                                            <thead class="text-info">
                                                <tr>
                                                    <th><i class="fa-solid fa-clock"></i></th>
                                                    <?php $__currentLoopData = $student->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <th class="border-left"><?php echo e($schedule->día); ?></th>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" class="text-info">Entrada</th>
                                                <?php $__currentLoopData = $student->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <td class="border-left">
                                                        <?php echo e($schedule->hora_de_entrada); ?>

                                                    </td>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tr>
                                                <tr>
                                                    <th scope="row" class="text-info">Salida</th>
                                                    <?php $__currentLoopData = $student->schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n => $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <td class="border-left">
                                                            <?php echo e($schedule->hora_de_salida); ?>

                                                        </td>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <?php else: ?>
                                        <p class="text-danger text-center mb-1"><b>Sin horario.</b></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- Asistencia -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Asistencia</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div>
                                <div id='calendar' wire:ignore></div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- Check -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Checks</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body text-center m-0 p-0">
                            <div>
                                <div class="table-responsive">
                                    <?php if($student->checks->count()): ?>
                                        <table class="table table-striped table-hover text-center border">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><h5 class="mb-1 pt-1">Entrada</h5></th>
                                                    <th scope="col"><h5 class="mb-1 pt-1">Salida</h5></th>
                                                    <th scope="col"><h5 class="mb-1 pt-1">Asistencia</h5></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $student->checks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $check): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <th>
                                                            <?php if(isset($check->in)): ?>
                                                                <?php echo e($check->in->hora); ?>

                                                            <?php else: ?>
                                                                N/A
                                                            <?php endif; ?>
                                                        </th>
                                                        <th>
                                                            <?php if(isset($check->out)): ?>
                                                                <?php echo e($check->out->hora); ?>

                                                            <?php else: ?>
                                                                N/A
                                                            <?php endif; ?>
                                                        </th>
                                                        <th>
                                                            <?php if(isset($check->assistance)): ?>
                                                                <i class="fa-solid fa-circle-check" style="color: green"></i> Asistió
                                                            <?php else: ?>
                                                                <i class="fa-solid fa-circle-xmark" style="color: gray"></i> Pendiente
                                                            <?php endif; ?>
                                                        </th>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    <?php else: ?>
                                        <p class="text-danger text-center mb-1"><b>Sin horario.</b></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php $__env->startPush('js'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'es',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
        },
            initialDate: <?php echo json_encode($hoy); ?>,
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            selectable: false,
            dayMaxEvents: false, // allow "more" link when too many events
            events: <?php echo json_encode($json_dias); ?>

        });
        calendar.render();
        });
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/livewire/admin/students/students-show.blade.php ENDPATH**/ ?>