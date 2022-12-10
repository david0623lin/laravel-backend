<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code')->comment('銀行代號');
            $table->integer('account')->comment('信用卡帳號');
            $table->integer('status')->comment('驗證狀態');
            $table->string('created_at', 20)->comment('建立時間');
            $table->string('updated_at', 20)->comment('更新時間');

            $table->unique([
                'account',
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
        Schema::dropIfExists('credits');
    }
}
