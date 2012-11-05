<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	{{HTML::style('laravel/css/style.css')}}
	{{HTML::style('css/bootstrap/bootstrap.css')}}
	{{HTML::style('css/styles.css')}}

</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	{{HTML::script('js/jquery.js');}}
	{{HTML::script('js/bootstrap/bootstrap.js');}}
	{{HTML::script('js/bootstrap/bootstrap-tab.js');}}
</body>
</html>