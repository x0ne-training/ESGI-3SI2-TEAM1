<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id();  // id_DOC
            $table->json('json_doc');
            $table->foreignId('matiere_id')->constrained('matieres');  // #MATIERE
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('docs');
    }
};
