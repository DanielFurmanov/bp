<?php

use App\Models\Interview;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviews extends Migration
{
	protected $tableName;

	public function __construct()
	{
		$this->tableName = Interview::getTableName();
	}

    public function up()
    {
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->string('image')->nullable();
			$table->string('description')->nullable();
			$table->longText('full_text');
			$table->timestamps();
		});
    }

    public function down()
    {
		Schema::dropIfExists($this->tableName);
	}
}
