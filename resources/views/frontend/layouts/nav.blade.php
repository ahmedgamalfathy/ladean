
<div class="main-navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{ asset(\App\Models\Setting::where('key', 'website_logo')->first()->value) }}" alt="logo" />
                    </a>
                </div>
                <div class="side-option-responsive">
                    <a href="#" class="side-option-button">
                        <i class="bx bx-dots-horizontal-rounded"></i>
                    </a>
                    <div class="side-option-inner">
{{--                        <div class="item">--}}
{{--                            <a--}}
{{--                                href="#searchBoxResponsive"--}}
{{--                                class="btn-search"--}}
{{--                                data-effect="mfp-zoom-in"--}}
{{--                            >--}}
{{--                                <i class="bx bx-search"></i>--}}
{{--                            </a>--}}
{{--                            <div--}}
{{--                                id="searchBoxResponsive"--}}
{{--                                class="search-box mfp-with-anim mfp-hide"--}}
{{--                            >--}}
{{--                                <form class="search-form">--}}
{{--                                    <input--}}
{{--                                        class="search-input"--}}
{{--                                        name="search"--}}
{{--                                        placeholder="{{trans('words.search')}}"--}}
{{--                                        type="text"--}}
{{--                                    />--}}
{{--                                    <button type="submit" class="btn-search">--}}
{{--                                        <i class="bx bx-search"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="item">
                            <div class="language">
                                <a href="#language" class="language-button"
                                >@lang("words.language")<i class="bx bxs-chevron-down"></i>
                                </a>
                                <ul class="menu">
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
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset(\App\Models\Setting::where('key', 'website_logo')->first()->value) }}" alt="Logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link active toggle"
                            >
                                @lang("words.home")

{{--                                <i class="bx bxs-chevron-down"></i--}}
                                </a>
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="index-2.html" class="nav-link active"--}}
{{--                                    >الصفحة الرئيسية 1</a--}}
{{--                                    >--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="index-3.html" class="nav-link"--}}
{{--                                    >الصفحة الرئيسية 2</a--}}
{{--                                    >--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="index-4.html" class="nav-link"--}}
{{--                                    >الصفحة الرئيسية 3</a--}}
{{--                                    >--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </li>
                        <li class="nav-item">
                            <a href="{{route('pages','من-نحن')}}" class="nav-link">
                                @lang("words.about_us")
                            </a>
                        </li>
                        <!--
                            <li class="nav-item">
                            <a href="testimonials.html" class="nav-link"
                              >اراء العملاء
                            </a>
                          </li>
                        -->
                        <!-- <li class="nav-item">
                          <a href="#" class="nav-link toggle"
                            >Pages<i class="bx bxs-chevron-down"></i
                          ></a>
                          <ul class="dropdown-menu">
                            <li class="nav-item">
                              <a href="team.html" class="nav-link">Team</a>
                            </li>
                            <li class="nav-item">
                              <a href="career.html" class="nav-link">Career</a>
                            </li>
                            <li class="nav-item">
                              <a href="help.html" class="nav-link">Help</a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link toggle"
                                >Projects<i class="bx bxs-chevron-down"></i
                              ></a>
                              <ul class="dropdown-menu">
                                <li class="nav-item">
                                  <a href="projects.html" class="nav-link"
                                    >Projects</a
                                  >
                                </li>
                                <li class="nav-item">
                                  <a href="projects-details.html" class="nav-link"
                                    >Projects Details</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a href="area-coverage.html" class="nav-link"
                                >Area Coverage</a
                              >
                            </li>
                            <li class="nav-item">
                              <a href="emergency.html" class="nav-link">Emergency</a>
                            </li>
                            <li class="nav-item">
                              <a href="appointment.html" class="nav-link"
                                >Appointment</a
                              >
                            </li>
                            <li class="nav-item">
                              <a href="pricing.html" class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item">
                              <a href="faq.html" class="nav-link">FAQ</a>
                            </li>
                            <li class="nav-item">
                              <a href="error-404.html" class="nav-link">404 Error</a>
                            </li>
                            <li class="nav-item">
                              <a href="coming-soon.html" class="nav-link"
                                >Coming Soon</a
                              >
                            </li>
                            <li class="nav-item">
                              <a href="login.html" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                              <a href="register.html" class="nav-link">Register</a>
                            </li>
                            <li class="nav-item">
                              <a href="privacy-policy.html" class="nav-link"
                                >Privacy Policy</a
                              >
                            </li>
                            <li class="nav-item">
                              <a href="terms-of-service.html" class="nav-link"
                                >Terms & Conditions</a
                              >
                            </li>
                            <li class="nav-item">
                              <a href="forgot-password.html" class="nav-link"
                                >Forgot Password</a
                              >
                            </li>
                          </ul>
                        </li> -->
                        <li class="nav-item">
                            <a href="{{route('home.products')}}" class="nav-link toggle"
                            >
                                @lang("words.products")
{{--                                <i class="bx bxs-chevron-down"></i>--}}

                            </a>
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="services.html" class="nav-link">المنتجات</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="services-details.html" class="nav-link"--}}
{{--                                    >تفاصيل المنتجات</a--}}
{{--                                    >--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </li>
                        <!-- <li class="nav-item">
                                      <a href="#" class="nav-link toggle">Blog<i class="bx bxs-chevron-down"></i></a>
                                      <ul class="dropdown-menu">
                                          <li class="nav-item">
                                              <a href="blog.html" class="nav-link">Blog</a>
                                          </li>
                                          <li class="nav-item">
                                              <a href="blog-details.html" class="nav-link">Blog Details</a>
                                          </li>
                                      </ul>
                                  </li> -->
                        <li class="nav-item">
                            <a href="{{route('pages','تواصل-معنا')}}" class="nav-link">@lang("words.contact-us") </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
