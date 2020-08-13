/**
 * External Dependencies
 */
import 'jquery';
const feather = require('feather-icons')
feather.replace()
import Rellax from 'rellax';
import Headroom from "headroom.js";
import { tns } from 'tiny-slider/src/tiny-slider'
//var Isotope = require('isotope-layout');

var myElement = document.querySelector("header");
var headroom  = new Headroom(myElement);

$(document).ready(() => {

  var rellax = new Rellax('.rellax');

  headroom.init();

  const slider1 = tns({
    container: '.carousel-cocktails',
    loop: true,
    mode: 'gallery',
    items: 1,
    slideBy: 'page',
    nav: false,    
    controls: false,
    autoplay: true,
    speed: 400,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: true,
  });

  const slider2 = tns({
    container: '.carousel-drinks',
    loop: true,
    mode: 'gallery',
    items: 1,
    slideBy: 'page',
    nav: false,    
    autoplay: true,
    controls: false,
    speed: 400,
    autoplayButtonOutput: false,
    mouseDrag: true,
    lazyload: true,
  });

});
