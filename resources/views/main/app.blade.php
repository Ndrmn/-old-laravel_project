<!Doctype html>
<html lang="ru">
	<head>
		<title>@yield('title-block')</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		
        <link rel="stylesheet" href="../app.css" />
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0">
		<!-- Rubik font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
	</head>
<body>
    @include('main.header')
    @yield('content')
    @include('main.footer')
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script src="js/script.js"></script>
</body>
</html>