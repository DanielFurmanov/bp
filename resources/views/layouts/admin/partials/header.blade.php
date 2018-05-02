<header id="header">
	<h1><a href="{{ route('home') }}">Блог <span>ПРО</span>ЗРЕНИЕ</a></h1>
	<nav class="links">
		<ul>
			{{--<li><a href="{{ route('articles') }}">Статьи</a></li>--}}
			{{--<li><a href="{{ route('books') }}">Книги</a></li>--}}
			{{--<li><a href="{{ route('interviews') }}">Интервью</a></li>--}}
			{{--<li><a href="{{ route('reviews') }}">Отзывы</a></li>--}}
			{{--<li><a href="{{ route('contacts') }}">Контакты</a></li>--}}
		</ul>
	</nav>
	{{--<nav class="main">--}}
		<!--<ul>-->
		<!--<li class="search">-->
		<!--<a class="fa-search" href="#search">Search</a>-->
		<!--<form id="search" method="get" action="#">-->
		<!--<input type="text" name="query" placeholder="Search" />-->
		<!--</form>-->
		<!--</li>-->
		<!--<li class="menu">-->
		<!--<a class="fa-bars" href="#menu">Menu</a>-->
		<!--</li>-->
		<!--</ul>-->
	{{--</nav>--}}

	<ul class="dropdown-menu">
		<li>
			<a href="<?php echo e(route('logout')); ?>"
			   onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
				Выйти
			</a>

			<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
				{{ csrf_field() }}

			</form>
		</li>
	</ul>
</header>
