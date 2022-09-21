<?php $__env->startSection('content'); ?>

<div class="alert alert-primary alert-dismissible fade show login-alert" role="alert">
    <?php if(session('status')): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <h4 class="alert-heading"><b>Logged In!</b></h4>
    <p> Congratulation <b><?php echo e(Auth::user()->name); ?></b>, you have Successfuly logged in. Enjoy your time!</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 me-0 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1586963312987-3c96f9ace15a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        </div>
    
        <div class="col my-auto mx-auto me-4 row">
            <h1 class="h1 ms-4" style="font-weight:bolder">Laravel is Here!</h1>
            <p class="ms-4" style="font-size: 1.5em">
                <b>Laravel</b> is a PHP framework that aim to help people develop website
                easier and faster by giving many feature that are ready to use.
                One of the laravel feature that you can use is <b>routing</b>.
                Just like people routing their way in the picture beside. 
                <br><span style="color: #CD104D"><b>Update:</b> Routing between pages has been moved to controller.</span>
            </p>
        </div>
    </div>
    
    <div class="row">
        <div class="col my-auto mx-auto me-2">
            <h1 class="h1 ms-4" style="font-weight:bolder">Another Features</h1>
            <p class="ms-4" style="font-size: 1.5em">
                Many other features beside routing are <b>view</b> to display webpage with route,
                <b>blade</b> to help ease php syntax writing, and many more.
            </p>
        </div>
    
        <div class="col-6 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1555399728-b096a8dea3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80" alt="">
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/home.blade.php ENDPATH**/ ?>