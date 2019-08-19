@extends('app')

@section('content')

<table class="table table-stripped table-condensed">
	<thead>
		<tr>
			<th>Thumb</th>
			<th>ISBN</th>
			<th>Título</th>
			<th>Autor</th>
			<th>Ano</th>
			<th>Num Páginas</th>
			<th>Dimensões</th>
			<th>Peso</th>
			<th>Capa Dura</th>
			<th>Editora</th>
			<th>Edição</th>
			<th>Loja</th>
			<th>Data Aquisição</th>
			<th>Lido</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($livros as $livro)
			<tr>
				<td></td>
				<td>{{ $livro->desc_isbn }}</td>
				<td>{{ $livro->desc_titulo }}</td>
				<td>{{ $livro->cod_autor }}</td>
				<td>{{ $livro->num_ano }}</td>
				<td>{{ $livro->num_paginas }}</td>
				<td>{{ $livro->dimensoes }}</td>
				<td>{{ $livro->num_peso }}</td>
				<td>{{ $livro->sts_capa_dura }}</td>
				<td>{{ $livro->desc_editora }}</td>
				<td>{{ $livro->num_edicao }}</td>
				<td>{{ $livro->desc_loja }}</td>
				<td>{{ $livro->dats_aquisicao }}</td>
				<td>{{ $livro->sts_lido }}</td>
				<th></th>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection

