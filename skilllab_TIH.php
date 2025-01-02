<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
  .outcome-card1 {
    background: white;
    border-radius: 15px;
    padding: 1.5rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    /* border: 2px solid var(--color-accent3); */
    position: relative;
    overflow: hidden;
  }

  .outcome-card1::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    transition: 0.5s;
    opacity: 0;
  }

  .outcome-card1:hover::before {
    opacity: 1;
  }

  .outcome-card1:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
  }

  .card-header {
    background-color: #007bff;
    color: white;
    font-weight: bold;
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
  }

  .card-body ul {
    padding-left: 0;
    list-style-type: none;
  }

  .card-body li {
    margin-bottom: 10px;
    padding-left: 30px;
    position: relative;
  }

  .card-body li::before {
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 0;
    color: #007bff;
  }

  .placements li::before {
    content: '\f0b1';
    /* briefcase icon */
  }

  .projects li::before {
    content: '\f0ae';
    /* tasks icon */
  }

  .projects ul li::before {
    content: '\f0a4';
    /* hand-point-right icon */
  }

  .website {
    text-align: center; /* Center-aligns the content */
    margin-top: 15px; /* Adds space above the website link */
    font-size: 16px; /* Sets the font size for the website section */
  }

  .website-link {
    color: #3498db; /* Blue color */
    text-decoration: none; /* Remove underline */
    font-weight: bold; /* Bold text */
  }

  .website-link:hover {
    color: #2980b9; /* Darker blue on hover */
    text-decoration: underline; /* Underline on hover */
  }
</style>

<section class="hero-section">
  <h1>Technology Innovation Hub</h1>
  <div class="wave">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
        class="shape-fill"></path>
    </svg>
  </div>
</section>
<div class="section floating">
  <h2 class="py-4">Hub Information</h2>
  <div class="hub-info">
    <div class="info-card">
      <strong>Name of the Hub:</strong><br> Technology Innovation Hub
    </div>
    <div class="info-card">
      <strong>Name of the trainer:</strong> <br>Mr.K.Kalaiarasan
    </div>
    <div class="info-card">
      <strong>No of students involved:</strong><br> 34
    </div>
    <div class="info-card">
      <strong>Technology Trained:</strong> Full Stack, Mobile Application and Immersive Technology
    </div>
  </div>

  <div class="website">
    Website: <a href="https://tih.mkce.ac.in" class="website-link">tih.mkce.ac.in</a>
  </div>
</div>

<div class="section">
  <h2>Objective</h2>
  <p style="line-height: 2.8;">
    To provide a space to students to explore their passion, collaborate with their peers, and develop the skills they
    need to succeed in their chosen field.
    Bridging the gap between academia and industry, and facilitating the transfer of technology, knowledge, and
    resources.
  </p>
</div>

<div class="section">
  <h2>Mission</h2>
  <p style="line-height: 2.8;">
    <span>&#128161;</span> To promote innovation and entrepreneurship among students by providing a nurturing
    environment that encourages ideation, experimentation, and problem-solving.<br>
    <span>&#128161;</span> To facilitate interdisciplinary research and foster cross-functional collaborations,
    encouraging the exchange of ideas and expertise among different engineering disciplines.<br>
    <span>&#128161;</span> To continuously adapt and evolve in response to emerging technologies and industry trends,
    bridging the gap between academia and industry, and facilitating the transfer of technology, knowledge, and
    resources.
  </p>


</div>

<div class="section">
  <h2>Hub Outcomes</h2>
  <div class="showcase-container">
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card outcome-card1">
          <div class="card-header">
            Placements
          </div>
          <div class="card-body">
            <ul class="placements">
              <li>Students got placed in MNCs like ZOHO, Codingmart, Musigma, etc.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card outcome-card1">
          <div class="card-header">
            Projects
          </div>
          <div class="card-body">
            <ul class="projects">
              <li>Completed 7+ projects for our college</li>
              <li style="line-height: 2.8;">Notable projects include:
                <ul>
                  <li>MKCE Website</li>
                  <li>MKCE Info Corner</li>
                  <li>MICBus</li>
                  <li>ITKM Management System</li>
                  <li>Complaint Management System</li>
                  <li>Institute Council Management</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>