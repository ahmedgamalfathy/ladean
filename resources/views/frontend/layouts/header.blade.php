<div class="header-top">
    <div class="container">
        <div class="header-left">
            <ul class="quick-links">
                <li class="nav-item">
                    <a href="{{route('pages','سياسة-الخصوصية')}}" class="nav-link">@lang("words.privacy_policy")</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages','الاسئلة-الشائعة')}}" class="nav-link">@lang('words.FAQ')</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pages','تواصل-معنا')}}" class="nav-link">@lang("words.contact-us")</a>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <div class="side-option">
{{--                <div class="item">--}}
{{--                    <a--}}
{{--                        href="#searchBox"--}}
{{--                        class="btn-search"--}}
{{--                        data-effect="mfp-zoom-in"--}}
{{--                    >--}}
{{--                        <i class="bx bx-search"></i>--}}
{{--                    </a>--}}
{{--                    <div id="searchBox" class="search-box mfp-with-anim mfp-hide">--}}
{{--                        <form class="search-form">--}}
{{--                            <input--}}
{{--                                class="search-input"--}}
{{--                                name="search"--}}
{{--                                placeholder="بحث"--}}
{{--                                type="text"--}}
{{--                            />--}}
{{--                            <button type="submit" class="btn-search">--}}
{{--                                <i class="bx bx-search"></i>--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="item">
                    <div class="language">
                        <a href="#language" class="language-button"
                        >
                            @lang("words.language")
                            <i class="bx bxs-chevron-down"></i>
                        </a>

                        <ul class="menu">
{{--                            <li class="menu-item">--}}
{{--                                <a href="#" class="menu-link">--}}
{{--                                    <img src="{{asset('frontend/assets/img/flag-uk.png')}}" alt="flag" />--}}
{{--                                    English--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li class="menu-item">--}}
{{--                                <a href="#" class="menu-link">--}}
{{--                                    <img src="{{asset('frontend/assets/img/flag-jordan.png')}}" alt="flag" />--}}
{{--                                    العربية--}}
{{--                                </a>--}}
{{--                            </li>--}}


                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="menu-item">
                                    <a  class="menu-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <span  class="align-middle">{{ $properties['native'] }}</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <!-- <a href="contact.html" class="primary-btn"> تواصل معنا </a> -->
        </div>
    </div>
</div>
