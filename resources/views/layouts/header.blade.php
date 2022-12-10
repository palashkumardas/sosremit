<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SOS Remit</title>
    <meta content="description" name="SOS">
    <meta content="author" name="#">
    <meta content="keyword" name="SOS">
    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/site_logo/Fav-icon.png')}}" rel="icon">
    <link href="{{ asset('frontend/assets/img/site_logo/Fav-icon.png')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
    <!-- CSS Files -->
    <link href="{{asset('frontend/assets/css/system.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/custom.css')}}" type="text/css" rel="stylesheet" />
    <style>
      .laravel-embed__responsive-wrapper {
        position: relative;
        height: 0;
        overflow: hidden;
        max-width: 100%;
      }

      .laravel-embed__fallback {
        background: rgba(0, 0, 0, 0.15);
        color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .laravel-embed__fallback,
      .laravel-embed__responsive-wrapper iframe,
      .laravel-embed__responsive-wrapper object,
      .laravel-embed__responsive-wrapper embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
    </style>
  </head>
  <style id="facebook">
    ._2p3a {
      width: 100% !important;
    }
  </style>
  <style type="text/css">
    body {
      font-family: 'Open Sans';
    }
  </style>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div data-loader="dual-ring"></div>
    </div>
    <!-- Preloader End -->
    <div id="main-wrapper">   

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container">
        <div class="header-row">
          <div class="header-column justify-content-start">
            <!-- Logo
          ============================= -->
            <div class="logo">
              <a class="d-flex" href="{{url('/')}}" title="Payyed - HTML Template8">
                <img src="{{asset('frontend/assets/img/site_logo/header_logo.jpg')}}" width="230" alt="Payyed" />
              </a>
            </div>
            <!-- Logo end -->
            <!-- Collapse Button
          ============================== -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <!-- Collapse Button end -->
            <!-- Primary Navigation
          ============================== -->
            <nav class="primary-menu navbar navbar-expand-lg">
              <div id="header-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                  <li>
                    <a href="{{url('/')}}">Home</a>
                  </li>
                  <li>
                    <a href="{{url('/about/')}}">About Us</a>
                  </li>
                  <li>
                    <a href="{{url('/services/')}}">Money transfer </a>
                  </li>
                  <li>
                    <a href="{{url('/contact/')}}">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
            <!-- Primary Navigation end -->
          </div>
          <div class="header-column justify-content-end">
            <!-- Login & Signup Link
          ============================== -->
            <nav class="login-signup navbar navbar-expand">
              <ul class="navbar-nav">
                <li>
                  <a href="http://worldwide.sosremit.co.uk/">Login</a>
                </li>
                <li class="align-items-center h-auto ml-sm-3">
                  <a class="btn btn-primary" href="http://worldwide.sosremit.co.uk/register">Sign Up</a>
                </li>
              </ul>
            </nav>
            <!-- Login & Signup Link end -->
          </div>
        </div>
      </div> 
    </header>
    <!-- End Header -->