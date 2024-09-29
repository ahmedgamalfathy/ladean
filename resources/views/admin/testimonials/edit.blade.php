@extends("admin.layout.master")
@section('title' ,  trans('words.edit') )


@section("content")

    <h4 class="py-3 mb-4">
        <a href="{{route('admin.dashboard')}}">
            <span class="text-muted fw-light">{{trans('words.home')}}/</span>

        </a>
        <a href="{{route('admin.testimonials.index')}}">
            <span class="text-muted fw-light">{{trans('words.testimonials')}}/</span>

        </a>
        {{trans("words.edit")}}
    </h4>


    <!-- DataTable with Buttons -->
    <div class="card mb-4">
        {{--                <div class="card-header d-flex align-items-center justify-content-between">--}}
        {{--                    <h5 class="mb-0">{{ trans('words.landing') }}</h5>--}}
        {{--                </div>--}}
        <div class="card-body">
            <form action="{{ route('admin.testimonials.update' , $testimonial->id) }}" method="POST"
                  enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="row mb-3">
                            @foreach (config('translatable.locales') as $locale)

                                <div class="mb-3 col-md-6">
                                    <label class="form-label"
                                           for="name[{{ $locale }}]">@lang('words.client_name') {{ trans('words.' . $locale )}}</label>
                                    <input required type="text" class="form-control"
                                           id="name[{{ $locale }}]"
                                           name="name[{{ $locale }}]"
                                           value="{{$testimonial->translate($locale)->name}}"
                                           placeholder="{{trans('words.client_name')}} {{ trans('words.' . $locale )}}">
                                </div>

                            @endforeach
                        </div>
                        <div class="row mb-3">
                            @foreach (config('translatable.locales') as $locale)

                                <div class="mb-3 col-md-6">
                                    <label for="content[{{ $locale }}]" class="form-label"
                                           for="">@lang('words.client_comment') {{ trans('words.' . $locale )}}</label>
                                    <textarea required type="text" class="form-control"
                                              name="content[{{ $locale }}]"
                                              id="content[{{ $locale }}]"
                                              placeholder="{{trans('words.client_comment')}} {{ trans('words.' . $locale )}}">{{$testimonial->translate($locale)->content}} </textarea>



                                </div>

                            @endforeach
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-2 col-form-label">
                                <span>{{ trans('words.show_in_home') }}</span>
                            </div>
                            <div class="col-sm-10">
                                <label class="switch switch-lg">
                                    <input type="checkbox" class="switch-input" name="show_in_home"
                                           value="1" {{($testimonial->show_in_home)?'checked':''}}/>
                                    <span class="switch-toggle-slider">
                                                                        <span class="switch-on"></span>
                                                                        <span class="switch-off"></span>
                                                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-2 col-form-label">
                                <label for="rate">{{ trans('words.rating') }}</label>
                            </div>
                            <div class="col-sm-10">
                                <select id="rate" name="rate" class="form-select">
                                    <option value="1" @selected($testimonial->rate == 1)>1</option>
                                    <option value="2" @selected($testimonial->rate == 2)>2</option>
                                    <option value="3" @selected($testimonial->rate == 3)>3</option>
                                    <option value="4" @selected($testimonial->rate == 4)>4</option>
                                    <option value="5" @selected($testimonial->rate == 5)>5</option>
                                </select>

                            </div>

                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-2 col-form-label">
                                <span> @lang('words.client_image')</span>
                            </div>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">@lang("words.save")</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection



