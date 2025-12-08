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
    <h2>Our Services</h2>
    <p class="inde">Home › Services</p>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>

<!-- BOXICONS CDN -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<style>
  .service-card {
    transition: all 0.3s ease;
    border-radius: 20px;
    background: #fff;
    padding: 30px;
    border: 1px solid #e8e8e8;
    height: 100%;
    position: relative;
  }
  .service-card:hover {
    transform: translateY(-8px);
    box-shadow: 0px 15px 35px rgba(0,0,0,0.1);
    border-color: #1e63ff;
  }
  .service-icon {
    font-size: 55px;
    margin-bottom: 15px;
    color: #ff8c00;
  }
  .read-more-btn {
    border: none;
    background: none;
    color: #1e63ff;
    font-weight: 600;
    cursor: pointer;
  }
  .read-more-content {
    display: none;
    margin-top: 10px;
  }
</style>

<script>
  function toggleReadMore(id) {
    const content = document.getElementById(id);
    const btn = document.querySelector(`[data-target='${id}']`);

    if (content.style.display === "none" || content.style.display === "") {
      content.style.display = "block";
      btn.innerHTML = "Read Less";
    } else {
      content.style.display = "none";
      btn.innerHTML = "Read More";
    }
  }
</script>

<section class="py-5 ">
  <div class="container">

    <div class="text-center mb-5">
 <h2 class="fw-bold display-6">Available Services</h2>
<p class="text-muted fs-5">
  Holistic Early Intervention, Therapy, Assessments & Rehabilitation Services for Children and Adults.
</p>

    </div>

    <div class="row g-4">

      <!-- Early Intervention -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-sun service-icon"></i>
          <h4 class="fw-bold">Early Intervention</h4>
          <p>
            Structured programs designed for children with developmental delays, Autism (ASD), ADHD and speech delay.
          </p>

          <div id="read1" class="read-more-content">
            <p>
              The focus is on improving social interaction, attention, communication, cognitive growth and school readiness skills.
            </p>
          </div>

          <button class="read-more-btn" data-target="read1" onclick="toggleReadMore('read1')">Read More</button>
        </div>
      </div>

      <!-- Speech Therapy -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-microphone service-icon"></i>
          <h4 class="fw-bold">Speech Therapy</h4>
          <p>
            Speech clarity, articulation training, language development and communication skill enhancement.
          </p>

          <div id="read2" class="read-more-content">
            <p>
              Therapy supports both children and adults facing stammering, delayed speech, unclear speech and language disorders.
            </p>
          </div>

          <button class="read-more-btn" data-target="read2" onclick="toggleReadMore('read2')">Read More</button>
        </div>
      </div>

      <!-- Occupational Therapy -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-hand service-icon"></i>
          <h4 class="fw-bold">Occupational Therapy</h4>
          <p>
            Sensory integration, fine motor skills, handwriting improvement and daily living skills training.
          </p>

          <div id="read3" class="read-more-content">
            <p>
              Helps children improve coordination, balance, attention and independence in routine activities.
            </p>
          </div>

          <button class="read-more-btn" data-target="read3" onclick="toggleReadMore('read3')">Read More</button>
        </div>
      </div>

      <!-- Behaviour Therapy -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-happy service-icon"></i>
          <h4 class="fw-bold">Behaviour Therapy</h4>
          <p>
            Behaviour modification plans for aggression, hyperactivity, tantrums and social skill difficulties.
          </p>

          <div id="read4" class="read-more-content">
            <p>
              Includes reinforcement-based strategies and emotional regulation techniques for long-term improvement.
            </p>
          </div>

          <button class="read-more-btn" data-target="read4" onclick="toggleReadMore('read4')">Read More</button>
        </div>
      </div>

      <!-- Psychological Assessment -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-brain service-icon"></i>
          <h4 class="fw-bold">Psychological Assessment</h4>
          <p>
            IQ testing, developmental assessment, behaviour rating scales and diagnostic evaluation.
          </p>

          <div id="read5" class="read-more-content">
            <p>
              Useful for identifying learning disabilities, emotional issues and developmental challenges.
            </p>
          </div>

          <button class="read-more-btn" data-target="read5" onclick="toggleReadMore('read5')">Read More</button>
        </div>
      </div>

      <!-- Neuro Psychological Assessment -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-analyse service-icon"></i>
          <h4 class="fw-bold">Neuro-Psychological Assessment</h4>
          <p>
            Evaluation of memory, attention, cognitive functions and executive functioning skills.
          </p>

          <div id="read6" class="read-more-content">
            <p>
              Helpful for identifying neurodevelopmental disorders, attention deficits and cognitive imbalance.
            </p>
          </div>

          <button class="read-more-btn" data-target="read6" onclick="toggleReadMore('read6')">Read More</button>
        </div>
      </div>

      <!-- Counselling & Psychotherapy -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-comment-dots service-icon"></i>
          <h4 class="fw-bold">Counselling & Psychotherapy</h4>
          <p>
            Emotional support, family counselling, child therapy and stress/anxiety management.
          </p>

          <div id="read7" class="read-more-content">
            <p>
              Helps children and parents cope with emotional challenges, behavioural issues and relationship difficulties.
            </p>
          </div>

          <button class="read-more-btn" data-target="read7" onclick="toggleReadMore('read7')">Read More</button>
        </div>
      </div>

      <!-- Day Care -->
      <div class="col-md-4">
        <div class="service-card text-center">
          <i class="bx bxs-home-heart service-icon"></i>
          <h4 class="fw-bold">Day Care Program</h4>
          <p>
            Structured day-care with supervised learning, therapy support and behavioural guidance.
          </p>

          <div id="read8" class="read-more-content">
            <p>
              Ideal for children needing continuous developmental engagement and a safe, friendly environment.
            </p>
          </div>

          <button class="read-more-btn" data-target="read8" onclick="toggleReadMore('read8')">Read More</button>
        </div>
      </div>

    </div>

  </div>
</section>




<style>

</style>

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