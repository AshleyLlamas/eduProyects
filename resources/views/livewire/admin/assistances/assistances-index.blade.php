<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2"><i class="fa-solid fa-list"></i> Todas las asistencias <span class="badge badge-light"> {{$all_assistances}}</span></h5>
        </div>
        <div class="card-header">
            <input type="date" wire:model="date" class="form-control my-2">
        </div>
        <div class="card-body p-0 table-responsive">
            @if ($assistances->count())
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Asistencia</th>
                            <th>Usuario</th>
                            @can('admin.assistances.show')
                                <th></th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assistances as $assistance)
                            <tr>
                                <td>{{$assistance->id}}</td>
                                <td>
                                    @isset($assistance->check)
                                        {{$assistance->check->fecha}}
                                    @else
                                        N/A
                                    @endisset
                                </td>
                                <td>
                                    @isset($assistance->asistencia)
                                        {{$assistance->asistencia}}
                                    @else
                                        N/A
                                    @endisset
                                </td>
                                <td>
                                    @isset($assistance->student_id)
                                        @can('admin.students.show')
                                            <a href="{{ route('admin.students.show', $assistance->student) }}">{{$assistance->student->nombre}}</a>
                                        @else
                                            {{$assistance->students->nombre}}
                                        @endcan
                                    @else
                                        N/A
                                    @endisset
                                </td>
                                @can('admin.assistances.show')
                                    <td width="10px"><a class="btn btn-default btn-sm" href="{{route('admin.assistances.show', $assistance)}}"><i class="fas fa-eye"></i></a></td>
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
            {{$assistances->links()}}
        </div>
    </div>
</div>