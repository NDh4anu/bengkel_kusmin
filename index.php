<?php
include 'koneksi.php';

// Query untuk data advantage
$queryAdvantages = "SELECT * FROM advantages";
$resultAdvantages = mysqli_query($mysqli, $queryAdvantages);

// Query untuk data information
$queryInformation = "SELECT * FROM information";
$resultInformation = mysqli_query($mysqli, $queryInformation);

// Query untuk data testimonial
$queryTestimonials = "SELECT * FROM testimonial";
$resultTestimonials = mysqli_query($mysqli, $queryTestimonials);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bengkel Kusmin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/bengkel-kusmin.png" rel="icon"> 

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jalan Puspogiwang Timur Raya No 14</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Sabtu : 08.00 - 16.30 </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <a href="https://wa.me/6281230627705" class="text-decoration-none text-dark" target="_blank">
                        +62 812-3062-7705
                    </a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.tiktok.com/@kusmin_garage?is_from_webapp=1&sender_device=pc"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/kusmin_garage_autobodyrepair/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/bengkel-kusmin.png" alt="Bengkel Kusmin Logo" style="height: 150px; margin-right: 10px;">
            <h3 class="m-0 text-secondary">Bengkel Kusmin</h3>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.php" class="dropdown-item">Booking</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/banner1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Auto Body Repair, Overhaul, Scanning, Service</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/banner2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Auto Body Repair, Overhaul, Scanning, Service</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/banner3.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Auto Body Repair, Overhaul, Scanning, Service</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/banner4.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Auto Body Repair, Overhaul, Scanning, Service</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/banner5.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Auto Body Repair, Overhaul, Scanning, Service</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <?php 
            $icons = ['fa-certificate', 'fa-users-cog', 'fa-tools']; // Ikon statis
            $index = 0;
            while ($row = mysqli_fetch_assoc($resultAdvantages)): 
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa <?php echo $icons[$index]; ?> fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3"><?php echo htmlspecialchars($row['title']); ?></h5>
                            <p><?php echo htmlspecialchars($row['description']); ?></p>
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endwhile; ?>
        </div>
    </div>
    </div>

    </div>

    <!-- Service End -->


    <?php 
    // Ambil data untuk About
    $aboutData = [];
    mysqli_data_seek($resultInformation, 0); // Reset pointer
    while ($row = mysqli_fetch_assoc($resultInformation)) {
        if ($row['section'] === 'about') {
            $aboutData[] = $row;
        }
    }
    // Ambil data untuk Fact
    $factData = [];
    mysqli_data_seek($resultInformation, 0); // Reset pointer
    while ($row = mysqli_fetch_assoc($resultInformation)) {
        if ($row['section'] === 'fact') {
            $factData[] = $row;
        }
    }
    ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/profile.jpg" style="object-fit: cover;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0"><?php echo htmlspecialchars($factData[0]['value']); ?> <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><?php echo htmlspecialchars($aboutData[0]['title']); ?></h1>
                    <p class="mb-4"><?php echo htmlspecialchars($aboutData[0]['description']); ?></p>
                    <div class="row g-4 mb-3 pb-3">
                        <?php for ($i = 1; $i < count($aboutData); $i++): ?>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary"><?php echo $i; ?></span>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo htmlspecialchars($aboutData[$i]['title']); ?></h6>
                                        <span><?php echo htmlspecialchars($aboutData[$i]['description']); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php 
    // Ambil data untuk Fact
    $factData = [];
    mysqli_data_seek($resultInformation, 0); // Reset pointer
    while ($row = mysqli_fetch_assoc($resultInformation)) {
        if ($row['section'] === 'fact') {
            $factData[] = $row;
        }
    }
    ?>
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($factData as $fact): ?>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo htmlspecialchars($fact['value']); ?></h2>
                        <p class="text-white mb-0"><?php echo htmlspecialchars($fact['title']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Autobody Repair</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Service</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-qrcode fa-2x me-3"></i>
                            <h4 class="m-0">Scan</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Overhaul</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <?php
                        include 'koneksi.php';

                        $result = mysqli_query($mysqli, "SELECT * FROM service");
                        $images = [
                            'bodyrepairMobil.jpg',
                            'service-2.jpg',
                            'scanMobil.jpg',
                            'overhaulMobil.jpg'
                        ];
                        $index = 0;

                        while ($service = mysqli_fetch_assoc($result)) {
                            $isActive = $index === 0 ? 'show active' : '';
                            echo '<div class="tab-pane fade ' . $isActive . '" id="tab-pane-' . ($index + 1) . '">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="img/' . $images[$index] . '" style="object-fit: cover;" alt="' . htmlspecialchars($service['title']) . '">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-3">' . htmlspecialchars($service['title']) . '</h3>
                                        <p class="mb-4">' . htmlspecialchars($service['description']) . '</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                        <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                    </div>
                                </div>
                            </div>';
                            $index++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->

    <!-- Call To Action Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-md-6">
                    <h6 class="text-primary text-uppercase">// Call To Action //</h6>
                    <h1 class="mb-4">Ada Pertanyaan Sebelum Membuat Booking?</h1>
                    <p class="mb-0">Kami siap membantu menjawab semua pertanyaan Anda mengenai layanan kami. Dari perbaikan bodi, pemasangan bodykit, hingga perawatan kendaraan lengkap, tim kami yang berpengalaman akan memberikan solusi terbaik untuk kebutuhan Anda. Jangan ragu untuk menghubungi kami sekarang!</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+6281230627705</h3>
                        <a href="https://wa.me/6281230627705" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">// Testimonial //</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <?php
            $images = ['farel.jpg', 'leonard.jpg', 'arif.jpg', 'ricky.jpg', 'agatha.jpg', 'whindi.jpg'];
            $index = 0;
            while ($row = mysqli_fetch_assoc($resultTestimonials)): 
                $imagePath = isset($row['image']) && !empty($row['image']) ? htmlspecialchars($row['image']) : "img/{$images[$index]}";
            ?>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="<?php echo $imagePath; ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0"><?php echo htmlspecialchars($row['name']); ?></h5>
                    <p><?php echo htmlspecialchars($row['job_title']); ?></p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"><?php echo htmlspecialchars($row['testimonial']); ?></p>
                    </div>
                </div>
            <?php 
                $index++;
                if ($index >= count($images)) $index = 0; // Reset index if there are more testimonials
            endwhile; 
            ?>
        </div>
    </div>
</div>


    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Puspogiwang Timur Kel Salamanmloyo Kec Semarang Barat 297R+R4W Gisikdrono Kecamatan Semarang Barat, Kec. Kaliwungu, Jawa Tengah 50143</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>08112774994</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/kusmin_garage_autobodyrepair/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@kusmin_garage?is_from_webapp=1&sender_device=pc"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Senin - Jumat:</h6>
                    <p class="mb-4">08.00 - 16.30</p>
                    <h6 class="text-light">Saturday</h6>
                    <p class="mb-0">08.00 - 16.00</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Autobody Repair</a>
                    <a class="btn btn-link" href="">Service</a>
                    <a class="btn btn-link" href="">Scan</a>
                    <a class="btn btn-link" href="">Pasang Bodykit</a>
                </div>
                <!-- add maps in here -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Location</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9563137720114!2d110.390335!3d-6.9853762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b2e2b765495%3A0xfd2eb57e1eb582!2sBengkel%20Kusmin!5e0!3m2!1sid!2sid!4v1699952937213!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Bengkel Kusmin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>