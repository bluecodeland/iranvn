@extends('layouts.app')
@section('content')

{{-- <div class="container-fluid purple p-5 ma">

    <div class="d-flex justify-content-center">
            <blockquote class="blockquote text-center">
                    <p class="mb-0">سرویس ارائه خدمات گوناگون فضای مجازی</p>
                    <footer class="blockquote-footer">به زودی در خدمت شما خواهیم بود</footer>
                  </blockquote>
    </div>


    </div> --}}

    {{-- Header Start --}}
    <div class="headerbg mt-n4 pb-2">
    <div class="container pt-5">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade slider-border p-3" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/corona.jpg" class="d-block w-100" alt="ارائه راهکار های تجاری برای بیزینس های کوچک در ایام کرونا">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/wp-banner.jpg" class="d-block w-100" alt="در کوتاه ترین زمان ، سیستم مبتنی بر مدیریت محتوای وردپرس را برای شما راه اندازی می کنیم">
                <div class="carousel-caption d-none d-md-block">
                  <h5>راهکارهای مبتنی بر وردپرس</h5>
                  <p>در کوتاه ترین زمان ، سیستم مبتنی بر مدیریت محتوای وردپرس را برای شما راه اندازی می کنیم</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/laravel-banner.jpg" class="d-block w-100" alt="طراحی سایت های قدرتمند و جذاب با یکی از قویترین فریم ورک ها و تکنولوژی های روز ، لاراول - laravel">
                <div class="carousel-caption d-none d-md-block">
                  <h5>پیاده سازی سایت حرفه ای با لاراول</h5>
                  <p>استفاد از یکی از قدترتمندترین تکنولوژی های سمت سرور برای ساخت نرم افزار تحت وب اختصاصی</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/moodle.jpg" class="d-block w-100" alt="راه اندازی سیستم مدیریت آموزشی موودل -moodle">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/bigbluebutton.jpg" class="d-block w-100" alt="راه اندازی سیستم وبینار و کلاس آنلاین بیگ بلو باتن - BigBlueButton">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p></p>
                </div>
              </div>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">ثبلی</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">بعدی</span>
            </a>
          </div>
    </div>
</div>
{{-- Header end --}}
{{--  ---- ----- -----  --}}
<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-6">
    <img src="image/divider.png" alt="" class="w-100">
</div>
</div>
</div>
{{-- Spicials Works start --}}
<div class="specials mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 mt-5">
                <h1 class="text-center">ویژگی خدمات ما</h1>
            </div>
            <div class="col-md-4 ">
                <div class="card animated fadeInUp mb-5 slider-border">
                    <img src="image/24-7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify"><br />خدمات و پشتیبانی ما 24 ساعته و 7 روزه هفته برای شما فعال است</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-5 animated fadeInUp">
                <div class="card slider-border">
                    <img src="image/bestoffer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify"><br />بهترین پیشنهاد ها و مناسب ترین قیمت ها با حفظ بهترین کیفیت کار در انتظار شماست</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4  mb-md-5 animated fadeInUp">
                <div class="card slider-border">
                    <img src="image/fast.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">ما در سریع ترین زمان ممکن خدمات را به شما مــی رسانیم و در عین حال بهترین کیفیت ممکن را خدمت شما ارائه خواهیم کرد</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</div>
{{-- Spicials Works end --}}

<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-6">
    <img src="image/divider.png" alt="" class="w-100">
</div>
</div>
</div>

{{-- Example Works start --}}
<div class="specials mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 mt-5">
                <h1 class="text-center">نمونه کارهای ما</h1>
            </div>
            
            <div class="col-md-4 ">
                <div class="card animated fadeInUp mb-5 slider-border">
                    <div class="card-header pink noneborder">
                    
                    <h4 class="text-uppercase"><a href="https://qaim.ir">Qaim.ir</a> </h4>
                    </div>
                    <div class="card-body">
                    
                        <!-- <h5 class="card-title">Qaim.ir</h5> -->
                        <p class="card-text text-right text-justify"><br />سایت جامع مدرسه فقه و اصول حضرت قائم عج الله تعالی فرجه الشریف که بر اساس ورد پرس طراحی شده و پشتیبانی می شود
                        <img class="w-100" src="/image/laravel-banner.jpg" alt="Card image">            
                        </p>
                        <div class="text-center"><a href="#" class="btn btnborder">Go somewhere</a></div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-5 animated fadeInUp">
                <div class="card slider-border">
                <div class="card-header pink noneborder">
                <h4 class="text-uppercase"><a href="https://changeyourlife.ir">Changeyourlife.ir</a> </h4>
                    </div>
                 
                    <img src="image/bestoffer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify"><br />
                         ایــــن وب سایـــت شـــخصی با اســــتفاد از سیستم مــدیریت محتوای وردپرس راه اندازی شده و پشتیبانی می شود 
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4  mb-md-5 animated fadeInUp">
                <div class="card slider-border ">
                <div class="card-header pink noneborder">
                <h4 class="text-uppercase"><a href="https://e.qaim.org">e.qaim.org</a> </h4>
                    </div>
                 
                    <img src="image/fast.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">
                        سیستم مدیریت آموزشی مدرسه عالی فقه و اصول حضرت قائم که براساس سیستم موودل طراحی شده است. 
                      </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</div>
{{-- Example Works end --}}


{{--  ---- ----- -----  --}}
<!-- Prices -->



<!-- <section class="pink mb-n4 rtl text-right p-5">
            <div class="container  d-flex flex-row justify-content-center ">
            <div class="row">
            <div class="col-12 py-5">
                <h1 class="text-center">قیمت ها</h1>
            </div>
            <div class="col-md-4 ">
                <div class="card animated fadeInDown mb-5">
                    <img src="image/24-7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">خدمات و پشتیبانی ما 24 ساعته و 7 روزه هفته برای شما فعال است</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-5 animated fadeInUp">
                <div class="card">
                    <img src="image/bestoffer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">بهترین پیشنهاد ها و مناسب ترین قیمت ها با حفظ بهترین کیفیت کار در انتظار شماست</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4  mb-md-5 animated fadeInDown">
                <div class="card">
                    <img src="image/fast.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-right text-justify">ما در سریع ترین زمان ممکن خدمات را به شما مــی رسانیم و در عین حال بهترین کیفیت ممکن را خدمت شما ارائه خواهیم کرد</p>
                    </div>
                  </div>
            </div>
        </div>       
            </div>

            
</section> -->
{{-- contact-form --}}
    <section class="pink mb-n4 rtl text-right p-5">
            <div class="container">
                        <!--Section: Contact v.2-->
                <section class="mb-4">

                        <!--Section heading-->
                        <h2 class="h1-responsive font-weight-bold text-center my-4">ارتباط با شبکه مجازی ایران</h2>
                        <!--Section description-->
                        <p class="text-center w-responsive mx-auto mb-5">در صورت داشتن هرگونه سوال و یا تمایل به ارتباط با مجموعه شبکه مجازی ایران از طریق فرم زیر و یا سایر راه های ارتباطی اقدام نمایید.</p>

                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="/contactus" method="POST">
                                    @csrf
                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="name" class="">نام شما</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="email" class="">آدرس ایمیل شما</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                         <!--Grid column-->
                                         <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="phone" class="">شماره تلفن همراه شما</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject">

                                                @error('subject')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="subject" class="">عنوان پیام</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <textarea id="text" type="text" class="form-control md-textarea @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" required autocomplete="text"></textarea>

                                                @error('text')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label for="message">متن پیام</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->

                                </form>

                                <div class="text-center text-md-left">
                                    <a class="btn btn-primary pgreen" onclick="document.getElementById('contact-form').submit();">ارسال پیام</a>
                                </div>
                                <div class="status"></div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                        <p>ایران - قم. خیابان بلوارامین</p>
                                    </li>

                                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                        <p>989352572809+</p>
                                    </li>

                                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                        <p>mhtaeb@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                        </div>

                    </section>
                    <!--Section: Contact v.2-->


                </div>


    </section>
{{-- contact-from End --}}
{{--  ---- ----- -----  --}}
@endsection
