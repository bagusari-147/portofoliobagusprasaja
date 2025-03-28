<?php
// about.php - Halaman Tentang Saya

// Hitung umur otomatis berdasarkan tanggal lahir
$tanggal_lahir = "2007-03-08"; // Ganti dengan tanggal lahir Anda
$umur = date("Y") - date("Y", strtotime($tanggal_lahir));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
         /* Gaya Umum */
         body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            color: white;
        }

        /* Navbar */
        .navbar {
            padding: 10px 0;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
        }
        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
        }
        .nav-link {
            color: white !important;
            margin: 0 10px;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ffcc00 !important;
        }
        .nav-link.active {
            color: #ffcc00 !important;
            font-weight: bold;
        }


        /* Kontainer utama */
        .about-section {
            padding-top: 100px; /* Tambahan padding agar tidak tertutup navbar */
            text-align: center;
        }
         /* Hero Section */
         .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0px 4px 20px rgba(255, 255, 255, 0.3);
            transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
        }
        .profile-img:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0px 6px 30px rgba(255, 255, 255, 0.5);
        }

        /* Card Info */
        .info-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s;
            text-align: left;
        }
        .info-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        .info-icon {
            font-size: 2rem;
            color: #ffcc00;
            margin-bottom: 10px;
        }
        .info-title {
            font-weight: bold;
        }
        .info-card a {
            text-decoration: none;
            color: #ffcc00;
            font-weight: bold;
        }
        .info-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">Tentang Saya</a></li>
                    <li class="nav-item"><a class="nav-link" href="skill.php">Skill</a></li>
                    <li class="nav-item"><a class="nav-link" href="project.php">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

     <!-- Bagian Tentang Saya -->
     <section class="about-section">
        <img src="WhatsApp Image 2025-03-28 at 13.05.57_5cd8fa62.jpg" alt="Foto Profil" class="profile-img">
        <h1>Tentang Saya</h1>
        <p>Saya adalah seorang anak muda yang hobi dalam pengembangan desain</p>

        <div class="container mt-5">
            <div class="row">
                <!-- Nama Lengkap -->
                <div class="col-md-6 mb-4">
                    <div class="info-card p-4">
                        <i class="fas fa-id-card info-icon"></i>
                        <h5 class="info-title">Nama Lengkap</h5>
                        <p>Bagus Ari Prasaja</p>
                    </div>
                </div>

                <!-- Tanggal Lahir & Umur -->
                <div class="col-md-6 mb-4">
                    <div class="info-card p-4">
                        <i class="fas fa-birthday-cake info-icon"></i>
                        <h5 class="info-title">Tanggal Lahir</h5>
                        <p>08 Maret 2007 (<?php echo $umur; ?> Tahun)</p>
                    </div>
                </div>

                <!-- Hobi -->
                <div class="col-md-6 mb-4">
                    <div class="info-card p-4">
                        <i class="fas fa-futbol info-icon"></i>
                        <h5 class="info-title">Hobi</h5>
                        <p>Main Game, Mendesain logo</p>
                    </div>
                </div>

                <!-- Alamat -->
                <div class="col-md-6 mb-4">
                    <div class="info-card p-4">
                        <i class="fas fa-map-marker-alt info-icon"></i>
                        <h5 class="info-title">Alamat</h5>
                        <p>Link jelat, RT 03 RW 02, kec.pataruman, kota Banjar, Jawa Barat, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Riwayat Pendidikan -->
        <div class="container mt-5">
            <h2><i class="fas fa-graduation-cap"></i> Riwayat Pendidikan</h2>
            <div class="row mt-3">
                <div class="col-md-6 mb-4">
                    <div class="info-card p-4">
                        <i class="fas fa-school info-icon"></i>
                        <h5 class="info-title">SD</h5>
                        <p><a href="https://maps.app.goo.gl/qcLtbs9Z2ujcecFz7" target="_blank">SD Negeri Sambeng 1 (2013 - 2019)</a></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-card p-4">
                        <i class="fas fa-school info-icon"></i>
                        <h5 class="info-title">SMP</h5>
                        <p><a href="https://maps.app.goo.gl/9G9JWzSbJsypVhoH6" target="_blank">SMP Negeri 1 Banjar (2019 - 2022)</a></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="info-card p-4">
                        <i class="fas fa-user-graduate info-icon"></i>
                        <h5 class="info-title">SMK</h5>
                        <p><a href="https://maps.app.goo.gl/eYCnFho254EtxaR56" target="_blank">SMK Negeri 1 Banjar - Jurusan RPL (2022 - 2025)</a></p>
                    </div>
                </div>
              
            </div>
        </div>

        <!-- Pengalaman -->
        <div class="container mt-5">
            <h2><i class="fas fa-briefcase"></i> Pengalaman</h2>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="info-card p-4">
                        <i class="fas fa-code info-icon"></i>
                        <h5 class="info-title">Teknisi Komputer</h5>
                        <p>Pernah magang di PT Arv Tech sebagai Teknisi komputer dan leptop</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
