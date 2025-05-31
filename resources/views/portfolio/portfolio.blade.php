<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
<link rel="icon" type="image/x-icon" href="{{ asset('public/assets/favicon.png') }}">

   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public/portfolio/js/animate/animate.min.css') }}" rel="stylesheet">
    <!--<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">-->
    <!--<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />-->


  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet"
  >


   <!-- Template Stylesheet -->
    <!--<link href="css/style.css" rel="stylesheet">-->
   <link href="{{ asset('public/portfolio/css/style.css') }}" rel="stylesheet" />  
</head>
<body>
    
      <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Manila, Philippines</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+63 --- --- ----</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>v---------@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    
  <!--<div class="topblack container-fluid   px-5   d-block">-->
  <!--   &nbsp;-->
  <!--</div>-->
  <!-- Navbar -->
  <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid px-4 mx-4">

      <a class="navbar-brand" href="#"><h1 class="logo1 text-primary">My Portfolio</h1></a>
      <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Portfolio</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">About</a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link btn btn-primary rounded-pill py-2 px-4" href="https://form.jotform.com/242973169206462">Contact Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="hero-header bg-primary text-white text-center py-5" >
    <div class="container py-5">
      <div class="container py-5">
        <div class="row row justify-content-center py-5">
          <h1 class="main1 display-4 animated slideInDown">Vincent Velasco</h1>
        <p class="lead2 lead py-2 animated slideInDown">Works And Experience</p>
        <div>
          <a href="https://form.jotform.com/242973169206462" class="btn btn-primary rounded-pill py-2 px-4 animated slideInDown">Contact Me</a>
        </div>
        
        </div>
        
      </div>
    </div>
    </header>

  <!-- Section 1 -->
  <section class="sec1 py-5 bg-light mb-5 ">
    <div class="container my-5">
      <div class="row align-items-center">
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <img 
            src="{{ asset('public/assets/proj1.webp') }}" 
            alt="E-Feedback" 
            class="section-image"
          >
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="label1 section-title text-start text-primary pe-3">PROJECT</h6>
          <h2 class="label2">E-Feedback</h2>
          <p class="lead1">E-Feedback is a web-based personality profiling system that generates PDF reports with charts and personalized feedback based on responses about yourself or others.</p>
          <ul>
            <li class="desc-item">Set up and managed server and hosting on AWS.</li>
            <li class="desc-item">Developed and programmed the system using Laravel, PHP, and MySQL.</li>
            <li class="desc-item">Maintained and optimized the system, troubleshooting bugs and ensuring smooth operation.</li>
          </ul>
            
        </div>
      </div>
    </div>
  </section>

 <!-- Section 2 -->
  <section class="sec2 py-5 my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2 wow fadeInUp" data-wow-delay="0.1s">
          <img 
            src="{{ asset('public/assets/proj4.webp') }}" 
            alt="Omnipool.co" 
            class="section-image"
          >
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="label1 section-title text-start text-primary pe-3">FREELANCING</h6>
          <h2 class="label2">Upwork.com | Freelancer</h2>
          <a  class="link2" href="https://www.upwork.com/freelancers/~01578f6183802b5cd6?viewMode=1">View My Upwork Profile</a>
          <p class="lead1 pt-3">Worked as a freelancer on Upwork for 3 years, specializing in web development, Shopify customization, PHP/Laravel applications, WordPress sites, front-end design, database management, and automation with PHP and Python.</p>
           <ul>
             
              <li class="desc-item">Recognized as a Top Rated freelancer on Upwork in 2022.</li>
              <li class="desc-item">Developed web applications using PHP and Laravel, following MVC architecture.</li>
              <li class="desc-item">Customized websites and themes on WordPress.</li>
              <li class="desc-item">Created responsive front-end interfaces with HTML5, CSS3, Bootstrap, JavaScript, and jQuery/Ajax.</li>
              <li class="desc-item">Converted PDF designs into responsive HTML landing pages.</li>
              <li class="desc-item">Developed a shopping cart for Shopify using Vue.js, with additional functionality implemented through Shopify templates.</li>
              <li class="desc-item">Managed MySQL databases for web and app projects.</li>
              <li class="desc-item">Built automated solutions using PHP and Python to enhance workflows and efficiency.</li>
 

          </ul>
        </div>
      </div>
    </div>
  </section>

 <!-- Section 3 -->
  <section class="sec3 py-5 bg-light mt-5 ">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 px-4 wow fadeInUp" data-wow-delay="0.1s">
          <img 
            src="{{ asset('public/assets/proj3.webp') }}" 
            alt="Vincerapisura.com" 
            class="section-image"
          >
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="label1 section-title text-start text-primary ">PROJECT</h6>
          <h2 class="label2">Vincerapisura.com</h2>
          <p class="lead1">Vincerapisura.com is a financial website featuring a subsystem that tracks customer deposits and withdrawals, calculating dividends based on balances over time. It offers easy access to financial data through detailed reports, tables, and charts.</p>
           <ul>
            <li class="desc-item">Set up and managed server and hosting on Doteasy.</li>
            <li class="desc-item">Developed and programmed the system using Wordpress, Laravel, PHP, and MySQL.</li>
            <li class="desc-item">Integrated the system with the ManyChat API to capture chatbot inputs from customers.</li>
            <li class="desc-item">Maintained and optimized the system, troubleshooting bugs and ensuring smooth operation.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4 -->
  <section class="sec2 py-5 my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2 wow fadeInUp" data-wow-delay="0.1s">
          <img 
            src="{{ asset('public/assets/proj2.webp') }}" 
            alt="Omnipool.co" 
            class="section-image"
          >
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="label1 section-title text-start text-primary pe-3">PROJECT</h6>
          <h2 class="label2">Omnipool.co</h2>
          <p class="lead1">Omnipool.co is a web based system that tracks customer deposits and withdrawals, calculating dividends based on their balances over time. It provides easy access to financial data through detailed reports, tables, and charts.</p>
           <ul>
            <li class="desc-item">Set up and managed server and hosting on AWS.</li>
            <li class="desc-item">Developed and programmed the system using Laravel, PHP, and MySQL.</li>
            <li class="desc-item">Integrated with the Aloware API to automate SMS delivery.</li>
            <li class="desc-item">Maintained and optimized the system, troubleshooting bugs and ensuring smooth operation.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<!-- Section 3 -->
  <section class="sec3 py-5 bg-light mt-5 ">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6 px-4 wow fadeInUp" data-wow-delay="0.1s">
          <img 
            src="{{ asset('public/assets/proj5.webp') }}" 
            alt="Vincerapisura.com" 
            class="section-image"
          >
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="label1 section-title text-start text-primary ">PROJECT MANAGEMENT</h6>
          <h2 class="label2">BConX Personality Profiling</h2>
          <p class="lead1">BConX is a web-based personality profiling system that generates PDF reports with charts and personalized feedback based on responses about yourself or others.</p>
           <ul>
    <li class="desc-item">Project Management: Led the development process by planning, scheduling, and prioritizing tasks.</li>
    <li class="desc-item">Vendor Coordination: Managed collaboration with vendors, ensuring tasks were aligned and timely.</li>
    <li class="desc-item">Issue Resolution: Identified and discussed challenges, facilitating smooth problem-solving.</li>
    <li class="desc-item">Technical Consulting: Provided expertise and advice on technical matters to guide decisions.</li>
</ul>

        </div>
      </div>
    </div>
  </section>

  <!-- Section 4 -->
  <section class="sec2 py-5 my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2 wow fadeInUp" data-wow-delay="0.1s">
          <img 
            src="{{ asset('public/assets/proj6.webp') }}" 
            alt="Omnipool.co" 
            class="section-image"
          >
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="label1 section-title text-start text-primary pe-3">PROJECT MANAGEMENT</h6>
          <h2 class="label2">Clarity E-Commerce</h2>
          <p class="lead1">E-Store is a comprehensive platform that allows users to purchase a wide range of educational materials, both digital and printed. In addition to learning resources, users can also book seats for workshops and events, providing an all-in-one solution for enhancing their educational journey.</p>
           <ul>
             <li class="desc-item">Project Management: Led the development process by planning, scheduling, and prioritizing tasks.</li>
    <li class="desc-item">Vendor Coordination: Managed collaboration with vendors, ensuring tasks were aligned and timely.</li>
    <li class="desc-item">Issue Resolution: Identified and discussed challenges, facilitating smooth problem-solving.</li>
    <li class="desc-item">Technical Consulting: Provided expertise and advice on technical matters to guide decisions.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
 
 <section class="my-5" id="certifications">
    <div class="container my-5">
        <h1 class="text-center mb-4 certtitlemain py-5">Certifications</h1>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('public/assets/cert1.webp') }}" class="card-img-top" alt="AWS Certified Solutions Architect – Associate">
                    <div class="card-body">
                        <h2 class="card-title certitle">AWS Certified Solutions Architect – Associate</h2>
                        <p class="card-text provider">Provider: Amazon</p>
                        <p class="card-text">This certification addresses how to architect and deploy secure and robust applications on AWS technologies, and is for those with at least one year of designing available, cost-efficient, fault-tolerant, and scalable and distributed systems on AWS.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('public/assets/cert2b.webp') }}" class="card-img-top my-5" alt="Cisco Certified Network Professional">
                    <div class="card-body">
                        <h2 class="card-title certitle">Cisco Certified Network Professional</h2>
                         <p class="card-text provider">Provider: Cisco Systems</p>
                        <p class="card-text">Demonstrates the ability to plan, implement, verify and troubleshoot local and wide-area enterprise networks and work collaboratively with specialists on advanced security, voice, wireless and video solutions.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{ asset('public/assets/cert3.webp') }}" class="card-img-top" alt="Project Management Professional - PMP">
                    <div class="card-body">
                        <h2 class="card-title certitle">Project Management Professional - PMP</h2>
                        
                        
                             <p class="card-text provider">Provider: Project Management Institute</p>
                            <p class="card-text provider">Issued: February 2020</p>
                            <p class="card-text provider">Certification ID: 2753792</p>

                         </ul>
                        
                        <p class="card-text">Earners of the globally-recognized Project Management Professional (PMP) have demonstrated their extensive knowledge and mastery of project management concepts, tasks, and techniques that are applicable across virtually any industry and methodology. Earners are able to speak and understand the global language of project management. Individuals that earn this certification have demonstrated the knowledge and skills needed to initiate, plan, execute, monitor and control, and close a project. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <p class="mb-0">&copy; <a class="footerlink1" href="">Vincent Velasco</a>. All Rights Reserved.</p>
    </div>
  </footer>

  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>

   <script src="{{ asset('public/portfolio/js/wow/wow.min.js') }}"></script>
              <script>


document.addEventListener("DOMContentLoaded", function () {
	      new WOW().init();
});
              </script>

</body>
</html>
