@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container_page">
    <div class="banner_page">
        <div class="banner_page_box banner_page_box_article">
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}">
        </div>
    </div>
    <div class="catalog_layout article_detail_layout">
        <div class="catalog_sidebar">
            <div class="catalog_search catalog_category catalog_category_box">
                <h3><iconify-icon icon="dashicons:category"></iconify-icon> Kategori Artikel</h3>
                <ul>
                    @foreach ($categories as $category)
                        <a href="{{ url('/artikel?kategori=' . $category->slug) }}">
                            <li>
                                <iconify-icon icon="dashicons:category"></iconify-icon> {{ $category->name }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="catalog_search catalog_category article_popular">
                <h3><iconify-icon icon="fa-solid:award"></iconify-icon> Artikel Populer</h3>
                <ul>
                    @foreach ($popularArticles as $popular)
                        <a href="artikel/{{ $popular->slug }}">
                            <li>
                                <iconify-icon icon="fa-solid:award"></iconify-icon>
                                {{ \Illuminate\Support\Str::limit($popular->title, 50) }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="article_detail_main">
            <div class="article_detail_heading">
                <h2>{{ $article->title }}</h2>
            </div>
            <div class="article_detail_meta">
                <span>Penulis: {{ $article->author }} / Waktu: {{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('l, d F Y') }} / Kategori: {{ $article->CategoryArticle->name ?? '' }}</span>
            </div>
            <div class="article_detail_text">
                {!! ($article->content) !!}
            </div>
        </div>
    </div>
</div>
@endsection