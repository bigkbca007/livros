<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Livros</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		<div class="">
			@include('inc.navbar')

			@include('inc.messages')

			<div class="row">
				<div class="col-lg-9">
					@yield('content')
				</div>
			</div>			
			
			@include('inc.footer')
		</div>
	</body>
</html>