var express = require('express'),
    engine = require('ejs-locals'),
    path = require('path'),
    config = require('./config');

module.exports = function(app) {
    "use strict";

    // Mostra o stack de erros no console
    app.set('showStackError', true);

    // HTML bonito :)
    app.locals.pretty = true;

    // Define o local dos arquivos estaticos
    app.use(express.static('public'));

    // Favicon
    app.use(express.favicon('img/favicon.png'));

    // Loga os requests no console
    app.use(express.logger('dev'));

    app.engine('ejs', engine);

    // Define o template engine padrao
    app.set('view engine', 'ejs');

    // Define o caminho das views
    app.set('views', path.join(__dirname, 'views'));

    // Habilita JSONP
    app.enable("jsonp callback");

    app.configure(function() {
        // Puxa informacoes do html no POST
        app.use(express.bodyParser());

        // Encoda URL
        app.use(express.urlencoded());

        // Habilita JSON
        app.use(express.json());

        // Simula DELETE e PUT
        app.use(express.methodOverride());
    });
}
