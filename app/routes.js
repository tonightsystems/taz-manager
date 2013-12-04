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
    app.get('/tasks', tasks.tasks);
    app.get('/api/tasks', tasks._tasks);
};
