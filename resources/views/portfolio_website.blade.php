
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Al-Amin - Islam</title>
  <meta content="I'm a FullStack Web Developer,I have deep experiance about Web Design and Develop.So if you have dream setteled your career with Programming,turning your dreams into reality.

" name="description">
  <meta content="I'm a FullStack Web Developer,I have deep experiance about Web Design and Develop.So if you have dream setteled your career with Programming,turning your dreams into reality.

" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link rel="shortcut icon" href="{{ asset('assets/img/fav.jpg') }}"  >

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/font/fontawesome.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================

  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column" style="margin-top: 27%">

      <div class="profile">

   @for($i=0;$i<count($logos);$i++)

        <img src="{{  url('uploads/thumbnail',$logos[$i]->logo) }}" alt="Something went wrong"  
         class="img-fluid rounded-circle">

    @endfor

        <!-- <h1 class="text-light"><a href="index.html">Al-Amin Islam</a></h1> -->
        <div class="social-links mt-3 text-center">
          <a target="__blank"  href="https://www.youtube.com/channel/UCVEvWZ0H7jzV7W4WqqYlm6g/playlists" class="twitter"><i class="bx bxl-youtube"></i></a>

          <a target="__blank" href="https://www.facebook.com/alamin.csit/" class="facebook"><i class="bx bxl-facebook"></i></a>
          {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> --}}

          <a target="__blank" href="https://github.com/developeralamin" class="google-plus"><i class="bx bxl-github"></i></a>

          <a target="__blank" href="https://www.linkedin.com/in/md-al-amin-islam-1725aa1bb/" class="linkedin"><i class="bx bxl-linkedin"></i></a>

        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>About</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Skills</span></a></li>
		   <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Portfolio</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Education</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Tutorials</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Interests</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @foreach($heading as $heading)

  <section id="hero" class="">
    <div class="hero-container about_edit"  data-aos="fade-in">
      <h1>{{ $heading->title }}</h1>
      <p>{{ $heading->subtitle }}</p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about edit_now_here">
      <div class="container">

        <div class="section-title">
          <!-- <h2>About</h2> -->
           <p style="font-size: 17px; line-height:30px;width:94%; text-align: justify; margin-top:-1%; color: #4a4848;" class="mb-5">
          Hi, I am Al-Amin Islam. I have been working as a
		  Web Developer for 1 years. I am a Backend  
		  Full-stack developer. 
Mainly I develop applications using 
 <strong>PHP</strong> programming 
 language and <strong>Laravel</strong> web frameworks. 
 I also use <strong>JavaScript</strong> and <strong>jQuery</strong>.
 </strong> Now I am learning<strong> VueJs</strong>   for the Frontend. 
 I have good knowledge of web .I want to work with Artificial Intelligence
 Especially 
 Machine Learning in the future.
 

          Please, take my love & keep me in your prayers. 
        </p>
        </div>
      </div>
    </section><!-- End About Section -->




  @endforeach 





    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" style="margin-top:7%; margin-bottom:7%;" >

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">
		
				<div class="experience-1">
				    <div class="sub-headding">
					 Technology Skill
					</div>
						
					<div class="sub-headding-title">
					<p>Most of the time I works this technology</p>
					</div>	
		<ul class="list-inline language-icons">
          <li class="list-inline-item">PHP</li>
          <li class="list-inline-item">Laravel</li>
          <li class="list-inline-item">SQL</li>
          <li class="list-inline-item">MySQL</li>
          <li class="list-inline-item">HTML</li>
          <li class="list-inline-item">CSS</li>
          <li class="list-inline-item">Bootstrap</li>
          <li class="list-inline-item">JavaScript</li>
          <li class="list-inline-item">GIT</li>
          <li class="list-inline-item">jQuery</li>
          <li class="list-inline-item">PSD TO HTML</li>
          <li class="list-inline-item">XAMPP Server</li>
          
        </ul>
					
      </div>
		<!-- //end method		 -->


    				<div class="experience-1" style="margin-top:4%">
				    <div class="sub-headding">
					 IDE and Text Editors
					</div>
						
					<div class="sub-headding-title">
				
					</div>	
		<ul class="list-inline language-icons">
          <li class="list-inline-item">VS Code</li>
          <li class="list-inline-item">Sublime Text</li>
          <li class="list-inline-item">Notepad++</li>
  
          
        </ul>
					
      </div>		
            

        </div>

      </div>
    </section><!-- End Skills Section -->

	  <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="padding-bottom:7%;">
      <div class="container">

        <div class="section-title">
          <h2>Some Projects</h2>
          <p>I developed number of projects last 1 years.
		  Some project has been given below.</p>


        </div>

        <div class="row">
		
          <div class="col-md-6 icon-box2 " data-aos="fade-up">
            <div class="icon3">
			  <img src="assets/img/school.jpg" style="width:350px;height:134px!important;">
			</div>
            <h4 class="title"><a target="__blank" href="https://github.com/developeralamin/school-management-system">SCHOOL MANAGEMENT SYSTEM</a></h4>
            <p class="description">
			PHP, Laravel , MySQL

          </p>
          </div>
		  
		   <div class="col-md-6 icon-box2 " data-aos="fade-up">
            <div class="icon5">
			 <img src="assets/img/post.jpg" style="width:350px;height:134px!important;">
			</div>
            <h4 class="title"><a target="__blank" href="https://github.com/developeralamin/POS">POS SYSTEM</a></h4>
            <p class="description">
			PHP, Laravel , MySQL

          </p>
          </div>
		  
		  
		  
          <div class="col-md-6 icon-box2 " data-aos="fade-up">
            <div class="icon3">
			 <img src="assets/img/blogs.jpg" style="width:350px;height:134px!important;">
			</div>
            <h4 class="title"><a target="__blank" href="https://github.com/developeralamin/BlogSite">BLOG SYSTEM</a></h4>
            <p class="description">
			PHP, Laravel , MySQL

          </p>
          </div>
		  
		   <div class="col-md-6 icon-box2 " data-aos="fade-up">
            <div class="icon8">
			 <img src="assets/img/ecom.png" style="width:350px;height:134px!important;">
			</div>
            <h4 class="title"><a target="__blank" href="https://github.com/developeralamin/ecommerce">E-COMMERCE WEBSITE</a></h4>
            <p class="description">
			PHP, Laravel , MySQL

          </p>
          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->
	
	
	
	
	
	
	
	
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Education</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <!-- <h3 class="resume-title">Sumary</h3> -->
            <div class="resume-item pb-0">
              <h4>PANBAZAR D.M. HIGH SCHOOL</h4>
              <p>SSC</p>
              <ul>
                <li>Science</li>
                <li>GPA: 4.86 (Out of 5.00)</li>
               
              </ul>
            </div>

           
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="resume-item year" style="margin-left:44%;color:red;">
              <h6>Passing Year -2017</h6>
            </div>
          </div>
		  
        </div>
		<!-- //first row -->
		
		    <div class="row" style="margin-top:7%;">
          <div class="col-lg-6" data-aos="fade-up">
            <!-- <h3 class="resume-title">Sumary</h3> -->
            <div class="resume-item pb-0">
              <h4>THAKURGAON POLYTECHNIC INSTITUTE
                  </h4>
              <p>Diploma in Engineering
                </p>
              <ul>
                <li>Computer Technology</li>

                <li>GPA: </li>
               
              </ul>
            </div>

           
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="resume-item year" style="margin-left:44%;color:red;">
              <h6>At Present -2021</h6>
            </div>
          </div>
		  
        </div>

      </div>
    </section><!-- End Resume Section -->



  

   

    <!-- ======= Contact Section ======= -->
    <section id="portfolio" class="contact" style="margin-top:12%;">
      <div class="container">

        <div class="section-title">
          <h2>TUOTORIALS CREATED BY ME</h2>

               <div class="row">
		
          <div class="col-md-6 icon-box2 " data-aos="fade-up">
            <div class="icon3">
			  <img src="assets/img/coding1.jpg" style="width:350px;height:134px!important;">
			</div>
            <h4   class="title"><a  target="__blank" href="https://www.youtube.com/channel/UCVEvWZ0H7jzV7W4WqqYlm6g/playlists" style="color:#000000;font-size:20px;font-family: 'Saira Extra Condensed', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
    font-weight: 500;">LARAVEL SOCIAL LOGIN</a></h4>
            <p class="description">
			PHP, Laravel , MySQL

          </p>
          </div>
		  
		   <div class="col-md-6 icon-box2 " data-aos="fade-up">
            <div class="icon5">
			 <img src="assets/img/coding7.jpg" style="width:350px;height:134px!important;">
			</div>
            <h4 class="title"><a  target="__blank" href="https://www.youtube.com/channel/UCVEvWZ0H7jzV7W4WqqYlm6g/playlists"style="color:#000000;font-size:20px;font-family: 'Saira Extra Condensed', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
    font-weight: 500;">BASIC WEB CONCEPT</a></h4>
            <p class="description">
			HTML, CSS, JAVASCRIPT ,PHP, Laravel , MySQL

          </p>
          </div>
		  
		  
		  
          <div class="col-md-6 icon-box2" style="margin-top:4%;" data-aos="fade-up">
            <div class="icon3">
			 <img src="assets/img/coding3.jpg" style="width:350px;height:134px!important;">
			</div>
            <h4 class="title"><a style="color:#000000;font-size:20px;font-family: 'Saira Extra Condensed', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
    font-weight: 500;"  target="__blank" href="https://www.youtube.com/channel/UCVEvWZ0H7jzV7W4WqqYlm6g/playlists">
	BASIC HTML</a></h4>
            <p class="description">
			HTML

          </p>
          </div>
		  
          
        </div>
		  
        </div>

        <div class="row" data-aos="fade-in">


      </div>
    </section><!-- End Contact Section -->
	
	
	
	 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>INTERESTS</h2>
		<ul class="language-icons" style="list-style:none;padding-left:0%;font-size:20px;">

       @for($a=0; $a<count($intersteds); $a++ )

          <li><i class="bx bx-check iconsss"></i>{{ $intersteds[$a]->title }}</li>

       @endfor

        </ul>
          
		 
		  
        </div>

        <div class="row" data-aos="fade-in">


      </div>
    </section><!-- End Contact Section -->

	

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>