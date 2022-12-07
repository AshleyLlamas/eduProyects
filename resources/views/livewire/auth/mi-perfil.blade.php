<div>
    <div class="main-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
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
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{$porcentaje_de_faltas}}%" aria-valuenow="{{$porcentaje_de_faltas}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small>Retardos</small>
                        <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{$porcentaje_de_retardos}}%" aria-valuenow="{{$porcentaje_de_retardos}}" aria-valuemin="0" aria-valuemax="100"></div>
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
                                    @isset($check->in)
                                        <p class="mb-1"><i class="fa-solid fa-clock"></i> <b>Entrada:</b> {{$check->in->hora}}</p>
                                    @endisset
                                    @isset($check->out)
                                        <p class="mb-1"><i class="fa-solid fa-clock"></i> <b>Salida:</b> {{$check->out->hora}}</p>
                                    @endisset
                                </div>
                            </div>
                            <div class="col h1 text-center text-secondary">
                                @isset($check->in)
                                    <i class="fa-solid fa-clock"></i>
                                @else
                                    <i class="fa-regular fa-clock"></i>
                                @endisset
                                /
                                @isset($check->out)
                                    <i class="fa-solid fa-clock"></i>
                                @else
                                    <i class="fa-regular fa-clock"></i>
                                @endisset
                            </div>
                        </div>
                        @if (!isset($check->in) || !isset($check->out))
                            <div class="text-center">
                                <button class="btn btn-lg btn-info text-white shadow" wire:loading.attr="disabled" wire:click.prevent.debounce.500ms="cheking()" wire:target="cheking">@isset($check->in) Check out  @else Check in @endisset</button>
                            </div>
                        @else
                            <hr>
                            <h5 class="text-info text-center pt-2"><em>Check completado, asistencia generada</em> <i class="fa-solid fa-check-double" style="color: green"></i> </h5>
                        @endif
                    </div>
                </div>
            </div>
            {{-- </div> --}}
    </div>
    {{-- </div> --}}
</div>