<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborador_cargo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cargo_id')->nullable();
            $table->unsignedBigInteger('colaborador_id')->nullable();
            $table->integer('nota_desempenho');
            $table->foreign('cargo_id')->references('id')->on('cargos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('colaborador_id')->references('id')->on('colaboradores')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('colaborador_cargo');
    }
}
