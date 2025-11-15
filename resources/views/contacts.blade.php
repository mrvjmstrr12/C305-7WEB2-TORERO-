<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Contact</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/design.css', 'resources/js/app.js'])
<style>
  /* ============== THEME (copied from homepage) ============== */
  :root{
    --bg: #0b1220;
    --surface: #0f1724;
    --card: rgba(255,255,255,0.02);
    --text: #e6eef8;
    --muted: #94a3b8;
    --accent: #22c1c3;
    --accent-2: #ff7ab6;
    --accent-3: #7c5cff;
    --shadow: 0 10px 30px rgba(2,6,23,0.7);
  }
  html,body{ height:100%; }
  body{
    font-family: 'Poppins', sans-serif;
    margin:0;
    background:var(--bg);
    color:var(--text);
    padding-top:50px; /* keep same header spacing */
    overflow-x:hidden;
  }
  a{ text-decoration:none; color:inherit }
  h1,h2,h3{ margin:0; color:var(--text) }
  p{ color:var(--muted); line-height:1.6 }

  /* NAV */
  .nav-wrapper{ position:fixed; top:0; left:0; right:0; display:flex; justify-content:center; z-index:60; background:transparent; transition:background .22s ease, box-shadow .22s ease; height:112px; align-items:center }
  .nav-wrapper.nav-opaque{ background: linear-gradient(180deg, rgba(11,18,32,0.6), rgba(11,18,32,0.4)); box-shadow:0 8px 30px rgba(2,6,23,0.6); backdrop-filter: blur(6px); }
  .nav-inner{ width:100%; max-width:1400px; display:flex; align-items:center; justify-content:space-between; padding:18px 56px; height:100%; margin:0 auto }
  .brand{ display:flex; flex-direction:column; color:var(--text); text-decoration:none }
  .brand-name{ font-weight:800; font-size:1rem }
  .brand-role{ font-size:0.72rem; color:var(--muted); margin-top:2px }
  .nav-links{ display:flex; gap:20px; align-items:center }
  .nav-circle{ display:inline-flex; align-items:center; justify-content:center; font-size:1.05rem; font-weight:700; color:var(--text); padding:0 12px; height:48px; border-radius:8px; border:1px solid transparent; background:transparent; transition:background .22s ease, color .22s ease, transform .22s ease, box-shadow .22s ease, padding .22s ease }
  .nav-circle:hover{ transform:translateY(-6px); padding:0.65rem 1.4rem; background: var(--btn-accent, linear-gradient(90deg,var(--accent),var(--accent-2))); color:#fff; box-shadow:0 10px 30px rgba(2,6,23,0.6); border-radius:999px }
  .resume-btn{ --btn-accent: linear-gradient(90deg,var(--accent),var(--accent-2)) }
  .projects-btn{ --btn-accent: linear-gradient(90deg,var(--accent-2),var(--accent-3)) }
  .contact-btn{ --btn-accent: linear-gradient(90deg,var(--accent-3),var(--accent)) }

  /* PAGE BACKGROUND BLOBS (same visual as homepage) */
  .page-bg { position: fixed; inset:0; pointer-events:none; z-index:0; }
  .page-bg::before{
    content:''; position:fixed; right:-8%; top:140px; width:520px; height:520px; background:radial-gradient(circle at 30% 30%, rgba(34,193,195,0.07), rgba(124,92,255,0.04) 40%, transparent 60%); filter:blur(46px); z-index:0; transform:rotate(12deg);
  }
  .page-bg::after{
    content:''; position:fixed; left:-6%; bottom:0; width:420px; height:420px; background:radial-gradient(circle at 70% 70%, rgba(255,122,182,0.06), rgba(124,92,255,0.04) 40%, transparent 60%); filter:blur(40px); z-index:0; transform:rotate(-8deg);
  }

  /* Small hero/banner for contact (Option C) */
  .thin-hero{ max-width:1200px; margin:0 auto; padding:64px 24px 36px; text-align:left; position:relative; z-index:2 }
  .thin-hero h1{ font-size:2.6rem; margin-bottom:6px; color:var(--text) }
  .thin-hero .subtitle{ color:var(--muted); font-size:1.05rem }

  /* CONTENT */
  .container{ width:55%; margin:0 auto; padding:40px 0 120px; position:relative; z-index:2 }
  .card{ background:var(--surface); border-radius:12px; padding:28px; box-shadow:var(--shadow); border:1px solid rgba(255,255,255,0.02); color:var(--text) }
  label{ font-weight:600; display:block; margin-top:12px; color:var(--text) }
  input, textarea{ width:100%; padding:12px; margin-top:8px; border-radius:8px; border:1px solid rgba(255,255,255,0.04); background:rgba(255,255,255,0.02); color:var(--text); font-size:1rem }
  textarea{ height:140px; resize:none; }
  button{ margin-top:18px; width:100%; padding:12px; background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:#fff; border:none; border-radius:8px; font-weight:700; cursor:pointer }
  .socials{ margin-top:28px; text-align:center; color:var(--muted) }
  .socials a{ margin:0 10px; color:var(--accent-2); font-weight:700; text-decoration:none }

  /* FOOTER (copied) */
  .site-footer{ background:linear-gradient(180deg, rgba(8,12,18,0.98), rgba(12,16,24,0.98)); color:var(--muted); padding:48px 2rem 28px; border-top:1px solid rgba(255,255,255,0.03); margin-top:48px; position:relative; z-index:2 }
  .site-footer .footer-grid{ max-width:1200px; margin:0 auto; display:flex; align-items:flex-start; justify-content:space-between; gap:16px; padding:0 8px }
  .site-footer h5{ margin:0 0 12px 0; font-size:0.95rem; color:var(--text); font-weight:700 }
  .footer-item a{ color:var(--muted); text-decoration:none; font-weight:600 }

  /* Responsive */
  @media(max-width:900px){
    .container{ width:92%; }
    .thin-hero{ padding:40px 18px 26px; text-align:center }
    .thin-hero h1{ font-size:2rem }
    .nav-inner{ padding:12px 20px }
    .site-footer .footer-grid{ flex-direction:column; gap:12px; text-align:center }
  }
</style>
</head>
<body>

<!-- background blobs -->
<div class="page-bg" aria-hidden="true"></div>

<!-- NAV (same markup) -->
<div class="nav-wrapper" role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <a href="/" class="brand" aria-label="Home">
      <span class="brand-name">Marvi James Torero</span>
      <span class="brand-role">Student</span>
    </a>
    <div class="nav-links" role="menubar">
      <a href="/resume" class="nav-circle resume-btn" role="menuitem">Resume</a>
      <a href="/projects" class="nav-circle projects-btn" role="menuitem">Projects</a>
      <a href="/contact" class="nav-circle contact-btn" role="menuitem">Contact</a>
    </div>
  </div>
</div>

<!-- thin hero (Contact) -->
<section class="thin-hero" role="banner">
  <h1>Contact Me</h1>
  <p class="subtitle">Let's connect and build something great together</p>
</section>

<!-- content -->
<div class="container">
  <div class="card">
    <form method="post" action="#">
      <!-- add CSRF in Laravel when you implement -->
      <label for="name">Your Name</label>
      <input id="name" name="name" type="text" placeholder="Enter your name" />

      <label for="email">Email Address</label>
      <input id="email" name="email" type="email" placeholder="Enter your email" />

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message..."></textarea>

      <button type="submit">Send Message</button>
    </form>

    <div class="socials">
      <p>Or reach me at:</p>
      <a href="https://mail.google.com/mail/u/0/?hl=en#inbox">Email</a> ·
      <a href="https://github.com/mrvjmstrr12/" target="_blank" rel="noopener">GitHub</a> ·
      <a href="https://www.linkedin.com/" target="_blank" rel="noopener">LinkedIn</a>
    </div>
  </div>
</div>

<!-- FOOTER -->
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
  // toggle nav opacity on scroll (same behavior as homepage)
  (function(){
    const nav = document.querySelector('.nav-wrapper');
    function onScroll(){ window.scrollY > 20 ? nav.classList.add('nav-opaque') : nav.classList.remove('nav-opaque'); }
    onScroll();
    document.addEventListener('scroll', onScroll, { passive:true });
  })();
</script>

</body>
</html>
