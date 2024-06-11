
    (function() {
      var baseURL = "https://cdn.shopify.com/shopifycloud/checkout-web/assets/";
      var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.baseline.en.c9a85efce04bdc5d0e8e.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/329.baseline.en.3649edf15a1062989c8a.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/650.baseline.en.c5b53bd8b84d7014e52b.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/180.baseline.en.bfc04e16eb22b823d75d.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.6aefab94b61a2de35687.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/912.baseline.en.9697dcf669e47273b6d2.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/625.baseline.en.e1e2ed31281f96c3f1a1.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/467.baseline.en.4b7cc04dfee667236490.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/766.baseline.en.2d27195bbe5c75fd5c53.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/128.baseline.en.02c6d450ae73602fbd4a.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/660.baseline.en.5c2461b629ae805c3438.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/OnePage.baseline.en.56768903ca44ee90a73a.js"];
      var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/329.baseline.en.42acfc4d3349b98feb91.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.b33fe50d6fdb42d0dcda.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/268.baseline.en.c84d51f3728ee575378f.css"];
      var fontPreconnectUrls = [];
      var fontPrefetchUrls = [];
      var imgPrefetchUrls = [];

      function preconnect(url, callback) {
        var link = document.createElement('link');
        link.rel = 'dns-prefetch preconnect';
        link.href = url;
        link.crossOrigin = '';
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      }

      function preconnectAssets() {
        var resources = [baseURL].concat(fontPreconnectUrls);
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) preconnect(res[0], next);
        })();
      }

      function prefetch(url, as, callback) {
        var link = document.createElement('link');
        if (link.relList.supports('prefetch')) {
          link.rel = 'prefetch';
          link.fetchPriority = 'low';
          link.as = as;
          if (as === 'font') link.type = 'font/woff2';
          link.href = url;
          link.crossOrigin = '';
          link.onload = link.onerror = callback;
          document.head.appendChild(link);
        } else {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
          xhr.onloadend = callback;
          xhr.send();
        }
      }

      function prefetchAssets() {
        var resources = [].concat(
          scripts.map(function(url) { return [url, 'script']; }),
          styles.map(function(url) { return [url, 'style']; }),
          fontPrefetchUrls.map(function(url) { return [url, 'font']; }),
          imgPrefetchUrls.map(function(url) { return [url, 'image']; })
        );
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) prefetch(res[0], res[1], next);
        })();
      }

      function onLoaded() {
        preconnectAssets();
        prefetchAssets();
      }

      if (document.readyState === 'complete') {
        onLoaded();
      } else {
        addEventListener('load', onLoaded);
      }
    })();
  