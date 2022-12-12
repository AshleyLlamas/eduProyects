<div class="container">
    <div class="card card-outline card-info">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4 justify-content-center align-self-center">
                    <div class="text-center my-4 mx-4">
                        <img class="img-fluid"
                        src="{{asset('img/logo-negro.svg')}}"
                        alt="Fotografía">
                    </div>
                </div> 
                <div class="col-12 col-md-8">
                    <div class="text-center text-secondary">
                        <h4>
                            {{ $user->name }}
                        </h4>
                        <p>
                            <span class="badge badge-pill badge badge-info py-2">
                                @if($user->roles->count())
                                    {{$user->roles->pluck('name')[0];}}
                                @endif
                            </span>
                        </p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <strong>Nombre</strong>

                            <p class="text-muted mb-1">
                                @isset($user->name)
                                    {{$user->name}}
                                @else
                                    N/A
                                @endisset
                            </p>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <strong>Correo electrónico</strong>

                            <p class="text-muted mb-1">
                                @isset($user->email)
                                    {{$user->email}}
                                @else
                                    N/A
                                @endisset
                            </p>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <strong>Rol</strong>

                            <p class="text-muted mb-1">
                                @if($user->roles->count())
                                    {{$user->roles->pluck('name')[0];}}
                                @else
                                    N/A
                                @endif
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
