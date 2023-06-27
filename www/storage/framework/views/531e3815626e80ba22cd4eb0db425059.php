<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Poster</th>
            <th>Directed by</th>
            <th>Produced by</th>
            <th>Main cast</th>
            <th>Released date</th>
            <th>Published</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $tableData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->title); ?></td>
                <td>
                    <img src="/<?php echo e($row->poster_landscape_url); ?>" alt="" height="40px">
                </td>
                <td><?php echo e($row->directed_by); ?></td>
                <td><?php echo e($row->produced_by); ?></td>
                <td><?php echo e($row->main_cast); ?></td>
                <td><?php echo e($row->release_date_formatted); ?></td>
                <td>
                    <?php if($row->status == 'RELEASED'): ?>
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
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('webseries.edit')): ?>
                                <a class="dropdown-item" onclick="showMovieEditModel(event)"
                                    href="<?php echo e(route('webseries.edit', $row->id)); ?>">Edit</a>
                            <?php endif; ?>

                            <?php if($row->is_active == 'Y'): ?>
                                <a class="dropdown-item" href="<?php echo e(route('webseries.status', $row->id)); ?>">Inactive</a>
                            <?php else: ?>
                                <a class="dropdown-item" href="<?php echo e(route('webseries.status', $row->id)); ?>">Active</a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('webseries.destroy')): ?>
                                <a class="dropdown-item"
                                    onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-<?php echo e($row->id); ?>').submit()">
                                    Delete</a>
                                <form id="delete-<?php echo e($row->id); ?>" action="<?php echo e(route('webseries.destroy', $row->id)); ?>"
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

<?php /**PATH D:\OSPanel\domains\karmamediaent\www\resources\views/admin/webseries/table.blade.php ENDPATH**/ ?>