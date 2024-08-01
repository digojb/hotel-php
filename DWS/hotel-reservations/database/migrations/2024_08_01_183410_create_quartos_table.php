<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('quartos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('tipo');
            $table->decimal('preco', 8, 2);
            $table->string('status');
            $table->string('imagem');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('quartos');
    }
    
};
