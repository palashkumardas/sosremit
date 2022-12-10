@extends('master')
@section('content')
@section('title','Privcay Policy')
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
                 <li class="active"> Privacy Policy </li>
               </ul>
             </div>
             <div class="col-12">
               <h1> Privacy Policy </h1>
             </div>
           </div>
         </div>
       </section>
       <!-- Who we are
         ============================================= -->
       <section class="section" style="padding-top:unset !important;">
         <div class="container">
           <div class="row">
             <div class="col-lg-12">
               <div class="my-auto px-0 px-lg-5 mx-2">
                 {{-- <h2 class="text-9">Cookies Policy</h2> --}}
                 <p class="text-4">
                 {!!$privacy->description!!}
                 </p>
               </div>
             </div>
             <div class="col-lg-6 my-auto text-center">
               <div class="about-video position-relative w-100"></div>
               <br />
             </div>
             <div class="col-lg-6 my-auto text-center"></div>
             <!-- <div class="col-lg-6 my-auto text-center"><img class="img-fluid shadow-lg rounded-lg" src="http://demo.harnishdesign.net/html/payyed/images/who-we-are.jpg" alt=""></div> -->
           </div>
         </div>
       </section>
       <!-- Who we are end -->
       <!-- Content end -->
  </main><!-- End #main -->
@endsection