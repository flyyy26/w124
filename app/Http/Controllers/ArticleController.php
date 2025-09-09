<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();
        $kategoriSlug = $request->query('kategori');

        $search = $request->query('q');
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%');
            });
        }

        if ($kategoriSlug && $kategoriSlug !== 'all') {
            $category = CategoryArticle::where('slug', $kategoriSlug)->first();
            if ($category) {
                $query->where('category_article_id', $category->id);
            }
        }

        // Ambil produk berdasarkan filter (jangan pakai Product::paginate lagi)
        $articles = $query->with('CategoryArticle')->paginate(12);
        $categories = CategoryArticle::all();

        $popularArticles = Article::orderBy('views', 'desc')
            ->take(5)
            ->get();


        return view('article.index', [
            'articles' => $articles,
            'categories' => $categories,
            'popularArticles' => $popularArticles,
        ]);
    }
    public function show(Request $request, $slug)
    {
        $query = Article::query();
        $kategoriSlug = $request->query('kategori');

        $search = $request->query('q');
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%');
            });
        }

        if ($kategoriSlug && $kategoriSlug !== 'all') {
            $category = CategoryArticle::where('slug', $kategoriSlug)->first();
            if ($category) {
                $query->where('category_article_id', $category->id);
            }
        }
        
        $article = Article::with('CategoryArticle')->where('slug', $slug)->firstOrFail();

        $sessionKey = 'viewed_article_' . $article->id;

        // Jika belum pernah melihat atau sudah lewat 1 jam
        if (!session()->has($sessionKey) || now()->diffInMinutes(session($sessionKey)) > 60) {
            Article::where('id', $article->id)->increment('views');
            session([$sessionKey => now()]);
        }

        $categories = CategoryArticle::all();
        $popularArticles = Article::orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('article.show', [
            'article' => $article,
            'categories' => $categories,
            'popularArticles' => $popularArticles,
        ]);
    }

}