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
workbox.precaching.precacheAndRoute([]);

