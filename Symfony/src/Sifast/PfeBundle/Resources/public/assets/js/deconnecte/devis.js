var numActions = 0;
var n;
var p;
var i;
var j;
//localStorage.clear();

window.addEventListener("online", function(e) {
    alert("online");
    // mode connecté parcourir les element dans localstorage 
    // alert('RAPPEL : ' + localStorage.getItem('numActions'));
    numActions = localStorage.getItem('numActions');
    alert('RAPPEL5555555555555555 : ' + devis1);
    if (numActions > 0) {

        //  numActions = localStorage.getItem('numActions');
        //  alert('RAPPEL222 : ' + localStorage.getItem('nomL'));
        //  alert('RAPPEL 333: ' + localStorage.getItem('prenomL'));
        // localStorage['nomL'] = nom;
        // localStorage['prenomL'] = prenom;
        //alert('RAPPEL44 : ' + i);
        for (j = 0; j < i; j++) {
            n = localStorage.getItem('nomL' + j);
            p = localStorage.getItem('prenomL' + j);
            gg = localStorage.getItem('typeL' + j);
            hh = localStorage.getItem('modeleL' + j);
            jj = localStorage.getItem('longeurL' + j);
            kk = localStorage.getItem('largeurL' + j);
            ll = localStorage.getItem('couleurL' + j);
            mm = localStorage.getItem('fichierL' + j);

            //   alert('RAPPEL44 : ' + n);
            //  alert('RAPPEL 55: ' + p);
            alert('RAPPEL5555555555555555 : ' + devis1);
            $.ajax({
                url: 'http://localhost/pfe2/Symfony/web/app_dev.php/ajout',
                type: 'post',
                data: {mail_clt: n, type_p: p, ss_type_p: gg, modele_p: hh, longeur: jj, largeur: kk, couleur: ll},
                success: function(html) {

                    // vider localstorage
                    localStorage.clear();
                    alert("Enregistrement avec success");
                },
                echec: function(html) {
                    alert("Ech Enregistrement");
                }
            });
        }
        i = 0;
    }
});

$(document).ready(function() {
    // lorsque je soumets le formulaire
    i = 0;
    $('#monForm').on('submit', function() {
        var $this = $(this);
        //var numActions;
        // je récupère les valeurs
        var nom = $('#mail_clt').val();
        var prenom = $('#type_p').val();
        var type = $('#sous_type').val();
        var modele = $('#modele').val();
        var longeur = $('#longeur').val();
        var largeur = $('#largeur').val();
        var couleur = $('#couleur_id').val();
        var fichier = $('#couleur_id').val();

//si les champs vide il n a pas connexion 
        //localStorage.setItem('numActions', 0);
        if ((nom !== '' || prenom !== '' || type !== '' || modele !== '' || longeur !== '' || largeur !== '' || couleur !== '' || fichier !== '') && (!navigator.onLine)) {

            alert("Offline");
            //metre valeur en local 
            var nom = $('#mail_clt').val();
            var prenom = $('#type_p').val();
            var type = $('#sous_type').val();
            var modele = $('#modele').val();
            var longeur = $('#longeur').val();
            var largeur = $('#largeur').val();
            var couleur = $('#couleur_id').val();
            var fichier = $('#couleur_id').val();
            // alert('RAPPEL : ' + nom);


            localStorage['nomL' + i] = nom;
            localStorage['prenomL' + i] = prenom;
            localStorage['typeL' + i] = type;
            localStorage['modeleL' + i] = modele;
            localStorage['longeurL' + i] = longeur;
            localStorage['largeurL' + i] = largeur;
            localStorage['couleurL' + i] = couleur;
            localStorage['fichierL' + i] = fichier;
            i = i + 1;


            // voir le nb des elements dans localstorage 
            //var numActions = localStorage.getItem('numActions');
            localStorage.setItem('numActions', 1);
            numActions = parseInt(localStorage.getItem('numActions'));
            // alert('RAPPEL : ' + numActions);
            $('#mail_clt').val() === '';
            $('#type_p').val() === '';
            $('#sous_type').val() === '';
            $('#modele').val() === '';
            $('#longeur').val() === '';
            $('#largeur').val() === '';
            $('#couleur_id').val() === '';
            $('#couleur_id').val() === '';

        } else {

            // alert('Les champs doivent êtres remplis1');

        }

        //si les champs vide il y a connexion 
        if ((nom !== '' || prenom !== '' || type !== '' || modele !== '' || longeur !== '' || largeur !== '' || couleur !== '' || fichier !== '') && (navigator.onLine)) {

            alert("ok");

            $.ajax({
                url: $this.attr('action'),
                type: $this.attr('method'),
                data: $this.serialize(),
                success: function(html) {
                    $('#mail_clt').val() === '';
                    $('#type_p').val() === '';
                    $('#sous_type').val() === '';
                    $('#modele').val() === '';
                    $('#longeur').val() === '';
                    $('#largeur').val() === '';
                    $('#couleur_id').val() === '';
                    $('#couleur_id').val() === '';

                    alert("Enregistrement avec success");
                },
                echec: function(html) {
                    alert("Ech Enregistrement");
                }
            });

        }
        else {

            alert('Les champs doivent êtres remplis2');

        }

        return false; // j'empêche le navigateur de soumettre lui-même le formulaire
    });
});