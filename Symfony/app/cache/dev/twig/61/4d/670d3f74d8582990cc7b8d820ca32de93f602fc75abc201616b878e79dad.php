<?php

/* SifastPfeBundle:layout:menu.html.twig */
class __TwigTemplate_614d670d3f74d8582990cc7b8d820ca32de93f602fc75abc201616b878e79dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<header id=\"sk-header\">
    <div class=\"container_12 clearfix\">
        <div class=\"w_20 wt-100\">
            <div class=\"header-top\">
                <a class=\"header_logo float-left\" href=\"home\" title=\"Menuiserie\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Menuiserie\"></a>
                <a class=\"header_text\" href=\"home\">Menuiserie</a>
            </div>
            <div class=\"header-bottom\"></div>
        </div>
        <div class=\"w_80 wt-100\">
            <div class=\"header_bar_top\">
                <div class=\"menu_btn\">
                    <a class=\"btn-menu\" href=\"#\"><img class=\"menu_btn_btn\" title=\"Menu\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/btn-menu.png"), "html", null, true);
        echo "\" alt=\"bouton menu\"></a>
                </div>
                <div class=\"menu_bar\"></div>
                <div class=\"reset_btn\">
                    <a class=\"poplight ajou btn-reset\" href=\"#?w=700\" rel=\"popup_name\" title=\"A propos de\"><img class=\"reset_btn_btn\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/1329652454_People-MSN.png"), "html", null, true);
        echo "\" alt=\"Qui sommes nous !\"></a>
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
                <!--<p class=\"breadcrumb_porte_alu\">Produits / Porte / <a href=\"#\">Aluminium</a></p>-->
            </div>
            <div class=\"mod-tools\">
                <ul>
                    <li>
                        <a href=\"#\" class=\"open-to-tools\" title=\"Outils\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/pfe2/Symfony/web/bundles/sifastpfe/assets/img/parametre.png"), "html", null, true);
        echo "\" alt=\"paramètre\" />
                        </a>
                        <ul class=\"tools-liste\">
                            <li><a href=\"#?w=700\" class=\"poplight_d ajou tools-parametre\" title=\"Demande de devis\" rel=\"popup_name_d\"></a></li>
                             <li><a href=\"#?w=700\" class=\"poplight_d ajou tools-parametre\" title=\"Demande de devis\" rel=\"popup_name_d\"></a></li>

                            <li><a href=\"pvc\" class=\"tools-outils\" title=\"Configurateur\" target=\"_blank\"></a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div> 
    </div>
</header>


<div class=\"content-left w_20\"> 

    <div class=\"gamme-pdt active\">
        <h2 class=\"pdt\">Produits</h2>
    </div>
    <div class=\"menu-pdt\">
        <ul class='menu niv-1'>
            <li><a class=\"icon icon-fenetre\" href=\"#\">Fenêtre</a>
                <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/row-menu.png"), "html", null, true);
        echo "\" alt=\"menu actice\"/>
                <ul class=\"niv-2\">
                    <li><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/backgrounds/catalogue.png"), "html", null, true);
        echo "\"><a href=\"http://issuu.com/prefal/docs/catalogue-porte?e=3853878/5696235\">Consulter le catalogue en ligne</a></li>
                </ul>
            </li>
            <li>
                <a class=\"icon icon-porte\" href=\"#\">Porte</a>
                <img src=\"";
        // line 68
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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/row-menu.png"), "html", null, true);
        echo "\" alt=\"menu actice\"/>
                <ul class=\"niv-2\">
                    <li><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/backgrounds/catalogue.png"), "html", null, true);
        echo "\"><a href=\"http://issuu.com/prefal/docs/catalogue-porte?e=3853878/5696235\">Consulter le catalogue en ligne</a></li>
                </ul>
            </li>
            <li>
                <a class=\"icon icon-volet\" href=\"#\">Volet porte</a>
                <img src=\"";
        // line 85
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

</div>";
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle:layout:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 85,  124 => 80,  119 => 78,  106 => 68,  98 => 63,  93 => 61,  65 => 36,  44 => 18,  37 => 14,  26 => 6,  19 => 1,);
    }
}
