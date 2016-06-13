<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ec0586dafbe53ee51d8912508cc67c3686f7163b60e069815dbe41eec5228f08 extends Twig_Template
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
        $__internal_258d15af357984b714c88c3ae1acff663fc459327bcb306373b1d1cb26d958d4 = $this->env->getExtension("native_profiler");
        $__internal_258d15af357984b714c88c3ae1acff663fc459327bcb306373b1d1cb26d958d4->enter($__internal_258d15af357984b714c88c3ae1acff663fc459327bcb306373b1d1cb26d958d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_258d15af357984b714c88c3ae1acff663fc459327bcb306373b1d1cb26d958d4->leave($__internal_258d15af357984b714c88c3ae1acff663fc459327bcb306373b1d1cb26d958d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_838e96b0c28bcb0b8b0ce50a4bb25e84501b4d3460824a18d36155283e627a74 = $this->env->getExtension("native_profiler");
        $__internal_838e96b0c28bcb0b8b0ce50a4bb25e84501b4d3460824a18d36155283e627a74->enter($__internal_838e96b0c28bcb0b8b0ce50a4bb25e84501b4d3460824a18d36155283e627a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_838e96b0c28bcb0b8b0ce50a4bb25e84501b4d3460824a18d36155283e627a74->leave($__internal_838e96b0c28bcb0b8b0ce50a4bb25e84501b4d3460824a18d36155283e627a74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4953d1c5b96f68d8eb3aa798e4b528e90ebeb42cd141a9d749c16e13a2dfa170 = $this->env->getExtension("native_profiler");
        $__internal_4953d1c5b96f68d8eb3aa798e4b528e90ebeb42cd141a9d749c16e13a2dfa170->enter($__internal_4953d1c5b96f68d8eb3aa798e4b528e90ebeb42cd141a9d749c16e13a2dfa170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4953d1c5b96f68d8eb3aa798e4b528e90ebeb42cd141a9d749c16e13a2dfa170->leave($__internal_4953d1c5b96f68d8eb3aa798e4b528e90ebeb42cd141a9d749c16e13a2dfa170_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5660ee76041c71ef507cd6fabcb61a7f5992ef38ac50a6a5d457a755673e53ee = $this->env->getExtension("native_profiler");
        $__internal_5660ee76041c71ef507cd6fabcb61a7f5992ef38ac50a6a5d457a755673e53ee->enter($__internal_5660ee76041c71ef507cd6fabcb61a7f5992ef38ac50a6a5d457a755673e53ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5660ee76041c71ef507cd6fabcb61a7f5992ef38ac50a6a5d457a755673e53ee->leave($__internal_5660ee76041c71ef507cd6fabcb61a7f5992ef38ac50a6a5d457a755673e53ee_prof);

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
