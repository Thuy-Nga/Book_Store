<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('sp_ma');
            $table->string('sp_ten');
            $table->text('sp_mota')
                ->nullable();
            $table->decimal('sp_gia')
                ->default('0');
            $table->decimal('sp_giamgia')
                ->default('0'); 
            $table->string('sp_hinh');
            $table->timestamp('sp_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('sp_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('sp_trangThai')
                ->default('2')
                ->comment('Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng');
            $table->unique('sp_ten');

            // Khóa ngoại
            $table->unsignedInteger('l_ma');

            $table->foreign('l_ma')
                ->references('l_ma')
                ->on('loai')
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
        Schema::dropIfExists('sanpham');
    }
}
