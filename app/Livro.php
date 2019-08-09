<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Livro extends Model
{
    protected $table = 'tb_livro';
    public $timestamps = false;

	/**
	 * @override
	 */
    public function salvar(Request $request){

    	$this->desc_isbn = $request->input('desc_isbn');
    	$this->desc_titulo = $request->input('desc_titulo');
    	$this->cod_autor = $request->input('cod_autor');
    	$this->num_ano = $request->input('num_ano', null);
    	$this->num_paginas = $request->input('num_paginas', null);
    	$this->desc_sinopse = $request->input('desc_sinopse', null);
    	$this->dim_altura = $request->input('dim_altura', null);
    	$this->dim_largura = $request->input('dim_largura', null);
    	$this->dim_espessura = $request->input('dim_espessura', null);
    	$this->num_peso = $request->input('num_peso', null);
    	$this->sts_capa_dura = $request->input('sts_capa_dura', false);
    	$this->desc_editora = $request->input('desc_editora', 'XPTO');
    	$this->num_edicao = $request->input('num_edicao');

    	return $this->save();
    }
}
