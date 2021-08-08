<?php $__env->startSection('content'); ?>

    <div class="row">
        <table class="table table-stripped">
            <thead>
                <th>STT</th>
                <th>Dịch vụ</th>
                <th>Icon</th>

                <th>
                    <a href="<?php echo e(BASE_URL . 'admin/services/add'); ?>" class="btn btn-primary">Thêm mới</a>
                </th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>                        <img src="<?php echo e($item->	image); ?>" width="50">
                        </td>

                        <td>
                            <a href="<?php echo e(BASE_URL . 'admin/services/edit/' . $item->id); ?>" class="btn btn-info">Sửa</a>
                            <a href="<?php echo e(BASE_URL . 'admin/services/remove?id=' . $item->id); ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3-hocLai\php2_assignment\app\views/admin/service/index.blade.php ENDPATH**/ ?>