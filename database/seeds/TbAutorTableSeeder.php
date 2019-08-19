<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TbAutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        DB::table('tb_autor')->insert([
        	'desc_nome' => 'Bernard Conrwell'
        ]);

        DB::table('tb_autor')->insert([
        	'desc_nome' => 'Fiódor Dostoiévski'
        ]);

        DB::table('tb_autor')->insert([
        	'desc_nome' => 'Olavo de Carvalho'
        ]);

        DB::table('tb_autor')->insert([
        	'desc_nome' => 'George R. R. Martin'
        ]);

        DB::table('tb_autor')->insert([
        	'desc_nome' => 'Fiódor Dostoiévski'
        ]);

        DB::table('tb_autor')->insert([
        	'desc_nome' => 'John R. R. Tolkien'
        ]);
        
    }
}
