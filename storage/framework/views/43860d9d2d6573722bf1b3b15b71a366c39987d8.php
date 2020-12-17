<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo $head ?? ''; ?>

    <meta name="author" content="freehtml5.co"/>

    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(mix_e('front/assets/css/vendor.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix_e('front/assets/css/style.css')); ?>">
    <?php echo $__env->yieldContent('stylesheet'); ?>

    <script src="<?php echo e(mix_e('front/assets/js/modernizr.js')); ?>"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo e(mix_e('front/assets/js/respond.js')); ?>"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">

    <?php echo $__env->make('front.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<script src="<?php echo e(mix_e('front/assets/js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix_e('front/assets/js/main.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
