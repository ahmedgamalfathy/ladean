@extends("admin.layout.master")
@section('title' ,  trans('words.faq') )


@section("content")

    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                class="text-muted fw-light">{{trans('words.home')}}/</span></a>
        {{trans('words.faq')}}</h4>


    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-header flex-column flex-md-row button-box">

            <a href="{{route('admin.faq.create')}}" class="btn btn-secondary create-new btn-primary" tabindex="0"
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
                    <th>@lang("words.question") </th>
                    <th> @lang("words.answer")</th>
                    <th>@lang("words.show_in_home")</th>
                    <th>@lang("words.options")</th>
                </tr>
                </thead>
                <tbody>

                @foreach($faqs as $faq)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$faq->question}}</td>

                        <td>{{$faq->answer}}</td>
                        <td>
                            @if($faq->show_in_home == 0)
                                <span class="badge rounded-pill bg-danger">@lang('words.no')</span>
                            @else
                                <span class="badge rounded-pill bg-success">@lang('words.yes')</span>
                            @endif
                        </td>

                        <td>
                            <a title="{{trans('words.edit')}}" class="btn btn-primary btn-sm"
                               href="{{route('admin.faq.edit',$faq->id)}}">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a onclick="fireDeleteEvent({{$faq->id}})" type="button" class="btn btn-danger btn-sm text-white"><i
                                    class="fa fa-trash-alt"></i></a>
                            <form action="{{route('admin.faq.destroy',$faq->id)}}" method="POST" id="form-{{$faq->id}}">
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
