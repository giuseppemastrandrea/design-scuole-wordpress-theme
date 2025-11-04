var _paq = window._paq = window._paq || [];

// 🔹 Configurazione campagna (obbligatoria per far leggere i parametri mtm_)
_paq.push(['setCampaignNameKey', 'mtm_campaign']);
_paq.push(['setCampaignKeywordKey', 'mtm_keyword']);
_paq.push(['setCampaignSourceKey', 'mtm_source']);
_paq.push(['setCampaignMediumKey', 'mtm_medium']);
_paq.push(['setCampaignContentKey', 'mtm_content']);

// 🔹 Tracciamento standard
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);

(function () {
  var u = "https://ingestion.webanalytics.italia.it/";
  _paq.push(['setTrackerUrl', u + 'matomo.php']);
  _paq.push(['setSiteId', '616']); // <-- conferma che questo è l’ID corretto per il tuo sito
  var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
  g.async = true; g.src = u + 'matomo.js';
  s.parentNode.insertBefore(g, s);
})();