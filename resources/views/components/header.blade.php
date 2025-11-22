<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Marvi')</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/design.css', 'resources/js/app.js'])
</head>
<body>

<!-- Navigation -->
<div class="nav-wrapper">
  <div class="nav-inner">
    <a href="/home" class="brand">
      <span class="brand-name">Marvi James Torero</span>
      <span class="brand-role">Student</span>
    </a>
    <div class="nav-links">
      <a href="/resume" class="nav-circle resume-btn">Resume</a>
      <a href="/projects" class="nav-circle projects-btn">Projects</a>
      <a href="/contact" class="nav-circle contact-btn">Contact</a>
    </div>
  </div>
</div>
