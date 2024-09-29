

@if(\App\Models\Option::where("key" , "show_products")->first()->show_in_home == 1)
    <section id="services" class="services-section pb-100 pt-5">
        <div class="container">
            <div class="top-content">
                <div class="title">
                <span class="sub-title">
                                    {{\App\Models\Setting::where('key', 'secondary_header_products')->first()->value}}
                </span>
                    <h2>
                        {{\App\Models\Setting::where('key', 'primary_header_products')->first()->value}}

                    </h2>
                </div>
                <p>
                    {!! \App\Models\Setting::where('key', 'paragraph_header_products')->first()->value !!}

                </p>
                {{--            <a href="services.html" class="primary-btn">جميع المنتجات</a>--}}
            </div>
            <div class="services-slider owl-carousel">

                @foreach($products as $product)
                    @if($product->show_in_home == 1)
                        <div class="item-single">
                            <div class="image">
                                {{--                            <a href="services-details.html"--}}
                                {{--                            ></a>--}}

                                <img src="{{$product->image}}" alt="{{$product->name}}"
                                />
                            </div>
                            <div class="content">
                                <h3>
                                    {{$product->name}}
{{--                                    <a href="services-details.html">  {{$product->name}}</a>--}}
                                </h3>
                                <p>
                                    {{$product->content}}
                                </p>
                                {{--                    <div class="cta-btn">--}}
                                {{--                        <a href="services-details.html" class="btn-text">اقرأ المزيد</a>--}}
                                {{--                    </div>--}}
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>

@endif
