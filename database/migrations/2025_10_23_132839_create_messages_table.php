<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();  // id_MESSAGE
            $table->json('json_msg');
            $table->boolean('pin_bool');
            $table->foreignId('user_id')->constrained('users');  // #USERS
            $table->foreignId('matiere_id')->constrained('matieres');  // #MATIERE
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
