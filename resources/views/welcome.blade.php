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

    <title>{{ config('app.name', 'Pæy') }}</title>

    <meta name="title" content="{{ config('app.name', 'Pæy') }}">
    <meta name="keywords" content="emmanueljet, Emmanuel Joseph (Jet), Emmanuel Joseph, Payment Company, pay online, college, high school, university, secondary school, aeternity, nigeria, decentralized, blockchain, schools, students, fee, fees">
    <meta name="description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">

    <!-- Google -->
    <meta name="google-site-verification" content="8RCgoezuBrJpU-i8YvfKP2PCwG3ApMeF7kp31hEoGRM" />
    <link itemprop="url" rel="canonical" href="{{ url()->current() }}" />
    <meta itemprop="name" content="{{ config('app.name', 'Pæy') }}">
    <meta itemprop="description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">
    <meta itemprop="image" content="{{ asset('images/logo.png') }}">

    <!-- Facebook -->
    <meta property="fb:app_id" content="2662662980423546"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ config('app.name', 'Pæy') }}" />
    <meta property="og:description" content="Pæy is a decentralized payment system that allows payment with crypto currencies" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:alt" content="Pæy Image" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:site" content="@ae_paey">
    <meta name="twitter:creator" content="@emmanuelJet_">
    <meta name="twitter:title" content="{{ config('app.name', 'Pæy') }}">
    <meta name="twitter:description" content="Pæy is a decentralized payment system that allows payment with crypto currencies">
    <meta name="twitter:image:src" content="{{ asset('images/logo.png') }}">
    <meta name="twitter:image:alt" content="Pæy Image">
    
    {{--  Favicon  --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
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
  <body class="scrollbar scrollbar-primary">
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="/" class="navbar-brand"><img src="{{ asset('images/logo-text.png') }}"></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Team
                </a>
              </li>
              {{--  <li class="nav-item">
                <a class="nav-link" href="#pricing">
                  Pricing
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                  Testimonial
                </a>
              </li>  --}}
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ config('app.aepp_url') }}" target="_blank">
                  æpp
                </a>
              </li>
              @if (Route::has('login'))
                <li class="nav-item">
                  @auth
                    <a class="btn btn-border" href="{{ url('/home') }}">Home</a>
                  @else
                    @if (Route::has('register'))
                      <a class="btn btn-border" href="{{ route('register') }}">Register</a>
                    @endif
                  @endauth
                </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <img src="{{ asset('images/banner-text.png') }}" alt="Banner Text Logo" class="head-title">
                <p>Pæy is a decentralized payment system that allows payment with crypto currencies</p>
                <div class="header-button">
                  <a href="{{ route('register') }}" class="btn btn-common">Get Started</a>
                  <a href="#about" class="btn btn-border">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="{{ asset('images/banner.png') }}" alt="">
              </div>            
            </div>
          </div> 
        </div> 
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Trade</a></h3>
                <p>Converting fiat currencies into crypto currencies and vice versa</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-stats-up"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Payment</a></h3>
                <p>Using crypto currency to make transactions to different platforms</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Customers support</a></h3>
                <p>Our website has been built for easy access</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- About Section start -->
    <div id="about" class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  <p class="mb-3">Pæy</p>
                  <h2 class="section-title">What is Pæy?</h2>
                </div>
                <div class="content">
                  <p>
                    Pæy is a decentralized payment system that has made paying more efficient and easy by allowing payment with crypto currencies. We are targeting companies that would love to reach a larger audience, institutions interested in making payment easier for her students, and other firms that want an efficient way of receiving payment. Our target cuts across business individuals, companies, institutions, churches and lots more.
                  </p>
                  <p>
                    Pæy idea was birthed as a result of our experience as students in Ekiti state university, Ekiti State, Nigeria where bank charges extra fees over every transaction made and creates extreme stress for students. We started Pæy because we want to save students and customers stress and time by making payment possible at the very comfort of their rooms or offices using blockchain technologies
                  </p>
                  <a href="{{ route('register') }}" class="btn btn-common mt-3">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <img class="img-fluid" src="{{ asset('frontend/assets/img/about/img-1.png') }}" alt="" >
          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Awesome Features</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="content-left">
              <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-rocket"></i>
                </span>
                <div class="text">
                  <h4>Secured payment</h4>
                  <p>It is a guarantee that all transactions will be safe and well secured</p>
                </div>
              </div>
              <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
                <span class="icon">
                  <i class="lni-laptop-phone"></i>
                </span>
                <div class="text">
                  <h4>No hidden charges</h4>
                  <p>Apart from our 1% commission, there are no hidden charges</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
              <img src="{{ asset('frontend/assets/img/feature/intro-mobile.png') }}" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="content-right">
              <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-layers"></i>
                </span>
                <div class="text">
                  <h4>Efficiency</h4>
                  <p>Receive payment in less than twenty four hours</p>
                </div>
              </div>
              <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
                <span class="icon">
                  <i class="lni-leaf"></i>
                </span>
                <div class="text">
                  <h4>Working Contact Form</h4>
                  <p>You are our number one priority</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End --> 
    
    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Meet our family</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="{{ asset('images/teams/anuoluwa_popoola.png') }}" alt="Anuoluwa Popoola">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Anuoluwa Popoola</a></h3>
                  <p>Lead UI/UX Designer</p>
                </div>
                <p>I am passionate about helping brands communicate effectively to their customers through design</p>
                <ul class="social-icons">
                  <li><a href="https://instagram.com/just_anuoluwa" target="_blank" rel="nofollow"><i class="fab fa-instagram" style="color:#fd1d1d" aria-hidden="true"></i></a></li>
                  <li><a href="https://telegram.me/justanuoluwa" target="_blank" rel="nofollow"><i class="fab fa-telegram-plane" style="color:#0088cc" aria-hidden="true"></i></a></li>
                  <li><a href="https://wa.me/2348168263502" target="_blank" rel="nofollow"><i class="fab fa-whatsapp" style="color:#25d366" aria-hidden="true"></i></a></li>
                  <li><a href="mailto:justanuoluwa2000@gmail.com" rel="nofollow"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="{{ asset('images/teams/abimbola_abe.png') }}" alt="Abimbola Abe">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Abimbola Abe</a></h3>
                  <p>Growth Hacker</p>
                </div>
                <p>I am a Content creator and business developer. I am passionate about helping start ups grow</p>
                <ul class="social-icons">
                  <li><a href="mailto:abeabimbola40@gmail.com" rel="nofollow"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
            </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="team-img">
                <img class="img-fluid" src="{{ asset('images/teams/emmanuel_joseph.png') }}" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Emmanuel Joseph (JET)</a></h3>
                  <p>Lead Developer</p>
                </div>
                <p>I am a Software and BlockChain Developer who develops solutions with Laravel, Flutter and æternity technology</p>
                <ul class="social-icons">
                  <li><a href="https://linkedin.com/in/jet774" target="_blank" rel="nofollow"><i class="fab fa-linkedin" style="color:#00a0dc" aria-hidden="true"></i></a></li>
                  <li><a href="https://wa.me/2349064847962" target="_blank" rel="nofollow"><i class="fab fa-whatsapp" style="color:#25d366" aria-hidden="true"></i></a></li>
                  <li><a href="https://emmanueljet.me" target="_blank" rel="nofollow"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
              <div class="team-img">
                <img class="img-fluid" src="{{ asset('images/teams/stephen_sunday.png') }}" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Stephen Sunday</a></h3>
                  <p>Advisor</p>
                </div>
                <p>I am a blockchain enthusiast who promote blockchain solutions for grass root adoption</p>
                <ul class="social-icons">
                  <li><a href="https://twitter.com/steviekusu" target="_blank" rel="nofollow"><i class="fab fa-twitter" style="color:#1da1f2" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/sunday-stephen-kusu-8673a6173/" target="_blank" rel="nofollow"><i class="fab fa-linkedin" style="color:#00a0dc" aria-hidden="true"></i></a></li>
                  <li><a href="https://telegram.me/Kusustevie" target="_blank" rel="nofollow"><i class="fab fa-telegram-plane" style="color:#0088cc" aria-hidden="true"></i></a></li>
                  <li><a href="https://wa.me/2347036171049" target="_blank" rel="nofollow"><i class="fab fa-whatsapp" style="color:#25d366" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->
    
    <!-- Call To Action Section Start -->
    <section id="cta" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">           
            <div class="cta-text">
              <h4>Pæy</h4>
              <p>Are You a Customer or a Student that want to pay his/her fee or even trade from fiat to crypto currency? Check out these links</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 text-right wow fadeInRight" data-wow-delay="0.3s">
            <br><a href="{{ config('app.aepp_url') }}/pay" target="_blank" class="btn btn-common">Pay Here</a>
            <a href="{{ config('app.aepp_url') }}/trade" target="_blank" class="btn btn-border">Trade Here</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Section Start -->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding bg-gray">    
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Countact Us</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">   
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="contact-block">
              <form method="post" action="{{ route('contact.form') }}">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}">
                      @if ($errors->has('name'))
                        <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}">
                      @if ($errors->has('email'))
                        <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div> 
                  </div>
                    <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" class="form-control" name="subject" value="{{ old('subject') }}">
                      @if ($errors->has('subject'))
                        <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('subject') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" name="message" placeholder="Your Message" rows="7">{{ old('message') }}</textarea>
                      @if ($errors->has('message'))
                        <span class="text-danger" role="alert">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                      @endif
                    </div>
                    <div class="submit-button text-left">
                      <input class="btn btn-common" type="submit" value="Send Message">
                      @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show tada animated">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          {{ Session::get('success') }}
                        </div>
                      @endif
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="map">
              <object style="border:0; height: 280px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2310.5142877481967!2d5.250901522770899!3d7.712236032607126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d1ec3fff45f7254!2sGDG+EKSU+Hub+(Ekiti+State+University)!5e0!3m2!1sen!2sng!4v1564139454944!5m2!1sen!2sng"></object>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <img class="footer-logo" src="{{ asset('images/logo.png') }}" alt="Pæy Logo">
                <div class="textwidget">
                  <p>Changing the future of transactions</p>
                </div>
                <div class="social-icon">
                  <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                  <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                  <a class="telegram" href="#"><i class="fab fa-telegram-plane"></i></a>
                  <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Products</h3>
              <ul class="footer-link">
                <li><a href="{{ config('app.aepp_url') }}/trade" target="_blank">Trade</a></li>
                <li><a href="{{ config('app.aepp_url') }}/pay" target="_blank">Pay</a></li>
                <li><a href="{{ route('register') }}">Company</a></li>       
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Resources</h3>
              <ul class="footer-link">
                <li><a href="#">Getting Started</a></li>
                <li><a href="#">Payment Options</a></li>
                <li><a href="#">Developers</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Contact</h3>
              <ul class="address">
                <li>
                  <a href="#contact"><i class="lni-map-marker"></i> GDG EKSU Hub <br> Ekiti State University, Ekiti State, Nigeria</a>
                </li>
                <li>
                  <a href="tel:+2349064847962"><i class="lni-phone-handset"></i> +234 906 484 7962</a>
                </li>
                <li>
                  <a href="mailto:infopaey@gmail.com"><i class="lni-envelope"></i> infopaey@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div> 
      <div id="copyright">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between copyright-content">
            <div class="col-xl-6">
              <div class="text-center text-xl-left">
                <p>Copyright &copy; {{ now()->year }} <a href="{{ config('app.url') }}">{{ config('app.name') }}</a> | All Right Reserved</p>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="text-center text-xl-right">
                <p><a href="https://docs.google.com/document/d/1KFZBIPrK3xLY96s2BI6RbPt3N_fmT244aqR2mQZ4ETM/edit?usp=sharing" target="_blank">Terms of Service</a> | <a href="https://docs.google.com/document/d/1q7_-cH3s3lbPo0-20CjObyyClylVHTYsrl2ys9F9tHc/edit?usp=sharing" target="_blank">Privacy Policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

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
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>  
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
  </body>
</html>
