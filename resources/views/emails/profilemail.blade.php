<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="https://schema.org/Organization">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow" />
    <meta name="google" content="translate" />

    <title>Pæy</title>

    <meta name="title" content="Pæy">
    <meta name="keywords" content="emmanueljet, Emmanuel Joseph (Jet), Emmanuel Joseph, Payment Company, pay online, college, high school, university, secondary school, aeternity, nigeria, decentralized, blockchain, schools, students, fee, fees">
    <meta name="description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">

    <!-- Google -->
    <meta name="google-site-verification" content="" />
    <link itemprop="url" rel="canonical" href="http://paey.herokuapp.com" />
    <meta itemprop="name" content="Pæy">
    <meta itemprop="description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">
    <meta itemprop="image" content="">

    <!-- Facebook -->
    <meta property="fb:app_id" content="2662662980423546"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://paey.herokuapp.com" />
    <meta property="og:title" content="Pæy" />
    <meta property="og:description" content="Pæy is a decentralized payment system that allows payment with crypto currencies" />
    <meta property="og:image" content="" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Pæy Image" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://paey.herokuapp.com">
    <meta name="twitter:site" content="@edupay">
    <meta name="twitter:creator" content="@emmanuelJet_">
    <meta name="twitter:title" content="Pæy">
    <meta name="twitter:description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">
    <meta name="twitter:image:src" content="">
    <meta name="twitter:image:alt" content="Pæy Image">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" >
    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/line-icons.css') }}">
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
  <p>Hello <strong>{{ $user['name'] }}</strong>, welcome to <strong>{{ config('app.name') }}</strong></p>
  <p>Your registered email-id is {{ $user['email'] }} , Please complete your profile by clicking on the below linkt</p>  
  <p>
    <a href="{{url('profile')}}">Complete Profile</a>
  </p>
</body>
</html>
