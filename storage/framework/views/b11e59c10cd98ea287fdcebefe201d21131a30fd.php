<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <h1 class="h1"><b>Add Blog Your Impressions to This Website</b></h1>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label for="name" class="form-label">Your name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="impressions" class="form-label">What do you think about this project?</label>
            <textarea class="form-control"  name="impressions" id="impressions" cols="20" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary"><b>Submit</b></button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/posts/create.blade.php ENDPATH**/ ?>