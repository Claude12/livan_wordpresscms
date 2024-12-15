import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import headerNav from './header';
import headerBanner from './header-banner';
import onPodcast from './podcast';

jQuery(() => {
  headerNav();
  headerBanner();
  onPodcast();
  // ... any other imports and calls
});
