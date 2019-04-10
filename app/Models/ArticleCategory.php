<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int id
 * @property string name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class ArticleCategory extends BaseModel
{
    const NAME_ABOUT_COURSES = 'О курсах'; // todo courses is not correct ENGLISH
    const NAME_ABOUT_EYES = 'О глазах';
    const NAME_USEFUL_ARTICLES = 'Полезные статьи';
    const NAME_ABOUT_SOBERNESS = 'О трезвости и трезвении';
    const NAME_OTHER = 'Другие статьи';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function articles(): HasMany {
        return $this->hasMany(Article::class, 'category_id');
    }
}
