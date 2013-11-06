$(document).ready(function(){
    "use strict";

    $(document).on('click', '.task-list-item', function(e){
        var target = $(this);
        $('#app-views').find('.task-list-item.active').removeClass('active');
        target.addClass('active');
        $('#app-panel').addClass('active');
        $('#app-content').addClass('has-app-panel');
    });
});