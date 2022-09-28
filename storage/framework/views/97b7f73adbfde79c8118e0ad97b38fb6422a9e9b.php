<?php $__env->startSection('content'); ?>
<div class="jumbotron jumbotron-fluid mt-4">
    <div class="container">
        <h1 class="h1"><?php echo e($posts->title); ?></h1>
        <small>Date: <?php echo e($posts->created_at); ?></small>
        <p><?php echo e($posts->description); ?></p>

        <a href="/posts/<?php echo e($posts->id); ?>/edit" class="btn btn-primary"><b>Edit</b></a>
        <form action="<?php echo e(route('posts.destroy',$posts->id)); ?>" method="POST" id="deleteData">
            <?php echo method_field('DELETE'); ?>
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($posts->id); ?>"> <br/>
            
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/posts/show.blade.php ENDPATH**/ ?>