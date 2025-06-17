<?php

include 'db_backup.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Savannatales</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="frontend/css/index.css">
</head>
<body>
   <div class="header">
      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16">
      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708"/>
      </svg> +254794178635</p>
      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
      <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
      <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
      </svg> petersila2002@gmail.com</p>
      <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
      <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3m0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4m2.646 1A4 4 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3z"/>
      <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0"/>
      </svg> P.O BOX 103 - 90125 Kikima</p>
      <p class="joinus"><a href="frontend/login.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
      <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
      </svg> JOIN US</a></p>
   </div>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
         <a class="navbar-brand" href="#"><img src="frontend/assets/logo.png" style="width: 100px; height: 100px" alt="logo"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="index.php">Home</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="frontend/destinations.php">Destinations</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="frontend/blogs.php">Blogs</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="frontend/aboutus.php">About us</a>
               </li>
               <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact Us
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="frontend/shop.php">Shop Here</a></li>
                  <li><a class="dropdown-item" href="frontend/plantrip.php">Plan Your Trip</a></li>
                  <li><a class="dropdown-item" href="frontend/gallery.php">Gallery</a></li>
                  <li><a class="dropdown-item" href="frontend/faqs.php">FAQs</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frontend/contactus.php">Contact Us</a></li>
               </ul>
               </li>
            </ul>
            <form class="d-flex" role="search">
               <input class="form-control me-2" id="searchinput" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" id="btnsearch" type="submit">Search</button>
            </form>
         </div>
      </div>
   </nav>

   <!-- WhatsApp Icon -->
   <a href="https://wa.me/254794178635?text=Hello!%20I%20have%20a%20query." 
      target="_blank" 
      class="whatsapp-icon" 
      title="Chat with us on WhatsApp">
      <span class="chat-text">Chat with us!</span>
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
   </a>


   <div class="hero">
      <div class="hero-content">
         <h1 class="anim"><b>Discover Margical Kenya:<br> Your Journey Begins Here</b></h1>
         <p class="anim">Your ultimate guide to discovering Kenya’s beauty and culture. Explore breathtaking landscapes, iconic wildlife, 
            and vibrant traditions. Plan your adventures with detailed attraction guides, travel tips, and local insights, 
            all in one seamless platform.
         </p>

         <button class="btn-explore anim" onclick="btnexplore"><b>EXPLORE MORE</b></button>
      </div>
      
   </div>

   <h2>Top Destinations</h2>
   <div class="top-dest">
      <div class="dest-card">
         <img src="assets/ocean-view.jpg" alt="">
         <h4>Beach, Ocean View</h4>
         <p>Explore the amazing coastal region of Kenya</p>
      </div>
      <div class="dest-card">
         <img src="assets/ani-migration.jpg" alt="">
         <h4>Animal Migration</h4>
         <p>Come and see the wildbeast migration from Maasai Mara in Kenya to Seregeti in Tanzania</p>
      </div>
      <div class="dest-card">
         <img src="assets/flamingo.jpg" alt="">
         <h4>Beautiful Flamingos</h4>
         <p>Explore the amazing Kenyan Rift Valley and get a chance to see these flamingos and hot water streams in Naivasha</p>
      </div>
   </div>

   <h2>Plan Your Trip</h2>
   <div class="plan-trip">
      <div class="trip-det">
         <div class="plan-sec">
            <h3>Custom Itineraries</h3>
            <p>Create your personalized travel plan with our itinerary builder. Select destinations, activities, and accommodations 
               tailored to your preferences. Whether you’re visiting for a day or a month, design the perfect trip with ease.
            </p>
         </div>
         <div class="plan-sec">
            <h3>Travel Essentials</h3>
            <p>Get all the information you need for a hassle-free journey, including visa requirements, packing tips, weather insights, 
               and transportation options. Plan ahead with our comprehensive travel resources.
            </p>
         </div>
         <div class="plan-sec">
            <h3>Explore Like a Local</h3>
            <p>
               Discover insider tips, hidden gems, and off-the-beaten-path experiences curated by local experts. 
               From cultural festivals to authentic cuisines, immerse yourself in Kenya’s unique charm beyond the tourist trail.
            </p>
         </div>
         <button class="btn-start" onclick="btnstartplan"><b>Start Planning</b></button>
         <button class="btn-rmore" onclick="btnreadmore"><b>Read More</b></button>
      </div>
      <img src="assets/nightmara.jpg" alt="">
   </div>

   <h2>Blogs</h2>
   <div class="blogs">
      <div class="blog-card">
         <img src="assets/hot-air-ballon.jpg" alt="">
          <!-- <video src="assets/jackal.mp4" autoplay loop muted controls></video> -->
         <h3><b>Soaring Over the Wild: Hot Air Balloon Safaris in the Maasai Mara</b></h3>
         <p>Experience the magic of the Maasai Mara from above! Glide over vast savannas, witness the Great Migration, 
            and spot wildlife in their natural habitat. A hot air balloon safari promises breathtaking views and memories to last a lifetime.
         </p>
      </div>
      <div class="blog-card">
         <img src="assets/seven-forks.jpg" alt="">
         <h3><b>The Seven Forks Waterfalls: Kenya’s Hidden Treasure</b></h3>
         <p>
            Explore the awe-inspiring Seven Forks Waterfalls, a cascade of beauty nestled in Kenya’s Tana River. 
            Discover the serenity of this natural wonder, perfect for nature lovers and adventure seekers. Uncover 
            the stories and secrets behind these magnificent falls.
         </p>
      </div>
   </div>

   <h2>Satisfied Travellers</h2>
   <div class="testimonials">
      <div class="cards">
         <div class="test-card none" id="card1">
            <h4>"A fantastic experience, promise to be back"</h4>
            <div class="card-prof">
               <img src="assets/jones.png" alt="">
               <div class="prof-info">
                  <p class="name">Cateh Muthesh</p>
                  <p class="descrip">Tourist</p>
               </div>
            </div>
         </div>
         <div class="center-test-card" id="card2">
            <h4>"A fantastic experience, promise to be back"</h4>
            <div class="card-prof">
               <img src="assets/jones.png" alt="">
               <div class="prof-info">
                  <p class="name">John Jones</p>
                  <p class="descrip">Tourist</p>
               </div>
            </div>
         </div>
         <div class="test-card none" id="card3">
            <h4>"A fantastic experience, promise to be back"</h4>
            <div class="card-prof">
               <img src="assets/jones.png" alt="">
               <div class="prof-info">
                  <p class="name">Jay James</p>
                  <p class="descrip">Tourist</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="trips">
      <h3>Start Your Trip By Planning</h3>
      <div class="trip-btn">
         <button class="btn-plan-trip" onclick="btnstartplan"><b>Start Planning</b></button>
         <button class="btn-saved" onclick="btnsavedplan"><b>My Saved Plans</b></button>
      </div>
      
   </div>

   <img src="assets/beach.jpg" class="imge">

   <script src="js/index.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <script>
      window.addEventListener('beforeunload', function () {
         navigator.sendBeacon('db_backup.php'); // Triggers backup on exit
      });
   </script>


</body>
<footer> 
   <div class="logo">
      <h2><i>SAVANNATALES</i></h2>
      <div class="social-icons">
         <ul>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
               <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
             </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
               <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
             </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
               <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
             </svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
               <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
             </svg></a>
         </ul>
      </div>
   </div>
   <div class="top-dest-fot">
      <h3>Top Destinations</h3>
      <ul>
         <li><a href="">Mombasa</a></li>
         <li><a href="">Maasai Mara</a></li>
         <li><a href="">Naivasha</a></li>
         <li><a href="">Mt Kenya</a></li>
      </ul>
   </div>
   <div class="our-socials">
      <h3>Our Socials</h3>
      <ul>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg> Facebook</a></li>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
          </svg> Twitter</a></li>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg> Instagram</a></li>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
          </svg> TikTok</a></li>
      </ul>
   </div>
   <div class="contactus">
      <h3>Contact Us</h3>
      <ul>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
          </svg> info@savannatales.com</a></li>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-heart" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.8 2.8 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124q.219.416.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442q.33-.421.55-.836L15 11.105V5.383l-3.002 1.801a2.8 2.8 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
          </svg> support@savannatales.com</a></li>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0"/>
          </svg> +254745533212</a></li>
         <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
          </svg> +254794178635</a></li>
      </ul>
   </div>
</footer>
</html>