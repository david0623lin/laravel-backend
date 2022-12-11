<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')->comment('案件ID');
            $table->integer('take_id')->comment('接案人ID');
            $table->integer('price')->comment('報價金額');
            $table->string('memo')->comment('說明');
            $table->integer('status')->comment('報價狀態');
            $table->string('created_at', 20)->comment('建立時間');
            $table->string('updated_at', 20)->comment('更新時間');

            $table->index([
                'task_id', 'take_id',
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takes');
    }
}
