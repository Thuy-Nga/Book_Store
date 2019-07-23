<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    public    $timestamps   = false;    //Khong tao ra 2 cot CREATED_AT va UPDATED_AT

    protected $table        = 'chitietdonhang';
    protected $guarded      = ['dh_ma', 'sp_ma'];
    protected $primaryKey   = ['dh_ma', 'sp_ma'];

    public    $incrementing = false;    
}
