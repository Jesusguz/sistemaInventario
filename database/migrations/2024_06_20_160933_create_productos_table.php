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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('stockid')->unique();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->integer('cantidad')->default(0);
           // $table->decimal('precio', 8, 2);
            //$table->decimal('costo', 8, 2);
            $table->float('precio');
            $table->float('costo');
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
        Schema::dropIfExists('productos');
    }
};
