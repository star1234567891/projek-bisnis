<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tani Cerdas</title>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Custom background */
        body {
            background-image: url('/path/to/your/background.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }

        /* Ensure navbar and other content have proper backgrounds */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95); /* White background with slight transparency */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        /* Navbar Styling */
        .navbar-brand {
            font-size: 1.75rem;
            font-weight: 700;
            color: #007bff;
        }

        .navbar-nav .nav-link {
            font-size: 1.2rem;
            margin-right: 20px;
            color: #007bff;
        }

        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }

        .navbar-toggler {
            border-color: #007bff;
        }

        /* Hero Section Styling */
        .content-section {
            background-color: rgba(255, 255, 255, 0.85); /* White background with transparency */
            padding: 60px 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* More pronounced shadow */
        }

        .content-section img {
            max-width: 80%;
            height: auto;
            border-radius: 15px;
        }

        .content-section h2 {
            font-size: 2.75rem;
            font-weight: 700;
            margin-top: 30px;
            color: #007bff;
        }

        .content-section p {
            font-size: 1.25rem;
            margin-top: 20px;
            color: #555;
            line-height: 1.6;
        }

        /* Let's Start Button */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1.25rem;
            padding: 15px 40px;
            margin-top: 40px;
            border-radius: 50px; /* Rounded button */
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
            transform: scale(1.05); /* Slightly larger on hover */
        }

        /* Footer Styling */
        .footer {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px 0;
            margin-top: 60px;
            border-top: 1px solid #ddd;
        }

        /* Responsive Design */
        @media (min-width: 992px) {
            .navbar-nav {
                margin-left: auto;
                margin-right: auto;
            }

            .navbar-nav .nav-link {
                font-size: 1.1rem;
                margin-right: 25px;
            }

            .content-section {
                padding: 80px 60px;
            }

            .content-section h2 {
                font-size: 3rem;
            }

            .content-section p {
                font-size: 1.3rem;
            }

            .btn-primary {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Tani Cerdas</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#beranda" class="nav-item nav-link">Beranda</a>
                    <a href="#tentangkami" class="nav-item nav-link">Tentang Kami</a>
                    <a href="#kontakkami" class="nav-item nav-link">Kontak Kami</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Section -->
    <div class="container my-5">
        <section id="beranda" class="text-center content-section">
            <img src="TaniCerdas1.png" class="img-fluid" alt="Tani Cerdas">
            <div class="mt-3">
                <h2>Tani Cerdas</h2>
                <p>Kami adalah perusahaan yang bergerak di bidang Internet of Things (IoT) khusus untuk sektor pertanian dan perkebunan, menyediakan solusi cerdas untuk meningkatkan efisiensi dan produktivitas...</p>
                <!-- Tombol Let's Start -->
                <a href="#" class="btn btn-primary btn-lg mt-4" id="letsStartBtn" data-bs-toggle="modal" data-bs-target="#inputModal">Let's Start</a>
            </div>
        </section>

        <section id="tentangkami" class="my-5 content-section">
            <div class="row">
                <div class="col-lg-6">
                    <p class="deskripsi">Tentang Kami</p>
                    <h2>Penyiraman Otomatis</h2>
                    <p>Alat penyiraman otomatis ini menggunakan mikrokontroler ESP32 dan sensor capacitive soil moisture...</p>
                </div>
                <div class="col-lg-6">
                    <img src="foto alat atmoss.jpeg" class="img-fluid" alt="Penyiraman Otomatis">
                </div>
            </div>
        </section>

        <section id="kontakkami" class="my-5 content-section">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h3>Alamat</h3>
                    <p>JL. J. A. Suprapto Gresik, Jawa Timur</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h3>Social Media</h3>
                    <p>IG: @tani_cerdas.id</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h3>Kontak</h3>
                    <p>WhatsApp: 082111333021</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal HTML -->
    <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputModalLabel">Masukkan Data Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('redirect') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="university" class="form-label">Universitas</label>
                            <input type="text" class="form-control" id="university" name="university" required>
                        </div>
                        <div class="mb-3">
                            <label for="program" class="form-label">Program Studi</label>
                            <input type="text" class="form-control" id="program" name="program" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer text-center py-3">
        <div class="container">
            &copy; 2024 <b>Tani Cerdas</b> All Rights Reserved
        </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
