

<?php $__env->startSection('content'); ?>
    <h1>Articles</h1>

        <article>
            <h2><?php echo e($article->title); ?></h2>
            <div class="body"><?php echo e($article->body); ?></div>
        </article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>