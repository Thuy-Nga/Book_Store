@extends('backend.layout.master')

@section('title')
Trang chỉnh sửa
@endsection

@section('content-title')
Chỉnh sửa loại
@endsection

@section('content')
<form id="frmLoai" name="frmLoai" method="post" action="{{ route('admin.loai.update',['id'=>$loai->l_ma]) }}" >
    @csrf
    <!-- dùng để hiểu phuong thức PUT trong Route -->
    <input type="hidden" name="_method" value="PUT"> 
    Tên danh mục: <input type="text" id="l_ten" name='l_ten' value="{{$loai->l_ten}}" class="form-control"/> <br/>   
    <input type="submit" value="Sửa chủ đề" class="btn btn-primary" />
</form>
@endsection

@section('custom-script')
<script>
    $(document).ready(function () {
        $("#frmLoai").validate({
            rules: {
                l_ten: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                },
            },
            messages: {
                l_ten: {
                    required: "Vui lòng nhập tên Danh mục",
                    minlength: "Tên Danh mục phải có ít nhất 3 ký tự",
                    maxlength: "Tên Danh mục không được vượt quá 50 ký tự"
                },
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Thêm class `invalid-feedback` cho field đang có lỗi
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }
                // Thêm icon "Kiểm tra không Hợp lệ"
                if (!element.next("span")[0]) {
                    $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>")
                        .insertAfter(element);
                }
            },
            success: function (label, element) {
                // Thêm icon "Kiểm tra Hợp lệ"
                if (!$(element).next("span")[0]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
                        .insertAfter($(element));
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>
@endsection