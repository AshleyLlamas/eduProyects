<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @can('admin.students.index')
                <li class="breadcrumb-item"><a href="{{route('admin.students.index')}}">Todos los estudiantes</a></li>
            @endcan
            <li class="breadcrumb-item active">Nuevo estudiante</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2">{{$nombre}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    {{--Foto--}}
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
                                @error('foto') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div>
                                <div wire:loading wire:target="foto">
                                    <button class="btn btn-white mt-3" type="button" disabled>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        Cargando...
                                    </button>
                                </div>
                                <div class="pt-3">
                                    @if($foto)
                                        <img class="img-fluid rounded" style="display: block; margin-left: auto; margin-right: auto;" src="{{$foto->temporaryurl()}}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Pincel--}}
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
                                        {{ __('Nombre completo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="nombre" class="form-control" wire:model="nombre" placeholder="Ingrese el nombre del estudiante">
                                    @error('nombre') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Correo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="correo" class="form-control" wire:model="email" placeholder="Ingrese el correo del estudiante">
                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('CURP') }}
                                    </label>
                                    <input type="text" id="curp" class="form-control" wire:model="curp" placeholder="Ingrese el CURP del estudiante">
                                    @error('curp') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Sexo') }}
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="sexo">
                                        <option value="">Selecciona una opción</option>
                                        <option>FEMENINO</option>
                                        <option>MASCULINO</option>
                                    </select>
                                    @error('sexo') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Mapa--}}
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
                                @if (!is_null($calle) || !is_null($número_exterior) || !is_null($número_interior) || !is_null($colonia) || !is_null($código_postal) || !is_null($municipio) || !is_null($estado))
                                    <div class="py-2">
                                        <div class="p-2 bg-light border rounded text-center" data-toggle="tooltip" data-placement="right" title="Vista previa de la dirección">
                                            @if (!is_null($calle)) {{$calle}}@endif @if (!is_null($número_exterior)), {{$número_exterior}}@endif @if (!is_null($número_interior)), {{$número_interior}}@endif @if (!is_null($colonia)), {{$colonia}},@endif @if (!is_null($código_postal)) C.P. {{$código_postal}}, @endif @if (!is_null($municipio)) {{$municipio}}, @endif @if (!is_null($estado)) {{$estado}} @endif
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="col-form-label">
                                                {{ __('Estado') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select wire:model="state" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                @foreach ($states as $state)
                                                    <option value="{{$state->id}}">{{$state->nombre_del_estado}}</option>
                                                @endforeach
                                            </select>
                                            @error('state') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    @if (!is_null($municipalities))
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label class="col-form-label">
                                                    {{ __('Municipio / Alcaldia') }}
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select wire:model="municipality" class="form-control">
                                                    <option value="">Selecciona una opción</option>
                                                    @foreach ($municipalities as $municipality)
                                                        <option value="{{$municipality->id}}">{{$municipality->nombre_del_municipio}}</option>
                                                    @endforeach
                                                </select>
                                                @error('municipality') <span class="text-danger error">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="c.p" class="col-form-label">{{ __('C.P') }}</label>
                                    <input type="text" id="código_postal" class="form-control" wire:model="código_postal" placeholder="Ingrese el código postal">
                                    @error('código_postal') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label">
                                            {{ __('Calle') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" wire:model="calle" placeholder="Calle">
                                        @error('calle') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label">
                                            {{ __('Número exterior') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" wire:model="número_exterior" placeholder="Número exterior">
                                        @error('número_exterior') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label">{{ __('Número interior') }}</label>
                                        <input type="text" class="form-control" wire:model="número_interior" placeholder="Número interior">
                                        @error('número_interior') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <label class="col-form-label">
                                            {{ __('Colonia') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" wire:model="colonia" placeholder="Colonia">
                                        @error('colonia') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Seguro--}}
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
                                        {{ __('Número de afiliciadión') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="número_de_afiliación" class="form-control" wire:model="número_de_afiliación" placeholder="Ingrese el número de afiliación del estudiante">
                                    @error('número_de_afiliación') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Tipo de aseguranza') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="tipo_de_aseguranza" class="form-control" wire:model="tipo_de_aseguranza" placeholder="Ingrese el tipo de aseguranza del estudiante">
                                    @error('tipo_de_aseguranza') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Tipo de sangre') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="tipo_de_sangre" class="form-control" wire:model="tipo_de_sangre" placeholder="Ingrese el tipo de sangre del estudiante">
                                    @error('tipo_de_sangre') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Familia--}}
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
                                        {{ __('Nombre del tutor') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="nombre_del_tutor" class="form-control" wire:model="nombre_del_tutor" placeholder="Ingrese el nombre del tutor">
                                    @error('nombre_del_tutor') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Correo electrónico') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="email_del_tutor" class="form-control" wire:model="email_del_tutor" placeholder="Ingrese el correo electrónico del padre o tutor">
                                    @error('email_del_tutor') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Número celular') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="celular_del_tutor" class="form-control" wire:model="celular_del_tutor" placeholder="Ingrese el número celular del padre o tutor">
                                    @error('celular_del_tutor') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Número teléfonico') }}
                                    </label>
                                    <input type="text" id="teléfono_del_tutor" class="form-control" wire:model="teléfono_del_tutor" placeholder="Ingrese el número teléfono del padre o tutor">
                                    @error('teléfono_del_tutor') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Escuela--}}
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
                                        {{ __('Matricula') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="matrícula" class="form-control" wire:model="matrícula" placeholder="Ingrese el matrícula del estudiante">
                                    @error('matrícula') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        {{ __('Semestre') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" id="semestre" class="form-control" wire:model="semestre" placeholder="Ingrese el semestre del estudiante">
                                    @error('semestre') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        {{ __('Grupo') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="grupo" class="form-control" wire:model="grupo" placeholder="Ingrese el grupo del estudiante">
                                    @error('grupo') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        {{ __('Carrera') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="career">
                                        <option value="">Selecciona una opción</option>
                                        @foreach ($careers as $career)
                                            <option value="{{$career->id}}">{{$career->carrera}}</option>
                                        @endforeach
                                    </select>
                                    @error('career') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-3">
                                    <label class="col-form-label">
                                        {{ __('Turno') }}
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
                                    @error('turno') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        {{ __('Ciclo escolar') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="ciclo_escolar" class="form-control" wire:model="ciclo_escolar" placeholder="Ingrese el ciclo escolar del estudiante">
                                    @error('ciclo_escolar') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label class="col-form-label">
                                        {{ __('Campus') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="campus">
                                        <option value="">Selecciona una opción</option>
                                        @foreach ($campuses as $campus)
                                            <option value="{{$campus->id}}">{{$campus->campus}}</option>
                                        @endforeach
                                    </select>
                                    @error('campus') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Días laborales a la semana') }}
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
                                @if(count($days))
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table text-center border">
                                                <thead>
                                                    <tr>
                                                        <th colspan="{{count($days)+1}}">Horario</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="bg-secondary"><i class="fa-solid fa-clock"></i></th>
                                                        @foreach ($days as $day)
                                                            <th class="border-left bg-secondary">{{$day}}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row" class="bg-light">Entrada</th>
                                                    @foreach ($days as $n => $day)
                                                        <td class="border-left">
                                                            <input type="time" class="form-control border-0" id="entrada{{$day}}" required wire:model="hora_de_entrada.{{$n}}">
                                                            @error('hora_de_entrada.'.$n) <span class="text-danger error">{{ $message }}</span> @enderror
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                    <tr>
                                                        <th scope="row" class="bg-light">Salida</th>
                                                        @foreach ($days as $n => $day)
                                                            <td class="border-left">
                                                                <input type="time" class="form-control border-0" id="salida{{$day}}" required wire:model="hora_de_salida.{{$n}}">
                                                                @error('hora_de_salida.'.$n) <span class="text-danger error">{{ $message }}</span> @enderror
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{--Código--}}
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
                                        {{ __('Slug') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="slug" class="form-control" wire:model="slug" disabled>
                                    @error('slug') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('QR') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="qr" class="form-control" wire:model="qr" disabled>
                                    @error('qr') <span class="text-danger error">{{ $message }}</span>@enderror
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

@push('css')
    <style>
    .select2 {
        width:100%!important;
    }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function () {
            $('#days').select2();
            $('#days').on('change', function (e) {
                var data = $('#days').select2("val");
            @this.set('days', data);
            });
        });
    </script>
@endpush