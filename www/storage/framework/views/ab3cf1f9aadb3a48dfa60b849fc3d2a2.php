<label for="<?php echo e($name); ?>" id="label_<?php echo e($name); ?>"><?php echo $label; ?><?php echo $required ? '<span style="color: red;">*</span>' : ''; ?></label>
<div class="mb-1">
    <?php if(!empty($options)): ?>
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check">
                <?php echo Form::radio($name,$key,$key == $value ? true:false,array_merge_recursive(['id'=>$name.$key,'class'=>'form-check-input'],$attributes)); ?>

                <?php echo e(Form::label($name.$key,$option,['class' => ''])); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="invalid-feedback" style="display: inline;"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/components/radio.blade.php ENDPATH**/ ?>