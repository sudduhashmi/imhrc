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



  <style>
    :root{
      --accent1:#6c5ce7;   /* purple */
      --accent2:#00b894;   /* green */
      --card:#ffffff;
      --muted:#98a0b3;
    }
   /* ===== Colorful Booking Form ===== */
.form-section{
  background: linear-gradient(180deg, #ffffff 0%, #f8faff 100%);
  border-radius: 18px;
  padding: 26px;
  box-shadow: 0 15px 50px rgba(20,30,80,0.08);
  border: 1px solid rgba(13,110,253,0.08);
}

/* Heading */
.form-section h4{
  font-weight: 700;
  background: linear-gradient(90deg, #6f42c1, #0d6efd);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Labels */
.form-section .form-label{
  font-weight: 600;
  color: #475569;
}

/* Inputs */
.form-section .form-control,
.form-section .form-select{
  border-radius: 12px;
  border: 1px solid #dde3f0;
  padding: 11px 14px;
  transition: all .25s ease;
}

.form-section .form-control:focus,
.form-section .form-select:focus{
  border-color: #6f42c1;
  box-shadow: 0 0 0 3px rgba(111,66,193,0.15);
}

/* Mode Switch */
#modeLabel{
  font-weight: 700;
  color: #0d6efd;
}

.form-check-input{
  width: 42px;
  height: 22px;
  cursor: pointer;
}

.form-check-input:checked{
  background-color: #198754;
  border-color: #198754;
}

/* Slots Section */
#slotsGrid .slot-btn{
  border-radius: 14px;
  padding: 12px 0;
  font-weight: 600;
  font-size: 14px;
  background: #ffffff;
  transition: all .25s ease;
}

#slotsGrid .slot-btn:hover{
  transform: translateY(-4px);
  box-shadow: 0 8px 20px rgba(13,110,253,0.15);
}

/* Selected Slot */
#slotsGrid .slot-btn.active{
  background: linear-gradient(90deg, #6f42c1, #0d6efd);
  color: #fff;
  border: none;
  box-shadow: 0 10px 30px rgba(13,110,253,0.3);
}

/* Booked Slot */
#slotsGrid .slot-btn.booked{
  background: #f1f5f9;
  color: #9ca3af;
  cursor: not-allowed;
}

#slotsGrid .slot-btn.booked::after{
  content: "Booked";
  top: -10px;
  right: -8px;
  background: linear-gradient(90deg, #ff4d4d, #ff7676);
  font-size: 11px;
  padding: 3px 8px;
  border-radius: 10px;
}

/* Selected Slot Text */
#selectedSlotText{
  background: linear-gradient(90deg,#e0e7ff,#f0f9ff);
  padding: 6px 14px;
  border-radius: 999px;
  font-size: 13px;
  color: #1e3a8a;
}

/* Buttons */
#proceedBtn{
  background: linear-gradient(90deg, #6f42c1, #0d6efd);
  border: none;
  border-radius: 14px;
  font-weight: 700;
  padding: 13px;
  transition: all .3s ease;
}

#proceedBtn:hover{
  transform: translateY(-2px);
  box-shadow: 0 14px 35px rgba(13,110,253,0.35);
}

#resetBtn{
  border-radius: 14px;
  font-weight: 600;
}
/* ========== Doctor List Card ========== */
.doctor-list-card{
  background: linear-gradient(180deg,#ffffff 0%,#f8faff 100%);
  border-radius: 20px;
  padding: 22px;
  box-shadow: 0 18px 50px rgba(15,23,42,0.08);
  border: 1px solid rgba(13,110,253,0.08);
}

/* Heading */
.doctor-list-card h5{
  font-weight: 800;
  background: linear-gradient(90deg,#0d6efd,#6f42c1);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* ========== Doctor List Items ========== */
#doctorList .doctor-item{
  display: flex;
  gap: 14px;
  align-items: center;
  padding: 12px;
  border-radius: 14px;
  transition: all .3s ease;
  cursor: pointer;
  background: #fff;
}

#doctorList .doctor-item:hover{
  background: linear-gradient(90deg,rgba(13,110,253,.08),rgba(111,66,193,.05));
  transform: translateX(6px);
}

#doctorList .doctor-item.active{
  background: linear-gradient(90deg,#0d6efd,#6f42c1);
  color: #fff;
}

#doctorList .doctor-item.active small,
#doctorList .doctor-item.active div{
  color: #e0e7ff !important;
}

/* Avatar in list */
#doctorList img{
  border-radius: 12px;
  border: 2px solid #e2e8f0;
}

/* ========== Profile Card ========== */
.profile-card{
  border-radius: 18px;
  padding: 22px;
  background: linear-gradient(180deg,#ffffff,#f1f5ff);
  box-shadow: 0 15px 45px rgba(2,6,23,0.08);
  position: relative;
  overflow: hidden;
}

/* Top gradient strip */
.profile-card::before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:70px;
  background: linear-gradient(90deg,#0d6efd,#6f42c1);
  opacity:.1;
}

/* Profile Avatar */
.profile-card .avatar{
  width: 90px;
  height: 90px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid #fff;
  box-shadow: 0 10px 28px rgba(13,110,253,0.25);
}

/* Doctor Name */
#profileName{
  font-weight: 800;
  color: #0f172a;
}

/* Role */
#profileRole{
  font-size: 14px;
  color: #475569;
}

/* Expertise & Session Chips */
.chip{
  display: inline-block;
  padding: 7px 14px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 600;
  background: linear-gradient(90deg,#e0e7ff,#f0f9ff);
  color: #1e3a8a;
  margin-right: 8px;
  margin-bottom: 6px;
}

/* Fee Badge */
.badge-fee{
  background: linear-gradient(90deg,#22c55e,#16a34a);
  padding: 8px 16px;
  border-radius: 14px;
  font-size: 16px;
  font-weight: 800;
  color: #fff;
  box-shadow: 0 10px 25px rgba(34,197,94,.35);
}

/* Language List */
#langList{
  font-weight: 600;
  color: #334155;
}

/* About Section */
.profile-card small{
  font-size: 12px;
  font-weight: 700;
  color: #64748b;
}

#aboutText{
  line-height: 1.6;
}

/* Responsive Spacing */
@media(max-width: 768px){
  .profile-card{
    margin-top: 20px;
  }
}

    .app-wrap{ padding:40px 0; }
    .doctor-list-card{ background: linear-gradient(90deg,#fff,#fbfdff); border-radius:14px; padding:18px; box-shadow: 0 8px 30px rgba(30,41,59,0.06); }
    .doctor-item{ cursor:pointer; transition:transform .12s ease, box-shadow .12s ease; border-radius:10px; padding:10px; }
    .doctor-item:hover{ transform: translateY(-4px); box-shadow: 0 6px 22px rgba(16,24,40,0.06); }
    .doctor-item.active{ background: linear-gradient(90deg, rgba(108,92,231,0.12), rgba(0,184,148,0.06)); border-left:4px solid var(--accent1); }
    .profile-card{ border-radius:12px; padding:22px; background:linear-gradient(180deg,#ffffff,#fbfdff); box-shadow: 0 10px 40px rgba(16,24,40,0.04); }
    .avatar{ width:96px; height:96px; border-radius:50%; object-fit:cover; border:4px solid #fff; box-shadow: 0 6px 18px rgba(16,24,40,0.06); }
    .chip{ display:inline-block; padding:6px 10px; border-radius:999px; background:#f1f5f9; color:var(--muted); font-size:13px; margin-right:8px; }
    .slot-btn{ display:block; border-radius:10px; padding:10px 12px; text-align:center; border:1px solid rgba(31,41,55,0.06); background:#fff; cursor:pointer; user-select:none; }
    .slot-btn:hover{ transform: translateY(-3px); }
    .slot-btn.active{ background: linear-gradient(90deg,var(--accent1),#2b8cff); color:#fff; border-color:transparent; box-shadow: 0 8px 30px rgba(44,77,238,0.14); }
    .slot-btn.booked{ background:#f3f4f6; color:#9aa0ad; cursor:not-allowed; position:relative; }
    .slot-btn.booked::after{ content:"Booked"; position:absolute; top:-10px; right:-8px; background:#ff6b6b; color:white; font-size:11px; padding:3px 7px; border-radius:7px; }
    .badge-fee{ font-weight:700; font-size:16px; padding:8px 12px; border-radius:10px; background:linear-gradient(90deg,var(--accent2),#4ade80); color:#fff; }
    .form-section{ border-radius:12px; padding:18px; background:linear-gradient(180deg,#fff,#fbfdff); box-shadow: 0 8px 24px rgba(16,24,40,0.04); }
    @media (max-width:991px){ .doctor-list{ order:2 } .profile-col{ order:1 } }
  </style>

  <div class="container app-wrap">
    <div class="row g-4">
      <!-- LEFT: Doctor list & profile -->
      <div class="col-lg-4">
        <div class="doctor-list-card">
          <h5 class="mb-3">Choose Doctor</h5>

          <div id="doctorList" class="list-group mb-3"></div>

          <div class="profile-card mt-2" id="profileCard">
            <!-- Filled by JS -->
            <div class="d-flex gap-3 align-items-center">
              <img id="profileAvatar" src="https://via.placeholder.com/150" class="avatar" alt="avatar">
              <div>
                <h5 id="profileName" class="mb-0">Select a doctor</h5>
                <div class="text-muted" id="profileRole">Clinical Psychologist</div>
                <div class="mt-2" id="experienceText"><small class="text-muted">Experience: —</small></div>
              </div>
            </div>

            <div class="mt-3">
              <div class="chip" id="expertiseChip">—</div>
              <div class="chip" id="sessionChip">Mon-Fri · 10:00–18:00</div>
            </div>

            <hr class="my-3">

            <div class="d-flex justify-content-between align-items-center">
              <div>
                <small class="text-muted">Consultation Fee</small>
                <div class="mt-1"><span id="feeText" class="badge-fee">—</span></div>
              </div>
              <div class="text-end">
                <small class="text-muted">Languages</small>
                <div id="langList"><small class="text-muted">—</small></div>
              </div>
            </div>

            <div class="mt-3">
              <small class="text-muted">About</small>
              <p id="aboutText" class="mb-0 text-muted" style="font-size:14px">Select doctor to see full profile.</p>
            </div>
          </div>

        </div>
      </div>

      <!-- RIGHT: Booking form -->
      <div class="col-lg-8">
        <div class="form-section">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Book Appointment</h4>
            <div class="text-end">
              <small class="text-muted">Mode</small>
              <div>
                <div class="form-check form-switch d-inline-block ms-2">
                  <input class="form-check-input" type="checkbox" id="modeSwitch">
                  <label class="form-check-label ms-2" for="modeSwitch" id="modeLabel">Online</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Patient Name</label>
              <input id="inputName" type="text" class="form-control" placeholder="Your name">
            </div>

            <div class="col-md-6">
              <label class="form-label">Phone / Email</label>
              <input id="inputContact" type="text" class="form-control" placeholder="Phone or email">
            </div>

            <div class="col-md-3">
              <label class="form-label">Age</label>
              <input id="inputAge" type="number" class="form-control" min="0" placeholder="e.g., 28">
            </div>

            <div class="col-md-9">
              <label class="form-label">Problem / Notes</label>
              <input id="inputReason" type="text" class="form-control" placeholder="Brief description">
            </div>

            <div class="col-md-4">
              <label class="form-label">Select date to book appointment</label>
              <input id="dateInput" type="date" class="form-control">
            </div>

            <div class="col-md-4">
              <label class="form-label">Language</label>
              <select id="langSelect" class="form-select">
                <option>English</option>
                <option>Hindi</option>
                <option>Both</option>
              </select>
            </div>

            <div class="col-md-4">
              <label class="form-label">Appointment Type</label>
              <select id="appointmentType" class="form-select">
                <option value="video">Online</option>
                <option value="visit">Offline</option>
              </select>
            </div>
          </div>

          <hr class="my-4">

          <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
              <h6 class="mb-0">Available Time Slots</h6>
              <small class="text-muted">Select a date to see slots</small>
            </div>
            <div class="text-end">
              <small class="text-muted">Selected Slot</small>
              <div id="selectedSlotText" style="font-weight:700">—</div>
            </div>
          </div>

          <div id="slotsGrid" class="row g-2">
            <!-- Slots inserted by JS -->
          </div>
          <div class="py-3">
               <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"
             style="color:#5aff00; font-weight:600; text-decoration:underline;">
            Read Terms & Conditions
          </a>
          </div>
          <div class=" d-flex gap-2">
            <button id="proceedBtn" class="btn btn-primary flex-grow-1">Proceed →</button>
            <button id="resetBtn" class="btn btn-outline-secondary">Reset</button>
          </div>

          <small class="text-muted d-block mt-3">Note: Booked slots show as <span class="badge bg-light text-muted">Booked</span> and cannot be selected. To connect to a backend, fetch `bookedSlots` from API and push new bookings on Proceed.</small>

        </div>
      </div>
    </div>
  </div>

  <!-- Terms & Conditions Modal -->
<div class="modal fade" id="termsModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="border-radius:12px; overflow:hidden;">

      <!-- Header -->
      <div class="modal-header" style=" color:#fff;">
        <h5 class="modal-title fw-bold">Terms & Conditions</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
   <div class="modal-body" style="max-height:520px; overflow-y:auto; padding:30px; background:#f8f9fa;">

  <h5 class="fw-bold mb-4">Terms & Conditions</h5>

  <!-- 1 -->
  <h6 class="fw-bold text-dark mt-3">1. Scope of Services</h6>
  <p><strong>Sanseeb Health & Edutech Pvt Ltd</strong> ("Company") provides the following services:</p>
  <ul style="padding-left:20px;">
    <li>Counselling & mental healthcare services (online/offline)</li>
    <li>Educational programmes, internships, and training (online/offline)</li>
  </ul>

  <!-- 1.2 -->
  <h6 class="fw-bold text-dark mt-4">1.2 Payment</h6>
  <ul style="padding-left:20px;">
    <li>All fees are quoted in Indian Rupees (INR) and are exclusive of applicable taxes.</li>
    <li>Payments are due in full at the time of booking or registration.</li>
    <li>The Company reserves the right to suspend or cancel access if payment is not received.</li>
  </ul>

  <!-- 1.3 -->
  <h6 class="fw-bold text-dark mt-4">1.3 Bookings & Confirmation</h6>
  <ul style="padding-left:20px;">
    <li>Bookings are confirmed only upon successful payment via Razorpay.</li>
    <li>You will receive an email/SMS confirmation including service details and dates.</li>
  </ul>

  <!-- 1.4 -->
  <h6 class="fw-bold text-dark mt-4">1.4 User Obligations</h6>
  <ul style="padding-left:20px;">
    <li>You agree to provide accurate personal and billing information.</li>
    <li>You are responsible for maintaining the confidentiality of any account credentials.</li>
  </ul>

  <hr class="my-4">

  <!-- 2 -->
  <h6 class="fw-bold text-dark mt-3">2. Refund & Cancellation Policy</h6>

  <h6 class="fw-semibold mt-3">2.1 Free Cancellation Window</h6>
  <ul style="padding-left:20px;">
    <li>Training or academic fees once paid are <strong>non-refundable</strong>.</li>
    <li>Counselling sessions cancelled within 24 hours of scheduling will receive a <strong>50% refund</strong>.</li>
  </ul>

  <h6 class="fw-semibold mt-3">2.2 Late Cancellation / No-Show</h6>
  <p>
    Cancellations made within 24 hours of the scheduled service time or failure to attend the session ("No-Show")
    are strictly <strong>non-refundable</strong>.
  </p>

  <h6 class="fw-semibold mt-3">2.3 Refund Timeline</h6>
  <ul style="padding-left:20px;">
    <li>Approved refunds will be processed within <strong>7–10 business days</strong>.</li>
    <li>Refunds will be credited to the original payment method used.</li>
  </ul>

  <hr class="my-4">

  <!-- 3 -->
  <h6 class="fw-bold text-dark mt-3">3. Shipping & Delivery Policy</h6>
  <p class="fst-italic">(Applies only to physical materials, certificates, or course kits)</p>

  <h6 class="fw-semibold mt-3">3.1 Mode of Delivery</h6>
  <ul style="padding-left:20px;">
    <li>Digital services (e-certificates, e-materials) are delivered via email upon completion.</li>
    <li>Physical materials are dispatched via courier to the registered address.</li>
  </ul>

  <h6 class="fw-semibold mt-3">3.2 Delivery Timeline</h6>
  <ul style="padding-left:20px;">
    <li>Minimum: 7 business days</li>
    <li>Maximum: 15 business days</li>
    <li>Tracking details will be shared via email/SMS after dispatch</li>
  </ul>

  <h6 class="fw-semibold mt-3">3.3 Delays</h6>
  <p>
    While we strive to meet timelines, delays due to logistics, operational issues,
    or force majeure events may occur. You will be notified in case of delays.
  </p>

  <hr class="my-4">

  <!-- 4 -->
  <h6 class="fw-bold text-dark mt-3">4. Privacy Policy</h6>

  <h6 class="fw-semibold mt-3">4.1 Information We Collect</h6>
  <ul style="padding-left:20px;">
    <li>Personal Data: Name, email, phone number, billing address</li>
    <li>Usage Data: Session logs, device information, IP address</li>
  </ul>

  <h6 class="fw-semibold mt-3">4.2 How We Use Your Data</h6>
  <ul style="padding-left:20px;">
    <li>To process payments and confirm bookings</li>
    <li>To deliver services and educational programs</li>
    <li>To send service-related notifications, updates, and marketing communications (opt-out available)</li>
  </ul>

  <h6 class="fw-semibold mt-3">4.3 Data Sharing</h6>
  <p>We do <strong>not</strong> sell or rent your personal data. Information may be shared only with:</p>
  <ul style="padding-left:20px;">
    <li>Razorpay (for payment processing)</li>
    <li>Authorized service providers (e.g., courier partners)</li>
    <li>Regulatory or legal authorities when required by law</li>
  </ul>

  <hr class="my-4">

  <!-- Acceptance -->
  <h6 class="fw-bold text-dark mt-3">5. Acceptance</h6>
  <p>
    By proceeding with the booking, registration, or payment, you confirm that you have read,
    understood, and agreed to all the Terms & Conditions outlined above.
  </p>

</div>


      <!-- Footer -->
      <div class="modal-footer" style="background:#fff;">
        <button type="button" class="btn btn-dark px-4" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
  <!-- Bootstrap & JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    /***************
     * Demo Data
     * Replace / integrate these with your backend API calls
     ***************/
    const doctors = [
      {
        id: 'doc1',
        name: 'Dr. Sajid Kazmi',
        role: 'Clinical Psychologist, M.Phil (Clinical Psychology)',
        experience: '6 Years',
        expertise: 'CBT, Depression, Anxiety',
        languages: ['English','Hindi'],
        fee: { online: 1200, offline: 1500 },
        sessions: 'Mon-Fri · 10:00 AM - 6:00 PM',
        about: 'Experienced clinical psychologist specializing in CBT and addiction recovery. Focus on practical therapy and long-term improvement.',
        avatar: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=60'
      },
      {
        id: 'doc2',
        name: 'Dr. Manjinder Sandhu',
        role: 'Consultant Psychiatrist, MD',
        experience: '12 Years',
        expertise: 'Psychiatry, Mood Disorders',
        languages: ['English'],
        fee: { online: 1500, offline: 2000 },
        sessions: 'Tue-Sat · 11:00 AM - 7:00 PM',
        about: 'Senior psychiatrist with extensive experience in mood and behavioral disorders. Uses evidence-based medical and therapy approaches.',
        avatar: 'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?auto=format&fit=crop&w=150&q=60'
      },
      {
        id: 'doc3',
        name: 'Dr. Ayesha Khan',
        role: 'Counselor & Therapist',
        experience: '4 Years',
        expertise: 'Stress, Relationships, Youth Counseling',
        languages: ['English','Hindi'],
        fee: { online: 800, offline: 1000 },
        sessions: 'Mon, Wed, Fri · 09:00 AM - 2:00 PM',
        about: 'Focus on young adults and relationship counseling with practical coping techniques and mindful approaches.',
        avatar: 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=150&q=60'
      }
    ];

    // Simulated booked slots object: { "<doctorId>": { "YYYY-MM-DD": ["10:00","11:00"] } }
    const bookedSlots = {
      doc1: {
        '2025-12-10': ['10:00', '13:00'],
        '2025-12-11': ['11:00']
      },
      doc2: {
        // empty
      },
      doc3: {
        '2025-12-10': ['09:00']
      }
    };

    // Default slot template (can be per-doctor too)
    const allSlots = ['09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00'];

    /***************
     * UI Hooks & Init
     ***************/
    const doctorListEl = document.getElementById('doctorList');
    const profileName = document.getElementById('profileName');
    const profileRole = document.getElementById('profileRole');
    const profileAvatar = document.getElementById('profileAvatar');
    const experienceText = document.getElementById('experienceText');
    const expertiseChip = document.getElementById('expertiseChip');
    const sessionChip = document.getElementById('sessionChip');
    const feeText = document.getElementById('feeText');
    const langList = document.getElementById('langList');
    const aboutText = document.getElementById('aboutText');

    const dateInput = document.getElementById('dateInput');
    const slotsGrid = document.getElementById('slotsGrid');
    const selectedSlotText = document.getElementById('selectedSlotText');
    const modeSwitch = document.getElementById('modeSwitch');
    const modeLabel = document.getElementById('modeLabel');
    const appointmentType = document.getElementById('appointmentType');
    const proceedBtn = document.getElementById('proceedBtn');
    const resetBtn = document.getElementById('resetBtn');

    let selectedDoctor = null;
    let selectedMode = 'online'; // or 'offline'
    let selectedSlot = null;
    let selectedDate = null;

    // initialize date input to today
    (function initDate(){
      const today = new Date();
      const yyyy = today.getFullYear();
      const mm = String(today.getMonth()+1).padStart(2,'0');
      const dd = String(today.getDate()).padStart(2,'0');
      dateInput.value = `${yyyy}-${mm}-${dd}`;
      selectedDate = dateInput.value;
    })();

    // render doctor list
    function renderDoctorList(){
      doctorListEl.innerHTML = '';
      doctors.forEach(doc=>{
        const item = document.createElement('div');
        item.className = 'doctor-item d-flex align-items-center gap-3 mb-2';
        item.dataset.id = doc.id;
        item.innerHTML = `
          <img src="${doc.avatar}" width="54" height="54" style="border-radius:10px;object-fit:cover">
          <div class="flex-grow-1">
            <div style="font-weight:700">${doc.name}</div>
            <div style="font-size:13px;color:var(--muted)">${doc.role}</div>
          </div>
          <div style="text-align:right">
            <div style="font-weight:700;color:var(--accent1)">₹${doc.fee.online}</div>
            <div style="font-size:12px;color:var(--muted)">online</div>
          </div>
        `;
        item.addEventListener('click', ()=>selectDoctor(doc.id));
        doctorListEl.appendChild(item);
      });
    }

    // select doctor
    function selectDoctor(id){
      selectedDoctor = doctors.find(d=>d.id===id);
      // highlight active
      document.querySelectorAll('.doctor-item').forEach(el=>{
        el.classList.toggle('active', el.dataset.id === id);
      });

      // populate profile
      profileName.textContent = selectedDoctor.name;
      profileRole.textContent = selectedDoctor.role;
      profileAvatar.src = selectedDoctor.avatar;
      experienceText.innerHTML = `<small class="text-muted">Experience: ${selectedDoctor.experience}</small>`;
      expertiseChip.textContent = selectedDoctor.expertise;
      sessionChip.textContent = selectedDoctor.sessions;
      feeText.textContent = `₹${selectedDoctor.fee[selectedMode]}`;
      langList.innerHTML = selectedDoctor.languages.join(', ');
      aboutText.textContent = selectedDoctor.about;

      // reset selection state
      selectedSlot = null;
      selectedSlotText.textContent = '—';
      renderSlots();
    }

    // render slots grid for current selectedDoctor and date
    function renderSlots(){
      slotsGrid.innerHTML = '';
      if(!selectedDoctor){
        slotsGrid.innerHTML = '<div class="col-12 text-muted">Select a doctor to view slots.</div>';
        return;
      }
      if(!selectedDate){
        slotsGrid.innerHTML = '<div class="col-12 text-muted">Choose a date first.</div>';
        return;
      }

      // fetch booked for this doc & date (simulate API call)
      const docBooked = (bookedSlots[selectedDoctor.id] && bookedSlots[selectedDoctor.id][selectedDate]) || [];

      allSlots.forEach(t=>{
        const col = document.createElement('div');
        col.className = 'col-sm-4 col-md-3';
        const btn = document.createElement('div');
        btn.className = 'slot-btn';
        btn.textContent = timeToDisplay(t);
        // if booked
        if(docBooked.includes(t)){
          btn.classList.add('booked');
        } else {
          btn.addEventListener('click', ()=> {
            // if appointment type restrictions needed, apply here
            selectSlot(t, btn);
          });
        }
        col.appendChild(btn);
        slotsGrid.appendChild(col);
      });
    }

    // convert "09:00" to "09:00 AM" style
    function timeToDisplay(t){
      const [hh,mm] = t.split(':').map(Number);
      const ampm = hh >= 12 ? 'PM' : 'AM';
      let h = hh % 12; if(h === 0) h = 12;
      return `${String(h).padStart(2,'0')}:${String(mm).padStart(2,'0')} ${ampm}`;
    }

    function selectSlot(time, btnEl){
      if(!selectedDoctor){ alert('Select a doctor first'); return; }
      if(!selectedDate){ alert('Select a date first'); return; }
      // clear previous
      document.querySelectorAll('.slot-btn').forEach(b=>b.classList.remove('active'));
      btnEl.classList.add('active');
      selectedSlot = time;
      selectedSlotText.textContent = `${timeToDisplay(time)} · ${selectedDate}`;
    }

    // mode toggle
    modeSwitch.addEventListener('change', ()=>{
      selectedMode = modeSwitch.checked ? 'offline' : 'online';
      modeLabel.textContent = modeSwitch.checked ? 'Offline' : 'Online';
      // update fee display
      if(selectedDoctor){
        feeText.textContent = `₹${selectedDoctor.fee[selectedMode]}`;
      }
      // change appointmentType default
      if(selectedMode === 'offline'){
        appointmentType.value = 'visit';
      } else {
        appointmentType.value = 'video';
      }
    });

    // date change
    dateInput.addEventListener('change', (e)=>{
      selectedDate = e.target.value;
      selectedSlot = null;
      selectedSlotText.textContent = '—';
      renderSlots();
    });

    // proceed button -> simulate booking (client-side)
    proceedBtn.addEventListener('click', ()=>{
      const name = document.getElementById('inputName').value.trim();
      const contact = document.getElementById('inputContact').value.trim();
      const age = document.getElementById('inputAge').value;
      const reason = document.getElementById('inputReason').value.trim();
      const lang = document.getElementById('langSelect').value;
      const appType = document.getElementById('appointmentType').value;

      if(!selectedDoctor){ alert('Please select a doctor.'); return; }
      if(!name || !contact){ alert('Enter name and contact.'); return; }
      if(!selectedDate){ alert('Choose a date.'); return; }
      if(!selectedSlot){ alert('Select a time slot.'); return; }

      // double-check slot still free (in case of race condition; here simulated)
      const docBooked = (bookedSlots[selectedDoctor.id] && bookedSlots[selectedDoctor.id][selectedDate]) || [];
      if(docBooked.includes(selectedSlot)){
        alert('Sorry, this slot was just booked. Please choose another slot.');
        renderSlots();
        return;
      }

      // simulate booking: push to bookedSlots (in real app: POST to API)
      if(!bookedSlots[selectedDoctor.id]) bookedSlots[selectedDoctor.id] = {};
      if(!bookedSlots[selectedDoctor.id][selectedDate]) bookedSlots[selectedDoctor.id][selectedDate] = [];
      bookedSlots[selectedDoctor.id][selectedDate].push(selectedSlot);

      // show confirmation (replace with payment flow if needed)
      const feeAmount = selectedDoctor.fee[selectedMode];
      const summary = `
Booking Confirmed!
Doctor: ${selectedDoctor.name}
Mode: ${selectedMode.toUpperCase()} (${appType})
Date: ${selectedDate}
Time: ${timeToDisplay(selectedSlot)}
Patient: ${name} (Age: ${age})
Contact: ${contact}
Fee: ₹${feeAmount}
Note: ${reason || '—'}
`;
      alert(summary);

      // reset UI selection and re-render slots so the slot shows as booked
      selectedSlot = null;
      selectedSlotText.textContent = '—';
      renderSlots();

      // TODO: send booking payload to backend API here
      // fetch('/api/book', { method:'POST', body: JSON.stringify({ doctorId:selectedDoctor.id, date:selectedDate, time:selectedSlot, ...}) })
    });

    // reset button
    resetBtn.addEventListener('click', ()=>{
      document.getElementById('inputName').value = '';
      document.getElementById('inputContact').value = '';
      document.getElementById('inputAge').value = '';
      document.getElementById('inputReason').value = '';
      selectedSlot = null;
      selectedSlotText.textContent = '—';
      // keep date & selected doctor
      renderSlots();
    });

    // initial render
    renderDoctorList();
    // select first doctor by default for quick demo
    setTimeout(()=>selectDoctor(doctors[0].id), 80);
  </script>


    <!-- bottom CTA -->

 
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