<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Link</th>
            <th>Published</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->title); ?></td>
                <td><?php echo e($row->link); ?></td>
                <td>
                    <?php if($row->is_published == 'Y'): ?>
                        <span class="badge bg-success">Yes</span>
                    <?php else: ?>
                        <span class="badge bg-danger">No</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($row->is_active == 'Y'): ?>
                        <span class="badge bg-success">Yes</span>
                    <?php else: ?>
                        <span class="badge bg-danger">No</span>
                    <?php endif; ?>
                </td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('news.edit')): ?>
                                <a class="dropdown-item" onclick="showNewsEditModel(event)"
                                    href="<?php echo e(route('news.edit', $row->id)); ?>">Edit</a>
                            <?php endif; ?>

                            <?php if($row->is_active == 'Y'): ?>
                                <a class="dropdown-item" href="<?php echo e(route('news.status', $row->id)); ?>">Inactive</a>
                            <?php else: ?>
                                <a class="dropdown-item" href="<?php echo e(route('news.status', $row->id)); ?>">Active</a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('news.destroy')): ?>
                                <a class="dropdown-item"
                                    onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-<?php echo e($row->id); ?>').submit()">
                                    Delete</a>
                                <form id="delete-<?php echo e($row->id); ?>" action="<?php echo e(route('news.destroy', $row->id)); ?>"
                                    method="POST">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo e($tableData->links()); ?>

<?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/admin/news/table.blade.php ENDPATH**/ ?>