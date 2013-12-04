var
    // File System
    fs = require('fs'),

    //
    walk = function(path) {
        "use strict";

        fs.readdirSync(path).forEach(function(file) {
            var newPath = path + '/' + file,
                stat = fs.statSync(newPath);
            if (stat.isFile()) {
                /(.*)\.(js$|coffee$)/.test(file) && require(newPath);
            } else if (stat.isDirectory()) {
                walk(newPath);
            }
        });
    }

module.exports = {
    port: 8080,
    db: 'mongodb://localhost/taz-dev',
    walk: walk
}
