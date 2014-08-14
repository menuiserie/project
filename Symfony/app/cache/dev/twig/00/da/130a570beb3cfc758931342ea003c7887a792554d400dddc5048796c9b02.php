<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_00da130a570beb3cfc758931342ea003c7887a792554d400dddc5048796c9b02 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  405 => 137,  388 => 134,  382 => 131,  377 => 129,  371 => 127,  359 => 123,  356 => 122,  353 => 121,  347 => 119,  333 => 115,  328 => 113,  324 => 112,  313 => 110,  308 => 109,  293 => 107,  274 => 96,  249 => 92,  237 => 91,  232 => 89,  186 => 72,  180 => 70,  161 => 58,  114 => 36,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  373 => 156,  351 => 141,  342 => 137,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 111,  303 => 122,  289 => 113,  275 => 105,  270 => 102,  262 => 93,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  181 => 65,  178 => 64,  150 => 55,  113 => 38,  127 => 60,  90 => 27,  137 => 25,  97 => 41,  741 => 323,  737 => 321,  673 => 259,  667 => 256,  662 => 253,  660 => 252,  652 => 246,  648 => 244,  642 => 243,  618 => 240,  607 => 232,  592 => 231,  589 => 230,  585 => 229,  582 => 228,  579 => 227,  576 => 226,  557 => 223,  552 => 221,  549 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  512 => 211,  509 => 210,  502 => 208,  500 => 207,  487 => 204,  475 => 201,  472 => 200,  470 => 199,  465 => 196,  455 => 192,  447 => 188,  438 => 184,  429 => 188,  425 => 181,  417 => 143,  414 => 177,  410 => 176,  399 => 167,  397 => 166,  394 => 168,  389 => 162,  380 => 160,  361 => 146,  348 => 140,  343 => 141,  338 => 116,  332 => 137,  326 => 134,  318 => 132,  310 => 130,  307 => 129,  304 => 128,  300 => 121,  286 => 112,  284 => 114,  281 => 98,  276 => 110,  267 => 101,  251 => 101,  234 => 90,  223 => 86,  218 => 84,  213 => 78,  200 => 72,  192 => 75,  185 => 66,  170 => 61,  167 => 60,  160 => 58,  100 => 32,  76 => 28,  745 => 52,  738 => 589,  735 => 588,  731 => 586,  726 => 584,  721 => 583,  704 => 569,  699 => 568,  694 => 566,  690 => 565,  685 => 564,  683 => 563,  517 => 213,  511 => 397,  505 => 209,  503 => 394,  390 => 287,  210 => 77,  153 => 56,  148 => 53,  146 => 52,  124 => 42,  110 => 22,  81 => 23,  77 => 25,  70 => 19,  58 => 14,  20 => 1,  104 => 31,  84 => 24,  501 => 281,  498 => 280,  490 => 34,  486 => 33,  481 => 31,  477 => 202,  473 => 29,  463 => 26,  460 => 194,  452 => 191,  448 => 19,  436 => 16,  432 => 15,  428 => 14,  424 => 13,  420 => 12,  416 => 11,  411 => 140,  404 => 7,  401 => 172,  395 => 135,  385 => 298,  376 => 158,  372 => 157,  367 => 292,  363 => 291,  358 => 289,  354 => 288,  350 => 120,  346 => 142,  336 => 283,  334 => 280,  296 => 245,  222 => 177,  205 => 162,  197 => 71,  194 => 70,  190 => 159,  53 => 12,  23 => 1,  207 => 76,  195 => 56,  191 => 69,  175 => 47,  172 => 68,  165 => 60,  155 => 55,  152 => 54,  134 => 47,  126 => 32,  65 => 36,  34 => 5,  480 => 162,  474 => 161,  469 => 28,  461 => 155,  457 => 193,  453 => 199,  444 => 18,  440 => 17,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 296,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 297,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 143,  341 => 117,  337 => 103,  322 => 133,  314 => 131,  312 => 124,  309 => 97,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 88,  278 => 106,  268 => 85,  264 => 216,  258 => 103,  252 => 80,  247 => 100,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 69,  169 => 45,  140 => 55,  132 => 45,  128 => 42,  107 => 35,  61 => 15,  273 => 96,  269 => 94,  254 => 102,  243 => 88,  240 => 86,  238 => 96,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 108,  204 => 75,  179 => 52,  159 => 57,  143 => 45,  135 => 46,  119 => 40,  102 => 33,  71 => 9,  67 => 18,  63 => 19,  59 => 14,  201 => 74,  196 => 76,  183 => 71,  171 => 61,  166 => 71,  163 => 34,  158 => 79,  156 => 58,  151 => 129,  142 => 51,  138 => 47,  136 => 47,  121 => 46,  117 => 37,  105 => 34,  91 => 25,  62 => 18,  49 => 14,  38 => 7,  94 => 34,  89 => 30,  85 => 32,  75 => 18,  68 => 20,  56 => 11,  93 => 28,  88 => 24,  78 => 19,  27 => 3,  87 => 40,  21 => 2,  28 => 3,  44 => 9,  31 => 4,  25 => 35,  46 => 13,  26 => 9,  24 => 4,  19 => 1,  79 => 11,  72 => 17,  69 => 25,  47 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 57,  145 => 48,  139 => 63,  131 => 61,  123 => 42,  120 => 38,  115 => 38,  111 => 19,  108 => 33,  101 => 30,  98 => 41,  96 => 30,  83 => 13,  74 => 27,  66 => 24,  55 => 13,  52 => 12,  50 => 13,  43 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 57,  193 => 73,  189 => 74,  187 => 54,  182 => 53,  176 => 63,  173 => 65,  168 => 61,  164 => 136,  162 => 59,  154 => 58,  149 => 51,  147 => 51,  144 => 52,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 41,  116 => 39,  112 => 42,  109 => 36,  106 => 45,  103 => 22,  99 => 31,  95 => 27,  92 => 21,  86 => 29,  82 => 21,  80 => 30,  73 => 20,  64 => 17,  60 => 21,  57 => 12,  54 => 31,  51 => 13,  48 => 9,  45 => 10,  42 => 7,  39 => 12,  36 => 5,  33 => 4,  30 => 3,);
    }
}
