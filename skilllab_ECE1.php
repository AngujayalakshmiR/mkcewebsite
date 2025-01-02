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

    /* Slider Container */
    .slider {
        position: relative;
        max-width: 600px;
        margin: auto;
        overflow: hidden;
        border: 2px solid #ddd;
    }

    /* Images */
    .slides {
        display: none;
    }

    .slider img {
        width: 100%;
        height: auto;
    }

    /* Title Overlay */
    .title {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
        text-align: center;
        width: 90%;
        font-size: 1.2rem;
    }

    /* Next and Previous Buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        font-size: 18px;
    }

    .prev {
        left: 0;
    }

    .next {
        right: 0;
    }

    /* Dots (for navigation) */
    .dots {
        text-align: center;
        margin-top: 10px;
    }

    .dot {
        height: 10px;
        width: 10px;
        margin: 0 5px;
        background-color: #bbb;
        display: inline-block;
        border-radius: 50%;
        cursor: pointer;
    }

    .active-dot {
        background-color: #717171;
    }
</style>

<section class="hero-section">
    <h1>RF & VLSI Design Hub</h1>
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
            <strong>Name of the Hub:</strong><br> RF & VLSI Design
        </div>
        <div class="info-card">
            <strong>Name of the trainer:</strong> <br>Dr.P.Jeyakumar
        </div>
        <div class="info-card">
            <strong>No of students involved:</strong><br> 30
        </div>
        <div class="info-card">
            <strong>Technology Trained:</strong> Radio Frequency & Antenna Design, Fabrication & Testing, VLSI Design &
            Verification, Internet of Things, Product Development
        </div>
    </div>

    <div class="website">
        Website: <a href="https://jktechsolutionsconsultancy.in" class="website-link">jktechsolutionsconsultancy.in</a>
    </div>
</div>

<div class="section">
    <h2>Objective</h2>
    <p style="line-height: 2.8;">
        To Develop hands-on expertise in RF and VLSI technology through practical experimentation in the skill lab.
        Enhance proficiency using advanced software tools like Ansys HFSS, LTSpice and measurement instruments for
        characterizing RF and VLSI circuits and systems.
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
    <h2>Hub Outcomes</h2>
    <!-- Carousel -->
    <div class="slider">
        <!-- Slides with images and titles -->
        <div class="slides">
            <<img src="rf1.jpg" alt="Image 1">
                <div class="title">Best Ansys Project Award-2023</div>
        </div>

        <div class="slides">
            <img src="rf2.jpg" alt="Image 2">
            <div class="title">Best Solid Work Project Award-2024</div>
        </div>

        <div class="slides">
            <img src="rf3.jpg" alt="Image 3">
            <div class="title">Hackfest-2023</div>
        </div>

        <div class="slides">
            <<img src="rf1.jpg" alt="Image 1">
                <div class="title">Intelligent Innovators Hackathon (12H)-2023
                    Coimbatore</div>
        </div>

        <div class="slides">
            <img src="rf2.jpg" alt="Image 2">
            <div class="title">SRM University Global Product Development-2023</div>
        </div>

        <div class="slides">
            <img src="rf3.jpg" alt="Image 3">
            <div class="title">Electric Vehicle Innovation Challenge-2023
                (Startup Contest-JK Tech solutions & Consultancy)</div>
        </div>

        <div class="slides">
            <<img src="rf1.jpg" alt="Image 1">
                <div class="title">India Mobile Congress -2023(New Delhi)</div>
        </div>

        <div class="slides">
            <img src="rf2.jpg" alt="Image 2">
            <div class="title">NIT Internship</div>
        </div>

        <div class="slides">
            <img src="rf3.jpg" alt="Image 3">
            <div class="title">Axiscades Internship</div>
        </div>

        <!-- Add more slides as needed -->

        <!-- Next and Previous Buttons -->
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
    </div>

    <!-- Dots (for indicating the current slide) -->
    <div class="dots">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <!-- Add more dots as per number of slides -->
    </div>
</div>

<script>
    let slideIndex = 0;
    const slides = document.getElementsByClassName("slides");
    const dots = document.getElementsByClassName("dot");

    // Show the first slide initially
    showSlides(slideIndex);

    // Function to show slides
    function showSlides(n) {
        if (n >= slides.length) {
            slideIndex = 0;
        }
        if (n < 0) {
            slideIndex = slides.length - 1;
        }
        // Hide all slides
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        // Remove active class from all dots
        for (let i = 0; i < dots.length; i++) {
            dots[i].classList.remove("active-dot");
        }
        // Show the selected slide and set active dot
        slides[slideIndex].style.display = "block";
        dots[slideIndex].classList.add("active-dot");
    }

    // Next/previous controls
    document.querySelector(".next").onclick = () => {
        slideIndex++;
        showSlides(slideIndex);
    }

    document.querySelector(".prev").onclick = () => {
        slideIndex--;
        showSlides(slideIndex);
    }

    // Dot controls
    for (let i = 0; i < dots.length; i++) {
        dots[i].onclick = () => {
            slideIndex = i;
            showSlides(slideIndex);
        }
    }

    // Auto slide every 5 seconds
    setInterval(() => {
        slideIndex++;
        showSlides(slideIndex);
    }, 5000);
</script>