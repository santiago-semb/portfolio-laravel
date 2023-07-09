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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('persona_id');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->integer('edad')->length(2);
            $table->string('fotografia', 200);
            $table->string('email',50)->unique();
            $table->integer('telefono')->length(10);
            $table->string('instagram',200)->nullable();
            $table->string('linkedin',200)->nullable();
            $table->string('github',200)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
