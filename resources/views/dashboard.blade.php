@extends('layouts.app')

@section('content')
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
     <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/templatemo-digital-trend.css">

</head>
<body>


  


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Please take a look through our
                            <strong>featured Services</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="images/project/project-engineer.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info  w-50 p-3">
                                      

                                        <h3>
                                             <a href="#">
                                                  <span>Electrical Engineering</span>
                                                  <!-- <i class="fa fa-angle-right project-icon"></i> -->
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-plumbing.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info  w-50 p-3">
                                     

                                        <h3>
                                             <a href="#">
                                                  <span>Plumbing</span>
                                                  <!-- <i class="fa fa-angle-right project-icon"></i> -->
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-painting.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info  w-50 p-3">
                                    

                                        <h3>
                                             <a href="#">
                                                  <span>Painting</span>
                                                  <!-- <i class="fa fa-angle-right project-icon"></i> -->
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-repair.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info w-50 p-3">
                                      

                                        <h3>
                                             <a href="#">
                                                  <span>Hardware Repair</span>
                                                  <!-- <i class="fa fa-angle-right project-icon"></i> -->
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image05.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info  w-50 p-3">
                                       

                                        <h3>
                                             <a href="#">
                                                  <span>Ultimate HealthCare</span>
                                                  <!-- <i class="fa fa-angle-right project-icon"></i> -->
                                             </a>
                                        </h3>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>



   <!-- ABOUT -->
   <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">the best <strong>Service Provider</strong> in Uganda</h2>
                              <a href="{{ route('service')}}" class="btn btn-primary mt-3 mb-4" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a>

                             
                         </div>

                    </div>

               </div>
          </div>
     </section>


   


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We offer quality<strong>services</strong> only.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +256-757326941
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                alvinbato112@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Location</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Kireka Road, Mbuya Zone 2 Kampala, Uganda
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Kwash Solutions
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com"></a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>




     <script src="{{ asset('js/jquery.min.js') }}" defer></script>
     <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
     <script src="{{ asset('js/aos.js') }}" defer></script>
     <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
     <script src="{{ asset('js/smoothscroll.js') }}" defer></script>
     <script src="{{ asset('js/custom.js') }}" defer></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
     
     @endsection