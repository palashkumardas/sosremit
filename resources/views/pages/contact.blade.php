@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <main id="main">
    <!-- start breacrumb -->
    <section class="page-header page-header-text-light bg-dark-3 py-5">
        <div class="container">
          <div class="row text-center">
            <div class="col-12">
              <ul class="breadcrumb mb-0">
                <li>
                  <a href="{{url('/')}}">Home</a>
                </li>
                <li class="active">{{$contact->title}}</li>
              </ul>
            </div>
            <div class="col-12">
              <h1>{{$contact->title}}</h1>
            </div>
          </div>
        </div>
      </section>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-lg-3 mb-4">
              <div class="bg-white shadow-md rounded h-100 p-3">
                <div class="featured-box text-center">
                  <div class="featured-box-icon text-primary mt-4">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <h3>
                    <p>SOS Remit</p>
                  </h3>
                  <p>{!!$contact->description!!}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-4">
              <div class="bg-white shadow-md rounded h-100 p-3">
                <div class="featured-box text-center">
                  <div class="featured-box-icon text-primary mt-4">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <h3>Sylhet Office Address:</h3>
                  <p>{!!$contact->address!!}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-4">
              <div class="bg-white shadow-md rounded h-100 p-3">
                <div class="featured-box text-center">
                  <div class="featured-box-icon text-primary mt-4">
                    <i class="fas fa-phone"></i>
                  </div>
                  <h3>Phone</h3>
                  <p class="mb-0">{!!$contact->phone_one!!}</p>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-lg-3 mb-4">
              <div class="bg-white shadow-md rounded h-100 p-3">
                <div class="featured-box text-center">
                  <div class="featured-box-icon text-primary mt-4">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <h3>Business Inquiries</h3>
                  <p>{!!$contact->email_one!!}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="">
                <iframe style="margin: unset !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.6191286484445!2d-0.4299687842160456!3d51.88616457969914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487648564c2ba953%3A0xb7f9cf813b719836!2s90%20Bury%20Park%20Rd%2C%20Luton%20LU1%201HE!5e0!3m2!1sen!2suk!4v1635176347926!5m2!1sen!2suk" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mb-4">
              <div class="text-center py-5 px-2">
                <h2 class="text-8">Get in touch</h2>
                <p class="lead">Your Text Here</p>
                <div class="d-flex flex-column" style="margin-bottom: 2%;">
                  <ul class="social-icons social-icons-lg social-icons-colored justify-content-center">
                    <li class="social-icons-facebook">
                      <a data-toggle="tooltip" href="{{$contact->facebook}}" target="_blank" title="" data-original-title="Facebook">
                        <i class="fab fa-facebook-f" style="color:black;"></i>
                      </a>
                    </li>
                    <li class="social-icons-twitter">
                      <a data-toggle="tooltip" href="{{$contact->twitter}}" target="_blank" title="" data-original-title="Twitter">
                        <i class="fab fa-twitter" style="color:black;"></i>
                      </a>
                    </li>
                    <li class="social-icons-google">
                      <a data-toggle="tooltip" href="https://www.google.com/" target="_blank" title="" data-original-title="Google">
                        <i class="fab fa-google" style="color:black;"></i>
                      </a>
                    </li>
                    <li class="social-icons-linkedin">
                      <a data-toggle="tooltip" href="{{$contact->linkedin}}" target="_blank" title="" data-original-title="Linkedin">
                        <i class="fab fa-linkedin-in" style="color:black;"></i>
                      </a>
                    </li>
                    <li class="social-icons-youtube">
                      <a data-toggle="tooltip" href="{{$contact->youtube}}" target="_blank" title="" data-original-title="Youtube">
                        <i class="fab fa-youtube" style="color:black;"></i>
                      </a>
                    </li>
                    <li class="social-icons-instagram">
                      <a data-toggle="tooltip" href="{{$contact->instagram}}" target="_blank" title="" data-original-title="Instagram">
                        <i class="fab fa-instagram" style="color:black;"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-12 mb-4">
              <div class="container mt-5">
                <form method="POST" action="https://sosremit.co.uk/sendmessage" accept-charset="UTF-8" class="" enctype="multipart/form-data">
                  <input name="_token" type="hidden" value="gAUKzo6hS66D8FR3I7fOi9wHdso9xjQPA67yClcS">
                  <input type="hidden" name="_token" value="gAUKzo6hS66D8FR3I7fOi9wHdso9xjQPA67yClcS">
                  <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="">
                      <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                      <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validate"></div>
                    </div>
                    <div class="col-lg-12 col-md-12 form-group">
                      <input type="text" class="form-control" name="subject" id="phone" placeholder="Your Subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="text-center">
                    <button type="submit" style="color:brown;">Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
{{--       <section class="hero-wrap section shadow-md">
        <div class="hero-mask opacity-9 bg-primary"></div>
        <div class="hero-bg" style="background-image:url('images/bg/image-2.html');"></div>
        <div class="hero-content">
          <div class="container text-center">
            <h2 class="text-9 text-white">Awesome Customer Support</h2>
            <p class="text-4 text-white mb-4">Have you any query? Don't worry. We have great people ready to help you whenever you need it.</p>
            <a href="#" class="btn btn-light">Find out more</a>
          </div>
        </div>
      </section> --}}
      <!-- Content end -->
    </div>
    <!-- Content end -->
    </main><!-- End #main -->

@endsection
