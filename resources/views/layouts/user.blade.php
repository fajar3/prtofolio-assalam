<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PP.ASSALAM</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('user/images/favicon.png')}}" rel="icon">
  <link href="{{asset('user/images/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('user/lib/animate/animate.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('user/css/style.css')}}" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
    /* Responsive Modifications */
    @media (max-width: 768px) {
      #header {
        padding: 10px 0;
      }
      
      #logo img {
        max-height: 40px;
      }
      
      #nav-menu-container {
        display: none;
      }
      
      .mobile-menu-toggle {
        display: block;
        position: absolute;
        right: 15px;
        top: 15px;
      }
      
      #hero {
        padding: 60px 0;
      }
      
      .nav-menu {
        display: block;
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        background-color: #fff;
        z-index: 999;
      }
      
      .nav-menu li {
        text-align: center;
        padding: 10px 0;
        border-bottom: 1px solid #eee;
      }
      
      img {
        max-width: 100%;
        height: auto;
      }
    }
  </style>

  @yield('header')
</head>

<body>
  @php
    $url = request()->segment(1);
  @endphp

  <!--========================== Header ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#hero">
          <img src="{{asset('user/images/icon.png')}}" style="margin-right:5px"/></img>
          <h2 class="d-inline text-light">PONPES ASSALAM</h2>
        </a>
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="mobile-menu-toggle d-md-none">
        <button class="btn btn-outline-light" type="button">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="{{$url=='home'?'menu-active':''}}"><a href="{{url('home')}}">Home</a></li>
          <li class="{{$url=='blog'?'menu-active':''}}"><a href="{{url('blog')}}">Informasi Terkini</a></li>
          <li class="{{$url=='destination'?'menu-active':''}}"><a href="{{url('destination')}}">Produk Santri</a></li>
          <li class="{{$url=='contact'?'menu-active':''}}"><a href="{{url('contact')}}">PPDB</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!--========================== Hero Section ============================-->
  <section id="hero">
    <div class="hero-container">
      @yield('hero')
    </div>
  </section>

  <main id="main">
    @yield('content')
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
      </div>
    </div>

    <footer id="footer">
  <div class="footer-top">
    <div class="container">
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; {{ date('Y') }} Dibuat oleh KKNT 16 UNIRA MALANG
    </div>
    <div class="credits">
      Developed by <strong>ruqqnofearss</strong>
    </div>
  </div>
</footer>>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('user/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('user/lib/superfish/superfish.min.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('user/js/main.js')}}"></script>

  <script>
    $(document).ready(function() {
      // Mobile menu toggle
      $('.mobile-menu-toggle').on('click', function() {
        $('#nav-menu-container').slideToggle();
      });

      // Close mobile menu when clicking outside
      $(document).on('click', function(event) {
        if (!$(event.target).closest('#header').length) {
          $('#nav-menu-container').slideUp();
        }
      });
    });
  </script>
</body>
</html>