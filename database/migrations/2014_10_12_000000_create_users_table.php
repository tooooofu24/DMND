<?php

use App\Consts\Pref;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel');
            $table->string('zip')->nullable();
            $table->enum('pref', Pref::LIST)->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->text('icon_url')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('money')->default(0);
            $table->unsignedBigInteger('point')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
