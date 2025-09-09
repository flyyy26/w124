<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryArticle extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($category_articles) {
            if (empty($category_articles->slug) && !empty($category_articles->name)) {
                $baseSlug = Str::slug($category_articles->name);
                $slug = $baseSlug;

                $count = CategoryArticle::where('slug', 'like', "$baseSlug%")->count();
                if ($count > 0) {
                    $slug = "{$baseSlug}-" . ($count + 1);
                }

                $category_articles->slug = $slug;
            }
        });
    }
}