# Symfony Hypernova Integration

Example integration of [Hypernova](https://github.com/airbnb/hypernova) and
[Hypernova-PHP](https://github.com/wayfair/hypernova-php) into a Symfony application.

## Setup

* `npm install`
* `npm run dev`
* `bin/console server:run`
* `node server.js`

Visit the _/default_ route to view an example of the server side rendered React
component.

## Files of Interest

* `assets/js/server.js`
* `webpack.config.js`
* `server.js`
* `templates/default/index.html.twig`
* `src/Twig/RenderReactExtension.php`
