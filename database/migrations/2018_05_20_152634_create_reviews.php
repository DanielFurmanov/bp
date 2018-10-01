<?php

use App\Models\City;
use App\Models\Review;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviews extends Migration
{
	protected $tableName;

	public function __construct() {
		$this->tableName = Review::getTableName();
	}

	public function up() {
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments('id');
			$table->longText('text');
			$table->date('date')->nullable();
			$table->string('author');
			$table->string('comment')->nullable();
			$table->integer('avatar');
			$table->integer('city_id')->nullable();

			$table->foreign('city_id')->references('id')->on(City::getTableName())
				->onDelete('restrict')->onUpdate('restrict');

			$table->timestamps();
		});
	}

	public function down() {
		Schema::dropIfExists($this->tableName);
	}
}
