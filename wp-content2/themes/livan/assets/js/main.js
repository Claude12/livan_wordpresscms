import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import headerNav from './header';
import headerBanner from './header-banner';
import smoothScroll from './smooth-scroll';

jQuery(() => {
  headerNav();
  headerBanner();
  smoothScroll();
  // ... any other imports and calls
});
