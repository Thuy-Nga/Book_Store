<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedInteger('dh_ma');
            $table->unsignedInteger('sp_ma');
            $table->unsignedSmallInteger('ctdh_soLuong')
                ->default('1');
            $table->unsignedInteger('ctdh_donGia')
                ->default('1');

            $table->primary(['dh_ma', 'sp_ma']);

            $table->foreign('dh_ma')
                ->references('dh_ma') ->on('donhang')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('sp_ma')
                ->references('sp_ma') ->on('sanpham')
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
        Schema::dropIfExists('chitietdonhang');
    }
}
