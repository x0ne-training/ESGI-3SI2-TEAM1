<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();  // id_MATIERE
            $table->foreignId('classe_id')->constrained('classes');  // #CLASSE
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
