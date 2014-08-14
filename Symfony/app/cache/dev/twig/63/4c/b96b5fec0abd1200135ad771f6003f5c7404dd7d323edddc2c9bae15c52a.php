<?php

/* SifastPfeBundle:home:configurateur.html.twig */
class __TwigTemplate_634cb96b5fec0abd1200135ad771f6003f5c7404dd7d323edddc2c9bae15c52a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "




</head>
<script type=\"text/javascript\">
    function capture() {
    alert('rrrr');
            html2canvas(\$('#target'),{
    onrendered: function (canvas) {
    alert('rrrr');
            console.log(\"bbbbbbbbbbbbb\");
            console.log('ssssss');
            //Set hidden field's value to image data (base-64 string)
            \$('#img_val').val(canvas.toDataURL(\"image/png\"));
            //Submit the form manually
            document.getElementById(\"myForm\").submit();
    }

    });
    }
</script>
<body class=\"\">
    <header id=\"sk-header\">
        <div class=\"container_12 clearfix\">
            <div class=\"w_20 wt-100\">
                <div class=\"header-top\">
                    <a class=\"header_logo float-left\" href=\"home\" title=\"Menuiserie\"> <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Menuiserie\"> </a>
                    <a class=\"header_text\" href=\"home\">Menuiserie</a>
                </div>
                <div class=\"header-bottom\"></div>
            </div>
            <div class=\"w_80 wt-100\">
                <div class=\"header_bar_top\">

                    <div class=\"reset_btn\">
                        <a class=\"poplight ajou btn-reset\" href=\"#?w=700\" rel=\"popup_name\" title=\"A propos de\"><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/1329652454_People-MSN.png"), "html", null, true);
        echo "\" class=\"reset_btn_btn\" alt=\"Qui sommes nous !\"></a>
                    </div>
                    <div class=\"menu_bar\"></div>

                </div>
                <div class=\"header_bar_bottom\"></div>
            </div>
            <div class=\"header-bottom-bread grid_12\">
                <div class=\"menu-date clearfix\" id=\"clock\">
                    <div id=\"date_heure\"></div>
                </div>
                <div class=\"breadcrumb clearfix\">
                    <p class=\"breadcrumb_porte_alu\"><a href=\"#\">Configurateur</a></p>
                </div>


                <div class=\"mod-tools\">
                    <!-- 1/ajouter form -->


                    <ul>
                        <li>
                            <a href=\"#\" class=\"open-to-tools\" title=\"Outils\">
                                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/parametre.png"), "html", null, true);
        echo "\" alt=\"paramètre\">
                            </a>
                            <ul class=\"tools-liste\">


                                <!--Probleme de Js-->
                                <li><a href=\"#?w=700\" class=\"poplight_d ajou tools-parametre\" title=\"Demande de devis\" rel=\"popup_name_d\"></a></li>

                                <li><a href=\"#\" class=\"tools-imp\" title=\"Imprimer\" onclick=\"window.print();\" ></a></li><!--window.print();-->

                                <li><a href=\"#?w=700\" class=\"poplight_e ajou tools-save\" id=\"save_cli\" rel=\"popup_name_e\" title=\"Enregistrer\" ></a></li>
                                <!--    <li><div   href=\"enregistrer\" class=\"tools-save\" onclick=\"capture();\"></div></li>  -->

                                <li><a href=\"#\" class=\"\" title=\"camera\" ><button class=\"tools-cam butt\" id=\"butt\" onClick=\"cam();\"></button></a></li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
    </header>
    <!--sk-body-->

    <div id=\"sk-body\" class=\"sk-body\">
        <div class=\"container_12 clearfix clear-both\">



            <div class=\"content-left w_20\"> 
                <div class=\"gamme-pdt active\">
                    <h2 class=\"pdt\">Produits</h2>
                </div>
                <div class=\"menu-pdt\">
                    <ul class='menu niv-1'>
                        <li><a class=\"icon icon-fenetre\" href=\"#\">Fenêtre</a>
                            <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/row-menu.png"), "html", null, true);
        echo "\" alt=\"menu actice\"/>
                            <ul class=\"niv-2\">
                                <li><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/backgrounds/catalogue.png"), "html", null, true);
        echo "\"><a href=\"http://issuu.com/prefal/docs/catalogue-porte?e=3853878/5696235\">Consulter le catalogue en ligne</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"icon icon-porte\" href=\"#\">Porte</a>
                            <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/row-menu.png"), "html", null, true);
        echo "\" alt=\"menu actice\"/>
                            <ul class=\"niv-2\">
                                <li><a href=\"alu\">Aluminium</a></li>
                                <li><a href=\"pvc\">PVC</a></li>


                                <li><a href=\"http://issuu.com/prefal/docs/catalogue-porte?e=3853878/5696235\" target=\"_blank\">Consulter le catalogue en ligne</a></li>
                            </ul>
                        </li>
                        <li><a class=\"icon icon-Michelaire\" href=\"#\">Michelaire</a>
                            <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/row-menu.png"), "html", null, true);
        echo "\" alt=\"menu actice\"/>
                            <ul class=\"niv-2\">
                                <li><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/backgrounds/catalogue.png"), "html", null, true);
        echo "\"><a href=\"http://issuu.com/prefal/docs/catalogue-porte?e=3853878/5696235\">Consulter le catalogue en ligne</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"icon icon-volet\" href=\"#\">Volet porte</a>
                            <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/row-menu.png"), "html", null, true);
        echo "\" alt=\"menu actice\"/>
                            <ul class=\"niv-2\">
                                <li><a href=\"alu\">Aluminium</a></li>
                                <li><a href=\"pvc\">PVC</a></li>


                                <li><a href=\"http://issuu.com/prefal/docs/catalogue-porte?e=3853878/5696235\" target=\"_blank\">Consulter le catalogue en ligne</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>

            <div class=\"content-right float-right\"> 
                <a href=\"#\" title=\"image 01\">
                </a>
                <div id=\"liquid\" class=\"liquid\">
                    <span class=\"previous\"></span>
                    <div class=\"wrapper\">
                        <ul>
                            <!--
                            ";
        // line 181
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 182
            echo "
                                <li><a href=\"#\" title=\"image 01\"><img src=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
            echo "\" class=\"porte\" id=\"porte\" style=\"width: 65px;height: 123px\" width=\"65px\" height=\"123px\" alt=\"image 01\" border=\"0\" /></a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo " 
                            -->

                            <ul class=\"carrousel-img\">

                                <li><a href=\"#\"></a></li>

                            </ul>



                        </ul>

                        <script>
//dans app
                                    var test = ";
        // line 199
        echo twig_jsonencode_filter($this->getContext($context, "images"));
        echo ";
//dans devis
                                    var devis1 =  ";
        // line 201
        echo $this->env->getExtension('routing')->getPath("sifast_pfe_ajout");
        echo " ;
                                                        
                      
                        
                        
                        </script>
                        <script language=\"javascript\">
                                    function imprime_bloc(titre, objet) {
                                    // Définition de la zone à imprimer 
                                    var zone = document.getElementById(objet).innerHTML;
                                            // Ouverture du popup 
                                            var fen = window.open(\"\", \"\", \"height=800, width=600,toolbar=0, menubar=0, scrollbars=1, resizable=1,status=0, location=0, left=10, top=10\");
                                            // style du popup 
                                            fen.document.body.style.color = '#000000';
                                            fen.document.body.style.backgroundColor = '#FFFFFF';
                                            fen.document.body.style.padding = \"20px\";
                                            // Ajout des données a imprimer 
                                            fen.document.title = titre;
                                            fen.document.body.innerHTML += \" \" + zone + \" \";
                                            // Impression du popup 
                                            fen.window.print();
                                            //Fermeture du popup 
                                            fen.window.close();
                                            return true;
                                    }
                        </script>

                    </div>
                    <span class=\"next\"></span>
                </div>

                <div id=\"work1\">
                    <div class=\"work\" id=\"work\" >



                        <!-- SVP, prendre une phote de votre Galerie ou de votre camera ! Puis choisissez votre porte ! -->
                        <h4>SVP, prendre une phote de votre Galerie ou de votre camera ! Puis choisissez votre porte !</h4>

                        <div id=\"target\" class=\"target\">
                            <div class=\"h1111\" id=\"imprime_moi\">
                                <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/save/model.png"), "html", null, true);
        echo "\" classe=\"vd\" ><br>


                            </div>



                            <section id='section' class='section'>
                                <video class='video' id='video'></video>
                                <button id='snap' type='submit'>Snap Photo</button>
                                <canvas id='canvas' style=\"position: absolute; z-index: 0;\"></canvas>
                                <button type='submit' id='taken'>Use this Photo</button>
                                <button id='reset'>Reset</button>
                            </section>
                            <canvas class=\"up\" id=\"up\">
                            </canvas>                       
                            <div id=\"t-porte\" class=\"insert_img\" style=\"position:absolute; z-index:1;\">
                                <button title=\"rénistialiser\" id=\"reset\" class=\"reset tools-reset\"></button>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- enregistrement-->   


                <div id=\"popup_name_e\" class=\"popup_save popup popup_block_e\">
                    
                    
     <form method=\"POST\" enctype=\"multipart/form-data\" action=\"";
        // line 274
        echo $this->env->getExtension('routing')->getPath("sifast_pfe_enregistrer");
        echo "\" id=\"myForm\">
            <input type=\"hidden\" name=\"img_val\" id=\"img_val\" value=\"\" />
    </form>
            <!--<div class='a'><button id=\"bsave\" onclick=\"capture();\">save</button></div>-->
            <button id=\"bsave\" onclick=\"capture();\">save</button>

                    <h4> Voici l'aperçu de votre modele</h4>
                    <div  class=\"iii\" ></div>

                    <h5> Telecharger votre modele en cliquant sur le lien :<a style=\"color:#000;text-decoration: underline;\" href=\"assets/img/save/model.png\" download>Telecharger</a></h5>
                </div>     

                <!-- Demande de devis -->      
                <div id=\"popup_name_d\" class=\"popup popup_block_d\">

                    <h2 class=\"text_bleu\"><center><u>Demande de devis</u></center></h2>
                    <img src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/devis.png"), "html", null, true);
        echo "\" class=\"img_dev\">

                    <form id=\"monForm\" action=\"";
        // line 292
        echo $this->env->getExtension('routing')->getPath("sifast_pfe_ajout");
        echo "\" method=\"POST\">
                        <label>Votre mail :</label>
                        <input type=\"text\" id=\"mail_clt\" name=\"mail_clt\"></br>
                        <label>Type :</label>
                        <select name=\"type_p\" id=\"type_p\">
                            <option value=\"\"> ----- Choisir ----- </option>
                            <option value=\"porte\"> porte </option>
                            <option value=\"fenetre\"> fenetre </option>
                        </select></br>
                        <label>Sous type :</label>
                        <select name=\"ss_type_p\" id=\"sous_type\">
                            <option value=\"\"> ----- Choisir ----- </option>
                            <option value=\"aluminium\"> aluminium </option>
                            <option value=\"pvc\"> pvc </option>
                        </select></br>
                        <label>Modele :</label>
                        <select name=\"modele_p\" id=\"modele\">
                            <option value=\"\"> ----- Choisir ----- </option>
                            <option value=\"classique\"> classique </option>
                            <option value=\"moderne\"> moderne </option>
                        </select></br>
                        <label>Longeur de votre porte/fenêtre (cm):</label>
                        <input type=\"text\" id=\"longeur\" name=\"longeur\"></br>
                        <label>Largeur de votre porte/fenêtre (cm):</label>
                        <input type=\"text\" id=\"largeur\" name=\"largeur\"></br>
                        <label>Couleur :</label>
                        <select name=\"couleur\" id=\"couleur_id\">
                            <option value=\"\"> ----- Choisir ----- </option>
                            <option value=\"beige\"> beige </option>
                            <option value=\"noir\"> noir </option>
                            <option value=\"blanc\"> blanc </option>
                            <option value=\"bleu\"> bleu </option>
                            <option value=\"vert\"> vert </option>
                            <option value=\"aqua\"> aqua </option>
                        </select></br>
                        <label>Image de votre interface :</label>
                        <!-- sbab la5rab-->
                        <input type='file' id='img_devis' name=\"img_devis\" style=\"display: none;\">
                        <div id=\"lower\">
                            <input  id=\"submit\" name=\"submit\" type=\"submit\" value=\"Ajouter\" > 
                        </div>
                    </form>\t

                </div>

                <div id=\"popup_name\" class=\"popup_block\">
                    <h2 class=\"text_bleu\"><u>A propos de :</u></h2>
                    <h4 class=\"text_bleu\">Faites votre simulation en ligne grâce au configurateur de menuiserie !</h4>
                    <p class=\"text_p\">Cette application sera un véritable outil d’aide à la prise de decision.</p>
                    <p class=\"text_p\">Les fonctionnalités proposées par cette application conjuguées à une réelle facilité d’utilisation.</p>
                    <p class=\"text_p\">Mettez en situation une porte ou une fenêtre de la gamme MENUISERIE sur la façade de votre maison ou dans votre intérieur d’appartement ! Rien de plus simple : prenez une photo de face de votre maison ou de votre entrée d'appartement, téléchargez-la sur le site, choisissez une porte ou une fenetre de la gamme MENUISERIE, et intégrez-la. Le tour est joué !</p>
                </div>






            </div>
        </div>
    </div>
</div>


";
        // line 356
        $this->displayBlock('footer', $context, $blocks);
        // line 359
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/deconnecte/deco.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/deconnecte/app.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/deconnecte/devis.js"), "html", null, true);
        echo " \"></script>

<script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/jQuery/jquery-ui.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/jquery.ui.touch-punch.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/moment.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/jquery.liquidcarousel.pack.js"), "html", null, true);
        echo " \"></script>

<script type=\"text/javascript\" src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/transform.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/deconnecte/url.js"), "html", null, true);
        echo " \"></script>

<script type=\"text/javascript\" src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/configuration.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/tr.js"), "html", null, true);
        echo " \"></script>

<script type=\"text/javascript\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/script.js"), "html", null, true);
        echo " \"></script>
<script type=\"text/javascript\" src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/script_1.js"), "html", null, true);
        echo " \"></script>


</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/c.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/style1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/global.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" />
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/graphic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/global.mq.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/style.mq.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/configuration.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/jQuery/jQuery.1.7.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/modernizr.custom.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/respond.js"), "html", null, true);
        echo " \"></script>

        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/html2canvas.js"), "html", null, true);
        echo " \"></script>
        <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/jquery.plugin.html2canvas.js"), "html", null, true);
        echo " \"></script>


    ";
    }

    // line 356
    public function block_footer($context, array $blocks = array())
    {
        // line 357
        $this->env->loadTemplate("SifastPfeBundle:home:configurateur.html.twig", "1351755502")->display($context);
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle:home:configurateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 357,  584 => 356,  576 => 33,  572 => 32,  567 => 30,  563 => 29,  559 => 28,  553 => 26,  550 => 25,  542 => 20,  538 => 19,  534 => 18,  530 => 17,  526 => 16,  522 => 15,  518 => 14,  514 => 13,  510 => 12,  506 => 11,  501 => 9,  497 => 8,  494 => 7,  491 => 6,  485 => 5,  475 => 375,  471 => 374,  466 => 372,  462 => 371,  457 => 369,  453 => 368,  448 => 366,  444 => 365,  440 => 364,  436 => 363,  431 => 361,  427 => 360,  422 => 359,  420 => 356,  353 => 292,  348 => 290,  329 => 274,  294 => 242,  250 => 201,  245 => 199,  228 => 184,  220 => 183,  217 => 182,  213 => 181,  187 => 158,  179 => 153,  174 => 151,  161 => 141,  153 => 136,  148 => 134,  108 => 97,  82 => 74,  70 => 65,  40 => 37,  38 => 25,  35 => 24,  33 => 6,  29 => 5,  23 => 1,);
    }
}


/* SifastPfeBundle:home:configurateur.html.twig */
class __TwigTemplate_634cb96b5fec0abd1200135ad771f6003f5c7404dd7d323edddc2c9bae15c52a_1351755502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SifastPfeBundle:layout:footer.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SifastPfeBundle:layout:footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle:home:configurateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 357,  584 => 356,  576 => 33,  572 => 32,  567 => 30,  563 => 29,  559 => 28,  553 => 26,  550 => 25,  542 => 20,  538 => 19,  534 => 18,  530 => 17,  526 => 16,  522 => 15,  518 => 14,  514 => 13,  510 => 12,  506 => 11,  501 => 9,  497 => 8,  494 => 7,  491 => 6,  485 => 5,  475 => 375,  471 => 374,  466 => 372,  462 => 371,  457 => 369,  453 => 368,  448 => 366,  444 => 365,  440 => 364,  436 => 363,  431 => 361,  427 => 360,  422 => 359,  420 => 356,  353 => 292,  348 => 290,  329 => 274,  294 => 242,  250 => 201,  245 => 199,  228 => 184,  220 => 183,  217 => 182,  213 => 181,  187 => 158,  179 => 153,  174 => 151,  161 => 141,  153 => 136,  148 => 134,  108 => 97,  82 => 74,  70 => 65,  40 => 37,  38 => 25,  35 => 24,  33 => 6,  29 => 5,  23 => 1,);
    }
}
