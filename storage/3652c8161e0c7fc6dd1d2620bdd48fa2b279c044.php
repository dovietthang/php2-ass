<?php $__env->startSection('content'); ?>

    <div class="row">
        <table class="table table-stripped">
            <thead>
                <th>STT</th>
                <th>Phòng</th>
                <th>Tầng</th>
                <th>Ảnh</th>
                <th>Dịch vụ</th>
                <th>Giá</th>
                <th>Chi tiết</th>
                <th>Thời gian</th>
                <th>
                    <a href="<?php echo e(BASE_URL . 'admin/rooms/add'); ?>" class="btn btn-primary">Thêm mới</a>
                </th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->room_no); ?></td>
                        <td><?php echo e($item->floor); ?></td>
                        <td>
                        <!-- <img src="<?php echo e(PUBLIC_PATH . $item->galleries[0]->img_url); ?>" width="80"> -->
                        <img src="<?php echo e($item->	image); ?>" width="100" object="cover">
                        </td>
                        <td>  
                            <ul>
                                <?php $__currentLoopData = $item->servicess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($serviceId->name); ?>: </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                        <td><?php echo e($item->price); ?></td>
                        <!-- <td><?php echo e($item->category->name); ?></td> -->
                        <td><?php echo e($item->detail); ?></td>
                        <td>Từ:   <?php echo e($item->created_at); ?><br> Đến: <?php echo e($item->updated_at); ?></td>
                        <td>
                            <a href="<?php echo e(BASE_URL . 'admin/rooms/edit/' . $item->id); ?>" class="btn btn-info">Sửa</a>
                            <a href="<?php echo e(BASE_URL . 'admin/rooms/remove?id=' . $item->id); ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3-hocLai\php2_assignment\app\views/admin/room/index.blade.php ENDPATH**/ ?>