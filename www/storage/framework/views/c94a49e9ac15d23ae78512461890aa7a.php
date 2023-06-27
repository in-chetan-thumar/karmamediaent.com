<label for="<?php echo e($name); ?>" class="form-label"><?php echo $label; ?><?php echo $required ? '<span style="color: red;">*</span>' : ''; ?></label>
<div class="mb-1">
    <?php ($value = !empty($value)?explode(',',$value):[]); ?>
    <?php if(!empty($options)): ?>
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check <?php echo e(isset($attributes['rows'])?$attributes['rows']:''); ?>">
                <?php echo Form::checkbox($name.'[]',$key,in_array($key,$value),array_merge_recursive(['class'=>'form-check-input'],$attributes)); ?>


                <label for="<?php echo e($name.'-label'); ?>" class="form-check-label"><?php echo $option; ?></label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="invalid-feedback" role="alert"><strong><?php echo e($message); ?></strong></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/components/checkbox.blade.php ENDPATH**/ ?>