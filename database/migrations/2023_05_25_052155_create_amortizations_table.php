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
        Schema::create('amoritzations', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->integer('rest')->nullable();
            $table->integer('amount')->nullable();
            $table->string('interest')->default(0);
            $table->integer('total')->nullable();
            $table->integer('taux')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amoritzations');
    }
};
