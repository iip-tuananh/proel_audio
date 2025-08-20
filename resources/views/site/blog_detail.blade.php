@extends('site.layouts.master')

@section('title'){{ $blog->name }} - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')

    <link rel='stylesheet' id='widget-woocommerce-product-images-css'
          href='/site/wp-content/plugins/elementor-pro/assets/css/widget-woocommerce-product-images.min862f.css?ver=3.30.1'
          media='all'/>
    <link rel='stylesheet' id='elementor-post-1469-css'
          href='/site/wp-content/uploads/elementor/css/post-14696f42.css?ver=1753732496' media='all'/
    <link rel='stylesheet' id='elementor-gf-local-lato-css'
          href='/site/wp-content/uploads/elementor/google-fonts/css/lato97cd.css?ver=1745850178' media='all'/>


@endsection

@section('content')
    <div data-elementor-type="product" data-elementor-id="1469"
         class="elementor elementor-1469 elementor-1281 elementor-location-single post-7381 product type-product status-publish has-post-thumbnail product_cat-diva-series-en product_cat-loudspeakers-en product_cat-sound-systems-en product_tag-bar-restaurant-en product_tag-deejay-en product_tag-live-performance-en first instock product-type-simple product"
         data-elementor-post-type="elementor_library">

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-58b8ebfb schedaPDF2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="58b8ebfb" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-extended">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-319b1c6c PDFC"
                     data-id="319b1c6c" data-element_type="column"
                     data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;hide&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-52c8bef5 elementor-widget elementor-widget-heading"
                             data-id="52c8bef5" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">{{ $blog->name }}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-415d5bbc tclear elementor-widget elementor-widget-text-editor"
                             data-id="415d5bbc" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                {!! $blog->body !!}

                            </div>
                        </div>
                    </div>
                </div>

                {{--                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1651d721"--}}
                {{--                     data-id="1651d721" data-element_type="column" data-html2canvas-ignore="true">--}}
                {{--                    <div class="elementor-widget-wrap elementor-element-populated">--}}
                {{--                        <div class="elementor-element elementor-element-33dee055 elementor-widget elementor-widget-heading"--}}
                {{--                             data-id="33dee055" data-element_type="widget" data-widget_type="heading.default">--}}
                {{--                            <div class="elementor-widget-container">--}}
                {{--                                <h2 class="elementor-heading-title elementor-size-default">DOWNLOADS</h2></div>--}}
                {{--                        </div>--}}
                {{--                        <div class="elementor-element elementor-element-734000f2 elementor-align-left elementor-widget elementor-widget-button"--}}
                {{--                             data-id="734000f2" data-element_type="widget"--}}
                {{--                             data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;}"--}}
                {{--                             data-widget_type="button.default">--}}
                {{--                            <div class="elementor-widget-container">--}}
                {{--                                <div class="elementor-button-wrapper">--}}
                {{--                                    <a class="elementor-button elementor-button-link elementor-size-sm"--}}
                {{--                                       href="https://contents.proel.com/image/data/documents/pdf/96MAN0158-DIVA12A-DIVA15A-de.pdf"--}}
                {{--                                       target="_blank" download="">--}}
                {{--						<span class="elementor-button-content-wrapper">--}}
                {{--						<span class="elementor-button-icon">--}}
                {{--				<svg aria-hidden="true" class="e-font-icon-svg e-fas-file-download" viewBox="0 0 384 512"--}}
                {{--                     xmlns="http://www.w3.org/2000/svg"><path--}}
                {{--                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z"></path></svg>			</span>--}}
                {{--									<span class="elementor-button-text">User's Manual German</span>--}}
                {{--					</span>--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="elementor-element elementor-element-3ee6784f elementor-align-left elementor-widget elementor-widget-button"--}}
                {{--                             data-id="3ee6784f" data-element_type="widget"--}}
                {{--                             data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;}"--}}
                {{--                             data-widget_type="button.default">--}}
                {{--                            <div class="elementor-widget-container">--}}
                {{--                                <div class="elementor-button-wrapper">--}}
                {{--                                    <a class="elementor-button elementor-button-link elementor-size-sm"--}}
                {{--                                       href="https://contents.proel.com/image/data/documents/pdf/96MAN0158-DIVA12A-DIVA15A-eng_ita_rev3.pdf"--}}
                {{--                                       target="_blank">--}}
                {{--						<span class="elementor-button-content-wrapper">--}}
                {{--						<span class="elementor-button-icon">--}}
                {{--				<svg aria-hidden="true" class="e-font-icon-svg e-fas-file-download" viewBox="0 0 384 512"--}}
                {{--                     xmlns="http://www.w3.org/2000/svg"><path--}}
                {{--                        d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z"></path></svg>			</span>--}}
                {{--									<span class="elementor-button-text">User's Manual</span>--}}
                {{--					</span>--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <!-- dce invisible element 9e1d96a --><!-- dce invisible element 7072ab89 -->--}}
                {{--                        <div class="elementor-element elementor-element-171d9869 elementor-align-left elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button"--}}
                {{--                             data-id="171d9869" data-element_type="widget" id="cmdPDF" data-widget_type="button.default">--}}
                {{--                            <div class="elementor-widget-container">--}}
                {{--                                <div class="elementor-button-wrapper">--}}
                {{--                                    <a class="elementor-button elementor-button-link elementor-size-sm" href="#renderpdf">--}}
                {{--						<span class="elementor-button-content-wrapper">--}}
                {{--						<span class="elementor-button-icon">--}}
                {{--				<svg aria-hidden="true" class="e-font-icon-svg e-fas-file-pdf" viewBox="0 0 384 512"--}}
                {{--                     xmlns="http://www.w3.org/2000/svg"><path--}}
                {{--                        d="M181.9 256.1c-5-16-4.9-46.9-2-46.9 8.4 0 7.6 36.9 2 46.9zm-1.7 47.2c-7.7 20.2-17.3 43.3-28.4 62.7 18.3-7 39-17.2 62.9-21.9-12.7-9.6-24.9-23.4-34.5-40.8zM86.1 428.1c0 .8 13.2-5.4 34.9-40.2-6.7 6.3-29.1 24.5-34.9 40.2zM248 160h136v328c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V24C0 10.7 10.7 0 24 0h200v136c0 13.2 10.8 24 24 24zm-8 171.8c-20-12.2-33.3-29-42.7-53.8 4.5-18.5 11.6-46.6 6.2-64.2-4.7-29.4-42.4-26.5-47.8-6.8-5 18.3-.4 44.1 8.1 77-11.6 27.6-28.7 64.6-40.8 85.8-.1 0-.1.1-.2.1-27.1 13.9-73.6 44.5-54.5 68 5.6 6.9 16 10 21.5 10 17.9 0 35.7-18 61.1-61.8 25.8-8.5 54.1-19.1 79-23.2 21.7 11.8 47.1 19.5 64 19.5 29.2 0 31.2-32 19.7-43.4-13.9-13.6-54.3-9.7-73.6-7.2zM377 105L279 7c-4.5-4.5-10.6-7-17-7h-6v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-74.1 255.3c4.1-2.7-2.5-11.9-42.8-9 37.1 15.8 42.8 9 42.8 9z"></path></svg>			</span>--}}
                {{--									<span class="elementor-button-text">Download PDF Sheet</span>--}}
                {{--					</span>--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="elementor-element elementor-element-ae399e4 elementor-align-left elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button"--}}
                {{--                             data-id="ae399e4" data-element_type="widget" id="cmdPRINT" data-widget_type="button.default">--}}
                {{--                            <div class="elementor-widget-container">--}}
                {{--                                <div class="elementor-button-wrapper">--}}
                {{--                                    <a class="elementor-button elementor-button-link elementor-size-sm" href="#print">--}}
                {{--						<span class="elementor-button-content-wrapper">--}}
                {{--						<span class="elementor-button-icon">--}}
                {{--				<svg aria-hidden="true" class="e-font-icon-svg e-fas-print" viewBox="0 0 512 512"--}}
                {{--                     xmlns="http://www.w3.org/2000/svg"><path--}}
                {{--                        d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg>			</span>--}}
                {{--									<span class="elementor-button-text">Print Sheet</span>--}}
                {{--					</span>--}}
                {{--                                    </a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="elementor-element elementor-element-41d5131f elementor-widget elementor-widget-html"--}}
                {{--                             data-id="41d5131f" data-element_type="widget" data-widget_type="html.default">--}}
                {{--                            <div class="elementor-widget-container">--}}
                {{--                                <div id="editorPDF"></div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="elementor-element elementor-element-08ec301 elementor-widget elementor-widget-image"--}}
                {{--                             data-id="08ec301" data-element_type="widget"--}}
                {{--                             data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;}"--}}
                {{--                             data-widget_type="image.default">--}}
                {{--                            <div class="elementor-widget-container">--}}
                {{--                                <img loading="lazy" width="300" height="300"--}}
                {{--                                     src="/site/wp-content/uploads/2023/01/garanzia_sound-986x984-1-300x300.png"--}}
                {{--                                     class="attachment-medium size-medium wp-image-4845" alt=""--}}
                {{--                                     srcset="https://soundsystems.proel.com/wp-content/uploads/2023/01/garanzia_sound-986x984-1-300x300.png 300w, https://soundsystems.proel.com/wp-content/uploads/2023/01/garanzia_sound-986x984-1-150x150.png 150w, https://soundsystems.proel.com/wp-content/uploads/2023/01/garanzia_sound-986x984-1-768x766.png 768w, https://soundsystems.proel.com/wp-content/uploads/2023/01/garanzia_sound-986x984-1-600x599.png 600w, https://soundsystems.proel.com/wp-content/uploads/2023/01/garanzia_sound-986x984-1-100x100.png 100w, https://soundsystems.proel.com/wp-content/uploads/2023/01/garanzia_sound-986x984-1.png 986w"--}}
                {{--                                     sizes="(max-width: 300px) 100vw, 300px"/></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </section>

        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-57e5730b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="57e5730b" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1624ed98"
                     data-id="1624ed98" data-element_type="column"
                     data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2b5b4cdd elementor-widget elementor-widget-heading"
                             data-id="2b5b4cdd" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Bài viết khác</h2></div>
                        </div>
                        <div class="elementor-element elementor-element-a0edd6c elementor-grid-2 elementor-grid-mobile-2 elementor-posts--thumbnail-top elementor-grid-tablet-2 elementor-widget elementor-widget-posts"
                             data-id="a0edd6c" data-element_type="widget"
                             data-settings="{&quot;custom_columns&quot;:&quot;2&quot;,&quot;custom_columns_mobile&quot;:&quot;2&quot;,&quot;custom_post_slider&quot;:&quot;yes&quot;,&quot;custom_slides_to_show&quot;:&quot;4&quot;,&quot;custom_slides_to_scroll&quot;:&quot;1&quot;,&quot;custom_slides_to_show_mobile&quot;:&quot;1&quot;,&quot;custom_navigation&quot;:&quot;arrows&quot;,&quot;custom_infinite&quot;:&quot;no&quot;,&quot;custom_columns_tablet&quot;:&quot;2&quot;,&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;custom_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;custom_slide_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;custom_pause_on_hover&quot;:&quot;yes&quot;,&quot;custom_autoplay&quot;:&quot;yes&quot;,&quot;custom_autoplay_speed&quot;:5000,&quot;custom_speed&quot;:500,&quot;custom_direction&quot;:&quot;ltr&quot;}"
                             data-widget_type="posts.custom">
                            <div class="elementor-widget-container">
                                <div class="elementor-main-swiper swiper-container swiper">
                                    <div class="ecs-posts elementor-posts-container elementor-posts swiper-wrapper   elementor-posts--skin-custom"
                                         data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:1,&quot;load_method&quot;:&quot;&quot;,&quot;widget_id&quot;:&quot;a0edd6c&quot;,&quot;post_id&quot;:7381,&quot;theme_id&quot;:1469,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">
                                        @foreach($otherBlogs as $otherBlog)
                                            <article id="post-{{ $otherBlog->id }}"
                                                     class="elementor-post elementor-grid-item ecs-post-loop swiper-slide post-7372 product type-product status-publish has-post-thumbnail product_cat-portable-systems-en product_cat-sound-systems-en product_cat-u24-series-en product_tag-education-en product_tag-live-performance-en product_tag-sport-fitness-en  instock product-type-simple">
                                                <div data-elementor-type="loop" data-elementor-id="1248"
                                                     class="elementor elementor-1248 elementor-location-single post-7372 product type-product status-publish has-post-thumbnail product_cat-portable-systems-en product_cat-sound-systems-en product_cat-u24-series-en product_tag-education-en product_tag-live-performance-en product_tag-sport-fitness-en  instock product-type-simple"
                                                     data-elementor-post-type="elementor_library">
                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-686308ad elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                        data-id="686308ad" data-element_type="section"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-narrow">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b043617"
                                                                 data-id="2b043617" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-14ef3f39 elementor-widget elementor-widget-image"
                                                                         data-id="14ef3f39" data-element_type="widget"
                                                                         data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <a href="{{ route('front.getProductDetail', $otherBlog->slug) }}">
                                                                                <img src="{{ $otherBlog->image->path ?? '' }}"
                                                                                     title="{{ $otherBlog->name }}" alt="{{ $otherBlog->name }}"
                                                                                     loading="lazy"/> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-64b7b344 elementor-widget elementor-widget-heading"
                                                                         data-id="64b7b344" data-element_type="widget"
                                                                         data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                                <a href="{{ route('front.blogDetail', $otherBlog->slug) }}">{{ $otherBlog->name }}</a>
                                                                            </h2></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </article>
                                        @endforeach

                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev">
                                        <i class="eicon-chevron-left" aria-hidden="true"></i>
                                        <span class="elementor-screen-only">Previous</span>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next">
                                        <i class="eicon-chevron-right" aria-hidden="true"></i>
                                        <span class="elementor-screen-only">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="elementor-element elementor-element-57a344e8 schedaPDF elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-con-full e-flex e-con e-parent"
             data-id="57a344e8" data-element_type="container" id="schedaPDF"
             data-settings="{&quot;dce_visibility_event&quot;:&quot;click&quot;}">
            <div class="elementor-element elementor-element-60313834 logoScheda elementor-widget elementor-widget-image"
                 data-id="60313834" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img src="/site/wp-content/uploads/elementor/thumbs/logo-proel-sound-1-qgdcx1ywyma3824ap3bdfvcb31clb88w7age0akioo.png"
                         title="logo-proel-sound" alt="logo-proel-sound" loading="lazy"/></div>
            </div>
            <div class="elementor-element elementor-element-6c0df5fa elementor-widget elementor-widget-text-editor"
                 data-id="6c0df5fa" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    DIVA12A
                </div>
            </div>
            <div class="elementor-element elementor-element-414a613 elementor-widget elementor-widget-spacer"
                 data-id="414a613" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2d4e24d9 elementor-widget elementor-widget-text-editor"
                 data-id="2d4e24d9" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    1000W PROCESSED 12&#8243; ACTIVE SPEAKER
                </div>
            </div>
            <div class="elementor-element elementor-element-4cb25cb e-con-full e-flex e-con e-child" data-id="4cb25cb"
                 data-element_type="container">
                <div class="elementor-element elementor-element-1d2b288e e-con-full e-flex e-con e-child" data-id="1d2b288e"
                     data-element_type="container">
                    <div class="elementor-element elementor-element-28a6c41a elementor-widget elementor-widget-theme-post-featured-image elementor-widget-image"
                         data-id="28a6c41a" data-element_type="widget" data-widget_type="theme-post-featured-image.default">
                        <div class="elementor-widget-container">
                            <img loading="lazy" width="768" height="768"
                                 src="/site/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH-768x768.jpg"
                                 class="attachment-medium_large size-medium_large wp-image-7664" alt=""
                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_34_RX_HIGH.jpg 1200w"
                                 sizes="(max-width: 768px) 100vw, 768px"/></div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7bf4092a e-con-full e-flex e-con e-child" data-id="7bf4092a"
                     data-element_type="container">
                    <div class="elementor-element elementor-element-43d945c2 gallery-spacing-custom elementor-widget elementor-widget-image-gallery"
                         data-id="43d945c2" data-element_type="widget" data-widget_type="image-gallery.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-gallery">
                                <div id='gallery-1'
                                     class='gallery galleryid-7381 gallery-columns-4 gallery-size-medium_large'>
                                    <figure class='gallery-item'>
                                        <div class='gallery-icon landscape'>
                                            <img loading="lazy" width="768" height="768"
                                                 src="/site/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX-768x768.jpg"
                                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_MONITOR_34_RX.jpg 1200w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </div>
                                    </figure>
                                    <figure class='gallery-item'>
                                        <div class='gallery-icon landscape'>
                                            <img loading="lazy" width="768" height="768"
                                                 src="/site/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID-768x768.jpg"
                                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_FRONT_NOGRID.jpg 1200w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </div>
                                    </figure>
                                    <figure class='gallery-item'>
                                        <div class='gallery-icon landscape'>
                                            <img loading="lazy" width="768" height="768"
                                                 src="/site/wp-content/uploads/2024/04/DIVA12A_REAR-1-768x768.jpg"
                                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_REAR-1-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_REAR-1-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_REAR-1-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_REAR-1-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_REAR-1-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_REAR-1-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_REAR-1.jpg 1200w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </div>
                                    </figure>
                                    <figure class='gallery-item'>
                                        <div class='gallery-icon landscape'>
                                            <img loading="lazy" width="768" height="768"
                                                 src="/site/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1-768x768.jpg"
                                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/04/DIVA12A_DETAIL_U24-1.jpg 1200w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </div>
                                    </figure>
                                    <figure class='gallery-item'>
                                        <div class='gallery-icon landscape'>
                                            <img loading="lazy" width="768" height="768"
                                                 src="/site/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1-768x768.jpg"
                                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_CONTROL-PANEL-1.jpg 1200w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </div>
                                    </figure>
                                    <figure class='gallery-item'>
                                        <div class='gallery-icon landscape'>
                                            <img loading="lazy" width="768" height="768"
                                                 src="/site/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF-768x768.jpg"
                                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_34_RX_OFF.jpg 1200w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </div>
                                    </figure>
                                    <figure class='gallery-item'>
                                        <div class='gallery-icon landscape'>
                                            <img loading="lazy" width="768" height="768"
                                                 src="/site/wp-content/uploads/2024/06/DIVA12A_FRONT-768x768.jpg"
                                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                                 srcset="https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_FRONT-768x768.jpg 768w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_FRONT-300x300.jpg 300w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_FRONT-1024x1024.jpg 1024w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_FRONT-150x150.jpg 150w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_FRONT-600x600.jpg 600w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_FRONT-100x100.jpg 100w, https://soundsystems.proel.com/wp-content/uploads/2024/06/DIVA12A_FRONT.jpg 1200w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-32bb9421 elementor-widget elementor-widget-text-editor"
                 data-id="32bb9421" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p><b>DIVA12A </b>and <b>DIVA15A </b>are <b>digitally processed</b> active loudspeaker systems featuring
                        multiple inputs and a versatile <b>BLUETOOTH </b>connectivity.</p>
                    <p>Hosted in lightweight yet ultra-durable polypropylene cabinets with ergonomic handles, they combine
                        selected transducers driven with a powerful 1000W CLASS-D amplifier with SMPS, featuring high
                        headroom and an accurate dynamic control for the maximum undistorted output power.</p>
                    <p>The sophisticated pre-amp section includes an advanced processing with <b>high-performance DSP engine
                            and linear phase FIR filters</b>, for a very smooth response and high-definition sound. An intuitive
                        user’s interface with <b>LCD color display</b> and single-knob control is available for a quick
                        selection and display of the <b>5 available EQ presets </b>(MUSIC, LIVE, DJ, MONITOR, SPEECH),
                        allowing the speakers to be perfectly adapted to any kind of application. Thanks to the built-in <b>3-channel
                            mixer </b>with MIC/GUITAR/LINE input selection, HIGH and LOW EQ controls and two <b>WIRELESS USB
                            inputs </b>for the use of PROEL U24 microphone systems, the DIVA12A and DIVA15A can be used in a
                        variety of applications also without external equipment.</p>
                    <p>The <b>BLUETOOTH interface</b> allows to reproduce audio in mono streaming with a single speaker or
                        in stereo streaming with two speakers and the STEREO LINK (TWS) function.</p>
                    <ul>
                        <li>2-way active processed loudspeaker system</li>
                        <li>1” high-definition compression driver with 1.35” VC and titanium diaphragm</li>
                        <li>Wide-coverage 90° x 60° constant directivity horn</li>
                        <li>12” long-excursion woofer with 2” voice coil</li>
                        <li>High-efficiency 1000 W peak Class D power amplifier with SMPS</li>
                        <li>Built-in 3-channel mixer with MIC/LINE inputs and HIGH &amp; LOW EQ controls</li>
                        <li>High-definition DSP with 24-bit converters and FIR filters</li>
                        <li>5 DSP presets (MUSIC, LIVE, DJ, MONITOR, SPEECH)</li>
                        <li>BLUETOOTH audio interface with STEREO LINK</li>
                        <li>Color LCD display for the DSP editing</li>
                        <li>SPL MAX: 127 dB</li>
                        <li>Frequency response: 50 Hz &#8211; 20 kHz</li>
                        <li>Lightweight, compact and ultra-durable PP cabinet</li>
                        <li>2 ergonomic handles for effortless transportation</li>
                        <li>Slanted shape for the use as a stage monitor</li>
                        <li>Four M10 flying points</li>
                    </ul>
                </div>
            </div>
            <div class="elementor-element elementor-element-72888c6e elementor-widget elementor-widget-spacer"
                 data-id="72888c6e" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
                        <div class="elementor-spacer-inner"></div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-493cae14 tclear elementor-widget elementor-widget-text-editor"
                 data-id="493cae14" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <table border="0" cellpadding="0" cellspacing="0" width="836" style="width: 627pt">
                        <colgroup>
                            <col width="217" style="width: 163pt">
                        </colgroup>
                        <colgroup>
                            <col width="619" style="width: 464pt">
                        </colgroup>
                        <tbody>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" width="217" style="height: 15.75pt;width: 163pt"><span
                                    style="font-size: 14px">System type</span></td>
                            <td class="xl65" width="619" style="width: 464pt"><span style="font-size: 14px">2-way vented enclosure</span>
                            </td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">High Frequency Device</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">1’’ compression driver with 1.35&#8243; voice coil and titanium diaphragm</span>
                            </td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Low Frequency Device</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">12&#8243; woofer with 2&#8243; VC</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Angular Coverage</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">90° H x 60° V</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Total Peak Power</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">1000 W</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">HF Amplifier Continuous Power</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">100 W Class AB     </span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">LF Amplifier Continuous Power</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">400 W Class D</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Power Supply</span></td>
                            <td class="xl65"><span style="font-size: 14px">SMPS</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">System Processing</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">DSP</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Frequency Response</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">50 Hz &#8211; 20 kHz</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Max SPL</span></td>
                            <td class="xl65"><span style="font-size: 14px">127 dB</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Inputs</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">2 x MIC/LINE (COMBO), 1 X STEREO LINE (MINIJACK), 2 x USB WIRELESS</span>
                            </td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Outputs</span></td>
                            <td class="xl65"><span style="font-size: 14px">1 x selectable MIX OUT / CH1 LINK (M-XLR)</span>
                            </td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Controls</span></td>
                            <td class="xl65"><span style="font-size: 14px">CHANNEL LEVEL, INPUT SELECTOR, HIGH &amp; LOW EQ, ROTARY PUSH ENCODER, COLOR LCD</span>
                            </td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Bluetooth</span></td>
                            <td class="xl65"><span
                                    style="font-size: 14px">Version 5.0, Audio Streaming, STEREO LINK (TWS)</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Power Supply</span></td>
                            <td class="xl65"><span style="font-size: 14px">100-120 V~ or 220-240 V~ at 50/60 Hz with self-switch</span>
                            </td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Rated Consumption*</span>
                            </td>
                            <td class="xl69"><span style="font-size: 14px">300 W</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Floor Monitor Angle</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">45° </span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Flying System</span></td>
                            <td class="xl65"><span style="font-size: 14px">4 x M10 &#8211; top/bottom</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Cabinet Material</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">Polypropylene</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Handles</span></td>
                            <td class="xl65"><span style="font-size: 14px">1 x top, 1 x side</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span
                                    style="font-size: 14px">Mounting Pole</span></td>
                            <td class="xl65"><span style="font-size: 14px">1 x bottom</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Dimensions (W x H x D)</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">364 x 617 x 346 mm</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"><span style="font-size: 14px">Weight</span>
                            </td>
                            <td class="xl65"><span style="font-size: 14px">16.0 kg (35.3 lb)</span></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td height="21" class="xl66" style="height: 15.75pt"></td>
                            <td class="xl65"></td>
                        </tr>
                        <tr style="height: 15.75pt">
                            <td colspan="2" height="21" class="xl67" style="height: 15.75pt"><span style="font-size: 14px">* Rated consumption is measured with pink noise with a crest factor of 12 dB, this can be considered a standard music program.</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-fc03578 e-flex e-con-boxed e-con e-parent" data-id="fc03578"
             data-element_type="container">
            <div class="e-con-inner">
            </div>
        </div>

    </div>

@endsection

@push('scripts')






    <div class="pswp" tabindex="-1" role="dialog" aria-modal="true" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                    <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>




@endpush
