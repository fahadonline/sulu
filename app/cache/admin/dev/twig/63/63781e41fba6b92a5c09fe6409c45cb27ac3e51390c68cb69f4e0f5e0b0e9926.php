<?php

/* SuluAdminBundle:Security:login.html.twig */
class __TwigTemplate_1ad01aa34d8b9cfeba65c2f79868f4e4510c2418f41f08a07bca8ac1fedf596c extends Twig_Template
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
        $__internal_54dc566510428494122c6b85dfe0070002559837c9973c1c302b1c2f57d3eae2 = $this->env->getExtension("native_profiler");
        $__internal_54dc566510428494122c6b85dfe0070002559837c9973c1c302b1c2f57d3eae2->enter($__internal_54dc566510428494122c6b85dfe0070002559837c9973c1c302b1c2f57d3eae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluAdminBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- build:css login.min.css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/js/vendor/husky/husky.min.css\"/>
    <!-- endbuild -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"/bundles/suluadmin/css/main.css\"/>
</head>
<body>
    <div id=\"main\" class=\"login\">
        <div data-aura-component=\"login@suluadmin\"
             data-aura-login-check=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("sulu_admin.login_check");
        echo "\"
             data-aura-reset-mail-url=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("sulu_security.reset_password.email");
        echo "\"
             data-aura-resend-url=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("sulu_security.reset_password.email.resend");
        echo "\"
             data-aura-login-url=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("sulu_admin.login");
        echo "\"
             data-aura-csrf-token=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
             ";
        // line 30
        if (array_key_exists("token", $context)) {
            // line 31
            echo "                data-aura-reset-token=\"";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\"
                data-aura-reset-mode=\"true\"
             ";
        }
        // line 34
        echo "             data-aura-reset-url=\"";
        echo $this->env->getExtension('routing')->getPath("sulu_security.reset_password.reset");
        echo "\"></div>

        <div id=\"labels-container\" class='login-label-container' data-aura-component=\"labels@suluadmin\"></div>
    </div>
    <script type=\"text/javascript\">
        ";
        // line 40
        echo "        var SULU = {
            debug: true,
            locales: ";
        // line 42
        echo twig_jsonencode_filter((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        echo ",
            translatedLocales: ";
        // line 43
        echo twig_jsonencode_filter((isset($context["translated_locales"]) ? $context["translated_locales"] : $this->getContext($context, "translated_locales")));
        echo ",
            translations: ";
        // line 44
        echo twig_jsonencode_filter((isset($context["translations"]) ? $context["translations"] : $this->getContext($context, "translations")));
        echo ",
            fallbackLocale: '";
        // line 45
        echo (isset($context["fallback_locale"]) ? $context["fallback_locale"] : $this->getContext($context, "fallback_locale"));
        echo "'
        };
        ";
        // line 48
        echo "    </script>

    <!-- build:js login.min.js -->
    <script data-main=\"/bundles/suluadmin/js/login\" src=\"/bundles/suluadmin/js/vendor/husky/husky.js\"></script>
    <!-- endbuild -->
</body>
</html>
";
        
        $__internal_54dc566510428494122c6b85dfe0070002559837c9973c1c302b1c2f57d3eae2->leave($__internal_54dc566510428494122c6b85dfe0070002559837c9973c1c302b1c2f57d3eae2_prof);

    }

    public function getTemplateName()
    {
        return "SuluAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  105 => 45,  101 => 44,  97 => 43,  93 => 42,  89 => 40,  80 => 34,  73 => 31,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!-->*/
/* <html class="no-js"> <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <title>{{ name }}</title>*/
/*     <meta name="description" content="">*/
/*     <meta name="viewport" content="width=device-width">*/
/* */
/*     <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->*/
/* */
/*     <!-- build:css login.min.css -->*/
/*     <link rel="stylesheet" type="text/css" href="/bundles/suluadmin/js/vendor/husky/husky.min.css"/>*/
/*     <!-- endbuild -->*/
/* */
/*     <link rel="stylesheet" type="text/css" href="/bundles/suluadmin/css/main.css"/>*/
/* </head>*/
/* <body>*/
/*     <div id="main" class="login">*/
/*         <div data-aura-component="login@suluadmin"*/
/*              data-aura-login-check="{{ path('sulu_admin.login_check') }}"*/
/*              data-aura-reset-mail-url="{{ path('sulu_security.reset_password.email') }}"*/
/*              data-aura-resend-url="{{ path('sulu_security.reset_password.email.resend') }}"*/
/*              data-aura-login-url="{{ path('sulu_admin.login') }}"*/
/*              data-aura-csrf-token="{{ csrf_token('authenticate') }}"*/
/*              {% if token is defined %}*/
/*                 data-aura-reset-token="{{ token }}"*/
/*                 data-aura-reset-mode="true"*/
/*              {% endif %}*/
/*              data-aura-reset-url="{{ path('sulu_security.reset_password.reset') }}"></div>*/
/* */
/*         <div id="labels-container" class='login-label-container' data-aura-component="labels@suluadmin"></div>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*         {% autoescape false %}*/
/*         var SULU = {*/
/*             debug: true,*/
/*             locales: {{ locales | json_encode }},*/
/*             translatedLocales: {{ translated_locales | json_encode }},*/
/*             translations: {{ translations | json_encode }},*/
/*             fallbackLocale: '{{ fallback_locale }}'*/
/*         };*/
/*         {% endautoescape %}*/
/*     </script>*/
/* */
/*     <!-- build:js login.min.js -->*/
/*     <script data-main="/bundles/suluadmin/js/login" src="/bundles/suluadmin/js/vendor/husky/husky.js"></script>*/
/*     <!-- endbuild -->*/
/* </body>*/
/* </html>*/
/* */
