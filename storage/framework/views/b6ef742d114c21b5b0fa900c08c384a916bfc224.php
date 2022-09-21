<?php $__env->startSection('content'); ?>


<div class="alert alert-primary alert-dismissible fade show login-alert" role="alert">
    <?php if(session('status')): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <h4 class="alert-heading"><b>Welcome to another Homepages!</b></h4>
    <p> Congratulation <b><?php echo e(Auth::user()->name); ?></b>, you have Successfuly go to another hompeges. Keep routing to read all the informations!</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 me-0 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1569272955884-48ca11e03183?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        </div>
    
        <div class="col my-auto mx-auto me-4 row">
            <h1 class="h1 ms-4" style="font-weight:bolder">This is another Page!</h1>
            <p class="ms-4" style="font-size: 1.5em">
                This page was routed with laravel's route feature. Click the <b>Home</b> in the navbar
                to go back to the home page. Or click <b>LaravelProject</b> to go back to laravel's overview page.
                You could also <b>log out</b> if you wish.
                <br><span style="color: #CD104D"><b>Update:</b> Routing between pages has been moved to controller.</span>
            </p>
        </div>
    </div>
    
    <div class="row">
        <div class="col my-auto mx-auto me-2">
            <h1 class="h1 ms-4" style="font-weight:bolder">Display Webpages With Views!</h1>
            <p class="ms-4" style="font-size: 1.5em">
                All the webpages that you could see in this website are displayed using laravel's <b>views</b>.
                Views are one of laravel feature to display webpages from route. 
            </p>
        </div>
    
        <div class="col-6 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1555397430-57791c75748a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/another_home.blade.php ENDPATH**/ ?>