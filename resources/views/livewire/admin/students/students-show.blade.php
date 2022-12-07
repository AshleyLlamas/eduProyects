<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @can('admin.students.index')
                <li class="breadcrumb-item"><a href="{{route('admin.students.index')}}">Todos los estudiantes</a></li>
            @endcan
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
                                src="@if($student->image) {{Storage::url($student->image->url)}} @else {{asset('recursos/foto-default.png')}} @endif"
                                alt="Fotografía">
                            </div>
                            <div class="mt-3 text-center">
                                <h4>
                                    {{ $student->nombre }}
                                    <br>{{$student->semestre.$student->grupo.$student->career->abreviatura}}
                                </h4>
                                <p class="text-secondary mb-1">{{$student->campus->campus}}</p>
                                <p class="text-muted font-size-sm">
                                    {{$student->ciclo_escolar}}
                                </p>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action">
    	                            <strong>Sexo</strong>

                                    <p class="text-muted mb-1">
                                        @isset($student->sexo)
                                            {{$student->sexo}}
                                        @else
                                            N/A
                                        @endisset
                                    </p>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <strong>Correo electrónico</strong>

                                    <p class="text-muted mb-1">
                                        @isset($student->email)
                                            {{$student->email}}
                                        @else
                                            N/A
                                        @endisset
                                    </p>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <strong>CURP</strong>

                                    <p class="text-muted mb-1">
                                        @isset($student->curp)
                                            {{$student->curp}}
                                        @else
                                            N/A
                                        @endisset
                                    </p>
                                </li>
                                <li class="list-group-item list-group-item-action mb-1">
                                    <strong>Dirección</strong>

                                    <p class="text-muted mb-1">
                                        @isset($student->address) 
                                            @if ($student->address->calle) {{$student->address->calle}}@endif @if ($student->address->número_exterior), {{$student->address->número_exterior}}@endif @if ($student->address->número_interior), {{$student->address->número_interior}}@endif @if ($student->address->colonia), {{$student->address->colonia}},@endif @if ($student->address->código_postal) C.P. {{$student->address->código_postal}}, @endif @if ($student->address->municipality) {{$student->address->municipality->nombre_del_municipio}}, @endif @if ($student->address->municipality->state) {{$student->address->municipality->state->nombre_del_estado}}. @endif
                                        @else
                                            N/A
                                        @endisset
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">
                            <strong>Ver información sobre</strong>
                            <div class="btn-group w-100 row" role="group">
                                <button type="button" class="rounded-0 btn @if($student->insurances->count()) btn-secondary @else btn-outline-secondary @endif col-12 col-xl-4 mb-2" data-toggle="modal" data-target="#seguroModal">Seguro</button>
                                <button type="button" class="rounded-0 btn @if($student->tutors->count()) btn-secondary @else btn-outline-secondary @endif col-12 col-xl-4 mb-2" data-toggle="modal" data-target="#padreModal">Padre</button>
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
                                            @if($student->insurances->count())
                                                @foreach ($student->insurances as $insurance)
                                                    <ul class="list-group">
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Número de afiliación</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                @isset($insurance->número_de_afiliación)
                                                                    {{$insurance->número_de_afiliación}}
                                                                @else
                                                                    N/A
                                                                @endisset
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Tipo de aseguranza</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                @isset($insurance->tipo_de_aseguranza)
                                                                    {{$insurance->tipo_de_aseguranza}}
                                                                @else
                                                                    N/A
                                                                @endisset
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Tipo de sangre</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                @isset($student->tipo_de_sangre)
                                                                    {{$student->tipo_de_sangre}}
                                                                @else
                                                                    N/A
                                                                @endisset
                                                            </p>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            @else
                                                <p class="text-center pt-2"><strong>Sin seguro</strong></p>
                                            @endif
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
                                            @if($student->tutors->count())
                                                @foreach ($student->tutors as $tutor)
                                                    <ul class="list-group">
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Nombre</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                @isset($tutor->nombre)
                                                                    {{$tutor->nombre}}
                                                                @else
                                                                    N/A
                                                                @endisset
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Correo electónico</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                @isset($tutor->email)
                                                                    {{$tutor->email}}
                                                                @else
                                                                    N/A
                                                                @endisset
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Celular</strong>
                        
                                                            <p class="text-muted mb-1">
                                                                @isset($tutor->celular)
                                                                    {{$tutor->celular}}
                                                                @else
                                                                    N/A
                                                                @endisset
                                                            </p>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action">
                                                            <strong>Turno</strong>
                    
                                                            <p class="text-muted mb-1">
                                                                @isset($tutor->teléfono)
                                                                    {{$tutor->teléfono}}
                                                                @else
                                                                    N/A
                                                                @endisset
                                                            </p>
                                                        </li>
                                                    </ul>
                                                @endforeach
                                            @else
                                                <p class="text-center pt-2"><strong>Sin tutores</strong></p>
                                            @endif
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
                                                        @isset($student->matrícula)
                                                            {{$student->matrícula}}
                                                        @else
                                                            N/A
                                                        @endisset
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Semestre</strong>
                
                                                    <p class="text-muted mb-1">
                                                        @isset($student->semestre)
                                                            {{$student->semestre}}
                                                        @else
                                                            N/A
                                                        @endisset
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Grupo</strong>
                
                                                    <p class="text-muted mb-1">
                                                        @isset($student->grupo)
                                                            {{$student->grupo}}
                                                        @else
                                                            N/A
                                                        @endisset
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Turno</strong>
            
                                                    <p class="text-muted mb-1">
                                                        @isset($student->turno)
                                                            {{$student->turno}}
                                                        @else
                                                            N/A
                                                        @endisset
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Carrera</strong>

                                                    <p class="text-muted mb-1">
                                                        @isset($student->career)
                                                            {{$student->career->carrera}} ({{$student->career->abreviatura}})
                                                        @else
                                                            N/A
                                                        @endisset
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Ciclo escolar</strong>
                
                                                    <p class="text-muted mb-1">
                                                        @isset($student->ciclo_escolar)
                                                            {{$student->ciclo_escolar}}
                                                        @else
                                                            N/A
                                                        @endisset
                                                    </p>
                                                </li>
                                                <li class="list-group-item list-group-item-action">
                                                    <strong>Campus</strong>
                
                                                    <p class="text-muted mb-1">
                                                        @isset($student->campus)
                                                            {{$student->campus->campus}}
                                                        @else
                                                            N/A
                                                        @endisset
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
                                <p class="text-center">{{$student->qr}}</p>
                                {{-- <img width ="100%" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($student->qr)) !!}"> --}}
                                {!! QrCode::size(300)->generate($student->qr) !!}
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
                                    <span class="info-box-number">{{$faltas}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fa-solid fa-business-time"></i></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Retardos</span>
                                    <span class="info-box-number">{{$retardos}}</span>
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
                                    @if($student->schedules->count())
                                        <table class="table text-center border">
                                            <thead class="text-info">
                                                <tr>
                                                    <th><i class="fa-solid fa-clock"></i></th>
                                                    @foreach ($student->schedules as $schedule)
                                                        <th class="border-left">{{$schedule->día}}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" class="text-info">Entrada</th>
                                                @foreach ($student->schedules as $n => $schedule)
                                                    <td class="border-left">
                                                        {{$schedule->hora_de_entrada}}
                                                    </td>
                                                @endforeach
                                            </tr>
                                                <tr>
                                                    <th scope="row" class="text-info">Salida</th>
                                                    @foreach ($student->schedules as $n => $schedule)
                                                        <td class="border-left">
                                                            {{$schedule->hora_de_salida}}
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    @else
                                        <p class="text-danger text-center mb-1"><b>Sin horario.</b></p>
                                    @endif
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
                                    @if($student->checks->count())
                                        <table class="table table-striped table-hover text-center border">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><h5 class="mb-1 pt-1">Entrada</h5></th>
                                                    <th scope="col"><h5 class="mb-1 pt-1">Salida</h5></th>
                                                    <th scope="col"><h5 class="mb-1 pt-1">Asistencia</h5></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student->checks as $check)
                                                    <tr>
                                                        <th>
                                                            @isset($check->in)
                                                                {{$check->in->hora}}
                                                            @else
                                                                N/A
                                                            @endisset
                                                        </th>
                                                        <th>
                                                            @isset($check->out)
                                                                {{$check->out->hora}}
                                                            @else
                                                                N/A
                                                            @endisset
                                                        </th>
                                                        <th>
                                                            @isset($check->assistance)
                                                                <i class="fa-solid fa-circle-check" style="color: green"></i> Asistió
                                                            @else
                                                                <i class="fa-solid fa-circle-xmark" style="color: gray"></i> Pendiente
                                                            @endisset
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <p class="text-danger text-center mb-1"><b>Sin horario.</b></p>
                                    @endif
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

@push('js')
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
            initialDate: {!! json_encode($hoy) !!},
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            selectable: false,
            dayMaxEvents: false, // allow "more" link when too many events
            events: {!! json_encode($json_dias) !!}
        });
        calendar.render();
        });
    </script>
@endpush