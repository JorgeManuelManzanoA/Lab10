<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('contraseña');
            $table->integer('numero_tarjeta');
            $table->string('fechav_tarjeta');
            $table->integer('codigo_postal');
            $table->timestamps();  
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};


