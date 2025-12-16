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
    .experts-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
  gap:30px;
  max-width:1200px;
  margin:auto;
  padding:0 20px;
}

/* Flexbox for card to keep buttons at bottom and body take available space */
.expert-card{
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* Buttons always bottom me rahe */
  background:#fff;
  border-radius:18px;
  overflow:hidden;
  box-shadow:0 12px 35px rgba(0,0,0,.08);
  transition:.35s;
  min-height:450px; /* Minimum height same for all cards */
}

.expert-card:hover{
  transform:translateY(-8px);
}

.expert-card.featured{
  background:#0b2c57;
  color:#fff;
}

.expert-img.full img{
  width:100%;
  height:240px; /* All images same height */
  object-fit:cover;
  display:block;
}

.expert-body{
  padding:22px;
  text-align:center;
  flex-grow: 1; /* Card body grows to fill space, buttons stay below */
}

.expert-body h3{
  font-size:20px;
  margin-bottom:4px;
}

.designation{
  color:#ffb703;
  font-size:14px;
  font-weight:600;
  display:block;
  margin-bottom:8px;
}

.qualification{
  font-size:14px;
  margin-bottom:14px;
  color:#555;
}

.expert-card.featured .qualification,
.expert-card.featured .expert-info li{
  color:#e4ecff;
}

.expert-info{
  list-style:none;
  padding:0;
  margin:0 0 20px;
  font-size:14px;
}

.expert-info li{
  margin-bottom:6px;
}

/* Action buttons at bottom */


.btn-outline{
  border:2px solid #ffb703;
  color:#ffb703;
  padding:10px 18px;
    border-radius: 0px 0px 0px 18px;
  font-weight:600;
  text-decoration:none;
  transition:.3s;
}

.btn-outline:hover{
  background:#ffb703;
  color:#000;
}

.btn-solid{
  background:#ffb703;
  color:#000;
  padding:10px 18px;
    border-radius: 0px 0px 18px 0px;
  font-weight:600;
  text-decoration:none;
  transition:.3s;
}

.btn-solid:hover{
  background:#f1a800;
}

/* Responsive */
@media (max-width:768px){
  .expert-card{
    min-height:auto; /* Mobile me flexible height */
  }
}
.expert-card{
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* Card content aur buttons alag rakhe */
  background:#fff;
  border-radius:18px;
  overflow:hidden;
  box-shadow:0 12px 35px rgba(0,0,0,.08);
  transition:.35s;
  min-height:500px; /* Card height same for all */
}

.expert-body{
  padding:22px;
  text-align:center;
  flex-grow:1; /* Body stretch kare taaki buttons bottom me rahe */
}

.expert-actions{
display: flex;
    justify-content: space-between;
    padding: 0 0px 0px;
    margin-top: auto;
    gap: 0px;
}

.btn-outline, .btn-solid{
  flex:1; /* Buttons equal width */
  text-align:center;
}

/* Optional: Mobile friendly */
@media(max-width:768px){
  .expert-actions{
    flex-direction: column; /* Mobile me buttons stacked */
    gap:10px;
    padding:0 22px 22px;
  }
}

.stylish-filter {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  background: #fff;
  padding: 15px 20px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  font-family: Arial, sans-serif;
}

.stylish-filter .field {
  flex: 1 1 150px;
  position: relative;
}

.stylish-filter select {
  width: 100%;
  padding: 10px 12px;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 14px;
  background: #f9f9f9;
  cursor: pointer;
}

.stylish-filter select:focus {
  outline: none;
  border-color: #4CAF50;
  box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
}

.stylish-filter .search-field input {
  width: 100%;
  padding: 10px 35px 10px 12px;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 14px;
}

.stylish-filter .search-field img {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  width: 18px;
  height: 18px;
  cursor: pointer;
}

.btn-solid:hover {
  background-color: #45a049;
}

.section-title {
    font-weight: 600;
    border-bottom: 2px solid #019ad3;
    display: inline-block;
    margin-bottom: 10px;
}

.terms-list {
    padding-left: 18px;
}

.terms-list li {
    margin-bottom: 8px;
    font-size: 14px;
}


 </style>
</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Meet our clinical Experts</h2>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>
<!-- HERO -->
<div class="filter-row stylish-filter">

  <!-- Location Dropdown -->
  <div class="field">
    <select>
      <option>All Expertise</option>
      <option>CBT</option>
      <option>Childhood & Adolescent mental healt</option>
      <option>DBT</option>
      <option>MBCT</option>
        <option>Marital Counselling</option>
          <option>Mental illness</option>
            <option>Substance addiction</option>
      <!-- Add more locations here -->
    </select>
  </div>



  <!-- Search Field -->
  <div class="field search-field">
    <input type="text" placeholder="Search services...">
    <img src="assets/icons/search.svg" alt="Search Icon">
  </div>

  <!-- Apply Button -->
  <div class="field">
    <button class="btn-solid apply-btn">Apply</button>
  </div>

</div>


<section class="experts-section pb-5 pt-5">

 
  <div class="experts-grid">

    <!-- ===== Expert 1 ===== -->
    <div class="expert-card ">

      <div class="expert-img full">
        <img src="assets/img/Dr Garima Singh.jpeg" alt="Dr Garima Singh">
      </div>

      <div class="expert-body">
        <h3>Dr. Garima Singh</h3>
        <span class="designation">Clinical Psychologist</span>

        <p class="qualification">
          M.Phil Clinical Psychology, Ph.D
        </p>

        <ul class="expert-info">
          <li><strong>Experience:</strong> 7 Years</li>
          <li><strong>Expertise:</strong> Mental Illness, Child & Adolescent Health, CBT</li>
        </ul>

       
      </div>
       <div class="expert-actions">
           <a href="javascript:void(0)" class="btn-outline" data-bs-toggle="modal" data-bs-target="#expertModal">
    View Full Profile
</a>
          <a href="overview-details.php" class="btn-solid">Book Appointment</a>
        </div>
    </div>

    <!-- ===== Expert 2 ===== -->
    <div class="expert-card">

      <div class="expert-img full">
        <img src="assets/img/GS.png" alt="Dr Geeta Singh">
      </div>

      <div class="expert-body">
        <h3>Dr. Geeta Singh</h3>
        <span class="designation">Clinical Psychologist</span>

        <p class="qualification">
          M.Phil (Clinical Psychology), Ph.D
        </p>

        <ul class="expert-info">
          <li><strong>Experience:</strong> 10 Years</li>
          <li><strong>Expertise:</strong> CBT, DBT, Substance Addiction</li>
        </ul>

       
      </div>
        <div class="expert-actions">
         <a href="javascript:void(0)" class="btn-outline" data-bs-toggle="modal" data-bs-target="#expertModal">
    View Full Profile
</a>
          <a href="overview-details.php" class="btn-solid">Book Appointment</a>
        </div>
    </div>

    <!-- ===== Expert 3 ===== -->
    <div class="expert-card">

      <div class="expert-img full">
        <img src="assets/img/SK.png" alt="Dr Sajid Kazmi">
      </div>

      <div class="expert-body">
        <h3>Dr. Sajid Kazmi</h3>
        <span class="designation">Clinical Psychologist</span>

        <p class="qualification">
          M.Phil (Clinical Psychology), Ph.D
        </p>

        <ul class="expert-info">
          <li><strong>Experience:</strong> 5 Years</li>
          <li><strong>Expertise:</strong> CBT, DBT, Substance Addiction</li>
        </ul>

      
      </div>
        <div class="expert-actions">
          <a href="javascript:void(0)" class="btn-outline" data-bs-toggle="modal" data-bs-target="#expertModal">
    View Full Profile
</a>
          <a href="overview-details.php" class="btn-solid">Book Appointment</a>
        </div>
    </div>

  </div>
</section>

    <!-- bottom CTA -->
<div class="modal fade" id="expertModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title">Expert Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">

        <!-- Profile Section -->
        <div class="row align-items-start mb-4">
          <div class="col-md-4 text-center">
            <img src="assets/img/Dr Garima Singh.jpeg" class="img-fluid rounded-3 mb-3" alt="">
          </div>

          <div class="col-md-8">
            <h4 class="fw-bold">Dr. Garima Singh</h4>
            <p class="mb-1">Clinical Psychologist | M.Phil, Ph.D</p>

            <p><strong>Experience:</strong> 9 Years</p>
            <p><strong>Expertise:</strong> Mental illness, Childhood & Adolescent Mental Health, CBT</p>

            <span class="badge bg-primary px-3 py-2">
              Mon – Fri : 11:00 AM – 7:00 PM
            </span>
          </div>
        </div>

        <!-- About -->
        <div class="mb-4">
          <h5 class="section-title">About Expert</h5>
          <p>
            Dr. Garima Singh is a highly experienced Clinical Psychologist specializing in mental
            health issues among children, adolescents, and adults. She uses evidence-based
            therapeutic techniques such as Cognitive Behavioral Therapy (CBT) to help patients
            achieve emotional well-being.
          </p>
        </div>

        <!-- Terms -->
        <div>
          <h5 class="section-title">Terms & Conditions</h5>
          <ul class="terms-list">
            <li>Appointments must be booked in advance.</li>
            <li>Cancellation should be done 24 hours prior.</li>
            <li>Online consultations are confidential.</li>
            <li>No emergency services provided.</li>
          </ul>
        </div>

      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="overview-details.php" class="btn btn-primary">Book Appointment</a>
      </div>

    </div>
  </div>
</div>

 
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