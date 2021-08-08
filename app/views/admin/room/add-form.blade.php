@extends('admin.layouts.main')
@section('content')
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
                        @foreach ($services as $serviceIds)
                            <input 
                                                                        
                                @foreach ($services as $serviceId)
                                        @if( $serviceIds->service_id == $serviceId->id)
                                            checked 
                                        @endif
                                @endforeach

                            type="checkbox" id="{{$serviceIds->id}}" name="{{$serviceIds->name}}" value="{{$serviceIds->name}}">
                            <label for="{{$serviceIds->name}}"> {{$serviceIds->name}}</label><br>
                        @endforeach
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
                    <a href="{{BASE_URL . 'rooms'}}" class="btn btn-danger">Hủy</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </form>
    <br>
    
@endsection