<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Resume</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/design.css', 'resources/js/app.js'])
<style>
  /* theme */
  
  :root{ --bg:#0b1220; --surface:#0f1724; --card:rgba(255,255,255,0.02); --text:#e6eef8; --muted:#94a3b8; --accent:#22c1c3; --accent-2:#ff7ab6; --accent-3:#7c5cff; --shadow:0 10px 30px rgba(2,6,23,0.7); }
  body{ margin:0; font-family:'Poppins',sans-serif; background:var(--bg); color:var(--text); padding-top:50px; overflow-x:hidden }
  a{ text-decoration:none; color:inherit }

  .nav-wrapper{ position:fixed; top:0; left:0; right:0; display:flex; justify-content:center; z-index:60; background:transparent; transition:background .22s ease, box-shadow .22s ease; height:112px; align-items:center }
  .nav-wrapper.nav-opaque{ background: linear-gradient(180deg, rgba(11,18,32,0.6), rgba(11,18,32,0.4)); box-shadow:0 8px 30px rgba(2,6,23,0.6); backdrop-filter: blur(6px); }
  .nav-inner{ width:100%; max-width:1400px; display:flex; align-items:center; justify-content:space-between; padding:18px 56px; height:100%; margin:0 auto }
  .brand{ display:flex; flex-direction:column; color:var(--text); text-decoration:none }
  .brand-name{ font-weight:800; font-size:1rem }
  .brand-role{ font-size:0.72rem; color:var(--muted); margin-top:2px }
  .nav-links{ display:flex; gap:20px; align-items:center }
  .nav-circle{ display:inline-flex; align-items:center; justify-content:center; font-size:1.05rem; font-weight:700; color:var(--text); padding:0 12px; height:48px; border-radius:8px; border:1px solid transparent; background:transparent; transition:background .22s ease, color .22s ease, transform .22s ease, box-shadow .22s ease, padding .22s ease }
  .nav-circle:hover{ transform:translateY(-6px); padding:0.65rem 1.4rem; background: var(--btn-accent, linear-gradient(90deg,var(--accent),var(--accent-2))); color:#fff; box-shadow:0 10px 30px rgba(2,6,23,0.6); border-radius:999px }

  /* background blobs */
  .page-bg { position: fixed; inset:0; pointer-events:none; z-index:0; }
  .page-bg::before{ content:''; position:fixed; right:-8%; top:140px; width:520px; height:520px; background:radial-gradient(circle at 30% 30%, rgba(34,193,195,0.07), rgba(124,92,255,0.04) 40%, transparent 60%); filter:blur(46px); z-index:0; transform:rotate(12deg); }
  .page-bg::after{ content:''; position:fixed; left:-6%; bottom:0; width:420px; height:420px; background:radial-gradient(circle at 70% 70%, rgba(255,122,182,0.06), rgba(124,92,255,0.04) 40%, transparent 60%); filter:blur(40px); z-index:0; transform:rotate(-8deg); }


   .resume-section {
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: 40px;
    margin-bottom: 50px;
  }

  .resume-section h2 {
      margin: 0;
      font-size: 1.8rem;
      line-height: 1.3;
  }

  .timeline-item {
      display: grid;
      grid-template-columns: 180px 1fr;
      align-items: start;
      margin-bottom: 30px;
  }

  .timeline-item .year {
      font-weight: 600;
      color: #777;
      font-size: 0.95rem;
  }

  .timeline-item .role {
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 6px;
  }

  .timeline-item p {
      margin: 0;
      color: #dadadaff;
      line-height: 1.6;
  }



  /* page header simple */
  .page-header{ max-width:1200px; margin:0 auto; padding:84px 24px 20px; position:relative; z-index:2 }
  .page-header h1{ font-size:2.8rem; color:var(--text); margin-bottom:6px }
  .page-header .subtitle{ color:var(--muted); font-size:1.05rem }

  .container{ max-width:900px; margin:0 auto; padding:28px 24px 120px; z-index:2; position:relative }
  .card{ background:var(--surface); padding:28px; border-radius:12px; box-shadow:var(--shadow); border:1px solid rgba(255,255,255,0.02); color:var(--text); margin-bottom:20px }
  .card h2{ font-size:1.6rem; color:var(--accent-2); margin-bottom:10px }
  .skill-tag{ display:inline-block; padding:8px 16px; background:rgba(255,255,255,0.02); color:var(--text); border-radius:20px; margin:4px; font-weight:600; border:1px solid rgba(255,255,255,0.02) }

  .site-footer{ background:linear-gradient(180deg, rgba(8,12,18,0.98), rgba(12,16,24,0.98)); color:var(--muted); padding:48px 2rem 28px; border-top:1px solid rgba(255,255,255,0.03); margin-top:48px; position:relative; z-index:2 }
  .site-footer .footer-grid{ max-width:1200px; margin:0 auto; display:flex; align-items:flex-start; justify-content:space-between; gap:16px; padding:0 8px }

  @media(max-width:900px){
    .page-header{ padding:64px 18px 18px; text-align:center }
    .container{ padding:18px }
    .page-header h1{ font-size:2.2rem }
  }
</style>
</head>
<body>

<div class="page-bg" aria-hidden="true"></div>

<!-- NAV -->
<div class="nav-wrapper" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="/" class="brand" aria-label="Home">
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

<!-- page header -->
<section class="page-header">
  <h1>My Resume</h1>
  <p class="subtitle">Professional background & experience</p>
</section>

<!-- content -->
<main class="container" role="main">
  <div class="card resume-section">
      <h2>Work<br>Experience</h2>

      <div>
          <div class="timeline-item">
              <div class="year">September 2022 – October 2022</div>
              <div>
                  <div class="role">Helper Mechanic (OJT)</div>
                  <p>Easy Chek Auto Center</p>
              </div>
          </div>

          <div class="timeline-item">
              <div class="year">2024 – Present</div>
              <div>
                  <div class="role">Helper Cook</div>
                  <p>Savannah Resort Hotel</p>
              </div>
          </div>
      </div>
  </div>


  <div class="card resume-section">
      <h2>Education</h2>

      <div>
          <div class="timeline-item">
              <div class="year">2010 – 2016</div>
              <div>
                  <div class="role">Primary</div>
                  <p>Anunas Elementary School</p>
              </div>
          </div>

          <div class="timeline-item">
              <div class="year">2016 – 2023</div>
              <div>
                  <div class="role">Secondary</div>
                  <p>Angeles City National Trade School</p>
              </div>
          </div>

          <div class="timeline-item">
              <div class="year">2023 – Present</div>
              <div>
                  <div class="role">BS in Computer Science</div>
                  <p>City College of Angeles</p>
              </div>
          </div>
      </div>
  </div>

  <div class="card resume-section">
      <h2>Skills</h2>

      <div>
          <span class="skill-tag">Laravel / PHP</span>
          <span class="skill-tag">Network Simulation & Design using Cisco Packet Tracer</span>
          <span class="skill-tag">HTML / CSS / UI Design</span>
          <span class="skill-tag">Python</span>
      
      
      
      </div>
  </div>

</main>

<!-- footer -->
<footer class="site-footer grid-footer" role="contentinfo">
  <div class="footer-grid">
    <div class="footer-col footer-left">
      <h5>Phone</h5>
      <div class="footer-item"><a>123-456-7890</a></div>
    </div>

    <div class="footer-col footer-center">
      <h5>Email</h5>
      <div class="footer-item"><a href="mailto:info@mysite.com">info@mysite.com</a></div>
    </div>

    <div class="footer-col footer-follow">
      <h5>Follow Me</h5>
      <div class="footer-item socials">
        <a class="social" href="https://www.instagram.com/yipee404_/" aria-label="Instagram">in</a>
        <a class="social" href="https://x.com/mrvjmstrr12" aria-label="Twitter">𝕏</a>
      </div>
    </div>

    <div class="footer-col footer-copyright-col">
      <div class="footer-copyright">
        <div>© 2025 By Marvi James Torero</div>
        <div class="footer-meta">Powered and secured by <a href="#" class="footer-meta-link">Web</a></div>
      </div>
    </div>
  </div>
</footer>

<script>
  (function(){
    const nav = document.querySelector('.nav-wrapper');
    function onScroll(){ window.scrollY > 20 ? nav.classList.add('nav-opaque') : nav.classList.remove('nav-opaque'); }
    onScroll();
    document.addEventListener('scroll', onScroll, { passive:true });
  })();
</script>

</body>
</html>
