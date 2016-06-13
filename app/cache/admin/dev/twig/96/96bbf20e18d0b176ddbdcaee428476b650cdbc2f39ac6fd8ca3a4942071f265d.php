<?php

/* SuluContentBundle:Template:macros/section.html.twig */
class __TwigTemplate_465923ddba9684a31536a1f05c883fd7cd2658268345c4712626f8af8ffa8392 extends Twig_Template
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
        $__internal_0d4b0ea58004358ae0d8b6fc76e7980e5aaae057c0b3a58519e748d3924bce0a = $this->env->getExtension("native_profiler");
        $__internal_0d4b0ea58004358ae0d8b6fc76e7980e5aaae057c0b3a58519e748d3924bce0a->enter($__internal_0d4b0ea58004358ae0d8b6fc76e7980e5aaae057c0b3a58519e748d3924bce0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:macros/section.html.twig"));

        // line 1
        echo "<div class=\"grid-col-";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "colspan", array()) != "")) ? ($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "colspan", array())) : ("12")), "html", null, true);
        echo " floating section section-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        if (((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) == true)) {
            // line 3
            echo "        <h2 class=\"divider m-bottom-20\"
            title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getInfoText", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getTitle", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
            echo "</h2>

        <div class=\"input-description\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getInfoText", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <div class=\"grid\">
        <div class=\"grid-row\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "childProperties", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            echo "                ";
            // line 13
            echo "                ";
            $context["type"] = $this->env->getExtension('content')->getTypeFunction($this->getAttribute($context["child"], "contentTypeName", array()));
            // line 14
            echo "                ";
            // line 15
            echo "                ";
            $context["params"] = $this->env->getExtension('content')->getParamsFunction($context["child"]);
            // line 16
            echo "
                ";
            // line 17
            if (($this->getAttribute($context["child"], "contentTypeName", array()) == "block")) {
                // line 18
                echo "                    ";
                $this->loadTemplate($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "template", array()), "SuluContentBundle:Template:macros/section.html.twig", 18)->display(array("property" => $context["child"], "params" => (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute($context["child"], "name", array()), "webspaceKey" => (isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" => (isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "uuid" => (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                // line 19
                echo "                ";
            } elseif ($this->env->getExtension('content')->isMultipleTest($context["child"])) {
                // line 20
                echo "                    ";
                $this->loadTemplate("SuluContentBundle:Template:macros/multiple.html.twig", "SuluContentBundle:Template:macros/section.html.twig", 20)->display(array("property" => $context["child"], "params" => (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute($context["child"], "name", array()), "webspaceKey" => (isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" => (isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "uuid" => (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                // line 21
                echo "                ";
            } else {
                // line 22
                echo "                    ";
                $this->loadTemplate("SuluContentBundle:Template:macros/single.html.twig", "SuluContentBundle:Template:macros/section.html.twig", 22)->display(array("property" => $context["child"], "params" => (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "id" => $this->getAttribute($context["child"], "name", array()), "webspaceKey" => (isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "languageCode" => (isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "userLocale" => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale")), "uuid" => (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid"))));
                // line 23
                echo "                ";
            }
            // line 24
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
</div>
";
        
        $__internal_0d4b0ea58004358ae0d8b6fc76e7980e5aaae057c0b3a58519e748d3924bce0a->leave($__internal_0d4b0ea58004358ae0d8b6fc76e7980e5aaae057c0b3a58519e748d3924bce0a_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:macros/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  51 => 11,  46 => 8,  41 => 6,  34 => 4,  31 => 3,  29 => 2,  22 => 1,);
    }
}
/* <div class="grid-col-{{ property.colspan != "" ? property.colspan : '12' }} floating section section-{{ property.name }}">*/
/*     {% if title == true %}*/
/*         <h2 class="divider m-bottom-20"*/
/*             title="{{ property.getInfoText(userLocale) }}">{{ property.getTitle(userLocale) }}</h2>*/
/* */
/*         <div class="input-description">{{ property.getInfoText(userLocale) }}</div>*/
/*     {% endif %}*/
/* */
/*     <div class="grid">*/
/*         <div class="grid-row">*/
/*             {% for child in property.childProperties %}*/
/*                 {# get Type for property #}*/
/*                 {% set type = sulu_get_type(child.contentTypeName) %}*/
/*                 {# get params for property #}*/
/*                 {% set params = sulu_get_params(child) %}*/
/* */
/*                 {% if child.contentTypeName == 'block' %}*/
/*                     {% include type.template with {'property': child, 'params': params, 'type': type, 'id': child.name, 'webspaceKey': webspaceKey, 'languageCode': languageCode, 'userLocale': userLocale, 'uuid': uuid} only %}*/
/*                 {% elseif child is multiple %}*/
/*                     {% include 'SuluContentBundle:Template:macros/multiple.html.twig' with {'property': child, 'params': params, 'type': type, 'id': child.name, 'webspaceKey': webspaceKey, 'languageCode': languageCode, 'userLocale': userLocale, 'uuid': uuid} only %}*/
/*                 {% else %}*/
/*                     {% include 'SuluContentBundle:Template:macros/single.html.twig' with {'property': child, 'params': params, 'type': type, 'id': child.name, 'webspaceKey': webspaceKey, 'languageCode': languageCode, 'userLocale': userLocale, 'uuid': uuid} only %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
