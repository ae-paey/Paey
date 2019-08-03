<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="https://schema.org/Organization">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow" />
  <meta name="google" content="translate" />

  <title>Pæy Verification Mail</title>

  <!-- Styles -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="http://paey.herokuapp.com/frontend/assets/css/bootstrap.min.css" >
  <!-- Icon -->
  <link rel="stylesheet" href="http://paey.herokuapp.com/frontend/assets/fonts/line-icons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Owl carousel -->
  <link rel="stylesheet" href="http://paey.herokuapp.com/frontend/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="http://paey.herokuapp.com/frontend/assets/css/owl.theme.css">
  
  <!-- Animate -->
  <link rel="stylesheet" href="http://paey.herokuapp.com/frontend/assets/css/animate.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="http://paey.herokuapp.com/frontend/assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" href="http://paey.herokuapp.com/frontend/assets/css/responsive.css">
</head>
<body>
  <section class="section-padding">
    <div class="container">
      <div class="section-header text-center">
        <a><h2 class="wow fadeInDown" data-wow-delay="0.3s"><img src="http://paey.herokuapp.com/images/logo-text.png" alt="Pæy Logo"></h2></a>
        <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
      </div>
      <div class="site-heading">
        <p class="mb-3">Hello <strong class="text-primary">{{ $user['name'] }}</strong>, welcome to <strong class="text-primary">{{ config('app.name') }}</p>
      </div>
      <div class="text">
        <p>Your registered Email Address is <span class="text-primary">{{ $user['email'] }}</span>, Kindly complete your profile by clicking on the below link to register your company</p>

        <a href="{{url('profile', $user->profile->id)}}" class="btn btn-common mt-3">Complete Profile</a>
      </div>
    </div>
  </section>
  <section class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">           
          <div class="cta-text">
            <h4>>Pæy</h4>
            <p>Are You a Customer or a Student that want to pay his/her fee or even trade from fiat to crypto currency? Check out these links</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12 text-right wow fadeInRight" data-wow-delay="0.3s">
          </br><a href="{{ config('app.aepp_url') }}/pay" target="_blank" class="btn btn-common">Pay Here</a>
          <a href="{{ config('app.aepp_url') }}/trade" target="_blank" class="btn btn-border">Trade Here</a>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mb-12">
            <div class="widget">
              <h3 class="footer-logo"><img src="http://paey.herokuapp.com/images/logo.png') }}" alt="Pæy Logo"></h3>
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
</body>
</html>
