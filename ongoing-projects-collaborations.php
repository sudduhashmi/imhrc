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
    <h2>Ongoing Projects & International Collaborations</h2>
    <p class="inde">Home › Ongoing Projects & International Collaborations</p>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>
<section class="projects-collaborations-premium">
  <div class="container">

    <!-- Section Header -->
    <div class="section-header text-center">
      <h2>Ongoing Projects & International Collaborations</h2>
      <p>Driving innovation, global partnerships, and research excellence worldwide.</p>
    </div>

    <!-- Tabs Navigation -->
    <div class="tabs">
      <button class="tab-btn active" data-tab="overview">Overview</button>
      <button class="tab-btn" data-tab="details">Collaboration Details</button>
    </div>

    <!-- Overview Tab -->
    <div class="tab-content" id="overview">
      <div class="overview-content">
        <div class="overview-text">
          <p>Our institute leads cutting-edge research projects across multiple disciplines, fostering innovation and global academic excellence. Through active collaborations with renowned international universities and research organizations, we deliver high-impact results that contribute to global knowledge. Our ongoing projects span diverse areas such as technology, healthcare, environment, and social sciences.</p>
        </div>
        <div class="overview-image">
          <img src="assets/img/slider/slider5.jpeg" alt="Research Overview">
        </div>
      </div>
    </div>

    <!-- Collaboration Details Tab -->
    <div class="tab-content" id="details" style="display:none;">
      <div class="details-content">
        <div class="details-text">
          <p>We maintain active partnerships with leading global institutions to promote joint research, faculty and student exchanges, and collaborative publications. Key collaborations include partnerships with top universities, research centers, and industry leaders worldwide, ensuring sustainable academic growth and impactful research outcomes. Our collaborations are designed to enhance innovation, knowledge sharing, and international recognition.</p>
          <div class="partner-logos">
            <img src="assets/img/slider/slider5.jpeg" alt="Partner 1">
            <img src="assets/img/slider/slider5.jpeg" alt="Partner 2">
            <img src="assets/img/slider/slider5.jpeg" alt="Partner 3">
            <img src="assets/img/slider/slider5.jpeg" alt="Partner 4">
          </div>
        </div>
        <div class="details-image">
          <img src="assets/img/slider/slider5.jpeg" alt="International Collaboration">
        </div>
      </div>
    </div>

  </div>
</section>

<style>
.projects-collaborations-premium {
  padding: 50px 20px;
  color: #333;
}

.section-header h2 { font-size: 2.5rem; margin-bottom: 10px; text-align: center; }
.section-header p { font-size: 1.1rem; color: #555; margin-bottom: 40px; text-align: center; }

/* Tabs */
.tabs { display: flex; justify-content: center; gap: 20px; margin-bottom: 30px; flex-wrap: wrap; }
.tab-btn { padding: 10px 25px; border: none; background: #e0e0e0; color: #333; border-radius: 50px; cursor: pointer; font-weight: 600; transition: 0.3s; }
.tab-btn.active, .tab-btn:hover { background: #4e5bff; color: #fff; }

/* Tab Content */
.tab-content { max-width: 1200px; margin: 0 auto; }

.overview-content, .details-content {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  align-items: center;
}

.overview-text, .details-text { flex: 1; min-width: 300px; }
.overview-image img, .details-image img { width: 100%; border-radius: 15px; }

/* Partner Logos */
.partner-logos { display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px; justify-content: flex-start; }
.partner-logos img { max-height: 60px; object-fit: contain; filter: grayscale(0.2); transition: transform 0.3s; }
.partner-logos img:hover { transform: scale(1.1); filter: grayscale(0); }

/* Responsive */
@media(max-width: 992px){ .overview-content, .details-content { flex-direction: column; } }
</style>

<script>
// Tab functionality
const tabButtons = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    tabButtons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    tabContents.forEach(c => c.style.display = 'none');
    const selectedTab = btn.getAttribute('data-tab');
    document.getElementById(selectedTab).style.display = 'flex';
  });
});
</script>

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