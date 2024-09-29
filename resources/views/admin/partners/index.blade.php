@extends("admin.layout.master")

@section('title' , trans('words.partners'))


@section("content")

    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                class="text-muted fw-light">{{trans('words.home')}}/</span></a>
        {{trans('words.partners')}}</h4>

    <div class="card">
        <div class="card-header flex-column flex-md-row button-box">

            <a href="{{route('admin.partners.create')}}" class="btn btn-secondary create-new btn-primary" tabindex="0"
               aria-controls="DataTables_Table_0" type="button">
      <span>
        <i class="ti ti-plus me-sm-1"></i>
        <span class="d-none d-sm-inline-block">
          {{trans('words.add_new')}}
        </span>
      </span>
            </a>

        </div>

        <div class="table-responsive p-2">
            <table class="myDatatable table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
{{--                    <th>@lang("words.name")</th>--}}
                    <th>@lang("words.image")</th>
                    <th>@lang("words.show_in_home")</th>
                    <th>@lang("words.options")</th>
                </tr>
                </thead>
                <tbody>

                @foreach($partners as $partner)
                    <tr>
                        <td>{{$loop->iteration}}</td>
{{--                        <td>{{$partner->name}}</td>--}}
                        <td>
                            <div class="img-box" style="width: 70px;height: 70px;">
                                <img src="{{asset($partner->image)}}" class="img-fluid" />
                            </div>
                        </td>
                        <td>
                            @if($partner->show_in_home == 0)
                                <span class="badge rounded-pill bg-danger">@lang('words.no')</span>
                            @else
                                <span class="badge rounded-pill bg-success">@lang('words.yes')</span>
                            @endif
                        </td>

                        <td>
                            <a title="{{trans('words.edit')}}" class="btn btn-primary btn-sm"
                               href="{{route('admin.partners.edit',$partner->id)}}">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a onclick="fireDeleteEvent({{$partner->id}})" type="button" class="btn btn-danger btn-sm text-white"><i
                                    class="fa fa-trash-alt"></i></a>
                            <form action="{{route('admin.partners.destroy',$partner->id)}}" method="POST" id="form-{{$partner->id}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            </form>
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
