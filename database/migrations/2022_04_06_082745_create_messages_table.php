<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('talk_room_id');
            $table->unsignedBigInteger('offer_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('type')->comment('1: text, 2: image, 3: notification')->default(1);
            $table->text('content')->comment('テキスト、画像、通知メッセージなど');
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
        Schema::dropIfExists('messages');
    }
}
