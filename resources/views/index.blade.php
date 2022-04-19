<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visa Bali Expert</title>
  <meta content="Visa Bali Expert Most Recommend visa agency in Bali." name="description">
  <meta content="visa" name="keywords">

  <!-- Favicons -->
  <link href="{{url('/')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('/')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('/')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('/')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('/')}}/assets/css/style.css" rel="stylesheet">

  <!-- Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
  {!! RecaptchaV3::initJs() !!}

  <!-- =======================================================
  * Template Name: Selecao - v4.7.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .pricing .features .feature {
      font-weight: 600; 
    }
    .pricing .features h4 {
      text-align: center;
      font-size: 16px;
      padding: 5px; 
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">VBE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#cta">Services</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <!-- BG VIDEO -->
    <div class="bg-video">
      <img src="assets/img/bg1.jpg" class="image" alt="background">
    </div>
    <!-- BG VIDEO -->
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Visa Bali Expert</span></h2>
          <p class="animate__animated fanimate__adeInUp">{!! $profiles->descriptions !!}
          </p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#eee">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h4>
              Welcome to the website of the Indonesian Visa Application Center <br> in Bali.
            </h4>
            <a href="#" class="btn-learn-more">Regulation Travelling To Indonesia</a>
            <a href="#cta" class="btn-learn-more">Learn More</a>
          </div>
          <div class="col-lg-6">
            <p>
              This site provides information on procedures applicable to all foreigners who wish to apply for an Indonesian visa to travel to Bali or any other Indonesian island. It also provides information regarding applying for Indonesia Visas that are based in BALI.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Our consultants provide all the information that our clients need from start to finish.
              </li>
              <li><i class="ri-check-double-line"></i> Our company provides a high-quality customised services.
              </li>
              <li><i class="ri-check-double-line"></i>We cooperate directly with the immigration office. That’s why we always give reasonable prices. Our foreign partners help us to provide an excellent service in various languages.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->



    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>service</h2>
        </div>
        <div class="row" data-aos="zoom-out">
          <div class="col-lg-12 text-center text-lg-start">
            <h3>We do offer awesome Services</h3>
            <p>Get the best service from our best team, because customer satisfaction is our priority.</p>
          </div>
          <!-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#feature">Learn More</a>
          </div> -->
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          @foreach ( $services as $service )
            <li class="nav-item col-4" data-aos="zoom-in">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $service->id }}">
                <i class="{{ $service->icon }}"></i>
                <h4 class="d-none d-lg-block">{{ $service->name }}</h4>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
      <!-- Modal -->
        @include('modal_service')
      <!-- /Modal -->
    </section><!-- End Features Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Promotions</h2>
          <p style="color: #fff !important;">Try promo from our offer</p>
        </div>

        <div class="row">
        @foreach ( $promos as $promo)
          <div class="col-lg-4 col-md-4">
          <div class="box" data-aos="zoom-in" data-aos-delay="300">
              @if ($promo->extras_id)
                <span class="advanced">Best Value</span>
              @endif
              <h3>{{ $promo->name }}</h3>
              <h4><sup>{{ $promo->currency }}</sup>{{ $promo->price }}</h4>
              <!-- <h4><sup>$</sup>0<span> / month</span></h4> -->
              <?php  $featuresArray = preg_split ("/\|\|\|\|/", $promo->feature);?>
              @foreach ( $featuresArray as $features )
              <h4>
                <span class="feature"></span>
                <span class="value">{!! $features !!}</span>
              </h4>  
              @endforeach
              <?php if(empty($promo->descriptions)){ ?>
                <?php }else{ ?>
              <hr>
              <h6 class="text-center text-secondary">Note :</h6>
              <p class="text-center text-secondary">{!! $promo->descriptions !!}</p>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">More</a>
              </div> -->
              <?php } ?>
            </div>
          </div>
        @endforeach

          <!-- <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">
          @foreach ( $faqs as $faq )
            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{ $faq->id }}"><b>{{ $faq->questions }}</b><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq{{ $faq->id }}" class="collapse" data-bs-parent=".faq-list">
                <p>
                  {{ $faq->answer }}
                </p>
              </div>
            </li>
            @endforeach
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><a href="https://goo.gl/maps/fT5VvF2o6JaNuzsd8" style="text-decoration: none;color: inherit;">{{ $profiles->alamat }}</a></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:{{ $profiles->email }}" style="text-decoration: none;color: inherit;">{{ $profiles->email }}</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><a href="https://api.whatsapp.com/send?phone={{ $profiles->phone }}" style="text-decoration: none;color: inherit;">{{ $profiles->phone }}</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form id="form-feedback" role="form" class="php-email-form">
            {!! csrf_field() !!}
              <div class="row">
                <div class="col-md-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }} mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
              </div>
              <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }} mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
              </div>
              <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} mt-3">
                <textarea class="form-control" name="message" id='message' rows="5" placeholder="Message"></textarea>
                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
              </div>
              <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }} mt-3">
                            <div class="col-md-6">
                                {!! RecaptchaV3::field('register') !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

              <div class="text-center">
                <button  id="submit" type="submit" >Send Message</button>
              </div>

            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Visa Bali Expert</h3>
      <p>{!! $profiles->descriptions !!}</p>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
      <div class="copyright">
        &copy; Copyright <strong><span>Visa Bali Expert</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Develop by <a href="">GNS</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="https://api.whatsapp.com/send?phone={{ $profiles->phone }}" style="margin-bottom: 70px" class="whatsapp d-flex align-items-center justify-content-center" target="_blank">
<i class="bx bxl-whatsapp"></i>
</a>

  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="{{url('/')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('/')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <!-- <script src="{{url('/')}}/assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- <script src="assets/js/script.js"></script> -->

  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <script>
    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

// mailer
 //For get event Form Feedback on submit
 $('#form-feedback').on('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);

    //Ajax Send Request
    $.ajax({
      url: '{{ route("api.send.feedback") }}', //Name Api Route
      method: 'POST', //Method Request
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: function() {
        $('#submit').attr('disabled', 'disabled');
        $('#submit').html('SENDING...');
      },
      success: function(data) {
        $('#submit').attr('disabled', false);
        $('#submit').html('SEND MESSAGE');
        $('#form-feedback')[0].reset();

        //Json Parse for Response of Request
        data = JSON.parse(data);

        //If response message success
        if (data.message == "success") {

          //Show Sweet Alert Success
          Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Your FeedBack Has Been Sent!'
          });

          //If response message failed
        } else if (data.message == "failed") {

          //Show Sweet Alert Error
          Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: 'Something Wrong Has Happened!'
          });
        } else {

          //Show Sweet Alert Error
          Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: 'Something Wrong Has Happened!',
            footer: 'Error: ' + data.message
          });
        }
      },
      error: function(data, xhr) {
        $('#submit').attr('disabled', false);
        $('#submit').html('SEND FEEDBACK');

        //Show Sweet Alert Error
        Swal.fire({
          icon: 'error',
          title: 'Opps...!',
          text: 'Something Wrong Has Happened!',
          footer: 'Error: ' + data
        });
      }
    });
  });
  </script>
  
  <!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KPRGV8RB2E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KPRGV8RB2E');
</script> -->

</body>

</html>