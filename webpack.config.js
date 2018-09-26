const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
;

const appConfig = Encore.getWebpackConfig();

Encore.reset();
Encore
    .setOutputPath('var/js')
    .setPublicPath('/')
    .addEntry('server-bundle', './assets/js/server.js')
    .cleanupOutputBeforeBuild()
    .enableReactPreset()
;

const serverConfig = Encore.getWebpackConfig();

module.exports = [appConfig, serverConfig];
