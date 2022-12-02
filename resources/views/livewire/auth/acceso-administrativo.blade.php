<div>
    <div class="body-slider">
        <div class="slider">
            <div class="container">
                <div class="content-home" style="padding-top: 10%; padding-bottom: 40%;">
                    <div class="rounded shadow p-5 bg-white">
                        <div class="text-center">
                            <i class="fa-solid fa-user fa-5x"></i>
                            <h1><strong>Ingreso administrativo</strong></h1>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12" wire:ignore>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Ingrece su email" wire:model="email">
                                        <label for="telefono" class="col-md-4 col-form-label">{{ __('Correo') }}</label>
                                        @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12" wire:ignore>
                                    <div class="form-floating mb-1">
                                        <input type="password" class="form-control" name="password" id="password" aria-describedby="curp" placeholder="Ingrece su contraseña" wire:model="password">
                                        <label for="telefono" class="col-md-4 col-form-label"> {{ __('Contraseña') }}</label>
                                        @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-success btn-lg m-1" wire:loading.attr="disabled" wire:click.prevent="search">Ingresar</button>
                                </div>
                            </div>
                            <div wire:loading wire:target="search">
                                <button class="btn btn-white mt-3" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    Cargando...
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('error') == 'No se encuentran resultados o los datos no coinciden.')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'No se encuentran resultados o los datos no coinciden.',
                showConfirmButton: false,
                timer: 4000
            })
        </script> 
    @endif
@endpush