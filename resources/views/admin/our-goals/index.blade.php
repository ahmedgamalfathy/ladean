@extends("admin.layout.master")

@section('title' , trans('words.our-goals'))

@section("content")

    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                class="text-muted fw-light">{{trans('words.home')}}/</span></a>
        {{trans('words.our-goals')}}</h4>


    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-header flex-column flex-md-row button-box">

{{--            <a href="{{route('admin.our-goals.create')}}" class="btn btn-secondary create-new btn-primary" tabindex="0"--}}
{{--               aria-controls="DataTables_Table_0" type="button">--}}
{{--      <span>--}}
{{--        <i class="ti ti-plus me-sm-1"></i>--}}
{{--        <span class="d-none d-sm-inline-block">--}}
{{--          {{trans('words.add_new')}}--}}
{{--        </span>--}}
{{--      </span>--}}
{{--            </a>--}}

        </div>

        <div class="table-responsive p-2">
            <table class="myDatatable table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>@lang("words.name") </th>
                    <th>@lang("words.image") </th>
                    <th>@lang("words.content")</th>
                    <th>@lang("words.reviewMain")</th>
                    <th>@lang("words.options")</th>
                </tr>
                </thead>
                <tbody>

                @foreach($ourgoals as $our_goal)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$our_goal->name}}</td>
                        <td>
                            <div class="img-box" style="width: 70px;height: 70px;">
                                <img src="{{asset($our_goal->image)}}" class="img-fluid" />
                            </div>
                        </td>
                        <td>{{$our_goal->content}}</td>
                        <td>
                            @if($our_goal->show_in_home == 0)
                                <span class="badge rounded-pill bg-danger">@lang('words.no')</span>
                            @else
                                <span class="badge rounded-pill bg-success">@lang('words.yes')</span>
                            @endif
                        </td>

                        <td>
                            <a title="{{trans('words.edit')}}" class="btn btn-primary btn-sm"
                               href="{{route('admin.our-goals.edit',$our_goal->id)}}">
                                <i class="fa fa-pen"></i>
                            </a>
{{--                            <a onclick="fireDeleteEvent({{$our_goal->id}})" type="button" class="btn btn-danger btn-sm text-white"><i--}}
{{--                                    class="fa fa-trash-alt"></i></a>--}}
{{--                            <form action="{{route('admin.our-goals.destroy',$our_goal->id)}}" method="POST" id="form-{{$our_goal->id}}">--}}
{{--                                {{csrf_field()}}--}}
{{--                                {{method_field('DELETE')}}--}}
{{--                            </form>--}}
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('scripts')


@endpush
