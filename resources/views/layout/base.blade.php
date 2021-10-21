<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet"/>
	<livewire:styles/>

	<title>CRUD</title>
</head>
<body>

	<div class="container">
		@yield('contenido')
	</div>

	<script src="{{url('/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('/js/jquery.js')}}"></script>
	<livewire:scripts/>


</body>
</html>