<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id('booking_id');
            $table->string('email',20);
            $table->string('car_reg',10);
            $table->string('postcode',10);

            $table->json('services'); // store multiple services

            $table->string('name');
            $table->string('mobile');
            $table->date('booking_date');
            $table->string('pickup_postcode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
