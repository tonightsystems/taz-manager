var express = require('express'),
    mongoose = require('mongoose'),
    app = express();

// Conexão com o banco de dados
mongoose.connect('mongodb://localhost/taz-dev');

app.configure(function() {
    "use strict";

    // Define o local dos arquivos estáticos
    app.use(express.static(__dirname + '/public'));

    // Loga os requests no console
    app.use(express.logger('dev'));

    // Puxa informacoes do html no POST
    app.use(express.bodyParser());

    // Simula DELETE e PUT
    app.use(express.methodOverride());
});

app.listen(8080);
console.log("App rodando na porta 8080");