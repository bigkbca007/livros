<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function salvar(Request $request){
    	echo '<pre>';
    	print_r($request->all());
    	echo '</pre>';
    }
}
