<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Unique</title>
<link rel="icon" href="favicon.png" type="/image/png">
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css"> 
<link href="/css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="/css/animate.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="/js/jquery.nav.js"></script> 
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.isotope.js"></script>
<script type="text/javascript" src="/js/wow.js"></script> 
<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script> 
<script type="text/javascript" src="/js/custom.js"></script>
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>
<!--Header_section-->
<header id="header_wrapper">
  <?php echo $__env->yieldContent('header'); ?>
  <?php if(count($errors)> 0): ?>
    <div class = "alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </ul>
    </div>
  <?php endif; ?>
  
  <?php if(session('status')): ?>

    <div class = "alert alert-success">
      <?php echo e(session('status')); ?>

    </div>
  
  <?php endif; ?>

</header>
  <?php echo $__env->yieldContent('content'); ?>
</body>
</html>