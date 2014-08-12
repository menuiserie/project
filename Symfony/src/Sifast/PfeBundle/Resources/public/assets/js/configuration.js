$(document).ready(function() {
   // alert('ddddd');
/*
$('#liquid').liquidcarousel({height: 129, duration: 100, hidearrows: false});





$("#t-porte").hide();
$(".porte").click(function() {
    alert('ok');
    $("#t-porte > img").css({"display": "none"});
    $("#t-porte").show();
    $("#t-porte").css({"width": $(this).width()});

    //$("#t-porte").html('');
    $(this).clone().appendTo("#t-porte");
    $("#t-porte > img").css({"width": "100%", "height": "100%"});
    return false;

});

*/


$(function() {
    var b = $('#t-porte');
    b.draggable();
    b.resizable();
    b.transformable({
        rotate: showrotate,
        scale: constrainscale
    });
    function constrainscale(e, ui) {
        //uncomment to see how you can set value to constrain size
        //if (ui.scalex<0.5) ui.scalex=0.5;
        //if (ui.scaley<0.5) ui.scaley=0.5;
    }

    function showrotate(e, ui) {
        $('#rotate').html(ui.angle.rad);
        //uncomment these to see how you can set the value to constrain angle
        //if(ui.angle.rad>1)ui.angle.rad=1;
        //if(ui.angle.rad<-1) ui.angle.rad=-1;
    }

    function showinfo(e, ui) {
        var u = $(this).getTransform();
        var o = $(this).tOffset();
        function xytostr(c) {
            return(parseInt(c.x) + ',' + parseInt(c.y));
        }
    }
    $('.reset').click(function() {
        $(this).parent().transformable('reset');
    });

});


});//ready