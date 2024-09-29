@extends("admin.layout.master")
@section('title' ,  trans('words.edit') )


@section("content")

    <h4 class="py-3 mb-4">
        <a href="{{route('admin.dashboard')}}">
            <span class="text-muted fw-light">{{trans('words.home')}}/</span>
        </a>
        <a href="{{route('admin.products.index')}}">
            <span class="text-muted fw-light">{{trans('words.products')}}/</span>
        </a>
        {{trans('words.edit')}}
    </h4>

    <!-- DataTable with Buttons -->
    <div class="card mb-4">

        <div class="card-body">
            <form action="{{ route('admin.products.update' , $product->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-body">
                    <div class="row">
                        <div class="row mb-3">
                            @foreach (config('translatable.locales') as $locale)

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name[{{ $locale }}]" >@lang('words.product_name') {{ trans('words.' . $locale )}}</label>
                                    <input required type="text" class="form-control"
                                           id="name[{{ $locale }}]"
                                           name="name[{{ $locale }}]"
                                           value="{{$product->translate($locale)->name}}"
                                           placeholder="{{trans('words.product_name')}} {{ trans('words.' . $locale )}}">
                                </div>

                            @endforeach
                        </div>

                        <div class="row mb-3">
                            @foreach (config('translatable.locales') as $locale)

                                <div class="mb-3 col-md-6">
                                    <label for="content[{{ $locale }}]" class="form-label" for="">@lang('words.description') {{ trans('words.' . $locale )}}</label>
                                    <textarea required type="text" class="form-control"
                                              name="content[{{ $locale }}]"
                                              id="content[{{ $locale }}]"
                                              placeholder="{{trans('words.heading')}} {{ trans('words.' . $locale )}}">{{$product->translate($locale)->name}}</textarea>

                                </div>

                            @endforeach
                        </div>
                        <div class="row mb-3">

                            <div class="col-sm-2 col-form-label">
                                <span>{{ trans('words.show_in_home') }}</span>
                            </div>
                            <div class="col-sm-10">
                                <label class="switch switch-lg">
                                    <input type="checkbox" class="switch-input" name="show_in_home" value="1" {{($product->show_in_home)?'checked':''}}/>
                                    <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                                </span>
                                </label>
                            </div>

                        </div>


                        <div class="row mb-3">

                            <div class="col-sm-2 col-form-label">
                                <span> @lang('words.image')</span>
                            </div>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">{{trans('words.edit')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


@endsection



