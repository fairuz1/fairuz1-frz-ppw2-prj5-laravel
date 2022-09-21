<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <h1 class="h1">Add Views</h1>
    <form action="<?php echo e(route('Views.store')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label for="pageName" class="form-label">Page name</label>
            <input type="text" class="form-control" id="pageName" name="pageName">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Description</label>
            <textarea class="form-control" name="data" id="data" cols="20" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/Views/createViews.blade.php ENDPATH**/ ?>