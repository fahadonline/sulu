<?php

/* SuluContentBundle:Template:content.html.twig */
class __TwigTemplate_f175cc24acd7ff0b3756dfab95c6ae38e2b227ebd777f8fda05312a597c6bcd7 extends Twig_Template
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
        $__internal_5d7270f6158563ad7e9de87afde90d507847b26076d622f31713c7fe9553ecca = $this->env->getExtension("native_profiler");
        $__internal_5d7270f6158563ad7e9de87afde90d507847b26076d622f31713c7fe9553ecca->enter($__internal_5d7270f6158563ad7e9de87afde90d507847b26076d622f31713c7fe9553ecca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:content.html.twig"));

        // line 1
        echo "<form id=\"content-form\" class=\"grid\">

    ";
        // line 4
        echo "    ";
        $context["firstSection"] = null;
        // line 5
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "properties", array())) > 0)) {
            // line 6
            echo "        ";
            $context["firstProperty"] = twig_first($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "properties", array()));
            // line 7
            echo "        ";
            if (($this->getAttribute((isset($context["firstProperty"]) ? $context["firstProperty"] : $this->getContext($context, "firstProperty")), "contentTypeName", array()) == "section")) {
                // line 8
                echo "            ";
                $context["firstSection"] = twig_first($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "properties", array()));
                // line 9
                echo "            <div class=\"highlight-section\">
                <div class=\"fixed-width\">
                    <div class=\"content\">
                        ";
                // line 12
                $this->loadTemplate("SuluContentBundle:Template:macros/section.html.twig", "SuluContentBundle:Template:content.html.twig", 12)->display(array("property" =>                 // line 13
(isset($context["firstProperty"]) ? $context["firstProperty"] : $this->getContext($context, "firstProperty")), "params" => $this->env->getExtension('content')->getParamsFunction(                // line 14
(isset($context["firstProperty"]) ? $context["firstProperty"] : $this->getContext($context, "firstProperty"))), "id" => $this->getAttribute(                // line 15
(isset($context["firstProperty"]) ? $context["firstProperty"] : $this->getContext($context, "firstProperty")), "name", array()), "webspaceKey" =>                 // line 16
(isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" =>                 // line 17
(isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" =>                 // line 18
(isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "title" => false, "uuid" =>                 // line 20
(isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                // line 22
                echo "                    </div>
                </div>
            </div>
        ";
            }
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    <div class=\"fixed-width\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "properties", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            if (($context["property"] != (isset($context["firstSection"]) ? $context["firstSection"] : $this->getContext($context, "firstSection")))) {
                // line 30
                echo "
            ";
                // line 32
                echo "            ";
                $context["params"] = $this->env->getExtension('content')->getParamsFunction($context["property"]);
                // line 33
                echo "
            ";
                // line 34
                if (($this->getAttribute($context["property"], "contentTypeName", array()) == "section")) {
                    // line 35
                    echo "                ";
                    $this->loadTemplate("SuluContentBundle:Template:macros/section.html.twig", "SuluContentBundle:Template:content.html.twig", 35)->display(array("property" =>                     // line 36
$context["property"], "params" =>                     // line 37
(isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "id" => $this->getAttribute(                    // line 38
$context["property"], "name", array()), "webspaceKey" =>                     // line 39
(isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" =>                     // line 40
(isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" =>                     // line 41
(isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "title" => true, "uuid" =>                     // line 43
(isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                    // line 45
                    echo "            ";
                } else {
                    // line 46
                    echo "                ";
                    // line 47
                    echo "                ";
                    $context["type"] = $this->env->getExtension('content')->getTypeFunction($this->getAttribute($context["property"], "contentTypeName", array()));
                    // line 48
                    echo "
                ";
                    // line 49
                    if (($this->getAttribute($context["property"], "contentTypeName", array()) == "block")) {
                        // line 50
                        echo "                    ";
                        $this->loadTemplate($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "template", array()), "SuluContentBundle:Template:content.html.twig", 50)->display(array("property" =>                         // line 51
$context["property"], "params" =>                         // line 52
(isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "type" =>                         // line 53
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute(                        // line 54
$context["property"], "name", array()), "webspaceKey" =>                         // line 55
(isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" =>                         // line 56
(isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" =>                         // line 57
(isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "uuid" =>                         // line 58
(isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                        // line 60
                        echo "                ";
                    } elseif ($this->env->getExtension('content')->isMultipleTest($context["property"])) {
                        // line 61
                        echo "                    ";
                        $this->loadTemplate("SuluContentBundle:Template:macros/multiple.html.twig", "SuluContentBundle:Template:content.html.twig", 61)->display(array("property" =>                         // line 62
$context["property"], "params" =>                         // line 63
(isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "type" =>                         // line 64
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute(                        // line 65
$context["property"], "name", array()), "webspaceKey" =>                         // line 66
(isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" =>                         // line 67
(isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" =>                         // line 68
(isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "uuid" =>                         // line 69
(isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                        // line 71
                        echo "                ";
                    } else {
                        // line 72
                        echo "                    ";
                        $this->loadTemplate("SuluContentBundle:Template:macros/single.html.twig", "SuluContentBundle:Template:content.html.twig", 72)->display(array("property" =>                         // line 73
$context["property"], "params" =>                         // line 74
(isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "type" =>                         // line 75
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute(                        // line 76
$context["property"], "name", array()), "webspaceKey" =>                         // line 77
(isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" =>                         // line 78
(isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" =>                         // line 79
(isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "uuid" =>                         // line 80
(isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                        // line 82
                        echo "                ";
                    }
                    // line 83
                    echo "            ";
                }
                // line 84
                echo "        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    </div>
</form>

<script type=\"text/javascript\">
    (function() {
        ";
        // line 90
        if ((isset($context["fireEvent"]) ? $context["fireEvent"] : $this->getContext($context, "fireEvent"))) {
            // line 91
            echo "        App.emit('sulu.content.contents.default-template', '";
            echo twig_escape_filter($this->env, (isset($context["templateKey"]) ? $context["templateKey"] : $this->getContext($context, "templateKey")), "html", null, true);
            echo "');
        ";
        }
        // line 93
        echo "    })();
</script>
";
        
        $__internal_5d7270f6158563ad7e9de87afde90d507847b26076d622f31713c7fe9553ecca->leave($__internal_5d7270f6158563ad7e9de87afde90d507847b26076d622f31713c7fe9553ecca_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 93,  168 => 91,  166 => 90,  159 => 85,  152 => 84,  149 => 83,  146 => 82,  144 => 80,  143 => 79,  142 => 78,  141 => 77,  140 => 76,  139 => 75,  138 => 74,  137 => 73,  135 => 72,  132 => 71,  130 => 69,  129 => 68,  128 => 67,  127 => 66,  126 => 65,  125 => 64,  124 => 63,  123 => 62,  121 => 61,  118 => 60,  116 => 58,  115 => 57,  114 => 56,  113 => 55,  112 => 54,  111 => 53,  110 => 52,  109 => 51,  107 => 50,  105 => 49,  102 => 48,  99 => 47,  97 => 46,  94 => 45,  92 => 43,  91 => 41,  90 => 40,  89 => 39,  88 => 38,  87 => 37,  86 => 36,  84 => 35,  82 => 34,  79 => 33,  76 => 32,  73 => 30,  68 => 29,  64 => 27,  61 => 26,  55 => 22,  53 => 20,  52 => 18,  51 => 17,  50 => 16,  49 => 15,  48 => 14,  47 => 13,  46 => 12,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  22 => 1,);
    }
}
/* <form id="content-form" class="grid">*/
/* */
/*     {# if first property is a section render it as the highlighted section#}*/
/*     {% set firstSection = null %}*/
/*     {% if template.properties|length > 0 %}*/
/*         {% set firstProperty = template.properties|first %}*/
/*         {% if firstProperty.contentTypeName == 'section' %}*/
/*             {% set firstSection = template.properties|first %}*/
/*             <div class="highlight-section">*/
/*                 <div class="fixed-width">*/
/*                     <div class="content">*/
/*                         {% include 'SuluContentBundle:Template:macros/section.html.twig' with {*/
/*                         'property': firstProperty,*/
/*                         'params': sulu_get_params(firstProperty),*/
/*                         'id': firstProperty.name,*/
/*                         'webspaceKey': webspaceKey,*/
/*                         'languageCode': languageCode,*/
/*                         'userLocale': userLocale,*/
/*                         'title': false,*/
/*                         'uuid':uuid*/
/*                         } only %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     <div class="fixed-width">*/
/*         {% for property in template.properties if property != firstSection %}*/
/* */
/*             {# get params for property #}*/
/*             {% set params = sulu_get_params(property) %}*/
/* */
/*             {% if property.contentTypeName == 'section' %}*/
/*                 {% include 'SuluContentBundle:Template:macros/section.html.twig' with {*/
/*                 'property': property,*/
/*                 'params': params,*/
/*                 'id': property.name,*/
/*                 'webspaceKey': webspaceKey,*/
/*                 'languageCode': languageCode,*/
/*                 'userLocale': userLocale,*/
/*                 'title': true,*/
/*                 'uuid':uuid*/
/*                 } only %}*/
/*             {% else %}*/
/*                 {# get type for property #}*/
/*                 {% set type = sulu_get_type(property.contentTypeName) %}*/
/* */
/*                 {% if property.contentTypeName == 'block' %}*/
/*                     {% include type.template with {*/
/*                     'property': property,*/
/*                     'params': params,*/
/*                     'type': type,*/
/*                     'id': property.name,*/
/*                     'webspaceKey': webspaceKey,*/
/*                     'languageCode': languageCode,*/
/*                     'userLocale': userLocale,*/
/*                     'uuid':uuid*/
/*                     } only %}*/
/*                 {% elseif property is multiple %}*/
/*                     {% include 'SuluContentBundle:Template:macros/multiple.html.twig' with {*/
/*                     'property': property,*/
/*                     'params': params,*/
/*                     'type': type,*/
/*                     'id': property.name,*/
/*                     'webspaceKey': webspaceKey,*/
/*                     'languageCode': languageCode,*/
/*                     'userLocale': userLocale,*/
/*                     'uuid':uuid*/
/*                     } only %}*/
/*                 {% else %}*/
/*                     {% include 'SuluContentBundle:Template:macros/single.html.twig' with {*/
/*                     'property': property,*/
/*                     'params': params,*/
/*                     'type': type,*/
/*                     'id': property.name,*/
/*                     'webspaceKey': webspaceKey,*/
/*                     'languageCode': languageCode,*/
/*                     'userLocale': userLocale,*/
/*                     'uuid':uuid*/
/*                     } only %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* </form>*/
/* */
/* <script type="text/javascript">*/
/*     (function() {*/
/*         {% if fireEvent %}*/
/*         App.emit('sulu.content.contents.default-template', '{{ templateKey }}');*/
/*         {% endif %}*/
/*     })();*/
/* </script>*/
/* */
