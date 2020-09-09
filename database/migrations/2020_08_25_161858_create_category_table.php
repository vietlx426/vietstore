<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('c_name');
            $table->string('c_slug')->unique();
            $table->string('c_avatar')->nullable();
            $table->string('c_banner')->nullable();
            $table->string('c_desc')->nullable();
            $table->tinyInteger('c_status')->default(1)->comment('1: hiển thị, 2: ẩn');
            $table->tinyInteger('c_hot')->default(0);

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
        Schema::dropIfExists('category');
    }
}
