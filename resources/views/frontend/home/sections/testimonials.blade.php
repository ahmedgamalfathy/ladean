@if(\App\Models\Option::where("key" , "show_testimonials")->first()->show_in_home == 1)

    <section id="testimonials" class="testimonials-section pb-100">
    <div class="container">
        <div class="top-content">
            <div class="title">
                <span class="sub-title">
                                    {{\App\Models\Setting::where('key', 'primary_header_testimonials')->first()->value}}

                </span>
                <h2>
                    {{\App\Models\Setting::where('key', 'secondary_header_testimonials')->first()->value}}

                </h2>
            </div>
            <p>
                {!! \App\Models\Setting::where('key', 'paragraph_header_testimonials')->first()->value !!}

            </p>
        </div>
        <div class="testimonial-slider owl-carousel">

            @foreach($testimonials as $testimonial)
                @if($testimonial->show_in_home == 1)
                <div class="slider-item">
                    <div class="content">
                        <div class="quote">
                            <i class="bx bxs-quote-right"></i>
                        </div>
                        <p>
                            <q>
                             {{$testimonial->content}}
                            </q>
                        </p>
                        <div class="client">
                            <div class="client-img">
                                <img src="{{asset($testimonial->image)}}" alt="client-1" />
                            </div>
                            <div class="client-info">
                                <h5>{{$testimonial->name}}</h5>
                                <div class="review">
                                    <ul class="list-inline mb-2">

                                        @for ($i = 0; $i < 5; $i++)
                                            <li class="list-inline-item m-0"><i class="{{ round($testimonial->rate) <= $i ? 'far' : 'fas' }} fa-star fa-sm text-warning"></i></li>
                                        @endfor

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

        </div>
    </div>
</section>
@endif
