<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained()->onDelete('cascade');
            $table->enum('tipo', ['entrada', 'salida']);
            $table->integer('cantidad');
            $table->date('fecha');
           // $table->decimal('costo', 8, 2)->nullable(); // Costo solo para entradas
            //$table->decimal('precio', 8, 2)->nullable();
            $table->float('costo')->nullable();
            $table->float('precio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
};
