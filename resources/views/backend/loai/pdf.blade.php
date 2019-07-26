<!DOCTYPE html>
<html>

<head>
    <title>Danh mục sách</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }

        body {
            font-size: 10px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            vertical-align: middle;
        }

        caption {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .companyInfo {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td class="companyInfo">
                    Cửa hàng Sách<br />
                    http://bookStore.com/<br />
                    (0292)3.888.999 # 01.222.888.999<br />
                    <img src="" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php
        $tongSoTrang = ceil(count($danhsachloai) / 5);
        ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh mục sách</caption>
            <tr>
                <th colspan="5" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @foreach ($danhsachloai as $l)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $l->l_ten }}</td>
                <td align="right">{{ $l->l_taoMoi }}</td>
                <td align="right">{{ $l->l_capNhat }}</td>
                <td align="right">{{ $l->l_trangThai }}</td>

            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="5" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</body>

</html>