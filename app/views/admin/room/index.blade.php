@extends('admin.layouts.main')
@section('content')

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
                    <a href="{{BASE_URL . 'admin/rooms/add'}}" class="btn btn-primary">Thêm mới</a>
                </th>
            </thead>
            <tbody>
                @foreach ($rooms as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->room_no}}</td>
                        <td>{{$item->floor}}</td>
                        <td>
                        <!-- <img src="{{PUBLIC_PATH . $item->galleries[0]->img_url}}" width="80"> -->
                        <img src="{{$item->	image}}" width="100" object="cover">
                        </td>
                        <td>  
                            <ul>
                                @foreach ($item->servicess as $serviceId)
                                    <li>{{$serviceId->name}}: </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{$item->price}}</td>
                        <!-- <td>{{$item->category->name}}</td> -->
                        <td>{{$item->detail}}</td>
                        <td>Từ:   {{$item->created_at}}<br> Đến: {{$item->updated_at}}</td>
                        <td>
                            <a href="{{BASE_URL . 'admin/rooms/edit/' . $item->id}}" class="btn btn-info">Sửa</a>
                            <a href="{{BASE_URL . 'admin/rooms/remove?id=' . $item->id}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection