@extends("admin.layout.master")
@section('title' , trans('words.contact-us'))


@section("content")

    <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                class="text-muted fw-light">{{trans('words.home')}}/</span></a>
        {{trans('words.contact-us')}}</h4>

    <!-- DataTable with Buttons -->
    <div class="card">
{{--        {{ $dataTable->table() }}--}}
        <div class="table-responsive p-2">
            <table class="myDatatable table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('words.name')}}</th>
                    <th>{{__('words.phone')}}</th>
                    <th>{{__('words.email')}}</th>
                    <th>{{__('words.message')}}</th>
                    <th>{{__('words.options')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $service)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$service->name}}</td>
                        <td>{{$service->phone}}</td>
                        <td>{{$service->email}}</td>
                        <td>{{$service->message}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm"
                               href="https://wa.me/966{{$service->phone}}/?text=reply to your message"><i
                                    class="fa-brands fa-whatsapp"></i></a>
                            <a class="btn btn-primary btn-sm"
                               href="mailto:{{$service->email}}?Subject=reply to your message to KBG"><i
                                    class="fa fa-envelope"></i></a>
                            <a onclick="fireDeleteEvent({{$service->id}})" type="button"
                               class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i></a>
                            <form action="{{route('admin.contact_us.destroy',$service->id)}}" method="POST"
                                  id="form-{{$service->id}}">
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

