<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnAttributeInTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('pro_cpu')->nullable()->after('created_at');
            $table->string('pro_display')->nullable()->after('created_at');
            $table->string('pro_graphic')->nullable()->after('created_at');
            $table->string('pro_storage')->nullable()->after('created_at');
            $table->string('pro_memory')->nullable()->after('created_at');
            $table->string('pro_os')->nullable()->after('created_at');
            $table->string('pro_battery')->nullable()->after('created_at');
            $table->string('pro_weight')->nullable()->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['pro_cpu','pro_display','pro_graphic','pro_storage','pro_memory','pro_os','pro_battery','pro_weight']);
        });
    }
}
