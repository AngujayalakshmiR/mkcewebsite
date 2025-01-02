<!DOCTYPE html>
<html lang="en">

<head>
  <link href="css/banner.css" rel="stylesheet">
  <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->


  <style>
    .jus {
      text-align: justify;
    }

    @media (min-width: 768px) {
      img {
        width: 50%;
      }
    }

    .owe {
      padding-right: 30px;
      padding-left: 10px;
    }


    .imageban {
      width: 100%;
      height: 40vh;
      background-position: center;
      background-size: cover;
      background-image: url("img/banner.png");
    }


    @import url("https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;600;700&display=swap");

    :root {
      --color-bg: #f0f0f0;
      --color-text: #333;
      --color-primary: #4361ee;
      --color-secondary: #3a0ca3;
      --color-accent1: #7209b7;
      --color-accent2: #f72585;
      --color-accent3: #4cc9f0;
    }

    /* body {
  font-family: "Lexend", sans-serif;
  margin: 0;
  padding: 0;
  background-color: var(--color-bg);
  color: var(--color-text);
  overflow-x: hidden;
} */

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    .tabs {
      display: flex;
      justify-content: center;
      margin-bottom: 2rem;
    }

    .tab-button {
      background: var(--color-primary);
      color: white;
      border: none;
      padding: 1rem 2rem;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .tab-button:hover,
    .tab-button.active {
      background: var(--color-secondary);
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }


    .wave {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      overflow: hidden;
      line-height: 0;
      transform: rotate(180deg);
    }

    .wave svg {
      position: relative;
      display: block;
      width: calc(100% + 1.3px);
      height: 150px;
    }

    .wave .shape-fill {
      fill: var(--color-bg);
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 4.5rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .section {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .section:hover {
      transform: translateY(-5px);
    }

    h2 {
      color: var(--color-primary);
      font-size: 2rem;
      margin-bottom: 1.5rem;
    }

    .hub-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .info-card {
      background: linear-gradient(135deg,
          var(--color-accent1),
          var(--color-accent2));
      color: white;
      padding: 1.5rem;
      border-radius: 15px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-card:hover {
      transform: translateY(-5px) rotate(2deg);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .outcome-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
    }

    .outcome-card {
      background: white;
      border-radius: 15px;
      padding: 1.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 2px solid var(--color-accent3);
      position: relative;
      overflow: hidden;
    }

    .outcome-card::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg,
          transparent,
          var(--color-accent3),
          transparent);
      transform: rotate(45deg);
      transition: 0.5s;
      opacity: 0;
    }

    .outcome-card:hover::before {
      opacity: 1;
    }

    .outcome-card:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .student-name {
      font-weight: bold;
      color: var(--color-secondary);
      margin-bottom: 1rem;
      font-size: 1.2rem;
    }

    .outcome-grid ul {
      list-style-type: none;
      padding-left: 0;
    }

    .outcome-grid li {
      margin-bottom: 0.75rem;
      position: relative;
      padding-left: 20px;
    }

    .outcome-grid li::before {
      content: "➤";
      color: var(--color-accent2);
      position: absolute;
      left: 0;
    }

    @media (max-width: 768px) {

      .hub-info,
      .outcome-grid {
        grid-template-columns: 1fr;
      }
    }

    @keyframes float {
      0% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }

      100% {
        transform: translateY(0px);
      }
    }

    .floating {
      animation: float 6s ease-in-out infinite;
    }

    .main-content {
      max-width: 1600px;
      padding: 0;
      margin-left: auto;
      margin-right: auto;
      padding-left: 2rem;
      padding-right: 2rem;
    }


    .hero-section {
      background: linear-gradient(45deg,
          var(--color-primary),
          var(--color-secondary));
      color: white;
      text-align: center;
      padding: 4rem 2rem;
      position: relative;
      overflow: hidden;
      margin: -2rem -2rem 2rem -2rem;
    }

    .hero-section h1 {
      font-size: 3rem;
      margin-bottom: 4.5rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      color: white;
    }
  </style>
</head>

<body>
  <?php include("header.php"); ?>

  <div class="imageban">
    <div class="over2">
      <div class="row justify-content-center ">
        <div class="col-8 d-flex justify-content-center kh">
          <h2 style="color:white;">Skill Lab</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-8 d-flex justify-content-center">
          <ul class="breadcrumb">
            <li><a href="index.php" style="text-align:center;">Home</a></li>
            <li>Skill Lab</li>
          </ul>
        </div>
      </div>
      <div>
      </div>

    </div>
  </div>

  <!--banner end -->


  <!--vision starts -->

  <div class="container-fluid wow fadeInUp">
    <div class="container-fluid py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">MKCE</h5>
        <h1 class="mb-0">Skill Lab</h1>
      </div>
    </div>


    <!-- Organogram Start -->
    <div class="container-fluid py-4">
      <div class="tabs">
        <button class="tab-button active" onclick="openTab(event, 'hub1')">
          IAH
        </button>
        <button class="tab-button" onclick="openTab(event, 'hub2')">
          RF & VLSI
        </button>
        <button class="tab-button" onclick="openTab(event, 'hub3')">
        EIH
        </button>
        <button class="tab-button" onclick="openTab(event, 'hub4')">
          TIH
        </button>
      </div>
    </div>
    <div class="main-content">
      <div id="hub1" class="tab-content active">
        <?php include 'skilllab_EEE.php'; ?>
      </div>

      <div id="hub2" class="tab-content">
        <?php include 'skilllab_ECE1.php'; ?>
      </div>

      <div id="hub3" class="tab-content">
      <?php include 'skilllab_ECE2.php'; ?>
      </div>

      <div id="hub4" class="tab-content">
        <?php include 'skilllab_TIH.php'; ?>
      </div>
    </div>
    <!-- Organogram End -->


  </div>


  <!--vision end -->


  <?php include("footer.html"); ?>



  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="js/bootstrap.min.js"></script>  Bootstrap framework -->
  <!-- <script src="js/script.js"></script>
  <script src="js/custom.js"></script> -->

  <!-- Template Javascript
  <script src="js/main.js"></script> -->


  <script>
    function openTab(evt, tabName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tab-content");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tab-button");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>

</body>

</html>