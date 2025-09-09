@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container_page">
    <div class="banner_page">
        <div class="banner_page_box">
            <h1>Blog <font>Terbaru</font></h1>
            <p>Temukan inspirasi dan tips seputar interior & plafon</p>
        </div>
    </div>
    <div class="catalog_layout">
        <div class="catalog_sidebar">
            <div class="catalog_search">
                <h3><iconify-icon icon="akar-icons:search"></iconify-icon> Cari Blog</h3>
                <form method="GET" action="{{ request()->url() }}">
                    <input 
                        type="text" 
                        name="q" 
                        placeholder="Cari nama blog"
                        value="{{ request('q') }}" 
                    >
                </form>
            </div>
            <div class="catalog_search catalog_category catalog_category_box">
                <h3><iconify-icon icon="dashicons:category"></iconify-icon> Kategori Artikel</h3>
                <ul>
                    @foreach ($categories as $category)
                        <a href="{{ url('/blog?kategori=' . $category->slug) }}">
                            <li>
                                <iconify-icon icon="dashicons:category"></iconify-icon> {{ $category->name }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="catalog_search catalog_category article_popular">
                <h3><iconify-icon icon="fa-solid:award"></iconify-icon> Blog Populer</h3>
                <ul>
                    @foreach ($popularArticles as $popular)
                        <a href="blog/{{ $popular->slug }}">
                            <li>
                                <iconify-icon icon="fa-solid:award"></iconify-icon>
                                {{ \Illuminate\Support\Str::limit($popular->title, 50) }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="article_category_mobile">
            <div class="article_category_mobile_layout">
                @foreach ($categories as $category)
                    <a href="{{ url('/blog?kategori=' . $category->slug) }}"><button>{{ $category->name }}</button></a>
                @endforeach
            </div>
        </div> 
        <div class="catalog_main">
            <div class="product-grid" id="productContainer">
                @foreach($articles as $article)
                    <div class="article_section_box">
                        <div class="article_section_box_img">
                            <div class="badge_article">
                                <a href="#">
                                    <div class="category_badge">
                                        <span>{{ $article->CategoryArticle->name ?? '' }}</span>
                                    </div>
                                </a>
                                <div class="view_badge">
                                    <iconify-icon icon="iconoir:eye-solid"></iconify-icon>
                                    <span>{{ $article->views }}</span>
                                </div>
                            </div>
                            <img src="{{ asset('images/blog.png') }}" alt="">
                        </div>
                        <div class="artice_section_box_content">
                            <span>{{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('l, d F Y') }}</span>
                            <h3>{{ $article->title }}</h3>
                            <a href="blog/{{ $article->slug }}"><button><iconify-icon icon="iconoir:eye"></iconify-icon>Lihat Detail</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($articles->total() > 12)
                <div class="pagination">
                    <form method="GET" action="{{ request()->url() }}">
                        <input type="hidden" name="page" value="{{ $products->currentPage() - 1 }}">
                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <button {{ $products->onFirstPage() ? 'disabled' : '' }}>
                            <iconify-icon icon="majesticons:chevron-left"></iconify-icon>
                        </button>
                    </form>

                    <form method="GET" action="{{ request()->url() }}">
                        <input type="hidden" name="page" value="{{ $products->currentPage() + 1 }}">
                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <button {{ !$products->hasMorePages() ? 'disabled' : '' }}>
                            <iconify-icon icon="majesticons:chevron-right"></iconify-icon>
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection