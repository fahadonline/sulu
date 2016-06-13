<?php

/* ClientWebsiteBundle:views:master.html.twig */
class __TwigTemplate_b0d30ccd3312939f27c981c8ee458bcd205a9b8c733b9e4df665cf286094852a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d4ec8e435c9596e290854d9ef92a4d73e565073a98788b4cea465f319495a3b = $this->env->getExtension("native_profiler");
        $__internal_6d4ec8e435c9596e290854d9ef92a4d73e565073a98788b4cea465f319495a3b->enter($__internal_6d4ec8e435c9596e290854d9ef92a4d73e565073a98788b4cea465f319495a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClientWebsiteBundle:views:master.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8a3b4b7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a3b4b7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8a3b4b7_bootstrap.min_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "8a3b4b7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a3b4b7_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8a3b4b7_justified-nav_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "8a3b4b7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a3b4b7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8a3b4b7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>
    <body>
        <div class=\"container\">

            <!-- header -->
            <div class=\"masthead\">
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <h3 class=\"text-muted\">
                            <img height=\"20\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/clientwebsite/default/images/sulu.png"), "html", null, true);
        echo "\" />
                            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('sulu_website_content_path')->getContentRootPath(), "html", null, true);
        echo "\">SULU CMF</a>
                        </h3>
                        <div>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) ? $context["urls"] : $this->getContext($context, "urls")));
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
        foreach ($context['_seq'] as $context["locale"] => $context["url"]) {
            // line 37
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('sulu_website_content_path')->getContentPath((($context["url"]) ? ($context["url"]) : ("/")), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "webspaceKey", array()), $context["locale"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</a>
                                ";
            // line 38
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "&nbsp;|&nbsp;";
            }
            // line 39
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("website_search", $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParameters", array())), "html", null, true);
        echo "\" method=\"GET\">
                            <input name=\"q\" type=\"text\" placeholder=\"Search\" />
                            <input type=\"submit\" value=\"Go\" />
                        </form>
                    </div>
                </div>
                <br/>
                ";
        // line 50
        $this->loadTemplate("ClientWebsiteBundle:views:navigation.html.twig", "ClientWebsiteBundle:views:master.html.twig", 50)->display($context);
        // line 51
        echo "            </div>
            <!-- /header -->

            <!-- content -->
            ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "            <!-- /content -->

            <!-- footer -->
            <div class=\"footer\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">&copy; SULU CMF 2014</div>
                    <div class=\"col-lg-4\">Access to the demo <a href=\"/admin\" target=\"_blank\">admin</a></div>
                    <div class=\"col-lg-4\">Credentials: demo / demo</div>
                </div>
            </div>
            <!-- /footer -->

        </div><!-- /container -->

        <a href=\"https://github.com/sulu-cmf/sulu-standard\" target=\"_blank\"><img style=\"position: absolute; top: 0; right: 0; border: 0;\" src=\"https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67\" alt=\"Fork me on GitHub\" data-canonical-src=\"https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png\"></a>

        ";
        // line 72
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a9d7da2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9d7da2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a9d7da2_jquery-1.11.0.min_1.js");
            // line 76
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a9d7da2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9d7da2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a9d7da2_bootstrap_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a9d7da2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a9d7da2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a9d7da2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 78
        echo "    </body>
</html>
";
        
        $__internal_6d4ec8e435c9596e290854d9ef92a4d73e565073a98788b4cea465f319495a3b->leave($__internal_6d4ec8e435c9596e290854d9ef92a4d73e565073a98788b4cea465f319495a3b_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_6bb961264df235940f9c9bab47743a4a1b954a9d67dc5e94daafc3d61802323c = $this->env->getExtension("native_profiler");
        $__internal_6bb961264df235940f9c9bab47743a4a1b954a9d67dc5e94daafc3d61802323c->enter($__internal_6bb961264df235940f9c9bab47743a4a1b954a9d67dc5e94daafc3d61802323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        echo " ";
        
        $__internal_6bb961264df235940f9c9bab47743a4a1b954a9d67dc5e94daafc3d61802323c->leave($__internal_6bb961264df235940f9c9bab47743a4a1b954a9d67dc5e94daafc3d61802323c_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_778261a8e2b941e6863e2ad9aca8585ab49cb2de20f55403d9b2948b58192217 = $this->env->getExtension("native_profiler");
        $__internal_778261a8e2b941e6863e2ad9aca8585ab49cb2de20f55403d9b2948b58192217->enter($__internal_778261a8e2b941e6863e2ad9aca8585ab49cb2de20f55403d9b2948b58192217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_778261a8e2b941e6863e2ad9aca8585ab49cb2de20f55403d9b2948b58192217->leave($__internal_778261a8e2b941e6863e2ad9aca8585ab49cb2de20f55403d9b2948b58192217_prof);

    }

    public function getTemplateName()
    {
        return "ClientWebsiteBundle:views:master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 55,  208 => 8,  199 => 78,  179 => 76,  175 => 72,  157 => 56,  155 => 55,  149 => 51,  147 => 50,  137 => 43,  132 => 40,  118 => 39,  114 => 38,  107 => 37,  90 => 36,  84 => 33,  80 => 32,  62 => 16,  42 => 14,  38 => 10,  35 => 9,  33 => 8,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         {% block meta %} {% endblock %}*/
/* */
/*         {% stylesheets*/
/*             '@ClientWebsiteBundle/Resources/public/default/css/bootstrap.min.css'*/
/*             '@ClientWebsiteBundle/Resources/public/default/css/justified-nav.css'*/
/*         %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/* */
/*         <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/* */
/*             <!-- header -->*/
/*             <div class="masthead">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-9">*/
/*                         <h3 class="text-muted">*/
/*                             <img height="20" src="{{ asset('bundles/clientwebsite/default/images/sulu.png') }}" />*/
/*                             <a href="{{ sulu_content_root_path() }}">SULU CMF</a>*/
/*                         </h3>*/
/*                         <div>*/
/*                             {% for locale, url in urls %}*/
/*                                 <a href="{{ sulu_content_path((url?:'/'),request.webspaceKey,locale) }}">{{ locale }}</a>*/
/*                                 {% if not loop.last %}&nbsp;|&nbsp;{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3">*/
/*                         <form action="{{ path('website_search', request.routeParameters) }}" method="GET">*/
/*                             <input name="q" type="text" placeholder="Search" />*/
/*                             <input type="submit" value="Go" />*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br/>*/
/*                 {% include 'ClientWebsiteBundle:views:navigation.html.twig' %}*/
/*             </div>*/
/*             <!-- /header -->*/
/* */
/*             <!-- content -->*/
/*             {% block content %}{% endblock %}*/
/*             <!-- /content -->*/
/* */
/*             <!-- footer -->*/
/*             <div class="footer">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4">&copy; SULU CMF 2014</div>*/
/*                     <div class="col-lg-4">Access to the demo <a href="/admin" target="_blank">admin</a></div>*/
/*                     <div class="col-lg-4">Credentials: demo / demo</div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /footer -->*/
/* */
/*         </div><!-- /container -->*/
/* */
/*         <a href="https://github.com/sulu-cmf/sulu-standard" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png"></a>*/
/* */
/*         {% javascripts*/
/*             'http://code.jquery.com/jquery-1.11.0.min.js'*/
/*             '@ClientWebsiteBundle/Resources/public/default/js/bootstrap.js'*/
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     </body>*/
/* </html>*/
/* */
