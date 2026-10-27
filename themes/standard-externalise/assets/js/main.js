/* Standard Externalisé — menu mobile, sous-menus, carrousel des témoignages */
(function () {
  'use strict';

  var toggle = document.querySelector('.menu-toggle');
  var nav = document.getElementById('menu-principal');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  }

  // Sous-menus : ouverture au clic (mobile, clavier) ; au survol sur ordinateur via le CSS.
  var items = document.querySelectorAll('.has-sub');
  items.forEach(function (li) {
    var btn = li.querySelector('button');
    btn.addEventListener('click', function () {
      var open = !li.classList.contains('open');
      items.forEach(function (o) { o.classList.remove('open'); o.querySelector('button').setAttribute('aria-expanded', 'false'); });
      if (open) { li.classList.add('open'); btn.setAttribute('aria-expanded', 'true'); }
    });
  });
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.has-sub')) items.forEach(function (o) { o.classList.remove('open'); o.querySelector('button').setAttribute('aria-expanded', 'false'); });
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') items.forEach(function (o) { o.classList.remove('open'); o.querySelector('button').setAttribute('aria-expanded', 'false'); });
  });

  // Carrousel
  var track = document.querySelector('.car-track');
  if (track) {
    var step = function () { var c = track.querySelector('.quote'); return c ? c.getBoundingClientRect().width + 20 : 300; };
    var prev = document.querySelector('.car-prev'), next = document.querySelector('.car-next');
    if (prev) prev.addEventListener('click', function () { track.scrollBy({ left: -step(), behavior: 'smooth' }); });
    if (next) next.addEventListener('click', function () { track.scrollBy({ left: step(), behavior: 'smooth' }); });
  }
})();
