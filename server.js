const bundle = require("./var/js/server-bundle");
const hypernova = require("hypernova/server");
const renderReact = require('hypernova-react').renderReact;

hypernova({
  devMode: process.env.HYPERNOVA_DEV ? true : false,
  port: process.env.HYPERNOVA_PORT || 3030,
  getComponent: name => {
    if (bundle[name]) {
      return renderReact(name, bundle[name]);
    }

    return null;
  }
});
