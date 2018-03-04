<?php

use App\Models\Publisher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Book;

class CreateBooks extends Migration {

	protected $tableName;

	public function __construct() {
		$this->tableName = Book::getTableName();
	}

	public function up() {
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('year');
			$table->integer('publisher_id');
			$table->string('annotation');
			$table->string('cover')->unique();
			$table->string('slug')->unique();

			$table->foreign('publisher_id')->references('id')->on(Publisher::getTableName())
				->onDelete('restrict')->onUpdate('restrict');
		});
	}

	public function down() {
		Schema::dropIfExists($this->tableName);
	}
}
