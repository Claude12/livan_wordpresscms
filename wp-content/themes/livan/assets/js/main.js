import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import showMoreLink from './show-more';
import onPodcast from './podcast';

jQuery(() => {
  showMoreLink();
  onPodcast();
  // ... any other imports and calls
});
