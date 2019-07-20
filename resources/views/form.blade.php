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
@if($errors->any())
	<ul style="color:red;">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif
<form action="{{ route('livros.salvar') }}" enctype="mutipart/form-data" method="POST">
	{{ csrf_field() }}
	<div class="form-group row col-lg-12">
		<div class="col-lg-8">
			<label>Título</label>
			<input type="text" name="desc_titulo" class="form-control" placeholder="Título">
		</div>
		<div class="col-lg-4">
			<label>Autor</label>
			<input type="text" name="desc_autor" class="form-control" placeholder="Autor">
		</div>
		<div class="col-lg-4">
			<label>ISBN</label>
			<input type="text" name="desc_isbn" class="form-control" placeholder="ISBN">
		</div>
		<div class="col-lg-4">
			<label>Data da Aquisição</label>
			<input type="date" name="dats_aquisicao" class="form-control" placeholder="Data da Aquisição">
		</div>
		<div class="col-lg-8">
			<label>Loja</label>
			<input type="text" name="desc_loja" class="form-control" placeholder="Loja onde foi comprado">
		</div>
		<div class="col-lg-4">
			<label>Foto do Livro</label>
			<input type="file" name="desc_foto" class="form-control">
		</div>
		<div class="col-lg-4" style="margin-top: 30px;">
			<label>Já Foi Lido?</label>
			<input type="checkbox" name="sts_lido">
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