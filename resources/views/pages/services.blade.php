@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <main id="main">
    
  <!-- start breadcum -->
  <section class="page-header page-header-text-light bg-dark-3 py-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <ul class="breadcrumb mb-0">
            <li>
              <a href="{{url('/')}}">SOS Home</a>
            </li>
            <li class="active"> Money transfer </li>
          </ul>
        </div>
        <div class="col-12">
          <h1> Money transfer </h1>
        </div>
      </div>
    </div>
  </section>
  <section class="section " style="padding-top:unset !important; padding-bottom:1.5% !important;">
    <div class="container">
      <div class="row">
        <div class="cols-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
          <h3>
            <strong>Send Money on SOS Remit App</strong>
          </h3>
          <h4>
            <span style="color: inherit; font-family: inherit; font-size: 1em;">Download our App today</span>
          </h4>
          <ul>
            <li>Convenient</li>
            <li>Easy and Simple to use</li>
            <li>Track Transfers</li>
            <li>Receive Notifications</li>
            <li>2 Factor Authentication Security</li>
          </ul>
          <p>
            <br>
          </p>
        </div>
        <div class="cols-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
          <img class="img-fluid w-100" src="{{asset('frontend/assets/img/section/money-transfer/350x350/file_12021-11-17_19_15_43.jpg')}}" alt="money-transfer">
        </div>
      </div>
    </div>
  </section>
  <section class="section " style="padding-top:unset !important; padding-bottom:1.5% !important;">
    <div class="container">
      <div class="row">
        <div class="cols-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
          <h4>CHECK FOR BEST RATES</h4>
          <p>Use our quick calculator and get an instant quote.</p>
        </div>
        <div class="cols-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
          <img class="img-fluid w-100" src="{{asset('frontend/assets/img/section/money-transfer/350x350/file_12021-11-17%2019_00_41.jpg')}}" alt="money-transfer">
        </div>
      </div>
    </div>
  </section>
  <section class="section " style="padding-top:unset !important; padding-bottom:1.5% !important;">
    <div class="container">
      <div class="row">
        <div class="cols-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
          <h4>SAFE &amp; SECURE</h4>
          <p>Add recipient detail and upload your ID documents to verify yourself. Receive OTP confirmation codes as part of two factor authentication.</p>
        </div>
        <div class="cols-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
          <img class="img-fluid w-100" src="{{asset('frontend/assets/img/section/money-transfer/350x350/file_12021-11-17%2019_01_57.jpg')}}" alt="money-transfer">
        </div>
      </div>
    </div>
  </section>
  <section class="section " style="padding-top:unset !important; padding-bottom:1.5% !important;">
    <div class="container">
      <div class="row">
        <div class="cols-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
          <h4>FAST TRANSFER</h4>
          <p>Check transaction transfer status for Next day cash payouts and transfer to any bank across Bangladesh.</p>
        </div>
        <div class="cols-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
          <img class="img-fluid w-100" src="{{asset('frontend/assets/img/section/money-transfer/350x350/file_12021-11-17%2019_02_48.jpg')}}" alt="money-transfer">
        </div>
      </div>
    </div>
  </section>
  <section class="section " style="padding-top:unset !important; padding-bottom:1.5% !important;">
    <div class="container">
      <div class="row">
        <div class="cols-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
          <h4>PAYOUT NOTIFICATIONS</h4>
          <p>Receive FREE notifications when your family member or friend has collected the transfer.</p>
        </div>
        <div class="cols-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
          <img class="img-fluid w-100" src="{{asset('frontend/assets/img/section/money-transfer/350x350/file_12021-11-17%2019_03_36.jpg')}}" alt="money-transfer">
        </div>
      </div>
    </div>
  </section>
  <section class="section " style="padding-top:unset !important; padding-bottom:1.5% !important;">
    <div class="container">
      <div class="row">
        <div class="cols-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
          <h4>
            OPEN YOUR ACCOUNT TODAY
          </h4>
          <p>Signing up to Bangla Remit money Transfer is simple.</p>
          <p>Enjoy the benefits of Sending Money Home wherever you are at Work, Home or On the go <a href="http://worldwide.sosremit.co.uk/register" rel="noopener noreferrer" target="_blank">here</a>
          </p>
          <p>
            <br>
          </p>
        </div>
        <div class="cols-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
          <img class="img-fluid w-100" src="{{asset('frontend/assets/img/section/money-transfer/350x350/file_12021-11-17%2019_05_02.jpg')}}" alt="money-transfer">
        </div>
      </div>
    </div>
  </section>
  <!-- Content end -->

    </main><!-- End #main -->
@endsection
