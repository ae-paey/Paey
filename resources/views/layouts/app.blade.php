<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="https://schema.org/Organization">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144562288-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144562288-3');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow" />
    <meta name="google" content="translate" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pæy') }}@yield('title')</title>

    <meta name="title" content="{{ config('app.name', 'Pæy') }}@yield('title')">
    <meta name="keywords" content="emmanueljet, Emmanuel Joseph (Jet), Emmanuel Joseph, Payment Company, pay online, college, high school, university, secondary school, aeternity, nigeria, decentralized, blockchain, schools, students, fee, fees">
    <meta name="description" content="Pæy is a decentralized payment system that allows payment with cryptocurrencies">

    <!-- Google -->
    <meta name="google-site-verification" content="8RCgoezuBrJpU-i8YvfKP2PCwG3ApMeF7kp31hEoGRM" />
    <link itemprop="url" rel="canonical" href="{{ url()->current() }}" />
    <meta itemprop="name" content="{{ config('app.name', 'Pæy') }}@yield('title')">
    <meta itemprop="description" content="Pæy is a decentralized payment system that allows payment with cryptocurrencies">
    <meta itemprop="image" content="{{ asset('images/logo.png') }}">

    <!-- Facebook -->
    <meta property="fb:app_id" content="2662662980423546"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ config('app.name', 'Pæy') }}@yield('title')" />
    <meta property="og:description" content="Pæy is a decentralized payment system that allows payment with cryptocurrencies" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Pæy Image" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:site" content="@ae_paey">
    <meta name="twitter:creator" content="@emmanuelJet_">
    <meta name="twitter:title" content="{{ config('app.name', 'Pæy') }}@yield('title')">
    <meta name="twitter:description" content="Pæy is a decentralized payment system that allows payment with cryptocurrencies">
    <meta name="twitter:image:src" content="{{ asset('images/logo.png') }}">
    <meta name="twitter:image:alt" content="Pæy Image">

    {{--  Favicon  --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/{{ asset('faviconapple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/assets/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/assets/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

    @yield('css')
  </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth

        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @guest()
            @include('layouts.footers.guest')
        @endguest

        <!-- Firebase Scripts -->
        <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-firestore.js"></script>
        <script>
          const firebaseConfig = {
            apiKey: "AIzaSyAxMKNowWXNBVS_pRI5NkNg4sppVAMCLAo",
            authDomain: "aepp-paey.firebaseapp.com",
            databaseURL: "https://aepp-paey.firebaseio.com",
            projectId: "aepp-paey",
            storageBucket: "aepp-paey.appspot.com",
            messagingSenderId: "653985433284",
            appId: "1:653985433284:web:98dba8dcd23dfe10"
          };
          // Initialize Firebase
          firebase.initializeApp(firebaseConfig);
        </script>

        <script src="{{ asset('argon') }}/assets/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>
