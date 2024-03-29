<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('nv_ma');
            $table->string('nv_taiKhoan');
            $table->string('nv_matKhau');
            $table->string('nv_hoTen', 100);
            $table->unsignedTinyInteger('nv_gioiTinh') 
                ->default('1');
            $table->string('nv_email', 100);
            $table->datetime('nv_ngaySinh') 
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nv_diaChi')
                ->nullable()
                ->default('NULL') 
                ->comment('Địa chỉ mặc định là null');
            $table->string('nv_dienThoai', 11)
                ->nullable()
                ->default('NULL') 
                ->comment('Địa chỉ mặc định là null');
            $table->timestamp('nv_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('nv_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('nv_trangThai')
                ->default('2')
                ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');

            $table  ->unique('nv_taiKhoan');
            $table  ->unique('nv_email');
            $table  ->unique('nv_dienThoai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
