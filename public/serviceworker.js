

const staticDevCoffee = "dev-coffee-site-v1";
const assets = [
  "/",
  "/index",
  "/offline",
  
];

const offlineUrl = 'offline.html';

//to clear the cache
/*
const cacheName = 'v2';

self.addEventListener('activate', event => {
// Remove old caches
  event.waitUntil(
    (async () => {
      const keys = await caches.keys();
      return keys.map(async (cache) => {
        if(cache !== cacheName) {
          console.log('Service Worker: Removing old cache: '+cache);
          return await caches.delete(cache);
        }
      })
    })()
  )
})
*/

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticDevCoffee).then(cache => {
      cache.addAll(assets);
    })
  );
});

///Try fetching the page from the network first,If that doesn’t work, try looking for the page in the cache,If all else fails, shows the offline page.
self.addEventListener('fetch', event => {

event.respondWith(
  fetch(event.request)
    .catch(function () {
      return caches.match(event.request)
        .then(function (response) {
          return response || caches.match(offlineUrl);
        })
    })
);

});
