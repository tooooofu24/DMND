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
            $table->integer('condition')->comment(App\Consts\Offer\OfferCondition::DESCRIPTION);
            $table->enum('received_pref', Pref::LIST)->nullable();
            $table->integer('delivery_fee_payment_burden')->comment('送料負担');
            $table->integer('payment_method')->comment('支払い方法');
            $table->unsignedBigInteger('price');
            $table->integer('status')->default(0)->comment(App\Consts\Offer\OfferStatus::DESCRIPTION);
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
