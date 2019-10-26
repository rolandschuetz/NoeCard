importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');

if (workbox) {
    console.log(`Yay! Workbox is loaded 🎉`);
} else {
    console.log(`Boo! Workbox didn't load 😬`);
}

workbox.routing.registerRoute(
    // Cache CSS files.
    /index\.html$/,
    new workbox.strategies.CacheFirst({
        // Use a custom cache name.
        cacheName: 'html-cache',
        plugins: [
            new workbox.expiration.Plugin({
                // Cache for a maximum of a week.
                maxAgeSeconds: 7 * 24 * 60 * 60,
            })
        ],
    })
);

/*
workbox.routing.registerRoute(
    // Cache CSS files.
    /\.css$/,
    // Use cache but update in the background.
    new workbox.strategies.StaleWhileRevalidate({
        // Use a custom cache name.
        cacheName: 'css-cache',
    })
);
*/

workbox.routing.registerRoute(
    /\.php$/,
    new workbox.strategies.NetworkFirst()
);


// cli will replace this
workbox.precaching.precacheAndRoute([
  {
    "url": "android-chrome-192x192.png",
    "revision": "862d90cea30093dfc130b38f209bcf29"
  },
  {
    "url": "android-chrome-384x384.png",
    "revision": "95c1a5ea402be16760455f145e7183ba"
  },
  {
    "url": "apple-touch-icon.png",
    "revision": "0179ea88792ce6413c6453738e54e2c2"
  },
  {
    "url": "browserconfig.xml",
    "revision": "e4e40b0c82d228add33b5bcfe276a859"
  },
  {
    "url": "favicon-16x16.png",
    "revision": "a242a32868e2707a1557e2c45d7677d7"
  },
  {
    "url": "favicon-32x32.png",
    "revision": "d2a889a4f4e060b9e5ccde9fa8e0beb7"
  },
  {
    "url": "favicon.ico",
    "revision": "f5a59c626fa958b94f07edce6f620200"
  },
  {
    "url": "index.html",
    "revision": "7193a0f5f9086700b4afe70e16501601"
  },
  {
    "url": "mstile-150x150.png",
    "revision": "208a31785ece98d12c96d948aecb91c4"
  },
  {
    "url": "random-barcode.php",
    "revision": "2045173380b047b8fc6e888c573dbd3c"
  },
  {
    "url": "safari-pinned-tab.svg",
    "revision": "2b9025c2550265d749198ffd8005123d"
  },
  {
    "url": "service-worker.js",
    "revision": "0b7f05b046746579e5a0ff62ba22d47e"
  },
  {
    "url": "workbox-config.js",
    "revision": "9f4f64b3048ddf19fad5baee92ba57b4"
  }
]);

