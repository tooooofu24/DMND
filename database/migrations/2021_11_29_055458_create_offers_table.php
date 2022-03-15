<?php

use App\Consts\Pref;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->tinyInteger('condition')->comment('1: 新品未使用, 2: 美中古・未使用に近い, 3: 目立った傷、汚れなし, 4: 状態は問わない');
            $table->enum('received_pref', Pref::LIST)->nullable();
            $table->integer('delivery_fee_paid_by');
            $table->integer('payment_method')->comment('払い方');
            $table->unsignedBigInteger('price');
            $table->tinyInteger('status')->comment('購入ステータス');
            $table->text('description')->nullable();
            $table->tinyInteger('eval_to_buyer')->nullable();
            $table->string('eval_comment_to_buyer')->nullable();
            $table->tinyInteger('eval_to_seller')->nullable();
            $table->string('eval_comment_to_seller')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
