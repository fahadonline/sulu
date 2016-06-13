<?php

/* SuluWebsiteBundle:Analytics:website.html.twig */
class __TwigTemplate_6ba5d6158b27f629fc059d0da1e6de1c42292822e9e5d5eb5ac91b8796646a25 extends Twig_Template
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
        $__internal_c57abcb35ec2a9d4de02160c859435b2db13ecd7c73a5f1be6b861fe30cd6dd4 = $this->env->getExtension("native_profiler");
        $__internal_c57abcb35ec2a9d4de02160c859435b2db13ecd7c73a5f1be6b861fe30cd6dd4->enter($__internal_c57abcb35ec2a9d4de02160c859435b2db13ecd7c73a5f1be6b861fe30cd6dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Analytics:website.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["analytics"]);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["analytics"]) {
            // line 2
            echo "    ";
            $this->loadTemplate((("SuluWebsiteBundle:Analytics/type:" . $this->getAttribute($context["analytics"], "type", array())) . ".html.twig"), "SuluWebsiteBundle:Analytics:website.html.twig", 2)->display(array_merge($context, array("analytics" => $context["analytics"])));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytics'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c57abcb35ec2a9d4de02160c859435b2db13ecd7c73a5f1be6b861fe30cd6dd4->leave($__internal_c57abcb35ec2a9d4de02160c859435b2db13ecd7c73a5f1be6b861fe30cd6dd4_prof);

    }

    public function getTemplateName()
    {
        return "SuluWebsiteBundle:Analytics:website.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  22 => 1,);
    }
}
/* {% for analytics in analytics %}*/
/*     {% include 'SuluWebsiteBundle:Analytics/type:' ~ analytics.type ~ '.html.twig' with {analytics: analytics} %}*/
/* {% endfor %}*/
/* */
