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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('common_name', 100);
            $table->string('scientific_name', 100);
            $table->string('class', 100);
            $table->string('habitat', 100);
            $table->string('geographical_distribution', 100);
            $table->smallInteger('high_max');
            $table->smallInteger('weigh_max');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
