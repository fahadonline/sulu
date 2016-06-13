<?php

/* ClientWebsiteBundle:util:tags.html.twig */
class __TwigTemplate_2df155566c5cccaffd8d5da2c42c98f80050f63958baa6ffa2cc8a866293b60f extends Twig_Template
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
        $__internal_93f788c4720325f9cfa7b50f3516f16e67dc2d3972713cc122ee957ceeb4e80d = $this->env->getExtension("native_profiler");
        $__internal_93f788c4720325f9cfa7b50f3516f16e67dc2d3972713cc122ee957ceeb4e80d->enter($__internal_93f788c4720325f9cfa7b50f3516f16e67dc2d3972713cc122ee957ceeb4e80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientWebsiteBundle:util:tags.html.twig"));

        // line 1
        echo "<ul>
    <li><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('sulu_tag')->clearTagUrlFunction(((array_key_exists("parameter", $context)) ? (_twig_default_filter((isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), null)) : (null))), "html", null, true);
        echo "\">None</a></li>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sulu_tag')->getTagsFunction());
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sulu_tag')->setTagUrlFunction($context["tag"], ((array_key_exists("parameter", $context)) ? (_twig_default_filter((isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), null)) : (null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        
        $__internal_93f788c4720325f9cfa7b50f3516f16e67dc2d3972713cc122ee957ceeb4e80d->leave($__internal_93f788c4720325f9cfa7b50f3516f16e67dc2d3972713cc122ee957ceeb4e80d_prof);

    }

    public function getTemplateName()
    {
        return "ClientWebsiteBundle:util:tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul>*/
/*     <li><a href="{{ sulu_tag_url_clear(parameter|default(null)) }}">None</a></li>*/
/*     {% for tag in sulu_tags() %}*/
/*         <li><a href="{{ sulu_tag_url(tag, parameter|default(null)) }}">{{ tag.name }}</a></li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
