exports.users = function(req, res) {
    "use strict";

    res.render('index', {
        title : 'Lorem Users'
    })
}

exports._users = function(req, res) {
    "use strict";

    res.jsonp({ 'users' : 'ok' });
}
