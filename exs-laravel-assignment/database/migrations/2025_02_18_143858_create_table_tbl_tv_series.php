<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up() {
        Schema::create('tbl_tv_series', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('channel',100);
            $table->string('genre',100); // Ensure correct column name
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('tbl_tv_series');
    }
};
