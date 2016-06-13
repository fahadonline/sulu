<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_78a4fe14c6bcae04d6927a5c88268a0266ccea3750c304e878acd55098ec574e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33f319a2ad0756552ad79fc780650697a618d9fb12ca92add9cb8a51dc054135 = $this->env->getExtension("native_profiler");
        $__internal_33f319a2ad0756552ad79fc780650697a618d9fb12ca92add9cb8a51dc054135->enter($__internal_33f319a2ad0756552ad79fc780650697a618d9fb12ca92add9cb8a51dc054135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33f319a2ad0756552ad79fc780650697a618d9fb12ca92add9cb8a51dc054135->leave($__internal_33f319a2ad0756552ad79fc780650697a618d9fb12ca92add9cb8a51dc054135_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f7f518602acbf8037356b42970671240b11479b1359bd258c11b295515363b3 = $this->env->getExtension("native_profiler");
        $__internal_5f7f518602acbf8037356b42970671240b11479b1359bd258c11b295515363b3->enter($__internal_5f7f518602acbf8037356b42970671240b11479b1359bd258c11b295515363b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f7f518602acbf8037356b42970671240b11479b1359bd258c11b295515363b3->leave($__internal_5f7f518602acbf8037356b42970671240b11479b1359bd258c11b295515363b3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a19c25f9babe88f839978e9b74bd6632216ad454b73d761f37bc1aa3a3b56b5c = $this->env->getExtension("native_profiler");
        $__internal_a19c25f9babe88f839978e9b74bd6632216ad454b73d761f37bc1aa3a3b56b5c->enter($__internal_a19c25f9babe88f839978e9b74bd6632216ad454b73d761f37bc1aa3a3b56b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a19c25f9babe88f839978e9b74bd6632216ad454b73d761f37bc1aa3a3b56b5c->leave($__internal_a19c25f9babe88f839978e9b74bd6632216ad454b73d761f37bc1aa3a3b56b5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa2f13d8b409868df6530a0f48e2a4f22e06f50a021433787ce2739e100aac7e = $this->env->getExtension("native_profiler");
        $__internal_fa2f13d8b409868df6530a0f48e2a4f22e06f50a021433787ce2739e100aac7e->enter($__internal_fa2f13d8b409868df6530a0f48e2a4f22e06f50a021433787ce2739e100aac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fa2f13d8b409868df6530a0f48e2a4f22e06f50a021433787ce2739e100aac7e->leave($__internal_fa2f13d8b409868df6530a0f48e2a4f22e06f50a021433787ce2739e100aac7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
