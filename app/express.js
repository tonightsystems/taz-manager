var express = require('express'),
    config = require('./config');

module.exports = function(app) {
    "use strict";

    // Mostra o stack de erros no console
    app.set('showStackError', true);

    // HTML bonito :)
    app.locals.pretty = true;

    // Favicon
    app.use(express.favicon());

    // Define o local dos arquivos estaticos
    app.use(express.static(__dirname + '/public'));

    // Loga os requests no console
    app.use(express.logger('dev'));

    // Define o caminho das views
    app.set('views', config.root + '/app/views');

    // Define o template engine padrao
    app.set('view engine', 'jade');

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