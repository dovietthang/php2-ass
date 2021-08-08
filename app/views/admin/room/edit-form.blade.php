@extends('admin.layouts.main')
@section('content')
<form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên phòng trống</label>
                    <input type="text" name="room_no" class="form-control" value="{{$model->room_no}}">
                </div>

                <div class="form-group">
                    <label for="">Tầng số</label>
                    <input type="text" name="floor" class="form-control" value="{{$model->floor}}">
                </div>
                <div class="form-group ">
                    <label for="">Dịch vụ</label><br>
                    <form class="mx-5" action="">
                        @foreach ($services as $serviceId)
                                    <input 
                                    @foreach ($model->roomServicess as $serviceIds)
                                        @if( $serviceIds->service_id == $serviceId->id  &&  $serviceIds->room_id == $model->id )
                                            checked 
                                        @endif
                                    @endforeach
                                    type="checkbox" id="{{$serviceId->id}}" name="{{$serviceId->name}}" value="{{$serviceId->id}}">
                                <label > {{$serviceId->name }}  </label><br> 
                        @endforeach


                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Ảnh phòng</label>
                    <img src="{{BASE_URL . $model->image}}" alt="" width="100">
                    <input type="file" name="image" multiple class="form-control" value="{{$model->image}}">
                </div>
                <div class="form-group">
                    <label for="">Giá phòng</label>
                    <input type="text" name="price" class="form-control" value="{{$model->price}}">
                </div>
                <div class="form-group">
                    <label for="">thời gian đặt phòng</label>
                    <input type="datetime" name="created_at" class="form-control" value="{{$model->created_at}}">
                </div>
                <div class="form-group">
                    <label for="">thời gian trả phòng</label>
                    <input type="datetime" name="updated_at" class="form-control" value="{{$model->updated_at}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea class="form-control" rows="5" name="detail">{{$model->detail}}</textarea>
                </div>
                
                <div class="text-right">
                    <a href="{{BASE_URL . 'rooms'}}" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    
@endsection
