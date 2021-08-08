<?php $__env->startSection('content'); ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên phòng trống</label>
                    <input type="text" name="room_no" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Tầng số</label>
                    <input type="text" name="floor" class="form-control">
                </div>
                <div class="form-group ">
                    <label for="">Dịch vụ</label><br>
                    <form class="mx-5" action="/action_page.php">
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceIds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input 
                                                                        
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serviceId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $serviceIds->service_id == $serviceId->id): ?>
                                            checked 
                                        <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            type="checkbox" id="<?php echo e($serviceIds->id); ?>" name="<?php echo e($serviceIds->name); ?>" value="<?php echo e($serviceIds->name); ?>">
                            <label for="<?php echo e($serviceIds->name); ?>"> <?php echo e($serviceIds->name); ?></label><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Ảnh phòng</label>
                    <input type="file" name="image" multiple class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Giá phòng</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">thời gian đặt phòng</label>
                    <input type="datetime-local" name="created_at" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">thời gian trả phòng</label>
                    <input type="datetime-local" name="updated_at" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea class="form-control" rows="5" name="detail"></textarea>
                </div>
                
                <div class="text-right">
                    <a href="<?php echo e(BASE_URL . 'rooms'); ?>" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3-hocLai\php2_assignment\app\views/admin/room/add-form.blade.php ENDPATH**/ ?>