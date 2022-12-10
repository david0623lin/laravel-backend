<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->comment('會員ID');
            $table->integer('type')->comment('類型');
            $table->integer('amount')->comment('金額');
            $table->integer('memo')->comment('說明');
            $table->string('created_at', 20)->comment('建立時間');
            $table->string('updated_at', 20)->comment('更新時間');

            $table->index([
                'member_id',
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
        Schema::dropIfExists('wallet_logs');
    }
}
