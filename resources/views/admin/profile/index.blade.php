@extends("admin.layout.master")

@section('title' ,  trans('words.profile') )

@section("content")
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><a href="{{route('admin.dashboard')}}"><span
                    class="text-muted fw-light">{{trans('words.home')}}/</span></a>
            {{trans('words.profile')}}</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">@lang('words.profile_details')</h5>
                    <form method="POST" action="{{route('admin.profile.updateProfile')}}"  enctype="multipart/form-data">
                        @csrf

                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img
                                src="{{asset(Auth::user()->image)}}"
                                alt="user-avatar"
                                class="d-block w-px-100 h-px-100 rounded"
                                id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                                    <span class="d-none d-sm-block">@lang("words.upload_new_photo")</span>
                                    <i class="ti ti-upload d-block d-sm-none"></i>
                                    <input
                                        type="file"
                                        id="upload"
                                        class="account-file-input"
                                        name="image"
                                        hidden
                                        accept="image/png, image/jpeg" />
                                </label>
                                <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                                    <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">@lang('words.reset')</span>
                                </button>

                                <div class="text-muted">@lang('words.allow') JPG, GIF or PNG</div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label"> @lang('words.name')</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{Auth()->user()->name}}"
                                        autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">@lang("words.email")</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="email"
                                        name="email"
                                        value="{{Auth()->user()->email}}"
                                        placeholder="john.doe@example.com" />                                </div>

{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="email" class="form-label">E-mail</label>--}}
{{--                                    <input--}}
{{--                                        class="form-control"--}}
{{--                                        type="text"--}}
{{--                                        id="email"--}}
{{--                                        name="email"--}}
{{--                                        value="john.doe@example.com"--}}
{{--                                        placeholder="john.doe@example.com" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="organization" class="form-label">Organization</label>--}}
{{--                                    <input--}}
{{--                                        type="text"--}}
{{--                                        class="form-control"--}}
{{--                                        id="organization"--}}
{{--                                        name="organization"--}}
{{--                                        value="Pixinvent" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label class="form-label" for="phoneNumber">Phone Number</label>--}}
{{--                                    <div class="input-group input-group-merge">--}}
{{--                                        <span class="input-group-text">US (+1)</span>--}}
{{--                                        <input--}}
{{--                                            type="text"--}}
{{--                                            id="phoneNumber"--}}
{{--                                            name="phoneNumber"--}}
{{--                                            class="form-control"--}}
{{--                                            placeholder="202 555 0111" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="address" class="form-label">Address</label>--}}
{{--                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="state" class="form-label">State</label>--}}
{{--                                    <input class="form-control" type="text" id="state" name="state" placeholder="California" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="zipCode" class="form-label">Zip Code</label>--}}
{{--                                    <input--}}
{{--                                        type="text"--}}
{{--                                        class="form-control"--}}
{{--                                        id="zipCode"--}}
{{--                                        name="zipCode"--}}
{{--                                        placeholder="231465"--}}
{{--                                        maxlength="6" />--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label class="form-label" for="country">Country</label>--}}
{{--                                    <select id="country" class="select2 form-select">--}}
{{--                                        <option value="">Select</option>--}}
{{--                                        <option value="Australia">Australia</option>--}}
{{--                                        <option value="Bangladesh">Bangladesh</option>--}}
{{--                                        <option value="Belarus">Belarus</option>--}}
{{--                                        <option value="Brazil">Brazil</option>--}}
{{--                                        <option value="Canada">Canada</option>--}}
{{--                                        <option value="China">China</option>--}}
{{--                                        <option value="France">France</option>--}}
{{--                                        <option value="Germany">Germany</option>--}}
{{--                                        <option value="India">India</option>--}}
{{--                                        <option value="Indonesia">Indonesia</option>--}}
{{--                                        <option value="Israel">Israel</option>--}}
{{--                                        <option value="Italy">Italy</option>--}}
{{--                                        <option value="Japan">Japan</option>--}}
{{--                                        <option value="Korea">Korea, Republic of</option>--}}
{{--                                        <option value="Mexico">Mexico</option>--}}
{{--                                        <option value="Philippines">Philippines</option>--}}
{{--                                        <option value="Russia">Russian Federation</option>--}}
{{--                                        <option value="South Africa">South Africa</option>--}}
{{--                                        <option value="Thailand">Thailand</option>--}}
{{--                                        <option value="Turkey">Turkey</option>--}}
{{--                                        <option value="Ukraine">Ukraine</option>--}}
{{--                                        <option value="United Arab Emirates">United Arab Emirates</option>--}}
{{--                                        <option value="United Kingdom">United Kingdom</option>--}}
{{--                                        <option value="United States">United States</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="language" class="form-label">Language</label>--}}
{{--                                    <select id="language" class="select2 form-select">--}}
{{--                                        <option value="">Select Language</option>--}}
{{--                                        <option value="en">English</option>--}}
{{--                                        <option value="fr">French</option>--}}
{{--                                        <option value="de">German</option>--}}
{{--                                        <option value="pt">Portuguese</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="timeZones" class="form-label">Timezone</label>--}}
{{--                                    <select id="timeZones" class="select2 form-select">--}}
{{--                                        <option value="">Select Timezone</option>--}}
{{--                                        <option value="-12">(GMT-12:00) International Date Line West</option>--}}
{{--                                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>--}}
{{--                                        <option value="-10">(GMT-10:00) Hawaii</option>--}}
{{--                                        <option value="-9">(GMT-09:00) Alaska</option>--}}
{{--                                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>--}}
{{--                                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>--}}
{{--                                        <option value="-7">(GMT-07:00) Arizona</option>--}}
{{--                                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>--}}
{{--                                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>--}}
{{--                                        <option value="-6">(GMT-06:00) Central America</option>--}}
{{--                                        <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>--}}
{{--                                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>--}}
{{--                                        <option value="-6">(GMT-06:00) Saskatchewan</option>--}}
{{--                                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>--}}
{{--                                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>--}}
{{--                                        <option value="-5">(GMT-05:00) Indiana (East)</option>--}}
{{--                                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>--}}
{{--                                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="mb-3 col-md-6">--}}
{{--                                    <label for="currency" class="form-label">Currency</label>--}}
{{--                                    <select id="currency" class="select2 form-select">--}}
{{--                                        <option value="">Select Currency</option>--}}
{{--                                        <option value="usd">USD</option>--}}
{{--                                        <option value="euro">Euro</option>--}}
{{--                                        <option value="pound">Pound</option>--}}
{{--                                        <option value="bitcoin">Bitcoin</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">@lang('words.save')</button>
                                <button type="reset" class="btn btn-label-secondary">@lang('words.cancel')</button>
                            </div>

                    </div>
                    <!-- /Account -->
                    </form>
                </div>


                <div class="card mb-4">

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <span class="alert alert-danger">{{$error}}</span>
                        @endforeach
                    @endif

                    <h5 class="card-header">@lang("words.change_password")</h5>
                    <div class="card-body">
                        <form  method="POST" action="{{route('admin.profile.updatePassword')}}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle ">
                                    <label class="form-label" for="currentPassword">{{trans("words.current_Password")}}</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="currentPassword" id="currentPassword" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="newPassword">{{trans("words.new_password")}}</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" id="newPassword" name="password" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6 form-password-toggle ">
                                    <label class="form-label" for="confirmPassword">@lang('words.confirm_new_password')</label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" name="password_confirmation" id="confirmPassword" placeholder="············">
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
{{--                                <div class="col-12 mb-4">--}}
{{--                                    <h6>Password Requirements:</h6>--}}
{{--                                    <ul class="ps-3 mb-0">--}}
{{--                                        <li class="mb-1">Minimum 8 characters long - the more, the better</li>--}}
{{--                                        <li class="mb-1">At least one lowercase character</li>--}}
{{--                                        <li>At least one number, symbol, or whitespace character</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <div>
                                    <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">@lang("words.save")</button>
                                    <button type="reset" class="btn btn-label-secondary waves-effect">@lang("words.cancel")</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

