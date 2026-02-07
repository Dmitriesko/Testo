<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id Внутренний ID
 * @property int $title Заголовок
 * @property int $description Описание
 * @property int $content Содержание
 * @property int $category_id Категория
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category $category
 */
class Post extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'content',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
