// public/core.js
var tazManager = angular.module('tazManager', []),
    Panel = {
        open : function(id) {
            "use strict";
            Panel.close();
            $(id).addClass('active');
            $('#app-content').addClass('has-app-panel');
        },
        close : function() {
            "use strict";
            $('.app-panel').removeClass('active');
            $('#app-content').removeClass('has-app-panel');
        }
    }

function mainController($scope, $http) {
    "use strict";

    $scope.formData = {};

    // when landing on the page, get all tasks and show them
    $http.get('/api/tasks')
        .success(function(data) {
            $scope.tasks = data;
            console.log(data);
        })
        .error(function(data) {
            console.log('Error: ' + data);
        });

    // when submitting the add form, send the text to the node API
    $scope.createtask = function() {
        $http.post('/api/tasks', $scope.formData)
            .success(function(data) {
                Panel.close();
                $('input').val('');
                $http.get('/api/tasks')
                    .success(function(data) {
                        $scope.tasks = data;
                        console.log(data);
                    })
                console.log(data);
            })
            .error(function(data) {
                console.log('Error: ' + data);
            });
    };

    // delete a task after checking it
    $scope.deletetask = function(id) {
        $http.delete('/api/tasks/' + id)
            .success(function(data) {
                $scope.tasks = data;
                console.log(data);
            })
            .error(function(data) {
                console.log('Error: ' + data);
            });
    };

    $scope.viewtask = function(id) {

        $http.get('/api/tasks/' + id)
            .success(function(data) {
                $scope.project = data[0].project;
                $scope.title = data[0].title;
                $scope.date = data[0].date;
                $scope.user = data[0].user;
                console.log(data);
            })
            .error(function(data) {
                console.log('Error: ' + data);
            });
    }

}

$(document).ready(function(){
    "use strict";

    $(document)
        .on('click', '.task-list-item', function(e){
            $('#app-views').find('.task-list-item.active ').removeClass('active');
            $(this).addClass('active');
            Panel.open('#task-detail');
        })
        .on('click', '.task-list-item-add a', function() {
            Panel.open('#task-new');
        })
        .on('click', '.nav-link', function(e){
            e.preventDefault();
            $('.nav-item.selected').removeClass('selected');
            $(this).parent().addClass('selected');
        })
});
