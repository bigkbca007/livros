<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Livro;

class LivrosController extends Controller
{
    public function salvar(Request $request){

    	$livro = new Livro();
    	if($livro->salvar($request)){
    		$result = 'success';
    		$msg = 'Livro cadastrado com suscesso.';
    	} else {
    		$result = 'error';
    		$msg = 'Ocorreu um erro ao tentar cadastrar o livro.';
    	}

    	return view('home')->with($result, $msg);
    }

    public function form(){
    	// Get authors
    	$authors = $this->getOptionsAutors();


    	return view('form')->with('authors', $authors);
    }

    public function getOptionsAutors(){
    	return DB::table('tb_autor')
    		->orderBy('desc_nome', 'ASC')
    		->get();
    }

}
