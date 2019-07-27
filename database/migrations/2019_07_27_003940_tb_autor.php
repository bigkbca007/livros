<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbAutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('tb_autor', function(Blueprint $table){
            $table->increments('cod_autor');
            $table->string('desc_nome', 70);
        });*/

        Schema::table('tb_autor', function(Blueprint $table){
            $table->increments('cod_autor')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_autor');
    }
}
