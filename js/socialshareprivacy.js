(function ($, Drupal, drupalSettings) {
  "use strict";
  Drupal.behaviors.initsocialSharePrivacy = {
    attach: function (context, settings) {
      $(document).ready(function () {
          $('.share').once().socialSharePrivacy({
            path_prefix: '/modules/custom/socialshareprivacy/',
            css_path: 'css/jquery.socialshareprivacy.min.css',
            order: ["facebook", "twitter", "buffer", "delicious", "disqus",
              "flattr", "gplus", "hackernews", "linkedin", "pinterest", "reddit", "stumbleupon", "xing", "tumblr", "fbshare", "mail"]
          });
      });
    }
  };
})(jQuery, Drupal, drupalSettings);
