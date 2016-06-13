<?php

/* ClientWebsiteBundle:views:navigation.html.twig */
class __TwigTemplate_e0d19fdbde6950c224d30d9e1bd3158dd52fcf198038d54f041be1d29ee52c4f extends Twig_Template
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
        $__internal_854491e1ae43b61da310903b4653146fa5b49fe8cb6f76051497da9ffc612551 = $this->env->getExtension("native_profiler");
        $__internal_854491e1ae43b61da310903b4653146fa5b49fe8cb6f76051497da9ffc612551->enter($__internal_854491e1ae43b61da310903b4653146fa5b49fe8cb6f76051497da9ffc612551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientWebsiteBundle:views:navigation.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-justified\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sulu_website_navigation')->treeRootNavigationFunction("main"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li>
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('sulu_website_content_path')->getContentPath($this->getAttribute($context["item"], "url", array())), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
        
        $__internal_854491e1ae43b61da310903b4653146fa5b49fe8cb6f76051497da9ffc612551->leave($__internal_854491e1ae43b61da310903b4653146fa5b49fe8cb6f76051497da9ffc612551_prof);

    }

    public function getTemplateName()
    {
        return "ClientWebsiteBundle:views:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class="nav nav-justified">*/
/*     {% for item in sulu_navigation_root_tree('main') %}*/
/*         <li>*/
/*             <a href="{{ sulu_content_path(item.url) }}" title="{{ item.title }}">{{ item.title }}</a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
