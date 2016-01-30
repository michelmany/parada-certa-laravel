<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('email');
            $table->string('telefone');
            $table->string('celular');
            $table->string('cpf');
            $table->string('rg');
            $table->string('emissor');
            $table->string('data_nasc');
            $table->string('nome_mae');
            $table->string('nome_pai');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('uf', 2);
            $table->string('como_conheceu', 2);
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
        Schema::drop('matriculas');
    }
}
