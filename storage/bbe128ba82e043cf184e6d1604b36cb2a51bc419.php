<?php $__env->startSection('content'); ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên dịch vụ</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Icon</label>
                    <input type="file" name="icon" class="form-control">
                </div>
            </div>

            <div class="col-12">
                
                <div class="text-right">
                    <a href="<?php echo e(BASE_URL . 'services'); ?>" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php3-hocLai\php2_assignment\app\views/admin/service/add-form.blade.php ENDPATH**/ ?>