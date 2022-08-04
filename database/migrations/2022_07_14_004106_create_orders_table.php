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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("customer_id")
            ->constrained("customers")
            ->onDelete("CASCADE")
            ->onUpdate("CASCADE");
            $table->string("device");
            $table->string("brand");
            $table->string("model");
            $table->string("serial_number");
            $table->text("accessories");
            $table->text("reported_problem");
            $table->text("service_description");
            $table->text("observations");
            $table->string("status");
            $table->double("price");
            $table->boolean("active")->default(true);
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
        Schema::dropIfExists('orders');
    }
};
