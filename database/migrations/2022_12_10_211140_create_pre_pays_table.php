<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_pays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('range', 20)->comment('價格區間');
            $table->float('take_proportion')->comment('報價手續費比例');
            $table->float('back_proportion')->comment('未成交退費比例');
            $table->string('created_at', 20)->comment('建立時間');
            $table->string('updated_at', 20)->comment('更新時間');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_pays');
    }
}
