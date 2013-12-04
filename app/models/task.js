var mongoose = require('mongoose'),
    Schema = mongoose.Schema;

/**
 * Task Schema
 * @type {Object}
 */
var TaskSchema = new Schema({
    title: {
        type: String,
        default: '',
        trim: true
    },
    project: {
        type: String,
        default: '',
        trim: true
    },
    date: {
        type: Date
    },
    created: {
        type: Date
    },
    user: {
        type: String
    }
});

/**
 * Validations
 */
TaskSchema.path('title').validate(function(title) {
    "use strict";
    return title.length;
}, 'Titulo em branco');

TaskSchema.path('project').validate(function(project) {
    "use strict";
    return project.length;
}, 'Projeto em branco');

/**
 * Statics
 */
TaskSchema.statics = {
    load: function(id, cb) {
        "use strict";

        this.findOne({
            _id: id
        }).populate('user', 'name username').exec(cb);
    }
};

mongoose.model('Task', TaskSchema);
