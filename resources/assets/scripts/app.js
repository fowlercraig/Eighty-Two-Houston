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

    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    // We listen to the resize event
    window.addEventListener('resize', () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

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
