<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invites', function (Blueprint $table) {
            $table->integer('member_id')->comment('會員ID');
            $table->string('self_invite_code', 10)->comment('會員邀請碼');
            $table->string('sign_invite_code', 10)->comment('註冊使用的邀請碼');
            $table->integer('invite_count')->comment('已邀請人數');
            $table->integer('give_back')->comment('回饋');
            $table->string('created_at', 20)->comment('建立時間');
            $table->string('updated_at', 20)->comment('更新時間');

            $table->primary([
                'member_id',
            ]);
            $table->unique([
                'self_invite_code', 'sign_invite_code',
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
        Schema::dropIfExists('invites');
    }
}
