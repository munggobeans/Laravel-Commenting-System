<?php $__env->startSection('main'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Comments list div -->
            <div class="container">
                <h3 class="text-center text-primary">Comments</h3>
                <hr />
                <br/>
                <div class="container col-sm-6" style="overflow-y: scroll; height: 400px">
                    <div class="row text-left">
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card" style="border-bottom: dotted .5px black">
                            <div class="card-body">
                              <label class="card-title"><?php echo e($comment->com_name); ?></label> &nbsp; <small class="date-lbl"> <?php echo e($comment->com_date); ?></small>
                              <p class="card-text"><?php echo e($comment->com_comments); ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Form div -->
                <div class="container col-sm-6">
                    <h4>Add comment</h4>
                    <form method="post" action="<?php echo e(route('comments.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <!-- Validation Error message -->
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <!-- Name Input -->
                        <div class="col-sm-8">
                            <div class="form-group col-sm-5">
                                <label for="com_name">Name:</label>
                                <input type="text" class="form-control" name="com_name" value="<?php echo e(old('com_name')); ?>"/>
                            </div>
                        <div>
                        <!-- Comment Input -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="com_name">Comment:</label>
                                <textarea class="form-control" name="com_comments"></textarea>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">Enter comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Vince\comments_project\resources\views/comments/index.blade.php ENDPATH**/ ?>