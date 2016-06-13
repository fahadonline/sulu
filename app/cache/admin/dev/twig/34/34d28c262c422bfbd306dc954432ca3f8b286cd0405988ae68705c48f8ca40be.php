<?php

/* ClientWebsiteBundle:blocks:meta.html.twig */
class __TwigTemplate_2fb8a44c979eb94a4149100634d9b10ca119d2e50864068e1b3550d3820d4323 extends Twig_Template
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
        $__internal_447b6bad4f91ebfdac5bb88107f9386034d47c7c2d679e3d19d631e6cc04abc1 = $this->env->getExtension("native_profiler");
        $__internal_447b6bad4f91ebfdac5bb88107f9386034d47c7c2d679e3d19d631e6cc04abc1->enter($__internal_447b6bad4f91ebfdac5bb88107f9386034d47c7c2d679e3d19d631e6cc04abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientWebsiteBundle:blocks:meta.html.twig"));

        // line 2
        echo $this->env->getExtension('sulu_seo')->renderSeoTags($this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "seo", array()), (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), (isset($context["urls"]) ? $context["urls"] : $this->getContext($context, "urls")), (isset($context["shadowBaseLocale"]) ? $context["shadowBaseLocale"] : $this->getContext($context, "shadowBaseLocale")));
        echo "
";
        
        $__internal_447b6bad4f91ebfdac5bb88107f9386034d47c7c2d679e3d19d631e6cc04abc1->leave($__internal_447b6bad4f91ebfdac5bb88107f9386034d47c7c2d679e3d19d631e6cc04abc1_prof);

    }

    public function getTemplateName()
    {
        return "ClientWebsiteBundle:blocks:meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {% autoescape false %}*/
/* {{ sulu_seo(extension.seo, content, urls, shadowBaseLocale) }}*/
/* {% endautoescape %}*/
/* */
