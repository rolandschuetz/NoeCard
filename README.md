# Noe Card

## The code is a first draft and currently a bit messy. The [web app](http://app.noe-club.at) nginx server points to the [app folder](./app). A proper build task is essential and here really missing. I'm working on it...


## Design based on Bulma

To start the project run:

```sh
nvm use
npm install
npm start
```

As long as `npm start` is running, it will **watch** your changes. You can edit `_sass/main.scss` at will. Changes are **immediately** compiled to their destinations, where `index.html` will pick them up upon reload in your browser.

If you want to learn more, follow these links: [Bulma homepage](http://bulma.io) and [Documentation](http://bulma.io/documentation/overview/start/).

## Build a new service worker config

```sh
cd app
nvm use
workbox injectManifest
```