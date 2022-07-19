<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoahoc', function (Blueprint $table) {
            $table->id();
            $table->string('ten_kH');
            $table->date('thoi_gian_hoc');
            $table->integer('trang_thai')->default(1);
            $table->String('id_danh_muc');
            $table->string('mo_ta_KH');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khoahoc');
    }
};
