<?php $__env->startSection('header'); ?>
	<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('site.content_page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>