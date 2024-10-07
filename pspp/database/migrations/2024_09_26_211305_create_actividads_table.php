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
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('area');
            $table->string('encargado');
            $table->string('avatar')->nullable();
            $table->boolean('active')->default(true);
            $table->date('fecha_inicio');
            $table->date('fecha_final')->nullable();
            $table->unsignedBigInteger('semana_id');
            $table->foreign('semana_id')->references('id')->on('semanas')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividads');
    }
};
