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


  .blog-header h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    text-align: center;
  }

  .blog-header p {
    text-align: center;
    color: #555;
    margin-bottom: 40px;
  }

  /* Trending topics */
  .trending-topics {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    margin-bottom: 50px;
  }

  .trending-topics span {
    background: #e0e0e0;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  .trending-topics span:hover {
    background: #4e5bff;
    color: #fff;
  }

  /* Featured section */
  .featured {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    /* justify-content: center; */
    margin-bottom: 50px;
  }

  .feature-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    width: 300px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
  }

  .feature-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .feature-card .content {
    padding: 20px;
  }

  .feature-card .badge {
    display: inline-block;
    background: #4e5bff;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 0.8rem;
    margin-bottom: 10px;
  }

  .feature-card h3 {
    font-size: 1.2rem;
    margin: 10px 0;
  }

  .feature-card .meta {
    font-size: 0.85rem;
    color: #777;
    margin-bottom: 10px;
  }

  .feature-card a {
    text-decoration: none;
    color: #4e5bff;
    font-weight: bold;
  }

  /* Blog grid */
  .blog-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    /* justify-content: center; */
    margin-bottom: 50px;
  }

  .blog-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    width: 300px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
  }

  .blog-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .blog-card .content {
    padding: 20px;
  }

  .blog-card h4 {
    font-size: 1.1rem;
    margin-bottom: 10px;
  }

  .blog-card p {
    font-size: 0.9rem;
    color: #555;
    margin-bottom: 10px;
  }

  .blog-card .tags {
    font-size: 0.8rem;
    color: #4e5bff;
  }

  /* CTA */
  .write-box {
    background: #4e5bff;
    color: #fff;
    padding: 40px;
    border-radius: 10px;
    text-align: center;
  }

  .write-box h2 {
    font-size: 2rem;
    margin-bottom: 15px;
  }

  .write-box p {
    font-size: 1rem;
    margin-bottom: 20px;
  }

  .write-box a {
    display: inline-block;
    background: #fff;
    color: #4e5bff;
    padding: 10px 25px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
  }

  .write-box a:hover {
    background: #e0e0e0;
    color: #333;
  }

  @media(max-width: 768px){
    .featured, .blog-grid {
      flex-direction: column;
      align-items: center;
    }
  }
</style>


</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Articles & Blogs</h2>
   
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>

<section class="container">

  <!-- HEADER -->


  <!-- TRENDING TOPICS -->
  <div class="trending-topics">
    <span onclick="filterTopic('Anxiety & Depression')">Anxiety & Depression</span>
    <span onclick="filterTopic('Stress & Burnout')">Stress & Burnout</span>
    <span onclick="filterTopic('Student Mental Health')">Student Mental Health</span>
    <span onclick="filterTopic('Workplace Psychology')">Workplace Psychology</span>
    <span onclick="filterTopic('Trauma & PTSD')">Trauma & PTSD</span>
    <span onclick="filterTopic('Mindfulness')">Mindfulness</span>
    <span onclick="filterTopic('Digital Mental Health')">Digital Mental Health</span>
  </div>

  <!-- FEATURED -->
  <div class="featured">

    <div class="feature-card" onclick="openArticle('article1.html')">
      <img src="https://images.unsplash.com/photo-1551434678-e076c223a692">
      <div class="content">
        <span class="badge">Featured</span>
        <h3>Understanding Anxiety Disorders in Modern Society</h3>
        <div class="meta">By Clinical Psychologist · 6 min read</div>
        <a href="#">Read Article →</a>
      </div>
    </div>

    <div class="feature-card" onclick="openArticle('article2.html')">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">
      <div class="content">
        <span class="badge">Research</span>
        <h3>Workplace Burnout Among Mental Health Professionals</h3>
        <div class="meta">Research Desk · 5 min</div>
        <a href="#">Read →</a>
      </div>
    </div>

    <div class="feature-card" onclick="openArticle('article3.html')">
      <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216">
      <div class="content">
        <span class="badge">Students</span>
        <h3>Exam Stress & Youth Mental Health</h3>
        <div class="meta">Student Column · 4 min</div>
        <a href="#">Read →</a>
      </div>
    </div>

  </div>

  <!-- BLOG GRID -->
  <div class="blog-grid">

    <div class="blog-card" onclick="openArticle('blog1.html')">
      <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773">
      <div class="content">
        <h4>Mindfulness Techniques for Daily Mental Wellness</h4>
        <p>Evidence-based mindfulness approaches to improve emotional balance and reduce anxiety.</p>
        <div class="tags">#Mindfulness #Wellbeing</div>
      </div>
    </div>

    <div class="blog-card" onclick="openArticle('blog2.html')">
      <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c">
      <div class="content">
        <h4>Community Mental Health Initiatives in India</h4>
        <p>Exploring community-based psychological interventions and outreach programs.</p>
        <div class="tags">#CommunityHealth</div>
      </div>
    </div>

    <div class="blog-card" onclick="openArticle('blog3.html')">
      <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4">
      <div class="content">
        <h4>Ethics and Integrity in Mental Health Research</h4>
        <p>Understanding ethical responsibilities in psychological and clinical research.</p>
        <div class="tags">#Ethics #Research</div>
      </div>
    </div>

  </div>



</section>

<script>
  function openArticle(url){
    window.location.href = url;
  }

  function filterTopic(topic){
    alert("You clicked on: " + topic + "\nFiltering articles for this topic.");
    // Yaha aap future me JS se content filter kar sakte ho
  }
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