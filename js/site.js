/**
 * Author: Adem Andiç
 * Erp JS file
 */

$(document).ready(function()
{
    $('.button-left').click(function()
    {
        $('.sidebar').toggleClass('fliph');
        $('.main').toggleClass('toggledMain');

        if($('.sidebar').hasClass('fliph'))
        {
            $('.navbar-brand').html('R');
            $('.sub-menu').toggleClass('collapse');
        }
        else
        {
            $('.navbar-brand').html('REFLINE');
            $('.sub-menu').toggleClass('collapsed');
        }
    });

    $('.scrollbar-macosx').scrollbar();
 });


 function routeUrl(link)
 {
     $.ajax({
         url : link,
         success : function(res)
         {
             $('.content').html(res);
         }
     });
 }