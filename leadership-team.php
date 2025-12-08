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
</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Leadership Team</h2>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>


<section class="leadership-section">
  <div class="container">
    
    <div class="section-header text-center">
      <h2>Leadership Team</h2>
      <p>
        Visionary leaders driving excellence in education, healthcare, and innovation.
      </p>
    </div>

    <div class="row g-4">

      <!-- Leader Card -->
      <div class="col-lg-4 col-md-6">
        <div class="leader-card gradient-purple">

          <div class="leader-img">
            <img src="assets/img/leader1.jpg" alt="Leader">
          </div>

          <div class="leader-info">
            <h4>Dr. Manjinder Sandhu</h4>
            <span class="designation">Founder & Managing Director</span>

            <p class="bio">
              A visionary leader with extensive experience in mental healthcare,
              education leadership, and organizational development.
            </p>

            <div class="leader-stats">
              <div>
                <strong>15+</strong>
                <span>Years Experience</span>
              </div>
              <div>
                <strong>Healthcare</strong>
                <span>Domain</span>
              </div>
            </div>

            <div class="expertise">
              <span>Leadership</span>
              <span>Mental Health</span>
              <span>Strategy</span>
            </div>

            <blockquote>
              “Our mission is to create meaningful impact through knowledge,
              care, and innovation.”
            </blockquote>

            <div class="social-links">
              <a href="#"><i class="bi bi-linkedin"></i></a>
              <a href="#"><i class="bi bi-envelope"></i></a>
            </div>

          </div>

        </div>
      </div>

      <!-- Leader 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="leader-card gradient-blue">
          <div class="leader-img">
            <img src="assets/img/leader2.jpg" alt="Leader">
          </div>

          <div class="leader-info">
            <h4>Ms. Neha Sharma</h4>
            <span class="designation">Academic Director</span>

            <p class="bio">
              Expert in curriculum design, academic governance, and student-centered
              learning frameworks.
            </p>

            <div class="leader-stats">
              <div>
                <strong>12+</strong>
                <span>Years Experience</span>
              </div>
              <div>
                <strong>Education</strong>
                <span>Domain</span>
              </div>
            </div>

            <div class="expertise">
              <span>Academics</span>
              <span>Curriculum</span>
              <span>Quality</span>
            </div>

            <blockquote>
              “Strong education systems build confident leaders of tomorrow.”
            </blockquote>

          </div>
        </div>
      </div>

      <!-- Leader 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="leader-card gradient-green">
          <div class="leader-img">
            <img src="assets/img/leader3.jpg" alt="Leader">
          </div>

          <div class="leader-info">
            <h4>Mr. Rohit Verma</h4>
            <span class="designation">Chief Operations Officer</span>

            <p class="bio">
              Leads operational excellence, systems integration, and large-scale
              organizational execution.
            </p>

            <div class="leader-stats">
              <div>
                <strong>10+</strong>
                <span>Years Experience</span>
              </div>
              <div>
                <strong>Operations</strong>
                <span>Domain</span>
              </div>
            </div>

            <div class="expertise">
              <span>Operations</span>
              <span>Process</span>
              <span>Execution</span>
            </div>

            <blockquote>
              “Efficiency and integrity are the backbone of sustainable growth.”
            </blockquote>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<STYle>
    .leadership-section {
  padding: 100px 0;

}

.section-header h2 {
  font-size: 36px;
  font-weight: 800;
}

.section-header p {
  color: #666;
  max-width: 650px;
  margin: 10px auto 50px;
}

.leader-card {
  border-radius: 20px;
  padding: 25px;
  height: 100%;
  color: #fff;
  transition: 0.4s;
}

.leader-card:hover {
  transform: translateY(-10px);
}

.gradient-purple { background: linear-gradient(135deg, #6a11cb, #2575fc); }
.gradient-blue { background: linear-gradient(135deg, #2193b0, #6dd5ed); }
.gradient-green { background: linear-gradient(135deg, #11998e, #38ef7d); }

.leader-img img {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  border: 4px solid #fff;
}

.leader-info h4 {
  margin-top: 15px;
  font-weight: 700;
}

.designation {
  font-size: 14px;
  opacity: 0.9;
}

.bio {
  margin: 15px 0;
  font-size: 14px;
}

.leader-stats {
  display: flex;
  gap: 20px;
  margin-bottom: 15px;
}

.leader-stats div strong {
  display: block;
  font-size: 18px;
}

.expertise span {
  display: inline-block;
  background: rgba(255,255,255,0.15);
  padding: 6px 12px;
  border-radius: 20px;
  margin: 3px;
  font-size: 12px;
}

blockquote {
  font-size: 14px;
  font-style: italic;
  margin-top: 15px;
  border-left: 3px solid #fff;
  padding-left: 10px;
}

</STYle>
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