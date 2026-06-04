import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import headerNav from './header';
import headerBanner from './header-banner';
import smoothScroll from './smooth-scroll';
import animations from './animations';

jQuery(() => {
  headerNav();
  headerBanner();
  smoothScroll();
  animations();
  // ... any other imports and calls
});
