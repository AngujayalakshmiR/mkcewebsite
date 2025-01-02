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
        text-align: center;
        margin-top: 15px;
        font-size: 16px;
    }

    .website-link {
        color: #3498db;
        text-decoration: none;
        font-weight: bold;
    }

    .website-link:hover {
        color: #2980b9;
        text-decoration: underline;
    }

    .image-container {
            margin-bottom: 30px;
            text-align: center;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease-in-out;
        }
        .image-container img:hover {
            transform: scale(1.05);
        }
        .image-title {
            margin-top: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
        }

</style>

<section class="hero-section">
    <h1>ElectraForge Innovation Hub</h1>
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
            <strong>Name of the Hub:</strong><br> ElectraForge Innovation Hub
        </div>
        <div class="info-card">
            <strong>Name of the trainer:</strong> <br>Dr. K. Karthikeyan
        </div>
        <div class="info-card">
            <strong>No of students involved:</strong><br> 30
        </div>
        <div class="info-card">
            <strong>Software / Hardware Tool trained:</strong> SIEMENS Mentor Graphics Xpedition, HyperLynx and ANSYS HFSS
        </div>
    </div>

    <div class="website">
        Website: <a href="https://jktechsolutionsconsultancy.in" class="website-link">jktechsolutionsconsultancy.in</a>
    </div>
</div>

<div class="section">
    <h2>Objective</h2>
    <p>
    <ul style="line-height: 2.8;">
        <li>&bull; Understand the fundamentals of PCB design and manufacturing processes.</li>
        <li>&bull; Utilize CAD software for schematic capture, layout design, and analysis.</li>
        <li>&bull; Design PCBs considering factors such as signal integrity, power distribution, thermal management, and
            manufacturability.</li>
        <li>&bull; Analyze and optimize PCB layouts for signal integrity and electromagnetic compatibility (EMC).</li>
        <li>&bull; Apply industry-standard design rules and guidelines for PCB layout and routing.</li>
        <li>&bull; Interpret and utilize simulation and analysis tools for verifying PCB designs.</li>
        <li>&bull; Identify common design errors and implement best practices for PCB design.</li>
        <li>&bull; Demonstrate proficiency in generating manufacturing files and documentation for PCB fabrication and
            assembly.</li>
    </ul>
    </p>
</div>

<div class="section">
    <h2>Mission</h2>
    <p style="line-height: 2.8;">
        <span>&#128161;</span> To motivate the students to think creatively and generate innovative ideas from RF and
        VLSI engineering.<br>
        <span>&#128161;</span> To transform innovative ideas into socially and industrially relevant products.<br>
        <span>&#128161;</span> To inculcate a culture of innovation drive and the entrepreneurship.
    </p>
</div>

<div class="section">
    <h2 style="line-height: 2.8;">Hub Outcomes</h2>
    <div class="showcase-container">
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card outcome-card1">
          <div class="card-header">
            Placements
          </div>
          <div class="card-body">
            <ul class="placements" style="line-height: 2.3;">
              <li>Students got placed Top companies like MaxEye Technologies, SIENNAECAD Private Ltd, Real Tech system, etc.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card outcome-card1">
          <div class="card-header">
            Research
          </div>
          <div class="card-body" style="padding: 20px;">
                    <div style="display: flex; justify-content: space-around; text-align: center;">
                        <div style="flex: 1; padding: 10px; background-color: #f8f9fa; border-radius: 8px; margin-right: 10px;">
                            <h3 style="font-size: 24px; color: #007bff; margin-bottom: 5px;">2</h3>
                            <p style="font-size: 14px; color: #6c757d; margin-bottom: 0;">Patents</p>
                        </div>
                        <div style="flex: 1; padding: 10px; background-color: #f8f9fa; border-radius: 8px;">
                            <h3 style="font-size: 24px; color: #28a745; margin-bottom: 5px;">3</h3>
                            <p style="font-size: 14px; color: #6c757d; margin-bottom: 0;">Publications</p>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="eih1.jpg" alt="Best Analytical Project Award" class="img-fluid">
                    <div class="image-title">Best Analytical Project Award (1st Prize, Cash Prize Rs.10000)</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="eih2.jpg" alt="Placement achievements" class="img-fluid">
                    <div class="image-title">Placement achievements</div>
                </div>
            </div>
        </div>

</div>
