<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();  // id_COMMENTAIRE
            $table->json('json_comm');
            $table->foreignId('user_id')->constrained('users');  // #USERS
            $table->foreignId('evenement_id')->constrained('evenements');  // #EVENEMENT
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
