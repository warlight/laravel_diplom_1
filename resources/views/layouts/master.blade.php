<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Интернет Магазин</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('index') }}">Интернет Магазин</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li @if(Route::currentRouteName() == 'index') class="active" @endif><a href="{{ route('index') }}">Все товары</a></li>
				<li @if(Route::currentRouteName() == 'categories') class="active" @endif><a href="{{ route('categories') }}">Категории</a>
				</li>
				<li @if(Route::is('basket*')) class="active" @endif><a href="{{ route('basket.show') }}">В корзину</a></li>
				<li><a href="{{ route('reset') }}">Сбросить проект в начальное состояние</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@auth
					<li><a href="{{ route('admin.home') }}">Панель администратора</a></li>
				@else
					<li><a href="{{ route('login') }}">Панель администратора</a></li>
					<li><a href="{{ route('register') }}">Зарегистрироваться</a></li>
				@endauth
			</ul>
		</div>
	</div>
</nav>


<div class="container">
	<div class="starter-template">
		@if(session()->has('success'))
			<p class="alert alert-success">{{ session()->get('success') }}</p>
		@endif
		@if(session()->has('warning'))
			<p class="alert alert-warning">{{ session()->get('warning') }}</p>
		@endif
		@yield('content')
	</div>
</div>
</body>
</html>
