var
    // Express
    express = require('express'),

    // Mongoose
    mongoose = require('mongoose'),

    // Configuracoes do app
    config = require('./app/config'),

    // Conexão com o banco de dados
    db = mongoose.connect(config.db),

    // Instancia do App
    app = express();

// Carrega as configs do express
require('./app/express')(app);

// Carrega as rotas
require('./app/routes')(app);

// Inicia o app na porta configurada
app.listen(config.port);
console.log("App rodando na porta " + config.port);

// Expoe a aplicacao
exports = module.exports = app;