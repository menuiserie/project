
$(document).ready(function() {
    //carousel

    //open camera
    $.fn.cam();
    //upload image
    $.fn.uploadimg();
}); // /ready

/*      function open camera     */
$.fn.cam = function(options) {
    /*function cam () {*/
    document.getElementById("butt").onclick = (function() {
		$('.h1111').hide();
        var canvas = document.getElementById("canvas"),
                context = canvas.getContext("2d"),
                video = document.getElementById("video"),
                videoObj = {"video": true},
        errBack = function(error) {
            console.log("Video capture error: ", error.code);
        };
        if (navigator.getUserMedia) { // Standard
            var cam = navigator.getUserMedia(videoObj, function(stream) {
                $('#section').show();
                video.src = stream;
                video.play();
                $('#snap').show();
            }, errBack);
        } else if (navigator.webkitGetUserMedia) { // WebKit-prefixed
            navigator.webkitGetUserMedia(videoObj, function(stream) {
                $('#section').show();
                video.src = window.webkitURL.createObjectURL(stream);
                video.play();
                $('#snap').show();
            }, errBack);
        } else if (navigator.mozGetUserMedia) {  // WebKit-prefixed
            $('#section').show();
            navigator.mozGetUserMedia(videoObj, function(stream) {
                $('#section').show();
                video.src = window.URL.createObjectURL(stream);
                video.play();
                $('#snap').show();
            }, errBack);
        }
        document.getElementById("snap").addEventListener("click", function() {
            //draw canvas's picture 
            context.drawImage(video, 0, 0, 240, 180);
            $('#taken').show();
        });
        document.getElementById("snap").onclick = (function() {
            //save canvas image as data url (png format by default)
            var canvas = document.getElementById('canvas');
            var canvascontext = canvas.toDataURL('image/png');
            var postData = "canvasData=" + canvascontext;
            // make ajax call to get image data url
            var ajax = new XMLHttpRequest();
            ajax.open("POST", 'save1.php', true);
            ajax.setRequestHeader('Content-Type', 'canvas/upload');
            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4) {
                }
            }
            ajax.send(postData);
        });
        document.getElementById("taken").onclick = (function() {
            //$('.video').hide();
            //$('#snap').hide();
            //$('#taken').hide();
            //alert("a");
            //context.drawImage(video, 0, 0, 450, 280);
            
            $('#section').hide();
            $("#canvas").css({'height': '500px', 'min-width': '687px', 'width': '100%' , 'margin':'0'}).appendTo(".work");


        });
    });
};
/*        end function open camera    */

/*          function upload             */
$.fn.uploadimg = function(options) {
	
    var input = document.querySelector('input[type=file]');
    input.onchange = function() {
		$('.h1111').hide();
        $('.up').show();
        var file = input.files[0];
        upload(file);
        drawOnCanvas(file);
        displayAsImage(file);
    };
    function upload(file) {
        var form = new FormData(),
                xhr = new XMLHttpRequest();
        form.append('image', file);
        xhr.open('post', 'save.php', true);
        xhr.send(form);
    }
    function drawOnCanvas(file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var dataURL = e.target.result,
                    c = document.getElementById('up'),
                    ctx = c.getContext('2d'),
                    img = new Image();
            img.onload = function() {
                c.width = img.width;
                c.height = img.height;
                ctx.drawImage(img, 0, 0);
            };
            img.src = dataURL;
        };
        reader.readAsDataURL(file);
    }
    function displayAsImage(file) {
        var imgURL = URL.createObjectURL(file),
                img = document.createElement('img');
        img.onload = function() {
            URL.revokeObjectURL(imgURL);
        };
        img.src = imgURL;
        //document.body.appendChild(img);
        //c.hide();
    }

};
/*            
 * imprimer ecran       */

function imprimer_bloc(titre, objet) { 
// Définition de la zone à imprimer 
var zone = document.getElementById(objet).innerHTML; 
 
// Ouverture du popup 
var fen = window.open("", "", "height=500, width=600,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10"); 
 
// style du popup 
fen.document.body.style.color = '#000000'; 
fen.document.body.style.backgroundColor = '#FFFFFF'; 
fen.document.body.style.padding = "20px"; 
 
// Ajout des données a imprimer 
fen.document.title = titre; 
fen.document.body.innerHTML += " " + zone + " "; 
 
// Impression du popup 
fen.window.print(); 
 
//Fermeture du popup 
fen.window.close(); 
return true; 
}