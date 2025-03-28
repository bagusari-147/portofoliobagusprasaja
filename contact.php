<?php
// contact.php - Halaman Contact
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        .nav-link:hover, 
        .nav-link.active {
            color: #ffcc00 !important;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 100px 20px;
        }

        /* Form Contact */
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        .btn-primary {
            background: #ffcc00;
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #e6b800;
        }

        /* Card Media Sosial */
        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
        }
        .contact-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        .contact-icon {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #ffcc00;
        }
        .contact-link {
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }
        .contact-link:hover {
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
                    <li class="nav-item"><a class="nav-link" href="project.php">Project</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1><i class="fas fa-envelope"></i> Contact</h1>
            <p>Silakan hubungi saya melalui form di bawah atau media sosial.</p>
        </div>
    </section>

    <!-- Form Kontak -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Masukkan pesan Anda"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Media Sosial -->
    <div class="container mt-5">
        <div class="row">
            <!-- Instagram -->
            <div class="col-md-4">
                <div class="contact-card p-4">
                    <i class="fab fa-instagram contact-icon"></i>
                    <h5>Instagram</h5>
                    <p><a href="https://www.instagram.com/baa_guzzz?igsh=MWc0Ymw3eWg2MmFseA==" target="_blank" class="contact-link">@baa_guzzz_anda</a></p>
                </div>
            </div>
            <!-- TikTok (Ganti dari Facebook) -->
            <div class="col-md-4">
                <div class="contact-card p-4">
                    <i class="fab fa-tiktok contact-icon"></i>
                    <h5>TikTok</h5>
                    <p><a href="https://www.tiktok.com/@every_onee?_t=ZS-8v3Spn9GFbm&_r=1" target="_blank" class="contact-link">@every_onee</a></p>
                </div>
            </div>
            <!-- WhatsApp -->
            <div class="col-md-4">
                <div class="contact-card p-4">
                    <i class="fab fa-whatsapp contact-icon"></i>
                    <h5>WhatsApp</h5>
                    <p><a href="https://wa.me/qr/ZMANOPFDYZWJB1 " target="_blank" class="contact-link">+62 878-7803-2204</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
