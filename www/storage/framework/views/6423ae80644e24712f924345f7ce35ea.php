

<?php $__env->startSection('title'); ?>
    Email template
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb', ['lists' => ['Dashboard' => route('root')]]); ?>
        <?php $__env->slot('title'); ?>
            Email template
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-md-3">
            <!-- Left sidebar -->
            <div class="card">
                <?php if(!empty($emailtemplates->first())): ?>
                    <div class="mail-list card-body mt-2">
                        <?php $__currentLoopData = $emailtemplates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('email.templates')); ?>?id=<?php echo e($row->id); ?>"
                                class="<?php echo e($emailtemplate->template_name == $row->template_name ? 'active' : ''); ?>"><i
                                    class="mdi mdi-email-outline"></i>&nbsp;<?php echo e($row->template_name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- End Left sidebar -->
        </div>
        <div class="col-md-9">
            <!-- Right Sidebar -->
            <div class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end">
                            <a href="#" class="btn btn-primary btn-create"><i
                                    class="mdi mdi-account-plus"></i>&nbsp;Add email template</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                            <?php echo Form::open([
                                'url' => route('email.templates.store'),
                                'method' => 'POST',
                                'id' => 'email-template-form',
                                'class' => 'col-md-12',
                                'enctype' => 'multipart/form-data',
                            ]); ?>

                            <input type="hidden" name="id"
                                value="<?php echo e(!empty($emailtemplates) ? $emailtemplate->id : ''); ?>" id="email_template_id">
                            <input type="hidden" name="template_type"
                                value="<?php echo e(!empty($emailtemplates) ? $emailtemplate->template_type : ''); ?>">
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Template name')); ?><span class="required">*</span>
                                        <?php echo Form::text('template_name', $emailtemplate->template_name, [
                                            'class' => 'form-control',
                                            'id' => 'template_name',
                                            'placeholder' => 'Template name',
                                        ]); ?>

                                        <?php $__errorArgs = ['template_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Template code')); ?><span class="required">*</span>
                                        <?php echo Form::text('template_code', $emailtemplate->template_code, [
                                            'class' => 'form-control',
                                            'id' => 'template_code',
                                            'placeholder' => 'Template code',
                                        ]); ?>

                                        <?php $__errorArgs = ['template_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Mailable class')); ?><span class="required">*</span>
                                        <?php echo Form::text('mailable', $emailtemplate->mailable, [
                                            'class' => 'form-control',
                                            'id' => 'mailable',
                                            'placeholder' => 'Mailable class',
                                        ]); ?>

                                        <?php $__errorArgs = ['mailable'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Subject')); ?><span class="required">*</span>
                                        <?php echo Form::text('subject', $emailtemplate->subject, [
                                            'class' => 'form-control',
                                            'id' => 'subject',
                                            'placeholder' => 'Subject',
                                        ]); ?>

                                        <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <?php echo e(Form::label('Content')); ?><span class="required">*</span>
                                        <?php echo Form::textarea('email_template_content', $emailtemplate->html_template, [
                                            'class' => 'form-control',
                                            'id' => 'email_template_content',
                                            'placeholder' => 'Content',
                                        ]); ?>

                                        <?php $__errorArgs = ['email_template_content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                <?php echo e(Form::button('Save', ['class' => 'btn btn-primary btnSubmit waves-effect waves-light'])); ?>

                            </div>
                            
                            <?php echo Form::close(); ?>

                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <!-- End row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    
    <script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
    <script>
        //CK Editor
        CKEDITOR.replace('email_template_content', {
            extraPlugins: 'colorbutton,colordialog,font'
        });
    </script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>
    <?php echo JsValidator::formRequest('App\Http\Requests\EmailTemplateRequest', '#email-template-form'); ?>

    <script type="text/javascript">
        $(".btnSubmit").on('click', function(e) {
            $("#email-template-form").submit();
            if ($("#email-template-form").valid()) {
                $('#status').show();
                $('#preloader').show();
                $(".btnSubmit").prop('disabled', true);
            }
        });

        $(".btn-create").on('click', function(e) {
            $('#email_template_id, #subject, #mailable, #template_code, #template_name').val('')
            CKEDITOR.instances.email_template_content.setData('');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/admin/templates/email_templates.blade.php ENDPATH**/ ?>