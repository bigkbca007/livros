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
/*z
        Schema::create('tb_livro', function(Blueprint $table){
            $table->string('desc_isbn', 30)->primary();
            $table->string('desc_titulo', 60);
            $table->integer('cod_autor');
            $table->integer('num_ano')->nullable();
            $table->integer('num_paginas')->nullable();
            $table->text('desc_sinopse')->nullable();
            $table->double('dim_altura', 2, 2)->nullable();
            $table->double('dim_largura', 2, 2)->nullable();
            $table->double('dim_espessura', 2, 2)->nullable();
            $table->double('num_peso', 2, 2)->nullable();
            $table->boolean('sts_capa_dura');
            $table->string('desc_editora', 40);
            $table->integer('num_edicao')->nullable();
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
