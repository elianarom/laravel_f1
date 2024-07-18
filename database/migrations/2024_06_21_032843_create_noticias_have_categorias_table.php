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
        Schema::create('noticias_have_categorias', function (Blueprint $table) {
            $table->foreignId('noticia_fk')->constrained(table: 'noticias', column: 'noticia_id');

            $table->unsignedSmallInteger('categoria_fk');
            $table->foreign('categoria_fk')->references('categoria_id')->on('categorias');

            $table->primary(['noticia_fk', 'categoria_fk']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias_have_categorias');
    }
};
