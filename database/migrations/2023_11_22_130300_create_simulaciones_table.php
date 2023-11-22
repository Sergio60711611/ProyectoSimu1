<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulaciones', function (Blueprint $table) {
            $table->id();
            $table->double('c10');
            $table->double('v10');
            $table->double('d10');
            $table->double('c20');
            $table->double('v20');
            $table->double('d20');
            $table->integer('Q1');
            $table->integer('Q2');
            $table->double('Utilidad');
            $table->foreignId('id_clientes')
                  ->constrained('clientes')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
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
        Schema::dropIfExists('simulaciones');
    }
}
