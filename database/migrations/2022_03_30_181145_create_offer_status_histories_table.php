<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferStatusHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_status_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_id');
            $table->tinyInteger('type')->comment('20 買い手がDEAL承諾した, 30 買い手が支払いした, 40 売り手が発送通知した, 50 買い手が受取通知した');
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
        Schema::dropIfExists('offer_status_histories');
    }
}
