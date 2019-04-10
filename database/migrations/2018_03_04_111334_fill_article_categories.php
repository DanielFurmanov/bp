<?php

use App\Models\ArticleCategory;
use Illuminate\Database\Migrations\Migration;

class FillArticleCategories extends Migration
{
    /** @var array|string[] */
    const NAMES = [
        ArticleCategory::NAME_ABOUT_COURSES,
        ArticleCategory::NAME_ABOUT_EYES,
        ArticleCategory::NAME_ABOUT_SOBERNESS,
        ArticleCategory::NAME_USEFUL_ARTICLES,
        ArticleCategory::NAME_OTHER,
    ];

    public function up()
    {
        DB::transaction(function() {
            foreach (self::NAMES as $categoryName) {
                $category = new ArticleCategory();
                $category->setName($categoryName);
                $category->save();
            }
        });

    }

    public function down()
    {
        DB::table(ArticleCategory::getTableName())->delete();
    }
}
