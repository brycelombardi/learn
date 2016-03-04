

<?php $__env->startSection('content'); ?>
<h1>Edit: <?php echo $article->title; ?></h1>
<hr/>
<?php echo Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]); ?>

<?php echo $__env->make('articles.form', ['submitButtonText' => 'Edit article'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo Form::close(); ?>

<?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>