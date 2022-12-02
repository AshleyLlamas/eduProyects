<div>
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{Storage::url($student->image->url)}}" alt="foto" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>
                                    {{ $student->nombre }}
                                    <br>{{$student->semestre.$student->grupo.$student->career->abreviatura}}
                                </h4>
                                <p class="text-secondary mb-1">{{$student->campus->campus}}</p>
                                <p class="text-muted font-size-sm">
                                    {{$student->ciclo_escolar}}
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
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Asistencia</small>
                        <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Retardos</small>
                        <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nombre</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">

                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
    </div>
    {{-- </div> --}}
</div>