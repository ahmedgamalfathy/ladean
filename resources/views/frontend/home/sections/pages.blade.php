@extends('frontend.layouts.master')
@section('content')
{{--    <div class="container my-5 text-center">--}}
{{--        <h2>{{implode(' ',explode('-',request()->route('slug')))}}</h2>--}}
{{--        {!! $text !!}--}}
{{--    </div>--}}




<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>{{trans('words.'.$key)}}</h1>
            <ul>
                <li class="item"><a href="{{route("home")}}">@lang("words.home")</a></li>
                <li class="item active"><span></span>{{trans('words.'.$key)}}</li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{asset(\App\Models\Setting::where('key', $key."_image")->first()->value)}}" alt="Demo Image">
    </div>
</div>



@if(\App\Models\Setting::where('key', $key)->first()->key == 'faq')
    @include("frontend.home.sections.faq")
@elseif(\App\Models\Setting::where('key', $key)->first()->key == 'contact-us')
    @include("frontend.home.sections.contact")
    @include("frontend.home.sections.contact__form")

@else
    <div id="privacy" class="privacy-area pt-100 pb-70">
        <div class="container">
            <div class="content-area pb-70">
                {!! $text !!}
            </div>

        </div>
    </div>
@endif




@endsection
