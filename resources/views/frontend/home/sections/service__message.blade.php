@if(\App\Models\Option::where("key" , "show_our_goals")->first()->show_in_home == 1)
<section class="promo-service-section">
    <div class="container">
        <div class="row justify-content-center">

            @foreach($ourgoals as $ourgoal)
               @if($ourgoal->show_in_home == 1)
                    <div class="col-lg-4 col-md-6">
                        <div class="item-single mb-30">
                            <img class="img-fluid" src="{{asset($ourgoal->image)}}" alt="" style="width:100px;height: 100px">
                            <h3>

                                {{$ourgoal->name}}
                            </h3>
                            <p>
                                {!! $ourgoal->content  !!}
                            </p>
                                                   <div class="cta-btn">
                                                        <a href="services-details.html" class="btn-text">اقرأ المزيد</a>
                                                    </div>
                        </div>
                    </div>
               @endif
            @endforeach

        </div>
    </div>
</section>
@endif
