import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import headerNav from './header';
import headerBanner from './header-banner';
import smoothScroll from './smooth-scroll';
import animations from './animations';
import faqAccordion from './faq';

jQuery(() => {
  headerNav();
  headerBanner();
  smoothScroll();
  animations();
  faqAccordion();
});
