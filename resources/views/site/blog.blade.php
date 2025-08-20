@extends('site.layouts.master')

@section('title')Tin tức và sự kiện - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link rel='stylesheet' id='elementor-frontend-css' href='/site/wp-content/plugins/elementor/assets/css/frontend.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='elementor-post-8291-css' href='/site/wp-content/uploads/elementor/css/post-82912e86.css?ver=1753732587' media='all' />
@endsection

@section('content')
    <style>
        /* Nền full chiều rộng cho container có ID elementor-element-385a6c2 */
        .elementor-element-031b016.e-con {
            width: 100vw !important; /* trải ra toàn viewport */
            max-width: 100vw !important;
            margin-left: calc(50% - 50vw) !important; /* phá khung boxed, canh giữa */
            margin-right: calc(50% - 50vw) !important;
        }

        .elementor-element-031b016 {
            background-size: cover !important; /* phủ kín, giữ tỉ lệ */
            background-position: center !important;
            background-repeat: no-repeat !important;
            /* optional: tối thiểu chiều cao để thấy nền */
        }

        /* Desktop (>=1025px) */
        @media (min-width: 1025px) {
            .elementor-element-031b016 {
                min-height: 400px;
            }
        }

        /* Tablet & Mobile (<=1024px) – bỏ min-height */
        @media (max-width: 1024px) {
            .elementor-element-031b016 {
                min-height: 0; /* hoặc initial/auto */
            }
        }
    </style>

    <div data-elementor-type="product-archive" data-elementor-id="8291"
         class="elementor elementor-8291 elementor-8273 elementor-location-archive product"
         data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-031b016 e-flex e-con-boxed e-con e-parent" data-id="031b016"
             data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
             style="background-image: url({{ $categoryBlog->image->path ?? '' }})"
        >
            <div class="e-con-inner">
                <div
                    class="elementor-element elementor-element-100bd24 elementor-widget elementor-widget-theme-archive-title elementor-page-title elementor-widget-heading"
                    data-id="100bd24" data-element_type="widget" data-widget_type="theme-archive-title.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">{{ $categoryBlog->name }}</h1></div>
                </div>
                <div
                    class="elementor-element elementor-element-5e5bd89 elementor-widget elementor-widget-woocommerce-breadcrumb"
                    data-id="5e5bd89" data-element_type="widget" data-widget_type="woocommerce-breadcrumb.default">
                    <div class="elementor-widget-container">
                        <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('front.home-page') }}">Trang chủ</a>&nbsp;&#47;&nbsp;<a
                                href="#">Tin tức</a>&nbsp;&#47;&nbsp;{{ $categoryBlog->name }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="elementor-element elementor-element-4edf911 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con-boxed e-con e-parent"
            data-id="4edf911" data-element_type="container">
            <div class="e-con-inner">
                <div
                    class="elementor-element elementor-element-de203fb elementor-widget elementor-widget-woocommerce-archive-description"
                    data-id="de203fb" data-element_type="widget"
                    data-widget_type="woocommerce-archive-description.default">
                    <div class="elementor-widget-container">
                        <div class="term-description"><p>1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-b714133 e-flex e-con-boxed e-con e-parent" data-id="b714133"
             data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-6ab14a5 e-con-full e-flex e-con e-child"
                     data-id="6ab14a5" data-element_type="container"
                     data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;}">
                    <div class="elementor-element elementor-element-3a0977c e-con-full e-flex e-con e-child"
                         data-id="3a0977c" data-element_type="container"
                         data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;}">
                        <div
                            class="elementor-element elementor-element-2cff98f elementor-widget elementor-widget-heading"
                            data-id="2cff98f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Danh mục</h2></div>
                        </div>
                        <div
                            class="elementor-element elementor-element-e7150be elementor-widget elementor-widget-shortcode"
                            data-id="e7150be" data-element_type="widget" data-widget_type="shortcode.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-shortcode">
                                    <ul class="subcategories-list">
                                        @foreach($categories as $cate)
                                            <li><a href="{{ route('front.blogs', $cate->slug) }}">{{ $cate->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        :root{
                            --red-600:#D32F2F;
                            --red-500:#E53935;
                            --red-50:#FFEBEE;
                            --text:#222;
                            --muted:#666;
                            --border:#eee;
                            --radius:14px;
                        }

                        /* Khối + căn giữa */

                        .blog-container{ max-width: clamp(960px, 92vw, 1200px); margin-inline:auto; padding-inline:12px; }
                        .section-head h2{
                            margin:0 0 16px; font-size:clamp(1.25rem,1rem + 1.2vw,1.75rem);
                            color:var(--red-600); font-weight:700; line-height:1.2;
                        }
                        .section-head h2::after{ content:""; display:block; width:56px; height:3px; background:var(--red-600); border-radius:2px; margin-top:8px; opacity:.9; }

                        /* Lưới 3 cột (desktop), responsive 2 / 1 cột */
                        .blog-grid{
                            display:grid; gap:20px;
                            grid-template-columns: repeat(3, minmax(0, 1fr));
                        }
                        @media (max-width: 992px){
                            .blog-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
                        }
                        @media (max-width: 600px){
                            .blog-grid{ grid-template-columns: 1fr; }
                        }

                        /* Card đồng đều chiều cao */
                        .blog-card{
                            display:grid; grid-template-rows: auto 1fr auto; /* Ảnh | Nội dung | Meta */
                            background:#fff; border:1px solid var(--border); border-radius:var(--radius);
                            overflow:hidden; height:100%;
                            box-shadow:0 8px 24px rgba(0,0,0,.05);
                            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
                        }
                        .blog-card:hover{ transform:translateY(-2px); box-shadow:0 12px 28px rgba(229,57,53,.15); border-color:var(--red-50); }

                        /* Ảnh 16:9 – không kéo dài */
                        .blog-card__image{ position:relative; width:100%; aspect-ratio:16/9; background:var(--red-50); overflow:hidden; }
                        .blog-card__image img{
                            position:absolute; inset:0; width:100%; height:100%; object-fit:cover; display:block; animation:none !important;
                            transition: transform .5s ease;
                        }
                        .blog-card:hover .blog-card__image img{ transform:scale(1.03); }
                        @supports not (aspect-ratio: 1 / 1){
                            .blog-card__image{ height:0; padding-top:56.25%; }
                            .blog-card__image img{ position:absolute; inset:0; }
                        }

                        .blog-card__body{ padding:14px 16px 8px; min-width:0; }
                        .blog-card__title{
                            margin:0 0 8px; font-size:1.05rem; line-height:1.35; color:var(--text);
                            display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;
                        }
                        .blog-card__title a{ color:inherit; text-decoration:none; }
                        .blog-card__title a:hover{ color:var(--red-600); }

                        .blog-card__excerpt{
                            margin:0; color:var(--muted); font-size:.95rem; line-height:1.5;
                            display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical; overflow:hidden;
                            min-height: calc(1.5em * 3); /* giữ độ cao ổn định */
                        }

                        .blog-card__meta{
                            padding:10px 16px 14px; border-top:1px solid var(--border);
                            display:flex; align-items:center; justify-content:space-between; gap:10px;
                        }
                        .post-tags{ display:flex; flex-wrap:wrap; gap:6px; }
                        .post-tags .tag{
                            display:inline-block; padding:4px 8px; border-radius:999px;
                            background:var(--red-50); color:var(--red-600); font-size:.78rem;
                            border:1px solid rgba(211,47,47,.15); white-space:nowrap;
                        }
                        .blog-card__time{ color:#888; font-size:.8rem; white-space:nowrap; }

                        /* Phân trang tone đỏ (áp dụng cho Laravel {{ $blogs->links() }}) */
                        .pager{ margin-top:20px; display:flex; justify-content:center; }
                        .pagination{ display:flex; gap:8px; flex-wrap:wrap; }
                        .page-link{
                            display:inline-flex; align-items:center; justify-content:center;
                            min-width:36px; height:36px; padding:0 10px; border-radius:10px;
                            border:1px solid var(--border); background:#fff; color:var(--text); text-decoration:none; font-size:.95rem;
                        }
                        .page-item.active .page-link{ background:var(--red-600); border-color:var(--red-600); color:#fff; }
                        .page-link:hover{ border-color:var(--red-600); color:var(--red-600); }
                        .page-item.disabled .page-link{ opacity:.45; pointer-events:none; }
                    </style>
                    <div class="elementor-element elementor-element-ab1580c e-con-full e-flex e-con e-child"
                         data-id="ab1580c" data-element_type="container">

                        <section class="blog-section">
                            <div class="blog-container">
                                <header class="section-head">
                                    <h2>{{ $categoryBlog->name }}</h2>
                                </header>

                                <div class="blog-grid">
                                    @foreach($blogs as $blog)
                                        <article class="blog-card">
                                            <a class="blog-card__image" href="{{ route('front.blogDetail', $blog->slug) }}">
                                                <img src="{{ $blog->image->path ?? '' }}" alt="{{ $blog->name }}" loading="lazy">
                                            </a>
                                            <div class="blog-card__body">
                                                <h3 class="blog-card__title">
                                                    <a href="{{ route('front.blogDetail', $blog->slug) }}">{{ $blog->name }}</a>
                                                </h3>
                                                <p class="blog-card__excerpt">
                                                    {{ $blog->intro }}
                                                </p>
                                            </div>
                                            <div class="blog-card__meta">
                                                <div class="post-tags">
                                                    <span class="tag">Admin</span>
                                                </div>
                                                <time class="blog-card__time" datetime="">{{ \Illuminate\Support\Carbon::parse($blog->created_at)->format('d/m/Y') }}</time>
                                            </div>
                                        </article>
                                    @endforeach


                                </div>

                                {{ $blogs->links('site.pagination.paginate2') }}


                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')


@endpush
