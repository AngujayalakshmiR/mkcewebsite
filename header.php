<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>M.Kumarasamy College of Engineering, Karur :: MKCE</title>
  <link href="img/favicon.ico" rel="icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap1.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header2.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    /* Default styles for the div */
    .k {
      width: 100%;
    }

    .k2 {
      width: 10%;
    }

    /* Styles for screens up to 767px width (mobile devices) */
    @media screen and (max-width: 767px) {
      .k {
        width: 100%;
      }
    }

    @media (max-width: 768px) {
      .k2 {
        display: none;
      }
    }

    /*=============== GOOGLE FONTS ===============*/
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap");

    /*=============== VARIABLES CSS ===============*/
    :root {
      --header-height: 3.5rem;

      /*========== Colors ==========*/
      /*Color mode HSL(hue, saturation, lightness)*/
      --black-color: hsl(220, 24%, 12%);
      --black-color-light: hsl(220, 24%, 15%);
      --black-color-lighten: hsl(220, 20%, 18%);
      --white-color: #fff;
      --body-color: hsl(220, 100%, 97%);

      /*========== Font and typography ==========*/
      /*.5rem = 8px | 1rem = 16px ...*/
      --body-font: "Montserrat", sans-serif;
      --normal-font-size: .938rem;

      /*========== Font weight ==========*/
      --font-regular: 400;
      --font-semi-bold: 600;

      /*========== z index ==========*/
      --z-tooltip: 10;
      --z-fixed: 100;
    }

    /*========== Responsive typography ==========*/
    @media screen and (min-width: 1024px) {
      :root {
        --normal-font-size: 1rem;
      }
    }

    /*=============== BASE ===============*/
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      background-color: var(--body-color);
    }

    ul {
      list-style: none;
      /* Color highlighting when pressed on mobile devices */
      /*-webkit-tap-highlight-color: transparent;*/
    }

    a {
      text-decoration: none;
    }

    /*=============== REUSABLE CSS CLASSES ===============*/
    .container {
      max-width: 1120px;
      margin-inline: 1.5rem;
    }

    /*=============== HEADER ===============*/
    .header {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      background-color: hsl(216.2, 74.6%, 13.9%);
      box-shadow: 0 2px 16px hsla(220, 32%, 8%, .3);
      z-index: var(--z-fixed);
    }


    /*=============== Menu bar ===============*/



    #container {
      position: relative;
      width: 100%;
      margin: 0 auto;
    }

    #container:after {
      content: "";
      display: block;
      clear: both;
      height: 0;
    }

    #menu {
      position: relative;
      float: left;
      width: 100%;
      padding: 0 20px;
      border-radius: 3px;
      box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.5),
        inset 0 -1px 0 rgba(0, 0, 0, 0.15), 0 1px 3px rgba(0, 0, 0, 0.15);
      background-image: linear-gradient(to top, #09203f 0%, #537895 100%);



      z-index: 9997;
    }

    #menu,
    #menu ul {
      list-style: none;
    }

    #menu>li {
      float: left;
      position: relative;
      border-right: 1px solid rgba(0, 0, 0, 0.1);
      box-shadow: 1px 0 0 rgba(255, 255, 255, 0.25);
      /* perspective: 1000px; */
    }

    #menu>li:first-child {
      border-left: 1px solid rgba(255, 255, 255, 0.25);
      box-shadow: -1px 0 0 rgba(0, 0, 0, 0.1), 1px 0 0 rgba(255, 255, 255, 0.25);
    }

    #menu a,
    #menu span {
      display: block;
      position: relative;
      z-index: 9998;
      padding: 13px 20px 13px 20px;
      text-decoration: none;
      color: white;
      line-height: 1;
      font-weight: 400;
      font-size: 16px;
      letter-spacing: -0.05em;
      background: transparent;

      transition: all 0.25s ease-in-out;
    }

    #menu>li:hover>a,
    #menu>li:hover>span {
      background: #333;
      color: rgba(0, 223, 252, 1);
      text-shadow: none;
    }

    #menu li ul {
      position: absolute;
      left: 0;
      z-index: 1;
      width: 250px;
      padding: 0;
      opacity: 0;
      visibility: hidden;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
      background: transparent;
      /* overflow: hidden; */
      transform-origin: 50% 0%;
      z-index: 10000;
      animation: swingdown 1s ease;
      animation-play-state: paused;
    }

    #menu li:hover ul {
      padding: 15px 0;
      background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
      opacity: 1;
      visibility: visible;
      box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.5);
      animation-play-state: running;
    }

    @keyframes swingdown {
      0% {
        opacity: 0.99999;
        transform: rotateX(90deg);
      }

      30% {
        transform: rotateX(-20deg) rotateY(5deg);
        animation-timing-function: ease-in-out;
      }

      65% {
        transform: rotateX(20deg) rotateY(-3deg);
        animation-timing-function: ease-in-out;
      }

      100% {
        transform: rotateX(0);
        animation-timing-function: ease-in-out;
      }
    }

    #menu li li a {
      padding-left: 15px;
      font-weight: 400;
      color: #ddd;
      text-shadow: none;
      border-top: dotted 1px transparent;
      border-bottom: dotted 1px transparent;
      transition: all 0.15s linear;
    }

    #menu li li a:hover {
      color: rgba(0, 223, 252, 1);
      border-top: dotted 1px rgba(255, 255, 255, 0.15);
      border-bottom: dotted 1px rgba(255, 255, 255, 0.15);
      background: rgba(0, 223, 252, 0.02);
    }

    /* Add this to your existing CSS file or create a new one */
    .mobile-menu-toggle {
      display: none;
      font-size: 24px;
      cursor: pointer;
    }

    @media only screen and (max-width: 768px) {
      #menu {
        display: none;
        padding: 20px;
        /* Adjust spacing as needed */
      }

      .mobile-menu-toggle {
        display: block;
        text-align: right;
        padding: 15px;
        background-image: linear-gradient(to top, #09203f 0%, #537895 100%);
        color: #fff;
      }

      .toggle-group {
        width: 100%;
      }

      .toggle-group>a {
        width: 100%;
        box-sizing: border-box;
      }
    }

    /* Add this CSS for mobile responsiveness */
    @media only screen and (max-width: 768px) {
      body {
        padding: 15px;
        /* Adjust padding for smaller screens */
      }

      #container {
        width: 100%;
        /* Make the container full width */
      }

      #menu {
        float: none;
        width: 100%;
        padding: 0;
        border-radius: 0;
        box-shadow: none;
        background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
      }

      #menu>li {
        float: none;
        position: static;
        border: none;
        box-shadow: none;
      }

      #menu>li:first-child {
        border: none;
        box-shadow: none;
      }

      #menu a {
        padding: 10px;
        font-size: 14px;
        /* Increase font size for better readability */
      }

      #menu>li:hover>a {
        background: transparent;
        color: rgba(0, 223, 252, 1);
      }

      #menu li ul {
        position: static;
        width: 100%;
        padding: 0;
        opacity: 1;
        visibility: visible;
        border-radius: 0;
        box-shadow: none;
        background: #333;
        overflow: visible;
        transform-origin: 50% 50%;
      }

      #menu li:hover ul {
        padding: 10px 0;
        background: #333;
        box-shadow: none;
        animation: none;
      }

      @keyframes swingdown {
        /* Remove the animation for smaller screens */
      }

      #menu li li a {
        padding-left: 15px;
        font-weight: 400;
        color: #ddd;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        transition: none;
      }

      #menu li li a:hover {
        color: rgba(0, 223, 252, 1);
        background: rgba(0, 223, 252, 0.02);
      }
    }

    .wide-submenu {
      width: 600px;
      /* Adjust width as needed */
    }

    .bg-dark2 {
      background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(11, 77, 78, 1) 53%, rgba(9, 60, 121, 1) 95%);
    }

    #payments-sub-menu {
      display: none;
    }

    .payments-menu-group:hover #payments-sub-menu {
      display: block;
    }
  
      .dropdown-toggle-no-caret::after {
        display: none !important;
    }

    .dropdown-menu {
      background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); /* Set the background color for the submenu */
    }

    .dropdown-item {
        color: #fff; /* Set the text color for the submenu items */
    }

    .dropdown-item:hover {
      color: rgba(0, 223, 252, 1);
        background: rgba(0, 223, 252, 0.02);
    }
  
  
  
  </style>


    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-07SD87Q0T2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-07SD87Q0T2');
</script>




</head>

<body>

  <div class="container-fluid bg-dark2 px-5 d-none d-lg-block">
    <div class="row gx-0">
      <div class="col-lg-2 text-center text-lg-start mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center" style="height: 45px;">
          <small class="me-3 text-light"><b>TNEA CODE - <span style="color:yellow">2608</b></span></small>
        </div>
      </div>
      <div class="col-lg-2 text-center text-lg-start">
        <div class="d-inline-flex align-items-center" style="height: 45px;">
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/mkcekarur/"><i class="fab fa-twitter fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/mkcekarur/"><i class="fab fa-facebook-f fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/in/mkce"><i class="fab fa-linkedin-in fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/mkcekarur"><i class="fab fa-instagram fw-normal"></i></a>
          <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UCuyMkqr6jH6nB-6C_jLccEg/featured"><i class="fab fa-youtube fw-normal"></i></a>
        </div>
      </div>

      <div class="col-lg-8 text-end text-lg-end">
        <div class="d-inline-flex align-items-center" style="height: 45px;">

          <a href="iqac"><small class="me-3 text-light"><b>IQAC</b></span></small></a>
          <a href="sdg"><small class="me-3 text-light"><b>SDG</b></span></small></a>
          <a href="http://alumni.mkce.ac.in/"><small class="me-3 text-light"><b>ALUMNI</b></span></small> </a>
          <a href="https://mkce.ac.in/blog/"><small class="me-3 text-light"><b>BLOG</b></span></small></a>
          <a href="career"><small class="me-3 text-light"><b>CAREERS</b></span></small></a>
          
          <div class="dropdown">
                <a href="#" class="dropdown-toggle dropdown-toggle-no-caret" id="onlineFeesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <small class="me-3 text-light"><b>ONLINE FEES PAYMENT</b></small>
                </a>
                <ul class=" dropdown-menu" aria-labelledby="onlineFeesDropdown">
                    <li><a class="dropdown-item" href="https://easypay.axisbank.co.in/easyPay/makePayment?mid=NDg0MjY%3D">New Students</a></li>
                    <li><a class="dropdown-item" href="https://easypay.axisbank.co.in/easyPay/makePayment?mid=NDg0NDY%3D">Existing Students</a></li>
                </ul>
          </div>
          <a href="contact-us"><small class="me-3 text-light"><b><span style="color:yellow">CONTACT US</b></span></small></a>

        </div>
      </div>

    </div>
  </div>

  <!-- Topbar Start -->


  <!-- Topbar End -->

   <div class="container-fluid d-none d-md-block">
    <div class="row py-4">
        <div class="col-sm-10 k"><img class="background" src="img/mkce-header1.png" alt="Header Image"></div>
    </div>
</div>

<div class="container d-block d-md-none">
    <div class="row py-4">
        <div class="col-12 k"><img class="background" src="img/mkce-header1.png" alt="Header Image"></div>
    </div>
</div>


  <div id="container">
    <div class="mobile-menu-toggle">&#9776;</div>
    <ul id="menu">
      <li><a href="index">Home</a></li>
      <li class="toggle-group">
        <a href="#">About Us</a>
        <ul class="sub-menu">
          <li><a href="vision">Vision, Mission & Quality Policy</a></li>
          <li><a href="management">Management</a></li>
          <li><a href="#">Statutory body</a></li>
          <li><a href="organogram">Organogram</a></li>
        </ul>
      </li>

      <li><a href="admission">Admission</a></li>


      <li class="toggle-group">
        <a href="#">Academics</a>
        <ul class="sub-menu">
          <li><a href="acm">Academic Council</a></li>
          <li><a href="regulation">Regulation</a></li>
          <li><a href="ac.php">Academic Calendar</a></li>
          <li><a href="#">Student Feedback</a></li>
          <li><a href="https://www.camsmkce.in">Curriculum Feedback</a></li>
          <li><a href="https://www.camsmkce.in/home.aspx">Examination</a></li>
        </ul>
      </li>

      <li class="toggle-group">
        <a href="#">Departments</a>
        <ul class="sub-menu" style="width:400px">
          <li><a href="AI&DS">Artificial Intelligence and Data Science</a></li>
          <li><a href="AI&ML">Artificial Intelligence and Machine Learning</a></li>
          <li><a href="Civil">Civil Engineering</a></li>
          <li><a href="csbs">Computer Science and Business Systems</a></li>
          <li><a href="CSE">Computer Science and Engineering</a></li>
          <li><a href="EEE">Electrical and Electronics Engineering</a></li>
          <li><a href="ECE">Electronics and Communication Engineering</a></li>
          <li><a href="IT">Information Technology</a></li>
          <li><a href="mech">Mechanical Engineering</a></li>
          <li><a href="Freshmen">Freshmen Engineering</a></li>
          <li><a href="mba">Master of Business Administration</a></li>
          <li><a href="mca">Master of Computer Applications</a></li>
        </ul>
      </li>



      <li class="toggle-group">
        <a href="#">Student Affairs</a>
        <ul class="sub-menu">
          <li><a href="club">Clubs</a></li>
          <li><a href="cm">Committees</a></li>
          <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSenonZNlKukMEGPERbAukfqqH2_PMtBWr_V1HZ1aCs9PCEQ1w/viewform">Online Grievance Redressal</a></li>
          <li><a href="cfl">Center for Foreign Languages</a></li>
          <li><a href="cce">Center for Competitive Examination</a></li>
          <li class="payments-menu-group">
            <a class="d-flex justify-content-between align-items-center p-0" id="payments-menu-toggle" href="#">
              <span>Payments</span>
              <i class="ri-arrow-drop-down-line" style="margin-right: 25px;"></i>
            </a>
            <ul id="payments-sub-menu">
              <li><a href="https://easypay.axisbank.co.in/easyPay/makePayment?mid=NDg0MjY%3D" target="blank">New Students</a></li>
              <li><a href="https://easypay.axisbank.co.in/easyPay/makePayment?mid=NDg0NDY%3D" target="blank">Existing Students</a></li>
            </ul>
          </li>

        </ul>
      </li>

      <li><a href="placement">Placement</a></li>

      <li><a href="research">Research</a></li>


      <li class="toggle-group">
        <a href="#">Life @ MKCE</a>
        <ul class="sub-menu">
          <li><a href="campustour">Campus Tour</a></li>
          <li><a href="general-facilities">General Facilities</a></li>
          <li><a href="library.php">Library</a></li>
          <li><a href="hostel.php">Hostel</a></li>
          <li><a href="transport">Transport</a></li>
          <li><a href="cgallery">Gallery</a></li>
        </ul>
      </li>
      <li><a href="ar">Accreditation & Ranking</a></li>
      <li><a href="iedc.php">IEDC</a></li>
    </ul>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function() {
      function isMobile() {
        return window.innerWidth <= 768;
      }

      // Hamburger menu toggle
      $(".mobile-menu-toggle").click(function() {
        $(".toggle-group > .sub-menu").slideUp();
        $("#menu").slideToggle();
      });

      // Add a click event to each main heading on mobile
      $(".toggle-group > a").click(function(e) {
        if (isMobile()) {
          e.preventDefault();
          // Toggle the visibility of the corresponding sub-menu
          $(this).siblings(".sub-menu").slideToggle();

          // Close other open sub-menus
          $(".toggle-group > a").not(this).siblings(".sub-menu").slideUp();
        }
      });

      // Add hover effect on desktop
      $(".toggle-group").hover(
        function() {
          if (!isMobile()) {
            // Show the corresponding sub-menu on hover
            $(this).find(".sub-menu").slideDown();
          }
        },
        function() {
          if (!isMobile()) {
            // Hide the corresponding sub-menu when not hovering
            $(this).find(".sub-menu").slideUp();
          }
        }
      );
      const paymentMenuElement = $("#payments-menu-toggle");
      paymentMenuElement.on("click", (e) => {
        const paymentMenuSubMenu = $("#payments-sub-menu");
        paymentMenuSubMenu.css("display") === "none" ? paymentMenuSubMenu.css("display", "block") : paymentMenuSubMenu.css("display", "none")
      });
      // Hide the menu initially on mobile
      if (isMobile()) {
        $("#menu").hide();
        $("#payments-sub-menu").hide()
      }
    });
  </script>


  <!-- Logo Image end-->





  <!-- <script src="lib/wow/wow.min.js"></script> -->
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Template Javascript -->
  <!-- <script src="js/main.js"></script>

  <script src="js/script.js"></script> -->
  <script>
    /*=============== SHOW MENU ===============*/
    const showMenu = (toggleId, nav2Id) => {
      const toggle = document.getElementById(toggleId),
        nav2 = document.getElementById(nav2Id)

      toggle.addEventListener('click', () => {
        // Add show-menu class to nav2 menu
        nav2.classList.toggle('show-menu')

        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle('show-icon')
      })
    }

    showMenu('nav2-toggle', 'nav2-menu')
  </script>


</body>

</html>