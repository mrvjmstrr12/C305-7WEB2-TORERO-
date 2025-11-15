// Small nav scroll handler: add/remove .nav-opaque on scroll
(function(){
  const NAV = document.querySelector('.nav-wrapper');
  if(!NAV) return;

  const THRESHOLD = 40;
  let lastScroll = 0;

  function onScroll(){
    const y = window.scrollY || window.pageYOffset;
    if(y > THRESHOLD){
      NAV.classList.add('nav-opaque');
    } else {
      NAV.classList.remove('nav-opaque');
    }
    lastScroll = y;
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  // run once to set initial state
  onScroll();
})();
