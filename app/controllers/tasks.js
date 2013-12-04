exports.tasks = function(req, res) {
    "use strict";

    res.render('index', {
        title : 'Lorem Tasks'
    })
}

exports._tasks = function(req, res) {
    "use strict";

    res.jsonp({ 'tasks' : 'ok' });
}
