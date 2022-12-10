@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <style>

      .cal-ifr iframe{
        width: 100%;
      }
      @media screen and (min-width:767px) and (max-width:991px) {
        
        .cal-ifr iframe{
          width: 100%;
        }
      }
      @media screen and (max-width:767px) {
        
        .cal-ifr iframe{
          width: 100%;
        }
      }
      @media (min-width: 576px) { 
        .cal-ifr iframe{
          width: 100%;
        }
      }  
      </style>

  <!-- Content
  ============================================= -->
   
      
<div id="content">     
    <section >
          <div class="slider-calc d-none d-lg-block">
              <img width="100%" height="700" src="{{asset('frontend/assets/img/sliders/headerback.png')}}" alt="banner" class="pb-5">
              <div class="calc-iframe cal-ifr">  
                <iframe src="https://worldwidesvc.co.uk/shacal/indexv2.php?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9657" style="border:0px # none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="430px" width="100%" allowfullscreen></iframe>        
                {{-- <iframe  src="https://www.worldwidesvc.co.uk/shacal/?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9657" style="border:0px # none;" name="SOS Remit" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="450px" width="350px" allowfullscreen></iframe> --}}
               <div class="power-by  d-flex align-items-center">
              <p class="text-black"><strong>Powered By</strong></p> <img src="{{asset('frontend/assets/img/sliders/white-power.png')}}" alt=""  style="width:100px;padding-left:2%">
              </div>
          </div> 
          </div>         
        </section>

        <section class="slider-resp d-block d-lg-none">
          <div class="mobile-slider-calc">
              <img width="100%" height="1050" src="{{asset('frontend/assets/img/sliders/mobile_photo/mobileback.png')}}" alt="banner" class="">
              
             <div class="mobile-calc-iframe cal-ifr">          
                <iframe  src="https://worldwidesvc.co.uk/shacal/indexv2.php?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9657" style="border:0px # none;" name="SOS Remit" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="430px" width="100%" allowfullscreen></iframe>
                <div class="mobile-power-by d-flex align-items-center ">
              <p class="text-white " ><strong>Powered By</strong></p> <img src="{{asset('frontend/assets/img/sliders/white-power.png')}}" alt=""  style="width:100px;padding-left:2%">
              </div>
           
              </div>
             
              <!-- ---------------- -->
              </div>  
        </section> 
    
<!-- Slideshow end --> 

<!-- Why choose
============================================= -->
<section class="section bg-white">
  <div class="container">
    <h2 class="text-9 text-center">Why should you choose SOS?</h2>
    <div class="lead text-center mb-5"><p>Here’s Top 4 reasons why using a SOS account for manage your money.</p></div>
      <div class="row">
          <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="featured-box">
              <div class="featured-box-icon text-primary-site-color">
                <img src="{{asset('frontend/assets/img/posts/file_12021-11-04_17_15_21.png')}}" width="40" height="40"  alt="sos_icon" /> 
              </div>
              <h3>CHECK FOR BEST RATES</h3>
              <p class="text-3">
                <p><span style="background-color: rgb(241, 245, 246); color: rgb(76, 77, 77);">Use our quick calculator and get an instant quote.</span></p>
              </p>
              <!-- <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ml-2"></i></a> -->
            </div>
          </div> 
          <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="featured-box">
              <div class="featured-box-icon text-primary-site-color">
                <img src="{{asset('frontend/assets/img/posts/file_12021-11-04_17_23_09.png')}}" width="40" height="40"  alt="sos_icon" /> 
              </div>
              <h3>SAFE &amp; SECURE</h3>
              <p class="text-3">
                <p><span style="background-color: rgb(241, 245, 246); color: rgb(76, 77, 77);">Add recipient detail and upload your ID documents to verify yourself. Receive OTP confirmation codes as part of two factor authentication.</span></p>
              </p>
              <!-- <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ml-2"></i></a> -->
            </div>
          </div> 
          <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="featured-box">
              <div class="featured-box-icon text-primary-site-color">
                <img src="{{asset('frontend/assets/img/posts/file_12021-11-04_17_24_17.png')}}" width="40" height="40"  alt="sos_icon" /> 
              </div>
              <h3>FAST TRANSFER</h3>
              <p class="text-3">
                <p><span style="background-color: rgb(241, 245, 246); color: rgb(76, 77, 77);">Check transaction transfer status for Next day cash payouts and transfer to any bank across Bangladesh.</span></p>
              </p>
              <!-- <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ml-2"></i></a> -->
            </div>
          </div> 
          <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
            <div class="featured-box">
              <div class="featured-box-icon text-primary-site-color">
                <img src="{{asset('frontend/assets/img/posts/file_12021-11-04_17_24_37.png')}}" width="40" height="40"  alt="sos_icon" /> 
              </div>
              <h3>100% SECURE</h3>
              <p class="text-3">
                <p><span style="color: rgb(56, 56, 56);">We believe our digital solution will ease the hassle of sending money home in a secure way.</span></p>
              </p>
              <!-- <a href="#" class="btn-link text-3">Learn more<i class="fas fa-chevron-right text-1 ml-2"></i></a> -->
            </div>
          </div> 
                
      </div>
          </div>
</section>
<!-- Why choose end --> 

<!-- Payment Solutions
============================================= -->
<section class="section">
  <div class="container overflow-hidden">
    <div class="row">
      <div class="col-lg-5 col-xl-6 d-flex">
        <div class="my-auto pb-5 pb-lg-0">
          <h2 class="text-9">Payment Solutions for anyone.</h2>
              <p class="text-4">
              <p><span style="background-color: rgb(241, 245, 246); color: rgb(76, 77, 77);">SOS Remit has started business at the heart of Luton, equipped with 15 years of remittance experienced professionals, entrepreneurial attitude and desire to provide great customer experience while sending money abroad. SOS Remit promises competitive rates and low fees. We want to create a reliable and dependable money transfer service that is fast, friendly and easy to use. </span></p>
              <div class="text-center">
                <a href="https://play.google.com/store/apps/details?id=com.stm.sosremit" target="_black" ><img src="{{asset('frontend/assets/img/sliders/google_app_download.png')}}" alt="" class="img-fluid" width="40%"></a>
                <a href="https://apps.apple.com/gb/app/sos-remit/id1610316706" target="_black"><img src="{{asset('frontend/assets/img/sliders/iphone_app_down.png')}}" alt="" class="img-fluid" width="40%" ></a> 
              </div> 
            </p>
        </div>
      </div>
      <div class="col-lg-7 col-xl-6">
          <div class="row banner style-2 justify-content-center">
              <div class="col-12 col-sm-6 mb-4 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 font-weight-400 mb-0"></h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="{{asset('frontend/assets/img/posts/file_12021-12-02_16_41_53.jpg')}}"  width="410" height="350"  alt="banner"> </a> </div>
              </div>
              <div class="col-12 col-sm-6 mb-4 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 font-weight-400 mb-0"></h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="{{asset('frontend/assets/img/posts/file_22021-11-04_17_13_12.jpg')}}"  width="410" height="350"  alt="banner"> </a> </div>
              </div>
              <div class="col-12 col-sm-6 mb-4 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 font-weight-400 mb-0"></h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="{{asset('frontend/assets/img/posts/file_32021-11-04_17_13_12.jpg')}}"  width="410" height="350"  alt="banner"> </a> </div>
              </div>
            <div class="col-12 col-sm-6 mb-4 text-center">
                <div class="item rounded shadow d-inline-block"> <a href="#">
                  <div class="caption rounded-bottom">
                    <h2 class="text-5 font-weight-400 mb-0"></h2>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="{{asset('frontend/assets/img/posts/file_42021-11-04_17_13_12.jpg')}}"  width="410" height="350"  alt="banner"> </a> </div>
              </div>
                         
          </div>
        </div>
              </div>
  </div>
</section>
<!-- Payment Solutions end --> 



<!-- How work
============================================= -->
<section class="section bg-white">
  <div class="container">
              <div class="row">
              <div class="col-lg-6">
            <div class="card bg-dark-3 shadow-sm border-0">
             <img class="card-img opacity-8" src="{{asset('frontend/assets/img/posts/file_12021-12-14_16_52_44.jpg')}}" width="570" height="362"  alt="banner">

            </div>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0">
            <div class="ml-4">
              <h2 class="text-9">How does it work?</h2>
              <p class="text-4">
                <p>Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p><p><br></p><ul data-checked="false"><li>Sign Up Account</li><li>Receive &amp; Send Payments from worldwide</li><li>Your funds will be transferred to your local bank account</li></ul>
              </p>                  
              <a href="http://worldwide.sosremit.co.uk/register" class="btn btn-outline-primary shadow-none mt-2">Open a Free Account</a> </div>
          </div>
               
      </div>
      
  </div>
</section>
<!-- How work end --> 

<!-- Testimonial
============================================= -->
<section class="section">
  <div class="container">
    <h2 class="text-9 text-center">What people are saying about SOS</h2>
    <p class="lead text-center mb-4">A payments experience people love to talk about</p>
    <div class="owl-carousel owl-theme" data-autoplay="true" data-nav="true" data-loop="true" data-margin="30" data-slideby="2" data-stagepadding="5" data-items-xs="1" data-items-sm="1" data-items-md="2" data-items-lg="2">
      <div class="item" style="max-height:20%;">
        <div class="testimonial rounded text-center p-4">
          <p class="text-4">“Easy to use, reasonably priced simply dummy text of the printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam possim iriure.”</p>
          <strong class="d-block font-weight-500">Jay Shah</strong> <span class="text-muted">Founder at Icomatic Pvt Ltd</span> </div>
      </div>
      <div class="item" style="max-height:20%;">
        <div class="testimonial rounded text-center p-4">
          <p class="text-4">“I am happy Working with printing and typesetting industry. Quidam lisque persius interesset his et, in quot quidam persequeris essent possim iriure.”</p>
          <strong class="d-block font-weight-500">Patrick Cary</strong> <span class="text-muted">Freelancer from USA</span> </div>
      </div>
      <div class="item" style="max-height:20%;">
        <div class="testimonial rounded text-center p-4">
          <p class="text-4">“Fast easy to use transfers to a different currency. Much better value that the banks.”</p>
          <strong class="d-block font-weight-500">De Mortel</strong> <span class="text-muted">Online Retail</span> </div>
      </div>
      <div class="item">
        <div class="testimonial rounded text-center p-4">
          <p class="text-4">“I have used them twice now. Good rates, very efficient service and it denies high street banks an undeserved windfall. Excellent.”</p>
          <strong class="d-block font-weight-500">Chris Tom</strong> <span class="text-muted">User from UK</span> </div>
      </div>
      <div class="item">
        <div class="testimonial rounded text-center p-4">
          <p class="text-4">“It's a real good idea to manage your money by payyed. The rates are fair and you can carry out the transactions without worrying!”</p>
          <strong class="d-block font-weight-500">Mauri Lindberg</strong> <span class="text-muted">Freelancer from Australia</span> </div>
      </div>
      <div class="item">
        <div class="testimonial rounded text-center p-4">
          <p class="text-4">“Only trying it out since a few days. But up to now excellent. Seems to work flawlessly. I'm only using it for sending money to friends at the moment.”</p>
          <strong class="d-block font-weight-500">Dennis Jacques</strong> <span class="text-muted">User from USA</span> </div>
      </div>
    </div>
    <!-- <div class="text-center mt-4"><a href="#" class="btn-link text-4">See more people review<i class="fas fa-chevron-right text-2 ml-2"></i></a></div> -->
  </div>
</section>
<!-- Testimonial end --> 

<!-- Customer Support
============================================= -->
{{-- <section class="hero-wrap section shadow-md">
  <div class="hero-mask opacity-9 bg-primary"></div>
  <div class="hero-bg" style="background-image:url('assets/images/image-2.html');"></div>
  <div class="hero-content py-5">
    <div class="container text-center">
      <h2 class="text-9 text-white">Awesome Customer Support</h2>
      <p class="lead text-white mb-4">Have you any query? Don't worry. We have great people ready to help you whenever you need it.</p> --}}
      <!-- <a href="#" class="btn btn-light">Find out more</a> -->
    {{-- </div>
  </div>
</section> --}}
<!-- Customer Support end --> 

<!-- Mobile App
============================================= -->
{{-- <section class="section py-5">
  <div class="container">
    <div class="justify-content-center text-center">
      <img src="{{asset('frontend/assets/img/site_logo/footer_logo.jpg')}}" width="450" height="150"  alt="sos_footer_logo" />
    </div>
  </div>
</section> --}}
<!-- Mobile App end -->     
</div> 
<!-- Content end --> 


@endsection
