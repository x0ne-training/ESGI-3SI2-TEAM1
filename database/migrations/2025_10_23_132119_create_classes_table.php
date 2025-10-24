<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();  // id_CLASSE
            $table->string('nom');
            $table->foreignId('filiere_id')->constrained('filieres');  // #FILIERE
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
