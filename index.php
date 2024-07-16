<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <header id="header">
        <div class="container">
            <?php
            echo "My Website";
            ?>
            <h1><a href="index.php">Irfan Khanif Fauzi</a></h1>
            <h2>I am a student of Informatics Engineering University of Muhammadiyah Purwokerto</h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="?menu=home">Home</a></li>
                    <li><a class="nav-link" href="?menu=about">About</a></li>
                    <li><a class="nav-link" href="?menu=contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <section id="about" class="about">

        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>About me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/mee.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 857-4256-7974</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Banyumas</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>irfankhanif4@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>Sudagaran, Banyumas, Central Java</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="www.linkedin.com/in/irfan-khanif-fauzi-129158254" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            <a href="https://web.facebook.com/irfan.khanif.12" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/irfankhanif_/" class="instagram"><i class="bi bi-instagram"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>irfankhanif4@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>+62 857-4256-7974</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>

</body>

</html>
