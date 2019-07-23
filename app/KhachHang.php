<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    const     CREATED_AT    = 'kh_taoMoi';
    const     UPDATED_AT    = 'kh_capNhat';

    protected $table        = 'khachhang';
    protected $guarded      = ['kh_ma'];
    protected $primaryKey   = 'kh_ma';
    protected $dates        = ['kh_ngaySinh', 'kh_taoMoi', 'kh_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
