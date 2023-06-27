<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo e($title); ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="breadcrumb-item <?php echo e(!empty($title)?'active':''); ?>"><a href="<?php echo e(!empty($list)?$list:'javascript: void(0);'); ?>"><?php echo e($key); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>