<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('kh_ma');
            $table->string('kh_taiKhoan');
            $table->string('kh_matKhau');
            $table->string('kh_hoTen', 100);
            $table->unsignedTinyInteger('kh_gioiTinh') 
                ->default('1');
            $table->string('kh_email', 100);
            $table->datetime('kh_ngaySinh') 
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('kh_diaChi')
                ->nullable()
                ->default('NULL') 
                ->comment('Địa chỉ mặc định là null');
            $table->string('kh_dienThoai', 11)
                ->nullable()
                ->default('NULL') 
                ->comment('Địa chỉ mặc định là null');
            $table->timestamp('kh_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('kh_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('kh_trangThai')
                ->default('2')
                ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
