module.exports = function(app) {
    "use strict";

    var tasks = require('./controllers/tasks'),
        users = require('./controllers/users'),
        index = require('./controllers/index');

    // Home
    app.get('/', index.render);

    // Users
    app.get('/users', users.users);

    // Tasks
    app.get('/tasks', tasks.tasks);
};
