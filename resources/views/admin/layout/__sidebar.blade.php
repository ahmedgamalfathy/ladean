<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset(\App\Models\Setting::where('key', 'website_logo')->first()->value) }}" alt="logo"
                     class="img-fluid" />
            </span>
            <span
                class="app-brand-text demo menu-text fw-bold">{{ \App\Models\Setting::where('key', 'website_title')->first()->value }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Page -->
        <li class="menu-item {{url()->current() == route('admin.dashboard') ? 'active' : ''}}">
            <a href="{{route('admin.dashboard')}}" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div data-i18n="Page 1">@lang("words.home")</div>
            </a>
        </li>
        <li class="menu-item {{url()->current() == route('admin.landing.index') ? 'active' : ''}}" >
            <a href="{{route('admin.landing.index')}}" class="menu-link" >
                <i class="menu-icon tf-icons  ti ti-slideshow"></i>
                <div data-i18n="Page 1">@lang('words.landing')</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('*/our-goals*') ? 'active' : ''}}">
            <a href="{{route('admin.our-goals.index')}}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-table-options"></i>
                <div data-i18n="Page 2">@lang('words.our-goals')</div>
            </a>
        </li>
        <li class="menu-item  {{url()->current() == route('admin.contact_us.index') ? 'active' : ''}}">
            <a href="{{route('admin.contact_us.index')}}" class="menu-link" >
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Page 2">@lang('words.contact-us')</div>
            </a>
        </li>
        <li class="menu-item {{request()->is('*/products*') ? 'active' : ''}}">
            <a href="{{route("admin.products.index")}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-building-store"></i>
                <div data-i18n="Page 2">@lang('words.products')</div>
            </a>
        </li>

{{--        {{url()->current() == route('admin.testimonials.index') ? 'active' : ''}--}}

      <li class="menu-item {{request()->is('*/testimonials*') ? 'active' : ''}}" >
          <a href="{{route('admin.testimonials.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users-group"></i>
                <div data-i18n="Page 2">@lang("words.testimonials")
                </div>
            </a>
        </li>


        <li class="menu-item  {{request()->is('*/partners*') ? 'active' : ''}}">
            <a href="{{route('admin.partners.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Page 2">@lang("words.partners")
                </div>
            </a>
        </li>

        <li class="menu-item  {{request()->is('*/faq*') ? 'active' : ''}}">
            <a href="{{route('admin.faq.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-question-mark"></i>
                <div data-i18n="Page 2">@lang("words.faq")
                </div>
            </a>
        </li>

        <li class="menu-item  {{request()->is('*/options*') ? 'active' : ''}}">
            <a href="{{route('admin.options.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-table-options"></i>
                <div data-i18n="Page 2">@lang("words.options_website")
                </div>
            </a>
        </li>


        <li class="menu-item  {{url()->current() == route('admin.settings.index') ? 'active' : ''}}">
            <a href="{{route('admin.settings.index')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Page 2">@lang("words.settings")
                </div>
            </a>
        </li>

    </ul>
</aside>
<!-- / Menu -->
