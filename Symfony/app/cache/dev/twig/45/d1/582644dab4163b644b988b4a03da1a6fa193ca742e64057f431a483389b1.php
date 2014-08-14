<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_45d1582644dab4163b644b988b4a03da1a6fa193ca742e64057f431a483389b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo $this->getContext($context, "code");
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  90 => 32,  137 => 25,  97 => 18,  741 => 323,  737 => 321,  673 => 259,  667 => 256,  662 => 253,  660 => 252,  652 => 246,  648 => 244,  642 => 243,  618 => 240,  607 => 232,  592 => 231,  589 => 230,  585 => 229,  582 => 228,  579 => 227,  576 => 226,  557 => 223,  552 => 221,  549 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  512 => 211,  509 => 210,  502 => 208,  500 => 207,  487 => 204,  475 => 201,  472 => 200,  470 => 199,  465 => 196,  455 => 192,  447 => 188,  438 => 184,  429 => 182,  425 => 181,  417 => 178,  414 => 177,  410 => 176,  399 => 167,  397 => 166,  394 => 165,  389 => 162,  380 => 159,  361 => 154,  348 => 143,  343 => 141,  338 => 138,  332 => 137,  326 => 134,  318 => 132,  310 => 130,  307 => 129,  304 => 128,  300 => 127,  286 => 115,  284 => 114,  281 => 113,  276 => 110,  267 => 106,  251 => 101,  234 => 95,  223 => 86,  218 => 84,  213 => 81,  200 => 77,  192 => 75,  185 => 73,  170 => 61,  167 => 60,  160 => 58,  100 => 32,  76 => 17,  745 => 52,  738 => 589,  735 => 588,  731 => 586,  726 => 584,  721 => 583,  704 => 569,  699 => 568,  694 => 566,  690 => 565,  685 => 564,  683 => 563,  517 => 213,  511 => 397,  505 => 209,  503 => 394,  390 => 287,  210 => 109,  153 => 56,  148 => 53,  146 => 52,  124 => 42,  110 => 22,  81 => 27,  77 => 25,  70 => 24,  58 => 20,  20 => 1,  104 => 66,  84 => 29,  501 => 281,  498 => 280,  490 => 34,  486 => 33,  481 => 31,  477 => 202,  473 => 29,  463 => 26,  460 => 194,  452 => 191,  448 => 19,  436 => 16,  432 => 15,  428 => 14,  424 => 13,  420 => 12,  416 => 11,  411 => 9,  404 => 7,  401 => 6,  395 => 5,  385 => 298,  376 => 158,  372 => 157,  367 => 292,  363 => 291,  358 => 289,  354 => 288,  350 => 287,  346 => 142,  336 => 283,  334 => 280,  296 => 245,  222 => 177,  205 => 162,  197 => 161,  194 => 160,  190 => 159,  53 => 10,  23 => 1,  207 => 59,  195 => 56,  191 => 55,  175 => 47,  172 => 62,  165 => 42,  155 => 30,  152 => 55,  134 => 38,  126 => 32,  65 => 36,  34 => 6,  480 => 162,  474 => 161,  469 => 28,  461 => 155,  457 => 193,  453 => 151,  444 => 18,  440 => 17,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 8,  402 => 296,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 297,  379 => 119,  374 => 116,  368 => 156,  365 => 155,  362 => 110,  360 => 109,  355 => 106,  341 => 284,  337 => 103,  322 => 133,  314 => 131,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 216,  258 => 103,  252 => 80,  247 => 100,  241 => 97,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 45,  140 => 55,  132 => 45,  128 => 44,  107 => 35,  61 => 12,  273 => 96,  269 => 94,  254 => 102,  243 => 88,  240 => 86,  238 => 96,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 85,  219 => 76,  217 => 75,  208 => 108,  204 => 78,  179 => 52,  159 => 61,  143 => 45,  135 => 47,  119 => 40,  102 => 17,  71 => 9,  67 => 25,  63 => 21,  59 => 17,  201 => 92,  196 => 76,  183 => 82,  171 => 61,  166 => 71,  163 => 34,  158 => 31,  156 => 131,  151 => 129,  142 => 51,  138 => 119,  136 => 47,  121 => 46,  117 => 19,  105 => 18,  91 => 16,  62 => 18,  49 => 5,  38 => 25,  94 => 34,  89 => 30,  85 => 14,  75 => 17,  68 => 20,  56 => 11,  93 => 28,  88 => 31,  78 => 26,  27 => 4,  87 => 40,  21 => 2,  28 => 3,  44 => 9,  31 => 4,  25 => 4,  46 => 7,  26 => 9,  24 => 4,  19 => 1,  79 => 11,  72 => 22,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 57,  145 => 48,  139 => 49,  131 => 45,  123 => 24,  120 => 20,  115 => 38,  111 => 19,  108 => 19,  101 => 32,  98 => 41,  96 => 61,  83 => 13,  74 => 23,  66 => 24,  55 => 7,  52 => 6,  50 => 13,  43 => 23,  41 => 5,  35 => 24,  32 => 4,  29 => 5,  209 => 82,  203 => 58,  199 => 57,  193 => 73,  189 => 74,  187 => 54,  182 => 53,  176 => 64,  173 => 65,  168 => 72,  164 => 136,  162 => 41,  154 => 58,  149 => 51,  147 => 53,  144 => 52,  141 => 48,  133 => 55,  130 => 44,  125 => 112,  122 => 41,  116 => 41,  112 => 42,  109 => 36,  106 => 36,  103 => 22,  99 => 16,  95 => 38,  92 => 21,  86 => 29,  82 => 28,  80 => 36,  73 => 16,  64 => 13,  60 => 21,  57 => 52,  54 => 31,  51 => 14,  48 => 19,  45 => 17,  42 => 8,  39 => 12,  36 => 4,  33 => 3,  30 => 7,);
    }
}
