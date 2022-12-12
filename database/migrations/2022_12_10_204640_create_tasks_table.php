<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->comment('群組分類ID');
            $table->integer('item_id')->comment('群組項目ID');
            $table->string('city', 10)->comment('城市');
            $table->string('area', 10)->comment('地區');
            $table->integer('pre_pay_id')->comment('預算ID');
            $table->integer('amount')->comment('手續費');
            $table->json('detail')->comment('詳細資訊');
            $table->integer('have_read_count')->comment('已讀取報價人數');
            $table->integer('read_count_limit')->comment('可讀取報價人數上限');
            $table->integer('need_count')->comment('發案人需求人數');
            $table->integer('give_id')->comment('提案人ID');
            $table->integer('take_id')->comment('接案人ID')->nullable();
            $table->integer('new')->comment('新案件狀態');
            $table->integer('status')->comment('案件狀態');
            $table->string('close_at', 20)->comment('案件到期時間');
            $table->string('created_at', 20)->comment('建立時間');
            $table->string('updated_at', 20)->comment('更新時間');

            $table->index([
<<<<<<< Updated upstream
                'group', 'item', 'pre_pay_id', 'give_id', 'take_id',
=======
                'group_id', 'item_id', 'pre_pay_id', 'give_id', 'take_id', 'city',
>>>>>>> Stashed changes
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
        Schema::dropIfExists('tasks');
    }
}
