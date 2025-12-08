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
/* Full-width Join Our Team Section */
.join-team-section {
  width: 100%;
  color: #000000;
  padding: 80px 20px;
  box-sizing: border-box;
}

.join-team-container {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  flex-wrap: wrap;
  gap: 40px;
}

/* Text Content */
.join-text {
  flex: 1;
  min-width: 300px;
}

.join-text h2 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.join-text p {
  font-size: 1.2rem;
  margin-bottom: 30px;
  line-height: 1.6;
}

/* Benefits and Open Roles */
.benefits, .open-roles {
  margin-bottom: 25px;
}

.benefits h3, .open-roles h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
  text-decoration: underline;
}

.benefits ul, .open-roles ul {
  list-style: disc;
  margin-left: 20px;
  font-size: 1rem;
  line-height: 1.5;
}

/* CTA Button */
.btn-join {
  display: inline-block;
    background: #f5ab17;
    color: #ffffff;
  padding: 15px 30px;
  border-radius: 10px;
  text-decoration: none;
  font-weight: bold;
  font-size: 1.1rem;
  transition: background 0.3s, color 0.3s;
}

.btn-join:hover {
  background: #e0e0e0;
  color: #333;
}

/* Image */
.join-image {
  flex: 1;
  min-width: 300px;
  text-align: center;
}

.join-image img {
  width: 100%;
  border-radius: 15px;
  box-shadow: 0 6px 25px rgba(0,0,0,0.2);
  max-height: 450px;
  object-fit: cover;
}

/* Responsive */
@media(max-width: 768px) {
  .join-team-container {
    flex-direction: column-reverse;
    text-align: center;
  }

  .join-text h2 {
    font-size: 2.2rem;
  }

  .join-text p {
    font-size: 1rem;
  }

  .benefits ul, .open-roles ul {
    margin-left: 0;
    padding-left: 20px;
  }
}

    </style>
</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Join Our Team</h2>
    <p class="inde">Home › Join Our Team</p>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>

  <!-- ================= JOIN OUR TEAM ================= -->
 <section class="join-team-section">

  <div class="join-team-container">

    <!-- Text Content -->
    <div class="join-text">
      <h2>Join Our Team</h2>
      <p>Be a part of our mission to promote mental health awareness, research, and community well-being. Explore exciting opportunities, learn, and grow with us!</p>

      <!-- Benefits -->
      <div class="benefits">
        <h3>Why Join Us?</h3>
        <ul>
          <li>Work with experienced mental health professionals</li>
          <li>Contribute to impactful research and community projects</li>
          <li>Collaborative and supportive work environment</li>
          <li>Learning opportunities, workshops, and seminars</li>
          <li>Flexible working hours and remote options</li>
        </ul>
      </div>

      <!-- Open Roles -->
      <div class="open-roles">
        <h3>Open Positions</h3>
        <ul>
          <li>Research Assistant</li>
          <li>Clinical Intern</li>
          <li>Content Writer / Editor</li>
          <li>Digital Marketing Specialist</li>
          <li>Volunteer / Outreach Coordinator</li>
        </ul>
      </div>

      <!-- CTA -->
      <a href="grow-with-us.php" class="btn-join">Apply Now →</a>
    </div>

    <!-- Image -->
    <div class="join-image">
      <img src="https://images.unsplash.com/photo-1596495577886-d920f1e56c4d" alt="Join our Team">
    </div>

  </div>

</section>


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