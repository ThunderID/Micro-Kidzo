<!DOCTYPE html>
<html>
	<head>
		<title>Kidzo</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
		<style type="text/css">
			html, body {
				background-color: #fff;
				color: #000;
				font-family: 'Lato';
				font-weight: 100;
				height: 100vh;
				margin: 0;
			}
		</style>

	</head>
	<body>
		<div class="clearfix">&nbsp;</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					@yield('full')
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					@yield('left')
				</div>
				<div class="col-sm-4">
					@yield('middle')
				</div>
				<div class="col-sm-4">
					@yield('right')
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap --> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
	</body>
</html>
