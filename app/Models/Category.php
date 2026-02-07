<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id Внутренний ID
 * @property int $title Заголовок
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<Post> $posts
 */
class Category extends Model
{
    protected $fillable = [
        "title"
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
