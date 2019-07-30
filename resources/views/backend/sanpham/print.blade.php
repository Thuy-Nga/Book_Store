@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu in danh sách sản phẩm
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
<style>
.companyInfo {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
.hinhSanPham {
            width: 100px;
            height: 100px;
        }
table {
    width: 100%;
}
.page-break {
            page-break-after: always;
        }
</style>

@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
                <td class="companyInfo" align="center">
                Công ty Cổ Phần Sách Trí Tuệ Việt<br />
                    http://bookStore.com/<br />
                    0907951800<br />
                    <img src="{{ asset('img/logo.jpg') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($danhsachsanpham)/4);
        ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách sản phẩm</caption>
            <tr>
                <th colspan="6" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Hình sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Giá giảm</th>
                <th>Loại sản phẩm</th>
            </tr>
            @foreach ($danhsachsanpham as $sp)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="center">
                    <img class="hinhSanPham" src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" />
                </td>
                <td align="left">{{ $sp->sp_ten }}</td>
                <td align="right">{{ $sp->sp_gia }}</td>
                <td align="right">{{ $sp->sp_giamgia }}</td>
                <td aling="left">{{ $sp->loaiSanPham->l_ten}}</td>
                
            </tr>
            @if (($loop->index + 1) % 4 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5" style="margin-top: 5px;">
            <tr>
                <th colspan="6" align="center">Trang {{ 1 + floor(($loop->index + 1) / 4) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Hình sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Loại sản phẩm</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection