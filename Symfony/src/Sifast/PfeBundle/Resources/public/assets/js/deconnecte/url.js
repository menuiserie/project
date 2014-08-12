//load image de alu 

$(window).load(function(){
    var test22 = localStorage['imgProduct'];
   // $("#t-porte > img").css({"display": "block"});
    $("#t-porte").show();
    $("#t-porte").css({"width": $(this).width()});
    //alert(test22);
    
    $('#t-porte').append('<img class="porte2" id="porte" src="' + test22 + '" />');
  
        $(".porte2").load(function() {         
            $("#t-porte").css({"width": $(this).width()});          
           // afficher un autre porte $(this).clone().appendTo("#t-porte");
            $("#t-porte > img").css({"width": "100%", "height": "100%"});
           
           // $("#t-porte > div").css({"width": "100%", "height": "100%"});
          // $('#t-porte').append('<div title="Skew x-axis" class="transformable-handle-skew-h transformable-handle-skew transformable-handle ui-icon ui-icon-arrow-2-e-w" style="left: 50%; top: 1px; position: absolute; z-index: 2000;"></div>');
          // $('#t-porte').append('<div title="Skew y-axis" class="transformable-handle-skew-h transformable-handle-skew transformable-handle ui-icon ui-icon-arrow-2-e-w" style="left: 50%; top: 1px; position: absolute; z-index: 2000;"></div>');

            
            return true;

        });
    
});