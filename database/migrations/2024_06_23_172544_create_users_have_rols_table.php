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
        Schema::create('users_have_rols', function (Blueprint $table) {
            $table->foreignId('user_fk')->constrained(table: 'users', column: 'user_id');

            $table->unsignedSmallInteger('rol_fk');
            $table->foreign('rol_fk')->references('rol_id')->on('rols');

            $table->primary(['user_fk', 'rol_fk']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_have_rols');
    }
};
