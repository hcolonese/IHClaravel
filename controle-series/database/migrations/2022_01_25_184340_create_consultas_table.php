<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->text('data');
            $table->text('objetivo');
            $table->integer('progresso_obtido1_10');
            $table->integer('analisePsiGeral1_10');
            $table->integer('paciente_id');
            $table->text('estado_civil');
            $table->text('tempo');
            $table->text('lugar');
            $table->text('vicios');
            $table->text('remedios');
            $table->text('filhos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
