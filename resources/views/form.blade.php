@extends('app')

@section('content')
<?php
/*
{!! Form::open(['url' => 'contact/submit']) !!}
	<div class="form-group">
		{{Form::label('name', 'Name')}}
		{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'Email')}}
		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter e-mail'])}}
	</div>
	<div class="form-group">
		{{Form::label('message', 'Message')}}
		{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
	</div>
	<div class="form-group">
		{{Form::submit('Submit', ['class' => 'btn btn-secondary'])}}
	</div>
{!! Form::close() !!}
*/
?>

<form action="{{ route('livros.salvar') }}" enctype="mutipart/form-data" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="cod_livro" value="{{ $livro->cod_livro }}">
	<div class="form-group row col-lg-12">
		<div class="col-lg-8">
			<label>Título*</label>
			<input type="text" name="desc_titulo" class="form-control" placeholder="Título" value="{{ $livro->desc_titulo }}">
		</div>
		<div class="col-lg-4">
			<label>Autor*</label>
			<select name="cod_autor" class="form-control">
				<option value="">Selecione</option>
				@foreach($authors as $author)
					<?php $selected = ($livro->cod_autor == $author->cod_autor) ? 'selected' : '';?>
					<option value="{{ $author->cod_autor }}" {{ $selected }}>{{ $author->desc_nome }}</option>
				@endforeach
			</select>
		</div>
		<div class="col-lg-4">
			<label>ISBN*</label>
			<input type="text" name="desc_isbn" class="form-control" placeholder="ISBN" value="{{ $livro->desc_isbn }}">
		</div>
		<div class="col-lg-4">
			<label>Ano</label>
			<input type="text" name="num_ano" class="form-control" placeholder="Ano" value="{{ $livro->num_ano }}">
		</div>
		<div class="col-lg-4">
			<label>Número de Páginas</label>
			<input type="text" name="num_paginas" class="form-control" placeholder="Número de Páginas" value="{{ $livro->num_paginas }}">
		</div>
		<div class="col-lg-4">
			<label>Data da Aquisição</label>
			<input type="text" name="dats_aquisicao" class="form-control" placeholder="Data da Aquisição" value="{{ $livro->dats_aquisicao }}">
		</div>
		<div class="col-lg-4">
			<label>Altura</label>
			<input type="text" name="dim_altura" class="form-control" placeholder="Altura" value="{{ $livro->dim_altura }}">
		</div>
		<div class="col-lg-4">
			<label>Largura</label>
			<input type="text" name="dim_largura" class="form-control" placeholder="Largura" value="{{ $livro->dim_largura }}">
		</div>
		<div class="col-lg-4">
			<label>Espessura</label>
			<input type="text" name="dim_espessura" class="form-control" placeholder="Espessura" value="{{ $livro->dim_espessura }}">
		</div>
		<div class="col-lg-4">
			<label>Peso</label>
			<input type="text" name="num_peso" class="form-control" placeholder="Peso" value="{{ $livro->num_peso }}">
		</div>
		<div class="col-lg-8">
			<label>Loja</label>
			<input type="text" name="desc_loja" class="form-control" placeholder="Loja onde foi comprado" value="{{ $livro->desc_loja }}">
		</div>
		<div class="col-lg-4">
			<label>Foto do Livro</label>
			<input type="file" name="desc_foto" class="form-control">
		</div>
		<div class="col-lg-8">
			<label>Editora</label>
			<input type="text" name="desc_editora" class="form-control" placeholder="Editora" value="{{ $livro->desc_editora }}">
		</div>
		<div class="col-lg-8">
			<label>N° da Edição</label>
			<input type="text" name="num_edicao" class="form-control" placeholder="Número da Edição" value="{{ $livro->num_edicao }}">
		</div>
		<div class="col-lg-4" style="margin-top: 30px;">
			<label>Já Foi Lido</label>
			<input type="checkbox" name="sts_lido">
		</div>
		<div class="col-lg-4" style="margin-top: 30px;">
			<label>Capa Dura</label>
			<input type="checkbox" name="sts_capa_dura" {{ $livro->sts_capa_dura }}>
		</div>
		<div class="col-lg-12">
			<label>Sinopse</label>
			<textarea name="desc_sinopse" class="form-control" rows="5" style="resize:none;"></textarea>
		</div>
		<div class="col-lg-12">
			<button>Enviar</button>	
		</div>
	</div>
</form>
@endsection