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
:root{
  --primary:#004aad;
  --secondary:#00b4d8;
  --light:#f4f8ff;
}

.section{
  padding:80px 0;
}
.bg-soft{
  background:var(--soft);
}
.hero{
  /* background:linear-gradient(120deg,#0b2c4d,#123f6d); */
  color:#fff;
  position:relative;
}

.hero img{
  border-radius:18px;
}

.badge-soft{
    background: rgb(29 39 75);
  color:#f6b400;
  font-weight:600;
  padding:8px 18px;
}

.hero h1{
  font-size:42px;
  line-height:1.2;
}

.icon-box{
  width:58px;
  height:58px;
  background:rgba(246,180,0,.15);
  color:var(--accent);
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius:14px;
  font-size:26px;
}

.card-soft{
  border-radius:18px;
  border:1px solid rgba(0,0,0,.05);
}
.badge-soft{
    background: rgb(29 39 75);
  padding:8px 14px;
}
.carousel-caption{
  background:rgba(0,0,0,.45);
  border-radius:14px;
  padding:18px;
}
.testimonial{
  background:#fff;
  padding:35px;
  border-radius:18px;
  box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.testimonial p{
  font-size:18px;
  font-style:italic;
}

.section-title{
  font-size:34px;
  font-weight:700;
  position:relative;
  padding-left:18px;
}

.section-title::before{
  content:'';
  position:absolute;
  left:0;
  top:6px;
  width:4px;
  height:30px;
  background:var(--accent);
  border-radius:10px;
}

.intern-card{
  background:#fff;
  border-radius:20px;
  padding:28px;
  height:100%;
  position:relative;
  border:1px solid #edf1f6;
  transition:.35s;
}

.intern-card::before{
  content:'';
  position:absolute;
  /* inset:0; */
  border-radius:20px;
  border:2px solid transparent;
}

.intern-card:hover{
  transform:translateY(-8px);
  box-shadow:0 18px 40px rgba(11,44,77,.15);
}

.intern-card h5{
  font-weight:700;
  color:var(--primary);
}

.intern-meta p{
  font-size:14px;
  margin-bottom:6px;
}

.intern-card ul{
  margin-top:8px;
  font-size:14px;
}

.apply-btn{
    margin-top: 12px;
    background: #1d274b;
    color: #ffffff;
    font-weight: 700;
    border-radius: 50px;
    padding: 8px 22px;
}

.apply-btn:hover{
  background:#dca200;
}
.outcome-box{
  background:#fff;
  border-radius:22px;
  padding:40px;
  border-left:6px solid var(--accent);
}

.outcome-box li{
  padding:8px 0;
  font-size:15px;
}
.btn-light {
    color: #ffffff;
    background-color: #1d274b;
    border-color: #f8f9fa;
}
</style>
</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Internships & Training</h2>
    <p class="inde">Home › Internships & Training</p>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>


<!-- HERO -->
<section class="hero section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="badge-soft rounded-pill mb-3 d-inline-block">Internships & Training</span>
        <h1 class="fw-bold mt-3">IMHRC Internship & Professional Training Program</h1>
        <p class="mt-3 text-black">
          IMHRC offers structured internship and training programs focused on practical exposure, skill development, and career readiness in healthcare and clinical domains.
        </p>
         <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
      </div>
      <div class="col-lg-5">
        <img src="assets/img/mental-24930.webp" class="img-fluid shadow">
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold display-6">About IMHRC Internships</h2>
      <p class="text-muted fs-5">
        IMHRC internships are designed for students and aspiring professionals who wish to gain experiential learning in healthcare, clinical research, diagnostics, administration, and allied medical fields.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="internship-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-hospital"></i>
          </div>
          <h5 class="fw-bold mb-2">Real-World Exposure</h5>
          <p class="text-muted">Hands-on experience aligned with industry and institutional standards.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="internship-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-person-video3"></i>
          </div>
          <h5 class="fw-bold mb-2">Mentored Learning</h5>
          <p class="text-muted">Guidance by experts, clinicians and subject matter specialists.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="internship-card text-center p-4 rounded-4 shadow-sm bg-white h-100">
          <div class="icon-box mb-3">
            <i class="bi bi-award"></i>
          </div>
          <h5 class="fw-bold mb-2">Career Readiness</h5>
          <p class="text-muted">Skill-focused training preparing interns for future opportunities.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.internship-card {
  transition: all 0.3s ease;
}
.internship-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
.icon-box {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #ff416c, #ff4b2b);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  margin: 0 auto;
  transition: all 0.3s ease;
}
.internship-card:hover .icon-box {
  transform: scale(1.2);
}
h5 {
  font-size: 1.1rem;
}
p {
  font-size: 0.95rem;
}
@media (max-width: 767px) {
  .icon-box {
    width: 60px;
    height: 60px;
    font-size: 1.5rem;
  }
}
</style>


<!-- INTERNSHIPS OFFERED -->
<section class="py-5" id="internships-offered">
  <div class="container">

    <h2 class="section-title mb-4">Internship Offered</h2>

    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="intern-card">
          <h5>Observation-Based Internship</h5>
          <hr>
          <div class="intern-meta">
            <p><strong>Duration:</strong> 15 Days</p>
            <p><strong>Specialization:</strong> Clinical / Counselling Psychology</p>
            <p><strong>Fee:</strong> INR 3,000</p>
            <p><strong>Suitable for:</strong> School, U.G. students & Beginners</p>
          </div>
          <strong>Curriculum Includes:</strong>
          <ul>
            <li>Supervised Training in OPD</li>
            <li>Overview of Mental Disorders</li>
            <li>Clinical Interview</li>
            <li>Psychological Assessments</li>
            <li>Counselling Skills & Techniques</li>
          </ul>
          <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="intern-card">
          <h5>Hands-On Training Internship</h5>
          <hr>
          <div class="intern-meta">
            <p><strong>Duration:</strong> 120 Hours</p>
            <p><strong>Specialization:</strong> Clinical & Counselling Psychology</p>
            <p><strong>Fee:</strong> INR 3,000</p>
            <p><strong>Suitable for:</strong> U.G. & P.G. students</p>
          </div>
          <strong>Curriculum Includes:</strong>
          <ul>
            <li>Supervised Clinical Training</li>
            <li>Clinical Interviews</li>
            <li>Counselling Skills</li>
            <li>Ethics in Practice</li>
            <li>Case Work-ups</li>
          </ul>
          <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="intern-card">
          <h5>Hands-On Training Internship</h5>
          <hr>
          <div class="intern-meta">
            <p><strong>Duration:</strong> 1 Month</p>
            <p><strong>Specialization:</strong> Clinical / Counselling Psychology</p>
            <p><strong>Fee:</strong> INR 6,000</p>
            <p><strong>Suitable for:</strong> U.G. & P.G. students</p>
          </div>
          <strong>Curriculum Includes:</strong>
          <ul>
            <li>Advanced Clinical Handling</li>
            <li>Interview & MSE</li>
            <li>Psychological Assessment</li>
            <li>Counselling Techniques</li>
            <li>Case Conceptualization</li>
          </ul>
          <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-4 col-md-6">
        <div class="intern-card">
          <h5>Psychotherapy Internship</h5>
          <hr>
          <div class="intern-meta">
            <p><strong>Duration:</strong> 1 Month</p>
            <p><strong>Fee:</strong> INR 8,000</p>
            <p><strong>Suitable for:</strong> U.G. & P.G. students</p>
          </div>
          <ul>
            <li>Supervised Psychotherapy</li>
            <li>Intervention Planning</li>
            <li>Counselling Techniques</li>
            <li>Case Presentation</li>
          </ul>
           <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-lg-4 col-md-6">
        <div class="intern-card">
          <h5>IGNOU MAPC Internship</h5>
          <hr>
          <div class="intern-meta">
            <p><strong>Duration:</strong> 240 Hours</p>
            <p><strong>Fee:</strong> INR 8,000</p>
            <p><strong>Suitable for:</strong> IGNOU P.G. students</p>
          </div>
          <ul>
            <li>Psychological Assessments</li>
            <li>Counselling Sessions</li>
            <li>Ethics in Practice</li>
            <li>Case Report Submission</li>
          </ul>
         <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-lg-4 col-md-6">
        <div class="intern-card">
          <h5>IGNOU BAPC Internship</h5>
          <hr>
          <div class="intern-meta">
            <p><strong>Duration:</strong> 120 Hours</p>
            <p><strong>Fee:</strong> INR 5,500</p>
            <p><strong>Suitable for:</strong> IGNOU U.G. students</p>
          </div>
          <ul>
            <li>Supervised Training</li>
            <li>Clinical Interviews</li>
            <li>Counselling Skills</li>
            <li>Case Work-ups</li>
          </ul>
       <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- OUTCOMES -->
<section class="section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Outcomes & Certification</h2>
    <div class="row g-4">

      <!-- Learning Outcomes -->
      <div class="col-md-6">
        <div class="card card-soft h-100 p-4 shadow-sm border-0 rounded-4 bg-white">
          <h5 class="fw-bold mb-4 text-primary">Learning Outcomes</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Practical work with skilled Psychologists</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Core Mental Health Professional Skills</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Understanding of Mental Disorders</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Psychotherapeutic Interventions</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Case Conference & Certification</li>
            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Study Material Provided</li>
          </ul>
        </div>
      </div>

      <!-- Certification -->
      <div class="col-md-6">
        <div class="card card-soft h-100 p-4 shadow-sm border-0 rounded-4 bg-gradient p-4 text-black" style="background: linear-gradient(135deg, #ff416c, #ff4b2b);">
          <h5 class="fw-bold mb-3">Certification</h5>
          <p>
            Upon successful completion, participants receive an <strong>official IMHRC Internship Certificate</strong> recognizing their training, duration and performance.  
            <span class="d-block mt-2"><i class="bi bi-award-fill"></i> Valuable for career growth</span>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
.card-soft ul li i {
  transition: transform 0.3s;
}
.card-soft ul li:hover i {
  transform: scale(1.2);
}
.card-soft ul li {
  font-size: 0.95rem;
}
.card-soft h5 {
  font-size: 1.25rem;
}
@media (max-width: 767px) {
  .card-soft {
    text-align: center;
  }
  .card-soft ul li {
    justify-content: center;
  }
}
</style>


<!-- TESTIMONIALS -->
<section class="section bg-soft py-5">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Student Testimonials</h2>
    
    <div id="testimonials" class="carousel slide" data-bs-ride="carousel">
      
      <!-- Carousel indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#testimonials" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#testimonials" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#testimonials" data-bs-slide-to="2"></button>
      </div>

      <!-- Carousel items -->
      <div class="carousel-inner">

        <!-- Testimonial 1 -->
        <div class="carousel-item active">
          <div class="testimonial-card mx-auto p-4 rounded-4 shadow-sm bg-white" style="max-width:700px;">
            <i class="bi bi-chat-quote-fill text-primary fs-1 mb-3"></i>
            <p class="mb-3">"IMHRC internship helped me understand real clinical workflows and boosted my confidence."</p>
            <h6 class="fw-bold mb-0">Anjali Sharma</h6>
            <small class="text-muted">Clinical Research Intern</small>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="carousel-item">
          <div class="testimonial-card mx-auto p-4 rounded-4 shadow-sm bg-white" style="max-width:700px;">
            <i class="bi bi-chat-quote-fill text-primary fs-1 mb-3"></i>
            <p class="mb-3">"Well-structured program with hands-on exposure and supportive mentors."</p>
            <h6 class="fw-bold mb-0">Aman Verma</h6>
            <small class="text-muted">Healthcare Administration Trainee</small>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="carousel-item">
          <div class="testimonial-card mx-auto p-4 rounded-4 shadow-sm bg-white" style="max-width:700px;">
            <i class="bi bi-chat-quote-fill text-primary fs-1 mb-3"></i>
            <p class="mb-3">"Amazing learning experience! Real exposure to hospital operations and patient care."</p>
            <h6 class="fw-bold mb-0">Ritika Singh</h6>
            <small class="text-muted">Mental Health Intern</small>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-primary rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>
  </div>
</section>

<style>
.testimonial-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: center;
}
.testimonial-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
.testimonial-card p {
  font-size: 1rem;
  line-height: 1.6;
  color: #555;
}
.testimonial-card h6 {
  margin-top: 10px;
  font-size: 1.05rem;
}
.testimonial-card small {
  font-size: 0.875rem;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-size: 1.5rem 1.5rem;
}
@media (max-width: 767px) {
  .testimonial-card {
    padding: 2rem 1.5rem;
  }
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 40px;
    height: 40px;
  }
}
.internship-modal h5 {
    color: #ffa851;
}
.internship-modal h6 {
    color: #ffa851;
}
.internship-modal h4 {
    color: #ffffff;
}
</style>

<!-- APPLY -->
<section id="apply" class="section text-center py-5" style="background: linear-gradient(135deg, #ff416c, #ff4b2b); color: #fff;">
  <div class="container-fluid">
    <h2 class="fw-bold mb-3 display-5">Apply for IMHRC Internship Program</h2>
    <p class="mb-4 fs-5">
      Enhance your learning journey with IMHRC’s professional internship and training opportunities.
    </p>
  <button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#internshipApply">
  Apply for Internship
</button>
  </div>
</section>



<div class="modal fade" id="internshipApply">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content internship-modal">

      <div class="modal-body p-0">

        <div class="row g-0">

          <!-- LEFT INFO PANEL -->
          <div class="col-lg-5 d-none d-lg-flex info-panel">
            <div>
            

                <h4 class="mb-3">Terms, Conditions & Policies</h4>

  <!-- TERMS & CONDITIONS -->
  <h5>1. Terms & Conditions</h5>

  <h6>1.1 Scope of Services</h6>
  <p>
    Sanseeb Health & Edutech Pvt. Ltd. (“Company”) provides professional
    mental healthcare services and educational programs including
    <strong>clinical psychology internships, counselling psychology training,
    academic internships, and skill-based certification programs</strong>.
    Services may be delivered through both <strong>online and offline modes</strong>,
    depending on program structure and availability.
  </p>

  <h6>1.2 Fees & Payments</h6>
  <p>
    All internship and training fees are charged in <strong>Indian Rupees (INR)</strong>
    and are exclusive of applicable government taxes. Full payment is mandatory
    at the time of registration. Failure to complete payment may result in
    cancellation or suspension of access to internship services and learning
    resources.
  </p>

  <h6>1.3 Booking Confirmation</h6>
  <p>
    Internship enrollment is confirmed only after successful payment
    through <strong>authorized payment gateways such as Razorpay</strong>.
    Upon confirmation, candidates receive official communication via
    email or SMS detailing program structure, duration, and joining schedule.
  </p>

  <h6>1.4 User Responsibilities</h6>
  <p>
    Applicants must ensure that all personal, academic, and payment details
    provided during registration are accurate and verifiable. Any misleading
    or incorrect information may lead to rejection of the application without
    refund. Users are responsible for maintaining the confidentiality of
    communication credentials.
  </p>

  <!-- REFUND & CANCELLATION -->
  <h5 class="mt-4">2. Refund & Cancellation Policy</h5>

  <h6>2.1 Non-Refundable Fees</h6>
  <p>
    Fees paid for <strong>internships, academic programs, and professional training</strong>
    are strictly non-refundable under any circumstances.
    Counselling session cancellations are eligible for a
    <strong>50% refund only if cancelled at least 24 hours prior</strong>
    to the scheduled session.
  </p>

  <h6>2.2 Late Cancellation & No-Show</h6>
  <p>
    Any cancellation requests received within 24 hours of the scheduled service,
    or failure to attend without prior notice (“No-Show”), shall not be eligible
    for any refund or rescheduling.
  </p>

  <h6>2.3 Refund Processing Timeline</h6>
  <p>
    Approved refunds, if applicable, will be processed within
    <strong>7–10 business days</strong> and credited back to the original
    payment method used during registration.
  </p>

  <!-- SHIPPING & DELIVERY -->
  <h5 class="mt-4">3. Shipping & Delivery Policy</h5>
  <p>
    This policy applies only to physical study material, certificates,
    or learning kits associated with specific internship programs.
  </p>

  <h6>3.1 Delivery Method</h6>
  <p>
    Digital resources such as <strong>e-certificates, online study material,
    and documents</strong> are delivered electronically via email upon completion.
    Physical documents are dispatched through verified courier services
    to the registered address.
  </p>

  <h6>3.2 Delivery Timeline</h6>
  <p>
    Estimated delivery timeline ranges from <strong>7 to 15 business days</strong>,
    depending on location and logistics. Tracking information will be
    shared via email or SMS once dispatched.
  </p>

  <h6>3.3 Delivery Delays</h6>
  <p>
    While the company makes every effort to meet delivery timelines,
    delays caused due to logistics issues, natural events, or circumstances
    beyond control shall not be considered grounds for refunds.
  </p>

  <!-- PRIVACY POLICY -->
  <h5 class="mt-4">4. Privacy Policy</h5>

  <h6>4.1 Information Collection</h6>
  <p>
    We collect personal information including name, email address,
    contact number, academic details, and billing information solely for
    internship processing and service delivery purposes.
  </p>

  <h6>4.2 Use of Collected Data</h6>
  <p>
    User data is utilized for internship registration, payment processing,
    internal communication, certification, and important program updates.
    Promotional communication may be sent, and users may opt out at any time.
  </p>

  <h6>4.3 Data Sharing & Security</h6>
  <p>
    We do not sell or rent personal data. Information may be securely
    shared only with trusted partners such as <strong>Razorpay</strong>
    for payment processing, courier services for deliveries,
    or regulatory authorities if legally required.
  </p>

  <!-- AGREEMENT -->
  <div class="form-check mt-4">
    <input class="form-check-input" type="checkbox" required id="agreeTerms">
    <label class="form-check-label" for="agreeTerms">
      I have read and agree to the Terms, Conditions & Policies of IMHRC.
    </label>
  </div>
            </div>
            
          </div>

          <!-- FORM PANEL -->
          <div class="col-lg-7 form-panel">

            <div class="form-header">
              <h4 class="text-black">Internship Application Form</h4>
              <p>Apply online for professional psychology internship programs</p>
              <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form class="p-4">

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label>Select Center*</label>
                  <select class="form-control" required>
                    <option>Lucknow</option>
                    <option>Online Mode</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label>Email*</label>
                  <input type="email" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                  <label>Prefix*</label>
                  <select class="form-control">
                    <option>Mr.</option>
                    <option>Ms.</option>
                    <option>Dr.</option>
                  </select>
                </div>

                <div class="col-md-8 mb-3">
                  <label>Full Name (Academic Records)*</label>
                  <input type="text" class="form-control" required>
                </div>

                <div class="col-md-4 mb-3">
                  <label>Age*</label>
                  <input type="number" class="form-control">
                </div>

                <div class="col-md-4 mb-3">
                  <label>WhatsApp Number*</label>
                  <input type="tel" class="form-control">
                </div>

                <div class="col-md-4 mb-3">
                  <label>Gender*</label>
                  <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                  </select>
                </div>

                <div class="col-12 mb-3">
                  <label>Address*</label>
                  <textarea class="form-control" rows="2"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                  <label>Course Pursuing*</label>
                  <select class="form-control">
                    <option>BA / BSc Psychology</option>
                    <option>MA / MSc Psychology</option>
                    <option>IGNOU MAPC</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label>Institute / University*</label>
                  <input type="text" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                  <label>Internship Specialisation*</label>
                  <select class="form-control">
                    <option>Clinical Psychology</option>
                    <option>Counselling Psychology</option>
                    <option>Psychotherapy</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label>Internship Program*</label>
                  <select class="form-control">
                    <option>Observation Based</option>
                    <option>Hands-on Training</option>
                    <option>IGNOU Internship</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label>Joining Date*</label>
                  <input type="date" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                  <label>Amount Paid (INR)*</label>
                  <input type="number" class="form-control">
                </div>

                <div class="col-12 mb-3">
                  <label>Upload Documents*</label>
                  <input type="file" class="form-control mb-2">
                  <input type="file" class="form-control mb-2">
                  <input type="file" class="form-control">
                </div>

              </div>

              <div class="terms-box mb-3">
                <small>
                  By submitting this form, you agree to IMHRC internship policies,
                  training structure and certification guidelines.
                </small>
              </div>

              <button class="btn btn-success w-100 submit-btn">
                Submit Internship Application
              </button>

            </form>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>
<style>
.internship-modal {
  border-radius: 18px;
  overflow: hidden;
  font-family: 'Inter', sans-serif;
}

.info-panel {
  background: linear-gradient(135deg,#0b2545,#133b76);
  color: #fff;
  padding: 40px;
}

.info-panel h3 { font-weight: 700; }
.info-panel ul { padding-left: 20px; }

.form-panel {
  background: #f8fafc;
}

.form-header {
  background: #fff;
  padding: 20px 30px;
  border-bottom: 1px solid #e5e7eb;
  position: relative;
}

.form-header .btn-close {
  position:absolute;
  right:20px;
  top:20px;
}

.form-control {
  padding: 12px;
  border-radius: 10px;
  border: 1px solid #d1d5db;
}

label {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 6px;
}

.terms-box {
  background: #fffbe6;
  padding: 12px;
  border-radius: 10px;
  font-size: 12px;
}

.submit-btn {
  padding: 14px;
  font-size: 16px;
  border-radius: 12px;
}

@media(max-width:767px){
  .info-panel{display:none;}
}
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