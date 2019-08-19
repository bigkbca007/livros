<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbLivro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tb_livro', function(Blueprint $table){
            $table->increments('cod_livro');
            $table->string('desc_isbn', 30);
            $table->string('desc_titulo', 60);
            $table->integer('cod_autor');
            $table->integer('num_ano')->nullable();
            $table->integer('num_paginas')->nullable();
            $table->text('desc_sinopse')->nullable();
            $table->double('dim_altura', 4, 2)->nullable();
            $table->double('dim_largura', 4, 2)->nullable();
            $table->double('dim_espessura', 4, 2)->nullable();
            $table->double('num_peso', 4, 2)->nullable();
            $table->boolean('sts_capa_dura');
            $table->string('desc_editora', 40);
            $table->integer('num_edicao')->nullable();
            $table->string('desc_loja', 50)->nullable();
            $table->date('dats_aquisicao')->nullable();
            $table->boolean('sts_lido');
        });


        Schema::table('tb_livro', function(Blueprint $table){
            $table->integer('cod_autor')->unsigned()->change();
            $table->foreign('cod_autor')->references('cod_autor')->on('tb_autor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_livro');
    }
}
