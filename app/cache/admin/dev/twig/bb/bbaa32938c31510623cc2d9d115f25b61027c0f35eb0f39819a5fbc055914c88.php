<?php

/* SuluContentBundle:Template:content-types/smart_content.html.twig */
class __TwigTemplate_f5dcd89f747a51f8df748e733034d3108f4accf40429fded235f8c78c3185a5a extends Twig_Template
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
        $__internal_1fddafbb1191f41a1f3bd01598d7d709f68d6d2d0cb38d55331843cb994c3235 = $this->env->getExtension("native_profiler");
        $__internal_1fddafbb1191f41a1f3bd01598d7d709f68d6d2d0cb38d55331843cb994c3235->enter($__internal_1fddafbb1191f41a1f3bd01598d7d709f68d6d2d0cb38d55331843cb994c3235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:content-types/smart_content.html.twig"));

        // line 1
        echo "<div id=\"";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
     data-property='";
        // line 2
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property"))), "html", null, true);
        echo "'
     data-mapper-property=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array()), "html", null, true);
        echo "\"
     data-aura-component=\"smart-content@sulucontent\"
     data-aura-title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getTitle", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
        echo "\"
     data-type=\"smartContent\"
     data-type-instance-name=\"";
        // line 7
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
     data-instance-name=\"";
        // line 8
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
     data-form=\"true\"
     data-aura-webspace=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "html", null, true);
        echo "\"
     data-aura-locale=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "html", null, true);
        echo "\"
     data-aura-has='";
        // line 12
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "has", array())), "html", null, true);
        echo "'
     data-aura-display-options='";
        // line 13
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('content')->convertParameterToKeyValue($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "display_options", array()), "value", array()))), "html", null, true);
        echo "'
";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "has", array()), "datasource", array())) {
            // line 15
            echo "     data-aura-datasource='";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "datasource", array())), "html", null, true);
            echo "'
";
        }
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "has", array()), "categories", array())) {
            // line 18
            echo "     data-aura-category-root='";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "category_root", array()), "value", array()), "html", null, true);
            echo "'
";
        }
        // line 20
        echo "     data-aura-url=\"/admin/api/items?";
        if (((isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")) != "")) {
            echo "webspace=";
            echo twig_escape_filter($this->env, (isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "html", null, true);
            echo "&";
        }
        echo "locale=";
        echo twig_escape_filter($this->env, (isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "html", null, true);
        echo "&excluded=<%= options.id %>&provider=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "provider", array()), "value", array()), "html", null, true);
        echo "\"
     data-aura-navigate-event=\"sulu.content.navigate\"
     data-aura-tags-auto-complete-url=\"/admin/api/tags?flat=true&sortBy=name&searchFields=name\"
     data-aura-sort-by='";
        // line 23
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('content')->convertParameterToSelect($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "sorting", array()), "value", array()), (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")))), "html", null, true);
        echo "'
     data-aura-present-as='";
        // line 24
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('content')->convertParameterToSelect($this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "present_as", array()), "value", array()), (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")))), "html", null, true);
        echo "'
     data-aura-deep-link=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "deep_link", array()), "value", array()), "html", null, true);
        echo "\"></div>
";
        
        $__internal_1fddafbb1191f41a1f3bd01598d7d709f68d6d2d0cb38d55331843cb994c3235->leave($__internal_1fddafbb1191f41a1f3bd01598d7d709f68d6d2d0cb38d55331843cb994c3235_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content-types/smart_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  101 => 24,  97 => 23,  82 => 20,  76 => 18,  74 => 17,  68 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  45 => 8,  41 => 7,  36 => 5,  31 => 3,  27 => 2,  22 => 1,);
    }
}
/* <div id="{{ id|raw }}"*/
/*      data-property='{{ property|json_encode }}'*/
/*      data-mapper-property="{{ property.name }}"*/
/*      data-aura-component="smart-content@sulucontent"*/
/*      data-aura-title="{{ property.getTitle(userLocale) }}"*/
/*      data-type="smartContent"*/
/*      data-type-instance-name="{{ id|raw }}"*/
/*      data-instance-name="{{ id|raw }}"*/
/*      data-form="true"*/
/*      data-aura-webspace="{{ webspaceKey }}"*/
/*      data-aura-locale="{{ languageCode }}"*/
/*      data-aura-has='{{ params.has | json_encode }}'*/
/*      data-aura-display-options='{{ sulu_parameter_to_key_value(params.display_options.value) | json_encode }}'*/
/* {% if params.has.datasource %}*/
/*      data-aura-datasource='{{ params.datasource | json_encode }}'*/
/* {% endif %}*/
/* {% if params.has.categories %}*/
/*      data-aura-category-root='{{ params.category_root.value }}'*/
/* {% endif %}*/
/*      data-aura-url="/admin/api/items?{% if webspaceKey != '' %}webspace={{ webspaceKey }}&{% endif %}locale={{ languageCode }}&excluded=<%= options.id %>&provider={{ params.provider.value }}"*/
/*      data-aura-navigate-event="sulu.content.navigate"*/
/*      data-aura-tags-auto-complete-url="/admin/api/tags?flat=true&sortBy=name&searchFields=name"*/
/*      data-aura-sort-by='{{ sulu_parameter_to_select(params.sorting.value, userLocale) | json_encode }}'*/
/*      data-aura-present-as='{{ sulu_parameter_to_select(params.present_as.value, userLocale) | json_encode }}'*/
/*      data-aura-deep-link="{{ params.deep_link.value }}"></div>*/
/* */
