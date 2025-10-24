<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();  // id_FILIERE
            $table->string('nom');
            $table->foreignId('annee_id')->constrained('annees');  // #ANNEE
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('filieres');
    }
};
