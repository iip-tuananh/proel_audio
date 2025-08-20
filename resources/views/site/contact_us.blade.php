@extends('site.layouts.master')
@section('title')Liên hệ - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')
    <style>
        .invalid-feedback {
            /*display: none;*/
            width: 100%;
            margin-top: 0.25rem;
            font-size: 100%;
            color: #dc3545;
        }
    </style>

    <style>
        .send-success-message {
            display: flex;
            align-items: center;
            background-color: #e6ffed; /* nền xanh nhạt */
            border: 1px solid #71d58b; /* viền xanh tươi */
            color: #2d6a4f; /* chữ xanh đậm */
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 1rem;
            gap: 12px; /* khoảng cách icon - text */
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 10px;
        }

        .send-success-message i {
            font-size: 1.4rem;
        }

        .send-success-message p {
            margin: 0;
            line-height: 1.4;
        }
    </style>
    <link rel='stylesheet' id='elementor-post-1439-css' href='/site/wp-content/uploads/elementor/css/post-1439f656.css?ver=1753754060' media='all' />

@endsection

@section('content')
    <style>
        /* ===== Contact Form (tone đỏ) ===== */
        .contact-card {
            --red: #e53935;
            --red-dark: #c62828;
            --red-50: #fdecea;
            --text: #1a1a1a;
            --muted: #777;
            --border: #e8e8e8;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 8px 24px rgba(0,0,0,.06);
        }

        .contact-title{
            margin: 0 0 14px;
            font-size: 20px;
            font-weight: 700;
            color: var(--text);
            position: relative;
            padding-left: 12px;
        }
        .contact-title::before{
            content: "";
            position: absolute;
            left: 0; top: 4px; bottom: 4px;
            width: 4px;
            border-radius: 2px;
            background: linear-gradient(180deg, var(--red), var(--red-dark));
        }

        .contact-form .form-grid{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px 16px;
        }

        .contact-form .field{ display: flex; flex-direction: column; }
        .contact-form .field.full{ grid-column: 1 / -1; }

        .contact-form label{
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 6px;
        }

        .contact-form input,
        .contact-form textarea{
            width: 100%;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 12px 14px;
            font-size: 15px;
            color: var(--text);
            background: #fff;
            transition: border-color .2s, box-shadow .2s, background .2s;
            outline: none;
        }
        .contact-form textarea{ resize: vertical; }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder{ color: #aaa; }

        .contact-form input:focus,
        .contact-form textarea:focus{
            border-color: var(--red);
            box-shadow: 0 0 0 4px var(--red-50);
            background: #fff;
        }

        /* Trạng thái lỗi khi đã validate */
        .contact-form.was-validated input:invalid,
        .contact-form.was-validated textarea:invalid{
            border-color: var(--red);
            box-shadow: 0 0 0 4px var(--red-50);
        }

        /* Button */
        .contact-form .actions{ display: flex; gap: 10px; align-items: center; }
        .btn-red{
            appearance: none;
            border: 0;
            border-radius: 12px;
            padding: 12px 18px;
            background: linear-gradient(180deg, var(--red), var(--red-dark));
            color: #fff;
            font-weight: 600;
            letter-spacing: .2px;
            cursor: pointer;
            transition: transform .08s ease, box-shadow .2s ease, filter .2s ease;
            width: 30%;
            box-shadow: 0 8px 16px rgba(229,57,53,.25);
        }
        .btn-red:hover{ filter: brightness(1.02); }
        .btn-red:active{ transform: translateY(1px); }

        /* Thông báo sau khi gửi */
        .form-note{
            margin-top: 10px;
            background: var(--red-50);
            color: var(--red-dark);
            border: 1px solid #f8c7c6;
            padding: 10px 12px;
            border-radius: 10px;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 767.98px){
            .contact-form .form-grid{ grid-template-columns: 1fr; }
        }

    </style>

    <style>
        /* Card */
        .info-map-card{
            --accent: #e53935;          /* đỏ chủ đạo */
            --accent-dark:#c62828;
            --tint:#fdecea;             /* nền nhạt */
            --text:#1a1a1a;
            --muted:#6b7280;
            --border:#eeeeee;

            background:#fff;
            border:1px solid var(--border);
            border-radius:16px;
            padding:20px;
            box-shadow:0 10px 24px rgba(0,0,0,.06);
        }

        /* Grid 3 mục */
        .info-grid{
            display:grid;
            grid-template-columns: repeat(3, minmax(0,1fr));
            gap:14px;
            margin-bottom:16px;
        }
        @media (max-width: 991.98px){
            .info-grid{ grid-template-columns: repeat(2, minmax(0,1fr)); }
        }
        @media (max-width: 575.98px){
            .info-grid{ grid-template-columns: 1fr; }
        }

        /* Item */
        .info-item{
            display:flex;
            gap:12px;
            align-items:center;
            padding:12px;
            border:1px solid var(--border);
            border-radius:14px;
            text-decoration:none;
            background: #fff;
            transition: box-shadow .2s, transform .05s, border-color .2s, background .2s;
        }
        .info-item:hover{
            border-color: #f3b4b3;
            box-shadow: 0 8px 18px rgba(229,57,53,.12);
            background: linear-gradient(0deg, rgba(229,57,53,.04), rgba(229,57,53,.04)), #fff;
        }
        .info-item:active{ transform: translateY(1px); }

        /* Icon tròn */
        .info-item .icon{
            flex: 0 0 44px;
            width:44px; height:44px;
            border-radius:50%;
            display:grid; place-items:center;
            background: var(--tint);
            border:1px solid #facdca;
        }
        .info-item .icon svg{
            width:22px; height:22px; fill: var(--accent);
        }

        /* Text */
        .info-item .label{
            font-size:12px; color: var(--muted); line-height:1.2;
        }
        .info-item .value{
            font-size:15px; color: var(--text); font-weight:600; line-height:1.35;
            word-break: break-word;
        }

        /* Map responsive, bo góc */
        .map-wrap{
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;      /* responsive hiện đại */
            border-radius:16px;
            overflow:hidden;
            border:1px solid var(--border);
            box-shadow: 0 8px 18px rgba(0,0,0,.06);
        }
        .map-wrap iframe{
            position:absolute; inset:0;
            width:100%; height:100%; border:0;
        }

        /* Fallback nếu trình duyệt không hỗ trợ aspect-ratio (rất cũ) */
        /*
        .map-wrap{ padding-top:56.25%; }
        .map-wrap iframe{ position:absolute; top:0; left:0; width:100%; height:100%; }
        */



    </style>
    <main id="content" class="site-main post-1439 page type-page status-publish hentry" ng-controller="aboutPage" >


        <div class="page-content">
            <div data-elementor-type="wp-page" data-elementor-id="1439" class="elementor elementor-1439 elementor-1383"
                 data-elementor-post-type="page">
                <div class="elementor-element elementor-element-305e60a e-flex e-con-boxed e-con e-parent"
                     data-id="305e60a" data-element_type="container"
                     data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-0150c0d elementor-widget elementor-widget-heading"
                            data-id="0150c0d" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Liên hệ</h2></div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-75ddad3 e-flex e-con-boxed e-con e-parent"
                     data-id="75ddad3" data-element_type="container">
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-7a0c1ff elementor-widget elementor-widget-text-editor"
                            data-id="7a0c1ff" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-e95b6e9 elementor-widget elementor-widget-html"
                             data-id="e95b6e9" data-element_type="widget" data-widget_type="html.default" ng-cloak>
                            <div class="elementor-widget-container">
                                <div class="contact-card red">
                                    <form class="contact-form" id="contactForm">
                                        <h3 class="contact-title">Liên hệ với chúng tôi</h3>

                                        <div class="form-grid">
                                            <div class="field">
                                                <label for="fullname">Họ và tên</label>
                                                <input type="text" id="fullname" name="name" placeholder="Nguyễn Văn A">
                                                <div class="invalid-feedback d-block" ng-if="errors['name']"><% errors['name'][0] %></div>
                                            </div>

                                            <div class="field">
                                                <label for="phone">Số điện thoại</label>
                                                <input type="tel" id="phone" name="phone" placeholder="09xx xxx xxx"
                                                       inputmode="tel" pattern="^(\+?\d{1,3}[- ]?)?\d{9,11}$">
                                                <div class="invalid-feedback d-block" ng-if="errors['phone']"><% errors['phone'][0] %></div>
                                            </div>

                                            <div class="field full">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" name="email" placeholder="email@domain.com">
                                            </div>

                                            <div class="field full">
                                                <label for="message">Nội dung lời nhắn</label>
                                                <textarea id="message" name="message" rows="4" placeholder="Bạn cần tư vấn gì?"></textarea>
                                                <div class="invalid-feedback d-block" ng-if="errors['message']"><% errors['message'][0] %></div>
                                            </div>

                                            <div class="actions field full">
                                                <button type="button" class="btn-red" ng-click="submitForm()" ng-disabled="loading">
                                                     <span class="btn-wrap" ng-if="!loading">
                                      <span class="text-first">Gửi thông tin</span>
                                  </span>
                                                    <span class="btn-wrap" ng-if="loading">
                                                            <span class="text-first">Đang gửi...</span>
                                                        </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" ng-if="sendSuccess">
                                            <div class="space10"></div> <br>
                                            <div class="send-success-message">
                                                <p style="padding-bottom: 0px"> Cảm ơn bạn! Chúng tôi đã nhận được thông tin và sẽ liên hệ sớm.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="info-map-card">
                    <div class="info-grid">
                        <a class="info-item" href="tel:{{ $config->hotline }}" aria-label="Gọi điện">
      <span class="icon">
        <!-- phone -->
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v2a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.11 3.2 2 2 0 0 1 4.11 1h2a2 2 0 0 1 2 1.72c.12.9.31 1.77.57 2.61a2 2 0 0 1-.45 2.11L7.09 8.91a16 16 0 0 0 6 6l1.47-1.14a2 2 0 0 1 2.11-.45c.84.26 1.71.45 2.61.57A2 2 0 0 1 22 16.92z"/></svg>
      </span>
                            <div class="text">
                                <div class="label">Số điện thoại</div>
                                <div class="value">{{ $config->hotline }}</div>
                            </div>
                        </a>

                        <a class="info-item" href="mailto:{{ $config->email }}" aria-label="Gửi email">
      <span class="icon">
        <!-- mail -->
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2zm0 4l8 5 8-5"/></svg>
      </span>
                            <div class="text">
                                <div class="label">Email</div>
                                <div class="value">{{ $config->email }}</div>
                            </div>
                        </a>

                        <a class="info-item" href="{{ $config->google_map }}" target="_blank" rel="noopener" aria-label="Xem bản đồ">
      <span class="icon">
        <!-- pin -->
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s7-5.33 7-12a7 7 0 0 0-14 0c0 6.67 7 12 7 12z"/><circle cx="12" cy="10" r="3"/></svg>
      </span>
                            <div class="text">
                                <div class="label">Địa chỉ</div>
                                <div class="value">{{ $config->address_company }}</div>
                            </div>
                        </a>
                    </div>

                    <div class="map-wrap">
                       {!! $config->location !!}
                    </div>
                </div>

            </div>
            <div class="post-tags">
            </div>



        </div>


    </main>

@endsection

@push('scripts')
    <script>
        app.controller('aboutPage', function ($rootScope, $scope, $interval) {
            $scope.errors = [];
            $scope.sendSuccess = false;
            console.log(2)
            $scope.submitForm = function () {
                var url = "{{route('front.submitContact')}}";
                var data = jQuery('#contactForm').serialize();
                $scope.loading = true;
                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: data,
                    success: function (response) {
                        if (response.success) {
                            toastr.success(response.message);
                            jQuery('#contactForm')[0].reset();
                            $scope.errors = [];
                            $scope.sendSuccess = true;
                            $scope.$apply();
                        } else {
                            $scope.errors = response.errors;
                            toastr.warning(response.message);
                        }
                    },
                    error: function () {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.loading = false;
                        $scope.$apply();
                    }
                });
            }

        })
    </script>
@endpush
