@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <main id="main">
    <!-- start breadcrumb -->
      <section class="page-header page-header-text-light bg-dark-3 py-5">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <ul class="breadcrumb mb-0">
                <li>
                  <a href="{{url('/')}}">SOS Home</a>
                </li>
                <li class="active"> About Us</li>
              </ul>
            </div>
            <div class="col-12">
              <h1> About Us </h1>
            </div>
          </div>
        </div>
      </section>
      <!-- Who we are
        ============================================= -->
      <section class="section" style="padding-top:unset !important;">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex">
              <div class="my-auto px-0 px-lg-5 mx-2">
                <h2 class="text-9">{!!$about->title!!}</h2>
                <p class="text-4">
                {!!$about->description!!}
                </p>
              </div>
            </div>
            <div class="col-lg-6 my-auto text-center">
              <div class="about-video position-relative w-100">
                <div style="width:100%; padding-bottom: 2%">
                  <a class="fancybox" href="{{asset('frontend/assets/img/posts/file_12021-12-02_16_43_25.jpg')}}" data-fancybox="gallery">
                    <img class="img-fluid w-100" src="{{asset('frontend/assets/img/posts/file_12021-12-02_16_43_25.jpg')}}" alt="Who we are">
                  </a>
                </div>
              </div>
              <br />
            </div>
            <div class="col-lg-6 my-auto text-center"></div>
            <!-- <div class="col-lg-6 my-auto text-center"><img class="img-fluid shadow-lg rounded-lg" src="http://demo.harnishdesign.net/html/payyed/images/who-we-are.jpg" alt=""></div> -->
          </div>
        </div>
      </section>
      <!-- Who we are end -->
    </main><!-- End #main -->

@endsection
