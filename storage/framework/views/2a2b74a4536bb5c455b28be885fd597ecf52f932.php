<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Proyek Laravel</title>
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>

    <style>
        html { scroll-behavior: smooth; }
        * { padding: 0; margin: 0; font-family: 'Inter', sans-serif;}
        body { background-color: snow; color: #2E2E2E;}
        img { height: 100%; width: 100%; }
        .sections { height: 100vh; }
        .nav-height { height: 10vh; }
        .custom-positions { width: 100vw; height: 90vh;}

        .glass {
            background: rgba(255, 255, 255, 0.5);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            color: #2E2E2E;
        }

        .login-alert {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 2rem;
        }

        .custom-alert { 
            background-color: #F7ECDE; 
            font-size: 1.2em; 
            border-color: #E9DAC1;
            color: #472D2D;
        }

        .btn-primary {
            background-color: #319DA0;
            border: none;
            color: snow;
            font-size: 1.3em;
        }

        .btn-danger {
            background-color: #F96666;
            border: none;
            color: snow;
            font-size: 1.3em;
        }

        .btn-primary:hover, .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active, .open.dropdown-toggle.btn-primary {
            color: snow;
            background-color: #2E2E2E !important;
        }

        .btn-danger:hover, .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active, .open.dropdown-toggle.btn-danger {
            color: snow;
            background-color: #2E2E2E !important;
        }

        .btn-secondary:hover, .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active, .open.dropdown-toggle.btn-secondary {
            color: snow;
            background-color: #2E2E2E !important;
        }


    </style>
    <script>
        function takeEditData(data) {
            var data1 = data.parentNode.parentNode;
            var nameTag = data1.firstElementChild;
            var descriptionTag = nameTag.nextElementSibling;
            var dateTag = descriptionTag.nextElementSibling;
            var idTag = dateTag.nextElementSibling;
            // var actionRoute = `{ route('posts.update', ${idTag.innerHTML}) }`;
            // var actionRoute1 = `{${actionRoute}}`;

            // document.getElementById('updateData').action = ;

            // document.getElementById('changeName').value = nameTag.innerHTML;
            // document.getElementById('changeImpressions').innerHTML = descriptionTag.innerHTML;
            // console.log(document.getElementById('updateData').action);
        }

        function takeDeleteData(data) {
            var data1 = data.parentNode.parentNode;
            var nameTag = data1.firstElementChild;
            var descriptionTag = nameTag.nextElementSibling;
            var dateTag = descriptionTag.nextElementSibling;
            var idTag = dateTag.nextElementSibling;

            // var actionRoute = `{route('posts.destroy')}`;

            // document.getElementById('deleteData').action = `{${actionRoute}}`;
            // document.getElementById("deleteWarning").innerHTML= `Are you sure you want to delete ${nameTag.innerHTML}'s impressions?`;
        }
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg sticky-top glass nav-height">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="font-size: 1.3em">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo e(url('/')); ?>" style="font-weight:800">LaravelProject</a>
                        </li>
                        
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/Views')); ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link active" href="<?php echo e(url('/posts')); ?>">Impressions</a></li>
                            

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

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
<?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/layouts/app.blade.php ENDPATH**/ ?>