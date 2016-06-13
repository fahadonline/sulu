<?php

/* DoctrinePHPCRBundle:Collector:phpcr.html.twig */
class __TwigTemplate_24067d10ce4bd927afeb4f491ab2efed988bf9be83242096c19316766afd32be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'calls' => array($this, 'block_calls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5db8dd6832634deaa012e2cc3eafa561e009b571d584d557aaa82f9d9655424 = $this->env->getExtension("native_profiler");
        $__internal_e5db8dd6832634deaa012e2cc3eafa561e009b571d584d557aaa82f9d9655424->enter($__internal_e5db8dd6832634deaa012e2cc3eafa561e009b571d584d557aaa82f9d9655424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrinePHPCRBundle:Collector:phpcr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5db8dd6832634deaa012e2cc3eafa561e009b571d584d557aaa82f9d9655424->leave($__internal_e5db8dd6832634deaa012e2cc3eafa561e009b571d584d557aaa82f9d9655424_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03259b575854af93a4cb5437d412eae7a2d01dc528e8b40815260b58ed0705f4 = $this->env->getExtension("native_profiler");
        $__internal_03259b575854af93a4cb5437d412eae7a2d01dc528e8b40815260b58ed0705f4->enter($__internal_03259b575854af93a4cb5437d412eae7a2d01dc528e8b40815260b58ed0705f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()) > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>PHPCR Calls</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Call time</b>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 21)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_03259b575854af93a4cb5437d412eae7a2d01dc528e8b40815260b58ed0705f4->leave($__internal_03259b575854af93a4cb5437d412eae7a2d01dc528e8b40815260b58ed0705f4_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a9e8b20407e7055b4f42dd0d28fcf2501e62a31bef415187c9134446500cac2 = $this->env->getExtension("native_profiler");
        $__internal_2a9e8b20407e7055b4f42dd0d28fcf2501e62a31bef415187c9134446500cac2->enter($__internal_2a9e8b20407e7055b4f42dd0d28fcf2501e62a31bef415187c9134446500cac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 25
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>PHPCR</strong>
    <span class=\"count\">
        <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 30
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_2a9e8b20407e7055b4f42dd0d28fcf2501e62a31bef415187c9134446500cac2->leave($__internal_2a9e8b20407e7055b4f42dd0d28fcf2501e62a31bef415187c9134446500cac2_prof);

    }

    // line 35
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8bb56b47e4ea94b6f8c859d56dcaa566927c907ac863eb0d10ff552e6b9429f4 = $this->env->getExtension("native_profiler");
        $__internal_8bb56b47e4ea94b6f8c859d56dcaa566927c907ac863eb0d10ff552e6b9429f4->enter($__internal_8bb56b47e4ea94b6f8c859d56dcaa566927c907ac863eb0d10ff552e6b9429f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 36
        echo "    ";
        $this->displayBlock("calls", $context, $blocks);
        echo "
";
        
        $__internal_8bb56b47e4ea94b6f8c859d56dcaa566927c907ac863eb0d10ff552e6b9429f4->leave($__internal_8bb56b47e4ea94b6f8c859d56dcaa566927c907ac863eb0d10ff552e6b9429f4_prof);

    }

    // line 39
    public function block_calls($context, array $blocks = array())
    {
        $__internal_8d7b009ec599f5489c1ce26f1b2df344375b96e241fbb088e29f404853716d9c = $this->env->getExtension("native_profiler");
        $__internal_8d7b009ec599f5489c1ce26f1b2df344375b96e241fbb088e29f404853716d9c->enter($__internal_8d7b009ec599f5489c1ce26f1b2df344375b96e241fbb088e29f404853716d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calls"));

        // line 40
        echo "    <h2>Calls</h2>

    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()));
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
        foreach ($context['_seq'] as $context["connection"] => $context["calls"]) {
            // line 43
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
            echo "</em></h3>
        ";
            // line 44
            if (twig_test_empty($context["calls"])) {
                // line 45
                echo "            <p>
                <em>No calls.</em>
            </p>
        ";
            } else {
                // line 49
                echo "            <table class=\"alt\" id=\"callsPlaceholder-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                <thead>
                <tr>
                    <th onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                    <th onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["calls"]);
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
                foreach ($context['_seq'] as $context["i"] => $context["call"]) {
                    // line 59
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                    echo "\">
                        <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 61
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["call"], "executionMS", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            <code id=\"code-";
                    // line 63
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 64
                    echo $this->getAttribute($context["call"], "method", array());
                    echo "
                            </code>
                            <small>
                                <strong>Method</strong>: ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($context["call"], "method", array())), "html", null, true);
                    echo " <br />
                                <strong>Parameters</strong>: ";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($context["call"], "params", array())), "html", null, true);
                    echo " <br />
                                <strong>Environment</strong>: ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($context["call"], "env", array())), "html", null, true);
                    echo " <br />
                            </small>
                        </td>
                    </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                </tbody>
            </table>
        ";
            }
            // line 77
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['calls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
    <h2>Database Connections</h2>

    ";
        // line 81
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())) {
            // line 82
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 82)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "connections", array())));
            // line 83
            echo "    ";
        } else {
            // line 84
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 88
        echo "
    <h2>Document Managers</h2>

    ";
        // line 91
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())) {
            // line 92
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:table.html.twig", "DoctrinePHPCRBundle:Collector:phpcr.html.twig", 92)->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "managers", array())));
            // line 93
            echo "    ";
        } else {
            // line 94
            echo "        <p>
            <em>No document managers.</em>
        </p>
    ";
        }
        // line 98
        echo "
    <h2>Mapping</h2>

    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "documents", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 102
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
            echo "</em></h3>
        ";
            // line 103
            if (twig_test_empty($context["classes"])) {
                // line 104
                echo "            <p><em>No loaded documents.</em></p>
        ";
            } else {
                // line 106
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 114
                    echo "                    <tr>
                        <td>";
                    // line 115
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "                </tbody>
            </table>
        ";
            }
            // line 121
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandCall(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                callsParameters = document.getElementById('original-call' + targetId);

            if (callsParameters.style.display != 'none') {
                callsParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable call';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';
            }

            return false;
        }

        function toggleRunnableCall(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-call', ''),
                targetElement = document.getElementById(target.getAttribute('target-data-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable call';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable call';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
        
        $__internal_8d7b009ec599f5489c1ce26f1b2df344375b96e241fbb088e29f404853716d9c->leave($__internal_8d7b009ec599f5489c1ce26f1b2df344375b96e241fbb088e29f404853716d9c_prof);

    }

    public function getTemplateName()
    {
        return "DoctrinePHPCRBundle:Collector:phpcr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 122,  382 => 121,  377 => 118,  368 => 115,  365 => 114,  361 => 113,  352 => 106,  348 => 104,  346 => 103,  341 => 102,  337 => 101,  332 => 98,  326 => 94,  323 => 93,  320 => 92,  318 => 91,  313 => 88,  307 => 84,  304 => 83,  301 => 82,  299 => 81,  294 => 78,  280 => 77,  275 => 74,  256 => 69,  252 => 68,  248 => 67,  242 => 64,  236 => 63,  231 => 61,  227 => 60,  218 => 59,  201 => 58,  197 => 57,  190 => 53,  186 => 52,  179 => 49,  173 => 45,  171 => 44,  166 => 43,  149 => 42,  145 => 40,  139 => 39,  129 => 36,  123 => 35,  112 => 30,  108 => 29,  102 => 25,  96 => 24,  88 => 21,  82 => 18,  75 => 14,  71 => 12,  68 => 11,  65 => 10,  59 => 8,  57 => 7,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*         <img width="20" height="28" alt="Database" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC" />*/
/*         <span class="sf-toolbar-status{% if 50 < collector.callcount %} sf-toolbar-status-yellow{% endif %}">{{ collector.callcount }}</span>*/
/*         {% if collector.callcount > 0 %}*/
/*             <span class="sf-toolbar-info-piece-additional-detail">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>PHPCR Calls</b>*/
/*             <span>{{ collector.callcount }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Call time</b>*/
/*             <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>*/
/*         </div>*/
/*     {% endset %}*/
/*     {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==" alt="" /></span>*/
/*     <strong>PHPCR</strong>*/
/*     <span class="count">*/
/*         <span>{{ collector.callcount }}</span>*/
/*         <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>*/
/*     </span>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ block('calls') }}*/
/* {% endblock %}*/
/* */
/* {% block calls %}*/
/*     <h2>Calls</h2>*/
/* */
/*     {% for connection, calls in collector.calls %}*/
/*         <h3>Connection <em>{{ connection }}</em></h3>*/
/*         {% if calls is empty %}*/
/*             <p>*/
/*                 <em>No calls.</em>*/
/*             </p>*/
/*         {% else %}*/
/*             <table class="alt" id="callsPlaceholder-{{ loop.index }}">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th onclick="javascript:sortTable(this, 0, 'queries-{{ loop.index }}')" data-sort-direction="-1" style="cursor: pointer;">#<span>&#9650;</span></th>*/
/*                     <th onclick="javascript:sortTable(this, 1, 'queries-{{ loop.index }}')" style="cursor: pointer;">Time<span></span></th>*/
/*                     <th style="width: 100%;">Info</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody id="queries-{{ loop.index }}">*/
/*                 {% for i, call in calls %}*/
/*                     <tr id="queryNo-{{ i }}-{{ loop.parent.loop.index }}" class="{{ cycle(['odd', 'even'], i) }}">*/
/*                         <td>{{ loop.index }}</td>*/
/*                         <td>{{ '%0.2f'|format(call.executionMS * 1000) }}&nbsp;ms</td>*/
/*                         <td>*/
/*                             <code id="code-{{ i }}-{{ loop.parent.loop.index }}">*/
/*                                 {{ call.method|raw }}*/
/*                             </code>*/
/*                             <small>*/
/*                                 <strong>Method</strong>: {{ call.method|yaml_encode }} <br />*/
/*                                 <strong>Parameters</strong>: {{ call.params|yaml_encode }} <br />*/
/*                                 <strong>Environment</strong>: {{ call.env|yaml_encode }} <br />*/
/*                             </small>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <h2>Database Connections</h2>*/
/* */
/*     {% if collector.connections %}*/
/*         {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.connections} only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No connections.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Document Managers</h2>*/
/* */
/*     {% if collector.managers %}*/
/*         {% include 'WebProfilerBundle:Profiler:table.html.twig' with {data: collector.managers} only %}*/
/*     {% else %}*/
/*         <p>*/
/*             <em>No document managers.</em>*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     <h2>Mapping</h2>*/
/* */
/*     {% for manager, classes in collector.documents %}*/
/*         <h3>Manager <em>{{ manager }}</em></h3>*/
/*         {% if classes is empty %}*/
/*             <p><em>No loaded documents.</em></p>*/
/*         {% else %}*/
/*             <table>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th scope="col">Class</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for class in classes %}*/
/*                     <tr>*/
/*                         <td>{{ class }}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script type="text/javascript">//<![CDATA[*/
/*         function explain(link) {*/
/*             "use strict";*/
/* */
/*             var imgs = link.children,*/
/*                 target = link.getAttribute('data-target-id');*/
/* */
/*             Sfjs.toggle(target, imgs[0], imgs[1])*/
/*                 .load(*/
/*                     target,*/
/*                     link.href,*/
/*                     null,*/
/*                     function(xhr, el) {*/
/*                         el.innerHTML = 'An error occurred while loading the details';*/
/*                         Sfjs.removeClass(el, 'loading');*/
/*                     }*/
/*                 );*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function expandCall(link) {*/
/*             var sections = link.children,*/
/*                 target = link.getAttribute('data-target-id'),*/
/*                 targetId = target.replace('code', ''),*/
/*                 callsParameters = document.getElementById('original-call' + targetId);*/
/* */
/*             if (callsParameters.style.display != 'none') {*/
/*                 callsParameters.style.display = 'none';*/
/*                 document.getElementById('small' + target).style.display = 'inline';*/
/*                 document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable call';*/
/*             }*/
/* */
/*             if (document.getElementById('small' + target).style.display != 'none') {*/
/*                 document.getElementById('small' + target).style.display = 'none';*/
/*                 document.getElementById(target).style.display = 'inline';*/
/* */
/*                 sections[0].style.display = 'none';*/
/*                 sections[1].style.display = 'inline';*/
/*                 sections[2].style.display = 'inline';*/
/*             } else {*/
/*                 document.getElementById('small' + target).style.display = 'inline';*/
/*                 document.getElementById(target).style.display = 'none';*/
/* */
/*                 sections[0].style.display = 'inline';*/
/*                 sections[1].style.display = 'none';*/
/*                 sections[2].style.display = 'none';*/
/*             }*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function toggleRunnableCall(target) {*/
/*             var targetId = target.getAttribute('target-data-id').replace('original-call', ''),*/
/*                 targetElement = document.getElementById(target.getAttribute('target-data-id')),*/
/*                 elem;*/
/* */
/*             if (targetElement.style.display != 'block') {*/
/*                 targetElement.style.display = 'block';*/
/*                 target.innerHTML = 'Hide runnable call';*/
/* */
/*                 document.getElementById('smallcode' + targetId).style.display = 'none';*/
/*                 document.getElementById('code' + targetId).style.display = 'none';*/
/* */
/*                 elem = document.getElementById('code' + targetId).parentElement.children[0];*/
/* */
/*                 elem.children[0].style.display = 'inline';*/
/*                 elem.children[1].style.display = 'none';*/
/*                 elem.children[2].style.display = 'none';*/
/* */
/*             } else {*/
/*                 targetElement.style.display = 'none';*/
/*                 target.innerHTML = 'Display runnable call';*/
/* */
/*                 document.getElementById('smallcode' + targetId).style.display = 'inline';*/
/*             }*/
/*         }*/
/* */
/*         function sortTable(header, column, targetId) {*/
/*             "use strict";*/
/* */
/*             var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,*/
/*                 items = [],*/
/*                 target = document.getElementById(targetId),*/
/*                 rows = target.children,*/
/*                 headers = header.parentElement.children,*/
/*                 i;*/
/* */
/*             for (i = 0; i < rows.length; ++i) {*/
/*                 items.push(rows[i]);*/
/*             }*/
/* */
/*             for (i = 0; i < headers.length; ++i) {*/
/*                 headers[i].removeAttribute('data-sort-direction');*/
/*                 if (headers[i].children.length > 0) {*/
/*                     headers[i].children[0].innerHTML = '';*/
/*                 }*/
/*             }*/
/* */
/*             header.setAttribute('data-sort-direction', (-1*direction).toString());*/
/*             header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';*/
/* */
/*             items.sort(function(a, b) {*/
/*                 return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));*/
/*             });*/
/* */
/*             for (i = 0; i < items.length; ++i) {*/
/*                 Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');*/
/*                 Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');*/
/*                 target.appendChild(items[i]);*/
/*             }*/
/*         }*/
/* */
/*     //]]></script>*/
/* */
/*     <style>*/
/*         h3 {*/
/*             margin-bottom: 0px;*/
/*         }*/
/* */
/*         code {*/
/*             display: none;*/
/*         }*/
/* */
/*         code pre {*/
/*             padding: 5px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
