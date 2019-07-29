@extends('backend.layout.master')
@section('custom-css')
<style>
    .img-sp {
        width: 150px;
        height: 200px;
    }
</style>
@endsection

@section('title')
Danh sách sản phẩm
@endsection

@section('content-title')
Danh sách sản phẩm
@endsection

@section('content-title-small')
Danh sách các Sản phẩm có trong Hệ thống. Bạn có thể CRUD!
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá sản phẩm</th>
            <th>Giá giảm</th>
            <th>Loại sản phẩm</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dsSanPham as $sp)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $sp->sp_ten }}</td>
            <td>
                <img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="img-sp" />
            </td>
            <td>{{ $sp->sp_gia }}</td>
            <td>{{ $sp->sp_giamgia }}</td>
            <td>{{ $sp->loaiSanPham->l_ten }}</td>
            <td>
                <a href="{{ route('admin.sanpham.edit', ['id'=>$sp->sp_ma]) }}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                    Sửa
                </a>
            </td>
            <td>
                <form method="post" action="{{ route('admin.sanpham.destroy', ['id'=>$sp->sp_ma]) }}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"><i class="fa fa-trash" style="margin-right: 5px;"></i>Xóa ngay</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection