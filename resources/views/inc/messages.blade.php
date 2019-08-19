@if($errors->any())
	<div class="alert alert-danger" id="error-messages">
		@foreach($errors->all() as $error)
			{{ $error }}<br>
		@endforeach
	</div>
@endif

@if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif