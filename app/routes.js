module.exports = function(app) {
    "use strict";

    var tasks = require('./controllers/tasks'),
        users = require('./controllers/users'),
        index = require('./controllers/index');

    // Home
    app.get('/', index.render);

    // Users
    app.get('/users', users.users);
    app.get('/api/users', users._users);

    // Tasks
    app.get('/api/tasks', tasks._all);
    app.post('/api/tasks', tasks._add);
    app.get('/api/tasks/:taskId', tasks._view);

    app.get('/tasks', tasks.all);
    app.get('/tasks/:taskId', tasks.single);

    app.get('*', function(req, res) {
        res.render('index', {
            title : 'Minhas tarefas',
            tasks : tasks._all
        })
    });

};
