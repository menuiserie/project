<?php

/* SifastPfeBundle:home:enregistrement.html.twig */
class __TwigTemplate_0931e97a0b474d31dfff1f8fd9b63ccab4c5c4541fb2763df7ca58f66dc081f5 extends Twig_Template
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
        echo "<style type=\"text/css\">
body, a, span {
\tfont-family: Tahoma; font-size: 10pt; font-weight: bold;
}
</style>

<h2>Save the image and show to user</h2>
<table>
    <tr>
       
        <td align=\"right\">
            <a href=\"config?conf=1\">Go Back</a>
        </td>
       
    </tr>
    <tr>
        <td colspan=\"2\">
            <br />
            <br />
            <span>
                Here is Client-sided image:
            </span>
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "images"), "html", null, true);
        echo "\" />
            <br />
        </td>
    </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "SifastPfeBundle:home:enregistrement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 23,  19 => 1,);
    }
}
