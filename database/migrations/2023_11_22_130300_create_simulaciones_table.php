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
            $table->integer('tipo');
            $table->double('c10', 10, 2);
            $table->double('v10', 10, 2);
            $table->double('d10', 10, 2);
            $table->double('c20', 10, 2);
            $table->double('v20', 10, 2);
            $table->double('d20', 10, 2);
            $table->integer('Q1');
            $table->integer('Q2');
            $table->json('utilidad_meses');
            $table->json('utilidad_iteraciones');
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
