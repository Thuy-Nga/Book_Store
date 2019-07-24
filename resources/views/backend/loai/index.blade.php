@extends('backend.layout.master')

@section('custom-css')

@endsection

@section('title')
Trang Loại sách
@endsection

@section('content-title')
Danh Mục Sách
@endsection

@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên</td>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php $index = 1; ?>
        @foreach($danhsachloai as $l)
        <tr>
            <td><?php echo "$index"; ?> </td>
            <td>{{$l -> l_ten}}</td>
            <td> {{ ($l -> l_trangThai) == 2 ? 'Khả dụng' : 'Khóa'}} </td>
            <td>
                <a href="{{ route('admin.loai.edit',['id'=>$l->l_ma]) }}" class="btn btn-primary"> 
                    <i class="fa fa-edit"></i>
                    Sửa
                </a>
            </td>
            <td>
                <form method="post" action="{{ route('admin.loai.delete',['id'=>$l->l_ma]) }}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger"><i class="fa fa-trash" style="margin-right: 5px;"></i>Xóa ngay</button>
                </form>
            </td>
            <?php $index++; ?>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection