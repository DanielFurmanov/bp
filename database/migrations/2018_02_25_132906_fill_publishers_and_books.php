<?php

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Migrations\Migration;

class FillPublishersAndBooks extends Migration {
	const PUBLISHER_PITER = 'ПИТЕР';
	const PUBLISHER_FENIX = 'Феникс';
	const PUBLISHER_GELICON = 'Геликон Плюс';

	public function up() {
			DB::transaction(function() {
				$piterPub = new Publisher();
				$piterPub->setName(static::PUBLISHER_PITER);
				$piterPub->save();

				$fenixPub = new Publisher();
				$fenixPub->setName(static::PUBLISHER_FENIX);
				$fenixPub->save();

				$geliconPub = new Publisher();
				$geliconPub->setName(static::PUBLISHER_GELICON);
				$geliconPub->save();


				$books = [
					[
						'title' => 'Улучшаем зрение сами',
						'year' => 2004,
						'publisher' => $piterPub,
						'annotation' => 'Автор предлагает уникальный подход к восстановлению здоровья глаз, основанный на зарубежных и отечественных методиках',
						'img' => 'uluchshaem_zrenie_sami.jpg',
						'content_view_name' => 'uluchshaem_zrenie_sami',
					],
					[
						'title' => 'Избавиться от ОЧКОВ-УБИЙЦ навсегда!',
						'year' => 2007,
						'publisher' => $piterPub,
						'annotation' => '«Кто виноват? Что делать? Где мои очки?» – три вопроса современного интеллигента. Те, кто прошел курсы коррекции',
						'img' => 'izbavitsa_ot_ochkov_ubiyts.jpg',
						'content_view_name' => 'izbavitsa_ot_ochkov_ubiyts',
					],
					[
						'title' => 'Практический курс коррекции зрения',
						'year' => 2008,
						'publisher' => $piterPub,
						'annotation' => 'Книга обобщает 15-летний опыт работы автора с людьми, которые избавились от очков и различных зрительных патологий на',
						'img' => 'pract_kurs_kor_zreniya.jpg',
						'content_view_name' => 'pract_kurs_kor_zreniya',

					],
					[
						'title' => 'Коррекция зрения у детей',
						'year' => 2010,
						'publisher' => $piterPub,
						'annotation' => 'Курс естественной коррекции зрения, разработанный Светланой Троицкой специально для детей и их родителей, – это',
						'img' => 'kor_zren_u_detei.jpg',
						'content_view_name' => 'kor_zren_u_detei',

					],
					[
						'title' => 'Практический курс коррекции зрения у взрослых и детей',
						'img' => '.jpg',
						'content_view_name' => '',
						'year' => 2011,
						'publisher' => $piterPub,
						'annotation' => 'Курс коррекции зрения Светлан Троицкой – это избавление от очков за неделю, стойкое улучшение зрения за месяц и общее',
						'img' => 'pract_kurs_kor_zren_u_vzros_i_det.jpg',
						'content_view_name' => 'pract_kurs_kor_zren_u_vzros_i_det',

					],
					[
						'title' => 'Восстанови здоровье глаз без операций и лекарств',
						'year' => 2012,
						'publisher' => $fenixPub,
						'annotation' => 'Методика, позволяющая людям улучшать зрение без лекарств и операций, предусматривает комплексный подход, и читатель',
						'img' => 'vostanovi_zdorovie_glaz.jpg',
						'content_view_name' => 'vostanovi_zdorovie_glaz',

					],
					[
						'title' => 'Себя люблю себя творю',
						'year' => 2006,
						'publisher' => $geliconPub,
						'annotation' => ' В сборник вошли уникальные материалы о последствиях лазерных операций на глазах, методика массажа',
						'img' => 'self_love.jpg',
						'content_view_name' => 'self_love',

					],
					[
						'title' => 'Я люблю тебя жизнь',
						'year' => 2008,
						'publisher' => $geliconPub,
						'annotation' => 'В этом сборнике собраны интереснейшие материалы Мэйра Шнейдера по улучшению остроты зрения через расслабление,',
						'img' => 'i_love_u_life.jpg',
						'content_view_name' => 'i_love_u_life',

					],
					[
						'title' => 'Алкогольный террор',
						'year' => 2009,
						'publisher' => $piterPub,
						'annotation' => 'Авторы книги, В.Г. Жданов и С.И. Троицкая, посвятили ее двум великим ленинградским ученым и трезвенникам – Ф.Г. Углову',
						'img' => 'alco_terror.jpg',
						'content_view_name' => 'alco_terror',

					],
					[
						'title' => 'Медицинский террор ПИТЕР',
						'year' => 2012,
						'publisher' => $piterPub,
						'annotation' => 'Книга предлагает читателю не просто набор случаев врачебных ошибок, она содержит вдумчивый анализ того печального',
						'img' => 'med_terror_piter.jpg',
						'content_view_name' => 'med_terror_piter',

					],
					[
						'title' => 'Медицинский террор Феникс',
						'year' => 2014,
						'publisher' => $fenixPub,
						'annotation' => 'Книга предлагает читателю не просто набор случаев врачебных ошибок, она содержит вдумчивый анализ того печального',
						'img' => 'med_terror_fenix.jpg',
						'content_view_name' => 'med_terror_fenix',

					],
					[
						'title' => 'Пищевой террор ПИТЕР',
						'year' => 2011,
						'publisher' => $piterPub,
						'annotation' => 'Знаете ли вы, что все мы – жертвы пищевого геноцида? Что продовольственная индустрия «подсаживает» нас на продукты,',
						'img' => 'food_terror_piter.jpg',
						'content_view_name' => 'food_terror_piter',

					],
					[
						'title' => 'Пищевой террор Феникс',
						'year' => 2015,
						'publisher' => $fenixPub,
						'annotation' => 'Знаете ли вы, что все мы – жертвы пищевого геноцида? Что продовольственная индустрия «подсаживает» нас на продукты,',
						'img' => 'food_terror_fenix.jpg',
						'content_view_name' => 'food_terror_fenix',
					],
					[
						'title' => 'Информационный террор',
						'year' => 2015,
						'publisher' => $fenixPub,
						'annotation' => 'Сейчас не только способы передачи и получения информации упростились и ускорились до молниеносных уровней, но и доступ',
						'img' => 'info_terror.jpg',
						'content_view_name' => 'info_terror',
					],
				];

				foreach ($books as $bookArray) {
					$book = new Book();
					$book->setTitle($bookArray['title']);
					$book->setYear($bookArray['year']);
					$book->setAnnotation($bookArray['annotation']);
					$book->setPublisher($bookArray['publisher']);
					$book->setImg($bookArray['img']);
					$book->setContentViewName($bookArray['content_view_name']);
					$book->save();
				}
			});

	}

	public function down() {
		DB::transaction(function() {
			DB::table(Book::getTableName())->delete();
			DB::table(Publisher::getTableName())->delete();
		});
	}
}
