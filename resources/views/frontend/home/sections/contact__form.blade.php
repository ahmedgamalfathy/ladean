<section id="contact" class="contact-section pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-image mb-30">
                    <img src="{{asset('frontend/assets/img/تواصل معنا.png')}}" alt="Demo Image" />
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <form method="POST" action="{{route('contactUs')}}" >
                   @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    id="name"
                                    required
                                    data-error="{{trans("words.enter_your_name")}}"
                                    placeholder="{{trans("words.your_name")}}"
                                />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    id="email"
                                    required
                                    data-error="{{trans("words.enter_your_email")}}"
                                    placeholder="{{trans("words.email")}}"
                                />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="phone"
                                    class="form-control"
                                    id="phone_number"
                                    required
                                    data-error="{{trans("words.enter_your_phone")}}"
                                    placeholder="{{trans("words.phone")}}"
                                />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="subject"
                                    class="form-control"
                                    id="msg_subject"
                                    required
                                    data-error="{{trans("words.enter_your_subject")}}"
                                    placeholder="{{trans('words.subject')}}"
                                />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                    <textarea
                        name="message"
                        id="message"
                        class="form-control"
                        cols="30"
                        rows="8"
                        required
                        data-error="{{trans("words.enter_your_message")}}"
                        placeholder="{{trans("words.enter_your_message")}}"
                    ></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="primary-btn">{{trans('words.send')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
