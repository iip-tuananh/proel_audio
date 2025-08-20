<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>@yield('title')</title>
    <meta name='robots' content='max-image-preview:large' />



    <link rel="shortcut icon" href="{{@$config->favicon->path ?? ''}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{@$config->favicon->path ?? ''}}">
    <meta name="application-name" content="{{ $config->web_title }}" />
    <meta name="generator" content="@yield('title')" />

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="{{ $config->web_title }}">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ url()->current() }}" />





















    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <script>
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/soundsystems.proel.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2"}};
        /*! This file is auto-generated */
        !function(s,n){var o,i,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),a=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===a[t]})}function u(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);for(var n=e.getImageData(16,16,1,1),a=0;a<n.data.length;a++)if(0!==n.data[a])return!1;return!0}function f(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\udedf")}return!1}function g(e,t,n,a){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):s.createElement("canvas"),o=r.getContext("2d",{willReadFrequently:!0}),i=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(function(e){i[e]=t(o,e,n,a)}),i}function t(e){var t=s.createElement("script");t.src=e,t.defer=!0,s.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",i=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){s.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+g.toString()+"("+[JSON.stringify(i),f.toString(),p.toString(),u.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"}),r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=function(e){c(n=e.data),r.terminate(),t(n)})}catch(e){}c(n=g(i,f,p,u))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='easy-autocomplete-css' href='/site/wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/easy-autocomplete.min8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='easy-autocomplete-theme-css' href='/site/wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/easy-autocomplete.themes.min8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='dce-dynamic-visibility-style-css' href='/site/wp-content/plugins/dynamic-visibility-for-elementor/assets/css/dynamic-visibilityb7e3.css?ver=5.0.16' media='all' />
    <style id='wp-emoji-styles-inline-css'>

        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
    </style>
    <link rel='stylesheet' id='woolentor-block-common-css' href='/site/wp-content/plugins/woolentor-addons/woolentor-blocks/assets/css/common-style005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='woolentor-block-default-css' href='/site/wp-content/plugins/woolentor-addons/woolentor-blocks/assets/css/style-index005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='woolentor-block-style-css' href='/site/wp-content/plugins/woolentor-addons/woolentor-blocks/assets/css/blocks.style.build005e.css?ver=3.1.6' media='all' />
    <style id='global-styles-inline-css'>
        :root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
        :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
        :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
        :root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
    </style>
    <link rel='stylesheet' id='agile-store-locator-init-css' href='/site/wp-content/plugins/agile-store-locator/public/css/init8f82.css?ver=4.10' media='all' />
    <link rel='stylesheet' id='woof-css' href='/site/wp-content/plugins/woocommerce-products-filter/css/front8b46.css?ver=3.3.4.5' media='all' />
    <style id='woof-inline-css'>

        .woof_products_top_panel li span, .woof_products_top_panel2 li span{background: url(/site/wp-content/plugins/woocommerce-products-filter/img/delete.png);background-size: 14px 14px;background-repeat: no-repeat;background-position: right;}
        .woof_edit_view{
            display: none;
        }


    </style>
    <link rel='stylesheet' id='icheck-jquery-color-flat-css' href='/site/wp-content/plugins/woocommerce-products-filter/js/icheck/skins/flat/_all8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='icheck-jquery-color-square-css' href='/site/wp-content/plugins/woocommerce-products-filter/js/icheck/skins/square/_all8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='icheck-jquery-color-minimal-css' href='/site/wp-content/plugins/woocommerce-products-filter/js/icheck/skins/minimal/_all8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_by_author_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/by_author/css/by_author8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_by_backorder_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/by_backorder/css/by_backorder8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_by_instock_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/by_instock/css/by_instock8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_by_onsales_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/by_onsales/css/by_onsales8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_by_sku_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/by_sku/css/by_sku8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_by_text_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/css/front8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_color_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/color/css/html_types/color8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_image_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/image/css/html_types/image8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_label_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/label/css/html_types/label8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_select_hierarchy_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/select_hierarchy/css/html_types/select_hierarchy8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_select_radio_check_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/select_radio_check/css/html_types/select_radio_check8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_slider_html_items-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/slider/css/html_types/slider8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_checkbox-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/checkbox8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_radio-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/radio8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_switcher-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/switcher8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_color-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/color8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_tooltip-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/tooltip8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof_sd_html_items_front-css' href='/site/wp-content/plugins/woocommerce-products-filter/ext/smart_designer/css/front8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='woof-switcher23-css' href='/site/wp-content/plugins/woocommerce-products-filter/css/switcher8b46.css?ver=3.3.4.5' media='all' />
    <link rel='stylesheet' id='select2-css' href='/site/wp-content/plugins/woocommerce/assets/css/select2ab5d.css?ver=10.0.4' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='/site/wp-content/plugins/woocommerce/assets/css/woocommerce-layoutab5d.css?ver=10.0.4' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='/site/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenab5d.css?ver=10.0.4' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='/site/wp-content/plugins/woocommerce/assets/css/woocommerceab5d.css?ver=10.0.4' media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel='stylesheet' id='wpml-legacy-horizontal-list-0-css' href='/site/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/style.min68b3.css?ver=1' media='all' />
    <link rel='stylesheet' id='cmplz-general-css' href='/site/wp-content/plugins/complianz-gdpr-premium/assets/css/cookieblocker.min4860.css?ver=1753731802' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='/site/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' media='all' />
    <link rel='stylesheet' id='simple-line-icons-wl-css' href='/site/wp-content/plugins/woolentor-addons/assets/css/simple-line-icons005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='htflexboxgrid-css' href='/site/wp-content/plugins/woolentor-addons/assets/css/htflexboxgrid005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='slick-css' href='/site/wp-content/plugins/woolentor-addons/assets/css/slick005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='woolentor-widgets-css' href='/site/wp-content/plugins/woolentor-addons/assets/css/woolentor-widgets005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='photoswipe-css' href='/site/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.minab5d.css?ver=10.0.4' media='all' />
    <link rel='stylesheet' id='photoswipe-default-skin-css' href='/site/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.minab5d.css?ver=10.0.4' media='all' />
    <link rel='stylesheet' id='woolentor-quickview-css' href='/site/wp-content/plugins/woolentor-addons/includes/modules/quickview/assets/css/frontend005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='brands-styles-css' href='/site/wp-content/plugins/woocommerce/assets/css/brandsab5d.css?ver=10.0.4' media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='/site/wp-content/themes/hello-elementor/style.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href='/site/wp-content/themes/hello-elementor/theme.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css' href='/site/wp-content/themes/hello-elementor/header-footer.min41fe.css?ver=3.0.1' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='/site/wp-content/plugins/elementor/assets/css/frontend.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='elementor-post-6-css' href='/site/wp-content/uploads/elementor/css/post-6dd40.css?ver=1753732180' media='all' />
    <link rel='stylesheet' id='widget-image-css' href='/site/wp-content/plugins/elementor/assets/css/widget-image.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='widget-nav-menu-css' href='/site/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min862f.css?ver=3.30.1' media='all' />
    <link rel='stylesheet' id='widget-search-form-css' href='/site/wp-content/plugins/elementor-pro/assets/css/widget-search-form.min862f.css?ver=3.30.1' media='all' />
    <link rel='stylesheet' id='e-sticky-css' href='/site/wp-content/plugins/elementor-pro/assets/css/modules/sticky.min862f.css?ver=3.30.1' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='/site/wp-content/plugins/elementor/assets/css/widget-heading.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='widget-spacer-css' href='/site/wp-content/plugins/elementor/assets/css/widget-spacer.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='widget-icon-list-css' href='/site/wp-content/plugins/elementor/assets/css/widget-icon-list.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='widget-social-icons-css' href='/site/wp-content/plugins/elementor/assets/css/widget-social-icons.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css' href='/site/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='-sl-bootstrap-css' href='/site/wp-content/plugins/agile-store-locator/public/css/sl-bootstrap.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css' href='/site/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='swiper-css' href='/site/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='/site/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='widget-slides-css' href='/site/wp-content/plugins/elementor-pro/assets/css/widget-slides.min862f.css?ver=3.30.1' media='all' />
    <link rel='stylesheet' id='woolentor-category-grid-css' href='/site/wp-content/plugins/woolentor-addons/assets/css/category-grid005e.css?ver=3.1.6' media='all' />
    <link rel='stylesheet' id='widget-image-box-css' href='/site/wp-content/plugins/elementor/assets/css/widget-image-box.min55cb.css?ver=3.30.3' media='all' />
    <link rel='stylesheet' id='elementor-post-1441-css' href='/site/wp-content/uploads/elementor/css/post-1441402c.css?ver=1753732181' media='all' />
    <link rel='stylesheet' id='elementor-post-2878-css' href='/site/wp-content/uploads/elementor/css/post-2878402c.css?ver=1753732181' media='all' />
    <link rel='stylesheet' id='elementor-post-2881-css' href='/site/wp-content/uploads/elementor/css/post-2881402c.css?ver=1753732181' media='all' />
    <link rel='stylesheet' id='hello-elementor-child-style-css' href='/site/wp-content/themes/hello-theme-child-master/style8a54.css?ver=1.0.0' media='all' />
    <link rel='stylesheet' id='ecs-styles-css' href='/site/wp-content/plugins/ele-custom-skin/assets/css/ecs-style20f0.css?ver=3.1.9' media='all' />
    <link rel='stylesheet' id='elementor-post-1246-css' href='/site/wp-content/uploads/elementor/css/post-124615ff.css?ver=1674664230' media='all' />
    <link rel='stylesheet' id='elementor-post-1248-css' href='/site/wp-content/uploads/elementor/css/post-1248e0f4.css?ver=1725543621' media='all' />
    <link rel='stylesheet' id='elementor-post-1250-css' href='/site/wp-content/uploads/elementor/css/post-1250487c.css?ver=1683023118' media='all' />
    <link rel='stylesheet' id='elementor-post-1471-css' href='/site/wp-content/uploads/elementor/css/post-1471487c.css?ver=1683023118' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-roboto-css' href='/site/wp-content/uploads/elementor/google-fonts/css/roboto5a4a.css?ver=1745850175' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-robotoslab-css' href='/site/wp-content/uploads/elementor/google-fonts/css/robotoslab2bf1.css?ver=1745850177' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-lato-css' href='/site/wp-content/uploads/elementor/google-fonts/css/lato97cd.css?ver=1745850178' media='all' />
{{--    <script type="text/template" id="tmpl-variation-template">--}}
{{--        <div class="woocommerce-variation-description">@{{{ data.variation.variation_description }}}</div>--}}
{{--        <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>--}}
{{--        <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>--}}
{{--    </script>--}}
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
    </script>
    <script id="wpml-cookie-js-extra">
        var wpml_cookies = {"wp-wpml_current_language":{"value":"en","expires":1,"path":"\/"}};
        var wpml_cookies = {"wp-wpml_current_language":{"value":"en","expires":1,"path":"\/"}};
    </script>
    <script src="/site/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookiee78e.js?ver=476000" id="wpml-cookie-js" defer data-wp-strategy="defer"></script>
    <script src="/site/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="/site/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script src="/site/wp-content/plugins/woocommerce-products-filter/js/easy-autocomplete/jquery.easy-autocomplete.min8b46.js?ver=3.3.4.5" id="easy-autocomplete-js"></script>
    <script id="woof-husky-js-extra">
        var woof_husky_txt = {"ajax_url":"https:\/\/soundsystems.proel.com\/wp-admin\/admin-ajax.php","plugin_uri":"https:\/\/soundsystems.proel.com\/wp-content\/plugins\/woocommerce-products-filter\/ext\/by_text\/","loader":"https:\/\/soundsystems.proel.com\/wp-content\/plugins\/woocommerce-products-filter\/ext\/by_text\/assets\/img\/ajax-loader.gif","not_found":"Nothing found!","prev":"Prev","next":"Next","site_link":"https:\/\/soundsystems.proel.com","default_data":{"placeholder":"","behavior":"title_or_content_or_excerpt","search_by_full_word":"0","autocomplete":1,"how_to_open_links":"0","taxonomy_compatibility":"0","sku_compatibility":"1","custom_fields":"","search_desc_variant":"0","view_text_length":"10","min_symbols":"3","max_posts":"10","image":"","notes_for_customer":"","template":"","max_open_height":"300","page":0}};
    </script>
    <script src="/site/wp-content/plugins/woocommerce-products-filter/ext/by_text/assets/js/husky8b46.js?ver=3.3.4.5" id="woof-husky-js"></script>
    <script src="/site/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min48a4.js?ver=2.7.0-wc.10.0.4" id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php?lang=en","wc_ajax_url":"\/en\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/soundsystems.proel.com\/en\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    </script>
    <script src="/site/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minab5d.js?ver=10.0.4" id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script src="/site/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min9273.js?ver=2.1.4-wc.10.0.4" id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php?lang=en","wc_ajax_url":"\/en\/?wc-ajax=%%endpoint%%","i18n_password_show":"Show password","i18n_password_hide":"Hide password"};
    </script>
    <script src="/site/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minab5d.js?ver=10.0.4" id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <script src="/site/wp-includes/js/underscore.min3ab8.js?ver=1.13.7" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
    </script>
    <script src="/site/wp-includes/js/wp-util.min6c2d.js?ver=6.8.2" id="wp-util-js"></script>
    <script src="/site/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.minb7a6.js?ver=4.1.1-wc.10.0.4" id="photoswipe-js" data-wp-strategy="defer"></script>
    <script id="ecs_ajax_load-js-extra">
        var ecs_ajax_params = {"ajaxurl":"https:\/\/soundsystems.proel.com\/wp-admin\/admin-ajax.php","posts":"{\"error\":\"\",\"m\":\"\",\"p\":1441,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"\",\"pagename\":\"\",\"page_id\":1441,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"all\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"meta_query\":[],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"post_type\":\"\",\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"};
    </script>
    <script src="/site/wp-content/plugins/ele-custom-skin/assets/js/ecs_ajax_pagination20f0.js?ver=3.1.9" id="ecs_ajax_load-js"></script>
    <script src="/site/wp-content/plugins/ele-custom-skin/assets/js/ecs20f0.js?ver=3.1.9" id="ecs-script-js"></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/1441.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://soundsystems.proel.com/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.8.2" />
    <meta name="generator" content="WooCommerce 10.0.4" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embed25d3.json?url=https%3A%2F%2Fsoundsystems.proel.com%2Fen%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embed6238?url=https%3A%2F%2Fsoundsystems.proel.com%2Fen%2F&amp;format=xml" />
    <meta name="generator" content="WPML ver:4.7.6 stt:1,27;" />
    <style>.cmplz-hidden {
            display: none !important;
        }</style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <meta name="generator" content="Elementor 3.30.3; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <!-- Meta Pixel Code -->
    <script type="text/plain" data-service="facebook" data-category="marketing">
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        '../../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1031804772488168');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1031804772488168&amp;ev=PageView&amp;noscript=1"
        /></noscript>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'vi',includedLanguages:'en,hi,vi,zh-CN', }, 'translate_select');
        }
    </script>

    <style>
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
            display: none;
        }
        .skiptranslate{
            display: none;
            top: 0;
        }
        .goog-te-banner-frame{display: none !important;}
        .goog-text-highlight { background: none !important; box-shadow: none !important;}
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        #goog-gt-tt{
            display: none !important;
        }
        body {
            position: revert!important;
            top: 0px !important;
        }
    </style>

    <!-- End Meta Pixel Code -->
{{--    <style>--}}
{{--        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),--}}
{{--        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {--}}
{{--            background-image: none !important;--}}
{{--        }--}}
{{--        @media screen and (max-height: 1024px) {--}}
{{--            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),--}}
{{--            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {--}}
{{--                background-image: none !important;--}}
{{--            }--}}
{{--        }--}}
{{--        @media screen and (max-height: 640px) {--}}
{{--            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),--}}
{{--            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {--}}
{{--                background-image: none !important;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}


    <style>
        /* Ẩn mọi phần tử có ng-cloak cho tới khi Angular khởi tạo xong */
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        [ng\:cloak],
        [data-ng\:cloak],
        [x-ng\:cloak]{
            display: none !important;
        }
    </style>



</head>
