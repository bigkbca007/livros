<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Livro;

class LivrosController extends Controller
{

	public function listar(){
		$livros = DB::table('tb_livro')
			->orderBy('desc_titulo')
			->get();

		
		foreach($livros as &$livro){
			if(!is_null($livro->dats_aquisicao)){
				$dt = new \DateTime($livro->dats_aquisicao, new \DateTimeZone('America/Bahia'));
				$livro->dats_aquisicao = $dt->format('d/m/Y');
			}

			// String das dimensões.
			$livro->dimensoes = '';
			$dimensoes = [];
 			if($livro->dim_altura) {
 				$dimensoes[] = $livro->dim_altura.' cm';
 			}
 			if($livro->dim_largura) {
 				$dimensoes[] = $livro->dim_largura.' cm';
 			}
 			if($livro->dim_espessura) {
 				$dimensoes[] = $livro->dim_espessura.' cm';
 			}
 			$livro->dimensoes = implode(' x ', $dimensoes);

 			// Peso.
 			$livro->num_peso .= $livro->num_peso ? 'Kg' : '';
		}

		return view('home')->with('livros', $livros);
	}

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

    public function editar($cod_livro){
        $livro = DB::table('tb_livro')
        ->where('cod_livro', $cod_livro)
        ->get()
        ->toArray()[0];

        if($livro->sts_capa_dura){
            $livro->sts_capa_dura = 'checked';
        }

        if($livro->sts_lido){
            $livro->sts_lido = 'checked';
        }

        $authors = $this->getOptionsAutors();

        return view('form')->with([
            'livro' => $livro,
            'authors' => $authors,
        ]);
    }

}
