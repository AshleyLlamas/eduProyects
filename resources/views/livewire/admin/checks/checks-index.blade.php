<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><i class="fa-solid fa-list"></i> Todos los checks <span class="badge badge-light"> {{$all_checks}}</span></h5>
        </div>
        <div class="card-header">
            <div class="row">
                <input type="date" wire:model="search" class="form-control">
            </div>
        </div>
        <div class="card-body p-0 table-responsive">
            @if ($checks->count())
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Estudiante</th>
                            <th>Entrada</th>
                            <th>Salida</th>
                            <th>Estatus</th>
                            @can('admin.checks.show')
                                <th></th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checks as $check)
                            <tr>
                                <td>{{$check->id}}</td>
                                <td>
                                    @isset($check->student_id)
                                        @can('admin.students.show')
                                            <a href="{{ route('admin.students.show', $check->student) }}">{{$check->student->nombre}}</a>
                                        @else
                                            {{$check->students->name}}
                                        @endcan
                                    @else
                                        N/A
                                    @endisset
                                </td>
                                <td>
                                    @isset($check->in)
                                        {{$check->in->hora}}
                                    @else
                                        N/A
                                    @endisset
                                </td>
                                <td>
                                    @isset($check->out)
                                        {{$check->out->hora}}
                                    @else
                                        N/A
                                    @endisset
                                </td>
                                <td>
                                    @isset($check->assistance)
                                        <i class="fa-solid fa-circle-check" style="color: green"></i>
                                    @else
                                        <i class="fa-solid fa-hourglass-start" style="color: gray"></i>
                                    @endisset
                                </td>
                                @can('admin.checks.show')
                                    <td width="10px"><a class="btn btn-default btn-sm" href="{{route('admin.checks.show', $check)}}"><i class="fas fa-eye"></i></a></td>
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
            {{$checks->links()}}
        </div>
    </div>
</div>