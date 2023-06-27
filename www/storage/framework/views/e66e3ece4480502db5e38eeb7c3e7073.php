<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="author" content="KarmaMedia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo e(URL::asset('assets/images/favicon.png')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->make('frontend.layouts.header-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div id="load"></div>
    <div class="maindiv" id="contents">
        <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('section'); ?>


        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('frontend.layouts.footer-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('script'); ?>
    </div>
</body>

</html>
<?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>