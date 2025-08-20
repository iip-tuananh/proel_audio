<div data-elementor-type="header" data-elementor-id="2878"
     class="elementor elementor-2878 elementor-37 elementor-location-header"
     data-elementor-post-type="elementor_library">
    <div class="elementor-element elementor-element-3e5ff97 header e-flex e-con-boxed e-con e-parent" data-id="3e5ff97"
         data-element_type="container"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-6ce3e1a e-con-full e-flex e-con e-child" data-id="6ce3e1a"
                 data-element_type="container">
                <div class="elementor-element elementor-element-2f27c70 elementor-widget elementor-widget-image"
                     data-id="2f27c70" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <a href="{{ route('front.home-page') }}">
                            <img width="300" height="101"
                                 src="{{ $config->image->path ?? '' }}"
                                 class="attachment-medium size-medium wp-image-6585" alt=""
                                 srcset="{{ $config->image->path ?? '' }} 300w,
                                 {{ $config->image->path ?? '' }} 1024w,
                                 {{ $config->image->path ?? '' }} 768w,
                                   {{ $config->image->path ?? '' }} 1536w,
                                    {{ $config->image->path ?? '' }} 2048w,
                                     {{ $config->image->path ?? '' }} 600w"
                                 sizes="(max-width: 300px) 100vw, 300px"/> </a>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-a865fc8 e-con-full e-flex e-con e-child" data-id="a865fc8"
                 data-element_type="container">
                <div class="elementor-element elementor-element-74b6bbe elementor-nav-menu__align-center elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                     data-id="74b6bbe" data-element_type="widget"
                     data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                     data-widget_type="nav-menu.default">
                    <div class="elementor-widget-container">
                        <nav aria-label="Menu"
                             class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-background e--animation-fade">
                            <ul id="menu-1-74b6bbe" class="elementor-nav-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1441 current_page_item menu-item-1445">
                                    <a href="{{ route('front.home-page') }}" aria-current="page"
                                       class="elementor-item elementor-item-active">Trang chủ</a></li>

                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4934"><a
                                        href="{{ route('front.about_page') }}" class="elementor-item">Về chúng tôi</a></li>

                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1446">
                                    <a href="#" class="elementor-item elementor-item-anchor">Giải pháp</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        @foreach($solutions as $solution)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7902">
                                                <a href="{{ route('front.solutions', $solution->slug) }}" class="elementor-sub-item">{{ $solution->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>


                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1454">

                                    <a href="#" class="elementor-item elementor-item-anchor">Sản phẩm</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        @foreach($categories as $category)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7897">
                                                <a href="{{ route('front.getChildCategory', $category->slug) }}"
                                                   class="elementor-sub-item">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1454">

                                    <a href="#" class="elementor-item elementor-item-anchor">Tin tức</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        @foreach($postCategories as $postCategory)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7897">
                                                <a href="{{ route('front.blogs', $postCategory->slug) }}"
                                                   class="elementor-sub-item">{{ $postCategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6922"><a
                                        href="{{ route('front.contact') }}" class="elementor-item">Liên hệ</a></li>

                            </ul>
                        </nav>
                        <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
                             aria-expanded="false">
                            <svg aria-hidden="true" role="presentation"
                                 class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar"
                                 viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                <path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path>
                            </svg>
                            <svg aria-hidden="true" role="presentation"
                                 class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close"
                                 viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                            </svg>
                        </div>
                        <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                            <ul id="menu-2-74b6bbe" class="elementor-nav-menu">


                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1441 current_page_item menu-item-1445">
                                    <a href="{{ route('front.home-page') }}" aria-current="page"
                                       class="elementor-item elementor-item-active" tabindex="-1">Trang chủ</a></li>

                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4934"><a
                                        href="{{ route('front.about_page') }}" class="elementor-item" tabindex="-1">Về chúng tôi</a>
                                </li>

                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1446">
                                    <a href="#" class="elementor-item elementor-item-anchor"
                                       tabindex="-1">Giải pháp</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        @foreach($solutions as $solution)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7902">
                                                <a href="{{ route('front.solutions', $solution->slug) }}" class="elementor-sub-item"
                                                   tabindex="-1">{{ $solution->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>


                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1454">
                                    <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Sản phẩm</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        @foreach($categories as $category)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7897">
                                                <a href="{{ route('front.getChildCategory', $category->slug) }}"
                                                   class="elementor-sub-item" tabindex="-1">{{ $category->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </li>


                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1454">
                                    <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Tin tức</a>
                                    <ul class="sub-menu elementor-nav-menu--dropdown">
                                        @foreach($postCategories as $postCategory)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7897">
                                                <a href="{{ route('front.blogs', $postCategory->slug) }}"
                                                   class="elementor-sub-item" tabindex="-1">{{ $postCategory->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </li>


                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6922"><a
                                        href="{{ route('front.contact') }}" class="elementor-item" tabindex="-1">Liên hệ</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3e1281c e-con-full e-flex e-con e-child" data-id="3e1281c"
                 data-element_type="container">
                <div class="elementor-element elementor-element-889efb8 elementor-search-form--skin-full_screen elementor-widget elementor-widget-search-form"
                     data-id="889efb8" data-element_type="widget"
                     data-settings="{&quot;skin&quot;:&quot;full_screen&quot;}" data-widget_type="search-form.default">
                    <div class="elementor-widget-container">
                        <search role="search">
                            <form class="elementor-search-form" action="/search"
                                  method="get">
                                <div class="elementor-search-form__toggle" role="button" tabindex="0"
                                     aria-label="Search">
                                    <div class="e-font-icon-svg-container">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-search"
                                             viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="elementor-search-form__container">
                                    <label class="elementor-screen-only"
                                           for="elementor-search-form-889efb8">Search</label>


                                    <input id="elementor-search-form-889efb8"
                                           placeholder="Nhập từ khóa và nhấn Enter để tìm kiếm hoặc nhấn ESC để thoát" required
                                           class="elementor-search-form__input" type="search" name="keywords" value="">
{{--                                    <input type='hidden' name='lang' value='en'/>--}}

                                    <div class="dialog-lightbox-close-button dialog-close-button" role="button"
                                         tabindex="0" aria-label="Close this search box.">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-eicon-close"
                                             viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </form>
                        </search>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-369c7b0 e-con-full e-flex e-con e-child" data-id="369c7b0"
                 data-element_type="container">
                <div class="elementor-element elementor-element-b6c04c1 elementor-widget__width-auto elementor-widget elementor-widget-wpml-language-switcher"
                     data-id="b6c04c1" data-element_type="widget" data-widget_type="wpml-language-switcher.default">
                    <div class="elementor-widget-container">
                        <div class="wpml-elementor-ls">
                            <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                                <ul>
                                    <li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-horizontal"
                                        onclick="translateheader('vi')"
                                    >
                                        <a class="wpml-ls-link" >
                                            <img
                                                class="wpml-ls-flag"
                                                src="https://soundsystems.proel.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/vi.png"
                                                alt="English"
                                                width=18
                                                height=12
                                            /></a>
                                    </li>
                                    <li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-it wpml-ls-last-item wpml-ls-item-legacy-list-horizontal " onclick="translateheader('en')">
                                        <a class="wpml-ls-link">
                                            <img
                                                class="wpml-ls-flag"
                                                src="https://soundsystems.proel.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
                                                alt="Italian"
                                                width=18
                                                height=12
                                            /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
