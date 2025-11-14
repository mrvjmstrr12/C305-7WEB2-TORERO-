<!-- Unique Redesigned Portfolio (Dark Neon Cyber Theme) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvi Torero | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --primary: #00eaff;
            --secondary: #0ef;
            --dark: #0a0f1a;
            --card: rgba(255, 255, 255, 0.05);
            --glow: 0 0 15px rgba(0, 238, 255, 0.7);
        }

        body {
            background: var(--dark);
            font-family: 'Poppins', sans-serif;
            color: #fff;
            overflow-x: hidden;
        }

        /* NAVBAR */
        .navbar-custom {
            background: rgba(10, 15, 26, 0.9);
            backdrop-filter: blur(20px);
            padding: 1rem 0;
        }
        .nav-link {
            color: #cce7ff !important;
            margin: 0 10px;
        }
        .nav-link:hover {
            color: var(--primary) !important;
            text-shadow: var(--glow);
        }

        /* HERO */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            padding-left: 5%;
            background: linear-gradient(135deg, #07101d, #03080f);
        }
        .hero-text h1 {
            font-size: 3.8rem;
            font-weight: 700;
            color: var(--secondary);
            text-shadow: var(--glow);
        }
        .hero-text p {
            width: 75%;
            font-size: 1.2rem;
            color: #cce7ff;
        }

        .pfp {
            width: 340px;
            height: 340px;
            border-radius: 50%;
            border: 4px solid var(--secondary);
            box-shadow: var(--glow);
            object-fit: cover;
        }

        /* SECTION TITLES */
        .section-title {
            text-align: center;
            font-size: 2.6rem;
            margin-bottom: 40px;
            color: var(--secondary);
            text-shadow: var(--glow);
        }

        /* ABOUT */
        .about-box {
            background: var(--card);
            padding: 30px;
            border-radius: 15px;
            box-shadow: var(--glow);
        }

        /* SKILLS */
        .skill-card {
            background: var(--card);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: 0.3s;
            box-shadow: var(--glow);
        }
        .skill-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0 25px #00eaff;
        }
        .skill-card i {
            font-size: 3rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        /* PROJECTS */
        .project-card {
            background: var(--card);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--glow);
            transition: 0.3s;
        }
        .project-card:hover {
            transform: scale(1.03);
            box-shadow: 0 0 25px var(--secondary);
        }
        .project-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #123;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" style="color: var(--secondary);">Marvi T.</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon" style="filter: invert(1)"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero" id="home">
        <div class="hero-text">
            <h1>Marvi James Torero</h1>
            <p>Laravel Developer • Web Designer • Programmer — I build modern, functional, and responsive systems with clean UI and optimized performance.</p>
        </div>
        <div class="ms-auto me-5">
            <img src="https://via.placeholder.com/350" class="pfp">
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="container py-5">
        <h2 class="section-title">About Me</h2>
        <div class="about-box">
            <p class="fs-5">I am a passionate web developer specializing in <strong>Laravel</strong>, <strong>PHP</strong>, and modern UI/UX. I love building systems that solve real-world problems — including my Barangay Document Management System (BDMS) project. My focus is clean code, smooth UI, and creating tools people actually enjoy using.</p>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="container py-5">
        <h2 class="section-title">Skills</h2>
        <div class="row g-4">
            <div class="col-md-3"><div class="skill-card"><i class="fas fa-code"></i><h5>Frontend</h5><p>HTML, CSS, Tailwind, JS</p></div></div>
            <div class="col-md-3"><div class="skill-card"><i class="fas fa-server"></i><h5>Backend</h5><p>PHP, Laravel, MySQL</p></div></div>
            <div class="col-md-3"><div class="skill-card"><i class="fas fa-toolbox"></i><h5>Tools</h5><p>Git, Composer, VS Code</p></div></div>
            <div class="col-md-3"><div class="skill-card"><i class="fas fa-bolt"></i><h5>Other</h5><p>API, UI Design, Debugging</p></div></div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="container py-5">
        <h2 class="section-title">Projects</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200">
                    <div class="p-3"><h5>BDMS System</h5><p>Laravel-based document request and management system.</p></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200">
                    <div class="p-3"><h5>Portfolio Website</h5><p>Modern UI portfolio made with Laravel Blade.</p></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-card">
                    <img src="https://via.placeholder.com/400x200">
                    <div class="p-3"><h5>Attendance Tracker</h5><p>Simple CRUD-based attendance monitoring system.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="container py-5">
        <h2 class="section-title">Contact Me</h2>
        <div class="text-center">
            <p class="fs-5">Email: <strong>marvitorero@example.com</strong></p>
            <p>Facebook • GitHub • LinkedIn</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2025 Marvi Torero. All Rights Reserved.</p>
    </footer>
</body>
</html>
