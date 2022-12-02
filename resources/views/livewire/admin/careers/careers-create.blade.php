<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @can('admin.careers.index')
                <li class="breadcrumb-item"><a href="{{route('admin.careers.index')}}">Todas las carreras</a></li>
            @endcan
            <li class="breadcrumb-item active">Nueva carrera</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2">{{$carrera}}</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="g-3">
                    {{--Pincel--}}
                    <div class="row rounded border">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fas fa-pencil-alt"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Datos de la carrera</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-8">
                                    <label class="col-form-label">
                                        {{ __('Nombre de la carrera') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="carrera" class="form-control" wire:model="carrera" placeholder="Ingrese el nombre del carrera">
                                    @error('carrera') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-4">
                                    <label class="col-form-label">
                                        {{ __('Abreviatura') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="abreviatura" class="form-control" wire:model="abreviatura" placeholder="Ingrese la abreviatura del carrera">
                                    @error('abreviatura') <span class="text-danger error">{{ $message }}</span>@enderror
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