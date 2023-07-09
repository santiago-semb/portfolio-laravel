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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('proyecto_id');
            $table->string('nombre',50);
            $table->string('lenguajes',200);
            $table->string('link',300);
            $table->string('descripcion',200)->nullable();
            $table->foreignId('persona_id')
            ->nullable()
            ->references('persona_id')
            ->on('personas')
            ->onDelete('cascade');
            $table->timestamps();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
