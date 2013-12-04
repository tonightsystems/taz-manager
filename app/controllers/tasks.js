var mongoose = require('mongoose'),
    Task = mongoose.model('Task'),
    tasks = {
        all : function(req, res) {
            "use strict";

            Task.find(function(err, tasks) {
                err && res.send(err);

                res.jsonp(tasks);
            })
        },
        add : function(req, res) {
            "use strict";

            var task = new Task(req.body);

            // task.user = req.user;

            task.save(function(err) {
                if (err) {
                    return res.send('/', {
                        errors: err.errors,
                        task: task
                    });
                } else {
                    res.jsonp(task);
                }
            });
        },
        view : function(req, res) {
            "use strict";

            Task.find({
                _id : req.params.taskId
            }, function(err, task) {
                err && res.send(err);

                res.jsonp(task);
            });
        }
    };

exports._all = tasks.all;
exports._add = tasks.add;
exports._view = tasks.view;
exports._edit = tasks.edit;
exports._delete = tasks._delete;

exports.all = function(req, res) {
    "use strict";

    res.render('index', {
        title : 'Minhas tarefas',
        tasks : tasks.all
    })
}
exports.single = function(req, res) {
    "use strict";

    res.render('index', {
        title : 'Single Task',
        tasks : tasks._view
    })
}

