<?php

use App\Models\Publisher;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublisher extends Migration {
	protected $tableName;

	public function __construct() {
		$this->tableName = Publisher::getTableName();
	}

	public function up() {
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
		});
	}

	public function down() {
		Schema::dropIfExists($this->tableName);
	}
}
