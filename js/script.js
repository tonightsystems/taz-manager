$(document).ready(function(){
    "use strict";

    $(document)
        .on('click', '.task-list-item', function(e){
            $('#app-views').find('.task-list-item.active').removeClass('active');
            $(this).addClass('active');
            $('#app-panel').addClass('active');
            $('#app-content').addClass('has-app-panel');
        })
        .on('click', '.nav-link', function(e){
            e.preventDefault();
            $('.nav-item.selected').removeClass('selected');
            $(this).parent().addClass('selected');
        })
});
