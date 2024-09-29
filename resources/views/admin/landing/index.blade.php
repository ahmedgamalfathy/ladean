@extends("admin.layout.master")

@section('title' , trans('words.landing'))

@section("content")

    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                class="text-muted fw-light">{{trans('words.home')}}/</span></a>
        {{trans('words.landing')}}</h4>

    <div class="row">

        <!-- Basic Layout -->
        <div class="col-xxl">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">برجاء مراجعة الاخطاء التالية:</h4>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card mb-4">
{{--                <div class="card-header d-flex align-items-center justify-content-between">--}}
{{--                    <h5 class="mb-0">{{ trans('words.landing') }}</h5>--}}
{{--                </div>--}}
                <div class="card-body">
                    <form action="{{ route('admin.landing.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="row">
                                <div class="row mb-3">
                                    @foreach (config('translatable.locales') as $locale)


                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="name[{{ $locale }}]" >@lang('words.heading') {{ trans('words.' . $locale )}}</label>
                                            <input required type="text" class="form-control"
                                                   id="name[{{ $locale }}]"
                                                   name="name[{{ $locale }}]"
                                                   value="{{$landing?->translate($locale)->name ?? ''}}"
                                                   placeholder="{{trans('words.heading')}} {{ trans('words.' . $locale )}}">
                                        </div>

                                    @endforeach
                                </div>

                                <div class="row mb-3">
                                    @foreach (config('translatable.locales') as $key=>$locale)

                                        <div class="mb-3 col-md-6">
                                            <label for="content[{{ $locale }}]" class="form-label" for="">@lang('words.content') {{ trans('words.' . $locale )}}</label>
                                            <textarea required type="text" class="form-control editor{{$key}}"
                                                   name="content[{{ $locale }}]"
                                                      id="content[{{ $locale }}]"
                                                   placeholder="{{trans('words.heading')}} {{ trans('words.' . $locale )}}">{{$landing?->translate($locale)->content ?? ''}}</textarea>

                                        </div>

                                    @endforeach
                                </div>
{{--                                <div class="row mb-3">--}}

{{--                                    <div class="col-sm-2 col-form-label">--}}
{{--                                        <span>{{ trans('words.reviewMain') }}</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <label class="switch switch-lg">--}}
{{--                                            <input type="checkbox" class="switch-input" name="show_in_home"--}}
{{--                                                   value="1"/>--}}
{{--                                            <span class="switch-toggle-slider">--}}
{{--                                                <span class="switch-on"></span>--}}
{{--                                                <span class="switch-off"></span>--}}
{{--                                            </span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

                                <div class="row mb-3">

                                    <div class="col-sm-2 col-form-label">
                                        <span> @lang('words.video_link')</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" value="{{$landing->link1 ?? ""}}" name="link1">

                                    </div>
                                </div>
{{--                                <div class="row mb-3">--}}

{{--                                    <div class="col-sm-2 col-form-label">--}}
{{--                                        <span> @lang('words.page_link')</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="url" class="form-control" value="{{$landing->link2 ?? ""}}" name="link2">--}}

{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="row mb-3">

                                    <div class="col-sm-2 col-form-label">
                                        <span> @lang('words.image_landing')</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

