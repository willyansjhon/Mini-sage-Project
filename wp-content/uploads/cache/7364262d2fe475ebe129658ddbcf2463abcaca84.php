<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if($custom_posts): ?>
    <?php $__currentLoopData = $custom_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <h3><?php echo e($post['title']); ?></h3>
            <p><?php echo e($post['content']); ?></p>
            <?php if($post['example_meta_field']): ?>
                <strong>Example meta field:</strong>
                <p><?php echo e($post['example_meta_field']); ?></p>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <div>
        No custom posts found, try creating an example custom post at <a href="/wp/wp-admin/edit.php?post_type=my-custom-post-type">/wp-admin</a>.
    </div>
<?php endif; ?>

<hello-world></hello-world>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>