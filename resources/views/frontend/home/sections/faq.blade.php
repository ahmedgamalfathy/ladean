

@if(\App\Models\Option::where("key" , "show_faq")->first()->show_in_home == 1)


<div id="faq" class="faq-area pt-100 pb-70">
    <div class="container">
        <div class="top-content">
            <div class="title">
                <span class="sub-title">
                     {{\App\Models\Setting::where('key', 'secondary_header_faq')->first()->value}}
                </span>
                <h2>{{\App\Models\Setting::where('key', 'primary_header_faq')->first()->value}}</h2>
            </div>
            <p>
                {!! \App\Models\Setting::where('key', 'paragraph_header_faq')->first()->value !!}
            </p>
        </div>
        <div class="row">

            @foreach($faqs as $key=>$faq)
               @if($loop->odd)
                    <div class="col-lg-6 col-md-12">
                        <div class="panel-group mb-30" id="accordion1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse{{$key}}"
                                                   aria-expanded="false">
                                                   {{$faq->question}}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse{{$key}}" class="collapse" data-bs-parent="#accordion{{$key}}">
                                            <div class="panel-body">
                                                <p>
                                                    {{$faq->answer}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @if($loop->even)
                 <div class="col-lg-6 col-md-12">
                           <div class="panel-group mb-30" id="accordion2">
                               <div class="row">
                                   <div class="col-lg-12">
                                       <div class="panel">
                                           <div class="panel-heading">
                                               <h4 class="panel-title">
                                                   <a class="collapsed" data-bs-toggle="collapse" href="#collapse{{$key}}">
                                                       {{$faq->question}}
                                                   </a>
                                               </h4>
                                           </div>
                                           <div id="collapse{{$key}}" class="collapse" data-bs-parent="#accordion{{$key}}">
                                               <div class="panel-body">
                                                   <p>
                                                       {{$faq->answer}}
                                                   </p>
                                               </div>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                       </div>
            @endif

            @endforeach
        </div>
    </div>
</div>
@endif
