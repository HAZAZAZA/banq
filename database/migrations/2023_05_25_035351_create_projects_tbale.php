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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->enum('type',[
                'Acquisition of the necessary inputs related to the activity of agricultural investments (seeds, seedlings, fertilizers, pesticides)',
                'Livestock feed _ irrigation means _ veterinary medicine products',
                'Reconstitution of farms (chicks, laying hens)',
                'Breeding large animals for fattening (bulls, sheep, camels)'
            ]);
            $table->string('suraface')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->enum('ownership_type',['private property', 'concession contract'])->nullable();


            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
