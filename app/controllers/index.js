exports.render = function(req, res) {
    "use strict";

    res.render('index', {
        title : 'Minhas tarefas'
    });
}
