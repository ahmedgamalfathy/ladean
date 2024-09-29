@extends("admin.layout.master")
@section('title' ,  trans('words.create') )


@section("content")

    <h4 class="py-3 mb-4">
        <a href="{{route('admin.dashboard')}}">
            <span class="text-muted fw-light">{{trans('words.home')}}/</span>
        </a>

        {{trans('words.options_website')}}
    </h4>

    <!-- DataTable with Buttons -->
    <div class="card mb-4">

        <div class="card-body">
            <form action="{{ route('admin.options.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">

                        @foreach($options as $option)

                            <div class="row mb-3">

                                <div class="col-sm-5 col-form-label">
                                    <span>{{ trans('words.' . $option->key) }}</span>
                                </div>
                                <div class="col-sm-7">
                                    <label class="switch switch-lg">
                                        <input type="checkbox" class="switch-input" name="{{$option->key}}"
                                               value="1" {{($option->show_in_home)?'checked':''}}/>
                                        <span class="switch-toggle-slider">
                                                                        <span class="switch-on"></span>
                                                                        <span class="switch-off"></span>
                                                                    </span>
                                    </label>
                                </div>

                            </div>
                        @endforeach


                        <div class="row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">{{trans('words.save')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


@endsection



