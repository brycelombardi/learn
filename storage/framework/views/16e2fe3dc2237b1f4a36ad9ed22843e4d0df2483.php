

<?php $__env->startSection('content'); ?>
    <h1>Write a new article</h1>
    <hr/>
    <?php echo Form::open(['url' => 'articles']); ?>

        <?php echo $__env->make('articles.form', ['submitButtonText' => 'Add article'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

    <?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>