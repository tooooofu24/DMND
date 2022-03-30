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
            $table->tinyInteger('condition')->comment('10: 新品未使用, 20: 美中古・未使用に近い, 30: 目立った傷、汚れなし, 40: 状態は問わない');
            $table->enum('received_pref', Pref::LIST)->nullable();
            $table->tinyInteger('delivery_fee_payment_burden')->comment('送料負担');
            $table->tinyInteger('payment_method')->comment('支払い方法');
            $table->unsignedBigInteger('price');
            $table->tinyInteger('status')->default(0)->comment('商品の販売、購入ステータス(0 売り手なし, 10 売り手がDEALした, 20 買い手がDEAL承諾した, 30 買い手が支払いした, 40 売り手が発送通知した, 50 買い手が受取通知した)');
            $table->text('description')->nullable();
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
