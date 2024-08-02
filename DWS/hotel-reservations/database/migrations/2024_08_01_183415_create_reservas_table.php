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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quarto_id')->constrained('quartos');
            $table->date('data_reserva');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
    
};