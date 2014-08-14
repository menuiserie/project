<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_7176214553a5594f509ff6e0ec9e15ae2388dda1297ee43caf086a49991b1976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 286,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  742 => 492,  740 => 491,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  534 => 418,  530 => 417,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  386 => 159,  378 => 157,  345 => 147,  340 => 145,  331 => 140,  321 => 135,  302 => 125,  290 => 119,  288 => 118,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  184 => 63,  174 => 74,  118 => 49,  810 => 529,  807 => 528,  796 => 521,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 479,  698 => 477,  686 => 472,  682 => 470,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  532 => 410,  529 => 409,  527 => 416,  522 => 406,  202 => 94,  188 => 76,  405 => 137,  388 => 134,  382 => 131,  377 => 129,  371 => 156,  359 => 123,  356 => 122,  353 => 328,  347 => 119,  333 => 115,  328 => 139,  324 => 112,  313 => 110,  308 => 287,  293 => 198,  274 => 110,  249 => 181,  237 => 91,  232 => 88,  186 => 72,  180 => 70,  161 => 58,  114 => 36,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  373 => 156,  351 => 141,  342 => 137,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 122,  289 => 196,  275 => 105,  270 => 102,  262 => 188,  256 => 96,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  181 => 65,  178 => 59,  150 => 55,  113 => 40,  127 => 35,  90 => 37,  137 => 25,  97 => 41,  741 => 323,  737 => 490,  673 => 259,  667 => 256,  662 => 253,  660 => 464,  652 => 246,  648 => 244,  642 => 449,  618 => 240,  607 => 232,  592 => 231,  589 => 230,  585 => 229,  582 => 228,  579 => 227,  576 => 226,  557 => 223,  552 => 221,  549 => 411,  545 => 219,  542 => 421,  539 => 217,  536 => 419,  512 => 211,  509 => 210,  502 => 208,  500 => 207,  487 => 204,  475 => 201,  472 => 200,  470 => 199,  465 => 196,  455 => 192,  447 => 188,  438 => 184,  429 => 188,  425 => 181,  417 => 143,  414 => 177,  410 => 176,  399 => 167,  397 => 166,  394 => 168,  389 => 160,  380 => 158,  361 => 152,  348 => 140,  343 => 146,  338 => 116,  332 => 137,  326 => 138,  318 => 132,  310 => 130,  307 => 128,  304 => 128,  300 => 121,  286 => 112,  284 => 114,  281 => 114,  276 => 193,  267 => 101,  251 => 182,  234 => 90,  223 => 86,  218 => 84,  213 => 78,  200 => 72,  192 => 75,  185 => 75,  170 => 56,  167 => 71,  160 => 58,  100 => 36,  76 => 28,  745 => 493,  738 => 589,  735 => 588,  731 => 586,  726 => 584,  721 => 583,  704 => 569,  699 => 568,  694 => 470,  690 => 469,  685 => 564,  683 => 563,  517 => 404,  511 => 397,  505 => 209,  503 => 394,  390 => 287,  210 => 77,  153 => 69,  148 => 53,  146 => 52,  124 => 42,  110 => 22,  81 => 30,  77 => 25,  70 => 19,  58 => 13,  20 => 1,  104 => 37,  84 => 27,  501 => 281,  498 => 280,  490 => 34,  486 => 33,  481 => 31,  477 => 202,  473 => 29,  463 => 26,  460 => 194,  452 => 191,  448 => 19,  436 => 16,  432 => 15,  428 => 14,  424 => 13,  420 => 12,  416 => 11,  411 => 140,  404 => 7,  401 => 172,  395 => 135,  385 => 298,  376 => 158,  372 => 157,  367 => 339,  363 => 153,  358 => 151,  354 => 288,  350 => 327,  346 => 142,  336 => 283,  334 => 141,  296 => 121,  222 => 83,  205 => 162,  197 => 69,  194 => 68,  190 => 159,  53 => 11,  23 => 1,  207 => 76,  195 => 56,  191 => 67,  175 => 58,  172 => 57,  165 => 83,  155 => 47,  152 => 46,  134 => 39,  126 => 32,  65 => 22,  34 => 4,  480 => 162,  474 => 161,  469 => 28,  461 => 155,  457 => 193,  453 => 199,  444 => 18,  440 => 17,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 296,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 297,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 329,  341 => 117,  337 => 103,  322 => 133,  314 => 131,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 216,  258 => 187,  252 => 80,  247 => 100,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 45,  140 => 55,  132 => 45,  128 => 42,  107 => 35,  61 => 23,  273 => 96,  269 => 107,  254 => 102,  243 => 88,  240 => 86,  238 => 96,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 78,  179 => 52,  159 => 57,  143 => 45,  135 => 46,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 17,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 129,  142 => 51,  138 => 56,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 29,  62 => 21,  49 => 14,  38 => 6,  94 => 21,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  93 => 38,  88 => 28,  78 => 24,  27 => 7,  87 => 33,  21 => 2,  28 => 6,  44 => 8,  31 => 3,  25 => 35,  46 => 10,  26 => 3,  24 => 2,  19 => 1,  79 => 29,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 57,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 38,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 27,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 54,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 43,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 51,  122 => 41,  116 => 57,  112 => 42,  109 => 27,  106 => 51,  103 => 22,  99 => 23,  95 => 39,  92 => 28,  86 => 29,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 9,  33 => 9,  30 => 7,);
    }
}
