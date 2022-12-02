<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><i class="fa-solid fa-list"></i> Todos los campus <span class="badge badge-light"> {{$all_campuses}}</span></h5>
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
                        </div>
                        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del campus">
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="form-group my-2" wire:model="order">
                        <select class="form-control" id="orderFormControlSelect">
                        <option value="1">Ordernar por más reciente</option>
                        <option value="2">Ordernar por más antiguo</option>
                        <option value="2">Ordernar por nombre del A-Z</option>
                        <option value="2">Ordernar por nombre del Z-A</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2">
                    <a class="btn btn-success btn-block  my-2 @cannot('admin.campuses.create') disabled @endcannot" href="{{ route('admin.campuses.create') }}"><i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body p-0 table-responsive">
            @if ($campuses->count())
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            @can('admin.campuses.show')
                                <th></th>
                            @endcan
                            @can('admin.campuses.edit')
                                <th></th>
                            @endcan
                            @can('admin.campuses.destroy')
                                <th></th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($campuses as $campus)
                            <tr>
                                <td>{{$campus->id}}</td>
                                <td>
                                    @isset($campus->campus)
                                        @can('admin.campuses.show')
                                            <a href="{{ route('admin.campuses.show', $campus) }}">{{$campus->campus}}</a>
                                        @else
                                            {{$campus->campus}}
                                        @endcan
                                    @else
                                        N/A
                                    @endisset
                                </td>
                                @can('admin.campuses.show')
                                    <td width="10px"><a class="btn btn-default btn-sm" href="{{route('admin.campuses.show', $campus)}}"><i class="fas fa-eye"></i></a></td>
                                @endcan
                                @can('admin.campuses.edit')
                                    <td width="10px"><a class="btn btn-default btn-sm" href="{{route('admin.campuses.edit', $campus)}}"><i class="fas fa-edit"></i></a></td>
                                @endcan
                                @can('admin.campuses.destroy')
                                    <td width="10px">
                                        <form action="{{ route('admin.campuses.destroy', $campuses) }}" method="POST" class="alert-delete">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="delete()"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="my-5">
                    <p class="text-center text-danger"><strong>Sin registro</strong></p>
                </div>
            @endif
        </div>
        <div class="card-footer">
            {{$campuses->links()}}
        </div>
    </div>
</div>

@push('js')
    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
            '¡Eliminado!',
            'El usuario se elimino con éxito.',
            'success'
            )
        </script>
    @endif

    <script>
        $('.alert-delete').submit(function (e) {
        e.preventDefault();
        Swal.fire({
        title: '¿Estas seguro?',
        text: "El usuario se eliminara definitivamente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, ¡Eliminar!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
        })
        });
    </script>
@endpush