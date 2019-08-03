<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="https://schema.org/Organization">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow" />
    <meta name="google" content="translate" />

    <title>Pæy Contact Mail</title>

  <meta name="title" content="Pæy Contact Mail">
  <meta name="keywords" content="emmanueljet, Emmanuel Joseph (Jet), Emmanuel Joseph, Payment Company, pay online, college, high school, university, secondary school, aeternity, nigeria, decentralized, blockchain, schools, students, fee, fees">
  <meta name="description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">

  <!-- Google -->
  <meta name="google-site-verification" content="8RCgoezuBrJpU-i8YvfKP2PCwG3ApMeF7kp31hEoGRM" />
  <link itemprop="url" rel="canonical" href="{{ url()->current() }}" />
  <meta itemprop="name" content="Pæy Contact Mail">
  <meta itemprop="description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">
  <meta itemprop="image" content="{{ asset('images/logo.png') }}">

    <!-- Facebook -->
    <meta property="fb:app_id" content="2662662980423546"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Pæy Contact Mail" />
    <meta property="og:description" content="Pæy is a decentralized payment system that allows payment with crypto currencies" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Pæy Image" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:site" content="@ae_paey">
    <meta name="twitter:creator" content="@emmanuelJet_">
    <meta name="twitter:title" content="Pæy Contact Mail">
    <meta name="twitter:description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">
    <meta name="twitter:image:src" content="{{ asset('images/logo.png') }}">
    <meta name="twitter:image:alt" content="Pæy Image">

    {{--  Favicon  --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/{{ asset('faviconapple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" >
    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/line-icons.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.css') }}">
    
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
</head>
<body>
  <section class="section-padding">
    <div class="container">
      <div class="section-header text-center">
        <a><h2 class="wow fadeInDown" data-wow-delay="0.3s"><img src="{{ asset('images/logo-text.png') }}" alt="Pæy Logo"></h2></a>
        <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
      </div>
      <div class="site-heading">
        <p class="mb-3">Hello <strong class="text-primary">{{ config('app.name') }} Customer Support</p>
      </div>
      <div class="text">
        <p>{{ $contact->name }} has sent you a new message from Pæy Contact Form from {{ $contact->email }} with {{ $contact->subject }} as the Mail Subject.</p>
      </div>
      <div class="col-md-6 col-lg-4 col-xs-12">
        <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
          <div class="services-content">
            <h3><a href="#">Message</a></h3>
            <p>{{ $contact->message }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
