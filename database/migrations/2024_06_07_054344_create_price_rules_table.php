<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('price_rules')) {
            Schema::create('price_rules', function (Blueprint $table) {
                $table->id();
                $table->string('status');
                $table->integer('priority');
                $table->decimal('value', 8, 2); // Adjust precision and scale as needed
                $table->unsignedBigInteger('tour_id')->nullable()->change();
                $table->string('apply_to')->nullable();
                $table->timestamps();

                $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_rules');
    }
};
