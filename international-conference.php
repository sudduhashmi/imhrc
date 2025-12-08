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
    <h2>International Conference on Mental Health Research 2025</h2>
    <p class="inde">Home › International Conference </p>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>

<style>

/* Hero Section */
.hero { text-align: center; padding: 50px 20px;  background: #136782; color:#fff; position:relative; border-radius:15px; }
.hero::after { content:""; position:absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.5); border-radius:15px; }
.hero-content { position: relative; z-index:2; }
.hero h1 { font-size:2.8rem; margin-bottom:15px; }
.hero p { font-size:1.2rem; margin-bottom:25px; }
.hero .btn { background:#ffb800; color:#fff; padding:12px 30px; border-radius:50px; text-decoration:none; font-weight:600; margin:5px; display:inline-block; transition:0.3s; }
.hero .btn:hover { background:#3b46d6; transform:translateY(-3px); }

/* Tabs */
.tabs { display:flex; justify-content:center; gap:20px; flex-wrap: wrap; margin:50px 0; }
.tab-btn { padding:12px 30px; border:none; border-radius:50px; background:#e0e0e0; cursor:pointer; font-weight:600; transition:0.3s; }
.tab-btn.active, .tab-btn:hover { background:#ffb800; color:#fff; }

/* Tab Content */
.tab-content { display:none; max-width: 1200px; margin:0 auto; }
.tab-content.active { display:block; }

/* Subthemes */
.subthemes-grid { display:flex; flex-wrap:wrap; gap:20px; justify-content:center; margin-top:20px; }
.subtheme-card { background:#fff; padding:20px; border-radius:15px; max-width:250px; text-align:center; box-shadow:0 6px 18px rgba(0,0,0,0.08); transition:0.3s; display:flex; flex-direction:column; align-items:center; gap:10px; }
.subtheme-card img { width:50px; }
.subtheme-card:hover { transform:translateY(-6px); box-shadow:0 12px 25px rgba(0,0,0,0.15); }

/* Registration */
.registration-grid { display:flex; flex-wrap:wrap; gap:20px; justify-content:center; margin:30px 0; }
.reg-card { background:#fff; padding:20px; border-radius:15px; max-width:200px; text-align:center; box-shadow:0 6px 18px rgba(0,0,0,0.08); transition:0.3s; }
.reg-card:hover { transform:translateY(-6px); box-shadow:0 12px 25px rgba(0,0,0,0.15); }

/* Speakers */
.speakers-grid { display:flex; flex-wrap:wrap; gap:25px; justify-content:center; }
.speaker-card { background:#fff; padding:20px; border-radius:15px; text-align:center; max-width:220px; box-shadow:0 6px 18px rgba(0,0,0,0.08); transition:0.3s; }
.speaker-card img { width:100%; border-radius:50%; margin-bottom:15px; }
.speaker-card h4 { font-size:1.2rem; margin-bottom:5px; }
.speaker-card p { font-size:0.9rem; color:#777; }
.speaker-card:hover { transform:translateY(-6px); box-shadow:0 12px 25px rgba(0,0,0,0.15); }

/* Schedule Timeline */
.timeline { display:flex; flex-direction:column; gap:30px; margin:40px 0; }
.timeline-day { background:#fff; padding:20px; border-radius:15px; box-shadow:0 6px 18px rgba(0,0,0,0.08); }
.timeline-day h4 { margin-bottom:15px; }
.timeline-day ul { padding-left:20px; }
.timeline-day ul li { margin-bottom:10px; }

/* Venue */
.venue { text-align:center; margin:50px 0; }
.venue img { max-width:100%; border-radius:15px; margin-top:20px; }

/* Partners / Sponsors */
.partners { display:flex; flex-wrap:wrap; gap:25px; justify-content:center; margin:40px 0; }
.partners img { max-height:60px; object-fit:contain; filter:grayscale(0.2); transition:transform 0.3s; }
.partners img:hover { transform:scale(1.1); filter:grayscale(0); }

/* FAQs */
.faq { max-width:900px; margin:50px auto; }
.faq-item { background:#fff; padding:20px; border-radius:15px; margin-bottom:15px; cursor:pointer; box-shadow:0 6px 18px rgba(0,0,0,0.08); transition:0.3s; }
.faq-item:hover { box-shadow:0 12px 25px rgba(0,0,0,0.15); }
.faq-answer { display:none; margin-top:10px; }

/* Contact Form */
.contact-form { max-width:500px; margin:50px auto; background:#fff; padding:30px; border-radius:15px; box-shadow:0 6px 18px rgba(0,0,0,0.08); }
.contact-form h3 { text-align:center; margin-bottom:20px; }
.contact-form input, .contact-form textarea { width:100%; padding:10px; margin-bottom:15px; border-radius:8px; border:1px solid #ccc; font-size:1rem; }
.contact-form button { width:100%; padding:12px; background:#4e5bff; color:#fff; border:none; border-radius:50px; font-weight:600; cursor:pointer; transition:0.3s; }
.contact-form button:hover { background:#3b46d6; }

/* Buttons */
.btn { display:inline-block; padding:12px 28px; background:#4e5bff; color:#fff; border-radius:50px; font-weight:600; text-decoration:none; transition:0.3s; }
.btn:hover { background:#3b46d6; transform:translateY(-3px); }

/* Responsive */
@media(max-width:768px){ .subthemes-grid, .registration-grid, .speakers-grid, .partners { flex-direction:column; align-items:center; } }
</style>


<div class="container">

  <!-- Hero -->
  <div class="hero">
    <div class="hero-content">
      <h1 class="text-white">International Conference on Mental Health Research 2025</h1>
      <p>Join global researchers and practitioners to advance mental health research, policy, and practice.</p>
      <a href="#registration" class="btn">Register Now</a>
      <a href="#abstracts" class="btn">Submit Abstract</a>
    </div>
  </div>

  <!-- Tabs -->
  <div class="tabs">
    <button class="tab-btn active" data-tab="theme">Theme & Sub-themes</button>
    <button class="tab-btn" data-tab="abstracts">Call for Abstracts / Speakers</button>
    <button class="tab-btn" data-tab="registration">Registration & Payment</button>
  </div>

  <!-- Tab Contents -->
  <div class="tab-content active" id="theme">
    <h2>Conference Theme</h2>
    <p><strong>Advancing Mental Health Research: Innovations, Policy, and Practice</strong></p>
    <h3>Sub-themes</h3>
    <div class="subthemes-grid">
      <div class="subtheme-card"><img src="assets/img/icons/therapy.png" alt="Therapy">Mental Health Interventions & Therapy Innovations</div>
      <div class="subtheme-card"><img src="assets/img/icons/public-health.png" alt="Public Health">Public Health and Mental Well-being</div>
      <div class="subtheme-card"><img src="assets/img/icons/digital.png" alt="Digital Health">Digital Mental Health & Teletherapy</div>
      <div class="subtheme-card"><img src="assets/img/icons/policy.png" alt="Policy">Policy, Governance, and Advocacy</div>
      <div class="subtheme-card"><img src="assets/img/icons/neuro.png" alt="Neuropsychology">Neuropsychology and Behavioral Studies</div>
    </div>
  </div>

  <div class="tab-content" id="abstracts">
    <h2>Call for Abstracts / Speakers</h2>
    <p>Researchers, academicians, and professionals are invited to submit abstracts for oral or poster presentations. Selected speakers will present their research to a global audience. Guidelines and submission deadlines are provided.</p>
    <a href="#" class="btn">Submit Your Abstract</a>
  </div>

  <div class="tab-content" id="registration">
    <h2>Registration & Payment</h2>
    <div class="registration-grid">
      <div class="reg-card"><h4>Student</h4><p>Fee: $50</p></div>
      <div class="reg-card"><h4>Professional</h4><p>Fee: $100</p></div>
      <div class="reg-card"><h4>Delegate</h4><p>Fee: $150</p></div>
    </div>
    <a href="#" class="btn">Register Now</a>
  </div>

  <!-- Speakers -->
  <h2 style="text-align:center; margin-top:80px;">Keynote Speakers</h2>
  <div class="speakers-grid">
    <div class="speaker-card"><img src="assets/img/speaker1.jpg" alt="Speaker 1"><h4>Dr. Anjali Sharma</h4><p>Chairperson, India</p></div>
    <div class="speaker-card"><img src="assets/img/speaker2.jpg" alt="Speaker 2"><h4>Prof. Rajiv Verma</h4><p>UK</p></div>
    <div class="speaker-card"><img src="assets/img/speaker3.jpg" alt="Speaker 3"><h4>Dr. Meera Gupta</h4><p>USA</p></div>
  </div>

  <!-- Schedule -->
  <h2 style="text-align:center; margin-top:80px;">Conference Schedule</h2>
  <div class="timeline">
    <div class="timeline-day">
      <h4>Day 1 - Opening & Keynotes</h4>
      <ul>
        <li>09:00 - 10:00: Registration & Welcome</li>
        <li>10:00 - 12:00: Keynote Sessions</li>
        <li>12:00 - 13:00: Lunch Break</li>
      </ul>
    </div>
    <div class="timeline-day">
      <h4>Day 2 - Workshops & Panels</h4>
      <ul>
        <li>09:00 - 11:00: Workshops</li>
        <li>11:00 - 13:00: Panel Discussions</li>
        <li>13:00 - 14:00: Lunch Break</li>
      </ul>
    </div>
  </div>

  <!-- Venue -->
  <div class="venue">
    <h2>Venue & Accommodation</h2>
    <p>Conference will be held at [Venue Name], City, Country. Accommodation options available nearby for delegates.</p>
    <img src="assets/img/venue.jpg" alt="Conference Venue">
  </div>

  <!-- Partners / Sponsors -->
  <h2 style="text-align:center; margin-top:80px;">Partners & Sponsors</h2>
  <div class="partners">
    <img src="assets/img/partner1.png" alt="Partner 1">
    <img src="assets/img/partner2.png" alt="Partner 2">
    <img src="assets/img/partner3.png" alt="Partner 3">
  </div>

  <!-- FAQs -->
  <div class="faq">
    <h2 style="text-align:center; margin-bottom:30px;">FAQs</h2>
    <div class="faq-item">What is the deadline for abstract submission?
      <div class="faq-answer">Abstract submission closes on 31st March 2025.</div>
    </div>
    <div class="faq-item">Who can attend the conference?
      <div class="faq-answer">Researchers, professionals, and students in mental health fields.</div>
    </div>
  </div>

  <!-- Contact Form -->
  <div class="contact-form">
    <h3>Contact Conference Support</h3>
    <form>
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="subject" placeholder="Subject" required>
      <textarea name="message" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

</div>

<script>
// Tabs functionality
const tabButtons = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');
tabButtons.forEach(btn => {
  btn.addEventListener('click', () => {
    tabButtons.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    tabContents.forEach(c => c.classList.remove('active'));
    document.getElementById(btn.getAttribute('data-tab')).classList.add('active');
  });
});

// FAQ toggle
document.querySelectorAll('.faq-item').forEach(item => {
  item.addEventListener('click', () => {
    const answer = item.querySelector('.faq-answer');
    answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
  });
});

// Contact form alert
document.querySelector('.contact-form form').addEventListener('submit', e => {
  e.preventDefault();
  alert('Your message has been sent!');
  e.target.reset();
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