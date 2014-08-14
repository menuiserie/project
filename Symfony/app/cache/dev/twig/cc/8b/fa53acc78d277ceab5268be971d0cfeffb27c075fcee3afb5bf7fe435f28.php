<?php

/* SifastPfeBundle:home:index.html.twig */
class __TwigTemplate_cc8bfa53acc78d277ceab5268be971d0cfeffb27c075fcee3afb5bf7fe435f28 extends Twig_Template
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"content-right float-right\"> 
        <img class=\"acc_img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sifastpfe/assets/img/backgrounds/configurateur.jpg"), "html", null, true);
        echo "\">
    </div>  
";
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle:home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  31 => 7,  28 => 6,);
    }
}
