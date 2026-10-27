/* Formulaires de devis, d'étude sur mesure et de contact */
(function () {
  'use strict';
  var CFG = window.SEF || {};
  document.querySelectorAll('[data-sef]').forEach(function (form) {
    var err = form.querySelector('.sef-error');
    var ok = form.querySelector('.sef-ok');
    var type = (form.elements.type && form.elements.type.value) || 'contact';
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      err.hidden = true;
      var g = function (n) { return (form.elements[n] && form.elements[n].value || '').trim(); };
      var manque = [];
      if (!g('nom')) manque.push('votre nom');
      if (!g('societe')) manque.push('votre entreprise');
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(g('email'))) manque.push('une adresse e-mail valide');
      if (g('telephone').replace(/\D/g, '').length < 9) manque.push('un numéro de téléphone');
      if (type === 'devis') {
        if (!g('metier')) manque.push('votre activité');
        if (!g('volume')) manque.push('votre nombre d’appels');
      } else if (!g('message')) {
        manque.push('votre message');
      }
      if (!form.elements.consentement.checked) manque.push('votre accord pour être recontacté');
      if (manque.length) {
        err.textContent = 'Merci d’indiquer ' + manque.join(', ') + '.';
        err.hidden = false;
        err.scrollIntoView({ block: 'nearest' });
        return;
      }
      var btn = form.querySelector('[type=submit]'), label = btn.textContent;
      btn.disabled = true; btn.textContent = 'Envoi…';
      var fd = new FormData(form); fd.append('action', 'sef_envoyer');
      fetch(CFG.ajax, { method: 'POST', body: fd, credentials: 'same-origin' })
        .then(function (r) { return r.json().catch(function () { return { success: false, data: {} }; }); })
        .then(function (res) {
          if (res.success) {
            Array.prototype.forEach.call(form.children, function (c) { if (c !== ok) c.hidden = true; });
            ok.hidden = false;
            ok.scrollIntoView({ block: 'nearest' });
          } else {
            err.textContent = (res.data && res.data.message) || 'L’envoi a échoué. Réessayez ou appelez-nous.';
            err.hidden = false;
          }
        })
        .catch(function () { err.textContent = 'Connexion impossible. Vérifiez votre réseau et réessayez.'; err.hidden = false; })
        .then(function () { btn.disabled = false; btn.textContent = label; });
    });
  });
})();
