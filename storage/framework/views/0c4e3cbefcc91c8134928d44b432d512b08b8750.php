<?php $__env->startSection('content'); ?>



<?php if(session()->has('edited')): ?>
    <div id="session-edited" class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('edited')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif(session()->has('deleted')): ?>
    <div id="session-deleted" class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('deleted')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>

<div class="container">
    <div class="row mt-4 mb-4">
        <h1 class="h1">Write your Thought About <b>This Website</b>!</h1>
        <p style="font-size: 1.3em">
            This is an example of a CRUD operations in laravel. 
            What is your thoughts about this website?
            Leave what you feel in the table below by 
            pressing this button.
        </p>
        <div class="mb-3">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addImpressions"><b>Add Impressions</b></button>
        </div>
        <table class="table caption-top table-hover table-bordered text-center mt-2">
            <caption>People impressions about this website</caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Impressions</th>
                    <th scope="col">Date</th>
                    <th scope="col" span="2">Edit Data</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($posts) > 0): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td id="title"><?php echo e($post->title); ?></td>
                        <td id="description"><?php echo e($post->description); ?></td>
                        <td id="date1"><?php echo e($post->created_at); ?></td>
                        <td class="mx-auto text-center">
                            <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary"><b>Edit</b></a>
                            <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="POST" id="deleteData" style="display: inline-block">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo e(csrf_field()); ?>        
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')"><b>Delete</b></button>
                            </form>
                            
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <th scope="row">Be the first to add your impressions!</th>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <small>Pages number <b><?php echo e($posts->currentPage()); ?></b>. Displaying <b><?php echo e($posts->perPage()); ?></b> data each, from the total of <b><?php echo e($posts->total()); ?></b> data</small>

    </div>
    <div class="d-flex justify-content-center">
        <?php echo e($posts->links()); ?>

    </div>
</div>




<div class="modal fade" tabindex="-1" id="addImpressions">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="h3 headingData mb-0" style="font-size: 2em;"><b>Add <span style="color: #319DA0;">Impressions</b></span></h3>
            </div>
            <div class="modal-body" style="color: #2E2E2E;">
                <form action="<?php echo e(route('posts.store')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" maxlength="50">
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
                        <label for="impressions" class="form-label">Impressions about this website</label>
                        <textarea class="form-control" name="impressions" id="impressions" cols="10" rows="5" maxlength="200"></textarea>
                        <div class="form-text" id="impressions_detail">Every thoughts you have is fine</div>
                        <?php if($errors->has('impressions')): ?>
                            <span class="text-danger"><?php echo e($errors->first('impressions')); ?></span>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary" style="font-size: 1em;"><b>Add Data</b></button>
                    <button type="button" class="btn btn-outline-secondary ms-2" style="font-size: 1em;" data-dismiss="modal"><b>Go back</b></button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fairuzakbarazaria/proyek_tugas1/resources/views/posts/index.blade.php ENDPATH**/ ?>