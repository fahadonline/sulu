<?php

/* SuluAdminBundle:Admin:index.html.twig */
class __TwigTemplate_9349ad9ddf65a851d65baa68007cf622ecdc41af74a0511558c0cdc9e4d8934f extends Twig_Template
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
        $__internal_73287f6816804ba0f3b60105caf1d46ef167014280739b40248817af20d513a5 = $this->env->getExtension("native_profiler");
        $__internal_73287f6816804ba0f3b60105caf1d46ef167014280739b40248817af20d513a5->enter($__internal_73287f6816804ba0f3b60105caf1d46ef167014280739b40248817af20d513a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Admin:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- build:css app.min.css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
        <!-- endbuild -->
    </head>
    <body>
        <div class=\"spinner initial-loader\">
            <div class=\"double-bounce1 bouncer\"></div>
            <div class=\"double-bounce2 bouncer\"></div>
        </div>
        <div id=\"main\" data-aura-component=\"app@suluadmin\" data-aura-user=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))), "html", null, true);
        echo "\">
            <div class=\"navigation-container\">
                <div class=\"sulu-navigation-labels\"></div>
                <div data-aura-component=\"navigation@husky\" data-aura-url=\"/admin/navigation\" data-aura-collapse=\"true\"
                     data-aura-user-name=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "\"
                     data-aura-system-name=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"
                     data-aura-system-version=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["suluVersion"]) ? $context["suluVersion"] : $this->getContext($context, "suluVersion")), "html", null, true);
        echo "\"
                     data-aura-user-locales='";
        // line 32
        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_get_array_keys_filter((isset($context["translated_locales"]) ? $context["translated_locales"] : $this->getContext($context, "translated_locales")))), "html", null, true);
        echo "'
                     data-aura-user-locale=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locale", array()), "html", null, true);
        echo "\"
                     data-aura-logout-route=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"
                     data-aura-resize-width=\"1470\"
                     class=\"navigation-column\">
                </div>
            </div>
            <div class=\"content-container\">
                <div id=\"labels-container\" data-aura-component=\"labels@suluadmin\"></div>
                <div class=\"content-column fixed\">
                    <div class=\"wrapper\">
                        <div class=\"page\">
                            <main class=\"grid\" id=\"content\"></main>
                        </div>
                    </div>
                </div>

                <div class=\"sidebar-column max\">
                    <aside id=\"sidebar\" data-aura-component=\"sidebar@suluadmin\"></aside>
                </div>
            </div>
            <div id=\"overlayContainer\" data-aura-component=\"overlay@suluadmin\"></div>
        </div>

        <script type=\"text/javascript\">
            ";
        // line 58
        echo "            var SULU = {
                debug: true,
                user: ";
        // line 60
        echo twig_jsonencode_filter((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo ",
                sections: ";
        // line 61
        echo twig_jsonencode_filter((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
        echo ",
                locales: ";
        // line 62
        echo twig_jsonencode_filter((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        echo ",
                translatedLocales: ";
        // line 63
        echo twig_jsonencode_filter((isset($context["translated_locales"]) ? $context["translated_locales"] : $this->getContext($context, "translated_locales")));
        echo ",
                translations: ";
        // line 64
        echo twig_jsonencode_filter((isset($context["translations"]) ? $context["translations"] : $this->getContext($context, "translations")));
        echo ",
                fallbackLocale: '";
        // line 65
        echo (isset($context["fallback_locale"]) ? $context["fallback_locale"] : $this->getContext($context, "fallback_locale"));
        echo "'
            };
            ";
        // line 68
        echo "
            // CKEditor needs base path to load some other files
            var CKEDITOR_BASEPATH = '/bundles/suluadmin/js/vendor/husky/vendor/ckeditor/';
        </script>

        <!-- build:js app.min.js -->
        <script data-main=\"/bundles/suluadmin/js/main\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
        <!-- endbuild -->
    </body>
</html>
";
        
        $__internal_73287f6816804ba0f3b60105caf1d46ef167014280739b40248817af20d513a5->leave($__internal_73287f6816804ba0f3b60105caf1d46ef167014280739b40248817af20d513a5_prof);

    }

    public function getTemplateName()
    {
        return "SuluAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 68,  128 => 65,  124 => 64,  120 => 63,  116 => 62,  112 => 61,  108 => 60,  104 => 58,  78 => 34,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  51 => 25,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>{{ name }}</title>*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width">*/
/* */
/*         <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->*/
/* */
/*         <!-- build:css app.min.css -->*/
/*         <link rel="stylesheet" type="text/css" href="/bundles/suluadmin/js/vendor/husky/husky.min.css"/>*/
/*         <link rel="stylesheet" type="text/css" href="/bundles/suluadmin/css/main.css"/>*/
/*         <!-- endbuild -->*/
/*     </head>*/
/*     <body>*/
/*         <div class="spinner initial-loader">*/
/*             <div class="double-bounce1 bouncer"></div>*/
/*             <div class="double-bounce2 bouncer"></div>*/
/*         </div>*/
/*         <div id="main" data-aura-component="app@suluadmin" data-aura-user="{{ user| json_encode }}">*/
/*             <div class="navigation-container">*/
/*                 <div class="sulu-navigation-labels"></div>*/
/*                 <div data-aura-component="navigation@husky" data-aura-url="/admin/navigation" data-aura-collapse="true"*/
/*                      data-aura-user-name="{{ user.fullName }}"*/
/*                      data-aura-system-name="{{ name }}"*/
/*                      data-aura-system-version="{{ suluVersion }}"*/
/*                      data-aura-user-locales='{{ translated_locales|keys|json_encode }}'*/
/*                      data-aura-user-locale="{{ user.locale }}"*/
/*                      data-aura-logout-route="{{ path('logout') }}"*/
/*                      data-aura-resize-width="1470"*/
/*                      class="navigation-column">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="content-container">*/
/*                 <div id="labels-container" data-aura-component="labels@suluadmin"></div>*/
/*                 <div class="content-column fixed">*/
/*                     <div class="wrapper">*/
/*                         <div class="page">*/
/*                             <main class="grid" id="content"></main>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="sidebar-column max">*/
/*                     <aside id="sidebar" data-aura-component="sidebar@suluadmin"></aside>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="overlayContainer" data-aura-component="overlay@suluadmin"></div>*/
/*         </div>*/
/* */
/*         <script type="text/javascript">*/
/*             {% autoescape false %}*/
/*             var SULU = {*/
/*                 debug: true,*/
/*                 user: {{ user|json_encode }},*/
/*                 sections: {{ config|json_encode }},*/
/*                 locales: {{ locales|json_encode }},*/
/*                 translatedLocales: {{ translated_locales|json_encode }},*/
/*                 translations: {{ translations|json_encode }},*/
/*                 fallbackLocale: '{{ fallback_locale }}'*/
/*             };*/
/*             {% endautoescape %}*/
/* */
/*             // CKEditor needs base path to load some other files*/
/*             var CKEDITOR_BASEPATH = '/bundles/suluadmin/js/vendor/husky/vendor/ckeditor/';*/
/*         </script>*/
/* */
/*         <!-- build:js app.min.js -->*/
/*         <script data-main="/bundles/suluadmin/js/main" src="/bundles/suluadmin/js/vendor/husky/husky.js"></script>*/
/*         <!-- endbuild -->*/
/*     </body>*/
/* </html>*/
/* */
