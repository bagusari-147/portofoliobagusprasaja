<?php
// skill.php - Halaman Skill
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            color: white;
            text-align: center;
        }

        /* Navbar */
        .navbar {
            padding: 10px 0;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
        }
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
        .skill-section {
            padding-top: 100px; /* Agar tidak tertutup navbar */
        }

        /* Card Skill */
        .skill-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s;
            text-align: left;
        }
        .skill-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        .skill-icon {
            font-size: 2rem;
            color: #ffcc00;
            margin-bottom: 10px;
        }
        .skill-title {
            font-weight: bold;
        }

        /* Progress Bar */
        .progress {
            height: 8px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 5px;
            overflow: hidden;
        }
        .progress-bar {
            background-color: #ffcc00;
            height: 100%;
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
                    <li class="nav-item"><a class="nav-link active" href="skill.php">Skill</a></li>
                    <li class="nav-item"><a class="nav-link" href="project.php">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bagian Skill -->
    <section class="skill-section">
        <h1><i class="fas fa-laptop-code"></i> Skill Saya</h1>
        <p>Berikut adalah beberapa keterampilan yang saya kuasai dalam pengembangan web dan desain.</p>

        <div class="container mt-5">
            <div class="row">
                <!-- Skill 1 -->
                <div class="col-md-6 mb-4">
                    <div class="skill-card p-4">
                        <i class="fab fa-html5 skill-icon"></i>
                        <h5 class="skill-title">HTML & CSS</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%;"></div>
                        </div>
                        <p class="mt-2">Tingkat Keahlian: 90%</p>
                    </div>
                </div>
                
                <!-- Skill 2 -->
                <div class="col-md-6 mb-4">
                    <div class="skill-card p-4">
                        <i class="fab fa-js skill-icon"></i>
                        <h5 class="skill-title">JavaScript</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%;"></div>
                        </div>
                        <p class="mt-2">Tingkat Keahlian: 80%</p>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div class="col-md-6 mb-4">
                    <div class="skill-card p-4">
                        <i class="fab fa-php skill-icon"></i>
                        <h5 class="skill-title">PHP</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%;"></div>
                        </div>
                        <p class="mt-2">Tingkat Keahlian: 85%</p>
                    </div>
                </div>

                <!-- Skill 4 -->
                <div class="col-md-6 mb-4">
                    <div class="skill-card p-4">
                        <i class="fas fa-database skill-icon"></i>
                        <h5 class="skill-title">MySQL</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 75%;"></div>
                        </div>
                        <p class="mt-2">Tingkat Keahlian: 75%</p>
                    </div>
                </div>

                <!-- Skill 5: Figma -->
                <div class="col-md-6 mb-4">
                    <div class="skill-card p-4">
                        <i class="fab fa-figma skill-icon"></i>
                        <h5 class="skill-title">Desain UI/UX dengan Figma</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%;"></div>
                        </div>
                        <p class="mt-2">Tingkat Keahlian: 80%</p>
                    </div>
                </div>

                <!-- Skill 6: Pembuatan Logo -->
                <div class="col-md-6 mb-4">
                    <div class="skill-card p-4">
                        <i class="fas fa-pen-nib skill-icon"></i>
                        <h5 class="skill-title">Pembuatan Logo</h5>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%;"></div>
                        </div>
                        <p class="mt-2">Tingkat Keahlian: 85%</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
