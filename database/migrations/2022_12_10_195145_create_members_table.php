<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account', 16)->comment('帳號');
            $table->string('password', 16)->comment('密碼');
            $table->string('name', 10)->comment('姓名');
            $table->integer('sex')->comment('性別');
            $table->string('city', 10)->comment('城市');
            $table->string('area', 10)->comment('地區');
            $table->string('id_card', 10)->comment('身分證');
            $table->string('birthday', 10)->comment('生日');
            $table->string('mail', 30)->comment('信箱');
            $table->string('phone', 10)->comment('手機');
            $table->string('img')->comment('大頭照')->default('');
            $table->string('line_id', 40)->comment('line_ID');
            $table->integer('credit_id')->comment('信用卡ID')->nullable();
            $table->integer('wallet')->comment('錢包餘額');
            $table->integer('status')->comment('會員狀態');
            $table->string('created_at', 20)->comment('建立時間');
            $table->string('updated_at', 20)->comment('更新時間');

            $table->unique([
                'account', 'id_card', 'mail', 'phone', 'line_id', 'credit_id',
            ]);
            $table->index([
                'birthday', 'city', 'area',
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
        Schema::dropIfExists('members');
    }
}
