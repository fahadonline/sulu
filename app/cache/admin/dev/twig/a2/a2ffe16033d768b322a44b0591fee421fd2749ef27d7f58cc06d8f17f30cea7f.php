<?php

/* SuluContentBundle:Template:content-types/resource_locator.html.twig */
class __TwigTemplate_963322134cac1267286c7a06731c69ce470b31e6c993c2917edfd56b3ed1a151 extends Twig_Template
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
        $__internal_d3613bae70ea1af2879e27dbb32df971095cb3666cb1f39b8342eaa6d7bfe79f = $this->env->getExtension("native_profiler");
        $__internal_d3613bae70ea1af2879e27dbb32df971095cb3666cb1f39b8342eaa6d7bfe79f->enter($__internal_d3613bae70ea1af2879e27dbb32df971095cb3666cb1f39b8342eaa6d7bfe79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:content-types/resource_locator.html.twig"));

        // line 1
        echo "<div id=\"";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
     class=\"preview-update trigger-save-button\"
     data-property='";
        // line 3
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property"))), "html", null, true);
        echo "'
     data-mapper-property=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "name", array()), "html", null, true);
        echo "\"
     data-form=\"true\"
     data-type=\"resourceLocator\"
     data-aura-component=\"resource-locator@sulucontent\"
     data-type-instance-name=\"";
        // line 8
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\"
     data-aura-history-api=\"/admin/api/nodes/<%=content.id%>/resourcelocators?language=";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["languageCode"]) ? $context["languageCode"] : $this->getContext($context, "languageCode")), "html", null, true);
        echo "&webspace=";
        echo twig_escape_filter($this->env, (isset($context["webspaceKey"]) ? $context["webspaceKey"] : $this->getContext($context, "webspaceKey")), "html", null, true);
        echo "\"
     data-aura-content-id=\"<%=options.id%>\"
     ";
        // line 11
        if ($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "mandatory", array())) {
            echo "data-validation-required=\"true\"";
        }
        echo " ></div>
";
        
        $__internal_d3613bae70ea1af2879e27dbb32df971095cb3666cb1f39b8342eaa6d7bfe79f->leave($__internal_d3613bae70ea1af2879e27dbb32df971095cb3666cb1f39b8342eaa6d7bfe79f_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:content-types/resource_locator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  43 => 9,  39 => 8,  32 => 4,  28 => 3,  22 => 1,);
    }
}
/* <div id="{{ id|raw }}"*/
/*      class="preview-update trigger-save-button"*/
/*      data-property='{{ property|json_encode }}'*/
/*      data-mapper-property="{{ property.name }}"*/
/*      data-form="true"*/
/*      data-type="resourceLocator"*/
/*      data-aura-component="resource-locator@sulucontent"*/
/*      data-type-instance-name="{{ id|raw }}"*/
/*      data-aura-history-api="/admin/api/nodes/<%=content.id%>/resourcelocators?language={{ languageCode }}&webspace={{ webspaceKey }}"*/
/*      data-aura-content-id="<%=options.id%>"*/
/*      {% if property.mandatory %}data-validation-required="true"{% endif %} ></div>*/
/* */
