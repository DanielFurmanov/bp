<?php

use App\Models\City;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCities extends Migration
{
	const CITY_NAMES = [
		'Москва',
		'Санкт-Петербург',
		'Новосибирск',
		'Екатеринбург',
		'Нижний Новгород',
		'Казань',
		'Челябинск',
		'Омск',
		'Самара',
		'Ростов-на-Дону',
		'Уфа',
		'Красноярск',
		'Пермь',
		'Воронеж',
		'Волгоград',
		'Краснодар',
		'Саратов',
		'Тюмень',
		'Тольятти',
		'Ижевск',
		'Барнаул',
		'Ульяновск',
		'Иркутск',
		'Хабаровск',
		'Ярославль',
		'Владивосток',
		'Махачкала',
		'Томск',
		'Оренбург',
		'Кемерово',
		'Новокузнецк',
		'Рязань',
		'Астрахань',
		'Набережные Челны',
		'Пенза',
		'Липецк',
		'Киров',
		'Кирово-Чепецк',
	];

	private $tableName;

	/**
	 * CreateCities constructor.
	 */
	public function __construct() {
		$this->tableName = City::getTableName();
	}

	/**
	 * Run the migrations.
	 *
	 * @return void
	 *
	 *
	 * @throws Throwable
	 */
    public function up()
    {
        DB::transaction(function() {
        	Schema::create($this->tableName, function(Blueprint $table) {
        		$table->increments('id');
        		$table->string('name');
        		$table->timestamps();
			});

        	foreach (static::CITY_NAMES as $cityName) {
        		$city = new City();
        		$city->setName($cityName);
        		$city->saveOrFail();
			}
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tableName);
    }
}
