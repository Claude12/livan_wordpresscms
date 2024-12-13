import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import headerNav from './header';
import onPodcast from './podcast';

jQuery(() => {
  headerNav();
  onPodcast();
  // ... any other imports and calls
});
