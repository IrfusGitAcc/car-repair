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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id('service_id');
        $table->string('service'); // Tires, Oil Change, etc
        $table->string('year')->nullable();
        $table->string('make')->nullable();
        $table->string('model')->nullable();
        $table->string('submodel')->nullable();
        $table->string('registration')->nullable();
        $table->string('mileage')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
