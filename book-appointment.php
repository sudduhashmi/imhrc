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
      .appointment-card:hover {
  transform: translateY(-6px);
}

.btn-appt {
  background: linear-gradient(90deg, #0061ff, #3a8df5);
  font-size: 1.1rem;
  transition: 0.3s;
}

.btn-appt:hover {
  background: linear-gradient(90deg, #004ccc, #2a7ce0);
}

.info-box {
  background: #f6f9ff;
  padding: 15px;
  border-left: 5px solid #0061ff;
  border-radius: 10px;
  display: flex;
  gap: 10px;
  align-items: center;
}

.info-box i {
  font-size: 26px;
  color: #0061ff;
}

.fee-box {
  border-top: 1px dashed #ddd;
  padding-top: 15px;
}
.form-control {
    /* height: 50px; */
    color: #324cc5;
    border: 1px solid #e2d8d8;
    background-color: transparent;
    border-radius: 0;
    font-size: 16px;
    /* padding: 10px 20px; */
    width: 100%;
}
.slot-btn{
  width:100%;
  padding:12px;
  border-radius:10px;
  border:1px solid #ddd;
  background:#f8f9fa;
  font-weight:600;
  cursor:pointer;
}

.slot-btn.active{
  background:#0d6efd;
  color:#fff;
  border-color:#0d6efd;
}

.slot-btn.booked{
  background:#e9ecef;
  color:#999;
  cursor:not-allowed;
}

    </style>
</head>

<body>


   <?php include 'includes/header.php'; ?>
   	<!-- Start Page Title Area -->
<div class="page-title-wave">
  <div class="container">
    <h2>Book Appointment</h2>
  </div>

  <svg class="wave" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#ffffff" fill-opacity="1" 
      d="M0,64L48,90.7C96,117,192,171,288,170.7C384,171,480,117,576,85.3C672,53,768,43,864,74.7C960,107,1056,181,1152,192C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,
      1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</div>
<section class="book-appt py-5">
  <div class="container">

  

    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="appointment-card p-5 bg-white shadow-lg rounded-4">

<form>

  <!-- MODE -->
  <div class="mb-3">
    <label class="form-label fw-bold">Consultation Mode</label>
    <select class="form-control form-control-lg" id="modeSelect" name="consultation_mode">
      <option value="online">Online</option>
      <option value="offline">Offline</option>
    </select>
  </div>

  <!-- BASIC INFO -->
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label fw-bold">Full Name</label>
      <input type="text" name="name" class="form-control form-control-lg"
             placeholder="Enter full name" required>
    </div>

    <div class="col-md-6">
      <label class="form-label fw-bold">Mobile Number</label>
      <input type="tel" name="mobile" class="form-control form-control-lg"
             placeholder="Enter mobile number" required>
    </div>
  </div>

  <!-- SERVICE -->
  <div class="mt-3">
    <label class="form-label fw-bold">Select Service</label>
    <select class="form-control form-control-lg" id="serviceSelect" required>
      <option value="">-- Select Service --</option>
      <option value="1000">Early Intervention – ₹1000</option>
      <option value="1200">Speech Therapy – ₹1200</option>
      <option value="1500">Occupational Therapy – ₹1500</option>
      <option value="1800">Psychological Assessment – ₹1800</option>
      <option value="2000">Counselling & Psychotherapy – ₹2000</option>
    </select>
  </div>

  <!-- DATE -->
  <div class="mt-3">
    <label class="form-label fw-bold">Select Date</label>
    <input type="date" id="dateInput" class="form-control form-control-lg" required>
  </div>

  <!-- TIME SLOTS -->
  <div class="mt-4">
    <div class="d-flex justify-content-between mb-2">
      <strong>Select Time Slot</strong>
      <span>Selected: <b id="selectedSlot">—</b></span>
    </div>

    <div class="row g-2" id="slotsGrid"></div>
    <input type="hidden" name="time_slot" id="slotInput">
  </div>

  <!-- ONLINE INFO -->
  <div id="onlineBox" class="alert alert-info mt-4">
    <i class="bi bi-camera-video"></i>
    Online session via Zoom / Google Meet. Link shared after payment.
  </div>

  <!-- OFFLINE INFO -->
  <div id="offlineBox" class="alert alert-warning mt-4 d-none">
    <i class="bi bi-geo-alt"></i>
    Offline visit at <b>Sanseeb Health Center, Delhi</b>. Please arrive early.
  </div>

  <!-- FEE -->
  <div class="d-flex justify-content-between align-items-center mt-4">
    <span class="fw-bold fs-5">Total Payable</span>
    <span class="fw-bold fs-4 text-primary" id="feeText">₹0</span>
  </div>

  <button class="btn btn-primary w-100 py-3 rounded-pill mt-4">
    Proceed to Pay
  </button>

</form>

        </div>
      </div>
    </div>
  </div>
</section>

<script>
// DATE FIX (NO PAST DATE)
const dateInput = document.getElementById("dateInput");
const today = new Date();
const yyyy = today.getFullYear();
const mm = String(today.getMonth()+1).padStart(2,'0');
const dd = String(today.getDate()).padStart(2,'0');
const todayStr = `${yyyy}-${mm}-${dd}`;
dateInput.min = todayStr;
dateInput.value = todayStr;


// MODE CHANGE
const modeSelect = document.getElementById("modeSelect");
const onlineBox = document.getElementById("onlineBox");
const offlineBox = document.getElementById("offlineBox");

modeSelect.onchange = () => {
  if(modeSelect.value === "online"){
    onlineBox.classList.remove("d-none");
    offlineBox.classList.add("d-none");
  }else{
    offlineBox.classList.remove("d-none");
    onlineBox.classList.add("d-none");
  }
};


// PRICE
const serviceSelect = document.getElementById("serviceSelect");
const feeText = document.getElementById("feeText");

serviceSelect.onchange = () => {
  feeText.innerText = serviceSelect.value ? "₹"+serviceSelect.value : "₹0";
};


// SLOTS
const slots = ['10:00 AM','11:30 AM','02:00 PM','04:00 PM'];
const booked = ['11:30 AM'];

const slotsGrid = document.getElementById("slotsGrid");
const selectedSlot = document.getElementById("selectedSlot");
const slotInput = document.getElementById("slotInput");

function loadSlots(){
  slotsGrid.innerHTML='';
  selectedSlot.innerText='—';
  slotInput.value='';

  slots.forEach(t=>{
    const col=document.createElement('div');
    col.className='col-6 col-md-3';

    const btn=document.createElement('button');
    btn.type='button';
    btn.className='slot-btn';

    if(booked.includes(t)){
      btn.classList.add('booked');
      btn.disabled=true;
      btn.innerText=t;
    }else{
      btn.innerText=t;
      btn.onclick=()=>{
        document.querySelectorAll('.slot-btn').forEach(b=>b.classList.remove('active'));
        btn.classList.add('active');
        selectedSlot.innerText=t;
        slotInput.value=t;
      };
    }

    col.appendChild(btn);
    slotsGrid.appendChild(col);
  });
}

loadSlots();
dateInput.onchange = loadSlots;
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