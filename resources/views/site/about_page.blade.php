@extends('site.layouts.master')

@section('title')Về chúng tôi - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')

    <link rel='stylesheet' id='elementor-post-4932-css' href='/site/wp-content/uploads/elementor/css/post-4932cf0f.css?ver=1753763448' media='all' />

@endsection

@section('content')
    <main id="content" class="site-main post-4932 page type-page status-publish hentry">

        <style>
            /* Khung nội dung thu gọn & căn giữa */
            .about-narrow{
                margin-top: 50px;
                /* rộng tối đa 920px, nhưng không vượt quá 92vw */
                max-width: min(1330px, 92vw);
                margin-inline: auto;                 /* căn giữa */
                padding-inline: clamp(12px, 4vw, 24px); /* đệm 2 bên để không dính mép */
                box-sizing: border-box;
                line-height: 1.65;
                color: #222;
                overflow-wrap: anywhere;             /* tránh tràn từ quá dài */
            }

            /* Ảnh, video, iframe… tự co giãn theo khung */
            .about-narrow img,
            .about-narrow video,
            .about-narrow iframe{
                max-width: 100%;
                height: auto;
                display: block;
            }

            /* Bảng to không vỡ layout trên mobile */
            .about-narrow table{
                width: 100%;
                border-collapse: collapse;
            }
            .about-narrow .table-scroll,
            .about-narrow :where(.wp-block-table){
                overflow-x: auto;
            }

            /* Khoảng cách chữ cho dễ đọc */
            .about-narrow p{ margin: 0 0 1em; }
            .about-narrow h1, .about-narrow h2, .about-narrow h3{
                line-height: 1.3; margin: .6em 0 .4em;
            }

            /* Responsive tinh chỉnh chữ & đệm trên mobile */
            @media (max-width: 600px){
                .about-narrow{ padding-inline: clamp(14px, 6vw, 20px); }
                .about-narrow h1{ font-size: 1.35rem; }
                .about-narrow h2{ font-size: 1.2rem; }
                .about-narrow h3{ font-size: 1.05rem; }
            }

        </style>
        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="4932" class="elementor elementor-4932 elementor-1381"
                 data-elementor-post-type="page">
                <div class="elementor-element elementor-element-89024e9 e-flex e-con-boxed e-con e-parent" style="background-image: url({{ $about->image_banner->path ?? '' }})"
                     data-id="89024e9" data-element_type="container"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-2722250 elementor-widget elementor-widget-heading"
                            data-id="2722250" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Về chúng tôi</h2></div>
                        </div>
                    </div>
                </div>


                <div class="elementor-widget-container about-narrow">
                    {!! $about->body_text !!}
                </div>

            </div>
            <div class="post-tags">
            </div>
        </div>


    </main>
@endsection

@push('scripts')


@endpush
