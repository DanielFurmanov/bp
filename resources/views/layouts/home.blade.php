@extends('layouts.general')


@section('content')
	<script>
		$(document).ready(function () {
				console.log('changing background image');
				jQuery('#back').change(function () {
					$('.jumbotron').css('background', 'url('+this.value+')')
				});

				$('#backPosition').on('change', function () {
					$('.jumbotron').css('background-position', this.value)
				})
			}
		);

	</script>
	<?php $a = 'img/backs/'?>
	<form action="">
		<select name="back" id="back">
			<option value="{{ asset($a.'clouds-daylight-lake-411471.jpg') }}">clouds-daylight-lake-411471.jpg</option>
			<option value="{{ asset($a.'clouds-dawn-dusk-46253.jpg') }}">clouds-dawn-dusk-46253.jpg</option>
			<option value="{{ asset($a.'agriculture-asia-china-235648.jpg') }}">agriculture-asia-china-235648.jpg</option>
			<option value="{{ asset($a.'asphalt-countryside-empty-105234.jpg') }}">asphalt-countryside-empty-105234.jpg</option>
			<option value="{{ asset($a.'forest-landscape-mountain-range-129105.jpg') }}">forest-landscape-mountain-range-129105.jpg</option>
			<option value="{{ asset($a.'background-beautiful-blossom-268533.jpg') }}">background-beautiful-blossom-268533.jpg</option>
			<option value="{{ asset($a.'beach-boardwalk-boat-132037.jpg') }}">beach-boardwalk-boat-132037.jpg</option>
			<option value="{{ asset($a.'adventure-calm-clouds-414171.jpg') }}">adventure-calm-clouds-414171.jpg</option>
			<option value="{{ asset($a.'landscape-nature-ocean-36717.jpg') }}">landscape-nature-ocean-36717.jpg</option>
			<option value="{{ asset($a.'agriculture-bloom-blossom-355312.jpg') }}">agriculture-bloom-blossom-355312.jpg</option>
			<option value="{{ asset($a.'arctic-aurora-aurora-borealis-258112.jpg') }}">arctic-aurora-aurora-borealis-258112.jpg</option>
			<option value="{{ asset($a.'clouds-horizon-landscape-35599.jpg') }}">clouds-horizon-landscape-35599.jpg</option>
			<option value="{{ asset($a.'grass-lake-lake-saiful-muluk-127753.jpg') }}">grass-lake-lake-saiful-muluk-127753.jpg</option>
			<option value="{{ asset($a.'agricultural-agriculture-cropland-247599.jpg') }}">agricultural-agriculture-cropland-247599.jpg</option>
			<option value="{{ asset($a.'astronomy-cosmos-crater-lake-national-park-262669.jpg') }}">astronomy-cosmos-crater-lake-national-park-262669.jpg</option>
			<option value="{{ asset($a.'forest-landscape-light-35600.jpg') }}">forest-landscape-light-35600.jpg</option>
			<option value="{{ asset($a.'arch-bridge-clouds-814499.jpg') }}">arch-bridge-clouds-814499.jpg</option>
			<option value="{{ asset($a.'beautiful-blur-bright-326055.jpg') }}">beautiful-blur-bright-326055.jpg</option>
			<option value="{{ asset($a.'clouds-dawn-dusk-158489.jpg') }}">clouds-dawn-dusk-158489.jpg</option>
			<option value="{{ asset($a.'background.jpeg') }}">background.jpeg</option>
		</select>

		<select name="" id="backPosition">
			<option value="top">top</option>
			<option value="center">center</option>
			<option value="bottom">bottom</option>
		</select>
	</form>

		<!-- Post -->
		<article class="post">
			<header>
				<div class="title">
					<h2><a href="#">Курс коррекции зрения <br>Светланы Троицкой</a></h2>
				</div>
				<!--<div class="meta">-->
				<!--<time class="published" datetime="2015-11-01">November 1, 2015</time>-->
				<!--<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>-->
				<!--</div>-->
			</header>

			<div style="text-align: center; margin-bottom: 20px">
				<i>
					Курсы, которые я успешно провожу в Санкт-Петербурге и других городах уже в течение 25 лет прошли проверку временем и помогли множеству людей обрести здоровье.
				</i>
			</div>
			<p style="display: flex">
				<img src="http://blogprozrenie.info/uploads/posts/2017-04/medium/1493352248_i5.jpg" alt="" style="margin-right: 20px; height:250px" />
				Мой личный опыт практической работы позволяет мне с уверенностью утверждать: всем, кто посещает наши семинары, независимо от возраста, диагноза и стажа ношения очков, гарантированы положительный результат и длительная поддерживающая терапия. Кроме того, у слушателей курсов по естественному восстановлению зрения гарантированно отсутствуют какие-либо негативные побочные последствия, что выгодно отличает данный подход к решению проблем с глазами от медицинского.
			</p>
			<!--<footer>-->
			<!--<ul class="actions">-->
			<!--<li><a href="#" class="button big">Continue Reading</a></li>-->
			<!--</ul>-->
			<!--<ul class="stats">-->
			<!--<li><a href="#">General</a></li>-->
			<!--<li><a href="#" class="icon fa-heart">28</a></li>-->
			<!--<li><a href="#" class="icon fa-comment">128</a></li>-->
			<!--</ul>-->
			<!--</footer>-->
		</article>

		<article class="post" style="text-align: center">
			<header>
				<div class="title">
					<h2><a href="#">МЕРОПРИЯТИЯ И НОВОСТИ</a></h2>
				</div>
			</header>

			<!--<div style="text-align: center; margin-bottom: 20px">-->
			<!--<i>-->
			<!--Курсы, которые я успешно провожу в Санкт-Петербурге и других городах уже в течение 25 лет прошли проверку временем и помогли множеству людей обрести здоровье.-->
			<!--</i>-->
			<!--</div>-->
			<p style="text-align: center">
			<h3>12 декабря В 18:00
				В САНКТ-ПЕТЕРБУРГЕ</h3>
			<div id="map" style="height: 100%; width: 100%; min-height: 200px">

			</div>
			Лиговский пр., 10 (метро "Пл. Восстания"), гостиница "Октябрьская", 2-й этаж, Орловский конференц-зал.
			состоится презентация семинара по естественному восстановлению зрения и запись на курсы С.Троицкой<br>
			Все организационные подробности узнавайте<br>
			по телефонам: (812) 580-07-75, 956-86-01
			</p>
		</article>

		<article class="post">
			<header>
				<div class="title">
					<h2><a href="#">О МЕТОДЕ</a></h2>
				</div>
			</header>

			<!--<div style="text-align: center; margin-bottom: 20px">-->
			<!--<i>-->
			<!--Курсы, которые я успешно провожу в Санкт-Петербурге и других городах уже в течение 25 лет прошли проверку временем и помогли множеству людей обрести здоровье.-->
			<!--</i>-->
			<!--</div>-->
			<p style="text-align: center">
				В основе предлагаемого с. И. Троицкой подхода лежат методы известного американского офтальмолога Бейтса и гениального ленинградского ученого-физиолога Г. А. Шичко. Помимо приемов психического и физического расслабления по Бейтсу и рекомендаций по перепрограммированию сознания, разработанных Шичко, Светлана привнесла в свою программу обучения на курсах нестандартные психологические техники и рекомендации по активизации внутренних резервов мозга, иммунной системы и всего организма
			</p>
			<footer style="display: flex; justify-content: right;">
				<ul class="actions" style="text-align: center">
					<li><a href="#" class="button turquoise-flat-button big">Читать подробнее</a></li>
				</ul>
			</footer>
		</article>
@endsection
