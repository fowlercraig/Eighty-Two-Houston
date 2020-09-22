/**
 * External Dependencies
 */
import 'jquery';
const feather = require('feather-icons')
import { tns } from "tiny-slider/src/tiny-slider"
import 'alpinejs'

$(document).ready(() => {
  feather.replace();
  var options = {
    'carousel': {
      container: '.carousel',
      loop: true,
      mode: 'gallery',
      items: 1,
      slideBy: 'page',
      nav: false,    
      controls: true,
      autoplay: false,
      speed: 400,
      autoplayButtonOutput: false,
      mouseDrag: false,
      lazyload: true,
      controlsContainer: "#carousel-controls"
    }
  }

  var doc = document,
      win = window,
      initFns = {},
      sliders = new Object();

  for (var i in options) {
    var item = options[i];
    item.container = '#' + i;
    if (doc.querySelector(item.container)) {
      sliders[i] = tns(options[i]);
    }
  }
});
