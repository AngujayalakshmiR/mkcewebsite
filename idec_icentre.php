<div class="section">
    <h2 class="py-4">Objective</h2>
    <p style="line-height: 2.8;">
    The MKC Incubation Centre, approved in 2020, and supported by MSME, actively facilitates product development by providing resources, mentorship, and funding opportunities for innovative ideas. Through initiatives like the MSME Idea Hackathon, the center has supported projects such as the Machine Learning-based Fully Automated Agriculture Crop Seeding, Monitoring, and Fertilizing Robot by Mr. R. Kamalesh and the Integrated e-Service for Plumbing, Electrical, and Carpentry Works by Mr. M. Sarankumar. These projects, approved under theme-based innovation programs, exemplify how the center nurtures incubatees by aligning their ideas with industrial and societal needs. By leveraging state-of-the-art facilities and expert guidance, the MKC Incubation Centre ensures that innovative concepts are transformed into market-ready products, contributing to entrepreneurship and economic development.</p>
</div>

<div class="image-gallery">
    <div class="image-container">
        <img src="1.jpg" alt="Image 1" class="image" id="image1">
    </div>
    <div class="image-container">
        <img src="2.jpg" alt="Image 2" class="image" id="image2">
    </div>
    <div class="image-container">
        <img src="3.jpg" alt="Image 3" class="image" id="image3">
    </div>
    <div class="image-container">
        <img src="4.jpg" alt="Image 4" class="image" id="image4">
    </div>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .image-gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);  /* 4 columns in 1 row */
        gap: 30px;  /* Increased the gap between images */
        width: 90%;  /* Adjust width to suit your design */
        margin: 0 auto;
    }

    .image-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 350px;  /* Adjusted height of the images */
        border-radius: 12px; /* Slightly more rounded corners */
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2); /* Light shadow for container */
        transition: box-shadow 0.3s ease;
        transform: scale(1);  /* Default scale */
        transition: transform 0.3s ease;
    }

    .image-container:hover {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
        transform: scale(1.05);  /* Slight zoom effect on container hover */
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease, filter 0.3s ease;
        border-radius: 12px; /* Rounded corners for the images */
    }

    .image-container img:hover {
        transform: scale(1.1);  /* Enlarges the image */
        filter: brightness(1.2); /* Brightens the image */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4); /* Adds shadow effect on the image itself */
    }
</style>