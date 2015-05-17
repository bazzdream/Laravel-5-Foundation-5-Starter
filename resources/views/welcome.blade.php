<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Laravel + Foundation</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<div class="welcome text-center">
			<header>
				<h1>Laravel + Foundation</h1>
				<h2>{{ Inspiring::quote() }}</h2>
			</header>
		</div>

	</body>

	<script src="{{ asset('/js/main.js') }}"></script>
	<script>
		$(document).foundation();
	</script>
</html>
