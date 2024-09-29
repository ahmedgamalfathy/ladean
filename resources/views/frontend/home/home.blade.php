
@extends('frontend.layouts.master')
@section("content")


@include("frontend.home.sections.banner")

@include("frontend.home.sections.service__message")
@include("frontend.home.sections.contact")




<!-- <section id="about" class="about-section pb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-image mb-30">
          <img src="assets/img/تواصل معنا.png" alt="Demo Image" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-content mb-30">
          <span class="sub-title">من نحن</span>
          <h2>نقدم خدمات منذ عام <span>1995</span></h2>
          <p>
            نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل
            المستمرة ، وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ،
            ولف الغسيل المستمر ، وأكياس القمامة ذات الصلة إذا كنت مهتمًا
            بشراء أكياس التسوق ، ولفائف الغسيل المستمرة ، وفئة أكياس القمامة
            ، ثم يمكنك قم بزيارتها يوميًا للحصول على مزيد من المعلومات
            الأحدث.
          </p>
          <div class="content-list">
            <i class="bx bx-caret-right"></i>
            <h6>نحن نركز بشكل أساسي على بيع أكياس التسوق</h6>
          </div>
          <div class="content-list">
            <i class="bx bx-caret-right"></i>
            <h6>نحن نركز بشكل أساسي على بيع أكياس التسوق</h6>
          </div>
          <div class="content-list">
            <i class="bx bx-caret-right"></i>
            <h6>نحن نركز بشكل أساسي على بيع أكياس التسوق</h6>
          </div>
          <div class="content-list">
            <i class="bx bx-caret-right"></i>
            <h6>نحن نركز بشكل أساسي على بيع أكياس التسوق</h6>
          </div>
          <div class="content-list">
            <i class="bx bx-caret-right"></i>
            <h6>نحن نركز بشكل أساسي على بيع أكياس التسوق</h6>
          </div>
        </div>
      </div>
    </div>
    <blockquote class="blockquote">
      <div class="image">
        <img src="assets/img/about/about-quote.jpg" alt="Demo Image" />
      </div>
      <p>
        نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ،
        وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل
        المستمر .
      </p>
      <span>عبد الوهاب الزعفراني</span>
    </blockquote>
  </div>
</section> -->

@include('frontend.home.sections.contact__form')



@include('frontend.home.sections.products')

{{--<section id="projects" class="projects-section pb-100">--}}
{{--    <div class="container">--}}
{{--        <div class="top-content">--}}
{{--            <div class="title">--}}
{{--                <span class="sub-title">المنتجات</span>--}}
{{--                <h2>المنتجات</h2>--}}
{{--            </div>--}}
{{--            <p>--}}
{{--                نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ،--}}
{{--                وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل--}}
{{--                المستمر .--}}
{{--            </p>--}}
{{--            <a href="projects.html" class="primary-btn">جميع المنتجات</a>--}}
{{--        </div>--}}
{{--        <div class="projects-wrapper">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="item-single mb-20">--}}
{{--                        <div class="image">--}}
{{--                            <a href="projects-details.html"--}}
{{--                            ><img src="{{asset('frontend/assets/img/Artboard 1.png')}}" alt="Demo Image"--}}
{{--                                /></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3><a href="projects-details.html">منتج تجريبي</a></h3>--}}
{{--                            <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="item-single mb-30">--}}
{{--                        <div class="image">--}}
{{--                            <a href="projects-details.html"--}}
{{--                            ><img src="{{asset('frontend/assets/img/Artboard 2.png')}}" alt="Demo Image"--}}
{{--                                /></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3>--}}
{{--                                <a href="projects-details.html"> منتج تجريبي </a>--}}
{{--                            </h3>--}}
{{--                            <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="item-single mb-30">--}}
{{--                        <div class="image">--}}
{{--                            <a href="projects-details.html"--}}
{{--                            ><img src="{{asset('frontend/assets/img/Artboard 3.png')}}" alt="Demo Image"--}}
{{--                                /></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3>--}}
{{--                                <a href="projects-details.html">منتج تجريبي</a>--}}
{{--                            </h3>--}}
{{--                            <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="item-single mb-30">--}}
{{--                        <div class="image">--}}
{{--                            <a href="projects-details.html"--}}
{{--                            ><img src="{{asset('frontend/assets/img/Artboard 4.png')}}" alt="Demo Image"--}}
{{--                                /></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3>--}}
{{--                                <a href="projects-details.html">منتج تجريبي</a>--}}
{{--                            </h3>--}}
{{--                            <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="item-single mb-30">--}}
{{--                        <div class="image">--}}
{{--                            <a href="projects-details.html"--}}
{{--                            ><img src="{{asset('frontend/assets/img/Artboard 5.png')}}" alt="Demo Image"--}}
{{--                                /></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3>--}}
{{--                                <a href="projects-details.html">منتج تجريبي</a>--}}
{{--                            </h3>--}}
{{--                            <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="item-single mb-30">--}}
{{--                        <div class="image">--}}
{{--                            <a href="projects-details.html"--}}
{{--                            ><img src="{{asset('frontend/assets/img/Artboard 6.pn')}}" alt="Demo Image"--}}
{{--                                /></a>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <h3>--}}
{{--                                <a href="projects-details.html">منتج تجريبي</a>--}}
{{--                            </h3>--}}
{{--                            <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


@include("frontend.home.sections.testimonials")
@include("frontend.home.sections.partners")




{{--<section id="team" class="team-section pb-70">--}}
{{--    <div class="container">--}}
{{--        <div class="top-content">--}}
{{--            <div class="title">--}}
{{--                <span class="sub-title">فريقنا</span>--}}
{{--                <h2>فريقنا الأكثر خبرة</h2>--}}
{{--            </div>--}}
{{--            <p>--}}
{{--                نحن نركز بشكل أساسي على بيع أكياس التسوق ، ولفائف الغسيل المستمرة ،--}}
{{--                وفئة أكياس القمامة ، لذلك ، فنحن نقدم أكياس التسوق ، ولف الغسيل--}}
{{--                المستمر .--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="item-single mb-30">--}}
{{--                    <div class="image">--}}
{{--                        <a href="#"--}}
{{--                        ><img src="assets/img/Artboard 7.png" alt="Demo Image"--}}
{{--                            /></a>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <h3><a href="team.html">منتج تجريبي</a></h3>--}}
{{--                        <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        <div class="social-link">--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-facebook"></i--}}
{{--                                ></a>--}}
{{--                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-linkedin"></i--}}
{{--                                ></a>--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-instagram"></i--}}
{{--                                ></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="spacer"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="item-single mb-30">--}}
{{--                    <div class="image">--}}
{{--                        <a href="#"--}}
{{--                        ><img src="assets/img/Artboard 8.png" alt="Demo Image"--}}
{{--                            /></a>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <h3><a href="team.html">منتج تجريبي</a></h3>--}}
{{--                        <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        <div class="social-link">--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-facebook"></i--}}
{{--                                ></a>--}}
{{--                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-linkedin"></i--}}
{{--                                ></a>--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-instagram"></i--}}
{{--                                ></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="spacer"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="item-single mb-30">--}}
{{--                    <div class="image">--}}
{{--                        <a href="#"--}}
{{--                        ><img src="assets/img/Artboard 9.png" alt="Demo Image"--}}
{{--                            /></a>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <h3><a href="team.html">منتج تجريبي</a></h3>--}}
{{--                        <span>نركز بشكل أساسي على بيع أكياس التسوق</span>--}}
{{--                        <div class="social-link">--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-facebook"></i--}}
{{--                                ></a>--}}
{{--                            <a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-linkedin"></i--}}
{{--                                ></a>--}}
{{--                            <a href="#" target="_blank"--}}
{{--                            ><i class="bx bxl-instagram"></i--}}
{{--                                ></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="spacer"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}




<!-- <section id="blog" class="blog-section pb-70">
<div class="container">
    <div class="top-content">
        <div class="title">
            <span class="sub-title">Blog</span>
            <h2>Top Most Blog Post</h2>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur voluptatibus quaerat laborum.</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="item-single mb-30">
                <div class="image">
                    <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt="Demo Image"/></a>
                    <div class="tag">Mechanical</div>
                </div>
                <div class="content">
                    <h3>
                        <a href="blog-details.html">Industrial Evolution</a>
                    </h3>
                    <ul class="info-list">
                        <li><i class="bx bx-user"></i>By Dylan Graham</li>
                        <li><i class="bx bx-calendar-alt"></i>03 Oct, 2020</li>
                    </ul>
                    <hr>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    <div class="cta-btn">
                        <a href="blog-details.html" class="btn-text">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="item-single mb-30">
                <div class="image">
                    <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg" alt="Demo Image"/></a>
                    <div class="tag">Oil & gas</div>
                </div>
                <div class="content">
                    <h3>
                        <a href="blog-details.html">Smart Factory Solutions</a>
                    </h3>
                    <ul class="info-list">
                        <li><i class="bx bx-user"></i>By J. Robinson</li>
                        <li><i class="bx bx-calendar-alt"></i>09 Nov, 2020</li>
                    </ul>
                    <hr>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    <div class="cta-btn">
                        <a href="blog-details.html" class="btn-text">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="item-single mb-30">
                <div class="image">
                    <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg" alt="Demo Image"/></a>
                    <div class="tag">Industrial</div>
                </div>
                <div class="content">
                    <h3>
                        <a href="blog-details.html">Future of Manufacturing</a>
                    </h3>
                    <ul class="info-list">
                        <li><i class="bx bx-user"></i>By Mark McLaren</li>
                        <li><i class="bx bx-calendar-alt"></i>13 Oct, 2020</li>
                    </ul>
                    <hr>
                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    <div class="cta-btn">
                        <a href="blog-details.html" class="btn-text">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> -->



@include("frontend.home.sections.faq")

    @include("frontend.home.sections.contact")

@endsection
