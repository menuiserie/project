<?php

/* SifastPfeBundle:home:alu.html.twig */
class __TwigTemplate_a8979cfd7d20130e5014837807249c697779534b7c577fc2827faad830b72018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SifastPfeBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SifastPfeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <html>
        <body class=\"\">


            <!--sk-body-->
            <div id=\"sk-body\">
                <div class=\"container_12 clearfix clear-both\">


                    <div class=\"content-right float-right\"> 

                        <div class=\"barre_menu\">
                            <p class=\"cat-menu\">Classique</p>
                        </div>
                        <div id=\"liquid2\" class=\"liquid\">
                            <span class=\"previous\"></span>
                            <div class=\"wrapper\">
                                <ul>

                                    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 24
            echo "                                        <li><a class=\"imgclick\" href=\"config?conf=1\"  title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
            echo "\" style=\"width: 65px;height: 123px\" width=\"65px\" height=\"123px\" alt=\"image 01\" border=\"0\" /></a></li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 

                                </ul>
                            </div>
                            <span class=\"next\"></span>
                        </div>
                        <div class=\"barre_menu\">
                            <p class=\"cat-menu\">Moderne</p>
                        </div>
                        <div id=\"liquid3\" class=\"liquid\">
                            <span class=\"previous\"></span>
                            <div class=\"wrapper\">
                                <ul>

                                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images2"));
        foreach ($context['_seq'] as $context["_key"] => $context["image2"]) {
            // line 40
            echo "                                        <li><a href=\"config?conf=2\"  title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image2"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image2"), "html", null, true);
            echo "\" style=\"width: 65px;height: 123px\" width=\"65px\" height=\"123px\" alt=\"image 01\" border=\"0\" /></a></li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 
                                </ul>
                            </div>
                            <span class=\"next\"></span>
                        </div>
                    </div>
                </div>
            </div>

            <script type=\"text/javascript\">
                <!--
                        \$(document).ready(function() {
                    \$('#liquid1').liquidcarousel({height: 129, duration: 100, hidearrows: false});
                });
                        -- >
            </script>
        </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle:home:alu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  87 => 40,  83 => 39,  67 => 25,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
