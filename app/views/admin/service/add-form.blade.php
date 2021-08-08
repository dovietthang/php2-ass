@extends('admin.layouts.main')
@section('content')
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
                    <a href="{{BASE_URL . 'services'}}" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    
@endsection