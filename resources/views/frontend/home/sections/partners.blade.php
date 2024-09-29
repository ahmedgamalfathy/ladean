@if(\App\Models\Option::where("key" , "show_partners")->first()->show_in_home == 1)

    <section id="team" class="partners-section pb-70">
    <div class="container">
        <div class="top-content">
            <div class="title">
                <span class="sub-title">{{\App\Models\Setting::where('key', 'secondary_header_partners')->first()->value}}</span>
                <h2>
                    {{\App\Models\Setting::where('key', 'primary_header_partners')->first()->value}}
                </h2>
            </div>
            <p>
                {!! \App\Models\Setting::where('key', 'paragraph_header_partners')->first()->value !!}
            </p>
        </div>
        <div class="partners-slider owl-carousel owl-theme">
            @foreach($partners as $partner)
                @if($partner->show_in_home == 1)
                    <div class="item-single">
                        <div class="image">
                            <a href="#"
                            >
                                <img class="img-fluid" src="{{$partner->image}}" alt="" />
                            </a>
                        </div>

                    </div>
                @endif
            @endforeach

        </div>
    </div>
</section>
@endif
