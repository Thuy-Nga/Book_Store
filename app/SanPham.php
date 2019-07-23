<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    const     CREATED_AT    = 'sp_taoMoi';
    const     UPDATED_AT    = 'sp_capNhat';

    protected $table        = 'sanpham';
    protected $guarded      = ['sp_ma'];
    protected $primaryKey   = 'sp_ma';
    protected $dates        = ['sp_taoMoi', 'sp_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';

    public function loaiSanPham(){
        return $this->belongsTo('App\Loai','l_ma','l_ma');
    }
}
