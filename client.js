
var casper = require('casper').create({
    verbose: true,
    logLevel: "debug",
    clientScripts:  [
    'jquery182.js'      // The script will be injected in remote
    ],
    pageSettings: {
        userAgent : "Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.2 (KHTML, like Gecko) Ubuntu/11.10 Chromium/15.0.874.120 Chrome/15.0.874.120 Safari/535.2"
    }
   
});

casper.start(baseUrl);