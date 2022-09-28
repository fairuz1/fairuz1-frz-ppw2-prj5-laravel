<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <h1 class="h1"><b>Update data</b></h1>
    <form action="<?php echo e(route('posts.update', $posts->id)); ?>" method="POST" id="test1">
    <?php echo method_field('PUT'); ?>
        <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label for="title" class="form-label">Your name</label>
            <input type="text" class="form-control" id="title" name="name" value="<?php echo e($posts->title); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">What do you think about this project?</label>
            <textarea class="form-control" name="impressions" id="description" cols="20" rows="5"><?php echo e($posts->description); ?></textarea>
            <?php if($errors->has('impressions')): ?>
                <span class="text-danger"><?php echo e($errors->first('impressions')); ?></span>
            <?php endif; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo e($posts->id); ?>">

        <button type="submit" class="btn btn-primary"><b>Submit</b></button>
        <script>
            console.log(document.getElementById("test1").action);
        </script>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/posts/edit.blade.php ENDPATH**/ ?>