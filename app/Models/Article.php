<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'short_description',
        'content',
        'author',
        'category_article_id',
        'published_at',
        'views',
    ];

    public function CategoryArticle()
    {
        return $this->belongsTo(CategoryArticle::class, 'category_article_id');
    }


    protected static function boot()
    {
        parent::boot();

        static::saving(function ($article) {
            if (empty($article->slug) && !empty($article->title)) {
                $baseSlug = Str::slug($article->title);
                $slug = $baseSlug;

                $count = Article::where('slug', 'like', "$baseSlug%")->count();
                if ($count > 0) {
                    $slug = "{$baseSlug}-" . ($count + 1);
                }

                $article->slug = $slug;
            }
        });
    }
}