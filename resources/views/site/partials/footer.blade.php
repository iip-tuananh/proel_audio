<div data-elementor-type="footer" data-elementor-id="2881"
     class="elementor elementor-2881 elementor-53 elementor-location-footer"
     data-elementor-post-type="elementor_library">

    <div class="elementor-element elementor-element-84b0f14 footer e-flex e-con-boxed e-con e-parent" data-id="84b0f14"
         data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">
            <div class="elementor-element elementor-element-4f0d318 e-con-full e-flex e-con e-child" data-id="4f0d318"
                 data-element_type="container">
                <div class="elementor-element elementor-element-3ce901e elementor-widget elementor-widget-image"
                     data-id="3ce901e" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img width="300" height="101"
                             src="{{ $config->image->path ?? '' }}"
                             class="attachment-medium size-medium wp-image-6586" alt=""
                             srcset="{{ $config->image->path ?? '' }} 300w,
                              {{ $config->image->path ?? '' }} 1024w,
                               {{ $config->image->path ?? '' }} 768w,
                                {{ $config->image->path ?? '' }} 1536w,
                                {{ $config->image->path ?? '' }} 2048w,
                                {{ $config->image->path ?? '' }} 600w"
                             sizes="(max-width: 300px) 100vw, 300px"/></div>
                </div>
                <div class="elementor-element elementor-element-355c3a8 elementor-widget elementor-widget-spacer"
                     data-id="355c3a8" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-65f10ee elementor-icon-list--layout-inline elementor-align-left elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                     data-id="65f10ee" data-element_type="widget" data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items elementor-inline-items">
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="{{ route('front.home-page') }}" target="_blank">

                                    <span class="elementor-icon-list-text">Trang chủ</span>
                                </a>
                            </li>
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="{{ route('front.about_page') }}" target="_blank">

                                    <span class="elementor-icon-list-text">Về chúng tôi</span>
                                </a>
                            </li>

                            @foreach($postCategories as $postCate)
                                <li class="elementor-icon-list-item elementor-inline-item">
                                    <a href="{{ route('front.blogs', $postCate->slug) }}" target="_blank">

                                        <span class="elementor-icon-list-text">{{ $postCate->name }}</span>
                                    </a>
                                </li>
                            @endforeach


                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="{{ route('front.contact') }}">
                                    <span class="elementor-icon-list-text">Liên hệ</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="elementor-element elementor-element-960f691 elementor-widget elementor-widget-text-editor"
                     data-id="960f691" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>© <b>{{ $config->web_title }}<br/></b>{{ $config->address_company }}<br/>Hotline
                            {{ $config->hotline }} </p>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-8171d1e e-con-full e-flex e-con e-child" data-id="8171d1e"
                 data-element_type="container">


                <div class="elementor-element elementor-element-9d94eef elementor-widget elementor-widget-spacer"
                     data-id="9d94eef" data-element_type="widget" data-widget_type="spacer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-21313168 elementor-widget elementor-widget-heading"
                     data-id="21313168" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">follow us on social media</h2></div>
                </div>
                <div class="elementor-element elementor-element-5ae78037 e-grid-align-right elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                     data-id="5ae78037" data-element_type="widget" data-widget_type="social-icons.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-social-icons-wrapper elementor-grid" role="list">
							<span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-e5a999d"
                       href="{{ $config->facebook }}" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
						<svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512"
                             xmlns="http://www.w3.org/2000/svg"><path
                                d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>					</a>
				</span>
                            <span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-f63eb56"
                       href="{{ $config->instagram }}" target="_blank">
						<span class="elementor-screen-only">Instagram</span>
						<svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512"
                             xmlns="http://www.w3.org/2000/svg"><path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>					</a>
				</span>
                            <span class="elementor-grid-item" role="listitem">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-46382aa"
                       href="{{ $config->youtube }}" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512"
                             xmlns="http://www.w3.org/2000/svg"><path
                                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>					</a>
				</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
