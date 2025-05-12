
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CelestialCeremony</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.3/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>

</head>
<body>

    <div id="header" class="flex-container">

        <img id="logo" src="logo.png" alt="CC" width="50px" onclick="homePage()">
        
        <div id="headerTitle" class="glowText lucida" onclick="homePage()">Celestial Ceremony</div>

        <div class="toRight">
            <div id="contact" class="hideSmallScreen" onclick="document.getElementById('websiteFooter').scrollIntoView();">CONTACT US</div>
            <div id="weddingIdeas" class="hideSmallScreen" onclick="document.getElementById('planningToolsFull').scrollIntoView();">AVAILABLE SERVICES</div>
            <div id="planningTools" class="hideSmallScreen" onclick="document.getElementById('planningToolsFull').scrollIntoView();">PLANNING TOOLS</div>
            <div id="venues" class="hideSmallScreen" onclick="document.getElementById('colRight').scrollIntoView();">VENUES</div>
            <img id="menuIcon" src="menuIcon.png" alt="menu icon" width="50px" onclick="toggleMenu()">

        </div>

        
    </div>
    <div class="dropdown-menu" id="dropdownMenu">
            <a href="#colRight">VENUES</a>
            <a href="#planningToolsFull">PLANNING TOOLS</a>
            <a href="#planningToolsFull">AVAILABLE SERVICES</a>
            <a href="#websiteFooter">CONTACT</a>
        </div>

    

    <div id="backgroundImages" >


        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="wedding0H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding1H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding2H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>
                
                <div class="swiper-slide">
                    <img src="wedding3H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding4H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding5H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding6H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding7H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding8H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

                <div class="swiper-slide">
                    <img src="wedding9H.jpg" alt="wedding hall" width="100%" height="100%">
                </div>

            </div>

        </div>

        <p id="imageText" class="glowText lucida">Celestial Ceremony</p>
    </div>

    <div id="cover" class="flex-container">


<!-- add search functionality -->
        <div id="colRight">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 ">
                        <div class="mySearchBar">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="available">Available For:</label>
                                </div>
                                <input type="date" class="form-control" id="available" value="2024-07-22" min="2024-01-01" max="2024-12-31">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="capacity">Party Size:</label>
                                </div>
                                <input type="number" class="form-control" id="capacity" name="capacity" min="1" max="1000">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="catering">Catering Grade:</label>
                                </div>
                                <input type="number" class="form-control" id="catering" name="catering" min="1" max="5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
            <div class="venue-container">
                <div class="row"></div>
            </div>



            <div id="planningToolsFull">
                <h3 class="lucida">Available Services</h3>
                <div class="services-container lucida">
                    <p>Catering</p>
                    <p>Alcohol</p>
                    <p>Parking</p>
                    <p>Lighting and Sound</p>
                    <p>Photography</p>
                    <p>Hair and Makeup</p>
                    <p>Event Coordination</p>
                    <p>Accomodation</p>
                    <p>Decor and Design</p>
                </div>
            </div>




            <div class="swiper commentSwiper shadow p-3 mb-5 bg-white rounded">
                <div class="swiper-wrapper">
                <div class="swiper-slide cardBox">
                    <h3 class="lucida">Forest Inn</h3>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <p>Absolutely stunning venue! The ambiance was perfect for our special day.   
                        Highly recommend this wedding hall for anyone looking for a magical 
                        experience! <br> -Parker Suarez</p>
                </div>
                <div class="swiper-slide cardBox">
                    <h3 class="lucida">Central Plaza</h3>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <p>My husband and I couldn't have asked for a better place to tie the knot. 
                        The panoramic views from the ceremony space were breathtaking, 
                        and the reception hall was beautifully decorated. <br> -Curtis Carr</p>
                </div>
                <div class="swiper-slide cardBox">
                    <h3 class="lucida">Ashby Castle</h3>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <p>We fell in love with this wedding hall the moment we stepped foot inside. 
                        The indoor reception area was equally impressive. Our guests are still raving 
                        about how wonderful everything was! <br> -Rosalyn Rubio</p>
                </div>
                <div class="swiper-slide cardBox">
                    <h3 class="lucida">Haslegrave Hotel</h3>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <p>From the initial inquiry to the last dance, the service we received at this wedding 
                        hall was exceptional. Our wedding was truly a night to remember, and we 
                         have this venue to thank for it! <br> -Margaret Harding</p>    
                </div>
                <div class="swiper-slide cardBox">
                    <h3 class="lucida">Southwestern Estate</h3>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <p>Choosing this wedding hall was one of the best decisions we made for our wedding.
                         We received so many compliments from our guests, and we couldn't have been happier with how everything turned 
                        out! <br> -Ariel Stewart</p>
                </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
<br><br>

            <div class="allMargin myChart">
                <canvas id="venuePricesChart" width="200" height="200"></canvas>
            </div>
            
            <br><br><br><br>

            <div class="allMargin myMap">
                <div id="map" style="width: 100%; height: 400px;"></div>
            </div>

            <br><br><br><br>

            <footer>
                <div id="websiteFooter" class="footer-container footer-part">
                    <div class="row">
                        <div class="col-md-4">
                            <h5><u>Contact Us</u></h5>
                            <p>Email: siddharthninawe@example.com</p>
                            <p>Phone: +44 1234567890</p>
                            <p>Address: 123 Wedding Venue St, City, Country</p>
                        </div>
                        <div class="col-md-4">
                            <h5><u>Follow Us</u></h5>
                            <ul>
                                <li><a href="#">Facebook @example</a></li>
                                <li><a href="#">Instagram @example</a></li>
                                <li><a href="#">Twitter @example</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h5><u>Quick Links</u></h5>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Venues</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer text-center footer-part">
                    <p><em>Developer: sorcererkid14 ( Siddharth Ninawe F331292)</em></p>
                    <p>&copy; 2024 Wedding Venues. All rights reserved.</p>
                </div>
            </footer>

        </div>

 

    </div>
    


    <script src="fetchData.js"></script>
    <script src="venue.js"></script>
    <script src="catering.js"></script>
    <script src="venueBooking.js"></script>
    <script src="venueReviewScore.js"></script>
    <script src="header.js"></script>
    <script src="commentSwiper.js"></script>
    <script src="backgroundImageSwiper.js"></script>
    <script src="takeInfo.js"></script>
    <script src="script.js"></script>
    
</body>
</html>
