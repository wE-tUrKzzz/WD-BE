<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wE-tUrKzzz's Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="Icon" type="image/png" href="dir/img/logo.png">
    <style>
        body {
            color: white;
            margin: 0;
            background-color: #343a40;
        }

        .navbar-brand {
            font-family: 'Inter', sans-serif;
            font-size: 50px;
            font-weight: 900;
            color: white !important;
            margin-left: 30px;
        }

        .navbar,
        .nav-link {
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            font-weight: 900;
            color: white;
        }

        .active-nav {
            font-weight: 900;
            color: inherit;
        }

        .nav-link:hover {
            color: rgb(175, 175, 175) !important;
        }

        .navbar-toggler-icon {
            background-color: white;
            filter: invert(1) grayscale(100%) brightness(100%);
        }


        #carouselContent {
            width: 100%;
            height: auto;
            object-fit: cover;

        }

        .carousel-item {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            transition: transform 1.5s ease-in-out;
        }

        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }

        .navbar-nav .nav-item {
            margin-right: 30px;
            color: inherit;
        }

        .disabled {
            pointer-events: none;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card:hover .site-overlay {
            opacity: 1;
        }

        .site-preview:hover .site-overlay {
            opacity: 1;
        }

        footer .social-icons a {
            color: white;
            margin: 10px;
            font-size: 25px;
        }

        .card:hover .card-body.text-center {
            opacity: 1;
            transform: translateY(0);
        }

        .card .card-body.text-center {
            opacity: 0;
            transform: translateY(20px);
        }

        #projects::-webkit-scrollbar {
            display: none;
            /* For Chrome, Safari, and Edge */
        }

        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0;
            /* Remove scrollbar space */
            background: transparent;
            /* Optional: just make scrollbar invisible */
        }

        /* Optional: show position indicator in red */
        ::-webkit-scrollbar-thumb {
            background: #FF0000;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-2" style="background-color: #000000;">
        <div class="container-fluid">
            <!-- Logo and brand text -->
            <a class="navbar-brand" id="portfolioText" href="#home">
                Home
            </a>
            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links (collapsible) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active-nav mx-3" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselContent" class="carousel slide">
        <div class="carousel-inner">

            <!-- Carousel 1 -->
            <div class="carousel-item active" id="home" data-bgcolor="lightblue">
                <div class="d-block w-100" style="min-height: 100vh; background-color: lightgreen;">
                    <h1 class="text-center pt-5 animate__animated animate__fadeInDown animate__delay-1s animate__duration-2s"
                        style="font-size: 9vw; font-family: 'Inter', sans-serif; color:black;font-weight: 900;">Welcome!
                    </h1>
                    <h3 class="text-center pt-5 animate__animated animate__backInDown animate__delay-2s animate__duration-2s"
                        style="font-size: 4vw; font-family: 'Inter', sans-serif; color:black;font-weight: 900;">Dive in
                        into <br> we-turkzzz mind</h3>
                    <div class="text-center pt-5">
                        <img src="dir/img/kazuha.png" alt="Welcome Image" style="max-width: 80%; height: 35vh;"
                            class="animate__animated animate__backInDown animate__delay-3s animate__duration-2s">
                    </div>
                </div>
            </div>

            <!-- Carousel 2 -->
            <div class="carousel-item" id="about" data-bgcolor="lightgreen">
                <div class="d-block w-100" style="min-height: 100vh; background-color: #F18081;">
                    <h1 class="pt-5 animate__animated animate__fadeInUp animate__delay-1s animate__duration-2s"
                        style="font-size: 5vw; font-family: 'Inter', sans-serif; color: black; font-weight: 900; margin-left: 5vw;">
                        Who is we-turkzzz???
                    </h1>

                    <!-- Transparent Card -->
                    <div class="card" style="background-color: rgba(255, 255, 255, 0); border: none; margin-left: 5vw; margin-right: 5vw; 
            opacity: 1 !important; transform: translateY(0) !important;">

                        <div class="card-body" style="opacity: 1 !important; transform: translateY(0) !important; ">
                            <h4 style="font-size: vw; font-family: 'Inter', sans-serif; color: black; font-weight: 700;"
                                class="animate__animated animate__fadeInUp animate__delay-2s animate__duration-2s">
                                Louis Santos, also known as we-turkzzz, is an aspiring web developer who loves creating
                                websites.<br>
                                He is passionate about learning new web technologies and improving his skills. Louis
                                focuses on building websites<br>
                                that are easy to use, look great, and work well on all devices. He is excited to work on
                                projects that challenge him and help him grow as a developer.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel 3 -->
            <!-- Carousel Item for Projects -->
            <div class="carousel-item" id="projects" data-bgcolor="lightcoral">
                <div class="d-block w-100 "
                    style="height: 100vh; background-color: lightblue;display: flex;flex-direction: column;overflow-y: auto; margin-top: ;">
                    <h3 class="text-center pt-5 animate__animated animate__fadeInUp animate__delay-1s animate__duration-2s"
                        style="font-size: 4vw; font-family: 'Inter', sans-serif; color:black;font-weight: 900; margin-top:100px; margin-bottom:100px;">
                        Projects:</h3>

                    <!-- Project Cards Container -->
                    <div class="container">
                        <div class="row justify-content-center m-4">

                            <!-- Card 1 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="card animate__animated animate__fadeInUp animate__delay-2s animate__duration-2s"
                                    style="border-radius: 15px; background-color: rgb(31, 29, 29); color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease-in-out;">
                                    <div class="site-preview" id="project3" style="position: relative; width: 100%; height: 300px; overflow: hidden;">
                                                <iframe src="A08/index.php" class="site-frame" frameborder="0" style="width: 100%; height: 100%; pointer-events: none;" scrolling="no"></iframe>
                                            </div>
                                    <a href="A08/index.php" target="_blank"
                                        style="display: block; text-decoration: none;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">My Islandds</h5>
                                            <p class="card-text">Welcome to my world</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel 4 -->
            <div class="carousel-item" id="contact" data-bgcolor="lightgoldenrodyellow">
                <div class="d-block w-100" style="min-height: 100vh; background-color: #DCDC67;">
                    <div class="text-center pt-5 animate__animated animate__fadeInUp animate__delay-1s animate__duration-2s"
                        style="font-size: 9vw; font-family: 'Inter', sans-serif; color:black;font-weight: 900;">Craving
                        for More?
                    </div>
                    <h2 class="text-center pt-5 animate__animated animate__fadeInUp animate__delay-2s animate__duration-2s"
                        style="font-size: 2vw; font-family: 'Inter', sans-serif; color:black;font-weight: 900;">Let's
                        talk!
                    </h2>

                    <div class="container">
                        <div class="row justify-content-center m-4">

                            <!-- Card 1 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="card animate__animated animate__fadeInUp animate__delay-3s animate__duration-2s"
                                    style="border-radius: 15px;background-color: rgb(31, 29, 29); color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease-in-out;">
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=louisito75@gmail.com&su=Hello&body=I%20would%20like%20to%20connect."
                                        target="_blank" style="display: block; text-decoration: none;">
                                        <div class="card-body p-0 text-center"
                                            style="height: 100%; opacity: 1 !important; transform: none !important;">
                                            <!-- Google Icon -->
                                            <i class="fab fa-google fa-3x" style="color: #4285F4;"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="card animate__animated animate__fadeInUp animate__delay-3s animate__duration-2s"
                                    style="border-radius: 15px;background-color: rgb(31, 29, 29) ; color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease-in-out;">
                                    <a href="https://www.linkedin.com/in/louis-santos-0a733b259/" target="_blank"
                                        style="display: block; text-decoration: none;">
                                        <div class="card-body p-0 text-center"
                                            style="height: 100%; opacity: 1 !important; transform: none !important;">
                                            <!-- LinkedIn Icon -->
                                            <i class="fab fa-linkedin fa-3x" style="color: #0077b5;"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="card animate__animated animate__fadeInUp animate__delay-3s animate__duration-2s"
                                    style="border-radius: 15px;background-color: rgb(31, 29, 29) ; color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.3s ease-in-out;">
                                    <a href="https://github.com/wE-tUrKzzz" target="_blank"
                                        style="display: block; text-decoration: none;">
                                        <div class="card-body p-0 text-center"
                                            style="height: 100%; opacity: 1 !important; transform: none !important;">
                                            <!-- GitHub Icon -->
                                            <i class="fab fa-github fa-3x" style="color: #0077b5;"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Prev and Next Button -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselContent"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselContent"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="text-center" style="background-color: #000000;">
            <div class="container pt-4">
                <section class="social-icons d-flex justify-content-center align-items-center mb-2">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=louisito75@gmail.com&su=Hello&body=I%20would%20like%20to%20connect."
                        target="_blank" role="button"><i class="fab fa-google"></i></a>
                    <a href="https://www.linkedin.com/in/louis-santos-0a733b259/" target="_blank" role="button"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/wE-tUrKzzz" target="_blank" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <div class="text-center p-4">
                    <a style="color: rgb(255, 255, 255)">Website is just a project. All Rights Reserved.</a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const navLinks = document.querySelectorAll('.nav-link');
                const carouselItems = document.querySelectorAll('.carousel-item');
                const carousel = document.getElementById('carouselContent');
                const portfolioLink = document.getElementById('portfolioText');
                let isTransitioning =
                    false; // Flag to prevent multiple transitions at the same time

                // Update active nav link based on the active carousel item
                function updateActiveNav() {
                    var activeItem = document.querySelector('.carousel-item.active');
                    var activeNav = document.querySelector('.nav-link[href="#' + activeItem.id +
                        '"]');

                    // Reset all nav links to white and remove 'disabled' class
                    navLinks.forEach(function (link) {
                        link.style.color =
                            "white"; // Ensure color is white for all nav items
                        link.classList.remove('disabled'); // Remove 'disabled' class
                        link.style.pointerEvents = 'auto'; // Enable clicks
                    });

                    // Disable the "Portfolio" link when on the home section
                    if (activeItem.id === "home") {
                        portfolioLink.classList.add(
                            'disabled'); // Add 'disabled' class to portfolio link
                        portfolioLink.style.pointerEvents = 'none'; // Disable clicks on portfolio
                    } else {
                        portfolioLink.classList.remove(
                            'disabled'); // Remove 'disabled' class for other sections
                        portfolioLink.style.pointerEvents = 'auto'; // Enable clicks on portfolio
                    }

                    // Change color of the active link based on the carousel section
                    if (activeNav) {
                        if (activeItem.id === "home") {
                            activeNav.style.color = "lightgreen"; // Home color
                        } else if (activeItem.id === "about") {
                            activeNav.style.color = "#F18081"; // About color
                        } else if (activeItem.id === "projects") {
                            activeNav.style.color = "lightblue"; // Projects color
                        } else if (activeItem.id === "contact") {
                            activeNav.style.color = "#DCDC67"; // Contact color
                        }

                        // Disable the active nav link to make it unclickable
                        activeNav.classList.add('disabled');
                        activeNav.style.pointerEvents =
                            'none'; // Prevent clicks on the active nav link
                    }
                }

                // Event listener for carousel slide transition
                carousel.addEventListener('slid.bs.carousel', function () {
                    isTransitioning =
                        false; // Allow future transitions after the current one ends
                    updateActiveNav(); // Update nav after transition
                });

                // Event listener for nav links
                navLinks.forEach(function (link) {
                    link.addEventListener('click', function (event) {
                        event
                            .preventDefault(); // Prevent the default anchor link behavior

                        if (isTransitioning)
                            return; // If a transition is already happening, prevent triggering another one

                        isTransitioning =
                            true; // Set flag to indicate that transition is in progress

                        var targetId = link.getAttribute('href').substring(1);
                        var targetIndex = Array.from(carouselItems).findIndex(
                            function (
                                item) {
                                return item.id === targetId;
                            });

                        new bootstrap.Carousel(carousel).to(
                            targetIndex); // Slide to the selected carousel item
                    });
                });

                // Special handling for the Portfolio link to return to Home section
                portfolioLink.addEventListener('click', function (event) {
                    if (!portfolioLink.classList.contains('disabled') && !isTransitioning) {
                        event.preventDefault(); // Prevent any default action

                        isTransitioning =
                            true; // Set flag to indicate that transition is in progress

                        // Slide carousel back to the home section
                        var homeItem = document.getElementById('home');
                        var homeIndex = Array.from(carouselItems).findIndex(function (
                            item) {
                            return item.id === homeItem.id;
                        });
                        new bootstrap.Carousel(carousel).to(homeIndex);

                        // Disable the Portfolio link again after returning to Home
                        portfolioLink.classList.add('disabled');
                        portfolioLink.style.pointerEvents = 'none';
                    }
                });

                // Initial call to highlight the nav item corresponding to the active section
                updateActiveNav();
            });
        </script>


</body>

</html>