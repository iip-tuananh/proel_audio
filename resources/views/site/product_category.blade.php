@extends('site.layouts.master')

@section('title'){{ $category->name }} -  {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <link rel='stylesheet' id='elementor-frontend-css' href='/site/wp-content/plugins/elementor/assets/css/frontend.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='elementor-post-8289-css' href='/site/wp-content/uploads/elementor/css/post-8289f06f.css?ver=1753734067' media='all' />
@endsection

@section('content')
    <style>
        /* Nền full chiều rộng cho container có ID elementor-element-385a6c2 */
        .elementor-element-2acf965.e-con{
            width: 100vw !important;                 /* trải ra toàn viewport */
            max-width: 100vw  !important;
            margin-left: calc(50% - 50vw)  !important; /* phá khung boxed, canh giữa */
            margin-right: calc(50% - 50vw)  !important;
        }

        .elementor-element-2acf965{
            background-size: cover  !important;       /* phủ kín, giữ tỉ lệ */
            background-position: center  !important;
            background-repeat: no-repeat  !important;
            /* optional: tối thiểu chiều cao để thấy nền */
        }

        /* Desktop (>=1025px) */
        @media (min-width: 1025px){
            .elementor-element-2acf965{ min-height: 400px; }
        }

        /* Tablet & Mobile (<=1024px) – bỏ min-height */
        @media (max-width: 1024px){
            .elementor-element-2acf965{ min-height: 0; /* hoặc initial/auto */ }
        }
    </style>
    <div data-elementor-type="product-archive" data-elementor-id="8289"
         class="elementor elementor-8289 elementor-8263 elementor-location-archive product"
         data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-2acf965 e-flex e-con-boxed e-con e-parent" data-id="2acf965"
             data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
             style="background-image: url({{ $category->banner->path ?? '' }})">
            <div class="e-con-inner">
                <div
                    class="elementor-element elementor-element-db90cd2 elementor-widget elementor-widget-theme-archive-title elementor-page-title elementor-widget-heading"
                    data-id="db90cd2" data-element_type="widget" data-widget_type="theme-archive-title.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">{{ $category->name }}</h1></div>
                </div>
                <div
                    class="elementor-element elementor-element-c68cac6 elementor-widget elementor-widget-woocommerce-breadcrumb"
                    data-id="c68cac6" data-element_type="widget" data-widget_type="woocommerce-breadcrumb.default">
                    <div class="elementor-widget-container">
                        <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a
                                href="{{ route('front.home-page') }}">Trang chủ</a>&nbsp;&#47;&nbsp;{{ $category->name }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-588a4d2 e-flex e-con-boxed e-con e-parent" data-id="588a4d2"
             data-element_type="container">
            <div class="e-con-inner">
            </div>
        </div>
        <div class="elementor-element elementor-element-4bc044f e-flex e-con-boxed e-con e-parent" data-id="4bc044f"
             data-element_type="container">
            <div class="e-con-inner">
                <div
                    class="elementor-element elementor-element-38c100c elementor-widget elementor-widget-ucaddon_woocommerce_category_grid"
                    data-id="38c100c" data-element_type="widget"
                    data-widget_type="ucaddon_woocommerce_category_grid.default">
                    <div class="elementor-widget-container">

                        <!-- start Woo Category Grid -->
                        <style>/* widget: Woo Category Grid */


                            #uc_woocommerce_category_grid_elementor_38c100c * {
                                box-sizing: border-box;
                            }

                            .uc_post_grid_style_one .uc_post_grid_style_one_item {
                                overflow: hidden;
                                position: relative;
                            }

                            .uc_post_grid_style_one .uc_post_grid_style_one_image {
                                width: 100%;
                                overflow: hidden;
                                display: block;
                            }

                            .uc_post_grid_style_one .uc_post_image {
                                background-position: center center;
                                background-repeat: no-repeat;
                                display: block;
                                transition: all 0.25s ease-in-out;
                            }

                            .uc_post_grid_style_one .ue_taxonomy_image {
                                background-color: white;
                                padding: 16px;
                            }

                            .uc_post_grid_style_one .ue_taxonomy_image .uc-term-image {
                                width: 100%;
                                height: 100%;
                            }

                            .uc_post_grid_style_one .uc_title {
                                font-size: 21px;
                            }

                            #uc_woocommerce_category_grid_elementor_38c100c a.uc_btn {
                                text-decoration: none;
                                display: block;
                            }


                            #uc_woocommerce_category_grid_elementor_38c100c.uc_post_grid_style_one .uc_post_grid_style_one_wrap {
                                display: grid;
                            }


                            #uc_woocommerce_category_grid_elementor_38c100c .uc_post_grid_style_one_item_num_posts_spacer {
                                display: inline-block;
                            }


                        </style>

                        <div class="uc_post_grid_style_one" id="uc_woocommerce_category_grid_elementor_38c100c"
                             style="direction:ltr;text-align:center;">
                            <div class="uc_post_grid_style_one_wrap">
                                <!-- start item -->
                                @foreach($category->childs as $childCate)
                                    <div class="uc_post_grid_style_one_item ue-grid-item-woo">
                                        <div>
                                            <a class="uc_post_grid_style_one_image" href="{{ route('front.getListProduct', $childCate->slug) }}"
                                               target="_self">


                                                <div class="uc_post_image"
                                                     style="background-image: url({{ $childCate->image->path ?? '' }});"></div>


                                            </a>
                                        </div>
                                        <div class="uc_content">
                                            <div>

                                                <div class="uc_title"><a href="{{ route('front.getListProduct', $childCate->slug) }}">{{ $childCate->name }}</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                <!-- end item -->
                            </div>
                        </div>
                        <!-- end Woo Category Grid -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')


@endpush
