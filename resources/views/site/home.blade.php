@extends('site.layouts.master')

@section('title'){{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <!-- JS Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endsection


@section('content')
    <main id="content" class="site-main post-1441 page type-page status-publish hentry">


        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="1441" class="elementor elementor-1441 elementor-58"
                 data-elementor-post-type="page">
                <div class="elementor-element elementor-element-e512013 e-con-full e-flex e-con e-parent" data-id="e512013"
                     data-element_type="container">
                    <div class="elementor-element elementor-element-a87dc13 elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-widget elementor-widget-slides"
                         data-id="a87dc13" data-element_type="widget"
                         data-settings="{&quot;navigation&quot;:&quot;arrows&quot;,&quot;autoplay_speed&quot;:4000,&quot;transition&quot;:&quot;fade&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition_speed&quot;:500}"
                         data-widget_type="slides.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-swiper">
                                <div class="elementor-slides-wrapper elementor-main-swiper swiper" role="region"
                                     aria-roledescription="carousel" aria-label="Slides" dir="ltr"
                                     data-animation="fadeInUp">
                                    <div class="swiper-wrapper elementor-slides">
                                        @foreach($banners as $banner)
                                            <div class="elementor-repeater-item-e2edbdf swiper-slide" role="group"
                                                 aria-roledescription="slide">
                                                <div class="swiper-slide-bg" role="img" style="background-image: url({{ $banner->image->path ?? '' }})"></div>
                                                <a class="swiper-slide-inner"
                                                   href="#">
                                                    <div class="swiper-slide-contents"></div>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev" role="button"
                                         tabindex="0" aria-label="Previous slide">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-left"
                                             viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"></path>
                                        </svg>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next" role="button"
                                         tabindex="0" aria-label="Next slide">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right"
                                             viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="elementor-element elementor-element-11e8f09 e-flex e-con-boxed e-con e-parent" data-id="11e8f09"
                     data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-c611157 wl-columns-2 wl-columns-mobile-1 elementor-widget elementor-widget-wl-category-grid"
                             data-id="c611157" data-element_type="widget" data-widget_type="wl-category-grid.default">
                            <div class="elementor-widget-container">
                                <div class="wl-row   " data-settings="">
                                    @foreach($categories as $category)
                                        <div class="wl-col-2">
                                            <div class="ht-category-wrap">
                                                <div class="ht-category-image ht-category-image-zoom">
                                                    <a class="ht-category-border-2"
                                                       href="{{ route('front.getChildCategory', $category->slug) }}">
                                                        <img fetchpriority="high" decoding="async" width="768" height="330"
                                                             src="{{ $category->image->path ?? '' }}"
                                                             class="attachment-medium_large size-medium_large" alt=""
                                                             srcset="{{ $category->image->path ?? '' }} 768w, {{ $category->image->path ?? '' }} 300w, {{ $category->image->path ?? '' }} 1024w,{{ $category->image->path ?? '' }} 1536w,
                                                             {{ $category->image->path ?? '' }} 2048w,
                                                             {{ $category->image->path ?? '' }} 600w"
                                                             sizes="(max-width: 768px) 100vw, 768px"/> </a>
                                                </div>
                                                <div class="ht-category-content-3 ht-category-content-3-bg1">
                                                    <h3><a href="{{ route('front.getChildCategory', $category->slug) }}">{{ $category->name }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ae621e4 e-flex e-con-boxed e-con e-parent" data-id="ae621e4"
                     data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-e5dd668 elementor-widget elementor-widget-heading"
                             data-id="e5dd668" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Giải pháp</h2></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-d99c9bc e-flex e-con-boxed e-con e-parent" data-id="d99c9bc"
                     data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        @foreach($solutions as $solution)
                            <div class="elementor-element elementor-element-57e0c4c e-con-full e-flex e-con e-child"
                                 data-id="57e0c4c" data-element_type="container">
                                <div class="elementor-element elementor-element-ab165ee elementor-position-top elementor-widget elementor-widget-image-box"
                                     data-id="ab165ee" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><a
                                                    href="{{ route('front.solutions', $solution->slug) }}"
                                                    tabindex="-1"><img loading="lazy" decoding="async" width="800" height="450"
                                                                       src="{{ $solution->image->path ?? '' }}"
                                                                       class="attachment-large size-large wp-image-1117" alt=""
                                                                       srcset="{{ $solution->image->path ?? '' }} 1024w,
                                                                        {{ $solution->image->path ?? '' }} 300w,
                                                                       {{ $solution->image->path ?? '' }} 768w,
                                                                       {{ $solution->image->path ?? '' }} 1536w,
                                                                       {{ $solution->image->path ?? '' }} 2048w,
                                                                      {{ $solution->image->path ?? '' }} 600w"
                                                                       sizes="(max-width: 800px) 100vw, 800px"/></a></figure>
                                            <div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a
                                                        href="{{ route('front.solutions', $solution->slug) }}">{{ $solution->name }}</a></h3></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>

            </div>
            <style>
                :root{
                    --red-500:#E53935;
                    --red-600:#D32F2F;
                    --red-50:#FFEBEE;
                    --border:#eee;
                    --text:#222;
                    --muted:#666;
                    --radius:14px;
                }

                .blog-swiper{
                    --gap:16px;
                    padding: 8px 0 32px;
                }
                /* làm các slide cao đều nhau */
                .blog-swiper .swiper-wrapper{ align-items: stretch; }
                .blog-swiper .swiper-slide{ height:auto; }

                /* Card */
                .blog-card{
                    display:grid;
                    grid-template-rows:auto 1fr auto; /* ảnh | nội dung | meta */
                    background:#fff;
                    border:1px solid var(--border);
                    border-radius:var(--radius);
                    overflow:hidden;
                    height:100%;
                    box-shadow:0 8px 24px rgba(0,0,0,.05);
                    transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
                }
                .blog-card:hover{
                    transform:translateY(-2px);
                    box-shadow:0 12px 28px rgba(229,57,53,.15);
                    border-color: var(--red-50);
                }

                /* Ảnh 16:9 luôn đồng nhất */
                .blog-card__image{
                    aspect-ratio:16/9;
                    display:block;
                    overflow:hidden;
                    background:var(--red-50);
                }
                .blog-card__image img{
                    width:100%; height:100%; object-fit:cover; display:block;
                    transition: transform .5s ease;
                }
                .blog-card:hover .blog-card__image img{ transform:scale(1.03); }

                .blog-card__body{ padding:14px 16px 8px; min-height:0; }
                .blog-card__title{
                    margin:0 0 8px;
                    font-size:1.05rem; line-height:1.35; color:var(--text);
                    display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;
                }
                .blog-card__title a{ color:inherit; text-decoration:none; }
                .blog-card__title a:hover{ color:var(--red-600); }

                .blog-card__excerpt{
                    margin:0;
                    color:var(--muted);
                    font-size:.95rem; line-height:1.5;
                    display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden;
                    min-height: calc(1.5em * 3); /* giữ chiều cao đoạn mô tả */
                }

                .blog-card__meta{
                    padding:10px 16px 14px;
                    display:flex; align-items:center; justify-content:space-between; gap:10px;
                    border-top:1px solid var(--border);
                }
                .post-tags{ display:flex; flex-wrap:wrap; gap:6px; }
                .post-tags .tag{
                    display:inline-block; padding:4px 8px; border-radius:999px;
                    background:var(--red-50); color:var(--red-600); font-size:.78rem; text-decoration:none;
                    border:1px solid rgba(211,47,47,.15);
                    white-space:nowrap;
                }
                .blog-card__time{ color:#888; font-size:.8rem; white-space:nowrap; }

                /* Swiper controls (tone đỏ) */
                .blog-swiper .swiper-pagination-bullet{ background:var(--red-50); opacity:1; }
                .blog-swiper .swiper-pagination-bullet-active{ background:var(--red-600); }
                .blog-swiper .swiper-button-next,
                .blog-swiper .swiper-button-prev{
                    width:38px; height:38px; border-radius:50%;
                    background:#fff; border:1px solid var(--border);
                    color:var(--red-600); box-shadow:0 6px 14px rgba(0,0,0,.06);
                }
                .blog-swiper .swiper-button-next:after,
                .blog-swiper .swiper-button-prev:after{ font-size:16px; }
                .blog-swiper .swiper-button-next:hover,
                .blog-swiper .swiper-button-prev:hover{
                    border-color:var(--red-600); background:var(--red-50);
                }

                /* Responsive khoảng cách giữa các slide */
                .blog-swiper .swiper-slide{ padding:0; }
                @media (max-width: 480px){
                    .blog-card__title{ font-size:1rem; }
                    .blog-card__excerpt{ -webkit-line-clamp:2; min-height: calc(1.5em * 2); }
                }



                /* Khối bao + căn giữa + thu hẹp bề ngang */
                .blog-section{
                    padding: 56px 0 8px;
                }
                .blog-section .blog-container{
                    /* Giới hạn bề rộng và căn giữa */
                    max-width: clamp(960px, 92vw, 1400px);
                    margin-inline: auto;
                    padding-inline: 12px;
                }

                /* Tiêu đề tone đỏ, đơn giản */
                .section-head h2{
                    margin: 0 0 16px;
                    font-size: clamp(1.25rem, 1rem + 1.2vw, 1.75rem);
                    line-height: 1.2;
                    color: var(--red-600, #D32F2F);
                    letter-spacing: .2px;
                    font-weight: 700;
                    position: relative;
                }
                .section-head h2::after{
                    content:"";
                    display:block;
                    width:56px; height:3px;
                    background: var(--red-600, #D32F2F);
                    border-radius: 2px;
                    margin-top: 8px;
                    opacity:.9;
                }

                /* Đảm bảo swiper không tràn ra ngoài container */
                .blog-swiper{ width: 100%; }

                /* Nếu mũi tên bị sát mép, kéo vào trong một chút */
                .blog-swiper .swiper-button-prev{ left: -4px; }
                .blog-swiper .swiper-button-next{ right: -4px; }
                @media (max-width: 640px){
                    .blog-swiper .swiper-button-prev{ left: -2px; }
                    .blog-swiper .swiper-button-next{ right: -2px; }
                }

            </style>

            <section class="blog-slider blog-section">
                <div class="blog-container">
                    <header class="section-head">
                        <h2>Tin tức &amp; sự kiện</h2>
                    </header>
                    <div class="swiper blog-swiper" id="blogSwiper">
                        <div class="swiper-wrapper">

                            @foreach($posts as $post)
                                <div class="swiper-slide">
                                    <article class="blog-card">
                                        <a class="blog-card__image" href="{{ route('front.blogDetail', $post->slug) }}">
                                            <img src="{{ $post->image->path ?? '' }}" alt="{{ $post->name }}" loading="lazy">
                                        </a>
                                        <div class="blog-card__body">
                                            <h3 class="blog-card__title"><a href="{{ route('front.blogDetail', $post->slug) }}">{{ $post->name }}</a></h3>
                                            <p class="blog-card__excerpt">
                                                {{ $post->intro }}
                                            </p>
                                        </div>
                                        <div class="blog-card__meta">
                                            <div class="post-tags">
                                                <a class="tag" href="#">Admin</a>
                                            </div>
                                            <time class="blog-card__time" >{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</time>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                        </div>

                        <!-- Pagination & Arrows -->
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev" aria-label="Bài trước"></div>
                        <div class="swiper-button-next" aria-label="Bài sau"></div>
                    </div>

                </div>
            </section>
        </div>


    </main>
@endsection

@push('scripts')
    <script>
        const blogSwiper = new Swiper('#blogSwiper', {
            speed: 500,
            spaceBetween: 16,
            grabCursor: true,
            watchOverflow: true,
            keyboard: { enabled: true },
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            breakpoints: {
                0:   { slidesPerView: 1.05, spaceBetween: 14 },
                480: { slidesPerView: 1.25, spaceBetween: 16 },
                640: { slidesPerView: 2,     spaceBetween: 18 },
                992: { slidesPerView: 3,     spaceBetween: 20 },
                1280:{ slidesPerView: 4,     spaceBetween: 22 },
            },
        });
    </script>
@endpush
