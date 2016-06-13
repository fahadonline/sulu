<?php

/* SuluContentBundle:Template:macros/single.html.twig */
class __TwigTemplate_8d486aed4f66efbc4e488e9273ec5297357ae5dfe6ed713428a03c08eee3095b extends Twig_Template
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
        $__internal_6230606bcfb99a3334ac642c4f3f049440ecd1e73f61ada59f3a6c6344f0b533 = $this->env->getExtension("native_profiler");
        $__internal_6230606bcfb99a3334ac642c4f3f049440ecd1e73f61ada59f3a6c6344f0b533->enter($__internal_6230606bcfb99a3334ac642c4f3f049440ecd1e73f61ada59f3a6c6344f0b533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluContentBundle:Template:macros/single.html.twig"));

        // line 1
        echo "<div class=\"grid-col-";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "colspan", array()) != "")) ? ($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "colspan", array())) : ("12")), "html", null, true);
        echo " floating form-group\">
    <label for=\"";
        // line 2
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\" class=\"pointer ";
        echo (($this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "mandatory", array())) ? ("required") : (""));
        echo "\"
           title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getInfoText", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
        echo "\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getTitle", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
        echo "
    </label>

    ";
        // line 7
        $this->loadTemplate($this->getAttribute((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "template", array()), "SuluContentBundle:Template:macros/single.html.twig", 7)->display($context);
        // line 8
        echo "
    <div class=\"input-description\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : $this->getContext($context, "property")), "getInfoText", array(0 => (isset($context["userLocale"]) ? $context["userLocale"] : $this->getContext($context, "userLocale"))), "method"), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_6230606bcfb99a3334ac642c4f3f049440ecd1e73f61ada59f3a6c6344f0b533->leave($__internal_6230606bcfb99a3334ac642c4f3f049440ecd1e73f61ada59f3a6c6344f0b533_prof);

    }

    public function getTemplateName()
    {
        return "SuluContentBundle:Template:macros/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  43 => 7,  37 => 4,  33 => 3,  27 => 2,  22 => 1,);
    }
}
/* <div class="grid-col-{{ property.colspan != "" ? property.colspan : '12' }} floating form-group">*/
/*     <label for="{{ id|raw }}" class="pointer {{ (property.mandatory) ? 'required' : '' }}"*/
/*            title="{{ property.getInfoText(userLocale) }}">*/
/*         {{ property.getTitle(userLocale) }}*/
/*     </label>*/
/* */
/*     {% include type.template %}*/
/* */
/*     <div class="input-description">{{ property.getInfoText(userLocale) }}</div>*/
/* </div>*/
/* */
