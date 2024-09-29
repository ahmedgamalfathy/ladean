@extends('admin.layout.master')
@section('title' ,  trans('words.settings') )

@section('content')
    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span class="text-muted fw-light">{{trans('words.home')}}/</span></a> {{trans('words.settings')}}
    </h4>
    <div class="row">

        <!-- Basic Layout -->
        <div class="col-xxl">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">برجاء مراجعة الاخطاء التالية:</h4>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-4">
                <div class="card-body">

                    <form  method="post"  action="{{route('admin.settings.store')}}" enctype="multipart/form-data" novalidate>
                        @csrf
                        @php $x=0; @endphp

                    <div class="col-xl-12">
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                                <li class="nav-item">
                                    <button
                                        type="button"
                                        class="nav-link active"
                                        role="tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-justified-home"
                                        aria-controls="navs-pills-justified-home"
                                        aria-selected="true">
                                        <i class="tf-icons ti ti-home ti-xs me-1"></i>
                                        {{trans('words.website_data')}}
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button
                                        type="button"
                                        class="nav-link"
                                        role="tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-justified-social"
                                        aria-controls="navs-pills-justified-social"
                                        aria-selected="false">
                                        <i class="tf-icons ti ti-world-bolt ti-xs me-1"></i>
                                        @lang("words.social_media")
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button
                                        type="button"
                                        class="nav-link"
                                        role="tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-justified-messages"
                                        aria-controls="navs-pills-justified-messages"
                                        aria-selected="false">
                                        <i class="tf-icons ti ti-wallpaper ti-xs me-1"></i>
                                        @lang("words.inside_page")
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button
                                        type="button"
                                        class="nav-link"
                                        role="tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-justified-technical"
                                        aria-controls="navs-pills-justified-technical"
                                        aria-selected="false">
                                        <i class="tf-icons ti ti-phone ti-xs me-1"></i>
                                        @lang("words.technical")
                                    </button>
                                </li>


                                <li class="nav-item">
                                    <button
                                        type="button"
                                        class="nav-link"
                                        role="tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-justified-heading"
                                        aria-controls="navs-pills-justified-heading"
                                        aria-selected="false">
                                        <i class="tf-icons ti ti-heading ti-xs me-1"></i>
                                        @lang("words.headlines")
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">


                                    @foreach($settings as $setting)
                                        @if($setting->tabs == 'website_data')
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                   for="{{$setting->key}}">{{trans("words." . $setting->key)}}</label>

                                            @if($setting->type == 'textarea')
                                                <div class="col-sm-10">
                                        <textarea
                                            name="{{$setting->key}}"
                                            class="form-control {{(!in_array($setting->key,['header_code','body_code']))?'editor'.$x:''}}"
                                            id="{{$setting->key}}"
                                            cols="30"
                                            rows="5"
                                        >{{$setting->value}}</textarea></div>
                                                @php
                                                    if (!in_array($setting->key,['header_code','body_code'])){
                                                    $x++;
                                                    }
                                                @endphp
                                            @else
                                                <div class="col-sm-10">
                                                    <input
                                                        type="{{$setting->type}}"
                                                        name="{{$setting->key}}"
                                                        id="{{$setting->key}}"
                                                        class="form-control"
                                                        value="{{$setting->value}}"
                                                    /></div>
                                            @endif
                                        </div>
                                        @endif
                                    @endforeach


                                </div>
                                <div class="tab-pane fade" id="navs-pills-justified-social" role="tabpanel">
                                    @foreach($settings as $setting)
                                        @if($setting->tabs == 'social')
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="{{$setting->key}}">{{trans("words." . $setting->key)}}</label>

                                                @if($setting->type == 'textarea')
                                                    <div class="col-sm-10">
                                        <textarea
                                            name="{{$setting->key}}"
                                            class="form-control {{(!in_array($setting->key,['header_code','body_code']))?'editor'.$x:''}}"
                                            id="{{$setting->key}}"
                                            cols="30"
                                            rows="5"
                                        >{{$setting->value}}</textarea></div>
                                                    @php
                                                        if (!in_array($setting->key,['header_code','body_code'])){
                                                        $x++;
                                                        }
                                                    @endphp
                                                @else
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="{{$setting->type}}"
                                                            name="{{$setting->key}}"
                                                            id="{{$setting->key}}"
                                                            class="form-control"
                                                            value="{{$setting->value}}"
                                                        /></div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
                                    @foreach($settings as $setting)
                                        @if($setting->tabs == 'website_pages')
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="{{$setting->key}}">{{trans("words." . $setting->key)}}</label>

                                                @if($setting->type == 'textarea')
                                                    <div class="col-sm-10">
                                        <textarea
                                            name="{{$setting->key}}"
                                            class="form-control {{(!in_array($setting->key,['header_code','body_code']))?'editor'.$x:''}}"
                                            id="{{$setting->key}}"
                                            cols="30"
                                            rows="5"
                                        >{{$setting->value}}</textarea></div>
                                                    @php
                                                        if (!in_array($setting->key,['header_code','body_code'])){
                                                        $x++;
                                                        }
                                                    @endphp
                                                @else
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="{{$setting->type}}"
                                                            name="{{$setting->key}}"
                                                            id="{{$setting->key}}"
                                                            class="form-control"
                                                            value="{{$setting->value}}"
                                                        /></div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="navs-pills-justified-technical" role="tabpanel">
                                    @foreach($settings as $setting)
                                        @if($setting->tabs == 'technical_support')
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="{{$setting->key}}">{{trans("words." . $setting->key)}}</label>

                                                @if($setting->type == 'textarea')
                                                    <div class="col-sm-10">
                                        <textarea
                                            name="{{$setting->key}}"
                                            class="form-control {{(!in_array($setting->key,['header_code','body_code']))?'editor'.$x:''}}"
                                            id="{{$setting->key}}"
                                            cols="30"
                                            rows="5"
                                        >{{$setting->value}}</textarea></div>
                                                    @php
                                                        if (!in_array($setting->key,['header_code','body_code'])){
                                                        $x++;
                                                        }
                                                    @endphp
                                                @else
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="{{$setting->type}}"
                                                            name="{{$setting->key}}"
                                                            id="{{$setting->key}}"
                                                            class="form-control"
                                                            value="{{$setting->value}}"
                                                        /></div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>


                                <div class="tab-pane fade" id="navs-pills-justified-heading" role="tabpanel">
                                    @foreach($settings as $setting)
                                        @if($setting->tabs == 'header')
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                       for="{{$setting->key}}">{{trans("words." . $setting->key)}}</label>

                                                @if($setting->type == 'textarea')
                                                    <div class="col-sm-10">
                                        <textarea
                                            name="{{$setting->key}}"
                                            class="form-control {{(!in_array($setting->key,['header_code','body_code']))?'editor'.$x:''}}"
                                            id="{{$setting->key}}"
                                            cols="30"
                                            rows="5"
                                        >{{$setting->value}}</textarea></div>
                                                    @php
                                                        if (!in_array($setting->key,['header_code','body_code'])){
                                                        $x++;
                                                        }
                                                    @endphp
                                                @else
                                                    <div class="col-sm-10">
                                                        <input
                                                            type="{{$setting->type}}"
                                                            name="{{$setting->key}}"
                                                            id="{{$setting->key}}"
                                                            class="form-control"
                                                            value="{{$setting->value}}"
                                                        /></div>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach
                                </div>



                            </div>
                        </div>
                    </div>





                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">@lang("words.save")</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const headTextEditor = document.querySelectorAll("iframe");

            for (let i = 0; i < headTextEditor.length; i++) {
                let item = headTextEditor[i].contentWindow.document.head;

                item.innerHTML += `
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
                            `

            }

            const bodyTextEditor = document.querySelectorAll("iframe");

            for (let i = 0; i < bodyTextEditor.length; i++) {
                let item = bodyTextEditor[i].contentWindow.document.body;
                console.log(item)

                const AllSpans = item.querySelectorAll("body *");
                for (let i = 0; i < AllSpans.length; i++) {
                    let itemSpan = AllSpans[i].setAttribute('style', 'font-family:Cairo !important ; direction:rtl ; font-weight:normal ; height:auto');

                }

            }

        });

    </script>
@endsection

