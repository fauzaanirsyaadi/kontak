<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Larawire - Laravel + Livewire</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	@livewireStyles
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-6">
				<h1>Larawire - Laravel + Livewire </h1>
					@livewire('contact-form')
			</div>
		</div>
	</div>

	@livewireScripts
</body>
	<script src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</html>