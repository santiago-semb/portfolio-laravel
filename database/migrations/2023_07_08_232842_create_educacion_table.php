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
        Schema::create('educacions', function (Blueprint $table) {
            $table->id();
            $table->string('institucion',70);
            $table->string('fecha',10);
            $table->string('estado',30);
            $table->string('descripcion',300)->nullable();
            $table->foreignId('persona_id')
            ->nullable()
            ->references('id')
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
        Schema::dropIfExists('educacion');
    }
};
