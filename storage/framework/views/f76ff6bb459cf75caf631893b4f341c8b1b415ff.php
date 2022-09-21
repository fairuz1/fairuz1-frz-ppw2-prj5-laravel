<?php $__env->startSection('content'); ?>

<div class="alert alert-primary alert-dismissible fade show login-alert" role="alert">
    <?php if(session('status')): ?>
        <div class="alert alert-primary" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <h4 class="alert-heading"><b>Welcome to ShowViews Page!</b></h4>
    <p> Congratulation <b><?php echo e(Auth::user()->name); ?></b>! You have successfuly accessed <b><?php echo e($views->page); ?></b> from database using controller!</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php echo $views->pageData; ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/Views/showViews.blade.php ENDPATH**/ ?>