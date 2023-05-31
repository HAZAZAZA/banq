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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->nullable();
            $table->enum('status', ['pending', 'processing', 'approved', 'rejected'])->default('pending');
            $table->enum('type',['ETTAHADI', 'RFIG'])->nullable();
            $table->integer('customer_deposit')->nullable();
            $table->integer('loan_duration')->nullable();
            $table->enum('periodicity',['trimester', 'semester', 'yearly'])->nullable();
            $table->date('loan_start_date')->nullable();
            $table->date('loan_end_date')->nullable();
            $table->string("tva")->default('19');
            $table->string('interest')->nullable();

            $table->foreignId('project_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
