function loaderOne() {
  var loader = document.getElementsByClassName('lottie-animation');
  function loadBMAnimation(loader) {
    var animation = bodymovin.loadAnimation({
      container: loader,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path:
        'https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6fe9866ec5c3d749f65530_svg%20animation%20%231.json'
    });
  }
  for (var i = 0; i < loader.length; i++) {
    loadBMAnimation(loader[i]);
  }
}

function loaderTwo() {
  var loader = document.getElementsByClassName('side-holder-top__img');
  function loadBMAnimation(loader) {
    var animation = bodymovin.loadAnimation({
      container: loader,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path:
        'https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177bbdc2d76420eecc7a_svg%20animation%20%232.json'
    });
  }
  for (var i = 0; i < loader.length; i++) {
    loadBMAnimation(loader[i]);
  }
}

function loaderThree() {
  var loader = document.getElementsByClassName('side-holder-bottom__img');
  function loadBMAnimation(loader) {
    var animation = bodymovin.loadAnimation({
      container: loader,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path:
        'https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177a071a4f0d2b091323_svg%20animation%20%233.json'
    });
  }
  for (var i = 0; i < loader.length; i++) {
    loadBMAnimation(loader[i]);
  }
}

function loaderFour() {
  var loader = document.getElementsByClassName('side-image-holder');
  function loadBMAnimation(loader) {
    var animation = bodymovin.loadAnimation({
      container: loader,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path:
        'https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177af67c9f13d8f4f762_svg%20animation%20%234.json'
    });
  }
  for (var i = 0; i < loader.length; i++) {
    loadBMAnimation(loader[i]);
  }
}

function loaderFive() {
  var loader = document.getElementsByClassName('side-image-holder--one');
  function loadBMAnimation(loader) {
    var animation = bodymovin.loadAnimation({
      container: loader,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path:
        'https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177ac9f56d5b406fc030_svg%20animation%20%235.json'
    });
  }
  for (var i = 0; i < loader.length; i++) {
    loadBMAnimation(loader[i]);
  }
}

function loaderSix() {
  var loader = document.getElementsByClassName('testimonial-animation');
  function loadBMAnimation(loader) {
    var animation = bodymovin.loadAnimation({
      container: loader,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path:
        'https://uploads-ssl.webflow.com/5e31d7f7c1355ccbf72b19cc/5e6a177ac9f56d75d36fc02f_svg%20animation%20%236.json'
    });
  }
  for (var i = 0; i < loader.length; i++) {
    loadBMAnimation(loader[i]);
  }
}

loaderOne();
loaderTwo();
loaderThree();
loaderFour();
loaderFive();
loaderSix();
