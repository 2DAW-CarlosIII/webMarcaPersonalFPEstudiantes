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
        Schema::create('ciclos', function (Blueprint $table) {
            $table->id();
            $table->char('codCiclo', 6);
            $table->char('codFamilia', 4);
            $table->string('grado', 30)->nullable();
            $table->string('nombre', 255);
            $table->timestamps();
            $table->unique(['codFamilia', 'codCiclo']);
            $table->foreign('codFamilia')->references('codigo')->on('familias_profesionales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclos');
    }
};
