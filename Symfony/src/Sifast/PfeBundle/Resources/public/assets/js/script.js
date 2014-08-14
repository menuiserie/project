//JS date
function date_heure(id) {
    date = new Date;
    annee = date.getFullYear();
    moi = date.getMonth();
    mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
    j = date.getDate();
    jour = date.getDay();
    jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
    h = date.getHours();
    if (h < 10)
    {
        h = "0" + h;
    }
    m = date.getMinutes();
    if (m < 10)
    {
        m = "0" + m;
    }
    s = date.getSeconds();
    if (s < 10)
    {
        s = "0" + s;
    }
    resultat = '<div class="day">' + jours[jour] + ' ' + j + ' ' + mois[moi] + ' ' + annee + '</div><div class="heure">' + h + ':' + m + ':' + s + '</div>';
    document.getElementById(id).innerHTML = resultat;
    setTimeout('date_heure("' + id + '");', '1000');
    return true;
}
$(document).ready(function() {
    
    //insertion de la porte de pvc vert config
    // Handler for .ready() called.
    $('.imgclick').click(function() {

        var test = $(this).find('img').attr('src');
        localStorage['imgProduct'] = test;
    });

    // mmenu
    $.fn.mmenu();

    // menu profil
    // $.fn.menuprofil();

    // show/hide menu
    $.fn.menu();

    // action menu niv1
    $.fn.menuaction();

    //action menu niv2
    $.fn.menuactionniv2();

    // js Date
    window.onload = date_heure('date_heure');

    //carrousel
    $('#liquid2').liquidcarousel({height: 129, duration: 100, hidearrows: true});
    $('#liquid3').liquidcarousel({height: 129, duration: 100, hidearrows: true});
    $('#liquid1c').liquidcarousel({height: 129, duration: 100, hidearrows: true});
    //popup
    $.fn.popupp();

    //popup devis
    $.fn.popup_d();
    $.fn.popup_e();

    //bouton camera
    $('#snap').click(function() {
        $(this).parents('.section').find('.video').hide();
        $(this).hide();
        //$(this).parents('.section').find('#snap').hide();
    });
    $('#reset').click(function() {
        $(this).parents('.section').find('.video').show();
        $(this).parents('.section').find('#snap').show();

        $('#canvas').hide();
        $('#taken').hide();
    });

    //copier votre modéle dans popup
    $('#save_cli').click(function() {
        //alert ('ok');
        //vider popo
        $(this).parents('body').find('.sk-body').find('.popup_save').children('.iii').empty();
    //insertion de la contenu de .target
        var model = $(this).parents('body').find('.sk-body').find('.target').clone();
        $(this).parents('body').find('.sk-body').find('.popup_save').children('.iii').html(model);
        return false;
    });






}); //fin ready

// mmenu
/*********$(".Descktop .header_bar_top .menu_btn .btn-menu").click(function(){**************/
$.fn.mmenu = function(options) {
    $(".header_bar_top .menu_btn .btn-menu").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $("#sk-body .content-left").css("display", "block");
            $("#sk-body .content-right").css("width", "78%");
        } else {
            $(this).addClass("active");
            $("#sk-body .content-left").css("display", "none");
            $("#sk-body .content-right").css("width", "98%");
        }
    });
};
// menu profil

// show/hide menu
$.fn.menu = function(options) {
    $(".content-left .gamme-pdt .pdt").click(function() {
        if ($(this).parent(".gamme-pdt").hasClass("active")) {
            $(this).parent(".gamme-pdt").removeClass("active");
            $("#sk-body .content-left .menu-pdt").slideUp();
        } else {
            $(this).parent(".gamme-pdt").addClass("active");
            $("#sk-body .content-left .menu-pdt").slideDown();
            $(".content-left .menu-pdt .niv-1").find(".open").hide();
            $(".content-left .menu-pdt .niv-1").find(".open").removeClass("open");
            $(".content-left .menu-pdt .niv-1").find(".active").removeClass("active");
        }
    });
};
// action menu niv1
$.fn.menuaction = function(options) {
    $(".content-left .menu-pdt .niv-1 > li > a").click(function() {
        if ($(this).parent("li").hasClass("active")) {
            $(this).parent("li").removeClass("active");
            $(this).parent("li").children(".niv-2").hide();
            $(this).parent("li").children(".niv-2").removeClass("open");
        } else {
            $(".content-left .menu-pdt .niv-1").find(".open").hide();
            $(".content-left .menu-pdt .niv-1").find(".open").removeClass("open");
            $(".content-left .menu-pdt .niv-1").find(".active").removeClass("active");
            $(this).parent("li").addClass("active");
            $(this).parent("li").children(".niv-2").show();
            $(this).parent("li").children(".niv-2").addClass("open");
        }
    });
};
// action menu niv2
$.fn.menuactionniv2 = function(options) {
    $(".content-left .menu-pdt .niv-1 > li > .niv-2 > li > a").click(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).parent("li").children(".niv-3").hide();
            $(this).parent("li").children(".niv-3").removeClass("open");
        } else {
            $(".content-left .menu-pdt .niv-1 > li > .niv-2").find(".open").hide();
            $(".content-left .menu-pdt .niv-1 > li > .niv-2").find(".open").removeClass("open");
            $(".content-left .menu-pdt .niv-1 > li > .niv-2").find(".active").removeClass("active");
            $(this).addClass("active");
            $(this).parent("li").children(".niv-3").show();
            $(this).parent("li").children(".niv-3").addClass("open");
        }
    });
};
//popupp
$.fn.popupp = function(options) {
    $('a.poplight[href^=#]').click(function() {
        var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
        var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

        //Récupérer les variables depuis le lien
        var query = popURL.split('?');
        var dim = query[1].split('&amp;');
        var popWidth = dim[0].split('=')[1]; //La première valeur du lien

        //Faire apparaitre la pop-up et ajouter le bouton de fermeture
        $('#' + popID).fadeIn().css({
            'width': Number(popWidth)
        })

        //../img/backgrounds/next.gif   bundles/sifastpfe/assets/img/parametre.png
        //       .prepend('<a href="#" class="closee"><img src="bundles/sifastpfe/assets/img/close.png" class="btn_close" title="Fermer" alt="Fermer" /></a>');

        //Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
        var popMargTop = ($('#' + popID).height() + 80) / 2;
        var popMargLeft = ($('#' + popID).width() + 80) / 2;

        //On affecte le margin


        //Effet fade-in du fond opaque
        $('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
        //Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
        $('#fade').css({'filter': 'alpha(opacity=80)'}).fadeIn();

        return false;
    });

//Fermeture de la pop-up et du fond
    $('a.closee, #fade').live('click', function() {
        $('#fade , .popup_block').fadeOut(function() {
            $('#fade, a.closee').remove();

        });
        return false;
    });

};


//popup devis
$.fn.popup_d = function(options) {
    $('a.poplight_d[href^=#]').click(function() {
        var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
        var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

        //Récupérer les variables depuis le lien
        var query = popURL.split('?');
        var dim = query[1].split('&amp;');
        var popWidth = dim[0].split('=')[1]; //La première valeur du lien

        //Faire apparaitre la pop-up et ajouter le bouton de fermeture
        $('#' + popID).fadeIn().css({
            'width': Number(popWidth)
        })
        //     .prepend('<a href="#" class="close"><img src="bundles/sifastpfe/assets/img/close.png" class="btn_close_d" title="Fermer" alt="Fermer" /></a>');

        //Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
        var popMargTop = ($('#' + popID).height() + 80) / 2;
        var popMargLeft = ($('#' + popID).width() + 80) / 2;

        //On affecte le margin


        //Effet fade-in du fond opaque
        $('body').append('<div id="fade_d"></div>'); //Ajout du fond opaque noir
        //Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
        $('#fade_d').css({'filter': 'alpha(opacity=80)'}).fadeIn();

        return false;
    });

//Fermeture de la pop-up et du fond
    $('a.close, #fade_d').live('click', function() {
        $('#fade_d , .popup_block_d').fadeOut(function() {
            $('#fade_d, a.close').remove();

        });
        return false;
    });

};

//popupp enre
$.fn.popup_e = function(options) {
    $('a.poplight_e[href^=#]').click(function() {
        var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
        var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

        //Récupérer les variables depuis le lien
        var query = popURL.split('?');
        var dim = query[1].split('&amp;');
        var popWidth = dim[0].split('=')[1]; //La première valeur du lien


        //Faire apparaitre la pop-up et ajouter le bouton de fermeture  display : block = fadein
        $('#' + popID).fadeIn().css({
            'width': Number(popWidth)
        })
        //      .prepend('<a href="#" class="close"><img src="bundles/sifastpfe/assets/img/close.png" class="btn_close_e" title="Fermer" alt="Fermer" /></a>');

        //Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
        var popMargTop = ($('#' + popID).height() + 80) / 2;
        var popMargLeft = ($('#' + popID).width() + 80) / 2;

        //On affecte le margin


        //Effet fade-in du fond opaque
        $('body').append('<div id="fade_e"></div>'); //Ajout du fond opaque noir
        //Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
        $('#fade_e').css({'filter': 'alpha(opacity=80)'}).fadeIn();

        return false;
    });
//Fermeture de la pop-up et du fond
    $('a.close, #fade_e').live('click', function() {
        $('#fade_e , .popup_block_e').fadeOut(function() {
            $('#fade_e, a.close').remove();

        });
        return false;
    });

};
