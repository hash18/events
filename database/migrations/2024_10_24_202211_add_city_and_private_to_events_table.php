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
        Schema::table('events', function (Blueprint $table) {
            $table->string('city')->nullable(); // Adiciona o campo 'city' como string e pode ser nulo
            $table->boolean('private')->default(0); // Adiciona o campo 'private' como flag boolean com valor padrão 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('private');
        });
    }
};
