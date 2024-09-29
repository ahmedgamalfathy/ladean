@extends("admin.layout.master")
@section('title' ,  trans('words.products') )


@section("content")

    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                class="text-muted fw-light">{{trans('words.home')}}/</span></a>
        {{trans('words.products')}}</h4>


    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-header flex-column flex-md-row button-box">

            <a href="{{route('admin.products.create')}}" class="btn btn-secondary create-new btn-primary" tabindex="0"
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
                    <th> @lang("words.name") </th>
                    <th>@lang("words.image") </th>
                    <th> @lang("words.description")</th>
                    <th>@lang("words.show_in_home")</th>
                    <th>@lang("words.options")</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->name}}</td>
                        <td>
                            <div class="img-box" style="width: 70px;height: 70px;">
                                <img src="{{asset($product->image)}}" class="img-fluid" />
                            </div>
                        </td>
                        <td>{{$product->content}}</td>
                        <td>
                            @if($product->show_in_home == 0)
                                <span class="badge rounded-pill bg-danger">@lang('words.no')</span>
                            @else
                                <span class="badge rounded-pill bg-success">@lang('words.yes')</span>
                            @endif
                        </td>

                        <td style="width: 15%">
                            <a title="{{trans('words.edit')}}" class="btn btn-primary btn-sm"
                               href="{{route('admin.products.edit',$product->id)}}">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a onclick="fireDeleteEvent({{$product->id}})" type="button" class="btn btn-danger btn-sm text-white"><i
                                    class="fa fa-trash-alt"></i></a>
                            <form action="{{route('admin.products.destroy',$product->id)}}" method="POST" id="form-{{$product->id}}">
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
