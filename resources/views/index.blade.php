@extends('layouts.app')

@section('title', 'Beranda | W124 MBCI Bandung Chapter')

@section('content')

<div class="banner">
    <div class="content_banner">
        <h1>W124 MBCI <br/><span>Bandung Chapter</span></h1>
        <p>Kami hadir sebagai wadah silaturahmi, berbagi pengetahuan, serta mempererat persaudaraan antar anggota dengan semangat kebersamaan dan kecintaan terhadap otomotif, khususnya Mercedes-Benz W124.</p>
        <a href="#"><button>Baca Selengkapnya</button></a>
    </div>
    <div class="img_banner">
        <img src="{{ asset('images/banner.webp') }}" alt="W124 MBCI Bandung Chapter">
    </div>
    <img src="{{ asset('images/icon_banner_1.webp') }}" alt="W124 MBCI Bandung Chapter" class="icon_banner">
    <img src="{{ asset('images/icon_banner_2.webp') }}" alt="W124 MBCI Bandung Chapter" class="icon_banner_2">
    <div class="border_banner"></div>
</div>
<div class="section_2">
    <div class="heading_section heading_section_center">
        <h2>Informasi Event</h2>
    </div>
    <div class="swiper eventSlide">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="event_box">
                <div class="event_box_img">
                    <img src="{{ asset('images/event_img.png') }}" alt="">
                </div>
                <div class="event_box_content">
                    <h3>MBCI BANDUNG W 124 TOURING to YOGYAKARTA 1-3 AGUSTUS 2025</h3>
                    <p>MBCI Bandung W124 Touring to Yogyakarta (1–3 Agustus 2025) Komunitas Mercedes-Benz Boxer Club Indonesia (MBCI) Bandung Chapter akan menggelar touring bersama menuju Yogyakarta pada tanggal 1–3 Agustus 2025. Kegiatan ini menjadi ajang kebersamaan antar anggota, menikmati perjalanan dengan Mercedes-Benz W124, sekaligus mempererat persaudaraan. </p>
                    <a href="#"><button>Daftar Sekarang</button></a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="event_box">
                <div class="event_box_img">
                    <img src="{{ asset('images/event_img.png') }}" alt="">
                </div>
                <div class="event_box_content">
                    <h3>MBCI BANDUNG W 124 TOURING to YOGYAKARTA 1-3 AGUSTUS 2025</h3>
                    <p>MBCI Bandung W124 Touring to Yogyakarta (1–3 Agustus 2025) Komunitas Mercedes-Benz Boxer Club Indonesia (MBCI) Bandung Chapter akan menggelar touring bersama menuju Yogyakarta pada tanggal 1–3 Agustus 2025. Kegiatan ini menjadi ajang kebersamaan antar anggota, menikmati perjalanan dengan Mercedes-Benz W124, sekaligus mempererat persaudaraan. </p>
                    <a href="#"><button>Daftar Sekarang</button></a>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="section_3">
    <div class="heading_section heading_section_between">
        <h2>Galeri Kegiatan</h2>
        <a href="#">Lihat Lainnya</a>
    </div>
    <div class="gallery_home">
        <div class="gallery_home_layout">
            <div class="gallery_home_box">
                <div class="overlay_gallery"></div>
                <div class="gallery_text">
                    <p>Touring Yogyakarta W124 MBCI Bandung Chapter</p>
                </div>
                <img src="{{ asset('images/galleri_1.png') }}" alt="">
            </div>
            <div></div>
            <div class="gallery_home_box">
                <div class="overlay_gallery"></div>
                <div class="gallery_text">
                    <p>Touring Yogyakarta W124 MBCI Bandung Chapter</p>
                </div>
                <img src="{{ asset('images/galleri_2.png') }}" alt="">
            </div>
            <div></div>
            <div class="gallery_home_box">
                <div class="overlay_gallery"></div>
                <div class="gallery_text">
                    <p>Touring Yogyakarta W124 MBCI Bandung Chapter</p>
                </div>
                <img src="{{ asset('images/galleri_3.png') }}" alt="">
            </div>
        </div>

        <div class="gallery_home_layout_sc">
            <div class="gallery_home_box">
                <div class="overlay_gallery"></div>
                <div class="gallery_text">
                    <p>Touring Yogyakarta W124 MBCI Bandung Chapter</p>
                </div>
                <img src="{{ asset('images/galleri_4.png') }}" alt="">
            </div>
            <div></div>
            <div class="gallery_home_box">
                <div class="overlay_gallery"></div>
                <div class="gallery_text">
                    <p>Touring Yogyakarta W124 MBCI Bandung Chapter</p>
                </div>
                <img src="{{ asset('images/galleri_5.png') }}" alt="">
            </div>
            <div></div>
            <div class="gallery_home_box">
                <div class="overlay_gallery"></div>
                <div class="gallery_text">
                    <p>Bukber W124 MBCI Bandung Chapter</p>
                </div>
                <img src="{{ asset('images/galleri_6.png') }}" alt="">
            </div>
        </div>
    </div>
    <a href="#" class="other_link">Lihat Lainnya</a>
</div>
<div class="section_cta">
    <img src="{{ asset('images/car_1.svg') }}" alt="Mercedez Benz Boxer | MBCI Chapter Bandung" class="icon_cta_1">
    <img src="{{ asset('images/car_2.svg') }}" alt="Mercedez Benz Boxer | MBCI Chapter Bandung" class="icon_cta_2">
    <div class="icon_cta_2"></div>
    <div class="section_cta_text">
        <h2>Gabung Bersama Kami Sekarang!</h2>
        <p>Jadilah bagian dari keluarga besar MBCI Bandung W124. Rasakan serunya touring, hangatnya persaudaraan, dan nikmatnya berkumpul bersama pecinta Mercedes-Benz sejati</p>
        <a href="#"><button>Gabung Sekarang</button></a>
    </div>
</div>
<div class="article_section">
    <div class="heading_section heading_section_between">
        <h2>Berita & Artikel</h2>
        <a href="#">Lihat Lainnya</a>
    </div>
    <div class="article_section_layout">
        <div class="article_section_box">
            <div class="article_section_box_img">
                <div class="badge_article">
                    <a href="#">
                        <div class="category_badge">
                            <span>mercedez benz boxer</span>
                        </div>
                    </a>
                    <div class="view_badge">
                        <iconify-icon icon="iconoir:eye-solid"></iconify-icon>
                        <span>23</span>
                    </div>
                </div>
                <img src="{{ asset('images/blog.png') }}" alt="">
            </div>
            <div class="artice_section_box_content">
                <span>Senin, 01 September 2025</span>
                <h3>Gabung Bersama MBCI Bandung W124: Lebih dari Sekadar Komunitas Mobil</h3>
                <a href="#"><button>Baca Selengkapnya</button></a>
            </div>
        </div>
        <div class="article_section_box">
            <div class="article_section_box_img">
                <div class="badge_article">
                    <a href="#">
                        <div class="category_badge">
                            <span>mercedez benz boxer</span>
                        </div>
                    </a>
                    <div class="view_badge">
                        <iconify-icon icon="iconoir:eye-solid"></iconify-icon>
                        <span>23</span>
                    </div>
                </div>
                <img src="{{ asset('images/blog.png') }}" alt="">
            </div>
            <div class="artice_section_box_content">
                <span>Senin, 01 September 2025</span>
                <h3>Gabung Bersama MBCI Bandung W124: Lebih dari Sekadar Komunitas Mobil</h3>
                <a href="#"><button>Baca Selengkapnya</button></a>
            </div>
        </div>
        <div class="article_section_box">
            <div class="article_section_box_img">
                <div class="badge_article">
                    <a href="#">
                        <div class="category_badge">
                            <span>mercedez benz boxer</span>
                        </div>
                    </a>
                    <div class="view_badge">
                        <iconify-icon icon="iconoir:eye-solid"></iconify-icon>
                        <span>23</span>
                    </div>
                </div>
                <img src="{{ asset('images/blog.png') }}" alt="">
            </div>
            <div class="artice_section_box_content">
                <span>Senin, 01 September 2025</span>
                <h3>Gabung Bersama MBCI Bandung W124: Lebih dari Sekadar Komunitas Mobil</h3>
                <a href="#"><button>Baca Selengkapnya</button></a>
            </div>
        </div>
    </div>
    <a href="#" class="other_link">Lihat Lainnya</a>
</div>
<div class="partner_section">
    <div class="heading_section heading_section_center">
        <h2>Partner Kami</h2>
    </div>
    <div class="partner_logo">
        <img src="{{ asset('images/partner_1.png') }}" alt="">
        <img src="{{ asset('images/partner_2.png') }}" alt="">
        <img src="{{ asset('images/partner_3.png') }}" alt="">
        <img src="{{ asset('images/partner_4.png') }}" alt="">
        <img src="{{ asset('images/partner_5.png') }}" alt="">
    </div>
</div>

@endsection