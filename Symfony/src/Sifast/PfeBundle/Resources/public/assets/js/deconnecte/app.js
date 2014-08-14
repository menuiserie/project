bolinitfilesys = true;


$(document).ready(function() {

//alert(test);
//filesystem.clear();

// console.log(test);
    var i = 0;
    var j = 0;


    // Autoriser pour les préfixes de fournisseurs.
    window.requestFileSystem = window.requestFileSystem ||
            window.webkitRequestFileSystem;

    // Créez une variable qui va stocker une référence au FileSystem.
    var filesystem = null;

    // Obtenez des références à des éléments de la page..
    var form = document.getElementById('file-form');
    var deconnect = document.getElementById('dec');
    //var filenameInput = document.getElementById('filename');
    //var contentTextArea = document.getElementById('content');
    //  var fileList = document.getElementById('file-list');



    // Un gestionnaire d'erreur simple pour être utilisé tout au long de cette démo.
    function errorHandler(error) {
        var message = '';

        switch (error.code) {
            case FileError.SECURITY_ERR:
                message = 'Security Error';
                break;
            case FileError.NOT_FOUND_ERR:
                message = 'Not Found Error';
                break;
            case FileError.QUOTA_EXCEEDED_ERR:
                message = 'Quota Exceeded Error';
                break;
            case FileError.INVALID_MODIFICATION_ERR:
                message = 'Invalid Modification Error';
                break;
            case FileError.INVALID_STATE_ERR:
                message = 'Invalid State Error';
                break;
            default:
                message = 'Unknown Error';
                break;
        }

        console.log(message);
    }

    // demander un FileSystem definir variable du filesystem .
    function initFileSystem() {
        navigator.webkitPersistentStorage.requestQuota(1024 * 1024 * 20,
                function(grantedSize) {

                    // demander file system avec la nouvelle taille.
                    window.requestFileSystem(window.PERSISTENT, grantedSize, function(fs) {

                        // Définissez la variable du filesystem 
                        filesystem = fs;

                        // Écouteurs d'événements de configuration sur le formulaire.
                        setupFormEventListener();

                        // Mettre à jour le navigateur de fichiers.
                        listFiles();

                    }, errorHandler);

                }, errorHandler);
    }


    function loadFile(filename) {
        //console.log('entrie name 2 = ' + filename);
        filesystem.root.getFile(filename, {}, function(fileEntry) {
            fileEntry.file(function(file) {
                var reader = new FileReader();

                reader.onload = function(e) {

                   // console.log('entrie name hhhhhhh = ' + this.result);

                    /*    var a = $("img").attr({
                     src: this.result,
                     title: "jQuery",
                     alt: "jQuery Logo"
                     });
                     //  $( "div" ).text( $( "img" ).attr( "alt" ) );
                     
                     $('.field').append(a);*/

                    // $('.carrousel-img').append('<li><a href="#"><img class="porte" id="porte" src="' + this.result + '" /></a></li>');
                    if (j < test.length)
                    {
                        //$('.field').append('<img src="' + this.result + '">');
                        $('.carrousel-img').append('<li><a href="#"><img class="porte" id="porte" src="' + this.result + '" /></a></li>');

                    }
                    j++;
                };

                reader.readAsText(file);
            }, errorHandler);

        }, errorHandler);
        
        // afficher porte selectionner
        $('#liquid').liquidcarousel({height: 129, duration: 100, hidearrows: false});
       // $("#t-porte").hide();
        $(".porte").click(function() {
           
            $("#t-porte > img").css({"display": "none"});
            $("#t-porte").show();
            $("#t-porte").css({"width": $(this).width()});

            //$("#t-porte").html('');
            $(this).clone().appendTo("#t-porte");
            $("#t-porte > img").css({"width": "100%", "height": "100%"});
            return false;

        });
    }
    
    


    function displayEntries(entries) {
        // Effacer les entrées du navigateur de fichier en cours.
        // fileList.innerHTML = '';

        //  console.log(entries);
        entries.forEach(function(entry, i) {
            //     console.log('i = '+i);
            var li = document.createElement('li');

            var link = document.createElement('a');
            link.innerHTML = entry.name;
            link.className = 'edit-file';
            li.appendChild(link);

            var delLink = document.createElement('a');
            delLink.innerHTML = '[x]';
            delLink.className = 'delete-file';
            li.appendChild(delLink);

            // fileList.appendChild(li);

            // Configuration d'un écouteur d'événement qui va charger le fichier 

            loadFile(entry.name);

        });
    }


    function listFiles() {
        var dirReader = filesystem.root.createReader();
        var entries = [];

        var fetchEntries = function() {
            dirReader.readEntries(function(results) {
                if (!results.length) {
                    displayEntries(entries.sort().reverse());
                } else {
                    entries = entries.concat(results);
                    fetchEntries();
                }
            }, errorHandler);
        };
        fetchEntries();
    }


    function convertImgToBase64(url, callback, outputFormat) {
        var canvas = document.createElement('CANVAS');
        var ctx = canvas.getContext('2d');
        var img = new Image;
        img.crossOrigin = 'Anonymous';
        img.onload = function() {
            canvas.height = img.height;
            canvas.width = img.width;
            ctx.drawImage(img, 0, 0);
            var dataURL = canvas.toDataURL(outputFormat || 'image/png');
            callback.call(this, dataURL);
            // Clean up
            canvas = null;
        };
        // if (j < 1)
        // {
        //console.log('entrie name 2 = ' + url)
        img.src = url;
        //'<img src="' + this.result + '">'
        //  $('.field').append ('<img src="' + url + '">');
        //  }
        // j++;
    }

// premiere etape 
    function setupFormEventListener() {
        //  alert('ffff')
        var elm = test[i];
        var imageUrl = elm;
        console.log('imageUrl', imageUrl);
        convertImgToBase64(imageUrl, function(base64Img) {
            data_content_img = base64Img;
            var filename = "image" + i;
            var content = data_content_img;
            if (bolinitfilesys)
                //  initFileSystem();

                console.log(bolinitfilesys);
            saveFile(filename, content);
            var z = test.length;
            console.log(z);
            if (i < test.length && test[i] !== '')
            {
                i++;

                setupFormEventListener();
                j = 0;
            }

        });

        bolinitfilesys = false;

    }


    if ((navigator.onLine)) {
        // Enregistrer un fichier dans le FileSystem.
        function saveFile(filename, content) {
            filesystem.root.getFile(filename, {create: true}, function(fileEntry) {

                fileEntry.createWriter(function(fileWriter) {

                    fileWriter.onwriteend = function(e) {
                        // Mettre à jour le navigateur de fichiers.
                        listFiles();
                        

                    };

                    fileWriter.onerror = function(e) {
                        console.log('Write error: ' + e.toString());
                        alert('An error occurred and your file could not be saved!');
                    };

                    var contentBlob = new Blob([content], {type: 'text/plain'});

                    console.log(contentBlob);

                    fileWriter.write(contentBlob);

                }, errorHandler);

            }, errorHandler);
        }

    }

    // Démarrez l'application en demandant une FileSystem (if the browser supports the API)
    if (window.requestFileSystem) {
        initFileSystem();
    } else {
        alert('Sorry! Your browser doesn\'t support the FileSystem API :(');
    }


});