<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @can('admin.campuses.index')
                <li class="breadcrumb-item"><a href="{{route('admin.campuses.index')}}">Todos los campus</a></li>
            @endcan
            <li class="breadcrumb-item active">Nuevo campus</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2">{{$campus}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    {{--Pincel--}}
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos del campus</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Nombre del campus') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="campus" class="form-control" wire:model="campus" placeholder="Ingrese el nombre del campus">
                                    @error('campus') <span class="text-danger error">{{ $message }}</span>@enderror
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