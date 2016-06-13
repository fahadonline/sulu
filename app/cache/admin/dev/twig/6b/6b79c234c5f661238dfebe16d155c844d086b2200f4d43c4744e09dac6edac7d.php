<?php

/* ClientWebsiteBundle:util:categories.html.twig */
class __TwigTemplate_70c617a4511b0b5805a550a9104d1d8f55c8d3e0d07bc8b7101e66367d22aabb extends Twig_Template
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
        $__internal_6722ccd8678cb72a40572b59f10c4812fa767189e4ea633f7682a41b4aa74a17 = $this->env->getExtension("native_profiler");
        $__internal_6722ccd8678cb72a40572b59f10c4812fa767189e4ea633f7682a41b4aa74a17->enter($__internal_6722ccd8678cb72a40572b59f10c4812fa767189e4ea633f7682a41b4aa74a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientWebsiteBundle:util:categories.html.twig"));

        // line 1
        echo "<ul>
    <li><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('sulu_category')->clearCategoryUrlFunction(((array_key_exists("parameter", $context)) ? (_twig_default_filter((isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), null)) : (null))), "html", null, true);
        echo "\">None</a></li>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sulu_category')->getCategoriesFunction((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), ((array_key_exists("root", $context)) ? (_twig_default_filter((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")), null)) : (null))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "        <li>
            <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('sulu_category')->setCategoryUrlFunction($context["category"], ((array_key_exists("parameter", $context)) ? (_twig_default_filter((isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), null)) : (null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>

            ";
            // line 7
            if (((array_key_exists("withChildren", $context) && ((isset($context["withChildren"]) ? $context["withChildren"] : $this->getContext($context, "withChildren")) == true)) && (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) > 0))) {
                // line 8
                echo "                ";
                $this->loadTemplate("ClientWebsiteBundle:util:sub-categories.html.twig", "ClientWebsiteBundle:util:categories.html.twig", 8)->display(array_merge($context, array("categories" => $this->getAttribute($context["category"], "children", array()), "withChildren" => (isset($context["withChildren"]) ? $context["withChildren"] : $this->getContext($context, "withChildren")), "parameter" => ((array_key_exists("parameter", $context)) ? (_twig_default_filter((isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), null)) : (null)))));
                // line 9
                echo "            ";
            }
            // line 10
            echo "        </li>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
        
        $__internal_6722ccd8678cb72a40572b59f10c4812fa767189e4ea633f7682a41b4aa74a17->leave($__internal_6722ccd8678cb72a40572b59f10c4812fa767189e4ea633f7682a41b4aa74a17_prof);

    }

    public function getTemplateName()
    {
        return "ClientWebsiteBundle:util:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  64 => 10,  61 => 9,  58 => 8,  56 => 7,  49 => 5,  46 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul>*/
/*     <li><a href="{{ sulu_category_url_clear(parameter|default(null)) }}">None</a></li>*/
/*     {% for category in sulu_categories(locale, root|default(null)) %}*/
/*         <li>*/
/*             <a href="{{ sulu_category_url(category, parameter|default(null)) }}">{{ category.name }}</a>*/
/* */
/*             {% if withChildren is defined and withChildren == true and category.children|length > 0 %}*/
/*                 {% include "ClientWebsiteBundle:util:sub-categories.html.twig" with {categories: category.children, withChildren: withChildren, parameter: (parameter|default(null))} %}*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
