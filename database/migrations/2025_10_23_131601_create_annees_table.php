<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('annees', function (Blueprint $table) {
            $table->id();  // id_ANNEE
            $table->string('nom');
            $table->string('niveau');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('annees');
    }
};
