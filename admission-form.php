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

.form-card{
  background:#fff;
  border-radius:14px;
  box-shadow:0 10px 30px rgba(0,0,0,.08);
  padding:25px;
  margin-bottom:30px;
}
.section-title{
  font-weight:700;
  color:#1d2b53;
  border-left:5px solid #dc3545;
  padding-left:10px;
  margin-bottom:20px;
}
.form-label{
  font-weight:600;
}
.file-box{
  border:2px dashed #dee2e6;
  padding:12px;
  border-radius:10px;
  text-align:center;
  font-size:14px;
}
.submit-btn{
  background:#dc3545;
  color:#fff;
  font-size:18px;
  padding:12px;
  border-radius:10px;
}
</style>
</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Admission Form</h2>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#f8f9fa" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>

<section class="py-5 bg-light">
  <div class="container">
    <div class="card shadow-lg border-0 rounded-4">
      <div class="card-body p-4 p-md-5">

        <h3 class="text-center fw-bold mb-4">🎓 Student Admission Form</h3>

        <form>

<!-- ================= PERSONAL DETAILS ================= -->
<h5 class="mb-3 border-bottom pb-2">Personal Details</h5>
<div class="row g-3">

  <div class="col-md-6">
    <label class="form-label">Candidate Name *</label>
    <input type="text" class="form-control" placeholder="Enter full name of candidate">
  </div>

  <div class="col-md-6">
    <label class="form-label">Father's Name *</label>
    <input type="text" class="form-control" placeholder="Enter father's name">
  </div>

  <div class="col-md-6">
    <label class="form-label">Mother's Name *</label>
    <input type="text" class="form-control" placeholder="Enter mother's name">
  </div>

  <div class="col-md-3">
    <label class="form-label">Date of Birth *</label>
    <input type="date" class="form-control">
  </div>

  <div class="col-md-3">
    <label class="form-label">Gender *</label>
    <select class="form-select">
      <option value="">Select Gender</option>
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
  </div>

  <div class="col-md-4">
    <label class="form-label">Category *</label>
    <select class="form-select">
      <option value="">Select Category</option>
      <option>General</option>
      <option>OBC</option>
      <option>SC</option>
      <option>ST</option>
    </select>
  </div>

  <div class="col-md-4">
    <label class="form-label">Are you employed? *</label>
    <select class="form-select">
      <option>Select</option>
      <option>No</option>
      <option>Yes</option>
    </select>
  </div>

  <div class="col-md-4">
    <label class="form-label">Aadhaar Number *</label>
    <input type="text" class="form-control" maxlength="12" placeholder="Enter 12 digit Aadhaar number">
  </div>

</div>



<!-- ================= UPLOADS ================= -->
<h5 class="mt-4 mb-3 border-bottom pb-2">Uploads</h5>
<div class="row g-3">

  <div class="col-md-3">
    <label class="form-label">Passport Size Photo *</label>
    <input type="file" class="form-control">
  </div>

  <div class="col-md-3">
    <label class="form-label">Signature *</label>
    <input type="file" class="form-control">
  </div>

  <div class="col-md-3">
    <label class="form-label">Aadhaar Front *</label>
    <input type="file" class="form-control">
  </div>

  <div class="col-md-3">
    <label class="form-label">Aadhaar Back *</label>
    <input type="file" class="form-control">
  </div>

</div>

<!-- ================= ADDRESS ================= -->
<h5 class="mt-4 mb-3 border-bottom pb-2">Contact & Address Details</h5>

<div class="row g-3">

  <!-- Employer Name -->
  <div class="col-md-6">
    <label class="form-label">Employer Name</label>
    <input type="text" class="form-control" placeholder="Employer Name">
  </div>

  <!-- Designation -->
  <div class="col-md-6">
    <label class="form-label">Designation</label>
    <input type="text" class="form-control" placeholder="Designation">
  </div>

  <!-- Contact Number -->
  <div class="col-md-6">
    <label class="form-label">Contact Number *</label>
    <input type="tel" class="form-control" placeholder="Contact Number">
  </div>

  <!-- Alternate Number -->
  <div class="col-md-6">
    <label class="form-label">Alternate No. *</label>
    <input type="tel" class="form-control" placeholder="Alternate No.">
  </div>

  <!-- Email -->
  <div class="col-md-6">
    <label class="form-label">Email Address *</label>
    <input type="email" class="form-control" placeholder="Email Address">
  </div>

  <!-- Current Address -->
  <div class="col-md-6">
    <label class="form-label">Current Address *</label>
    <input type="text" class="form-control" placeholder="Current Address">
  </div>

  <!-- Permanent Address -->
  <div class="col-md-6">
    <label class="form-label">Permanent Address *</label>
    <input type="text" class="form-control" placeholder="Permanent Address">
  </div>

  <!-- City -->
  <div class="col-md-6">
    <label class="form-label">City *</label>
    <input type="text" class="form-control" placeholder="City">
  </div>

  <!-- State -->
  <div class="col-md-6">
    <label class="form-label">State *</label>
    <input type="text" class="form-control" placeholder="State">
  </div>

  <!-- Nationality -->
  <div class="col-md-6">
    <label class="form-label">Nationality *</label>
    <input type="text" class="form-control" placeholder="Nationality">
  </div>

  <!-- Country -->
  <div class="col-md-6">
    <label class="form-label">Country *</label>
    <select class="form-select">
      <option value="">Select Country</option>
      <option>India</option>
      <option>Other</option>
    </select>
  </div>

  <!-- Pincode -->
  <div class="col-md-6">
    <label class="form-label">Pincode *</label>
    <input type="text" class="form-control" placeholder="Pincode">
  </div>

</div>


<!-- ================= COURSE DETAILS ================= -->
<h5 class="mt-4 mb-3 border-bottom pb-2">Course Details</h5>

<div class="row g-3">

  <!-- Course Type -->
  <div class="col-md-6">
    <label class="form-label">Course Type *</label>
    <select class="form-select">
      <option value="">Select Course Type</option>
      <option>Certificate</option>
      <option>Diploma</option>
      <option>Undergraduate</option>
      <option>Postgraduate</option>
    </select>
  </div>

  <!-- Faculty -->
  <div class="col-md-6">
    <label class="form-label">Faculty *</label>
    <select class="form-select">
      <option value="">Select Faculty</option>
      <option>Arts</option>
      <option>Science</option>
      <option>Commerce</option>
      <option>Management</option>
    </select>
  </div>

  <!-- Course -->
  <div class="col-md-6">
    <label class="form-label">Course *</label>
    <select class="form-select">
      <option value="">Select Course</option>
      <option>B.A</option>
      <option>B.Sc</option>
      <option>B.Com</option>
      <option>M.A</option>
      <option>M.Sc</option>
    </select>
  </div>

  <!-- Stream -->
  <div class="col-md-6">
    <label class="form-label">Stream *</label>
    <select class="form-select">
      <option value="">Select Stream</option>
      <option>General</option>
      <option>Computer Science</option>
      <option>Biology</option>
      <option>Commerce</option>
    </select>
  </div>

  <!-- Year -->
  <div class="col-md-6">
    <label class="form-label">Year *</label>
    <select class="form-select">
      <option>2024</option>
      <option selected>2025</option>
      <option>2026</option>
    </select>
  </div>

  <!-- Month Session -->
  <div class="col-md-6">
    <label class="form-label">Month Session *</label>
    <select class="form-select">
      <option>January</option>
      <option>April</option>
      <option selected>July</option>
      <option>October</option>
    </select>
  </div>

  <!-- Session -->
  <div class="col-md-6">
    <label class="form-label">Session *</label>
    <select class="form-select">
      <option>2024</option>
      <option selected>2025</option>
      <option>2026</option>
    </select>
  </div>

  <!-- Hostel Facility -->
  <div class="col-md-6">
    <label class="form-label">Hostel Facility *</label>
    <select class="form-select">
      <option>No</option>
      <option>Yes</option>
    </select>
  </div>

  <!-- Course Fee -->
  <div class="col-md-6">
    <label class="form-label">Course Fee *</label>
    <input type="text" class="form-control" placeholder="Enter course fee">
  </div>

  <!-- Duration -->
  <div class="col-md-6">
    <label class="form-label">Duration *</label>
    <input type="text" class="form-control" placeholder="Eg: 1 Year / 6 Months">
  </div>

</div>


<!-- ================= EDUCATIONAL QUALIFICATION ================= -->
<h5 class="mt-4 mb-3 border-bottom pb-2">Educational Qualification</h5>

<div class="table-responsive">
<table class="table table-bordered text-center align-middle">
<thead class="table-dark">
<tr>
  <th>Examination</th>
  <th>Year</th>
  <th>Board / University</th>
  <th>Total Marks</th>
  <th>Marks Obtained</th>
  <th>Grade</th>
  <th>Document</th>
</tr>
</thead>
<tbody>

<tr>
  <td>Secondary</td>
  <td><input class="form-control" placeholder="Year"></td>
  <td><input class="form-control" placeholder="Board"></td>
  <td><input class="form-control" placeholder="Total"></td>
  <td><input class="form-control" placeholder="Obtained"></td>
  <td><input class="form-control" placeholder="Grade"></td>
  <td><input type="file" class="form-control"></td>
</tr>

<tr>
  <td>Sr. Secondary</td>
  <td><input class="form-control" placeholder="Year"></td>
  <td><input class="form-control" placeholder="Board"></td>
  <td><input class="form-control" placeholder="Total"></td>
  <td><input class="form-control" placeholder="Obtained"></td>
  <td><input class="form-control" placeholder="Grade"></td>
  <td><input type="file" class="form-control"></td>
</tr>

<tr>
  <td>Graduation</td>
  <td><input class="form-control" placeholder="Year"></td>
  <td><input class="form-control" placeholder="University"></td>
  <td><input class="form-control" placeholder="Total"></td>
  <td><input class="form-control" placeholder="Obtained"></td>
  <td><input class="form-control" placeholder="Grade"></td>
  <td><input type="file" class="form-control"></td>
</tr>

<tr>
  <td>Post Graduation</td>
  <td><input class="form-control" placeholder="Year"></td>
  <td><input class="form-control" placeholder="University"></td>
  <td><input class="form-control" placeholder="Total"></td>
  <td><input class="form-control" placeholder="Obtained"></td>
  <td><input class="form-control" placeholder="Grade"></td>
  <td><input type="file" class="form-control"></td>
</tr>

<tr>
  <td>Other</td>
  <td><input class="form-control" placeholder="Year"></td>
  <td><input class="form-control" placeholder="University"></td>
  <td><input class="form-control" placeholder="Total"></td>
  <td><input class="form-control" placeholder="Obtained"></td>
  <td><input class="form-control" placeholder="Grade"></td>
  <td><input type="file" class="form-control"></td>
</tr>

</tbody>
</table>
</div>

<!-- ================= DECLARATION ================= -->
<div class="form-check mt-4">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">
I hereby declare that all the information provided above is true and correct.
</label>
</div>

<!-- ================= SUBMIT ================= -->
<div class="text-center mt-4">
<button type="submit" class="btn btn-primary btn-lg px-5">
Submit Admission Form
</button>
</div>

</form>

</div>
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