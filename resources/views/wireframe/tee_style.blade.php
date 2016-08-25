<!DOCTYPE html>
<html>
	<head>
		<title>Kidzo</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					@yield('full')
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					@yield('left')
				</div>
				<div class="col-sm-6">
					@yield('right')
				</div>
			</div>
		</div>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
	</body>
</html>
