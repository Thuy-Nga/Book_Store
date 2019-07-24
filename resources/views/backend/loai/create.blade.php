@extends('backend.layout.master')

@section('title')
Trang tạo mới loại
@endsection

@section('content-title')
Tạo mới loại
@endsection

@section('content-title-small')
Trang tạo mới một danh mục sách
@endsection

@section('content')
<form id="frmLoai" name="frmLoai" method="post" action="{{ route('admin.loai.store') }}" >
    @csrf
    Tên chủ đề:
    <!-- id="cd_ten" do phia client quan li -->
    <input type="text" id="l_ten" name='l_ten' class="form-control" placeholder="Nhập danh mục mới" value="{{ old('l_ten') }}" /><br/>
    <input type="submit" value="Thêm mới" class="btn btn-primary"/>
</form>
@endsection

<!-- Jquey Validation - Ràng buộc phía Client  -->
@section('custom-script')
<script>
    $(document).ready(function () {
        $("#frmLoai").validate({
            rules: {
                l_ten: {
                    required: true,
                    minlength: 3,
                    maxlength: 50,
                },
            },
            messages: {
                l_ten: {
                    required: "Vui lòng nhập tên Danh mục",
                    minlength: "Tên Danh mục phải có ít nhất 3 ký tự",
                    maxlength: "Tên Danh mục không được vượt quá 50 ký tự",
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