<?php $__env->startSection('content'); ?>


<div class="alert alert-primary alert-dismissible fade show login-alert" role="alert">
    <?php if(session('status')): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <h4 class="alert-heading"><b>Welcome to education Page</b></h4>
    <p> Congratulation <b><?php echo e(Auth::user()->name); ?></b>, you have Successfuly routed to education page! Keep routing to read all the informations!</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="container">
    <div class="row">
        <div class="col-6 me-0 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1549693578-d683be217e58?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=877&q=80" alt="">
        </div>
    
        <div class="col my-auto mx-auto me-4 row">
            <h1 class="h1 ms-4" style="font-weight:bolder">What about Blade?</h1>
            <p class="ms-4" style="font-size: 1.5em">
                Laravel's <b>blade</b> are basically an file extension feature that allow a much 
                simplerer syntaxs so that developer does not write a full PHP code.
            </p>
        </div>
    </div>
    
    <div class="row">
        <div class="col my-auto mx-auto me-2">
            <h1 class="h1 ms-4" style="font-weight:bolder">Another features?</h1>
            <p class="ms-4" style="font-size: 1.5em">
                Aside from Route, views, and blade, Laravel also has nother feature that really handy
                for developer. That feature includes <b>Model</b> and <b>Controller</b>.  
            </p>
        </div>
    
        <div class="col-6 gx-0">
            <img class="img-fluid my-auto mx-auto mb-0" src="https://images.unsplash.com/photo-1581853751074-21c0665b6c56?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/education.blade.php ENDPATH**/ ?>