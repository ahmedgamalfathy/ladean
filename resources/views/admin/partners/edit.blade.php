@extends('admin.layout.master')
@section('title' ,trans('words.edit'))
@section('content')
    <h4 class="py-3 mb-4">
        <a href="{{ route('admin.dashboard') }}">
            <span class="text-muted fw-light">{{ trans('words.home') }}/</span>
        </a>
        <a href="{{ route('admin.partners.index') }}">
            <span class="text-muted fw-light">{{ trans('words.partners') }}/</span>
        </a>
        @lang("words.add_new")
    </h4>

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
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">{{ trans('words.partners') }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.partners.update' , $partner->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <div class="form-body">
                            <div class="row">

{{--                                <div class="row mb-3">--}}

{{--                                    <div class="col-sm-2 col-form-label">--}}
{{--                                        <span> @lang("words.name")</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input required type="text" class="form-control"--}}
{{--                                               name="name" value="{{$partner->name}}" placeholder="{{trans('words.name')}}">--}}
{{--                                    </div>--}}

{{--                                </div>--}}


                                <div class="row mb-3">

                                    <div class="col-sm-2 col-form-label">
                                        <span>@lang("words.image")</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image">

                                    </div>
                                </div>
                                <div class="row mb-3">

                                    <div class="col-sm-2 col-form-label">
                                        <span>{{ trans('words.show_in_home') }}</span>                                    </div>
                                    <div class="col-sm-10">
                                        <label class="switch switch-lg">
                                            <input type="checkbox" class="switch-input" name="show_in_home"
                                                   value="1" {{($partner->show_in_home)?'checked':''}} />
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                        </label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">@lang("words.edit")</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
