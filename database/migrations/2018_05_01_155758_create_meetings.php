<?php

use App\Models\Meeting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetings extends Migration
{
	private $tableName;

	/**
	 * CreateMeetings constructor.
	 */
	public function __construct() {
		$this->tableName = Meeting::getTableName();
	}

	/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create($this->tableName, function(Blueprint $table) {
			$table->increments('id');
			$table->string('address');
			// TODO | RERUN THE MIGRATION AFTER FIXING THE
			// todo | "type "geography" does not exist at character 107" EXCEPTION
//			$table->point('coordinates')->nullable();
			$table->string('description');
			$table->integer('city_id');
			$table->date('date_start');
			$table->date('date_end')->nullable();
			$table->time('time_start')->nullable();
			$table->time('time_end')->nullable();
			$table->timestamps();
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
