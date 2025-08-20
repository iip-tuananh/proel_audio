@extends('site.layouts.master')

@section('title')
@endsection
@section('description')
@endsection
@section('image')
@endsection

@section('css')

<link rel='stylesheet' id='elementor-post-1473-css' href='/site/wp-content/uploads/elementor/css/post-147315bf.css?ver=1753732572' media='all' />

<link rel='stylesheet' id='elementor-frontend-css' href='/site/wp-content/plugins/elementor/assets/css/frontend.min55cb.css?ver=3.30.3' media='all' />

@endsection

@section('content')
    <style>
        /* Nền full chiều rộng cho container có ID elementor-element-385a6c2 */
        .elementor-element-385a6c2.e-con{
            width: 100vw !important;                 /* trải ra toàn viewport */
            max-width: 100vw  !important;
            margin-left: calc(50% - 50vw)  !important; /* phá khung boxed, canh giữa */
            margin-right: calc(50% - 50vw)  !important;
        }

        .elementor-element-385a6c2{
            background-size: cover  !important;       /* phủ kín, giữ tỉ lệ */
            background-position: center  !important;
            background-repeat: no-repeat  !important;
            /* optional: tối thiểu chiều cao để thấy nền */
        }

        /* Desktop (>=1025px) */
        @media (min-width: 1025px){
            .elementor-element-385a6c2{ min-height: 400px; }
        }

        /* Tablet & Mobile (<=1024px) – bỏ min-height */
        @media (max-width: 1024px){
            .elementor-element-385a6c2{ min-height: 0; /* hoặc initial/auto */ }
        }
    </style>
    <div data-elementor-type="product-archive" data-elementor-id="1473"
         class="elementor elementor-1473 elementor-1243 elementor-location-archive product"
         data-elementor-post-type="elementor_library">
        <div class="elementor-element elementor-element-385a6c2 e-flex e-con-boxed e-con e-parent" data-id="385a6c2"
             data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url({{ $solution->banner->path ?? '' }})">
            <div class="e-con-inner">
                <div
                    class="elementor-element elementor-element-dd19664 elementor-widget elementor-widget-theme-archive-title elementor-page-title elementor-widget-heading"
                    data-id="dd19664" data-element_type="widget" data-widget_type="theme-archive-title.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">{{ $solution->name }}</h1></div>
                </div>
                <div
                    class="elementor-element elementor-element-10abd3e elementor-widget elementor-widget-woocommerce-breadcrumb"
                    data-id="10abd3e" data-element_type="widget" data-widget_type="woocommerce-breadcrumb.default">
                    <div class="elementor-widget-container">
                        <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb">Trang chủ</nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-5f9c7c59 e-flex e-con-boxed e-con e-parent" data-id="5f9c7c59"
             data-element_type="container">
            <div class="e-con-inner">
            </div>
        </div>



        <div class="elementor-element elementor-element-7871e743 e-flex e-con-boxed e-con e-parent" data-id="7871e743"
             data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-07625b0 e-con-full e-flex e-con e-child"
                     data-id="07625b0" data-element_type="container"
                     data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;yes&quot;}">
                    <!-- dce invisible element e359ca6 -->
                    <div class="elementor-element elementor-element-b965b05 e-con-full e-flex e-con e-child"
                         data-id="b965b05" data-element_type="container"
                         data-settings="{&quot;enabled_visibility&quot;:&quot;yes&quot;,&quot;dce_visibility_selected&quot;:&quot;hide&quot;}">
                        <div
                            class="elementor-element elementor-element-a9c1991 elementor-widget elementor-widget-heading"
                            data-id="a9c1991" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Danh mục</h2></div>
                        </div>
                        <div
                            class="elementor-element elementor-element-43ac549 elementor-widget elementor-widget-shortcode"
                            data-id="43ac549" data-element_type="widget" data-widget_type="shortcode.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-shortcode">


                                    <div data-slug="" class="woof  " data-shortcode="woof " data-redirect=""
                                         data-autosubmit="1" data-ajax-redraw="0">

                                        <!--- here is possible to drop html code which is never redraws by AJAX ---->

                                        <div class="woof_redraw_zone" data-woof-ver="3.3.4.5"
                                             data-icheck-skin="flat_red">


                                            <div data-css-class="woof_container_product_cat"
                                                 class="woof_container woof_container_checkbox woof_container_product_cat woof_container_8 woof_container_productcategories  woof_fs_product_cat ">
                                                <div class="woof_container_overlay_item"></div>
                                                <div
                                                    class="woof_container_inner woof_container_inner_productcategories">
                                                    <div class="woof_block_html_items">
                                                        <ul class="woof_list woof_list_checkbox">


                                                            <li class="woof_term_113 ">
                                                                <input type="checkbox" id="woof_113_68a02db10ad07"
                                                                       class="woof_checkbox_term woof_checkbox_term_113"
                                                                       data-tax="product_cat" name="sound-systems-en"
                                                                       data-term-id="113" value="113"/>
                                                                <label class="woof_checkbox_label "
                                                                       for="woof_113_68a02db10ad07">Sound Systems<span
                                                                        class="woof_checkbox_count">(73)</span></label>
                                                                <ul class="woof_childs_list woof_childs_list_113">
                                                                    <li>
                                                                        <input type="checkbox"
                                                                               id="woof_303_68a02db10dc39"
                                                                               class="woof_checkbox_term woof_checkbox_term_303"
                                                                               data-tax="product_cat" name="acc-en"
                                                                               data-term-id="303" value="303"/><label
                                                                            class="woof_checkbox_label "
                                                                            for="woof_303_68a02db10dc39">ACC<span
                                                                                class="woof_checkbox_count">(1)</span></label>
                                                                        <input type="hidden" value="ACC"
                                                                               data-anchor="woof_n_product_cat_acc-en"/>

                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox"
                                                                               id="woof_110_68a02db10eb52"
                                                                               class="woof_checkbox_term woof_checkbox_term_110"
                                                                               data-tax="product_cat"
                                                                               name="amplifiers-en" data-term-id="110"
                                                                               value="110"/><label
                                                                            class="woof_checkbox_label "
                                                                            for="woof_110_68a02db10eb52">Amplifiers<span
                                                                                class="woof_checkbox_count">(3)</span></label>
                                                                        <ul class="woof_childs_list woof_childs_list_110">
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_302_68a02db10fbe3"
                                                                                       class="woof_checkbox_term woof_checkbox_term_302"
                                                                                       data-tax="product_cat"
                                                                                       name="dpx-series-en"
                                                                                       data-term-id="302"
                                                                                       value="302"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_302_68a02db10fbe3">DPX
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(3)</span></label>
                                                                                <input type="hidden" value="DPX Series"
                                                                                       data-anchor="woof_n_product_cat_dpx-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_487_68a02db11197a"
                                                                                       class="woof_checkbox_term woof_checkbox_term_487"
                                                                                       data-tax="product_cat"
                                                                                       name="legacy-amplifiers-en"
                                                                                       data-term-id="487"
                                                                                       value="487"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_487_68a02db11197a">Legacy<span
                                                                                        class="woof_checkbox_count">(1)</span></label>
                                                                                <input type="hidden" value="Legacy"
                                                                                       data-anchor="woof_n_product_cat_legacy-amplifiers-en"/>

                                                                            </li>
                                                                        </ul>
                                                                        <input type="hidden" value="Amplifiers"
                                                                               data-anchor="woof_n_product_cat_amplifiers-en"/>

                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox"
                                                                               id="woof_108_68a02db11287a"
                                                                               class="woof_checkbox_term woof_checkbox_term_108"
                                                                               data-tax="product_cat"
                                                                               name="loudspeakers-en" data-term-id="108"
                                                                               value="108"/><label
                                                                            class="woof_checkbox_label "
                                                                            for="woof_108_68a02db11287a">Loudspeakers<span
                                                                                class="woof_checkbox_count">(39)</span></label>
                                                                        <ul class="woof_childs_list woof_childs_list_108">
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_305_68a02db114fcc"
                                                                                       class="woof_checkbox_term woof_checkbox_term_305"
                                                                                       data-tax="product_cat"
                                                                                       name="loudspeakers-accessories-en"
                                                                                       data-term-id="305"
                                                                                       value="305"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_305_68a02db114fcc">Accessories<span
                                                                                        class="woof_checkbox_count">(15)</span></label>
                                                                                <input type="hidden" value="Accessories"
                                                                                       data-anchor="woof_n_product_cat_loudspeakers-accessories-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_306_68a02db115fa4"
                                                                                       class="woof_checkbox_term woof_checkbox_term_306"
                                                                                       data-tax="product_cat"
                                                                                       name="diva-series-en"
                                                                                       data-term-id="306"
                                                                                       value="306"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_306_68a02db115fa4">Diva
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(3)</span></label>
                                                                                <input type="hidden" value="Diva Series"
                                                                                       data-anchor="woof_n_product_cat_diva-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_308_68a02db116e7f"
                                                                                       class="woof_checkbox_term woof_checkbox_term_308"
                                                                                       data-tax="product_cat"
                                                                                       name="flash-series-en"
                                                                                       data-term-id="308"
                                                                                       value="308"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_308_68a02db116e7f">FLASH
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(1)</span></label>
                                                                                <input type="hidden"
                                                                                       value="FLASH Series"
                                                                                       data-anchor="woof_n_product_cat_flash-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_309_68a02db117d6f"
                                                                                       class="woof_checkbox_term woof_checkbox_term_309"
                                                                                       data-tax="product_cat"
                                                                                       name="free-series-en"
                                                                                       data-term-id="309"
                                                                                       value="309"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_309_68a02db117d6f">FREE
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(1)</span></label>
                                                                                <input type="hidden" value="FREE Series"
                                                                                       data-anchor="woof_n_product_cat_free-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_488_68a02db118c5e"
                                                                                       class="woof_checkbox_term woof_checkbox_term_488"
                                                                                       data-tax="product_cat"
                                                                                       name="legacy-loudspeakers-en"
                                                                                       data-term-id="488"
                                                                                       value="488"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_488_68a02db118c5e">Legacy<span
                                                                                        class="woof_checkbox_count">(5)</span></label>
                                                                                <input type="hidden" value="Legacy"
                                                                                       data-anchor="woof_n_product_cat_legacy-loudspeakers-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_311_68a02db11b916"
                                                                                       class="woof_checkbox_term woof_checkbox_term_311"
                                                                                       data-tax="product_cat"
                                                                                       name="s-series-en"
                                                                                       data-term-id="311"
                                                                                       value="311"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_311_68a02db11b916">S
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(4)</span></label>
                                                                                <input type="hidden" value="S Series"
                                                                                       data-anchor="woof_n_product_cat_s-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_313_68a02db11d651"
                                                                                       class="woof_checkbox_term woof_checkbox_term_313"
                                                                                       data-tax="product_cat"
                                                                                       name="v-series-en"
                                                                                       data-term-id="313"
                                                                                       value="313"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_313_68a02db11d651">V
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(8)</span></label>
                                                                                <input type="hidden" value="V Series"
                                                                                       data-anchor="woof_n_product_cat_v-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_496_68a02db11f37b"
                                                                                       class="woof_checkbox_term woof_checkbox_term_496"
                                                                                       data-tax="product_cat"
                                                                                       name="wd-series-en"
                                                                                       data-term-id="496"
                                                                                       value="496"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_496_68a02db11f37b">WD
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(5)</span></label>
                                                                                <input type="hidden" value="WD Series"
                                                                                       data-anchor="woof_n_product_cat_wd-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_315_68a02db120255"
                                                                                       class="woof_checkbox_term woof_checkbox_term_315"
                                                                                       data-tax="product_cat"
                                                                                       name="wx-series-en"
                                                                                       data-term-id="315"
                                                                                       value="315"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_315_68a02db120255">WX
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(2)</span></label>
                                                                                <input type="hidden" value="WX Series"
                                                                                       data-anchor="woof_n_product_cat_wx-series-en"/>

                                                                            </li>
                                                                        </ul>
                                                                        <input type="hidden" value="Loudspeakers"
                                                                               data-anchor="woof_n_product_cat_loudspeakers-en"/>

                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox"
                                                                               id="woof_147_68a02db122024"
                                                                               class="woof_checkbox_term woof_checkbox_term_147"
                                                                               data-tax="product_cat" name="mixers-en"
                                                                               data-term-id="147" value="147"/><label
                                                                            class="woof_checkbox_label "
                                                                            for="woof_147_68a02db122024">Mixers<span
                                                                                class="woof_checkbox_count">(9)</span></label>
                                                                        <ul class="woof_childs_list woof_childs_list_147">
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_319_68a02db123204"
                                                                                       class="woof_checkbox_term woof_checkbox_term_319"
                                                                                       data-tax="product_cat"
                                                                                       name="accessories-mixers-en"
                                                                                       data-term-id="319"
                                                                                       value="319"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_319_68a02db123204">Accessories<span
                                                                                        class="woof_checkbox_count">(4)</span></label>
                                                                                <input type="hidden" value="Accessories"
                                                                                       data-anchor="woof_n_product_cat_accessories-mixers-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_321_68a02db126bd0"
                                                                                       class="woof_checkbox_term woof_checkbox_term_321"
                                                                                       data-tax="product_cat"
                                                                                       name="mq-series-en"
                                                                                       data-term-id="321"
                                                                                       value="321"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_321_68a02db126bd0">MQ
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(2)</span></label>
                                                                                <input type="hidden" value="MQ Series"
                                                                                       data-anchor="woof_n_product_cat_mq-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_323_68a02db127a78"
                                                                                       class="woof_checkbox_term woof_checkbox_term_323"
                                                                                       data-tax="product_cat"
                                                                                       name="playmix-series-en"
                                                                                       data-term-id="323"
                                                                                       value="323"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_323_68a02db127a78">Playmix
                                                                                    series<span
                                                                                        class="woof_checkbox_count">(3)</span></label>
                                                                                <input type="hidden"
                                                                                       value="Playmix series"
                                                                                       data-anchor="woof_n_product_cat_playmix-series-en"/>

                                                                            </li>
                                                                        </ul>
                                                                        <input type="hidden" value="Mixers"
                                                                               data-anchor="woof_n_product_cat_mixers-en"/>

                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox"
                                                                               id="woof_128_68a02db128935"
                                                                               class="woof_checkbox_term woof_checkbox_term_128"
                                                                               data-tax="product_cat"
                                                                               name="portable-systems-en"
                                                                               data-term-id="128" value="128"/><label
                                                                            class="woof_checkbox_label "
                                                                            for="woof_128_68a02db128935">Portable
                                                                            Systems<span class="woof_checkbox_count">(18)</span></label>
                                                                        <ul class="woof_childs_list woof_childs_list_128">
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_324_68a02db129bbb"
                                                                                       class="woof_checkbox_term woof_checkbox_term_324"
                                                                                       data-tax="product_cat"
                                                                                       name="accessories-portable-systems-en"
                                                                                       data-term-id="324"
                                                                                       value="324"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_324_68a02db129bbb">Accessories<span
                                                                                        class="woof_checkbox_count">(7)</span></label>
                                                                                <input type="hidden" value="Accessories"
                                                                                       data-anchor="woof_n_product_cat_accessories-portable-systems-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_325_68a02db12aaaa"
                                                                                       class="woof_checkbox_term woof_checkbox_term_325"
                                                                                       data-tax="product_cat"
                                                                                       name="free-series-en-2"
                                                                                       data-term-id="325"
                                                                                       value="325"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_325_68a02db12aaaa">FREE
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(1)</span></label>
                                                                                <input type="hidden" value="FREE Series"
                                                                                       data-anchor="woof_n_product_cat_free-series-en-2"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_326_68a02db12c7cb"
                                                                                       class="woof_checkbox_term woof_checkbox_term_326"
                                                                                       data-tax="product_cat"
                                                                                       name="session-series-en"
                                                                                       data-term-id="326"
                                                                                       value="326"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_326_68a02db12c7cb">Session
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(4)</span></label>
                                                                                <input type="hidden"
                                                                                       value="Session Series"
                                                                                       data-anchor="woof_n_product_cat_session-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_327_68a02db12d677"
                                                                                       class="woof_checkbox_term woof_checkbox_term_327"
                                                                                       data-tax="product_cat"
                                                                                       name="u24-series-en"
                                                                                       data-term-id="327"
                                                                                       value="327"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_327_68a02db12d677">U24
                                                                                    series<span
                                                                                        class="woof_checkbox_count">(2)</span></label>
                                                                                <input type="hidden" value="U24 series"
                                                                                       data-anchor="woof_n_product_cat_u24-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_328_68a02db12e4f8"
                                                                                       class="woof_checkbox_term woof_checkbox_term_328"
                                                                                       data-tax="product_cat"
                                                                                       name="vfree-series-en"
                                                                                       data-term-id="328"
                                                                                       value="328"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_328_68a02db12e4f8">VFREE
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(2)</span></label>
                                                                                <input type="hidden"
                                                                                       value="VFREE Series"
                                                                                       data-anchor="woof_n_product_cat_vfree-series-en"/>

                                                                            </li>
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_329_68a02db12f398"
                                                                                       class="woof_checkbox_term woof_checkbox_term_329"
                                                                                       data-tax="product_cat"
                                                                                       name="vwave-series-en"
                                                                                       data-term-id="329"
                                                                                       value="329"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_329_68a02db12f398">VWAVE
                                                                                    Series<span
                                                                                        class="woof_checkbox_count">(2)</span></label>
                                                                                <input type="hidden"
                                                                                       value="VWAVE Series"
                                                                                       data-anchor="woof_n_product_cat_vwave-series-en"/>

                                                                            </li>
                                                                        </ul>
                                                                        <input type="hidden" value="Portable Systems"
                                                                               data-anchor="woof_n_product_cat_portable-systems-en"/>

                                                                    </li>
                                                                    <li>
                                                                        <input type="checkbox"
                                                                               id="woof_135_68a02db130236"
                                                                               class="woof_checkbox_term woof_checkbox_term_135"
                                                                               data-tax="product_cat"
                                                                               name="stage-gear-en" data-term-id="135"
                                                                               value="135"/><label
                                                                            class="woof_checkbox_label "
                                                                            for="woof_135_68a02db130236">Stage Gear<span
                                                                                class="woof_checkbox_count">(3)</span></label>
                                                                        <ul class="woof_childs_list woof_childs_list_135">
                                                                            <li>
                                                                                <input type="checkbox"
                                                                                       id="woof_400_68a02db131384"
                                                                                       class="woof_checkbox_term woof_checkbox_term_400"
                                                                                       data-tax="product_cat"
                                                                                       name="di-series-stage-gear-en"
                                                                                       data-term-id="400"
                                                                                       value="400"/><label
                                                                                    class="woof_checkbox_label "
                                                                                    for="woof_400_68a02db131384">DI
                                                                                    SERIES<span
                                                                                        class="woof_checkbox_count">(3)</span></label>
                                                                                <input type="hidden" value="DI SERIES"
                                                                                       data-anchor="woof_n_product_cat_di-series-stage-gear-en"/>

                                                                            </li>
                                                                        </ul>
                                                                        <input type="hidden" value="Stage Gear"
                                                                               data-anchor="woof_n_product_cat_stage-gear-en"/>

                                                                    </li>
                                                                </ul>
                                                                <input type="hidden" value="Sound Systems"
                                                                       data-anchor="woof_n_product_cat_sound-systems-en"/>

                                                            </li>


                                                        </ul>
                                                    </div>

                                                    <input type="hidden" name="woof_t_product_cat"
                                                           value="Product categories"/>
                                                    <!-- for red button search nav panel -->

                                                </div>
                                            </div>


                                            <div class="woof_submit_search_form_container"></div>


                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-element elementor-element-a735950 e-con-full e-flex e-con e-child"
                         data-id="a735950" data-element_type="container">
                        <div
                            class="elementor-element elementor-element-5558eff7 elementor-grid-tablet-3 elementor-grid-mobile-2 elementor-posts--thumbnail-top elementor-grid-3 elementor-widget elementor-widget-posts"
                            data-id="5558eff7" data-element_type="widget"
                            data-settings="{&quot;custom_columns_tablet&quot;:&quot;3&quot;,&quot;custom_columns_mobile&quot;:&quot;2&quot;,&quot;custom_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;custom_columns&quot;:&quot;3&quot;,&quot;custom_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;custom_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                            data-widget_type="posts.custom">
                            <div class="elementor-widget-container">
                                <div
                                    class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom"
                                    data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:5,&quot;load_method&quot;:&quot;loadmore&quot;,&quot;widget_id&quot;:&quot;5558eff7&quot;,&quot;post_id&quot;:7381,&quot;theme_id&quot;:1473,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">
                                    @foreach($products as $product)
                                        <article id="post-{{ $product->id }}"
                                                 class="elementor-post elementor-grid-item ecs-post-loop post-7381 product type-product status-publish has-post-thumbnail product_cat-diva-series-en product_cat-loudspeakers-en product_cat-sound-systems-en product_tag-bar-restaurant-en product_tag-deejay-en product_tag-live-performance-en first instock product-type-simple">
                                            <div class="ecs-link-wrapper"
                                                 data-href="https://soundsystems.proel.com/en/prodotto/diva12a-1000w-processed-12-active-speaker/">
                                                <div data-elementor-type="loop" data-elementor-id="1471"
                                                     class="elementor elementor-1471  elementor-1250 elementor-location-archive post-7381 product type-product status-publish has-post-thumbnail product_cat-diva-series-en product_cat-loudspeakers-en product_cat-sound-systems-en product_tag-bar-restaurant-en product_tag-deejay-en product_tag-live-performance-en  instock product-type-simple"
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
                                                                            <a href="../../prodotto/diva12a-1000w-processed-12-active-speaker/index.html">
                                                                                <img
                                                                                    src="{{ $product->image->path ?? '' }}"
                                                                                    title="{{ $product->name }}"
                                                                                    alt="{{ $product->name }}"
                                                                                    loading="lazy"/> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-element elementor-element-419a4a90 elementor-widget elementor-widget-heading"
                                                                        data-id="419a4a90" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                                <a href="../../prodotto/diva12a-1000w-processed-12-active-speaker/index.html">{{ $product->name }}</a>
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
                                <nav class="elementor-pagination" role="navigation" aria-label="Pagination">
                                </nav>


                                <!-- Pagination -->

                                {{ $products->links('site.pagination.paginate2') }}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- dce invisible element 55a99c42 -->
                <style>.showme a, .showme svg, .showme i, .showme img, .closebutton a, .closebutton i, .closebutton img {
                        cursor: pointer;
                        -webkit-transition: transform 0.34s ease;
                        transition: transform 0.34s ease;
                    }

                </style>
            </div>
        </div>
    </div>

@endsection

@push('scripts')


@endpush
