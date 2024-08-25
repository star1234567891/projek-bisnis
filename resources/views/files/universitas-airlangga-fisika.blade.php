<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Navbar styling */
        .navbar {
            background-color: #007bff;
            padding: 15px;
        }

        .navbar-brand {
            font-size: 1.75rem;
            font-weight: 700;
            color: #fff;
            margin-right: 20px;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.1rem;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        /* Main content */
        .main-content {
            padding: 50px 20px;
            text-align: left;
        }

        .main-content h1 {
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        /* Mata Kuliah Carousel */
        .carousel-container {
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .carousel-inner {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            margin-left: 20px;
            scroll-snap-type: x mandatory;
        }

        .carousel-item {
            flex: 0 0 auto;
            width: 200px;
            margin-right: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            scroll-snap-align: center;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item:hover {
            transform: scale(1.05);
        }

        .carousel-item img {
            width: 100%;
            height: 150px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .carousel-item .card-body {
            padding: 20px;
            text-align: center;
        }

        .carousel-item .card-body h5 {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        /* Arrow buttons */
        .carousel-control-prev,
        .carousel-control-next {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 20px;
            height: 20px;
            background-size: 100%, 100%;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }

            .navbar-nav .nav-link {
                font-size: 1rem;
            }

            .main-content h1 {
                font-size: 2rem;
            }

            .carousel-item {
                width: 150px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 30px;
                height: 30px;
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                width: 15px;
                height: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Nama Website</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#news" class="nav-item nav-link">News</a>
                    <a href="#contact" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container main-content">
        <h1>Semester</h1>
        
        <!-- Mata Kuliah Carousel -->
        <div class="carousel-container">
            <div class="carousel-control-prev" role="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </div>
            <div id="carouselExampleControls" class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card">
                        <img src="Amar1.png" alt="Mata Kuliah 1">
                        <div class="card-body">
                            <h5 class="card-title">Mata Kuliah 1</h5>
                            <p class="card-text">Dosen: Prof. ABC</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img src="Amel1.png" alt="Mata Kuliah 2">
                        <div class="card-body">
                            <h5 class="card-title">Mata Kuliah 2</h5>
                            <p class="card-text">Dosen: Dr. DEF</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <img src="Melia1.png" alt="Mata Kuliah 3">
                        <div class="card-body">
                            <h5 class="card-title">Mata Kuliah 3</h5>
                            <p class="card-text">Dosen: Dr. GHI</p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak carousel-item jika diperlukan -->
            </div>
            <div class="carousel-control-next" role="button">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Manual slide control using arrow buttons
        const prevBtn = document.querySelector('.carousel-control-prev');
        const nextBtn = document.querySelector('.carousel-control-next');
        const carouselInner = document.querySelector('.carousel-inner');

        let scrollPosition = 0;

        prevBtn.addEventListener('click', () => {
            scrollPosition -= 220; // Adjust the scroll amount as necessary
            carouselInner.scrollTo({ left: scrollPosition, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
            scrollPosition += 220; // Adjust the scroll amount as necessary
            carouselInner.scrollTo({ left: scrollPosition, behavior: 'smooth' });
        });
    </script>
</body>
</html>
