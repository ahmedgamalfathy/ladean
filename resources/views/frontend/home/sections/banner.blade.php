<div id="home" class="home-banner-area" style="background: url('{{$landing->image}}') no-repeat center ; background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ms-auto">
                <div class="banner-content">
                    <h1>
                        {{$landing?->name}}
                    </h1>
                    <p>
                        {!! $landing?->content  !!}
                    </p>
                    <div class="btn-group">
                        <a href="{{route('pages','تواصل-معنا')}}" class="primary-btn">@lang("words.contact-us")</a>
                        <a
                            href="{{$landing?->link1}}"
                            class="youtube-popup video-btn"
                        >
                            <i class="bx bx-right-arrow"></i>
                        </a>
                        <a href="{{route('pages','من-نحن')}}" class="btn-text">@lang('words.about-us')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

