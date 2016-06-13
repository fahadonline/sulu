<?php

/* SuluWebsiteBundle:Profiler:layout.html.twig */
class __TwigTemplate_44a59fe08e99aad87e91933a9cf5e55b13a524b3d73ef34674c4e8c5d2abeebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "SuluWebsiteBundle:Profiler:layout.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abeeb56f542116d3f381dbc2f7d53d2a27a52ee318c8d160d22eab0c2d39b22e = $this->env->getExtension("native_profiler");
        $__internal_abeeb56f542116d3f381dbc2f7d53d2a27a52ee318c8d160d22eab0c2d39b22e->enter($__internal_abeeb56f542116d3f381dbc2f7d53d2a27a52ee318c8d160d22eab0c2d39b22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuluWebsiteBundle:Profiler:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abeeb56f542116d3f381dbc2f7d53d2a27a52ee318c8d160d22eab0c2d39b22e->leave($__internal_abeeb56f542116d3f381dbc2f7d53d2a27a52ee318c8d160d22eab0c2d39b22e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ba6fdd6d55f1fbbfda60b1d9eee7186840bcb0062786b63471384798b2409dd = $this->env->getExtension("native_profiler");
        $__internal_1ba6fdd6d55f1fbbfda60b1d9eee7186840bcb0062786b63471384798b2409dd->enter($__internal_1ba6fdd6d55f1fbbfda60b1d9eee7186840bcb0062786b63471384798b2409dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <img width=\"28\" height=\"28\" alt=\"Sulu\" src=\"data:image/png;base64,";
        echo $this->getAttribute($this, "logo_small", array());
        echo "\" />
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Portal</b>
            <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "portal"), "method"), "name", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Webspace</b>
            <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "webspace"), "method"), "name", array()), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method")) {
            // line 18
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Structure</b>
            <span>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "template", array()), "html", null, true);
            echo "</span>
        </div>
        ";
        }
        // line 23
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Localization</b>
            <span>
                ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "localization"), "method"), "html", null, true);
        echo "
                ";
        // line 27
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method")) {
            // line 28
            echo "                (";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "shadowOn", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "shadowBaseLanguage", array())) : ("no shadow")), "html", null, true);
            echo ")
                ";
        }
        // line 30
        echo "            </span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "SuluWebsiteBundle:Profiler:layout.html.twig", 33)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_1ba6fdd6d55f1fbbfda60b1d9eee7186840bcb0062786b63471384798b2409dd->leave($__internal_1ba6fdd6d55f1fbbfda60b1d9eee7186840bcb0062786b63471384798b2409dd_prof);

    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        $__internal_58dd3296b12d35c86f6d79bce4c9db9fa74ef8bb9d30850e960257e6d39d8ca1 = $this->env->getExtension("native_profiler");
        $__internal_58dd3296b12d35c86f6d79bce4c9db9fa74ef8bb9d30850e960257e6d39d8ca1->enter($__internal_58dd3296b12d35c86f6d79bce4c9db9fa74ef8bb9d30850e960257e6d39d8ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 37
        echo "<span class=\"label\">
    <span class=\"icon\"><img height=\"40\" width=\"40\" src=\"data:imagebbng;base64,";
        // line 38
        echo $this->getAttribute($this, "logo", array());
        echo "\" alt=\"Sulu\"></span>
    <strong>Sulu</strong>
</span>
";
        
        $__internal_58dd3296b12d35c86f6d79bce4c9db9fa74ef8bb9d30850e960257e6d39d8ca1->leave($__internal_58dd3296b12d35c86f6d79bce4c9db9fa74ef8bb9d30850e960257e6d39d8ca1_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b612f0f3a625b9c32065939489c92950017a424ef196200ba20473329ff0d2a = $this->env->getExtension("native_profiler");
        $__internal_9b612f0f3a625b9c32065939489c92950017a424ef196200ba20473329ff0d2a->enter($__internal_9b612f0f3a625b9c32065939489c92950017a424ef196200ba20473329ff0d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Webspace</h2>
    <table>
        <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "webspace"), "method"));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 48
            echo "            <tr>
                <th>";
            // line 49
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 51
            if (twig_test_iterable($context["value"])) {
                // line 52
                echo "                    ";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 54
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 56
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
    <h2>Portal</h2>
    <table>
        <tbody>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "portal"), "method"));
        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
            // line 65
            echo "            <tr>
                <th>";
            // line 66
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "</th>
                <td>
                ";
            // line 68
            if (twig_test_iterable($context["value"])) {
                // line 69
                echo "                    ";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($context["value"]), "html", null, true);
                echo "
                ";
            } else {
                // line 71
                echo "                    ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
                ";
            }
            // line 73
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </tbody>
    </table>
    <h2>Structure</h2>
    <table>
        <tbody>
            ";
        // line 81
        echo $this->getAttribute($this, "table_row", array(0 => "id", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "id", array())), "method");
        echo "
            ";
        // line 82
        echo $this->getAttribute($this, "table_row", array(0 => "path", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "path", array())), "method");
        echo "
            ";
        // line 83
        echo $this->getAttribute($this, "table_row", array(0 => "nodeType", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "nodeType", array())), "method");
        echo "
            ";
        // line 84
        echo $this->getAttribute($this, "table_row", array(0 => "internal", 1 => (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "internal", array())) ? ("yes") : ("no"))), "method");
        echo "
            ";
        // line 85
        echo $this->getAttribute($this, "table_row", array(0 => "nodeState", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "nodeState", array())), "method");
        echo "
            ";
        // line 86
        echo $this->getAttribute($this, "table_row", array(0 => "published", 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "published", array()), "format", array(0 => "Y-m-d H:i:s"), "method")), "method");
        echo "
            ";
        // line 87
        echo $this->getAttribute($this, "table_row", array(0 => "nodeState", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "nodeState", array())), "method");
        echo "
            ";
        // line 88
        echo $this->getAttribute($this, "table_row", array(0 => "navContexts", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "navContexts", array())), "method");
        echo "
            ";
        // line 89
        echo $this->getAttribute($this, "table_row", array(0 => "enabledShadowLanguages", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "enabledShadowLanguages", array())), "method");
        echo "
            ";
        // line 90
        echo $this->getAttribute($this, "table_row", array(0 => "concreteLanguages", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "concreteLanguages", array())), "method");
        echo "
            ";
        // line 91
        echo $this->getAttribute($this, "table_row", array(0 => "shadowOn", 1 => (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "shadowOn", array())) ? ("yes") : ("no"))), "method");
        echo "
            ";
        // line 92
        echo $this->getAttribute($this, "table_row", array(0 => "shadowBaseLanguage", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "shadowBaseLanguage", array())), "method");
        echo "
            ";
        // line 93
        echo $this->getAttribute($this, "table_row", array(0 => "template", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "template", array())), "method");
        echo "
            ";
        // line 94
        echo $this->getAttribute($this, "table_row", array(0 => "has children", 1 => (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "hasSub", array())) ? ("yes") : ("no"))), "method");
        echo "
            ";
        // line 95
        echo $this->getAttribute($this, "table_row", array(0 => "creator", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "creator", array())), "method");
        echo "
            ";
        // line 96
        echo $this->getAttribute($this, "table_row", array(0 => "changer", 1 => $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "changer", array())), "method");
        echo "
            ";
        // line 97
        echo $this->getAttribute($this, "table_row", array(0 => "created", 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "created", array()), "format", array(0 => "Y-m-d H:i:s"), "method")), "method");
        echo "
            ";
        // line 98
        echo $this->getAttribute($this, "table_row", array(0 => "changed", 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array(0 => "structure"), "method"), "changed", array()), "format", array(0 => "Y-m-d H:i:s"), "method")), "method");
        echo "
        </tbody>
    </table>

";
        
        $__internal_9b612f0f3a625b9c32065939489c92950017a424ef196200ba20473329ff0d2a->leave($__internal_9b612f0f3a625b9c32065939489c92950017a424ef196200ba20473329ff0d2a_prof);

    }

    // line 104
    public function gettable_row($__field__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "value" => $__value__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_528d8ec7542d7c51ca719ac3e495b5e70091b88ec7ccab171baf3f0bc2a8fcd5 = $this->env->getExtension("native_profiler");
            $__internal_528d8ec7542d7c51ca719ac3e495b5e70091b88ec7ccab171baf3f0bc2a8fcd5->enter($__internal_528d8ec7542d7c51ca719ac3e495b5e70091b88ec7ccab171baf3f0bc2a8fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "table_row"));

            // line 105
            echo "    <tr>
        <th>";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "html", null, true);
            echo "</th>
        <td>
        ";
            // line 108
            if (twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                // line 109
                echo "            ";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo "
        ";
            } else {
                // line 111
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "
        ";
            }
            // line 113
            echo "    </tr>
";
            
            $__internal_528d8ec7542d7c51ca719ac3e495b5e70091b88ec7ccab171baf3f0bc2a8fcd5->leave($__internal_528d8ec7542d7c51ca719ac3e495b5e70091b88ec7ccab171baf3f0bc2a8fcd5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlogo()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a1a315149db14ea4660af6e7b3705bacabeb7ad13bb216de33f607fbf949cc1b = $this->env->getExtension("native_profiler");
            $__internal_a1a315149db14ea4660af6e7b3705bacabeb7ad13bb216de33f607fbf949cc1b->enter($__internal_a1a315149db14ea4660af6e7b3705bacabeb7ad13bb216de33f607fbf949cc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logo"));

            // line 117
            echo "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";
            
            $__internal_a1a315149db14ea4660af6e7b3705bacabeb7ad13bb216de33f607fbf949cc1b->leave($__internal_a1a315149db14ea4660af6e7b3705bacabeb7ad13bb216de33f607fbf949cc1b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 119
    public function getlogo_small()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_605a15d3b0e39d7f7c145a836b00d113fbd868ea9fb73014c7ecdaf6ca72fb22 = $this->env->getExtension("native_profiler");
            $__internal_605a15d3b0e39d7f7c145a836b00d113fbd868ea9fb73014c7ecdaf6ca72fb22->enter($__internal_605a15d3b0e39d7f7c145a836b00d113fbd868ea9fb73014c7ecdaf6ca72fb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "logo_small"));

            // line 120
            echo "    iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAVlpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iPgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KTMInWQAAAXpQTFRFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQUFBQUFBQUFBQUFBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBAQEBAQEAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAgICAgICAwMDAwMD2crCeQAAAH10Uk5TAAECAwQFBgcICQoLDQ8REhQVFxkaHB0eHyAkJScoKSstLi80Njg7PD1AQkRFR0lLTE1OT1FSVFdYWVxdX2BiY2RmZ2lqbW5vcnN3eHl6fH1+f4CBgoOEhYaHiImKi42QkpOUlZaXmJmanp+goqOkpaeqrK6vsbK3xsnP4eh7/ATcAAABeklEQVQYGa3B+19LcRjA8c/zPN+zplBbTs19JSPp4pZLo5BhkrVyjrWaJqQpl9xv/7uzIXm91k95v+H/UWEb6ozmxDmaE3NEugbyQwhbiToi+87MLGx8mwVhkxqR5MiD6sKlzPLKjCFslRwuLD8a6/WYzPWU21A27c7cKhcvH20Bzq61daz4eEKD4i99fn+xg7pDL4+zt1ZpB6PO6F4rXg/C+1dP+YlSFuLheuUEmAAKd0doT5/LhcHGYwOd6j9WG3c0GMMFJWKJK9UUwu1RUqXARwCHXzpCiwpw7aGD7AQw+bwTBYU7owhIDAmycCFHnL5nSRRwDN7zcICj62kfp/PQOj+ACODorBxAUFWPwRdeen4X43OCEhEoFjx+K04frMa6X6dxNBi9b16FN/pTMcCWwsX9c3kQfhH2ZCbK629XZ8cyrekvnxZrSRx/CJH44fPTqx/ePfn64/sQjr/UlIbEyZvBxylQ/iFqzqhTUJoQ8zwBZTtiwk79BLe8M4hAwZOjAAAAAElFTkSuQmCC";
            
            $__internal_605a15d3b0e39d7f7c145a836b00d113fbd868ea9fb73014c7ecdaf6ca72fb22->leave($__internal_605a15d3b0e39d7f7c145a836b00d113fbd868ea9fb73014c7ecdaf6ca72fb22_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SuluWebsiteBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 120,  396 => 119,  378 => 117,  364 => 116,  345 => 113,  339 => 111,  333 => 109,  331 => 108,  326 => 106,  323 => 105,  307 => 104,  295 => 98,  291 => 97,  287 => 96,  283 => 95,  279 => 94,  275 => 93,  271 => 92,  267 => 91,  263 => 90,  259 => 89,  255 => 88,  251 => 87,  247 => 86,  243 => 85,  239 => 84,  235 => 83,  231 => 82,  227 => 81,  220 => 76,  212 => 73,  206 => 71,  200 => 69,  198 => 68,  193 => 66,  190 => 65,  186 => 64,  179 => 59,  171 => 56,  165 => 54,  159 => 52,  157 => 51,  152 => 49,  149 => 48,  145 => 47,  140 => 44,  134 => 43,  123 => 38,  120 => 37,  114 => 36,  106 => 33,  101 => 30,  95 => 28,  93 => 27,  89 => 26,  84 => 23,  78 => 20,  74 => 18,  72 => 17,  67 => 15,  60 => 11,  56 => 9,  54 => 8,  51 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <img width="28" height="28" alt="Sulu" src="data:image/png;base64,{{ _self.logo_small }}" />*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Portal</b>*/
/*             <span>{{ collector.data('portal').name }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Webspace</b>*/
/*             <span>{{ collector.data('webspace').name }}</span>*/
/*         </div>*/
/*         {% if collector.data('structure') %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Structure</b>*/
/*             <span>{{ collector.data('structure').template }}</span>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Localization</b>*/
/*             <span>*/
/*                 {{ collector.data('localization') }}*/
/*                 {% if collector.data('structure') %}*/
/*                 ({{ collector.data('structure').shadowOn ? collector.data('structure').shadowBaseLanguage : 'no shadow' }})*/
/*                 {% endif %}*/
/*             </span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img height="40" width="40" src="data:imagebbng;base64,{{ _self.logo }}" alt="Sulu"></span>*/
/*     <strong>Sulu</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Webspace</h2>*/
/*     <table>*/
/*         <tbody>*/
/*             {% for field, value in collector.data('webspace') %}*/
/*             <tr>*/
/*                 <th>{{ field }}</th>*/
/*                 <td>*/
/*                 {% if value is iterable %}*/
/*                     {{ value|json_encode }}*/
/*                 {% else %}*/
/*                     {{ value }}*/
/*                 {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <h2>Portal</h2>*/
/*     <table>*/
/*         <tbody>*/
/*             {% for field, value in collector.data('portal') %}*/
/*             <tr>*/
/*                 <th>{{ field }}</th>*/
/*                 <td>*/
/*                 {% if value is iterable %}*/
/*                     {{ value|json_encode }}*/
/*                 {% else %}*/
/*                     {{ value }}*/
/*                 {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <h2>Structure</h2>*/
/*     <table>*/
/*         <tbody>*/
/*             {{ _self.table_row('id', collector.data('structure').id) }}*/
/*             {{ _self.table_row('path', collector.data('structure').path) }}*/
/*             {{ _self.table_row('nodeType', collector.data('structure').nodeType) }}*/
/*             {{ _self.table_row('internal', collector.data('structure').internal ? 'yes' : 'no') }}*/
/*             {{ _self.table_row('nodeState', collector.data('structure').nodeState) }}*/
/*             {{ _self.table_row('published', collector.data('structure').published.format('Y-m-d H:i:s')) }}*/
/*             {{ _self.table_row('nodeState', collector.data('structure').nodeState) }}*/
/*             {{ _self.table_row('navContexts', collector.data('structure').navContexts) }}*/
/*             {{ _self.table_row('enabledShadowLanguages', collector.data('structure').enabledShadowLanguages) }}*/
/*             {{ _self.table_row('concreteLanguages', collector.data('structure').concreteLanguages) }}*/
/*             {{ _self.table_row('shadowOn', collector.data('structure').shadowOn ? 'yes' : 'no') }}*/
/*             {{ _self.table_row('shadowBaseLanguage', collector.data('structure').shadowBaseLanguage) }}*/
/*             {{ _self.table_row('template', collector.data('structure').template) }}*/
/*             {{ _self.table_row('has children', collector.data('structure').hasSub ? 'yes' : 'no') }}*/
/*             {{ _self.table_row('creator', collector.data('structure').creator) }}*/
/*             {{ _self.table_row('changer', collector.data('structure').changer) }}*/
/*             {{ _self.table_row('created', collector.data('structure').created.format('Y-m-d H:i:s')) }}*/
/*             {{ _self.table_row('changed', collector.data('structure').changed.format('Y-m-d H:i:s')) }}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
/* {% macro table_row(field, value) %}*/
/*     <tr>*/
/*         <th>{{ field }}</th>*/
/*         <td>*/
/*         {% if value is iterable %}*/
/*             {{ value | json_encode }}*/
/*         {% else %}*/
/*             {{ value }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endmacro %}*/
/* */
/* {% macro logo() %}*/
/* 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{% endmacro %}*/
/* */
/* {% macro logo_small() %}*/
/*     iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAVlpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iPgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KTMInWQAAAXpQTFRFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQUFBQUFBQUFBQUFBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBAQEBAQEAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAgICAgICAwMDAwMD2crCeQAAAH10Uk5TAAECAwQFBgcICQoLDQ8REhQVFxkaHB0eHyAkJScoKSstLi80Njg7PD1AQkRFR0lLTE1OT1FSVFdYWVxdX2BiY2RmZ2lqbW5vcnN3eHl6fH1+f4CBgoOEhYaHiImKi42QkpOUlZaXmJmanp+goqOkpaeqrK6vsbK3xsnP4eh7/ATcAAABeklEQVQYGa3B+19LcRjA8c/zPN+zplBbTs19JSPp4pZLo5BhkrVyjrWaJqQpl9xv/7uzIXm91k95v+H/UWEb6ozmxDmaE3NEugbyQwhbiToi+87MLGx8mwVhkxqR5MiD6sKlzPLKjCFslRwuLD8a6/WYzPWU21A27c7cKhcvH20Bzq61daz4eEKD4i99fn+xg7pDL4+zt1ZpB6PO6F4rXg/C+1dP+YlSFuLheuUEmAAKd0doT5/LhcHGYwOd6j9WG3c0GMMFJWKJK9UUwu1RUqXARwCHXzpCiwpw7aGD7AQw+bwTBYU7owhIDAmycCFHnL5nSRRwDN7zcICj62kfp/PQOj+ACODorBxAUFWPwRdeen4X43OCEhEoFjx+K04frMa6X6dxNBi9b16FN/pTMcCWwsX9c3kQfhH2ZCbK629XZ8cyrekvnxZrSRx/CJH44fPTqx/ePfn64/sQjr/UlIbEyZvBxylQ/iFqzqhTUJoQ8zwBZTtiwk79BLe8M4hAwZOjAAAAAElFTkSuQmCC{% endmacro %}*/
/* */
