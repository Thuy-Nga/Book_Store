@extends('backend.layout.master')

@section('custom-css')
<style>
    .preview-upload {
        border: 1px dashed red;
        padding: 10px;
    }

    .preview-upload img {
        width: 250px;
    }

    .btn_save {
        margin: 20px 0px;
    }
</style>
@endsection

@section('title')
Thêm mới Sản phẩm
@endsection

@section('content-title')
Thêm mới Sản phẩm
@endsection

@section('content-title-small')
Thêm mới Sản phẩm. Vui lòng nhập thông tin và bấm Lưu.
@endsection

@section('content')
<form id="frmSP" name="frmSP" method="post" action="{{ route('admin.sanpham.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="l_ma">Loại sản phẩm</label>
        <select name="l_ma" class="form-control">
            @foreach($dsLoai as $loai)
            @if(old('l_ma') == $loai->l_ma)
            <option value="{{ $loai->l_ma }}" selected>{{ $loai->l_ten }}</option>
            @else
            <option value="{{ $loai->l_ma }}">{{ $loai->l_ten }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="sp_ten">Tên sản phẩm</label>
        <input type="text" class="form-control" id="sp_ten" name="sp_ten" value="{{ old('sp_ten') }}">
    </div>
    <div class="form-group">
        <label for="sp_gia">Giá </label>
        <input type="number" class="form-control" id="sp_gia" name="sp_gia" value="{{ old('sp_gia') }}">
    </div>
    <div class="form-group">
        <label for="sp_giamGia">Giá giảm</label>
        <input type="number" class="form-control" id="sp_giamGia" name="sp_giamGia" value="{{ old('sp_giamGia') }}">
    </div>
    <div class="form-group">
        <div class="file-loading">
            <label>Hình đại diện</label>
            <input id="sp_hinh" type="file" name="sp_hinh">
            <div class="preview-upload">
                <img id='sp_hinh-upload' />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="sp_mota">Thông tin</label>
        <input type="text" class="form-control" id="sp_mota" name="sp_mota" value="{{ old('sp_mota') }}">
    </div>
    <div class="form-group">
        <label for="sp_taoMoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="sp_taoMoi" name="sp_taoMoi" value="{{ old('sp_taoMoi') }}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="sp_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="sp_capNhat" name="sp_capNhat" value="{{ old('sp_capNhat') }}" data-mask-datetime>
    </div>
    <div>
        <label for="sp_trangThai">Trạng thái</label>
        <select name="sp_trangThai" class="form-control">
            <option value="1" {{ old('sp_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
            <option value="2" {{ old('sp_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
        </select>
    </div>
    <button class="btn btn-primary btn-block btn_save">Lưu</button>
</form>
@endsection

<!-- sử dụng Jquery Validator để ràng buộc phái Client -->
@section('custom-script')
<script>
    $(document).ready(function() {
        $("#frmSP").validate({
            rules: {
                sp_ten: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                },
                sp_gia: {
                    required: true,
                },
                sp_giamGia: {
                    required: true,
                },
                sp_mota: {
                    minlength: 10,
                    
                },
            },
            messages: {
                sp_ten: {
                    required: "Vui lòng nhập tên sản phẩm",
                    minlength: "Tên sản phẩm phải có ít nhất 3 ký tự",
                    maxlength: "Tên sản phẩm không được vượt quá 50 ký tự"
                },
                sp_gia: {
                    required: "Vui lòng nhập Gía",
                },
                sp_giamGia: {
                    required: "Vui lòng nhập giá giảm",
                },
                sp_mota: {
                    minlenght: "Mô tả chi tiết sản phẩm phải ít nhất 10 ký tự",
                },
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
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
            success: function(label, element) {
                // Thêm icon "Kiểm tra Hợp lệ"
                if (!$(element).next("span")[0]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>")
                        .insertAfter($(element));
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>

<script>
    // Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#sp_hinh-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    // Bắt sự kiện, ngay khi thay đổi file thì đọc lại nội dung và hiển thị lại hình ảnh mới trên khung preview-upload
    $("#sp_hinh").change(function() {
        readURL(this);
    });
</script>
@endsection