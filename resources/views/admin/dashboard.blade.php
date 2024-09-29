@extends('admin.layout.master')
@section('title' ,  trans('words.home') )


@section("content")
    <div class="container-xxl flex-grow-1 container-p-y">
       <div class="row">
           <div class="col-xl-4 mb-4 col-lg-5 col-12">
               <div class="card h-100">
                   <div class="d-flex align-center">

                       <div class="card-body text-nowrap d-flex flex-column justify-content-center align-items-center">
                           <h5 class="card-title mb-2">@lang('words.hello')  🎉</h5>
                           <h3 class="mb-2">{{Auth::user()->name}}</h3>

                           <a href="{{route('home')}}" class="btn btn-label-primary waves-effect">
                               <span class="ti-xs ti ti-world me-1"></span>
                               {{trans('words.view_site')}}</a>
                       </div>


                   </div>
               </div>
           </div>
           <!-- Statistics -->
           <div class="col-xl-8 mb-4 col-lg-7 col-12">
               <div class="card h-100">
                   <div class="card-header">
                       <div class="d-flex justify-content-between mb-3">
                           <h5 class="card-title mb-0">{{ trans('words.statistics') }}</h5>
                           {{-- <small class="text-muted">Updated 1 month ago</small> --}}
                       </div>
                   </div>
                   <div class="card-body">
                       <div class="row gy-3">
                           <div class="col-md-3 col-6">
                               <div class="d-flex align-items-center">
                                   <div class="badge rounded-pill bg-label-primary me-3 p-2">
                                       <i class="ti ti-shopping-cart ti-sm"></i>
                                   </div>
                                   <div class="card-info">
                                       <h5 class="mb-0">{{ App\Models\Product::count() }}</h5>
                                       <small>{{ trans('words.products') }}</small>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-3 col-6">
                               <div class="d-flex align-items-center">
                                   <div class="badge rounded-pill bg-label-info me-3 p-2">
                                       <i class="ti ti-users ti-sm"></i>
                                   </div>
                                   <div class="card-info">
                                       <h5 class="mb-0">{{ App\Models\Partner::count() }}</h5>
                                       <small>{{ trans('words.partners') }}</small>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-3 col-6">
                               <div class="d-flex align-items-center">
                                   <div class="badge rounded-pill bg-label-success me-3 p-2">
                                       <i class="ti ti-mood-heart ti-sm"></i>
                                   </div>
                                   <div class="card-info">
                                       <h5 class="mb-0">{{ App\Models\Testimonial::count() }}</h5>
                                       <small>{{ trans('words.testimonials') }}</small>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-3 col-6">
                               <div class="d-flex align-items-center">
                                   <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                       <i class="ti ti-mail-opened ti-sm"></i>
                                   </div>
                                   <div class="card-info">
                                       <h5 class="mb-0">{{ App\Models\ContactUs::count() }}</h5>
                                       <small>{{ trans('words.contacts') }}</small>
                                   </div>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
           <!--/ Statistics -->

       </div>
    </div>
@endsection
