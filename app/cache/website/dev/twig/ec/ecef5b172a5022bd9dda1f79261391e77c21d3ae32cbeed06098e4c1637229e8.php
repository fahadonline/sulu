<?php

/* ClientWebsiteBundle:blocks:meta.html.twig */
class __TwigTemplate_f2652494472a947fc2aa3d714b7f81bfc61588e6c51d47d4103f41ceb1d81ac3 extends Twig_Template
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
        $__internal_339cda8fa96b325a2288816bcbe23044e63b4590a8af7a8366960ca95645fb1f = $this->env->getExtension("native_profiler");
        $__internal_339cda8fa96b325a2288816bcbe23044e63b4590a8af7a8366960ca95645fb1f->enter($__internal_339cda8fa96b325a2288816bcbe23044e63b4590a8af7a8366960ca95645fb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientWebsiteBundle:blocks:meta.html.twig"));

        // line 2
        echo $this->env->getExtension('sulu_seo')->renderSeoTags($this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "seo", array()), (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), (isset($context["urls"]) ? $context["urls"] : $this->getContext($context, "urls")), (isset($context["shadowBaseLocale"]) ? $context["shadowBaseLocale"] : $this->getContext($context, "shadowBaseLocale")));
        echo "
";
        
        $__internal_339cda8fa96b325a2288816bcbe23044e63b4590a8af7a8366960ca95645fb1f->leave($__internal_339cda8fa96b325a2288816bcbe23044e63b4590a8af7a8366960ca95645fb1f_prof);

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
