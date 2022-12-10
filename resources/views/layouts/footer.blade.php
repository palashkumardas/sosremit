  <!-- ======= Footer ======= -->
  @php $contact = App\Models\Contact::get()->first() @endphp

  <!-- Footer
============================================= -->
<footer>
  <div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <left>
                    <a href="{{url('/')}}">
                      <img class="d-block" src="{{asset('frontend/assets/img/site_logo/header_logo.jpg')}}" width="65%" height="53%" alt=""/>
                    </a>
                </left>
                <!-- <p class="description">
                  "SOS Remit Ltd", a company incorporated in England with registered number 13603275 whose registered address is at 90A Bury Park Road, Luton, Bedfordshire, United Kingdom, LU1 1HE is authorised by the Financial Conduct Authority (“FCA”) under Worldwide west 2 east services limited, trading as WORLDWIDE SERVICES (The Principal), with registered number 07684314 whose address is at 92a Plumstead High Street, London, England, SE18 1SL, FRN 563795, the Payment Services Regulations 2009 (SI 2009 No. 209) (the “Regulations”) for the provision of payment services, with FCA register number 960722 as a PSD agent." 
                  {{-- {!!$contact->description!!} --}}
                  {{-- "SUNNAH MONEY TRANSFER, a company incorporated in England with registered number 09786866 whose registered address is at 282 Bethnal Green, London, United Kingdom E2 0AG. is authorised by the Financial Conduct Authority (“FCA”) under Worldwide west 2 east services limited, trading as WORLDWIDE SERVICES (The Principal), with registered number 07684314 whose address is at 92a Plumstead High Street, London, England, SE18 1SL, FRN 563795, the Payment Services Regulations 2009 (SI 2009 No. 209) (the “Regulations”) for the provision of payment services, with FCA register number 935306 as a PSD agent." --}}
                </p> -->
            </div>
            <div class="col-md-2">
                <h1 style="color:#611a31;padding-top:5%;">Useful Links</h1>
                <p><a href="{{url('/')}}">HOME</a></p>
                <p><a href="{{url('/about/')}}">ABOUT US</a></p>
                <p><a href="{{url('/services/')}}">MONEY TRANSFER</a></p>
                <p><a href="{{url('/terms')}}">TERMS & CONDITIONS</a></p>
                <p><a href="{{url('/privacy')}}">PRIVACY</a></p>
                <p><a href="{{url('/cookies')}}">COOKIE POLICY</a></p>
            </div>
            <div class="col-md-2">
                <h1 style="color:#611a31; padding-top:5%;">Our Services</h1>
                <p><a href="#">Bank Transfer</a></p>
                <p><a href="#">Cash Pickup</a></p>
                <p><a href="#">Mobile Wallet</a></p>
                {{-- <p><span class="icon_box"><i class="fas fa-map-marker-alt" style="color:#fff" aria-hidden="true"></i></span>{!!$contact->address!!}</p> --}}
{{--                    <h1 style="color: #146B37; padding-top:5px;">Payment</h1>
                 <img src="{{asset('frontend/assets/images/payment_method.png')}}"> --}}
            </div>
            <div class="col-md-3">
            <h1 class="ms-5" style="color:#611a31; ; padding-top:4.5%; padding-left: 14%;">Powered By</h1> 
            <img src="{{asset('frontend/assets/img/sliders/power.png')}}" alt="" class="img-fluid mt-4 " width="200" alt="Worldwide">
                <div class="">
                  
              {{--   <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9931.114816105151!2d-0.09280568540000553!3d51.51727581553688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cc61018fe23%3A0x1a7eb7e958e3ff36!2sSannah%20Group%20London!5e0!3m2!1sen!2sbd!4v1649919850212!5m2!1sen!2sbd"
                    width="100%" height="200" style="border-radius:20px; border:none;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                </div>
            </div> 
           <!-- <div class="col-md-2">
                <h1>Powered By</h1>
                <img src="https://www.sunnahmoneytransfer.com/frontend/images/worldwide.svg" alt="Worldwide" class="img-fluid my-3" width="200">
            </div> -->
        </div>
        <div class="row justify-content-center">
              <div class="col-lg-12 mt-4">
                <p>
SOS REMIT LTD, a company incorporated in England with registered number 13603275 at 90A Bury Park Road, Luton, Bedfordshire, United Kingdom LU1 1HE. The SOS Remit Ltd is registered with FCA as PSD agent, FRN 960722 under Worldwide West 2 East services Limited, trading as WORLDWIDE SERVICES (The Principal). Worldwide Services FRN in FCA register is 563795 with company registration no 07684314 at address, 92A Plumstead High Street London SE18 1SL, United Kingdom.
</p>
              </div>
            </div>

    </div>
</div>
<div class="copywrite">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <p>Copyright SOS Remit Ltd@All Rights Reserved</p>
          </div>
          <div class="col-md-6">
            <ul class="social-icons justify-content-center">
              <li class="social-icons-facebook">
                <a data-toggle="tooltip" href="{{$contact->facebook}}" target="_blank" title="Facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="social-icons-twitter">
                <a data-toggle="tooltip" href="{{$contact->twitter}}" target="_blank" title="Twitter">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="social-icons-google">
                <a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google">
                  <i class="fab fa-google"></i>
                </a>
              </li>
              <li class="social-icons-youtube">
                <a data-toggle="tooltip" href="{{$contact->youtube}}" target="_blank" title="Youtube">
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
            </ul>
              {{-- <ul class="icons-social">
                  <li><a href="{!!$contact->facebook!!}"><img src="{{asset('frontend/assets/images/icons/facebook.png')}}" /></a></li>
                  <li><a href="{!!$contact->twitter!!}"><img src="{{asset('frontend/assets/images/icons/twitter.png')}}" /></a></li>
                  <li><a href="{!!$contact->linkedin!!}"><img src="{{asset('frontend/assets/images/icons/linkedin.png')}}" /></a></li>
                  <li><a href="{!!$contact->youtube!!}"><img src="{{asset('frontend/assets/images/icons/youtube.png')}}" /></a></li>
              </ul> --}}
          </div>
      </div>
  </div>
</div>

    
   
</footer>
<!-- Footer end --> 
</div>
<!-- Document Wrapper end --> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Video Modal
============================================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  <div class="modal-content bg-transparent border-0">
    <button type="button" class="close text-white opacity-10 ml-auto mr-n3 font-weight-400" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="modal-body p-0">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Video Modal end --> 
<!-- Main JS Files -->
<script src="{{asset('frontend/assets/js/main.js')}}" type="text/javascript"></script> 
<!-- Template Plugin JS File -->
<script src="{{asset('frontend/assets/js/pluging.js')}}" type="text/javascript"></script> 

</body>

</html>
