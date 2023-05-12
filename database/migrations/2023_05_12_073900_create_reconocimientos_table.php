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
        Schema::create('reconocimientos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('documento');
            $table->timestamp('fecha')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->bigInteger('estudiante_id')->unsigned();
            $table->foreign('estudiante_id')->references('id')->on('users');
            $table->bigInteger('docente_id')->unsigned()->nullable();
            $table->foreign('docente_id')->references('id')->on('users');
            $table->bigInteger('actividad')->unsigned()->nullable();
            $table->foreign('actividad')->references('id')->on('actividads');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reconocimientos');
    }
};
