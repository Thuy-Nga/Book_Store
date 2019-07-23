<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table  ->increments('dh_ma');
                $table  ->datetime('dh_thoiGianDatHang')
                        ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table  ->datetime('db_thoiGianNhanHang');
                $table  ->string('dh_nguoiNhan', 100);
                $table  ->string('dh_diaChi');
                $table  ->string('dh_dienThoai', 11);
                $table  ->string('dh_nguoiGui', 100);
                $table  ->unsignedTinyInteger('dh_daThanhToan')
                        ->default('0');
                $table  ->datetime('dh_ngayXuLi')
                        ->nullable()
                        ->default(NULL);
                $table  ->datetime('dh_ngayLapPhieuGiao')
                        ->nullable()
                        ->default(NULL);
                $table  ->datetime('dh_ngayGiaoHang')
                        ->nullable()
                        ->default(NULL);
                $table  ->timestamp('dh_taoMoi')
                        ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table  ->timestamp('dh_capNhat')
                        ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table  ->unsignedTinyInteger('dh_trangThai')
                        ->default('1')
                        ->comment('Trạng thái # Trạng thái đơn hàng: 1-nhận đơn, 2-xử lý đơn, 3-giao hàng, 4-hoàn tất, 5-đổi trả, 6-hủy');
                
                // List Foregin Key
                $table  ->unsignedInteger('kh_ma');
                $table  ->unsignedInteger('nv_xuLi');

                $table  ->unsignedInteger('nv_giaoHang');
                        
                $table  ->foreign('kh_ma')
                        ->references('kh_ma') ->on('khachhang')
                        ->onUpdate('CASCADE')
                        ->onDelete('CASCADE');
                        
                $table  ->foreign('nv_xuLi')
                        ->references('nv_ma') ->on('nhanvien')
                        ->onUpdate('CASCADE')
                        ->onDelete('CASCADE');      
                $table  ->foreign('nv_giaohang')
                        ->references('nv_ma') ->on('nhanvien')
                        ->onUpdate('CASCADE')
                        ->onDelete('CASCADE');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
