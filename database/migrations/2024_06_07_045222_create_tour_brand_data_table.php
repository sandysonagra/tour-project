<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tour_brand_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_brand_id');
            $table->string('tour_name');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('tour_brand_id')->references('id')->on('tour_brand')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_brand_data');
    }
};
