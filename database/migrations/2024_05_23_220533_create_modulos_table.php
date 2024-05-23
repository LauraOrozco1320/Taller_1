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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->String('name');

            //Atributos Foraneos
                $table->unsignedBigInteger('alumno_id')->nullable();
                $table->unsignedBigInteger('profesor_id')->nullable();

            //referencia alumno
                $table->foreign('alumno_id')
                    ->references('id')
                    ->on('alumnos')->onDelete('set null');

            //referencia profesor
                $table->foreign('profesor_id')
                ->references('id')
                ->on('profesors')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
