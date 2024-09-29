
<!-- Navbar -->

<nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <div class="navbar-nav align-items-center">
            <div class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-md"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-start dropdown-styles">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                            <span class="align-middle"><i class="ti ti-sun me-2"></i>@lang('words.light')</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                            <span class="align-middle"><i class="ti ti-moon me-2"></i>@lang('words.dark')</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                            <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>@lang('words.system')</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <ul class="navbar-nav flex-row align-items-center ms-auto">

            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                </a>


                <ul class="dropdown-menu dropdown-menu-end">

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li >
                        <a  class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            <span  class="align-middle">{{ $properties['native'] }}</span>
                        </a>
                    </li>
                @endforeach
{{--                    <li>--}}
{{--                        <a class="dropdown-item" href="https://www.high-endsolutions.com/lang/ar">--}}

{{--                            <span class="align-middle">العربية</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{Auth::user()->image}}" alt class="h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{route('admin.profile.index')}}">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{Auth::user()->image}}" alt class="h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">{{Auth()->user()->name}}</span>
                                    <small class="text-muted">{{Auth()->user()->name}}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
{{--                    <li>--}}
{{--                        <a class="dropdown-item" href="{{route('admin.profile.index')}}">--}}
{{--                            <i class="ti ti-user-check me-2 ti-sm"></i>--}}
{{--                            <span class="align-middle">My Profile</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li>
                        <a href="{{route('admin.settings.index')}}" class="dropdown-item">
                            <i class="ti ti-settings me-2 ti-sm"></i>
                            <span class="align-middle">@lang('words.settings')</span>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" onclick="event.preventDefault();this.closest('form').submit();" href="{{route('logout')}}">
                                <i class="ti ti-logout me-2 ti-sm"></i>
                                <span class="align-middle">@lang('words.logout')</span>
                            </a>
                        </form>
                    </li>




                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>

<!-- / Navbar -->
