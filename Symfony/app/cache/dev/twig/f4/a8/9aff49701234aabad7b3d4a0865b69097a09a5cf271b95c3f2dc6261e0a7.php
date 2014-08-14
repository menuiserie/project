<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_f4a89aff49701234aabad7b3d4a0865b69097a09a5cf271b95c3f2dc6261e0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 60,  90 => 32,  137 => 25,  97 => 41,  741 => 323,  737 => 321,  673 => 259,  667 => 256,  662 => 253,  660 => 252,  652 => 246,  648 => 244,  642 => 243,  618 => 240,  607 => 232,  592 => 231,  589 => 230,  585 => 229,  582 => 228,  579 => 227,  576 => 226,  557 => 223,  552 => 221,  549 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  512 => 211,  509 => 210,  502 => 208,  500 => 207,  487 => 204,  475 => 201,  472 => 200,  470 => 199,  465 => 196,  455 => 192,  447 => 188,  438 => 184,  429 => 182,  425 => 181,  417 => 178,  414 => 177,  410 => 176,  399 => 167,  397 => 166,  394 => 165,  389 => 162,  380 => 159,  361 => 154,  348 => 143,  343 => 141,  338 => 138,  332 => 137,  326 => 134,  318 => 132,  310 => 130,  307 => 129,  304 => 128,  300 => 127,  286 => 115,  284 => 114,  281 => 113,  276 => 110,  267 => 106,  251 => 101,  234 => 95,  223 => 86,  218 => 84,  213 => 81,  200 => 77,  192 => 75,  185 => 73,  170 => 61,  167 => 60,  160 => 58,  100 => 32,  76 => 28,  745 => 52,  738 => 589,  735 => 588,  731 => 586,  726 => 584,  721 => 583,  704 => 569,  699 => 568,  694 => 566,  690 => 565,  685 => 564,  683 => 563,  517 => 213,  511 => 397,  505 => 209,  503 => 394,  390 => 287,  210 => 109,  153 => 56,  148 => 53,  146 => 52,  124 => 42,  110 => 22,  81 => 27,  77 => 25,  70 => 24,  58 => 17,  20 => 1,  104 => 66,  84 => 29,  501 => 281,  498 => 280,  490 => 34,  486 => 33,  481 => 31,  477 => 202,  473 => 29,  463 => 26,  460 => 194,  452 => 191,  448 => 19,  436 => 16,  432 => 15,  428 => 14,  424 => 13,  420 => 12,  416 => 11,  411 => 9,  404 => 7,  401 => 6,  395 => 5,  385 => 298,  376 => 158,  372 => 157,  367 => 292,  363 => 291,  358 => 289,  354 => 288,  350 => 287,  346 => 142,  336 => 283,  334 => 280,  296 => 245,  222 => 177,  205 => 162,  197 => 161,  194 => 160,  190 => 159,  53 => 10,  23 => 1,  207 => 59,  195 => 56,  191 => 55,  175 => 47,  172 => 62,  165 => 42,  155 => 30,  152 => 55,  134 => 38,  126 => 32,  65 => 36,  34 => 6,  480 => 162,  474 => 161,  469 => 28,  461 => 155,  457 => 193,  453 => 151,  444 => 18,  440 => 17,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 8,  402 => 296,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 297,  379 => 119,  374 => 116,  368 => 156,  365 => 155,  362 => 110,  360 => 109,  355 => 106,  341 => 284,  337 => 103,  322 => 133,  314 => 131,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 216,  258 => 103,  252 => 80,  247 => 100,  241 => 97,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 45,  140 => 55,  132 => 45,  128 => 44,  107 => 35,  61 => 12,  273 => 96,  269 => 94,  254 => 102,  243 => 88,  240 => 86,  238 => 96,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 85,  219 => 76,  217 => 75,  208 => 108,  204 => 78,  179 => 52,  159 => 61,  143 => 45,  135 => 62,  119 => 40,  102 => 17,  71 => 9,  67 => 25,  63 => 19,  59 => 17,  201 => 92,  196 => 76,  183 => 82,  171 => 61,  166 => 71,  163 => 34,  158 => 79,  156 => 131,  151 => 129,  142 => 51,  138 => 119,  136 => 47,  121 => 46,  117 => 19,  105 => 18,  91 => 16,  62 => 18,  49 => 13,  38 => 25,  94 => 34,  89 => 30,  85 => 32,  75 => 17,  68 => 20,  56 => 11,  93 => 28,  88 => 31,  78 => 26,  27 => 4,  87 => 40,  21 => 2,  28 => 3,  44 => 9,  31 => 3,  25 => 35,  46 => 8,  26 => 11,  24 => 4,  19 => 1,  79 => 11,  72 => 22,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 48,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 38,  111 => 19,  108 => 19,  101 => 43,  98 => 41,  96 => 61,  83 => 13,  74 => 27,  66 => 24,  55 => 7,  52 => 14,  50 => 13,  43 => 11,  41 => 10,  35 => 24,  32 => 4,  29 => 5,  209 => 82,  203 => 58,  199 => 57,  193 => 73,  189 => 74,  187 => 54,  182 => 53,  176 => 64,  173 => 65,  168 => 72,  164 => 136,  162 => 41,  154 => 58,  149 => 51,  147 => 53,  144 => 52,  141 => 48,  133 => 55,  130 => 44,  125 => 112,  122 => 41,  116 => 41,  112 => 42,  109 => 36,  106 => 45,  103 => 22,  99 => 16,  95 => 38,  92 => 21,  86 => 29,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 21,  57 => 52,  54 => 31,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 12,  36 => 5,  33 => 4,  30 => 3,);
    }
}
