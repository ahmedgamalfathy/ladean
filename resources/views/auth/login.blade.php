{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}



    <!DOCTYPE html>

<html
    lang="{{app()->getLocale()}}"
    class="light-style customizer-hide"
    dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}"
    data-theme="theme-default"
    data-assets-path="../../backend/assets/"
{{--    data-template="vertical-menu-template"--}}
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@lang("words.login")</title>


    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('backend/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/css/pages/page-auth.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('backend/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('backend/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('backend/assets/js/config.js')}}"></script>
</head>

<body>
<!-- Content -->


<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                      <img class="img-fluid" src="{{asset(\App\Models\Setting::where('key' , 'website_logo')->first()->value)}}" alt="">
                  </span>
                            <span class="app-brand-text demo text-body fw-bold ms-1">{{\App\Models\Setting::where('key', 'website_title')->first()->value}}</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1 pt-2"> {{trans('words.welcome_to') . \App\Models\Setting::where('key' , 'website_title')->first()->value}}! 👋</h4>
                    <p class="mb-4">@lang("words.plz_sign-in_to_dashboard")</p>

                    <form id="formAuthentication" method="POST" class="mb-3" action="{{ route('login') }}" >
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">@lang("words.email_or_username")</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                value="{{old('email')}}"
                                placeholder="Enter your email or username"
                                autofocus />
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">@lang("words.password")</label>
{{--                                <a href="auth-forgot-password-basic.html">--}}
{{--                                    <small>Forgot Password?</small>--}}
{{--                                </a>--}}
                            </div>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('password')}}
                                    </div>
                                @endif
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> @lang('words.remember_me')</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">@lang("words.sign_in")</button>
                        </div>
                    </form>

{{--                    <p class="text-center">--}}
{{--                        <span>New on our platform?</span>--}}
{{--                        <a href="auth-register-basic.html">--}}
{{--                            <span>Create an account</span>--}}
{{--                        </a>--}}
{{--                    </p>--}}

{{--                    <div class="divider my-4">--}}
{{--                        <div class="divider-text">or</div>--}}
{{--                    </div>--}}

{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">--}}
{{--                            <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>--}}
{{--                        </a>--}}

{{--                        <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">--}}
{{--                            <i class="tf-icons fa-brands fa-google fs-5"></i>--}}
{{--                        </a>--}}

{{--                        <a href="javascript:;" class="btn btn-icon btn-label-twitter">--}}
{{--                            <i class="tf-icons fa-brands fa-twitter fs-5"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="{{asset('backend/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('backend/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('backend/assets/vendor/js/menu.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('backend/assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('backend/assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('backend/assets/js/pages-auth.js')}}"></script>
</body>
</html>

