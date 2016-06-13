<?php

/* ClientWebsiteBundle:templates:overview.html.twig */
class __TwigTemplate_40b60cecf96ffebd6e05d314f545d5d67990d24730df7b2c4a40f67f1823884d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClientWebsiteBundle:views:master.html.twig", "ClientWebsiteBundle:templates:overview.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClientWebsiteBundle:views:master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6bb0ace6f504fa9a3060c28ea9d0d66c7409171986b612fe216811c26716db0 = $this->env->getExtension("native_profiler");
        $__internal_a6bb0ace6f504fa9a3060c28ea9d0d66c7409171986b612fe216811c26716db0->enter($__internal_a6bb0ace6f504fa9a3060c28ea9d0d66c7409171986b612fe216811c26716db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientWebsiteBundle:templates:overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6bb0ace6f504fa9a3060c28ea9d0d66c7409171986b612fe216811c26716db0->leave($__internal_a6bb0ace6f504fa9a3060c28ea9d0d66c7409171986b612fe216811c26716db0_prof);

    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        $__internal_2a588b05b6fd9b8a97e6e1bfc73a455e10e0817b97f0d2646b98bc4f935a7995 = $this->env->getExtension("native_profiler");
        $__internal_2a588b05b6fd9b8a97e6e1bfc73a455e10e0817b97f0d2646b98bc4f935a7995->enter($__internal_2a588b05b6fd9b8a97e6e1bfc73a455e10e0817b97f0d2646b98bc4f935a7995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $this->loadTemplate("ClientWebsiteBundle:blocks:meta.html.twig", "ClientWebsiteBundle:templates:overview.html.twig", 3)->display($context);
        
        $__internal_2a588b05b6fd9b8a97e6e1bfc73a455e10e0817b97f0d2646b98bc4f935a7995->leave($__internal_2a588b05b6fd9b8a97e6e1bfc73a455e10e0817b97f0d2646b98bc4f935a7995_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2715689f0f204ae8b65b33e77696516c0c55547b7aa8a0e15691d0817c7b2554 = $this->env->getExtension("native_profiler");
        $__internal_2715689f0f204ae8b65b33e77696516c0c55547b7aa8a0e15691d0817c7b2554->enter($__internal_2715689f0f204ae8b65b33e77696516c0c55547b7aa8a0e15691d0817c7b2554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div id=\"content\" vocab=\"http://schema.org/\" typeof=\"Content\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\" property=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title", array()), "html", null, true);
        echo "</h1>
                ";
        // line 12
        echo "                <div property=\"article\">";
        echo $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "article", array());
        echo "</div>
                ";
        // line 14
        echo "            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2>Smart-Content</h2>
            </div>

            <div class=\"col-lg-6\">
                ";
        // line 23
        $this->loadTemplate("ClientWebsiteBundle:util:categories.html.twig", "ClientWebsiteBundle:templates:overview.html.twig", 23)->display(array_merge($context, array("locale" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "locale", array()), "withChildren" => true, "root" => $this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "smartcontent", array()), "categoryRoot", array()), "parameter" => $this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "smartcontent", array()), "categoriesParameter", array()))));
        // line 24
        echo "            </div>
            <div class=\"col-lg-6\">
                ";
        // line 26
        $this->loadTemplate("ClientWebsiteBundle:util:tags.html.twig", "ClientWebsiteBundle:templates:overview.html.twig", 26)->display(array_merge($context, array("parameter" => $this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "smartcontent", array()), "tagsParameter", array()))));
        // line 27
        echo "            </div>

            <ul class=\"pagination\">
                ";
        // line 30
        $context["page"] = $this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "smartcontent", array()), "page", array());
        // line 31
        echo "
                ";
        // line 32
        if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1) >= 1)) {
            // line 33
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sulu_website_content_path')->getContentPath($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "url", array())), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 35
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "smartcontent", array()), "hasNextPage", array())) {
            // line 36
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sulu_website_content_path')->getContentPath($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "url", array())), "html", null, true);
            echo "?p=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 38
        echo "            </ul>

            <div property=\"smartcontent\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "smartcontent", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 42
            echo "                    <div class=\"col-lg-4\">
                        <h2>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('sulu_website_content_path')->getContentPath($this->getAttribute($context["page"], "url", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</a>
                        </h2>
                        <p>
                            <i>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "ext_title", array()), "html", null, true);
            echo "</i> | <i>";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["page"], "ext_tags", array()), ", "), "html", null, true);
            echo "</i>
                        </p>
                        ";
            // line 49
            if ((twig_length_filter($this->env, $this->getAttribute($context["page"], "ext_images", array())) > 0)) {
                // line 50
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "ext_images", array()), 0, array(), "array"), "thumbnails", array()), "50x50", array(), "array"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "ext_images", array()), 0, array(), "array"), "title", array()), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 52
            echo "                        ";
            // line 53
            echo "                        ";
            if (($this->getAttribute($context["page"], "article", array()) != "")) {
                // line 54
                echo "                            ";
                echo $this->getAttribute($context["page"], "article", array());
                echo "
                        ";
            } else {
                // line 56
                echo "                            <p>No Article found</p>
                        ";
            }
            // line 58
            echo "                        ";
            // line 59
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_2715689f0f204ae8b65b33e77696516c0c55547b7aa8a0e15691d0817c7b2554->leave($__internal_2715689f0f204ae8b65b33e77696516c0c55547b7aa8a0e15691d0817c7b2554_prof);

    }

    public function getTemplateName()
    {
        return "ClientWebsiteBundle:templates:overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 61,  173 => 59,  171 => 58,  167 => 56,  161 => 54,  158 => 53,  156 => 52,  148 => 50,  146 => 49,  139 => 47,  131 => 44,  127 => 42,  123 => 41,  118 => 38,  110 => 36,  107 => 35,  99 => 33,  97 => 32,  94 => 31,  92 => 30,  87 => 27,  85 => 26,  81 => 24,  79 => 23,  68 => 14,  63 => 12,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "ClientWebsiteBundle:views:master.html.twig" %}*/
/* */
/* {% block meta %}{% include "ClientWebsiteBundle:blocks:meta.html.twig" %}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="content" vocab="http://schema.org/" typeof="Content">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header" property="title">{{ content.title }}</h1>*/
/*                 {% autoescape false %}*/
/*                 <div property="article">{{ content.article }}</div>*/
/*                 {% endautoescape %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h2>Smart-Content</h2>*/
/*             </div>*/
/* */
/*             <div class="col-lg-6">*/
/*                 {% include "ClientWebsiteBundle:util:categories.html.twig" with {locale: request.locale, withChildren: true, root: view.smartcontent.categoryRoot, parameter: view.smartcontent.categoriesParameter} %}*/
/*             </div>*/
/*             <div class="col-lg-6">*/
/*                 {% include "ClientWebsiteBundle:util:tags.html.twig" with {parameter: view.smartcontent.tagsParameter} %}*/
/*             </div>*/
/* */
/*             <ul class="pagination">*/
/*                 {% set page = view.smartcontent.page %}*/
/* */
/*                 {% if page-1 >= 1 %}*/
/*                     <li><a href="{{ sulu_content_path(content.url) }}?p={{ page-1 }}">&laquo;</a></li>*/
/*                 {% endif %}*/
/*                 {% if view.smartcontent.hasNextPage %}*/
/*                     <li><a href="{{ sulu_content_path(content.url) }}?p={{ page+1 }}">&raquo;</a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/* */
/*             <div property="smartcontent">*/
/*                 {% for page in content.smartcontent %}*/
/*                     <div class="col-lg-4">*/
/*                         <h2>*/
/*                             <a href="{{ sulu_content_path(page.url) }}">{{ page.title }}</a>*/
/*                         </h2>*/
/*                         <p>*/
/*                             <i>{{ page.ext_title }}</i> | <i>{{ page.ext_tags|join(', ') }}</i>*/
/*                         </p>*/
/*                         {% if page.ext_images|length > 0 %}*/
/*                             <img src="{{ page.ext_images[0].thumbnails['50x50'] }}" alt="{{ page.ext_images[0].title }}"/>*/
/*                         {% endif %}*/
/*                         {% autoescape false %}*/
/*                         {% if page.article != '' %}*/
/*                             {{ page.article }}*/
/*                         {% else %}*/
/*                             <p>No Article found</p>*/
/*                         {% endif %}*/
/*                         {% endautoescape %}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
