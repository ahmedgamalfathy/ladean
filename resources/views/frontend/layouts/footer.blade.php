
<a
    class="btn-whatsapp-pulse"
    href="https://wa.me/{{\App\Models\Setting::where('key', 'whatsapp_phone')->first()->value}}"
    target="_blank"
>
    <img src="{{asset('frontend/assets/img/whatsapp.png')}}" class="img-fluid whatsapp-icon" />
</a>

<footer class="footer-area">
    <div class="footer-top pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="navbar-brand">
                            <a href="{{route('home')}}">
                                <img src="{{\App\Models\Setting::where('key', 'website_logo_dark')->first()->value}}" alt="Logo">
                            </a>
                        </div>
                        <p>{!! \App\Models\Setting::where('key', 'meta_description')->first()->value !!}</p>
                        <div class="social-link">



                            @if(\App\Models\Setting::where('key', 'facebook')->first()->value !== null )
                                <a href="{{\App\Models\Setting::where('key', 'facebook')->first()->value}}" target="_blank"
                                ><i class="bx bxl-facebook"></i
                                    ></a>
                            @endif

                            @if(\App\Models\Setting::where('key', 'twitter')->first()->value !== null)
                                <a href="{{\App\Models\Setting::where('key', 'twitter')->first()->value}}" target="_blank"
                                ><i class="bx bxl-twitter"></i
                                    ></a>
                            @endif

                            @if(\App\Models\Setting::where('key', 'youtube')->first()->value !== null)
                                <a href="{{\App\Models\Setting::where('key', 'youtube')->first()->value}}" target="_blank"
                                ><i class="bx bxl-youtube"></i
                                    ></a>
                            @endif



                                @if(\App\Models\Setting::where('key', 'instagram')->first()->value !== null)
                                    <a href="{{\App\Models\Setting::where('key', 'instagram')->first()->value}}" target="_blank"
                                    ><i class="bx bxl-instagram"></i
                                        ></a>
                                @endif

                                @if(\App\Models\Setting::where('key', 'snapchat')->first()->value !== null)
                                    <a href="{{\App\Models\Setting::where('key', 'snapchat')->first()->value}}" target="_blank"
                                    ><i class="bx bxl-snapchat"></i
                                        ></a>
                                @endif





                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3></h3>
                        <ul class="footer-links"></ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3>@lang('words.important_links')</h3>
                        <ul class="footer-links">
                            <li>
                                <i class="bx bx-chevrons-right"></i>
                                <a href="{{route('pages','الاسئلة-الشائعة')}}">@lang('words.FAQ')</a>
                            </li>

                            <li>
                                <i class="bx bx-chevrons-right"></i>
                                <a href="{{route('pages','الشروط-والاحكام')}}">@lang('words.terms_and_conditions')</a>
                            </li>
                            <li>
                                <i class="bx bx-chevrons-right"></i>
                                <a href="{{route('pages','سياسة-الخصوصية')}}">@lang('words.privacy_policy')</a>
                            </li>
                            <li>
                                <i class="bx bx-chevrons-right"></i>
                                <a href="{{route('pages','تواصل-معنا')}}">@lang("words.contact-us")</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3>@lang('words.contact-us')</h3>
                        <ul class="footer-links">
                            {!! \App\Models\Setting::where('key', 'website_map')->first()->value !!}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-image"></div>
        </div>
    </div>
    <div class="copy-right-area">
        <div class="container">
            <div class="copy-right-content">
                <ul class="info-list">
                    <li class="content">
                        <i class="bx bx-map"></i>
                        {{\App\Models\Setting::where('key', 'website_address')->first()->value}}
                    </li>
                    <li class="content">
                        <i class="bx bx-envelope"></i>
                        <a
                            href="mailto:{{\App\Models\Setting::where('key', 'email')->first()->value}}"
                        ><span
                                class="__cf_email__"
                            >
                                        {{\App\Models\Setting::where('key', 'email')->first()->value}}
                            </span
                            ></a
                        >
                    </li>
                </ul>
                <span>

                    @lang("words.copyright")
              <script
                  data-cfasync="false"
                  src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
              ></script>
              <script>
                document.write(new Date().getFullYear());
              </script>
              <a href="{{route("home")}}" target="_blank">
                  {{\App\Models\Setting::where('key', 'website_title')->first()->value}}
              </a>
            </span>
            </div>
        </div>
    </div>
</footer>

