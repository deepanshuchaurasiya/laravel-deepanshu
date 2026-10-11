<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg bg-white px-3 py-2 shadow-sm container mt-2 mb-2 border border-1 rounded-pill">
        <div class="container-fluid navbar_container_fluid">
            <a class="navbar-brand fw-normal fs-3" href="#">iLanding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#gallery">Gallery</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
            <a href="#" class="btn btn-primary px-4 rounded-pill started_btn border-0">Get Started</a>
        </div>
    </nav>

    <!-- Sidebar Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="sidebarDropdown" role="button"
                        data-bs-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Navbar close -->
     @yield('main')

    <!-- hero section slider start -->
    <section>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMAGES/1.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/11.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
            </div>
        </div>
    </section>
    <!-- hero section slider end -->

    <!-- about us section start -->
    <section class="About-us pt-4 pb-4" id="about">
        <div class="container">
            <div class="row">
                <h2 class=" ">About us</h2>
                <p class="pt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla fuga dolore facilis.
                    Ratione praesentium atque laudantium maiores rerum corporis sequi quod exercitationem accusamus id
                    incidunt quae nulla aspernatur vitae, eaque ducimus? Rem laborum ipsam tenetur reprehenderit illum
                    eveniet quaerat ab quae cumque eius, natus maiores eaque quis mollitia voluptatum reiciendis tempore
                    doloremque necessitatibus dolore saepe quidem aliquam pariatur error? Distinctio, facilis eius. Odio
                    aliquid adipisci laborum nisi eveniet. Dolore quaerat, eos deleniti, possimus dolorum quibusdam
                    consequatur vitae modi commodi unde recusandae, ipsum a laborum quo tempore exercitationem suscipit
                    perspiciatis asperiores necessitatibus nihil eveniet. Quae ipsam quisquam odio esse rem doloremque.
                </p>
            </div>
        </div>
    </section>
    <!-- about us section end -->

    @yield('gallery')
    <!-- Contact us open -->
    <section class="contactUs" id="contact">
        <div class="container contact-container bg-info-subtle rounded-1">
            <div class="row">
                <div class="col-md-5 contact-info">
                    <h2>Contact Info</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, vitae.</p>
                    <div class="container ">
                        <div class="contact-box">
                            <div class="contact-item">
                                <div class="contact-icon"><i class="fas fa-map-marker-alt fa-spin"></i></div>
                                <div>
                                    <h6 class="mb-1">Our Location</h6>
                                    <p class="mb-0">Akb Fzd Road<br>Darshan Nagar 224135</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon"><i class="fas fa-phone fa-spin"></i></div>
                                <div>
                                    <h6 class="mb-1">Phone Number</h6>
                                    <p class="mb-0">+91 7800 050 976<br>+91 8090 995 797</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon"><i class="fas fa-envelope fa-spin"></i></div>
                                <div>
                                    <h6 class="mb-1">Email Address</h6>
                                    <p class="mb-0">info@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 contact-form">
                    <h2>Get In Touch</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, vitae.</p>
                    <form>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn1 rounded-5 text-light">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact us close -->

    <!-- Footer start -->
    <section class="footer" id="footer">
        <div class="container-fluid">
            <div class="row py-4 d-flex justify-content-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="icon">
                        <img src="IMAGES/tech.png" alt="techsima icon">
                    </div>
                    <p class="summery">Techsima boosts your coding career by providing top-notch courses in web
                        development, web design, and app development. Our direct approach instils confidence in you and
                        helps you compete with the best with logical thinking and problem-solving skills.</p>
                </div>
                <div class="col-lg-3 connect-section col-md-6">
                    <h3 class="widget-title1 position-after1">Connect with Us</h3>
                    <ul class="social-links pt-3">
                        <li><i class="fa-brands fa-youtube"></i><a href="#">YouTube</a></li>
                        <li><i class="fa-brands fa-facebook"></i><a href="#">Facebook</a></li>
                        <li><i class="fa-brands fa-linkedin"></i><a href="#">LinkedIn</a></li>
                        <li><i class="fa-brands fa-instagram"></i><a href="#">Instagram</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 quick-section">
                    <h3 class="widget-title2 position-after2">Quick Links</h3>
                    <ul class="quick-link pt-3">
                        <li> <i class="fas fa-chevron-right"></i><a href="#">About Us</a></li>
                        <li> <i class="fas fa-chevron-right"></i> <a href="#">Contact Us</a></li>
                        <li> <i class="fas fa-chevron-right"></i> </i><a href="#">Privacy Policy</a></li>
                        <li> <i class="fas fa-chevron-right"></i> </i><a href="#">Return, Refund, & Cancellation
                                Policy</a></li>
                        <li> <i class="fas fa-chevron-right"></i> </i><a href="#">SiteMap</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 findus-section">
                    <h3 class="widget-title3 position-after3">Find Us</h3>
                    <ul class="inform pt-3">
                        <li style="pointer-events:none;"><i class="fas fa-location-arrow"></i><a href="#">In front of
                                Rajarshi Dashrath Rajkiya Medical College, Darshan Nagar, Kushmaha, Ayodhya, Uttar
                                Pradesh 224135</a></li>
                        <li><i class="fas fa-envelope"></i><a href="#">techsimatraining@gmail.com</a></li>
                        <li><i class="fas fa-mobile-alt"></i><a href="#">+91 7800050976</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer end -->
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/jQuery.js"></script>
    <script src="JS/owl.carousel.min.js"></script>
    <script src="JS/Script.js"></script>
</body>

</html>