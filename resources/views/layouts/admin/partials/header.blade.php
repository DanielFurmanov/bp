<header id="header" class="container-fluid" style="min-height: 50px">
	<div class="row align-items-center">
		<div class="col">
			{{--			<a href="{{ route('admin') }}"><h1>КОНТРОЛЬНАЯ ПАНЕЛЬ БЛОГА</h1></a>--}}
			<h1><a href="{{ route('admin') }}">Блог <span>ПРО</span>ЗРЕНИЕ</a></h1>
		</div>

		@if(Auth::check())
			<div class="col-1">

				<form id="logout-form" action="{{ route('logout') }}" method="POST">
					{{ csrf_field() }}

					<button class="btn btn-primary">
						Выйти
					</button>
				</form>
			</div>
		@endif
	</div>
</header>
