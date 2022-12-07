<div>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @can('admin.questionnaires.index')
                <li class="breadcrumb-item"><a href="{{route('admin.questionnaires.index')}}">Todos los cuestionarios</a></li>
            @endcan
            <li class="breadcrumb-item active">Nuevo cuestionario</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bg-info">
            <h5 class="text-center my-2">{{$título}}</h5>
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
                                <h5 class="py-1 text-center">Cuestionario</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Título') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="título" placeholder="Ingrese el título del cuestionario" wire:model="título">
                                    @error('título') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Preguntas --}}
                    <div class="row rounded border mb-4">
                        <div class="bg-gray rounded-left">
                            <div class="m-3">
                                <div class="my-auto"><i class="fa-solid fa-question"></i></div>
                            </div>
                        </div>
                        <div class="col m-2">
                            <div class="border-bottom">
                                <h5 class="py-1 text-center">Preguntas</h5>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label class="col-form-label">
                                        {{ __('Título') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">1</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="pregunta" placeholder="Pregunta" wire:model="pregunta">
                                    </div>
                                    {{-- @error('Respuestas') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                                </div>
                                @foreach ($questions as $question => $options)
                                    <div class="card bg-light col-12">
                                        <div class="card-header">
                                            <button class="btn btn-danger float-right @if($question == 0) disabled @else" wire:click.prevent="removeQuestion({{$question}})" @endif"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <div class="form-group">
                                                            <label class="col-form-label">
                                                                {{ __('Título') }}
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text" id="spanPregunta.{{ $question }}">{{$question+1}}</span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Ingrese una pregunta" id="pregunta.{{ $question }}" required wire:model="pregunta.{{ $question }}">
                                                            </div>
                                                            @error('pregunta.'.$question) <span class="text-danger error">{{ $message }}</span>@enderror
                                                        </div>
                                                    </tr>
                                                    <tr>
                                                        <th>Opciones</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($options as $numero => $option)
                                                        <tr>
                                                            <td>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                          <span class="input-group-text" id="spanOpción.{{ $question }}.{{ $numero }}">{{($question+1).'.'.($numero+1)}}</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Ingrese una opción" id="inputoOpción.{{ $question }}.{{ $numero }}" wire:model="opción.{{ $question }}.{{ $numero }}">
                                                                    </div>
                                                                    @error('opción.'.$question.'.'.$numero) <span class="text-danger error">{{ $message }}</span>@enderror
                                                                </div>
                                                            </td>
                                                            <td style="width: 10px;">
                                                                <button class="btn btn-danger @if($numero == 0) disabled" @else" wire:click.prevent="removeOption({{$question}},{{$numero}})" @endif id="buttonOpción.{{ $question }}.{{ $numero }}"><i class="fas fa-times"></i></button>
                                                            </td>
                                                        </tr> 
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <div class="btn-group mr-2" role="group">
                                                <button type="button" class="btn btn-secondary" wire:click.prevent="removeOption({{$question}},{{$numero}})">-</button>
                                                <button type="button" class="btn btn-secondary" wire:click.prevent="addOption({{$question}},{{$numero}})">+</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-12 pb-2">
                                    <button type="button" class="btn btn-secondary btn-lg btn-block" wire:click.prevent="addQuestion({{$x}})">
                                        Agregar pregunta
                                    </button>
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