<?php

/* SifastPfeBundle::layout.html.twig */
class __TwigTemplate_7e29460d46e65ebb702b5ddbbdd42bc43a295dd83c6453fac7f199f1b1ef85b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- pour manifest il faut ecrire n'importe quoi et vider cache pour actualisé -->
<html manifest=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("sifast_pfe_manifestpage");
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/jQuery/jquery-1.11.0.min.js"), "html", null, true);
        echo " \"></script>
        
    </head>
    <body>
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "</body>
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
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/global.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/graphic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/global.mq.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/css/style.mq.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            






        ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "

            <!--sk-body-->
            <div id=\"sk-body\">
                <div class=\"container_12 clearfix clear-both\">
                    <?php include 'menu.php'; ?>
                    ";
        // line 37
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "            </div>
        </div>
        ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "


";
    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
        $this->env->loadTemplate("SifastPfeBundle::layout.html.twig", "1994079264")->display($context);
        // line 39
        echo "                ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "                ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "        ";
        $this->env->loadTemplate("SifastPfeBundle::layout.html.twig", "1404237363")->display($context);
        // line 46
        echo "    ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/jquery.liquidcarousel.pack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/modernizr.custom.17475.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/plugins/respond.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/js/configuration.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 58,  202 => 57,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  181 => 52,  178 => 51,  174 => 46,  171 => 45,  168 => 44,  164 => 41,  161 => 40,  157 => 39,  154 => 38,  151 => 37,  144 => 47,  142 => 44,  138 => 42,  135 => 40,  133 => 37,  125 => 31,  122 => 30,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  72 => 7,  69 => 6,  63 => 5,  57 => 60,  55 => 51,  53 => 30,  46 => 26,  41 => 25,  39 => 6,  35 => 5,  29 => 2,  26 => 1,);
    }
}


/* SifastPfeBundle::layout.html.twig */
class __TwigTemplate_7e29460d46e65ebb702b5ddbbdd42bc43a295dd83c6453fac7f199f1b1ef85b3_1994079264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SifastPfeBundle:layout:menu.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SifastPfeBundle:layout:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 58,  202 => 57,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  181 => 52,  178 => 51,  174 => 46,  171 => 45,  168 => 44,  164 => 41,  161 => 40,  157 => 39,  154 => 38,  151 => 37,  144 => 47,  142 => 44,  138 => 42,  135 => 40,  133 => 37,  125 => 31,  122 => 30,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  72 => 7,  69 => 6,  63 => 5,  57 => 60,  55 => 51,  53 => 30,  46 => 26,  41 => 25,  39 => 6,  35 => 5,  29 => 2,  26 => 1,);
    }
}


/* SifastPfeBundle::layout.html.twig */
class __TwigTemplate_7e29460d46e65ebb702b5ddbbdd42bc43a295dd83c6453fac7f199f1b1ef85b3_1404237363 extends Twig_Template
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
        return "SifastPfeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 58,  202 => 57,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  181 => 52,  178 => 51,  174 => 46,  171 => 45,  168 => 44,  164 => 41,  161 => 40,  157 => 39,  154 => 38,  151 => 37,  144 => 47,  142 => 44,  138 => 42,  135 => 40,  133 => 37,  125 => 31,  122 => 30,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  72 => 7,  69 => 6,  63 => 5,  57 => 60,  55 => 51,  53 => 30,  46 => 26,  41 => 25,  39 => 6,  35 => 5,  29 => 2,  26 => 1,);
    }
}
