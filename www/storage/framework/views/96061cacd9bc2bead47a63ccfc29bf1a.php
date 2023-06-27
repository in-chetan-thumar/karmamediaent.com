<label for="<?php echo e($name); ?>" class="form-label"><?php echo $label; ?><?php echo $required ? '<span style="color: red;">*</span>' : ''; ?></label>
<?php echo e(Form::date($name, $value,array_merge_recursive(['class' => $errors->has($name)?'form-control is-invalid':'form-control'],$attributes))); ?>

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

<?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/components/date.blade.php ENDPATH**/ ?>