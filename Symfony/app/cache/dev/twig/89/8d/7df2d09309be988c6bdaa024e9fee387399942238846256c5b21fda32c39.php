<?php

/* NelmioApiDocBundle::method.html.twig */
class __TwigTemplate_898d7df2d09309be988c6bdaa024e9fee387399942238846256c5b21fda32c39 extends Twig_Template
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
        echo "<li class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "method")), "html", null, true);
        echo " operation\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id"), "html", null, true);
        echo "\">
    <div class=\"heading toggler";
        // line 2
        if ($this->getAttribute($this->getContext($context, "data"), "deprecated")) {
            echo " deprecated";
        }
        echo "\" data-href=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "id"), "html", null, true);
        echo "\">
        <h3>
            <span class=\"http_method\">
                <i>";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "method")), "html", null, true);
        echo "</i>
            </span>

            ";
        // line 8
        if ($this->getAttribute($this->getContext($context, "data"), "deprecated")) {
            // line 9
            echo "            <span class=\"deprecated\">
                <i>DEPRECATED</i>
            </span>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ($this->getAttribute($this->getContext($context, "data"), "https")) {
            // line 15
            echo "                <span class=\"icon lock\" title=\"HTTPS\"></span>
            ";
        }
        // line 17
        echo "            ";
        if ($this->getAttribute($this->getContext($context, "data"), "authentication")) {
            // line 18
            echo "                <span class=\"icon keys\" title=\"Needs ";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "authenticationRoles")) > 0)) ? (twig_join_filter($this->getAttribute($this->getContext($context, "data"), "authenticationRoles"), ", ")) : ("authentication")), "html", null, true);
            echo "\"></span>
            ";
        }
        // line 20
        echo "
            <span class=\"path\">
                ";
        // line 22
        if ($this->getAttribute($this->getContext($context, "data", true), "host", array(), "any", true, true)) {
            // line 23
            echo (($this->getAttribute($this->getContext($context, "data"), "https")) ? ("https://") : ("http://"));
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "host"), "html", null, true);
        }
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "uri"), "html", null, true);
        echo "
            </span>
           ";
        // line 28
        if ($this->getAttribute($this->getContext($context, "data", true), "tags", array(), "any", true, true)) {
            // line 29
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 30
                echo "                <span class=\"tag\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "tag"), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "        </h3>
        <ul class=\"options\">
            ";
        // line 35
        if ($this->getAttribute($this->getContext($context, "data", true), "description", array(), "any", true, true)) {
            // line 36
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "description"), "html", null, true);
            echo "</li>
            ";
        }
        // line 38
        echo "        </ul>
    </div>

    <div class=\"content\" style=\"display: ";
        // line 41
        if ((array_key_exists("displayContent", $context) && ($this->getContext($context, "displayContent") == true))) {
            echo "display";
        } else {
            echo "none";
        }
        echo ";\">
        <ul class=\"tabs\">
            <li class=\"selected\" data-pane=\"content\">Documentation</li>
            ";
        // line 44
        if ($this->getContext($context, "enableSandbox")) {
            // line 45
            echo "                <li data-pane=\"sandbox\">Sandbox</li>
            ";
        }
        // line 47
        echo "        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            ";
        // line 51
        if (($this->getAttribute($this->getContext($context, "data", true), "documentation", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "documentation"))))) {
            // line 52
            echo "                <h4>Documentation</h4>
                <div>";
            // line 53
            echo $this->env->getExtension('nelmio_api_doc')->markdown($this->getAttribute($this->getContext($context, "data"), "documentation"));
            echo "</div>
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (($this->getAttribute($this->getContext($context, "data", true), "link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "link"))))) {
            // line 57
            echo "                <h4>Link</h4>
                <div><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "link"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "link"), "html", null, true);
            echo "</a></div>
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if (($this->getAttribute($this->getContext($context, "data", true), "requirements", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "requirements"))))) {
            // line 62
            echo "                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "requirements"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 74
                echo "                            <tr>
                                <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                echo "</td>
                                <td>";
                // line 76
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "infos", true), "requirement", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "infos"), "requirement")) : ("")), "html", null, true);
                echo "</td>
                                <td>";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "infos", true), "dataType", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "infos"), "dataType")) : ("")), "html", null, true);
                echo "</td>
                                <td>";
                // line 78
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "infos", true), "description", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "infos"), "description")) : ("")), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </tbody>
                </table>
            ";
        }
        // line 84
        echo "
            ";
        // line 85
        if (($this->getAttribute($this->getContext($context, "data", true), "filters", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "filters"))))) {
            // line 86
            echo "                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "filters"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 96
                echo "                        <tr>
                            <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                echo "</td>
                            <td>
                                <table>
                                ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "infos"));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 101
                    echo "                                    <tr>
                                        <td>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getContext($context, "key")), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 103
                    echo twig_escape_filter($this->env, trim(strtr(twig_jsonencode_filter($this->getContext($context, "value")), array("\\\\" => "\\")), "\""), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                </table>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </tbody>
                </table>
            ";
        }
        // line 113
        echo "
            ";
        // line 114
        if (($this->getAttribute($this->getContext($context, "data", true), "parameters", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "parameters"))))) {
            // line 115
            echo "                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Format</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 127
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "parameters"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 128
                echo "                            ";
                if ((!$this->getAttribute($this->getContext($context, "infos"), "readonly"))) {
                    // line 129
                    echo "                                <tr>
                                    <td>";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 131
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "infos", true), "dataType", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "infos"), "dataType")) : ("")), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 132
                    echo (($this->getAttribute($this->getContext($context, "infos"), "required")) ? ("true") : ("false"));
                    echo "</td>
                                    <td>";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "format"), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 134
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "infos", true), "description", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "infos"), "description")) : ("")), "html", null, true);
                    echo "</td>
                                </tr>
                            ";
                }
                // line 137
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    </tbody>
                </table>
            ";
        }
        // line 141
        echo "
            ";
        // line 142
        if (($this->getAttribute($this->getContext($context, "data", true), "response", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "response"))))) {
            // line 143
            echo "                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Versions</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 154
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "response"));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 155
                echo "                            <tr>
                                <td>";
                // line 156
                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                echo "</td>
                                <td>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "dataType"), "html", null, true);
                echo "</td>
                                <td>";
                // line 158
                $this->env->loadTemplate("NelmioApiDocBundle:Components:version.html.twig")->display(array("sinceVersion" => $this->getAttribute($this->getContext($context, "infos"), "sinceVersion"), "untilVersion" => $this->getAttribute($this->getContext($context, "infos"), "untilVersion")));
                echo "</td>
                                <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "description"), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                    </tbody>
                </table>
            ";
        }
        // line 165
        echo "
            ";
        // line 166
        if (($this->getAttribute($this->getContext($context, "data", true), "statusCodes", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "statusCodes"))))) {
            // line 167
            echo "                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 176
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "statusCodes"));
            foreach ($context['_seq'] as $context["status_code"] => $context["descriptions"]) {
                // line 177
                echo "                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_";
                // line 178
                echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
                echo "</a></td>
                            <td>
                                <ul>
                                    ";
                // line 181
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "descriptions"));
                foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
                    // line 182
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "description"), "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "                                </ul>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['descriptions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                    </tbody>
                </table>
            ";
        }
        // line 191
        echo "
            ";
        // line 192
        if (($this->getAttribute($this->getContext($context, "data", true), "cache", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "cache"))))) {
            // line 193
            echo "                <h4>Cache</h4>
                <div>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "cache"), "html", null, true);
            echo "s</div>
            ";
        }
        // line 196
        echo "
            </div>

            ";
        // line 199
        if ($this->getContext($context, "enableSandbox")) {
            // line 200
            echo "                <div class=\"pane sandbox\">
                    ";
            // line 201
            if ((((!(null === $this->getAttribute($this->getContext($context, "app"), "request"))) && $this->getAttribute($this->getContext($context, "data"), "https")) && ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "secure") != $this->getAttribute($this->getContext($context, "data"), "https")))) {
                // line 202
                echo "                    Please reload the documentation using the scheme ";
                if ($this->getAttribute($this->getContext($context, "data"), "https")) {
                    echo "HTTPS";
                } else {
                    echo "HTTP";
                }
                echo " if you want to use the sandbox.
                    ";
            } else {
                // line 204
                echo "                        <form method=\"";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "method")), "html", null, true);
                echo "\" action=\"";
                if ($this->getAttribute($this->getContext($context, "data", true), "host", array(), "any", true, true)) {
                    echo (($this->getAttribute($this->getContext($context, "data"), "https")) ? ("https://") : ("http://"));
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "host"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "uri"), "html", null, true);
                echo "\">
                            <fieldset class=\"parameters\">
                                <legend>Input</legend>
                                ";
                // line 207
                if ($this->getAttribute($this->getContext($context, "data", true), "requirements", array(), "any", true, true)) {
                    // line 208
                    echo "                                    <h4>Requirements</h4>
                                    ";
                    // line 209
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "requirements"));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 210
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 211
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 213
                        if ($this->getAttribute($this->getContext($context, "infos", true), "description", array(), "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "description"), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if ($this->getAttribute($this->getContext($context, "infos", true), "default", array(), "any", true, true)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "default"), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "                                ";
                }
                // line 217
                echo "                                ";
                if ($this->getAttribute($this->getContext($context, "data", true), "filters", array(), "any", true, true)) {
                    // line 218
                    echo "                                    <h4>Filters</h4>
                                    ";
                    // line 219
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "filters"));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 220
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 221
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 223
                        if ($this->getAttribute($this->getContext($context, "infos", true), "description", array(), "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "description"), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if ($this->getAttribute($this->getContext($context, "infos", true), "default", array(), "any", true, true)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "default"), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "                                ";
                }
                // line 227
                echo "                                ";
                if ($this->getAttribute($this->getContext($context, "data", true), "parameters", array(), "any", true, true)) {
                    // line 228
                    echo "                                    <h4>Parameters</h4>
                                    ";
                    // line 229
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "parameters"));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 230
                        echo "                                    ";
                        if ((!$this->getAttribute($this->getContext($context, "infos"), "readonly"))) {
                            // line 231
                            echo "                                        <p class=\"tuple\" data-dataType=\"";
                            if ($this->getAttribute($this->getContext($context, "infos"), "dataType")) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "dataType"), "html", null, true);
                            }
                            echo "\" data-format=\"";
                            if ($this->getAttribute($this->getContext($context, "infos"), "format")) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "format"), "html", null, true);
                            }
                            echo "\" data-description=\"";
                            if ($this->getAttribute($this->getContext($context, "infos"), "description")) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "description"), "html", null, true);
                            }
                            echo "\">
                                            <input type=\"text\" class=\"key\" value=\"";
                            // line 232
                            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                            echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                            </select>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                            // line 240
                            if ($this->getAttribute($this->getContext($context, "infos"), "dataType")) {
                                echo "[";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "dataType"), "html", null, true);
                                echo "] ";
                            }
                            if ($this->getAttribute($this->getContext($context, "infos"), "format")) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "format"), "html", null, true);
                            }
                            if ($this->getAttribute($this->getContext($context, "infos"), "description")) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "description"), "html", null, true);
                            } else {
                                echo "Value";
                            }
                            echo "\" ";
                            if ($this->getAttribute($this->getContext($context, "infos", true), "default", array(), "any", true, true)) {
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "infos"), "default"), "html", null, true);
                                echo "\" ";
                            }
                            echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                        }
                        // line 243
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 244
                    echo "                                    <button type=\"button\" class=\"add_parameter\">New parameter</button>
                                ";
                }
                // line 246
                echo "
                            </fieldset>

                            <fieldset class=\"headers\">
                                <legend>Headers</legend>

                                ";
                // line 252
                if ($this->getContext($context, "acceptType")) {
                    // line 253
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"Accept\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" value=\"";
                    // line 256
                    echo twig_escape_filter($this->env, $this->getContext($context, "acceptType"), "html", null, true);
                    echo "\" /> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                // line 259
                echo "
                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                </p>

                                <button type=\"button\" class=\"add_header\">New header</button>
                            </fieldset>

                            <fieldset class=\"request-content\">
                                <legend>Content</legend>

                                <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                    <button  type=\"button\" class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                                </p>
                            </fieldset>

                            <div class=\"buttons\">
                                <input type=\"submit\" value=\"Try!\" />
                            </div>
                        </form>

                        <script type=\"text/x-tmpl\" class=\"parameters_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                            </select>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>

                        <script type=\"text/x-tmpl\" class=\"headers_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>


                        <div class=\"result\">
                            <h4>Request URL</h4>
                            <pre class=\"url\"></pre>

                            <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small>&nbsp;<small class=\"profiler\">[<a href=\"\" class=\"profiler-link\" target=\"_blank\">Profiler</a>]</small></h4>
                            <pre class=\"headers to-expand\"></pre>

                            <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                            <pre class=\"response prettyprint\"></pre>
                        </div>
                    ";
            }
            // line 321
            echo "                </div>
            ";
        }
        // line 323
        echo "        </div>
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 323,  737 => 321,  673 => 259,  667 => 256,  662 => 253,  660 => 252,  652 => 246,  648 => 244,  642 => 243,  618 => 240,  607 => 232,  592 => 231,  589 => 230,  585 => 229,  582 => 228,  579 => 227,  576 => 226,  557 => 223,  552 => 221,  549 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  512 => 211,  509 => 210,  502 => 208,  500 => 207,  487 => 204,  475 => 201,  472 => 200,  470 => 199,  465 => 196,  455 => 192,  447 => 188,  438 => 184,  429 => 182,  425 => 181,  417 => 178,  414 => 177,  410 => 176,  399 => 167,  397 => 166,  394 => 165,  389 => 162,  380 => 159,  361 => 154,  348 => 143,  343 => 141,  338 => 138,  332 => 137,  326 => 134,  318 => 132,  310 => 130,  307 => 129,  304 => 128,  300 => 127,  286 => 115,  284 => 114,  281 => 113,  276 => 110,  267 => 106,  251 => 101,  234 => 95,  223 => 86,  218 => 84,  213 => 81,  200 => 77,  192 => 75,  185 => 73,  170 => 61,  167 => 60,  160 => 58,  100 => 32,  76 => 24,  745 => 52,  738 => 589,  735 => 588,  731 => 586,  726 => 584,  721 => 583,  704 => 569,  699 => 568,  694 => 566,  690 => 565,  685 => 564,  683 => 563,  517 => 213,  511 => 397,  505 => 209,  503 => 394,  390 => 287,  210 => 109,  153 => 56,  148 => 53,  146 => 52,  124 => 42,  110 => 35,  81 => 27,  77 => 25,  70 => 24,  58 => 20,  20 => 1,  104 => 66,  84 => 28,  501 => 281,  498 => 280,  490 => 34,  486 => 33,  481 => 31,  477 => 202,  473 => 29,  463 => 26,  460 => 194,  452 => 191,  448 => 19,  436 => 16,  432 => 15,  428 => 14,  424 => 13,  420 => 12,  416 => 11,  411 => 9,  404 => 7,  401 => 6,  395 => 5,  385 => 298,  376 => 158,  372 => 157,  367 => 292,  363 => 291,  358 => 289,  354 => 288,  350 => 287,  346 => 142,  336 => 283,  334 => 280,  296 => 245,  222 => 177,  205 => 162,  197 => 161,  194 => 160,  190 => 159,  53 => 14,  23 => 1,  207 => 59,  195 => 56,  191 => 55,  175 => 47,  172 => 62,  165 => 42,  155 => 56,  152 => 55,  134 => 38,  126 => 32,  65 => 36,  34 => 6,  480 => 162,  474 => 161,  469 => 28,  461 => 155,  457 => 193,  453 => 151,  444 => 18,  440 => 17,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 8,  402 => 296,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 297,  379 => 119,  374 => 116,  368 => 156,  365 => 155,  362 => 110,  360 => 109,  355 => 106,  341 => 284,  337 => 103,  322 => 133,  314 => 131,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 216,  258 => 103,  252 => 80,  247 => 100,  241 => 97,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 45,  140 => 55,  132 => 45,  128 => 44,  107 => 35,  61 => 13,  273 => 96,  269 => 94,  254 => 102,  243 => 88,  240 => 86,  238 => 96,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 85,  219 => 76,  217 => 75,  208 => 108,  204 => 78,  179 => 52,  159 => 61,  143 => 45,  135 => 47,  119 => 40,  102 => 32,  71 => 9,  67 => 25,  63 => 21,  59 => 17,  201 => 92,  196 => 76,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 40,  156 => 131,  151 => 129,  142 => 51,  138 => 119,  136 => 47,  121 => 46,  117 => 76,  105 => 33,  91 => 30,  62 => 18,  49 => 28,  38 => 25,  94 => 28,  89 => 30,  85 => 29,  75 => 17,  68 => 20,  56 => 24,  93 => 28,  88 => 6,  78 => 21,  27 => 4,  87 => 40,  21 => 2,  28 => 7,  44 => 9,  31 => 5,  25 => 4,  46 => 7,  26 => 2,  24 => 4,  19 => 1,  79 => 26,  72 => 22,  69 => 25,  47 => 17,  40 => 38,  37 => 8,  22 => 2,  246 => 90,  157 => 57,  145 => 48,  139 => 49,  131 => 45,  123 => 31,  120 => 41,  115 => 38,  111 => 19,  108 => 36,  101 => 32,  98 => 41,  96 => 61,  83 => 39,  74 => 23,  66 => 24,  55 => 15,  52 => 23,  50 => 13,  43 => 23,  41 => 7,  35 => 24,  32 => 4,  29 => 5,  209 => 82,  203 => 58,  199 => 57,  193 => 73,  189 => 74,  187 => 54,  182 => 53,  176 => 64,  173 => 65,  168 => 72,  164 => 136,  162 => 41,  154 => 58,  149 => 51,  147 => 53,  144 => 52,  141 => 48,  133 => 55,  130 => 44,  125 => 112,  122 => 41,  116 => 41,  112 => 42,  109 => 36,  106 => 36,  103 => 33,  99 => 16,  95 => 38,  92 => 21,  86 => 29,  82 => 22,  80 => 36,  73 => 19,  64 => 23,  60 => 21,  57 => 52,  54 => 31,  51 => 14,  48 => 19,  45 => 17,  42 => 8,  39 => 12,  36 => 5,  33 => 9,  30 => 7,);
    }
}
