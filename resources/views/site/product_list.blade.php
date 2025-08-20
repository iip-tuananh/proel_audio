@extends('site.layouts.master')

@section('title'){{ $category->name }} -  {{ $config->web_title }}@endsection
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
             style="background-image: url({{ $category->banner->path ?? '' }})"
        >
            <div class="e-con-inner">
                <div
                    class="elementor-element elementor-element-100bd24 elementor-widget elementor-widget-theme-archive-title elementor-page-title elementor-widget-heading"
                    data-id="100bd24" data-element_type="widget" data-widget_type="theme-archive-title.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">{{ $category->name }}</h1></div>
                </div>
                <div
                    class="elementor-element elementor-element-5e5bd89 elementor-widget elementor-widget-woocommerce-breadcrumb"
                    data-id="5e5bd89" data-element_type="widget" data-widget_type="woocommerce-breadcrumb.default">
                    <div class="elementor-widget-container">
                        <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('front.home-page') }}">Trang chủ</a>&nbsp;&#47;&nbsp;<a
                                href="{{ route('front.getChildCategory', $cateParent->slug) }}">{{ $cateParent->name }}</a>&nbsp;&#47;&nbsp;{{ $category->name }}
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
                                <h2 class="elementor-heading-title elementor-size-default">{{ $cateParent->name }}</h2></div>
                        </div>
                        <div
                            class="elementor-element elementor-element-e7150be elementor-widget elementor-widget-shortcode"
                            data-id="e7150be" data-element_type="widget" data-widget_type="shortcode.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-shortcode">
                                    <ul class="subcategories-list">
                                        @foreach($cateParent->childs as $child)
                                            <li><a href="{{ route('front.getListProduct', $child->slug) }}">{{ $child->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ab1580c e-con-full e-flex e-con e-child"
                         data-id="ab1580c" data-element_type="container">
                        <div
                            class="elementor-element elementor-element-083a068 elementor-grid-tablet-3 elementor-grid-mobile-2 elementor-posts--thumbnail-top elementor-grid-3 elementor-widget elementor-widget-posts"
                            data-id="083a068" data-element_type="widget"
                            data-settings="{&quot;custom_columns_tablet&quot;:&quot;3&quot;,&quot;custom_columns_mobile&quot;:&quot;2&quot;,&quot;custom_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;custom_columns&quot;:&quot;3&quot;,&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;custom_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="posts.custom">
                            <div class="elementor-widget-container">
                                <div
                                    class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom"
                                    data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:1,&quot;load_method&quot;:&quot;loadmore&quot;,&quot;widget_id&quot;:&quot;083a068&quot;,&quot;post_id&quot;:7312,&quot;theme_id&quot;:8291,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">

                                    @foreach($products as $product)
                                        <article id="post-7363"
                                                 class="elementor-post elementor-grid-item ecs-post-loop post-7363 product type-product status-publish has-post-thumbnail product_cat-amplifiers-en product_cat-dpx-series-en product_cat-sound-systems-en product_tag-bar-restaurant-en product_tag-live-performance-en product_tag-proelca first instock product-type-simple">
                                            <div class="ecs-link-wrapper"
                                                 data-href="{{ route('front.getProductDetail', $product->slug) }}">
                                                <div data-elementor-type="loop" data-elementor-id="1471"
                                                     class="elementor elementor-1471 elementor-1250 elementor-location-archive post-7363 product type-product status-publish has-post-thumbnail product_cat-amplifiers-en product_cat-dpx-series-en product_cat-sound-systems-en product_tag-bar-restaurant-en product_tag-live-performance-en product_tag-proelca  instock product-type-simple"
                                                     data-elementor-post-type="elementor_library">
                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-6e56eaa6 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                        data-id="6e56eaa6" data-element_type="section"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-narrow">
                                                            <div
                                                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e618e2e"
                                                                data-id="5e618e2e" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <!-- dce invisible element a881411 -->
                                                                    <div
                                                                        class="elementor-element elementor-element-5ee85a7e elementor-widget elementor-widget-image"
                                                                        data-id="5ee85a7e" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <a href="{{ route('front.getProductDetail', $product->slug) }}">
                                                                                <img
                                                                                    src="{{ $product->image->path ?? '' }}"
                                                                                    title="DPX1700PFC_34DX"
                                                                                    alt="DPX1700PFC_34DX" loading="lazy"/>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-419a4a90 elementor-widget elementor-widget-heading"
                                                                        data-id="419a4a90" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                                <a href="{{ route('front.getProductDetail', $product->slug) }}">{{ $product->name }}</a>
                                                                            </h2></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </article>

                                    @endforeach
                                </div>


                                {{ $products->links('site.pagination.paginate2') }}

                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')


@endpush
