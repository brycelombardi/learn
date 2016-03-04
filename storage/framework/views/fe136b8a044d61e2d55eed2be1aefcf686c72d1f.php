

<?php $__env->startSection('content'); ?>
    <div class="title">About <?php echo e($first); ?> <?php echo e($last); ?></div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>