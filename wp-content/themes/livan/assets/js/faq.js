function faqAccordion() {
  const items = document.querySelectorAll('.faq-block__item');

  if (!items.length) return;

  // Open first item by default
  const firstAnswer = items[0].querySelector('.faq-block__answer');
  items[0].classList.add('_active');
  items[0].querySelector('.faq-block__question').setAttribute('aria-expanded', 'true');
  firstAnswer.setAttribute('aria-hidden', 'false');
  firstAnswer.style.maxHeight = firstAnswer.scrollHeight + 'px';

  items.forEach((item) => {
    const btn = item.querySelector('.faq-block__question');
    const answer = item.querySelector('.faq-block__answer');

    btn.addEventListener('click', () => {
      const isOpen = item.classList.contains('_active');

      // Close all
      items.forEach((i) => {
        i.classList.remove('_active');
        i.querySelector('.faq-block__question').setAttribute('aria-expanded', 'false');
        i.querySelector('.faq-block__answer').style.maxHeight = '0';
        i.querySelector('.faq-block__answer').setAttribute('aria-hidden', 'true');
      });

      // Open clicked if it was closed
      if (!isOpen) {
        item.classList.add('_active');
        btn.setAttribute('aria-expanded', 'true');
        answer.setAttribute('aria-hidden', 'false');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
}

export default faqAccordion;
