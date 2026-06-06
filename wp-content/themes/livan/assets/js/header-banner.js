function headerBanner() {
  // __content fades in via its own CSS keyframe animation — no JS needed.
  // __cta slides up when .is-visible is added, triggering the CSS transition.
  const cta = document.querySelector('.header-banner__cta');
  if (cta) {
    setTimeout(() => cta.classList.add('is-visible'), 2000);
  }

  const scrollBtn = document.getElementById('scrollButton');
  if (scrollBtn) {
    scrollBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: window.scrollY + 500, behavior: 'smooth' });
    });
  }
}

export default headerBanner;
