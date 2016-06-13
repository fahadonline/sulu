<?php

/* SuluContentBundle:Template:content-types/text_line.html.twig */
class __TwigTemplate_7c16ed56060ea281101b6defcc8909226b2a3b271cde290c62524a8f416c4ff6 extends Twig_Template
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
        $__internal_06a70f4706abc216634b22802090453a3d2eca80a4f8beb7e8ce1fabeb952d44 = $this->env->getExtension("native_profiler");
        $__internal_06a70f4706abc216634b22802090453a3d2eca80a4f8beb7e8ce1fabeb952d44->enter($__internal_06a70f4706abc216634b22802090453a3d2eca80a4f8beb7e8ce1fabeb952d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:content-types/text_line.html.twig"));

        // line 1
        echo "<input id=\"";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
       data-property='";
        // line 2
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property"))), "html", null, true);
        echo "'
       type=\"text\"
       class=\"form-element preview-update trigger-save-button";
        // line 4
        echo ((($this->getAttribute((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), "headline", array()) == "true")) ? (" input-bold") : (""));
        echo "\"
       data-mapper-property=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array()), "html", null, true);
        echo "\"
       placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getPlaceholder", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
        echo "\"
       ";
        // line 7
        if ($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "mandatory", array())) {
            echo "data-validation-required=\"true\"";
        }
        echo "/>

<div class=\"block-content\" data-sort-mode-id=\"";
        // line 9
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"></div>
";
        
        $__internal_06a70f4706abc216634b22802090453a3d2eca80a4f8beb7e8ce1fabeb952d44->leave($__internal_06a70f4706abc216634b22802090453a3d2eca80a4f8beb7e8ce1fabeb952d44_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content-types/text_line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  44 => 7,  40 => 6,  36 => 5,  32 => 4,  27 => 2,  22 => 1,);
    }
}
/* <input id="{{ id|raw }}"*/
/*        data-property='{{ property|json_encode }}'*/
/*        type="text"*/
/*        class="form-element preview-update trigger-save-button{{ (params.headline == 'true') ? ' input-bold' : '' }}"*/
/*        data-mapper-property="{{ property.name }}"*/
/*        placeholder="{{ property.getPlaceholder(userLocale) }}"*/
/*        {% if property.mandatory %}data-validation-required="true"{% endif %}/>*/
/* */
/* <div class="block-content" data-sort-mode-id="{{ id|raw }}"></div>*/
/* */
