<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Plus+Jakarta+Sans:wght@200;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- My Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/navbar.css')); ?>" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php echo \Livewire\Livewire::styles(); ?>


    <?php echo $__env->yieldPushContent('css'); ?>

</head>
    <body>
        <?php echo \Livewire\Livewire::scripts(); ?>


        <?php echo $__env->yieldPushContent('js'); ?>
        <div id="app">

            <nav class="navbar navbar-expand-md sticky-top navbar-light bg-white shadow-sm">
                <div class="container p-3">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <img width="180px" src="<?php echo e(asset('img/logo-negro.svg')); ?>" alt="">
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <?php if(auth()->guard('students')->guest()): ?>
                                <?php if(!Auth::guard('students')->check()): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('acceso')); ?>"><?php echo e(__('Ingresar')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa-solid fa-bars"></i> <?php echo e(Auth::guard('students')->user()->nombre); ?>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-0" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('mi.perfil')); ?>"><i class="fa-solid fa-address-card"></i> <?php echo e(__('Mi perfil')); ?></a>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo e(__('Cerrar sesión')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <main>
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </body>
</html>
<?php /**PATH D:\XAMPP\htdocs\VACUNAMEX\eduPROYECTS\mi-proyecto-laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>