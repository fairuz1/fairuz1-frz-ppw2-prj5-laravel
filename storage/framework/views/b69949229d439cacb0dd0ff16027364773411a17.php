<?php $__env->startSection('content'); ?>

<div class="alert alert-primary alert-dismissible fade show login-alert" role="alert">
    <?php if(session('status')): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <h4 class="alert-heading"><b>Welcome to project page!</b></h4>
    <p> Congratulation <b><?php echo e(Auth::user()->name); ?></b>, you have Successfuly routed to project page! Keep routing to read all the informations!</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 me-0 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1573456373835-579c408de263?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=940&q=80" alt="">
        </div>
    
        <div class="col my-auto mx-auto me-4 row">
            <h1 class="h1 ms-4" style="font-size: 2em; font-weight:bolder">My Laravel Project</h1>
            <p class="ms-4" style="font-size: 1.5em">
                This laravel project is a project that I have made from learning in Web Programming Practical Work
                with my lecturer and from his tasks. This projects is going to change until the end of this class.
            </p>
        </div>
    </div>
    
    <div class="row ">
        <div class="col my-auto mx-auto me-2">
            <h1 class="h1 ms-4" style="font-size: 2em; font-weight: bolder;">Project in Campus</h1>
            <p class="ms-4" style="font-size: 1.5em">
                At the end of my class, I hope this project would become quite complete laravel's
                feature and about lerning web development as well. 
            </p>
        </div>
    
        <div class="col-6 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1532236204992-f5e85c024202?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=895&q=80" alt="">
        </div>
    
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/projects.blade.php ENDPATH**/ ?>