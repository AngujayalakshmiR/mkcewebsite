<!DOCTYPE html>
<html lang="en">

<head>
  <link href="css/banner.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">


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
 

  <!--banner end -->


  <!--vision starts -->





        <div class="section">
          <h2 class="py-4">About Us</h2>
          <p>
            The Innovation and Entrepreneurship Development Cell (IEDC) at M.Kumarasamy College of Engineering is a dedicated platform committed to nurturing innovation, entrepreneurial spirit, and creativity among students and faculty. As a hub for aspiring entrepreneurs, we aim to bridge the gap between academic knowledge and practical application by fostering a culture of ideation, problem-solving, and sustainable development.
          </p>
        </div>
        <div class="section">
          <h2 class="py-4">Vision</h2>
          <p>
          To promote and foster entrepreneurial culture in the college by providing a platform for the students to pursue entrepreneurial activities
          </p>
        </div>

        <div class="section">
          <h2 class="py-4">Mission</h2>
          <p style="line-height: 2.8;">
            <span>&#128161;</span>To motivate the students to think creatively and generate innovative ideas from all fields of engineering<br>
            <span>&#128161;</span>To transform innovative ideas into socially and industrially relevant products<br>
            <span>&#128161;</span>To inculcate a culture of innovation driven entrepreneurship
          </p>
        </div>

        <div class="section">
          <h2 class="py-4">Services</h2>
          <p style="line-height: 2.8;">
          <span>&#127942;</span> is dedicated to helping the student community and graduate start-ups and, helps entrepreneurs turn ideas into viable businesses. It is located in Olympia Block, MKCE Campus which provides access to office space, business meeting hall, and other support services to new and budding start-ups, nurturing their development until they are ready to graduate onto an independent enterprise.<br>
          <span>&#127942;</span> The IEDC provides seed funding of up to ₹1 lakh for technology-oriented, innovative business ideas from students and faculty members. It encourages participation in various contests such as the Smart India Hackathon and other product development activities. The IEDC offers comprehensive mentoring and support to mobilize funds, create market access, enhance managerial skills, and more.
        </p>
        </div>
        

        <div class="section">
          <div class="outcome-grid">
            <div class="outcome-card" style="text-align: justify;">
              <p class="student-name">Incubation Facilities</p>
              <ul style="text-align: justify;">
              <li>For eligible applicants, we provide access to office equipment, including PCs, laptop access points, phones, and standard office furniture.</li>
              </ul>
            </div>
            <div class="outcome-card" style="text-align: justify;">
              <p class="student-name">Mentor Network</p>
              <ul style="text-align: justify;">
                <li>Our quarterly reviews monitor your progress and ensure you have the right support you need.</li>
              </ul>
            </div>
            <div class="outcome-card" style="text-align: justify;">
              <p class="student-name">Networking</p>
              <ul style="text-align: justify;">
                <li>Informative sessions designed to connect our community of entrepreneurs. The sessions provide excellent opportunities to promote your business and gain information about start-up resources.</li>
              </ul>
            </div>
            <div class="outcome-card" style="text-align: justify;">
              <p class="student-name">Access to MKCE Intelligence</p>
              <ul style="text-align: justify;">
                <li>Establish relationships and gather inspiration from other businesses, students, alumni, and expert technical faculties from MKCE.</li>
              </ul>
            </div>
          </div>
        </div>



  <!--vision end 



  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
  <script src="js/script.js"></script>
  <script src="js/custom.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>


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