<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;

    /**
     * Категория статьи.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        // Статья принадлежит категории
        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Статья принадлежит пользователю
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function  user()
    {
        // Статьи принадлежат пользователю
        return $this->belongsTo(User::class);
    }
}
