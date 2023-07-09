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
        Schema::create('experiencia', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',70);
            $table->string('lugar',50);
            $table->string('desde',100);
            $table->string('hasta',100);
            $table->string('descripcion',500)->nullable();
            $table->string('imagen',200)->nullable();
            $table->foreignId('persona_id')
            ->nullable()
            ->references('persona_id')
            ->on('personas')
            ->onDelete('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencia');
    }
};
