

<?php $__env->startSection('title'); ?> User list <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb',['lists'=>['Dashboard'=>route('root')]]); ?>
        <?php $__env->slot('title'); ?> User list  <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usermanagements.create')): ?>
                        <a href="<?php echo e(route('usermanagements.create')); ?>" onclick="showSaveModel(event)" class="btn btn-primary"><i
                                class="mdi mdi-plus"></i>&nbsp;Add User</a>
                        <?php endif; ?>
                    </div>
                    <div class="float-start">
                        <?php echo Form::open(['url' =>route('usermanagements.index'),'id' =>'form-search','class'=>'row row-cols-lg-auto g-3 align-items-center','method' => 'get']); ?>

                        <div class="form-group">
                            <?php echo Form::text('query_str',request()->query('query_str'),['class'=>'form-control','placeholder'=>'Search by name / email','style="width: 330px;"']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::select('role',$roles,request()->query('role'),['class'=>'form-control zone','placeholder'=>'Select role']); ?>

                        </div>
                        <button type="submit" name="type" value="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                        &nbsp;
                        <a href="<?php echo e(route('usermanagements.index')); ?>" class="btn btn-secondary waves-effect waves-light">
                            Reset
                        </a>
                        <?php echo Form::close(); ?>

                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        <?php echo $table; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-bottom'); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/user.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/admin/user/user_list.blade.php ENDPATH**/ ?>