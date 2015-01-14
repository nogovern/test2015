<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>게시판 테스트</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	@yield('styles')
</head>
<body class="main">

	<div id="outer-frame" class="container">
		<div class="row">
			@yield('content')
		</div><!--end of row -->			
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>