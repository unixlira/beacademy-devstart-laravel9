<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("nickname");
            $table->string("cpf");
            $table->string("email")->unique();
            $table->timestamp("email_verified_at")->nullable();
            $table->string("phone");
            $table->timestamp("phone_verified_at")->nullable();
            $table->date("birthday");
            $table->string("address");
            $table->string("district");
            $table->string("city");
            $table->string("state");
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
        Schema::dropIfExists('customers');
    }
};
