/**
 * External Dependencies
 */
import 'jquery';
const feather = require('feather-icons')
import Swup from 'swup';
import SwupSlideTheme from '@swup/slide-theme';
import SwupOverlayTheme from '@swup/overlay-theme';
import { tns } from "tiny-slider/src/tiny-slider"
import 'alpinejs'

$(document).ready(() => {

  const options = {
    linkSelector: 'a.swup-link',
  };
  
  const swup = new Swup({
    plugins: [new SwupOverlayTheme({
     color: '#000',
     duration: 600,
     direction: 'to-bottom',
    })],
    linkSelector: 'a.swup-link',
  });

  function init() {

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
      },
      'menu': {
        container: '.menu',
        loop: true,
        //mode: 'gallery',
        items: 1,
        slideBy: 'page',
        nav: false,    
        controls: true,
        autoplay: false,
        speed: 400,
        autoplayButtonOutput: false,
        mouseDrag: false,
        lazyload: true,
        controlsContainer: "#menu-controls"
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
  }

  init();
  // this event runs for every page view after initial load
  swup.on('contentReplaced', init);

});
