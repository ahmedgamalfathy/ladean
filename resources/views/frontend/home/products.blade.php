@extends("frontend.layouts.master")
@section("title" , trans("words.products"))

@section("content")

    <div class="service-single-area ptb-100">

        <section id="services" class="service-section-three">
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
                <div class="row justify-content-center">

                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6">
                            <div class="item-single mb-30">
                                <div class="image">

                                        <img src="{{asset($product->image)}}"
                                                                         alt="Demo Image">

                                </div>
                                <div class="content">
                                    <h3><a href="services-details.html">{{$product->name}}</a></h3>
                                    <p>{{$product->content}}</p>

                                </div>
                                <div class="spacer"></div>
                            </div>
                        </div>
                    @endforeach



                    <div class="col-lg-12 col-md-12">
                        <div class="pagination text-center">
                            {{ $products->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
