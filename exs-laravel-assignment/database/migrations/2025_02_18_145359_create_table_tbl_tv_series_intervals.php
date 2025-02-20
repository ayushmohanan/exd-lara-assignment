<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up() {
        Schema::create('tbl_tv_series_intervals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tv_series');
            $table->foreign('id_tv_series')
                  ->references('id')
                  ->on('tbl_tv_series')
                  ->onDelete('cascade');
            $table->string('week_day', 50);
            $table->time('show_time');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('tbl_tv_series_intervals');
    }
};
