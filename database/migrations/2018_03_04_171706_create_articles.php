<?php

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticles extends Migration
{
    protected $tableName;

    public function __construct()
    {
        $this->tableName = Article::getTableName();
    }

    public function up()
    {
        Schema::create($this->tableName, function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('title')->unique();
            $table->text('annotation');
            $table->longText('content');
            $table->string('slug')->unique();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on(ArticleCategory::getTableName());
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
