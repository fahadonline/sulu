<?php

/* SuluContentBundle:Template:content-types/text_editor.html.twig */
class __TwigTemplate_d20fae77f1a4ad422d443cc92a21d90fc6fe04b59474f16f4fa79805e77fce09 extends Twig_Template
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
        $__internal_f8eac80ae7b0a064fb18ee92a517737ec1e93319314477596d1d9ff6a8f42264 = $this->env->getExtension("native_profiler");
        $__internal_f8eac80ae7b0a064fb18ee92a517737ec1e93319314477596d1d9ff6a8f42264->enter($__internal_f8eac80ae7b0a064fb18ee92a517737ec1e93319314477596d1d9ff6a8f42264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:content-types/text_editor.html.twig"));

        // line 1
        echo "<textarea id=\"";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
        data-property='";
        // line 2
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property"))), "html", null, true);
        echo "'
        class=\"form-element hidden\"
        data-type=\"textEditor\"
        data-type-instance-name=\"";
        // line 5
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
        data-aura-component=\"ckeditor@husky\"
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
        foreach ($context['_seq'] as $context["key"] => $context["param"]) {
            // line 8
            echo "            ";
            if ($this->getAttribute($context["param"], "value", array(), "any", true, true)) {
                // line 9
                echo "                ";
                $context["value"] = $this->getAttribute($context["param"], "value", array());
                // line 10
                echo "                ";
                if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) {
                    // line 11
                    echo "                    ";
                    $context["value"] = "true";
                    // line 12
                    echo "                ";
                } elseif (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)) {
                    // line 13
                    echo "                    ";
                    $context["value"] = "false";
                    // line 14
                    echo "                ";
                }
                // line 15
                echo "        data-aura-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["key"], "_", "-"), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\"
            ";
            }
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        data-mapper-property=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array()), "html", null, true);
        echo "\"
        data-aura-instance-name=\"";
        // line 19
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
        placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getPlaceholder", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
        echo "\"
        ";
        // line 21
        if ($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "mandatory", array())) {
            // line 22
            echo "            data-validation-required=\"true\"
        ";
        }
        // line 24
        echo "></textarea>

<div class=\"block-content\" data-sort-mode-id=\"";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"></div>
";
        
        $__internal_f8eac80ae7b0a064fb18ee92a517737ec1e93319314477596d1d9ff6a8f42264->leave($__internal_f8eac80ae7b0a064fb18ee92a517737ec1e93319314477596d1d9ff6a8f42264_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content-types/text_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 24,  92 => 22,  90 => 21,  86 => 20,  82 => 19,  77 => 18,  71 => 17,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  38 => 7,  33 => 5,  27 => 2,  22 => 1,);
    }
}
/* <textarea id="{{ id|raw }}"*/
/*         data-property='{{ property|json_encode }}'*/
/*         class="form-element hidden"*/
/*         data-type="textEditor"*/
/*         data-type-instance-name="{{ id|raw }}"*/
/*         data-aura-component="ckeditor@husky"*/
/*         {% for key, param in params %}*/
/*             {% if param.value is defined %}*/
/*                 {% set value = param.value %}*/
/*                 {% if value is same as(true) %}*/
/*                     {% set value = 'true' %}*/
/*                 {%  elseif value is same as(false) %}*/
/*                     {% set value = 'false' %}*/
/*                 {% endif %}*/
/*         data-aura-{{ key|replace('_', '-') }}="{{ value }}"*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         data-mapper-property="{{ property.name }}"*/
/*         data-aura-instance-name="{{ id|raw }}"*/
/*         placeholder="{{ property.getPlaceholder(userLocale) }}"*/
/*         {% if property.mandatory %}*/
/*             data-validation-required="true"*/
/*         {% endif %}*/
/* ></textarea>*/
/* */
/* <div class="block-content" data-sort-mode-id="{{ id|raw }}"></div>*/
/* */
