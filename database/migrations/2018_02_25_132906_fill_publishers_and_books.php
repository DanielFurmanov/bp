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
						'cover' => 'uluchshaem-zrenie-sami.jpg',
						'slug' => 'uluchshaem-zrenie-sami',
					],
					[
						'title' => 'Избавиться от ОЧКОВ-УБИЙЦ навсегда!',
						'year' => 2007,
						'publisher' => $piterPub,
						'annotation' => '«Кто виноват? Что делать? Где мои очки?» – три вопроса современного интеллигента. Те, кто прошел курсы коррекции',
						'cover' => 'izbavitsya-ot-ochkov-ubijc-navsegda.jpg',
						'slug' => 'izbavitsya-ot-ochkov-ubijc-navsegda',
					],
					[
						'title' => 'Практический курс коррекции зрения',
						'year' => 2008,
						'publisher' => $piterPub,
						'annotation' => 'Книга обобщает 15-летний опыт работы автора с людьми, которые избавились от очков и различных зрительных патологий на',
						'cover' => 'prakticheskij-kurs-korrekcii-zreniya.jpg',
						'slug' => 'prakticheskij-kurs-korrekcii-zreniya',

					],
					[
						'title' => 'Коррекция зрения у детей',
						'year' => 2010,
						'publisher' => $piterPub,
						'annotation' => 'Курс естественной коррекции зрения, разработанный Светланой Троицкой специально для детей и их родителей, – это',
						'cover' => 'korrekciya-zreniya-u-detej.jpg',
						'slug' => 'korrekciya-zreniya-u-detej',

					],
					[
						'title' => 'Практический курс коррекции зрения у взрослых и детей',
						'year' => 2011,
						'publisher' => $piterPub,
						'annotation' => 'Курс коррекции зрения Светлан Троицкой – это избавление от очков за неделю, стойкое улучшение зрения за месяц и общее',
						'cover' => 'prakticheskij-kurs-korrekcii-zreniya-u-vzroslyh-i-detej.jpg',
						'slug' => 'prakticheskij-kurs-korrekcii-zreniya-u-vzroslyh-i-detej',

					],
					[
						'title' => 'Восстанови здоровье глаз без операций и лекарств',
						'year' => 2012,
						'publisher' => $fenixPub,
						'annotation' => 'Методика, позволяющая людям улучшать зрение без лекарств и операций, предусматривает комплексный подход, и читатель',
						'cover' => 'vosstanovi-zdorove-glaz-bez-operacij-i-lekarstv.jpg',
						'slug' => 'vosstanovi-zdorove-glaz-bez-operacij-i-lekarstv',

					],
					[
						'title' => 'Себя люблю себя творю',
						'year' => 2006,
						'publisher' => $geliconPub,
						'annotation' => ' В сборник вошли уникальные материалы о последствиях лазерных операций на глазах, методика массажа',
						'cover' => 'sebya-lyublyu-sebya-tvoryu.jpg',
						'slug' => 'sebya-lyublyu-sebya-tvoryu',

					],
					[
						'title' => 'Я люблю тебя жизнь',
						'year' => 2008,
						'publisher' => $geliconPub,
						'annotation' => 'В этом сборнике собраны интереснейшие материалы Мэйра Шнейдера по улучшению остроты зрения через расслабление,',
						'cover' => 'ya-lyublyu-tebya-zhizn.jpg',
						'slug' => 'ya-lyublyu-tebya-zhizn',

					],
					[
						'title' => 'Алкогольный террор',
						'year' => 2009,
						'publisher' => $piterPub,
						'annotation' => 'Авторы книги, В.Г. Жданов и С.И. Троицкая, посвятили ее двум великим ленинградским ученым и трезвенникам – Ф.Г. Углову',
						'cover' => 'alkogolnyj-terror.jpg',
						'slug' => 'alkogolnyj-terror',

					],
					[
						'title' => 'Медицинский террор ПИТЕР',
						'year' => 2012,
						'publisher' => $piterPub,
						'annotation' => 'Книга предлагает читателю не просто набор случаев врачебных ошибок, она содержит вдумчивый анализ того печального',
						'cover' => 'medicinskij-terror-piter.jpg',
						'slug' => 'medicinskij-terror-piter',

					],
					[
						'title' => 'Медицинский террор Феникс',
						'year' => 2014,
						'publisher' => $fenixPub,
						'annotation' => 'Книга предлагает читателю не просто набор случаев врачебных ошибок, она содержит вдумчивый анализ того печального',
						'cover' => 'medicinskij-terror-feniks.jpg',
						'slug' => 'medicinskij-terror-feniks',

					],
					[
						'title' => 'Пищевой террор ПИТЕР',
						'year' => 2011,
						'publisher' => $piterPub,
						'annotation' => 'Знаете ли вы, что все мы – жертвы пищевого геноцида? Что продовольственная индустрия «подсаживает» нас на продукты,',
						'cover' => 'pishchevoj-terror-piter.jpg',
						'slug' => 'pishchevoj-terror-piter',

					],
					[
							'title' => 'Пищевой террор Феникс',
						'year' => 2015,
						'publisher' => $fenixPub,
						'annotation' => 'Знаете ли вы, что все мы – жертвы пищевого геноцида? Что продовольственная индустрия «подсаживает» нас на продукты,',
						'cover' => 'pishchevoj-terror-feniks.jpg',
						'slug' => 'pishchevoj-terror-feniks',
					],
					[
						'title' => 'Информационный террор',
						'year' => 2015,
						'publisher' => $fenixPub,
						'annotation' => 'Сейчас не только способы передачи и получения информации упростились и ускорились до молниеносных уровней, но и доступ',
						'cover' => 'informacionnyj-terror.jpg',
						'slug' => 'informacionnyj-terror',
					],
				];

				foreach ($books as $bookArray) {
					$book = new Book();
					$book->setTitle($bookArray['title']);
					$book->setYear($bookArray['year']);
					$book->setAnnotation($bookArray['annotation']);
					$book->setPublisher($bookArray['publisher']);
					$book->setCover($bookArray['cover']);
					$book->setSlug($bookArray['slug']);
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
