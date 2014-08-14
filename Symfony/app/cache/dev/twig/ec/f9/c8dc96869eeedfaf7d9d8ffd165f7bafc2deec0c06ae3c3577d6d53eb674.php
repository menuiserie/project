<?php

/* NelmioApiDocBundle::layout.html.twig */
class __TwigTemplate_ecf9c8dc96869eeedfaf7d9d8ffd165f7bafc2deec0c06ae3c3577d6d53eb674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "apiName"), "html", null, true);
        echo "</title>
        <style type=\"text/css\">
            ";
        // line 9
        echo $this->getContext($context, "css");
        echo "
        </style>
        <script type=\"text/javascript\">
            ";
        // line 12
        echo $this->getContext($context, "js");
        echo "
        </script>
    </head>
    <body>
        <div id=\"header\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("nelmio_api_doc_index");
        echo "\"><h1>";
        echo twig_escape_filter($this->env, $this->getContext($context, "apiName"), "html", null, true);
        echo "</h1></a>
            ";
        // line 18
        if ($this->getContext($context, "enableSandbox")) {
            // line 19
            echo "                <div id=\"sandbox_configuration\">
                    ";
            // line 20
            if ((twig_length_filter($this->env, $this->getContext($context, "bodyFormats")) > 0)) {
                // line 21
                echo "                    body format:
                    <select id=\"body_format\">
                        ";
                // line 23
                if (twig_in_filter("form", $this->getContext($context, "bodyFormats"))) {
                    echo "<option value=\"form\"";
                    echo ((($this->getContext($context, "defaultBodyFormat") == "form")) ? (" selected") : (""));
                    echo ">Form Data</option>";
                }
                // line 24
                echo "                        ";
                if (twig_in_filter("json", $this->getContext($context, "bodyFormats"))) {
                    echo "<option value=\"json\"";
                    echo ((($this->getContext($context, "defaultBodyFormat") == "json")) ? (" selected") : (""));
                    echo ">JSON</option>";
                }
                // line 25
                echo "                    </select>
                    ";
            }
            // line 27
            echo "                    request format:
                    <select id=\"request_format\">
                    ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "requestFormats"));
            foreach ($context['_seq'] as $context["format"] => $context["header"]) {
                // line 30
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "header"), "html", null, true);
                echo "\"";
                echo ((($this->getContext($context, "defaultRequestFormat") == $this->getContext($context, "format"))) ? (" selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getContext($context, "format"), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['format'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </select>
                    ";
            // line 33
            if ($this->getContext($context, "authentication")) {
                // line 34
                echo "                        ";
                if ((($this->getAttribute($this->getContext($context, "authentication"), "delivery") == "http") && ($this->getAttribute($this->getContext($context, "authentication"), "type") == "basic"))) {
                    // line 35
                    echo "                            api login: <input type=\"text\" id=\"api_login\" value=\"\"/>
                            api password: <input type=\"text\" id=\"api_pass\" value=\"\"/>
                        ";
                } elseif (twig_in_filter($this->getAttribute($this->getContext($context, "authentication"), "delivery"), array(0 => "query", 1 => "http", 2 => "header"))) {
                    // line 38
                    echo "                            api key: <input type=\"text\" id=\"api_key\" value=\"\"/>
                        ";
                }
                // line 40
                echo "
                        ";
                // line 41
                if ($this->getAttribute($this->getContext($context, "authentication"), "custom_endpoint")) {
                    // line 42
                    echo "                            api endpoint: <input type=\"text\" id=\"api_endpoint\" value=\"\"/>
                        ";
                }
                // line 44
                echo "                    ";
            }
            // line 45
            echo "                </div>
            ";
        }
        // line 47
        echo "            <br style=\"clear: both;\" />
        </div>
        ";
        // line 49
        $template = $this->env->resolveTemplate($this->getContext($context, "motdTemplate"));
        $template->display($context);
        // line 50
        echo "        <div class=\"container\" id=\"resources_container\">
            <ul id=\"resources\">
                ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "            </ul>
        </div>
        <p id=\"colophon\">
            Documentation auto-generated on ";
        // line 56
        echo twig_escape_filter($this->env, $this->getContext($context, "date"), "html", null, true);
        echo "
        </p>
        <script type=\"text/javascript\">

            var getHash = function() {
              return window.location.hash || '';
            };

            var setHash = function(hash) {
                window.location.hash = hash;
            };

            var clearHash = function() {
                var scrollTop, scrollLeft;

                if(typeof history === 'object' && typeof history.pushState === 'function') {
                    history.replaceState('', document.title, window.location.pathname + window.location.search);
                } else {
                    scrollTop = document.body.scrollTop;
                    scrollLeft = document.body.scrollLeft;

                    setHash('');

                    document.body.scrollTop = scrollTop;
                    document.body.scrollLeft = scrollLeft;
                }
            };

            \$(window).load(function() {
                var id = getHash().substr(1).replace( /([:\\.\\[\\]\\{\\}])/g, \"\\\\\$1\");
                var elem = \$('#' + id);
                if (elem.length) {
                    setTimeout(function() {
                        \$('body,html').scrollTop(elem.position().top);
                    });
                    elem.find('.toggler').click();
                }
            });

            \$('.toggler').click(function(event) {
                var contentContainer = \$(this).next();

                if(contentContainer.is(':visible')) {
                    clearHash();
                } else {
                    setHash(\$(this).data('href'));
                }

                contentContainer.slideToggle('fast');
                return false;
            });

            ";
        // line 108
        if ($this->getContext($context, "enableSandbox")) {
            // line 109
            echo "            var setParameterType = function (\$context,setType) {
                // no 2nd argument, use default from parameters
                if (typeof setType == \"undefined\") {
                    setType = \$context.parent().attr(\"data-dataType\");
                    \$context.val(setType);
                }

                \$context.parent().find('.value').remove();
                var placeholder = \"\";
                if (\$context.parent().attr(\"data-dataType\") != \"\" && typeof \$context.parent().attr(\"data-dataType\") != \"undefined\") {
                    placeholder += \"[\" + \$context.parent().attr(\"data-dataType\") + \"] \";
                }
                if (\$context.parent().attr(\"data-format\") != \"\" && typeof \$context.parent().attr(\"data-format\") != \"undefined\") {
                    placeholder += \$context.parent().attr(\"data-dataType\");
                }
                if (\$context.parent().attr(\"data-description\") != \"\" && typeof \$context.parent().attr(\"data-description\") != \"undefined\") {
                    placeholder += \$context.parent().attr(\"data-description\");
                } else {
                    placeholder += \"Value\";
                }

                switch(setType) {
                    case \"boolean\":
                        \$('<select class=\"value\"><option value=\"\"></option><option value=\"1\">True</option><option value=\"0\">False</option></select>').insertAfter(\$context);
                        break;
                    case \"file\":
                        \$('<input type=\"file\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                        break;
                    default:
                        \$('<input type=\"text\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                }
            };

                var toggleButtonText = function (\$btn) {
                    if (\$btn.text() === 'Default') {
                        \$btn.text('Raw');
                    } else {
                        \$btn.text('Default');
                    }
                };

                var renderRawBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-raw');

                    \$container.addClass('prettyprinted');
                    \$container.html(\$('<div/>').text(rawData).html());

                    \$btn.removeClass('to-raw');
                    \$btn.addClass('to-prettify');

                    toggleButtonText(\$btn);
                };

                var renderPrettifiedBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-prettify');

                    \$container.removeClass('prettyprinted');
                    \$container.html(prettifyResponse(rawData));
                    prettyPrint && prettyPrint();

                    \$btn.removeClass('to-prettify');
                    \$btn.addClass('to-raw');

                    toggleButtonText(\$btn);
                };

                var unflattenDict = function (body) {
                    var found = true;
                    while(found) {
                        found = false;

                        for (var key in body) {
                            var okey;
                            var value = body[key];
                            var dictMatch = key.match(/^(.+)\\[([^\\]]+)\\]\$/);

                            if(dictMatch) {
                                found = true;
                                okey = dictMatch[1];
                                var subkey = dictMatch[2];
                                body[okey] = body[okey] || {};
                                body[okey][subkey] = value;
                                delete body[key];
                            } else {
                                body[key] = value;
                            }
                        }
                    }
                    return body;
                }

                \$('.tabs li').click(function() {
                    var contentGroup = \$(this).parents('.content');

                    \$('.pane.selected', contentGroup).removeClass('selected');
                    \$('.pane.' + \$(this).data('pane'), contentGroup).addClass('selected');

                    \$('li', \$(this).parent()).removeClass('selected');
                    \$(this).addClass('selected');
                });

                var prettifyResponse = function(text) {
                    try {
                        var data = typeof text === 'string' ? JSON.parse(text) : text;
                        text = JSON.stringify(data, undefined, '  ');
                    } catch (err) {
                    }

                    // HTML encode the result
                    return \$('<div>').text(text).html();
                };

                var displayFinalUrl = function(xhr, method, url, container) {
                    container.text(method + ' ' + url);
                };

                var displayProfilerUrl = function(xhr, link, container) {
                    var profilerUrl = xhr.getResponseHeader('X-Debug-Token-Link');
                    if (profilerUrl) {
                        link.attr('href', profilerUrl);
                        container.show();
                    } else {
                        link.attr('href', '');
                        container.hide();
                    }
                }

                var displayResponseData = function(xhr, container) {
                    var data = xhr.responseText;

                    container.data('raw-response', data);

                    renderPrettifiedBody(container);

                    container.parents('.pane').find('.to-prettify').text('Raw');
                    container.parents('.pane').find('.to-raw').text('Raw');
                };

                var displayResponseHeaders = function(xhr, container) {
                    var text = xhr.status + ' ' + xhr.statusText + \"\\n\\n\";
                    text += xhr.getAllResponseHeaders();

                    container.text(text);
                };

                var displayResponse = function(xhr, method, url, result_container) {
                    displayFinalUrl(xhr, method, url, \$('.url', result_container));
                    displayProfilerUrl(xhr, \$('.profiler-link', result_container), \$('.profiler', result_container));
                    displayResponseData(xhr, \$('.response', result_container));
                    displayResponseHeaders(xhr, \$('.headers', result_container));

                    result_container.show();
                };

                \$('.pane.sandbox form').submit(function() {
                    var url = \$(this).attr('action'),
                        method = \$(this).attr('method'),
                        self = this,
                        params = {},
                        formData = new FormData(),
                        doubledParams = {},
                        headers = {},
                        content = \$(this).find('textarea.content').val(),
                        result_container = \$('.result', \$(this).parent());

                    if (method === 'ANY') {
                        method = 'POST';
                    } else if (method.indexOf('|') !== -1) {
                        method = method.split('|').sort().pop();
                    }

                    // set requestFormat
                    var requestFormatMethod = '";
            // line 287
            echo twig_escape_filter($this->env, $this->getContext($context, "requestFormatMethod"), "html", null, true);
            echo "';
                    if (requestFormatMethod == 'format_param') {
                        params['_format'] = \$('#request_format option:selected').text();
                        formData.append('_format',\$('#request_format option:selected').text());
                    } else if (requestFormatMethod == 'accept_header') {
                        headers['Accept'] = \$('#request_format').val();
                    }

                    // set default bodyFormat
                    var bodyFormat = \$('#body_format').val() || '";
            // line 296
            echo twig_escape_filter($this->env, $this->getContext($context, "defaultBodyFormat"), "html", null, true);
            echo "';

                    if(!('Content-type' in headers)) {
                        if (bodyFormat == 'form') {
                            headers['Content-type'] = 'application/x-www-form-urlencoded';
                        } else {
                            headers['Content-type'] = 'application/json';
                        }
                    }

                    var hasFileTypes = false;
                    \$('.parameters .tuple_type', \$(this)).each(function() {
                        if (\$(this).val() == 'file') {
                            hasFileTypes = true;
                        }
                    });

                    if (hasFileTypes && method != 'POST') {
                        alert(\"Sorry, you can only submit files via POST.\");
                        return false;
                    }

                    if (hasFileTypes) {
                        // retrieve all the parameters to send for file upload
                        \$('.parameters .tuple', \$(this)).each(function() {
                            var key, value;

                            key = \$('.key', \$(this)).val();
                            if (\$('.value', \$(this)).attr('type') === 'file' ) {
                                value = \$('.value', \$(this)).prop('files')[0];
                            } else {
                                value = \$('.value', \$(this)).val();
                            }

                            if (value) {
                                formData.append(key,value);
                            }
                        });
                    }


                    // retrieve all the parameters to send
                    \$('.parameters .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // temporary save all additional/doubled parameters
                            if (key in params) {
                                doubledParams[key] = value;
                            } else {
                                params[key] = value;
                            }
                        }
                    });





                    // retrieve the additional headers to send
                    \$('.headers .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            headers[key] = value;
                        }

                    });

                    // fix parameters in URL
                    for (var key in \$.extend({}, params)) {
                        if (url.indexOf('{' + key + '}') !== -1) {
                            url = url.replace('{' + key + '}', params[key]);
                            delete params[key];
                        }
                    };

                    // merge additional params back to real params object
                    if (!\$.isEmptyObject(doubledParams)) {
                        \$.extend(params, doubledParams);
                    }

                    // disable all the fiels and buttons
                    \$('input, button', \$(this)).attr('disabled', 'disabled');

                    // append the query authentication
                    if (authentication_delivery == 'query') {
                        url += url.indexOf('?') > 0 ? '&' : '?';
                        url += api_key_parameter + '=' + \$('#api_key').val();
                    }

                    // prepare the api enpoint
                    ";
            // line 394
            if (((($this->getContext($context, "endpoint") == "") && (!(null === $this->getAttribute($this->getContext($context, "app"), "request")))) && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "host"))) {
                // line 395
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseUrl", array(), "method"), "html", null, true);
                echo "';
                    ";
            } else {
                // line 397
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, $this->getContext($context, "endpoint"), "html", null, true);
                echo "';
                    ";
            }
            // line 399
            echo "if (\$('#api_endpoint') && \$('#api_endpoint').val() != null) {
                        endpoint = \$('#api_endpoint').val();
                    }

                    // Workaround for Firefox bug and a thereby resulting nginx incompatibility
                    if (method == \"LINK\") {
                        method = \"POST\";
                        params._method = \"LINK\";
                    }

                    // prepare final parameters
                    var body = {};
                    if(bodyFormat == 'json' && method != 'GET') {
                        body = unflattenDict(params);
                        body = JSON.stringify(body);
                    } else {
                        body = params;
                    }
                    var data = content.length ? content : body;
                    var ajaxOptions = {
                        url: endpoint + url,
                        type: method,
                        data: data,
                        headers: headers,
                        crossDomain: true,
                        beforeSend: function (xhr) {
                            if (authentication_delivery) {
                                var value;

                                if ('http' == authentication_delivery) {
                                    if ('basic' == authentication_type) {
                                        value = 'Basic ' + btoa(\$('#api_login').val() + ':' + \$('#api_pass').val());
                                    } else if ('bearer' == authentication_type) {
                                        value = 'Bearer ' + \$('#api_key').val();
                                    }
                                } else if ('header' == authentication_delivery) {
                                    value = \$('#api_key').val();
                                }

                                xhr.setRequestHeader(api_key_parameter, value);
                            }
                        },
                        complete: function(xhr) {
                            displayResponse(xhr, method, url, result_container);

                            // and enable them back
                            \$('input:not(.content-type), button', \$(self)).removeAttr('disabled');
                        }
                    };

                    // overrides body format to send data properly
                    if (hasFileTypes) {
                        ajaxOptions.data = formData;
                        ajaxOptions.processData = false;
                        ajaxOptions.contentType = false;
                        delete(ajaxOptions.headers);
                    }

                    // and trigger the API call
                    \$.ajax(ajaxOptions);

                    return false;
                });

                \$('.operations').on('click', '.operation > .heading', function(e) {
                    if (history.pushState) {
                        history.pushState(null, null, \$(this).data('href'));
                        e.preventDefault();
                    }
                });

                \$('.pane.sandbox').on('click', '.to-raw', function(e) {
                    renderRawBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-prettify', function(e) {
                    renderPrettifiedBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$('.pane.sandbox').on('click', '.to-expand, .to-shrink', function(e) {
                    var \$headers = \$(this).parents('.result').find('.headers');
                    var \$label = \$(this).parents('.result').find('a.to-expand');

                    if (\$headers.hasClass('to-expand')) {
                        \$headers.removeClass('to-expand');
                        \$headers.addClass('to-shrink');
                        \$label.text('Shrink');
                    } else {
                        \$headers.removeClass('to-shrink');
                        \$headers.addClass('to-expand');
                        \$label.text('Expand');
                    }

                    e.preventDefault();
                });


                // sets the correct parameter type on load
                \$('.pane.sandbox .tuple_type').each(function() {
                    setParameterType(\$(this));
                });


                // handles parameter type change
                \$('.pane.sandbox').on('change', '.tuple_type', function() {
                    setParameterType(\$(this),\$(this).val());
                });



                \$('.pane.sandbox').on('click', '.add_parameter', function() {
                    var html = \$(this).parents('.pane').find('.parameters_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.add_header', function() {
                    var html = \$(this).parents('.pane').find('.headers_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$('.pane.sandbox').on('click', '.remove', function() {
                    \$(this).parent().remove();
                });

                \$('.pane.sandbox').on('click', '.set-content-type', function(e) {
                    var html;
                    var \$element;
                    var \$headers = \$(this).parents('form').find('.headers');
                    var content_type = \$(this).prev('input.value').val();

                    e.preventDefault();

                    if (content_type.length === 0) {
                        return;
                    }

                    \$headers.find('input.key').each(function() {
                        if (\$.trim(\$(this).val().toLowerCase()) === 'content-type') {
                            \$element = \$(this).parents('p');
                            return false;
                        }
                    });

                    if (typeof \$element === 'undefined') {
                        html = \$(this).parents('.pane').find('.tuple_template').html();

                        \$element = \$headers.find('legend').after(html).next('p');
                    }

                    \$element.find('input.key').val('Content-Type');
                    \$element.find('input.value').val(content_type);

                });

                ";
            // line 563
            if (($this->getContext($context, "authentication") && ($this->getAttribute($this->getContext($context, "authentication"), "delivery") == "http"))) {
                // line 564
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "authentication"), "delivery"), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 565
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "authentication"), "name"), "html", null, true);
                echo "';
                var authentication_type = '";
                // line 566
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "authentication"), "type"), "html", null, true);
                echo "';
                ";
            } elseif (($this->getContext($context, "authentication") && ($this->getAttribute($this->getContext($context, "authentication"), "delivery") == "query"))) {
                // line 568
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "authentication"), "delivery"), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 569
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "authentication"), "name"), "html", null, true);
                echo "';
                var search = window.location.search;
                var api_key_start = search.indexOf(api_key_parameter) + api_key_parameter.length + 1;

                if (api_key_start > 0 ) {
                    var api_key_end = search.indexOf('&', api_key_start);

                    var api_key = -1 == api_key_end
                        ? search.substr(api_key_start)
                        : search.substring(api_key_start, api_key_end);

                    \$('#api_key').val(api_key);
                }
                ";
            } elseif (($this->getContext($context, "authentication") && ($this->getAttribute($this->getContext($context, "authentication"), "delivery") == "header"))) {
                // line 583
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "authentication"), "delivery"), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 584
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "authentication"), "name"), "html", null, true);
                echo "';
                ";
            } else {
                // line 586
                echo "                var authentication_delivery = false;
                ";
            }
            // line 588
            echo "            ";
        }
        // line 589
        echo "        </script>
    </body>
</html>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  745 => 52,  738 => 589,  735 => 588,  731 => 586,  726 => 584,  721 => 583,  704 => 569,  699 => 568,  694 => 566,  690 => 565,  685 => 564,  683 => 563,  517 => 399,  511 => 397,  505 => 395,  503 => 394,  390 => 287,  210 => 109,  153 => 56,  148 => 53,  146 => 52,  124 => 42,  110 => 35,  81 => 27,  77 => 25,  70 => 24,  58 => 20,  20 => 1,  104 => 66,  84 => 37,  501 => 281,  498 => 280,  490 => 34,  486 => 33,  481 => 31,  477 => 30,  473 => 29,  463 => 26,  460 => 25,  452 => 20,  448 => 19,  436 => 16,  432 => 15,  428 => 14,  424 => 13,  420 => 12,  416 => 11,  411 => 9,  404 => 7,  401 => 6,  395 => 5,  385 => 298,  376 => 295,  372 => 294,  367 => 292,  363 => 291,  358 => 289,  354 => 288,  350 => 287,  346 => 286,  336 => 283,  334 => 280,  296 => 245,  222 => 177,  205 => 162,  197 => 161,  194 => 160,  190 => 159,  53 => 18,  23 => 1,  207 => 59,  195 => 56,  191 => 55,  175 => 47,  172 => 46,  165 => 42,  155 => 39,  152 => 38,  134 => 38,  126 => 32,  65 => 36,  34 => 8,  480 => 162,  474 => 161,  469 => 28,  461 => 155,  457 => 153,  453 => 151,  444 => 18,  440 => 17,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 8,  402 => 296,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 297,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 284,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 216,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 45,  140 => 55,  132 => 51,  128 => 44,  107 => 34,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 108,  204 => 72,  179 => 52,  159 => 61,  143 => 45,  135 => 47,  119 => 40,  102 => 32,  71 => 9,  67 => 25,  63 => 21,  59 => 33,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 40,  156 => 131,  151 => 129,  142 => 50,  138 => 119,  136 => 41,  121 => 46,  117 => 76,  105 => 33,  91 => 59,  62 => 23,  49 => 28,  38 => 25,  94 => 28,  89 => 30,  85 => 29,  75 => 17,  68 => 14,  56 => 24,  93 => 28,  88 => 6,  78 => 21,  27 => 4,  87 => 40,  21 => 2,  28 => 7,  44 => 18,  31 => 4,  25 => 3,  46 => 7,  26 => 6,  24 => 4,  19 => 1,  79 => 11,  72 => 16,  69 => 25,  47 => 17,  40 => 38,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 48,  139 => 49,  131 => 45,  123 => 31,  120 => 40,  115 => 38,  111 => 19,  108 => 36,  101 => 32,  98 => 41,  96 => 61,  83 => 39,  74 => 10,  66 => 24,  55 => 19,  52 => 23,  50 => 10,  43 => 23,  41 => 7,  35 => 24,  32 => 4,  29 => 5,  209 => 82,  203 => 58,  199 => 57,  193 => 73,  189 => 71,  187 => 54,  182 => 53,  176 => 64,  173 => 65,  168 => 72,  164 => 136,  162 => 41,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 83,  125 => 112,  122 => 41,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 17,  99 => 16,  95 => 38,  92 => 21,  86 => 28,  82 => 22,  80 => 36,  73 => 19,  64 => 23,  60 => 21,  57 => 52,  54 => 31,  51 => 14,  48 => 19,  45 => 17,  42 => 9,  39 => 12,  36 => 5,  33 => 9,  30 => 7,);
    }
}
