
/**
 * @file
 * A JavaScript file for the theme.
 *
 */

(function ($, window, Drupal) {

  'use strict';

  var jsChildTheme = (function() {
    var custom = {};
    custom.customMethod = function (context, settings) {
      console.log(context);
      console.log(settings);
    };
    return custom;
  }());

  Drupal.behaviors.subtheme_child = {
    attach: function (context, settings) {
      jsChildTheme.customMethod(context, settings);
    }
  };

})(jQuery, window, Drupal);
