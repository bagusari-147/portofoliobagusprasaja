<?php
// index.php - Halaman utama
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            color: white;
            text-align: center;
            overflow-x: hidden;
        }
        
        /* Navbar */
        .navbar {
            padding: 8px 0;
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

        /* Animasi Teks */
        .animated-text {
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0;
            animation: fadeInUp 1.2s ease-in-out forwards;
        }

        /* Efek Tombol */
        .btn-custom {
            background-color: #ffcc00;
            color: #2c3e50;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .btn-custom:hover {
            background-color: white;
            color: #2c3e50;
            box-shadow: 0px 6px 20px rgba(255, 255, 255, 0.3);
        }

        /* Animasi */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Tentang Saya</a></li>
                    <li class="nav-item"><a class="nav-link" href="skill.php">Skill</a></li>
                    <li class="nav-item"><a class="nav-link" href="project.php">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <img src="WhatsApp Image 2025-03-28 at 13.05.57_5cd8fa62.jpg" alt="Foto Profil" class="profile-img">
        <h1 class="mt-3">Halo, Saya <strong>Bagus </strong></h1>
        <p class="animated-text">Saya adalah seorang anak muda yang hobi dalam pengembangan dan desain.</p>
        <a href="about.php" class="btn btn-custom mt-3">Jelajahi</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
