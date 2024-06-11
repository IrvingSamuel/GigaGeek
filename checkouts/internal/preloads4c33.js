
    (function() {
      var baseURL = "https://cdn.shopify.com/shopifycloud/checkout-web/assets/";
      var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.baseline.pt-BR.012e8c3b6e774a35ab43.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/8163.baseline.pt-BR.919bf38859ae731c1e4e.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/222.baseline.pt-BR.fd3b11626e479920ca3c.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/6134.baseline.pt-BR.1bc59c356c867cc155a0.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.pt-BR.57cc02be186bbe11a6f1.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/9315.baseline.pt-BR.2d4becc4565e87d9a9a1.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/4979.baseline.pt-BR.2fb560fde5f15cdc761e.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/5669.baseline.pt-BR.604aeedc84b0b02109fd.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/4768.baseline.pt-BR.39790ea38d3373fdbdd1.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2978.baseline.pt-BR.847f4f87181ea04eb916.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/6117.baseline.pt-BR.63050cf451fa2b2087b0.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/3678.baseline.pt-BR.4c148a505b7be3975da7.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/8156.baseline.pt-BR.e78f75f523721f589cbc.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/OnePage.baseline.pt-BR.96d76f24e850b6c49564.js"];
      var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/8163.baseline.pt-BR.61575ce093d354e3d63d.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.pt-BR.c75a9d85fa4c461740f5.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/6268.baseline.pt-BR.83b6459c2e264547d80b.css"];
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
  