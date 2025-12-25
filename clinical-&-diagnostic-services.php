<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Boxicons Min CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Meanmenu Min CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">

    <!-- Odometer Min CSS-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Title -->
    <title>IMHRC</title>
   
<style>


.services-page{
  max-width:1300px;
  margin:auto;
  padding:40px 20px;
}

/* ---------- FILTER DESIGN ---------- */
.stylish-filter{
  display:grid;
  grid-template-columns:300px 300px;
  gap:24px;
  justify-content:center;   /* CENTER ALIGN */
  margin-bottom:40px;
}

/* responsive fix */
@media(max-width:768px){
  .stylish-filter{
    grid-template-columns:1fr;
  }
}


.field{
  position:relative;
}

.field label{
  font-weight:600;
  color:#666;
  margin-bottom:6px;
  display:block;
}

.field select,
.field input{
  width:100%;
  padding:15px 16px;
  border-radius:16px;
  border:none;
  background:#ffffff;
  box-shadow:0 10px 30px rgba(0,0,0,.08);
  font-size:14px;
  outline:none;
  transition:.3s;
}

.field select:focus,
.field input:focus{
  box-shadow:0 12px 35px rgba(76,110,255,.35);
}

.search-field img{
  position:absolute;
  right:18px;
  bottom:16px;
  width:18px;
  opacity:.6;
}

/* ---------- UNIQUE CARDS ---------- */
.unique-cards{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(190px,1fr));
  gap:26px;
}

.service-card-uniq{
  text-decoration:none;
    background: linear-gradient(180deg, #ffffff, #ffffff);
  border-radius:22px;
  padding:34px 24px 30px;
  position:relative;
  text-align:center;
  box-shadow:0 12px 35px rgba(0,0,0,.06);
  transition:.4s;
  color:#222;
  overflow:hidden;
}

/* gradient ribbon */
.service-card-uniq:before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:6px;
  background:linear-gradient(90deg,#7aa2ff,#b388ff);
}

/* floating icon */
.icon-box{
  width:70px;
  height:70px;
  margin:auto;
  margin-bottom:16px;
  border-radius:22px;
  background:#ffffff;
  display:flex;
  align-items:center;
  justify-content:center;
    box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
}

.icon-box img{
  width:50px;
}

.service-card-uniq h4{
  font-size:20px;
  font-weight:600;
  line-height:1.4;
}

/* hover effect */
.service-card-uniq:hover{
  transform:translateY(-12px);
  box-shadow:0 22px 55px rgba(0,0,0,.12);
  background:linear-gradient(180deg,#ffffff,#eff3ff);
}

.service-card-uniq:hover .icon-box{
  background:#ffffff;
}
h2.service-heading {
    font-size: 22px;
    padding-bottom: 20px;
    padding-top: 40px;
}
</style>
</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Clinical & Diagnostic Services</h2>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>
<!-- HERO -->
<section class="services-page">

<div class="filter-row stylish-filter">

  <div class="field">
    <!-- <label>Location</label> -->
    <select>
      <option>All Locations</option>
      <option>Delhi</option>
      <option>Mumbai</option>
      <option>Bangalore</option>
      <option>Jaipur</option>
    </select>
  </div>

  <div class="field search-field">
    <!-- <label>Search</label> -->
    <input type="text" placeholder="Search services...">
    <img src="assets/icons/search.svg">
  </div>

</div>


  <!-- CARDS -->
<section class="services-section">

  <!-- ================= Assessment Services ================= -->
  <h2 class="service-heading">Assessment Services</h2>

  <div class="services-grid unique-cards">

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Aptitude Tests</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Intelligence Tests</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Personality Tests</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Psychometric (IQ) Tests</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Educational Tests</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Adaptive Tests</h4>
    </a>

  </div>


  <!-- ================= Specialized Services ================= -->
  <h2 class="service-heading">Specialized Services</h2>

  <div class="services-grid unique-cards">

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Intellectual Disability</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Learning Disability</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Autism / ADHD</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Cerebral Palsy</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Scholastic Problems</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Career Mapping &amp; Counselling</h4>
    </a>

  </div>


  <!-- ================= Therapeutic Services ================= -->
  <h2 class="service-heading">Therapeutic Services</h2>

  <div class="services-grid unique-cards">

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Behaviour Therapy</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Behaviour Modification Therapy</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Special Education</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Applied Behaviour Analysis (ABA)</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Speech Therapy</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Language &amp; Communication</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Alternative Augmentative Communication</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Occupational Therapy</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Sensory Integration Therapy</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Physiotherapy</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Parent Empowerment</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Orientation &amp; Mobility</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Sitting &amp; Posture Control</h4>
    </a>

    <a href="services-details.php" class="service-card-uniq">
      <div class="icon-box"><img src="assets/icons/adaptability.png"></div>
      <h4>Assistive Devices</h4>
    </a>

  </div>

</section>



</section>



  <main class="mt-5 mb-5">
    <div class="container">



<section class="mb-5">
  <h4 class="mb-4 text-center">Highlights & Facilities</h4>
  <div id="facCarousel" class="carousel slide bd-carousel" data-bs-ride="carousel">
    
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#facCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#facCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#facCarousel" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#facCarousel" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#facCarousel" data-bs-slide-to="4"></button>
      <button type="button" data-bs-target="#facCarousel" data-bs-slide-to="5"></button>
      <button type="button" data-bs-target="#facCarousel" data-bs-slide-to="6"></button>
    </div>

    <!-- Slides -->
    <div class="carousel-inner rounded-3 shadow-sm overflow-hidden" style="height: 350px;">
      
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="assets/img/imhrc-img.jpeg" class="d-block w-100" alt="Advanced Imaging Centre">
        <div class="carousel-caption text-start bg-dark bg-opacity-50 rounded p-2">
          <h5>Advanced Imaging Centre</h5>
          <p class="small">MRI, CT & Ultrasound with expert radiologists and fast reports.</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="assets/img/imhrc-img.jpeg" class="d-block w-100" alt="Diagnostic Lab">
        <div class="carousel-caption text-start bg-dark bg-opacity-50 rounded p-2">
          <h5>24/7 Diagnostic Lab</h5>
          <p class="small">Comprehensive pathology tests with quick turnaround.</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="assets/img/imhrc-img.jpeg" class="d-block w-100" alt="Multi-disciplinary Care">
        <div class="carousel-caption text-start bg-dark bg-opacity-50 rounded p-2">
          <h5>Multi-disciplinary Care</h5>
          <p class="small">Collaborative decisions from experts across specialities.</p>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <img src="assets/img/imhrc-img.jpeg" class="d-block w-100" alt="Therapy Rooms">
        <div class="carousel-caption text-start bg-dark bg-opacity-50 rounded p-2">
          <h5>Therapy Rooms</h5>
          <p class="small">Well-equipped, private therapy rooms for various treatments.</p>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="carousel-item">
        <img src="assets/img/imhrc-img.jpeg" class="d-block w-100" alt="Rehabilitation Centre">
        <div class="carousel-caption text-start bg-dark bg-opacity-50 rounded p-2">
          <h5>Rehabilitation Centre</h5>
          <p class="small">Advanced rehabilitation facilities with personalized care.</p>
        </div>
      </div>

      <!-- Slide 6 -->
      <div class="carousel-item">
        <img src="assets/img/imhrc-img.jpeg" class="d-block w-100" alt="Counselling Services">
        <div class="carousel-caption text-start bg-dark bg-opacity-50 rounded p-2">
          <h5>Counselling Services</h5>
          <p class="small">Expert psychological support for patients and families.</p>
        </div>
      </div>

      <!-- Slide 7 -->
      <div class="carousel-item">
        <img src="assets/img/imhrc-img.jpeg" class="d-block w-100" alt="Patient Lounge">
        <div class="carousel-caption text-start bg-dark bg-opacity-50 rounded p-2">
          <h5>Patient Lounge</h5>
          <p class="small">Comfortable waiting areas with modern amenities.</p>
        </div>
      </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#facCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#facCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
</section>

<!-- FAQ Section -->
<section class="mb-5">
  <h4 class="mb-4 text-center">Frequently Asked Questions</h4>
  <div class="accordion" id="faqAcc">

    <div class="accordion-item">
      <h2 class="accordion-header" id="q1">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qa1">What services are included?</button>
      </h2>
      <div id="qa1" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
        <div class="accordion-body">Imaging, laboratory diagnostics, specialist consultations, pre-surgical evaluations, and follow-up care.</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="q2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qa2">How to book an appointment?</button>
      </h2>
      <div id="qa2" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
        <div class="accordion-body">Use the Book Appointment button, call our helpline, or visit the desired clinic location.</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="q3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qa3">Are consultations available online?</button>
      </h2>
      <div id="qa3" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
        <div class="accordion-body">Yes, online consultations via video call are available for select services.</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="q4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qa4">Is insurance accepted?</button>
      </h2>
      <div id="qa4" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
        <div class="accordion-body">We accept most major health insurance plans. Please contact reception for details.</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="q5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qa5">What are the visiting hours?</button>
      </h2>
      <div id="qa5" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
        <div class="accordion-body">Our visiting hours are from 8 AM to 8 PM, Monday to Saturday.</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="q6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qa6">Are emergency services available?</button>
      </h2>
      <div id="qa6" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
        <div class="accordion-body">Yes, 24/7 emergency services are available for critical cases.</div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="q7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#qa7">Is parking available?</button>
      </h2>
      <div id="qa7" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
        <div class="accordion-body">Yes, ample parking space is available for patients and visitors.</div>
      </div>
    </div>

  </div>
</section>

<style>
.bd-carousel .carousel-inner {
  max-height: 350px; /* adjust carousel height */
}

.bd-carousel .carousel-item img {
  object-fit: cover;
  height: 350px; /* maintain aspect ratio */
}

.carousel-caption {
  text-align: left !important;
  bottom: 20px;
}

.accordion-button {
  font-size: 1.05rem;
  padding: 15px;
}

.accordion-body {
  font-size: 0.95rem;
}
</style>


  

    </div>
  </main>


    <!-- bottom CTA -->

  <!-- Bootstrap 5 JS + small custom JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <?php include 'includes/footer.php'; ?>

    <!-- Jquery Min JS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu Min JS -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- Wow Min JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup Min JS -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Jarallax Min JS -->
    <script src="assets/js/jarallax.min.js"></script>
    <!-- Appear Min JS -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Odometer Min JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Smoothscroll Min JS -->
    <script src="assets/js/smoothscroll.min.js"></script>
    <!-- Form Validator Min JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="assets/js/ajaxchimp.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
  
</body>


</html>