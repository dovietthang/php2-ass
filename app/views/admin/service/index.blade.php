@extends('admin.layouts.main')
@section('content')

    <div class="row">
        <table class="table table-stripped">
            <thead>
                <th>STT</th>
                <th>Dịch vụ</th>
                <th>Icon</th>

                <th>
                    <a href="{{BASE_URL . 'admin/services/add'}}" class="btn btn-primary">Thêm mới</a>
                </th>
            </thead>
            <tbody>
                @foreach ($services as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>                        <img src="{{$item->	image}}" width="50">
                        </td>

                        <td>
                            <a href="{{BASE_URL . 'admin/services/edit/' . $item->id}}" class="btn btn-info">Sửa</a>
                            <a href="{{BASE_URL . 'admin/services/remove?id=' . $item->id}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection