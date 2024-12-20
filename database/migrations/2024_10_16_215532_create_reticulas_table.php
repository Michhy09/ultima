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
        Schema::create('reticulas', function (Blueprint $table) {
            $table->id();
            $table->string('idreticula', 15);
            $table->string('desc',200);
            $table->date('fechaVigor');
            $table->foreignId('idCarrera')->constrained('carreras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reticulas');
    }
};
