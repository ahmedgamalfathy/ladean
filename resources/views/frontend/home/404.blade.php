<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<!-- Mirrored from templates.hibootstrap.com/facty/rtl/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2024 08:43:22 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="{{\App\Models\Setting::where('key', 'meta_description')->first()->value}}"
    />

    <title>
        {{\App\Models\Setting::where('key', 'website_title')->first()->value}}
    </title>

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.rtl.min.css')}}" />
    @endif
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/boxicons.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme-dark.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @if(app()->getLocale() == 'ar')

        <link rel="stylesheet" href="{{asset('frontend/assets/css/rtl.css')}}" />

    @endif

    <link rel="stylesheet" href="{{asset('frontend/assets/css/magedGhabour.css')}}" />

    <link rel="icon" href="{{asset(\App\Models\Setting::where('key', 'favicon')->first()->value)}}" type="image/png" />
</head>
<body>
    <section class="error-area">
        <div class="container">
            <div class="error-content">
                <div class="error-text">
                    <h1>404</h1>
                </div>
                <h3>{{Lang::get('words.page-not-found')}}</h3>
                <p>
                   {{Lang::get('words.page-have-been-removed')}}
                </p>
                <a href="{{route("home")}}" class="primary-btn">{{Lang::get('words.back-to-home')}}</a>
            </div>
        </div>
    </section>
</body>

