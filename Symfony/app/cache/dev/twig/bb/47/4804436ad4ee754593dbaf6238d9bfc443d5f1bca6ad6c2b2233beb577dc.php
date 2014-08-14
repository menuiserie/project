<?php

/* SifastPfeBundle:home:pvc.html.twig */
class __TwigTemplate_bb474804436ad4ee754593dbaf6238d9bfc443d5f1bca6ad6c2b2233beb577dc extends Twig_Template
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
        echo "    <html > 
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
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "                                    <li><a href=\"config?conf=3\" title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
            echo "\" style=\"width: 65px;height: 123px\" width=\"65px\" height=\"123px\" alt=\"image 01\" border=\"0\" /></a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
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
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images2"));
        foreach ($context['_seq'] as $context["_key"] => $context["image2"]) {
            // line 37
            echo "                                    <li><a href=\"config?conf=4\" title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image2"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "image2"), "html", null, true);
            echo "\" style=\"width: 65px;height: 123px\" width=\"65px\" height=\"123px\" alt=\"image 01\" border=\"0\" /></a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        return "SifastPfeBundle:home:pvc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  84 => 37,  80 => 36,  63 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,);
    }
}
