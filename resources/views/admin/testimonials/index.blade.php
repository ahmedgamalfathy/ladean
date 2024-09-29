@extends("admin.layout.master")
@section('title' ,  trans('words.testimonials') )



@section("content")

    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                class="text-muted fw-light">{{trans('words.home')}}/</span></a>
        {{trans('words.testimonials')}}</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-header flex-column flex-md-row button-box">

            <a href="{{route('admin.testimonials.create')}}" class="btn btn-secondary create-new btn-primary" tabindex="0"
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
                    <th style="width:5%">#</th>
                    <th style="width:10%">@lang("words.client_name")</th>
                    <th style="width:10%">@lang("words.client_image")</th>
                    <th style="width:15%">@lang("words.rating")</th>
                    <th style="width:35%">@lang("words.client_comment")</th>
                    <th style="width:10%">@lang("words.show_in_home")</th>
                    <th style="width:15%">@lang("words.options")</th>
                </tr>
                </thead>
                <tbody>

                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$testimonial->name}}</td>
                        <td>
                            <div class="img-box" style="width: 70px;height: 70px;">
                                <img src="{{asset($testimonial->image)}}" class="img-fluid" />
                            </div>
                        </td>
                        <td>
                            <ul class="list-inline mb-2">

                                    @for ($i = 0; $i < 5; $i++)
                                        <li class="list-inline-item m-0"><i class="{{ round($testimonial->rate) <= $i ? 'far' : 'fas' }} fa-star fa-sm text-warning"></i></li>
                                    @endfor

                            </ul>
                        </td>
                        <td>{{$testimonial->content}}</td>
                      <td>
                          @if($testimonial->show_in_home == 0)
                              <span class="badge rounded-pill bg-danger">@lang('words.no')</span>
                          @else
                              <span class="badge rounded-pill bg-success">@lang('words.yes')</span>
                          @endif
                      </td>

                        <td>
                            <a title="{{trans('words.edit')}}" class="btn btn-primary btn-sm"
                               href="{{route('admin.testimonials.edit',$testimonial->id)}}">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a onclick="fireDeleteEvent({{$testimonial->id}})" type="button" class="btn btn-danger btn-sm text-white"><i
                                    class="fa fa-trash-alt"></i></a>
                            <form action="{{route('admin.testimonials.destroy',$testimonial->id)}}" method="POST" id="form-{{$testimonial->id}}">
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

