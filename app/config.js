var path = require('path'),
    rootPath = path.normalize(__dirname + '/../..');

module.exports = {
    port: 8080,
    root: rootPath,
    db: 'mongodb://localhost/taz-dev'
}
