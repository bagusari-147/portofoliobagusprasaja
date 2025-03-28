<?php
// project.php - Halaman Project
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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


        /* Hero Section */
        .hero {
            text-align: center;
            padding: 100px 20px;
        }

        /* Card Project */
        .project-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
        }
        .project-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        .project-icon {
            font-size: 3rem;
            color: #ffcc00;
            margin-bottom: 10px;
        }
        .project-title {
            font-weight: bold;
            font-size: 1.3rem;
        }
        .project-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        .project-link:hover {
            color: #ffcc00;
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
                    <li class="nav-item"><a class="nav-link" href="about.php">Tentang Saya</a></li>
                    <li class="nav-item"><a class="nav-link" href="skill.php">Skill</a></li>
                    <li class="nav-item"><a class="nav-link active" href="project.php">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1><i class="fas fa-laptop-code"></i> Project</h1>
            <p>Berikut adalah beberapa proyek yang telah saya kerjakan.</p>
        </div>
    </section>

    <!-- Daftar Project -->
    <div class="container mt-5">
        <div class="row">
            <!-- Project 1 -->
            <div class="col-md-4 mb-4">
                <div class="project-card p-4">
                    <i class="fas fa-image project-icon"></i>
                    <h5 class="project-title">Gallery App</h5>
                    <p>Aplikasi galeri foto berbasis web dengan fitur album dan like.</p>
                    <a href="http://localhost/ukk_bagus/" class="project-link" target="_blank">Lihat Project</a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-4 mb-4">
                <div class="project-card p-4">
                    <i class="fas fa-shopping-cart project-icon"></i>
                    <h5 class="project-title">Mesteri Barang</h5>
                    <p>Website Misteri Barang sederhana dengan fitur bisa mencari, menambah, dan menghapus barang.</p>
                    <a href="http://localhost/Master_barang%20bagus/" class="project-link" target="_blank">Lihat Project</a>
                </div>
            </div>

                    <!-- Project 3 - Website Produk Laptop -->
            <div class="col-md-4 mb-4">
                <div class="project-card p-4">
                    <i class="fas fa-laptop project-icon"></i> <!-- Ganti icon dengan laptop -->
                    <h5 class="project-title">Website Produk Laptop</h5>
                    <p>Website katalog produk laptop dengan informasi spesifikasi dan harga.</p>
                    <a href="http://localhost/pt%20arv%20tech" class="project-link" target="_blank">Lihat Project</a>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
