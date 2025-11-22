@include('components.header')

<!-- Hero -->
<section class="hero">
  <div class="hero-inner">
    <!-- large circular profile on the left -->
    <div class="hero-left">
      <div class="pfp-wrap">
        <div class="pfp-wrap css-ring">
          <img class="pfp" src="/me.jpg" alt="Profile photo of Marvi James Torero">
        </div>
      </div>
    </div>

    <!-- greeting + short about + circular CTAs -->
    <div class="hero-right">
      <h1 style="font-size:clamp(4.2rem,8vw,6.4rem);margin:0 0 0.6rem 0;">Hello</h1>
      <h3 style="margin-top:0.4rem;color:var(--text);font-weight:700">A Bit about me</h3>
      <p class="hero-sub">I'm Marvi, a passionate student developer with a focus on front-end web experiences, UI design, and accessible interfaces. I enjoy learning new technologies and turning ideas into working products with attention to performance, accessibility, and visual polish.</p>

      <div style="display:flex;gap:28px;align-items:center;justify-content:flex-start;margin-top:28px;flex-wrap:wrap">
        <a href="/resume" class="nav-circle" style="width:120px;height:120px;border-radius:999px;display:inline-flex;align-items:center;justify-content:center;background:linear-gradient(135deg, #22c1c3, #1a9a9d);color:#fff;font-weight:800;font-size:1.05rem;box-shadow:0 12px 30px rgba(34,193,195,0.2);">Resume</a>
        <a href="/projects" class="nav-circle" style="width:120px;height:120px;border-radius:999px;display:inline-flex;align-items:center;justify-content:center;background:linear-gradient(135deg, #ff7ab6, #ff5d9f);color:#fff;font-weight:800;font-size:1.05rem;box-shadow:0 12px 30px rgba(255,122,182,0.2);">Projects</a>
        <a href="/contact" class="nav-circle" style="width:120px;height:120px;border-radius:999px;display:inline-flex;align-items:center;justify-content:center;background:linear-gradient(135deg, #7c5cff, #6b4ceb);color:#fff;font-weight:800;font-size:1.05rem;box-shadow:0 12px 30px rgba(124,92,255,0.2);">Contact</a>
      </div>
    </div>
  </div>
</section>

@include('components.footer')
