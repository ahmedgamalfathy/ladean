<section id="contact" class="contact-section pt-70">
    <div class="container">
        <div class="top-content">
            <div class="title">
                <span class="sub-title">
                                        {{\App\Models\Setting::where('key', 'secondary_header_contact')->first()->value}}


                </span>
                <h2>
                    {{\App\Models\Setting::where('key', 'primary_header_contact')->first()->value}}

                </h2>
            </div>
            <ul class="info-list">
                <li><i class="bx bx-phone"></i>@lang('words.call-us-now')</li>
                <li><a href="tel:{{\App\Models\Setting::where('key', 'website_phone')->first()->value}}">
                        {{\App\Models\Setting::where('key', 'website_phone')->first()->value}}
                    </a>
                </li>
            </ul>
            <ul class="info-list">
                <li><i class="bx bx-envelope"></i>@lang('words.contact-us-now')</li>
                <li>
                    <a
                        href="mailto:{{\App\Models\Setting::where('key', 'email')->first()->value}}"
                    ><span
                            class="__cf_email__"

                        >{{\App\Models\Setting::where('key', 'email')->first()->value}}</span
                        ></a
                    >
                </li>
            </ul>
        </div>
        <div class="row align-items-center"></div>
    </div>
</section>
