<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Projects</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
@vite(['resources/css/design.css', 'resources/js/app.js'])
<style>
  /* theme copied from homepage */
  :root{
    --bg: #0b1220; --surface:#0f1724; --card: rgba(255,255,255,0.02); --text:#e6eef8; --muted:#94a3b8; --accent:#22c1c3; --accent-2:#ff7ab6; --accent-3:#7c5cff; --shadow:0 10px 30px rgba(2,6,23,0.7);
  }
  body{ font-family:'Poppins',sans-serif; margin:0; background:var(--bg); color:var(--text); padding-top:50px; overflow-x:hidden }
  a{ text-decoration:none; color:inherit }
  /* nav / header */
  .nav-wrapper{ position:fixed; top:0; left:0; right:0; display:flex; justify-content:center; z-index:60; background:transparent; transition:background .22s ease, box-shadow .22s ease; height:112px; align-items:center }
  .nav-wrapper.nav-opaque{ background: linear-gradient(180deg, rgba(11,18,32,0.6), rgba(11,18,32,0.4)); box-shadow:0 8px 30px rgba(2,6,23,0.6); backdrop-filter: blur(6px); }
  .nav-inner{ width:100%; max-width:1400px; display:flex; align-items:center; justify-content:space-between; padding:18px 56px; height:100%; margin:0 auto }
  .brand{ display:flex; flex-direction:column; color:var(--text); text-decoration:none }
  .brand-name{ font-weight:800; font-size:1rem }
  .brand-role{ font-size:0.72rem; color:var(--muted); margin-top:2px }
  .nav-links{ display:flex; gap:20px; align-items:center }
  .nav-circle{ display:inline-flex; align-items:center; justify-content:center; font-size:1.05rem; font-weight:700; color:var(--text); padding:0 12px; height:48px; border-radius:8px; border:1px solid transparent; background:transparent; transition:background .22s ease, color .22s ease, transform .22s ease, box-shadow .22s ease, padding .22s ease }
  .nav-circle:hover{ transform:translateY(-6px); padding:0.65rem 1.4rem; background: var(--btn-accent, linear-gradient(90deg,var(--accent),var(--accent-2))); color:#fff; box-shadow:0 10px 30px rgba(2,6,23,0.6); border-radius:999px }

  /* page background blobs */
  .page-bg { position: fixed; inset:0; pointer-events:none; z-index:0; }
  .page-bg::before{ content:''; position:fixed; right:-8%; top:140px; width:520px; height:520px; background:radial-gradient(circle at 30% 30%, rgba(34,193,195,0.07), rgba(124,92,255,0.04) 40%, transparent 60%); filter:blur(46px); z-index:0; transform:rotate(12deg); }
  .page-bg::after{ content:''; position:fixed; left:-6%; bottom:0; width:420px; height:420px; background:radial-gradient(circle at 70% 70%, rgba(255,122,182,0.06), rgba(124,92,255,0.04) 40%, transparent 60%); filter:blur(40px); z-index:0; transform:rotate(-8deg); }

  /* page header (clean) */
  .page-header{ max-width:1200px; margin:0 auto; padding:84px 24px 20px; position:relative; z-index:2 }
  .page-header h1{ font-size:2.8rem; color:var(--text); margin-bottom:6px }
  .page-header .subtitle{ color:var(--muted); font-size:1.05rem }

  .container{ max-width:1200px; margin:0 auto; padding:28px 24px 120px; z-index:2; position:relative }
  .grid{ display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:30px }
  .card{ background:var(--surface); border-radius:12px; overflow:hidden; box-shadow:var(--shadow); transition:transform .28s ease; color:var(--text); border:1px solid rgba(255,255,255,0.02) }
  .card img{ width:100%; height:180px; object-fit:cover; display:block }
  .card-content{ padding:18px }
  .card h3{ margin:0 0 10px; font-size:1.2rem; color:var(--accent-2) }
  .card p{ color:var(--muted); line-height:1.5 }

  /* footer */
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
    <a href="/home" class="brand" aria-label="Home">
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

<!-- page header (clean) -->
<section class="page-header">
  <h1>My Projects</h1>
  <p class="subtitle">A showcase of the work I've created and contributed to</p>
</section>

<!-- content -->
<main class="container" role="main">
  <div class="grid">
    <article class="card">
      <img src="DBMS.jpg" alt="DBMS">
      <div class="card-content">
        <h3>Barangay Document Management System</h3>
        <p>A modern web application built with HTML, CSS, PHP, and MYSQL, focusing on distribution of government documents.</p>
      </div>
    </article>

    <article class="card">
      <img src="jobsphere.jpg" alt="JobSphere">
      <div class="card-content">
        <h3>JobSphere</h3>
        <p><br>An interactive mobile UI/UX designed using figma, focusing on helping student find part-time job online.</p>
      </div>
    </article>

    <article class="card">
      <img src="budgetWise.jpg" alt="budgetWise">
      <div class="card-content">
        <h3>BudgetWise</h3>
        <p>A personal finance management system develop using python, focusing on helping users track and manage their income and expenses efficiently.</p>
      </div>
    </article>
  </div>
</main>


<!-- Modal for project details -->
<div id="project-modal" class="modal" aria-hidden="true">
  <div class="modal-content">
    <span class="modal-close" aria-label="Close">&times;</span>
    <h2 id="modal-title"></h2>
    <img id="modal-img" src="" alt="">
    <p id="modal-desc"></p>
  </div>
</div>


<script>
const cards = document.querySelectorAll('.card');
const modal = document.getElementById('project-modal');
const modalTitle = document.getElementById('modal-title');
const modalImg = document.getElementById('modal-img');
const modalDesc = document.getElementById('modal-desc');
const modalClose = document.querySelector('.modal-close');

// Details for each project
const projectDetails = [
  {
    title: "Barangay Document Management System",
    img: "DBMS.jpg",
    desc: "A modern web application built with HTML, CSS, PHP, and MYSQL, focusing on distribution of government documents. Features include document tracking, user management, and secure database integration."
  },
  {
    title: "JobSphere",
    img: "jobsphere.jpg",
    desc: "An interactive mobile UI/UX designed using Figma, helping students find part-time jobs online. Includes a job search system, profile management, and real-time notifications."
  },
  {
    title: "BudgetWise",
    img: "budgetWise.jpg",
    desc: "A personal finance management system developed using Python, helping users track and manage their income and expenses efficiently. Features dashboards, budget categories, and expense reports."
  }
];

// Open modal when clicking a card
cards.forEach((card, index) => {
  card.addEventListener('click', () => {
    modalTitle.textContent = projectDetails[index].title;
    modalImg.src = projectDetails[index].img;
    modalImg.alt = projectDetails[index].title;
    modalDesc.textContent = projectDetails[index].desc;
    modal.style.display = 'flex';
  });
});

// Close modal
modalClose.addEventListener('click', () => modal.style.display = 'none');
window.addEventListener('click', e => {
  if (e.target === modal) modal.style.display = 'none';
});
</script>



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
