<header>
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo W124 MERCEDES-BENZ BOXER CLUB INDONESIA">
    </div>
    <div class="menu">
        <ul>
            <a href="#"><li>Beranda</li></a>
            <a href="#"><li>Tentang Kami</li></a>
            <a href="#"><li>Galeri</li></a>
            <a href="/blog"><li>Blog</li></a>
            <a href="#"><li>Kontak</li></a>
        </ul>
    </div>
    <button class="hamburger" onclick="toggleActive();"><iconify-icon icon="bytesize:menu"></iconify-icon></button>
    <div class="menu_btn">
        <a href="#"><button>Daftar</button></a>
    </div>
    <div class="border_header"></div>
</header>
<div class="menu_mobile" id="targetElement">
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo W124 MERCEDES-BENZ BOXER CLUB INDONESIA">
        </div>
        <button class="hamburger" onclick="toggleActive();"><iconify-icon icon="ion:close-outline"></iconify-icon></button>
    </header>
    <ul>
        <a href="#"><li>Beranda</li></a>
        <a href="#"><li>Tentang Kami</li></a>
        <a href="#"><li>Galeri</li></a>
        <a href="#"><li>Blog</li></a>
        <a href="#"><li>Kontak</li></a>
    </ul>
    <a href="#"><button class="btn_mobile">Daftar Sekarang</button></a>
</div>