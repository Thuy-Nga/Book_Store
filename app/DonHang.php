<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    const     CREATED_AT    = 'dh_taoMoi';
    const     UPDATED_AT    = 'dh_capNhat';

    protected $table        = 'donhang';
    protected $guarded      = ['dh_ma'];
    protected $primaryKey   = 'dh_ma';
    protected $dates        = ['dh_thoiGianDatHang', 'db_thoiGianNhanHang', 'dh_ngayXuLi', 'dh_ngayLapPhieuGiao', 'dh_ngayGiaoHang', 'dh_taoMoi', 'dh_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
