<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @can('admin.users.index')
                <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Todos los usuarios administrativos</a></li>
            @endcan
            <li class="breadcrumb-item active">Editar usuario administrativo</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2">{{$user->name}}</h5>
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
                                <h5 class="py-1 text-center">Datos del usuario administrativo</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Nombre del usuario') }}
                                    </label>
                                    <input type="text" id="name" class="form-control" wire:model="user.name" placeholder="Ingrese el nombre del usuario">
                                    @error('user.name') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Correo electr??nico') }}
                                    </label>
                                    <input type="text" id="email" class="form-control" wire:model="user.email" placeholder="Ingrese el correo electr??nico del usuario">
                                    @error('user.email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Rol--}}
                    <div class="row rounded border mt-3">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa-solid fa-unlock"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Rol</h5>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="col-form-label">
                                        {{ __('Rol') }}
                                    </label>
                                    <select class="form-control" aria-label="Default select example" wire:model="role">
                                        <option value="">Selecciona una opci??n</option>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('role') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Contase??a--}}
                    <div class="row rounded border mt-3">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa-solid fa-key"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Contrase??a</h5>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="form-group col-12 col-md-6 col-sm-6">
                                        <label class="col-form-label">
                                            {{ __('Contrase??a') }}
                                            @if(isset($password) || isset($password_confirmation))
                                                <span class="text-danger">*</span>
                                            @endif
                                        </label>
                                        <input type="password" class="form-control" wire:model="password" required autocomplete="new-password" placeholder="Ingrese la contrase??a del empleado">
                                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-12 col-md-6 col-sm-6">
                                        <label class="col-form-label">
                                            {{ __('Confirmar contrase??a') }}
                                            @if(isset($password) || isset($password_confirmation))
                                                <span class="text-danger">*</span>
                                            @endif
                                        </label>
                                        <input type="password" class="form-control" wire:model="password_confirmation" required autocomplete="new-password" placeholder="Nuevamente ingrese la contrase??a del empleado">
                                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
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