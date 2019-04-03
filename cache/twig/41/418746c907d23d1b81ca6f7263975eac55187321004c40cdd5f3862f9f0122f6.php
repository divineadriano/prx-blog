<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/menu.html.twig */
class __TwigTemplate_f3302e069118e74aca3058f3accd0f0ed303b7b3a3ef702505e3e86237410de5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        try {            // line 2
            $context["menu"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "menu", []), "instance", [0 => ($context["particle"] ?? null)], "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            echo "<div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["e"] ?? null), "getMessage", []), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
";
        // line 14
        echo "
";
        // line 23
        echo "
";
        // line 32
        echo "
";
        // line 84
        echo "
";
        // line 101
        echo "
";
        // line 109
        echo "
";
        // line 122
        echo "
";
        // line 123
        $context["macro"] = $this;
        // line 124
        echo "
";
        // line 125
        if ($this->getAttribute($this->getAttribute(($context["menu"] ?? null), "root", []), "count", [], "method")) {
            // line 126
            echo "<nav class=\"g-main-nav\" role=\"navigation\"";
            echo (($this->getAttribute(($context["particle"] ?? null), "mobileTarget", [])) ? (" data-g-mobile-target") : (""));
            echo " data-g-hover-expand=\"";
            echo (((($this->getAttribute(($context["particle"] ?? null), "hoverExpand", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "hoverExpand", []), "true")) : ("true"))) ? ("true") : ("false"));
            echo "\">
    <ul class=\"g-toplevel\">
        ";
            // line 128
            echo $context["macro"]->getdisplayItems($this->getAttribute(($context["menu"] ?? null), "root", []), ($context["menu"] ?? null), $context);
            echo "
    </ul>
</nav>
";
        }
    }

    // line 7
    public function getgetCustomWidth($__item__ = null, $__menu__ = null, $__mode__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "mode" => $__mode__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            if ((((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") &&  !((($context["dropdown_type"] ?? null) == "fullwidth") && ($this->getAttribute(($context["item"] ?? null), "level", []) > 1)))) {
                // line 9
                if ((($context["mode"] ?? null) == "item")) {
                    echo " style=\"position: relative;\"";
                } elseif ((                // line 10
($context["mode"] ?? null) == "submenu")) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo ";\" data-g-item-width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "width", []), "html", null, true);
                    echo "\"";
                }
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getdisplayParticle($__item__ = null, $__context__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "context" => $__context__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["context"] = twig_array_merge(($context["context"] ?? null), ["particle" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", [])]);
            // line 17
            echo "    ";
            $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "block", []), "class", []);
            // line 18
            echo "    <div class=\"menu-item-particle";
            echo twig_escape_filter($this->env, ((($context["classes"] ?? null)) ? ((" " . ($context["classes"] ?? null))) : ("")), "html", null, true);
            echo "\">
    ";
            // line 19
            try {
                $this->loadTemplate([0 => (("particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(($context["item"] ?? null), "particle", [])) . ".html.twig")], "@particles/menu.html.twig", 19)->display(                // line 20
($context["context"] ?? null));
            } catch (LoaderError $e) {
                // ignore missing template
            }

            // line 21
            echo "    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getdisplayTitle($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 25
            echo "    ";
            if (( !$this->getAttribute(($context["item"] ?? null), "icon_only", []) ||  !($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) {
                // line 26
                echo "        <span class=\"g-menu-item-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                echo "</span>
        ";
                // line 27
                if ($this->getAttribute(($context["item"] ?? null), "subtitle", [])) {
                    // line 28
                    echo "            <span class=\"g-menu-item-subtitle\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "subtitle", []), "html", null, true);
                    echo "</span>
        ";
                }
                // line 30
                echo "    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["self"] = $this;
            // line 35
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "type", []) == "particle") &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []))) {
                echo " 
        ";
                // line 36
                $context["enabled"] = 0;
                // line 37
                echo "    ";
            }
            // line 38
            echo "    ";
            if ((($this->getAttribute(($context["item"] ?? null), "visible", []) && $this->getAttribute(($context["item"] ?? null), "enabled", [])) && (((isset($context["enabled"]) || array_key_exists("enabled", $context))) ? (_twig_default_filter(($context["enabled"] ?? null), 1)) : (1)))) {
                // line 39
                echo "        ";
                $context["title"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) || $this->getAttribute(($context["item"] ?? null), "link_title", []))) ? (((" title=\"" . twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "link_title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "link_title", []), $this->getAttribute(($context["item"] ?? null), "title", []))) : ($this->getAttribute(($context["item"] ?? null), "title", []))))) . "\"")) : (""));
                // line 40
                echo "        ";
                $context["label"] = ((($this->getAttribute(($context["item"] ?? null), "icon_only", []) && ($this->getAttribute(($context["item"] ?? null), "image", []) || $this->getAttribute(($context["item"] ?? null), "icon", [])))) ? (((" aria-label=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []))) . "\"")) : (""));
                // line 41
                echo "        ";
                $context["active"] = (($this->getAttribute(($context["menu"] ?? null), "isActive", [0 => ($context["item"] ?? null)], "method")) ? (" active") : (""));
                // line 42
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute(($context["item"] ?? null), "level", []) == 1)) ? ((" g-" . $this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method"))) : (""));
                // line 43
                echo "        ";
                $context["parent"] = (($this->getAttribute(($context["item"] ?? null), "children", [])) ? (" g-parent") : (""));
                // line 44
                echo "        ";
                $context["target"] = (((($this->getAttribute(($context["item"] ?? null), "target", []) != "_self") || $this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", []), "forceTarget", []))) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "target", []))) . "\"")) : (""));
                // line 45
                echo "        ";
                $context["rel"] = (($this->getAttribute(($context["item"] ?? null), "rel", [])) ? (((" rel=\"" . twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "rel", []))) . "\"")) : (""));
                // line 46
                echo "
        <li class=\"g-menu-item g-menu-item-type-";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "type", []), "html", null, true);
                echo " g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
                if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                    echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
                }
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["dropdown"] ?? null), "html", null, true);
                echo " ";
                if (($this->getAttribute(($context["item"] ?? null), "url", []) && $this->getAttribute(($context["item"] ?? null), "children", []))) {
                    if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                        echo "g-menu-item-link-parent";
                    }
                }
                echo " ";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "class", []), "")) : ("")), "html", null, true);
                echo "\"";
                // line 48
                echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "item", ($context["dropdown"] ?? null));
                // line 49
                if ((($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["context"] ?? null), "particle", [], "any", false, true), "renderTitles", []), 0)) : (0))) {
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 50
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    echo "<a class=\"g-menu-item-container";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? ((" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", []))) : ("")), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "url", []), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "hash", []), "html", null, true);
                    echo "\"";
                    echo (((($context["title"] ?? null) . ($context["label"] ?? null)) . ($context["target"] ?? null)) . ($context["rel"] ?? null));
                    echo ">
            ";
                } else {
                    // line 51
                    echo "<div class=\"g-menu-item-container";
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "anchor_class", [])) ? ((" " . $this->getAttribute(($context["item"] ?? null), "anchor_class", []))) : ("")), "html", null, true);
                    echo "\" data-g-menuparent=\"\"";
                    echo ($context["label"] ?? null);
                    echo ">";
                }
                // line 52
                echo "                ";
                if ($this->getAttribute(($context["item"] ?? null), "image", [])) {
                    // line 53
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["item"] ?? null), "image", [])), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
                    echo "\" />
                ";
                } elseif ($this->getAttribute(                // line 54
($context["item"] ?? null), "icon", [])) {
                    // line 55
                    echo "                    <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "icon", []), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                ";
                }
                // line 57
                echo "                ";
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    // line 58
                    echo "                    <span class=\"g-menu-item-content\">
                        ";
                    // line 59
                    echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                    echo "
                    </span>
                    ";
                    // line 61
                    if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        // line 62
                        echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                    }
                    // line 64
                    echo "                ";
                } else {
                    // line 65
                    echo "                    ";
                    if (($this->getAttribute(($context["item"] ?? null), "type", []) == "particle")) {
                        // line 66
                        echo "                        ";
                        echo $context["self"]->getdisplayParticle(($context["item"] ?? null), ($context["context"] ?? null));
                        echo "
                    ";
                    } elseif (($this->getAttribute(                    // line 67
($context["item"] ?? null), "type", []) == "heading")) {
                        // line 68
                        echo "                        <span class=\"g-nav-header g-menu-item-content\"";
                        echo ($context["title"] ?? null);
                        echo ">";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "</span>
                    ";
                    } else {
                        // line 70
                        echo "                        <span class=\"g-separator g-menu-item-content\"";
                        echo ($context["title"] ?? null);
                        echo ">";
                        echo $context["self"]->getdisplayTitle(($context["item"] ?? null));
                        echo "</span>
                    ";
                    }
                    // line 72
                    echo "                        ";
                    if (($this->getAttribute(($context["item"] ?? null), "children", []) &&  !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", []))) {
                        // line 73
                        echo "<span class=\"g-menu-parent-indicator\"></span>";
                    }
                    // line 75
                    echo "                ";
                }
                // line 76
                echo "            ";
                if ($this->getAttribute(($context["item"] ?? null), "url", [])) {
                    echo "</a>
            ";
                } else {
                    // line 77
                    echo "</div>";
                }
                // line 78
                echo "            ";
                if ($this->getAttribute(($context["item"] ?? null), "children", [])) {
                    // line 79
                    echo $context["self"]->getdisplaySubmenu(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                }
                // line 81
                echo "        </li>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 86
            echo "    ";
            $context["self"] = $this;
            // line 87
            echo "    <div class=\"g-grid\">
        ";
            // line 88
            $context["groups"] = ((($this->getAttribute(($context["item"] ?? null), "getDropdown", [], "method") == "standard")) ? ([0 => ($context["item"] ?? null)]) : ($this->getAttribute(($context["item"] ?? null), "groups", [])));
            // line 89
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                // line 90
                echo "        <div class=\"g-block ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "columnWidth", [0 => $context["column"]], "method")]), "html", null, true);
                echo "\">
            <ul class=\"g-sublevel\">
                <li class=\"g-level-";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "level", []), "html", null, true);
                echo " g-go-back\">
                    <a class=\"g-menu-item-container\" href=\"#\" data-g-menuparent=\"\"><span>Back</span></a>
                </li>
                ";
                // line 95
                echo $context["self"]->getdisplayItems($context["items"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
            </ul>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    </div>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function getdisplayItems($__items__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 103
            echo "    ";
            $context["self"] = $this;
            // line 104
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 105
                echo "        ";
                if (($this->getAttribute($context["item"], "level", []) == 1)) {
                    $context["dropdown_type"] = $this->getAttribute($context["item"], "dropdown", []);
                }
                // line 106
                echo "        ";
                echo $context["self"]->getdisplayItem($context["item"], ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__context__ = null, $__dropdown_type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "menu" => $__menu__,
            "context" => $__context__,
            "dropdown_type" => $__dropdown_type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 111
            echo "    ";
            $context["self"] = $this;
            // line 112
            echo "    ";
            if ( !$this->getAttribute(($context["item"] ?? null), "dropdown_hide", [])) {
                // line 113
                echo "        ";
                $context["animation"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "gantry", [], "any", false, true), "config", [], "any", false, true), "get", [0 => "styles.menu.animation"], "method"), "g-fade")) : ("g-fade"));
                // line 114
                echo "        ";
                if (((((twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "groups", [])) == 1) && ( !($context["dropdown_type"] ?? null) == "fullwidth")) || (($context["dropdown_type"] ?? null) == "standard")) || (((($this->getAttribute(($context["item"] ?? null), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "width", []), "auto")) : ("auto")) != "auto") && (($context["dropdown_type"] ?? null) == "fullwidth")))) {
                    $context["dropdown_dir"] = ("g-dropdown-" . (($this->getAttribute(($context["item"] ?? null), "dropdown_dir", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "dropdown_dir", []), "right")) : ("right")));
                }
                // line 115
                echo "        <ul class=\"g-dropdown g-inactive ";
                echo twig_escape_filter($this->env, ($context["animation"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["dropdown_dir"] ?? null), "html", null, true);
                echo "\"";
                echo $context["self"]->getgetCustomWidth(($context["item"] ?? null), ($context["menu"] ?? null), "submenu", ($context["dropdown_type"] ?? null));
                echo ">
            <li class=\"g-dropdown-column\">
                ";
                // line 117
                echo $context["self"]->getdisplayContainers(($context["item"] ?? null), ($context["menu"] ?? null), ($context["context"] ?? null), ($context["dropdown_type"] ?? null));
                echo "
            </li>
        </ul>
    ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 117,  576 => 115,  571 => 114,  568 => 113,  565 => 112,  562 => 111,  547 => 110,  525 => 106,  520 => 105,  515 => 104,  512 => 103,  497 => 102,  481 => 99,  471 => 95,  465 => 92,  459 => 90,  454 => 89,  452 => 88,  449 => 87,  446 => 86,  431 => 85,  414 => 81,  411 => 79,  408 => 78,  405 => 77,  399 => 76,  396 => 75,  393 => 73,  390 => 72,  382 => 70,  374 => 68,  372 => 67,  367 => 66,  364 => 65,  361 => 64,  358 => 62,  356 => 61,  351 => 59,  348 => 58,  345 => 57,  339 => 55,  337 => 54,  330 => 53,  327 => 52,  320 => 51,  308 => 50,  300 => 49,  298 => 48,  280 => 47,  277 => 46,  274 => 45,  271 => 44,  268 => 43,  265 => 42,  262 => 41,  259 => 40,  256 => 39,  253 => 38,  250 => 37,  248 => 36,  243 => 35,  240 => 34,  225 => 33,  209 => 30,  203 => 28,  201 => 27,  196 => 26,  193 => 25,  181 => 24,  165 => 21,  159 => 20,  157 => 19,  152 => 18,  149 => 17,  146 => 16,  133 => 15,  111 => 10,  108 => 9,  106 => 8,  91 => 7,  82 => 128,  74 => 126,  72 => 125,  69 => 124,  67 => 123,  64 => 122,  61 => 109,  58 => 101,  55 => 84,  52 => 32,  49 => 23,  46 => 14,  43 => 6,  37 => 4,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% try %}
{% set menu = gantry.menu.instance(particle) %}
{% catch %}
<div class=\"alert alert-error\">{{ e.getMessage }}</div>
{% endtry %}

{% macro getCustomWidth(item, menu, mode, dropdown_type) -%}
    {%- if (item.width|default('auto') != 'auto') and not (dropdown_type == 'fullwidth' and item.level > 1) -%}
        {%- if mode == 'item' %} style=\"position: relative;\"
        {%- elseif mode == 'submenu' %} style=\"width:{{ item.width }};\" data-g-item-width=\"{{ item.width }}\"
        {%- endif %}
    {%- endif %}
{%- endmacro %}

{% macro displayParticle(item, context) %}
    {% set context = context|merge({ particle: item.options.particle }) %}
    {% set classes = item.options.block.class %}
    <div class=\"menu-item-particle{{ classes ? ' ' ~ classes }}\">
    {% include ['particles/' ~ item.particle ~ '.html.twig', '@particles/' ~ item.particle ~ '.html.twig']
    ignore missing with context only %}
    </div>
{% endmacro %}

{% macro displayTitle(item) %}
    {% if not item.icon_only or not (item.image or item.icon) %}
        <span class=\"g-menu-item-title\">{{ item.title }}</span>
        {% if item.subtitle %}
            <span class=\"g-menu-item-subtitle\">{{ item.subtitle }}</span>
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro displayItem(item, menu, context, dropdown_type) %}
    {% import _self as self %}
    {% if item.type == 'particle' and not item.options.particle.enabled %} 
        {% set enabled = 0 %}
    {% endif %}
    {% if item.visible and item.enabled and enabled|default(1) %}
        {% set title = item.icon_only or item.link_title ? ' title=\"' ~ item.link_title|default(item.title)|e ~ '\"' %}
        {% set label = item.icon_only and (item.image or item.icon) ? ' aria-label=\"' ~ item.title|e ~'\"' %}
        {% set active = menu.isActive(item) ? ' active' %}
        {% set dropdown = item.level == 1 ? ' g-' ~ item.getDropdown() %}
        {% set parent = item.children ? ' g-parent' %}
        {% set target = (item.target != '_self' or context.particle.forceTarget) ? ' target=\"' ~ item.target|e ~ '\"' %}
        {% set rel = item.rel ? ' rel=\"' ~ item.rel|e ~ '\"' %}

        <li class=\"g-menu-item g-menu-item-type-{{ item.type }} g-menu-item-{{ item.id }}{% if not item.dropdown_hide %}{{ parent }}{% endif %}{{ active }}{{ dropdown }} {% if item.url and item.children %}{% if not item.dropdown_hide %}g-menu-item-link-parent{% endif %}{% endif %} {{ item.class|default('') }}\"
                {{- self.getCustomWidth(item, menu, 'item', dropdown) }}
                {%- if context.particle.renderTitles|default(0) %} title=\"{{ item.title }}\"{% endif %}>
            {% if item.url %}<a class=\"g-menu-item-container{{ item.anchor_class ? ' ' ~ item.anchor_class }}\" href=\"{{ item.url }}{{ item.hash }}\"{{ (title ~ label ~ target ~ rel)|raw }}>
            {% else %}<div class=\"g-menu-item-container{{ item.anchor_class ? ' ' ~ item.anchor_class }}\" data-g-menuparent=\"\"{{ label|raw }}>{% endif %}
                {% if item.image %}
                    <img src=\"{{ url(item.image) }}\" alt=\"{{ item.title }}\" />
                {% elseif item.icon %}
                    <i class=\"{{ item.icon }}\" aria-hidden=\"true\"></i>
                {% endif %}
                {% if item.url %}
                    <span class=\"g-menu-item-content\">
                        {{ self.displayTitle(item) }}
                    </span>
                    {% if (item.children) and not item.dropdown_hide -%}
                        <span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>
                    {%- endif %}
                {% else %}
                    {% if item.type == 'particle' %}
                        {{ self.displayParticle(item, context) }}
                    {% elseif item.type == 'heading' %}
                        <span class=\"g-nav-header g-menu-item-content\"{{ title|raw }}>{{ self.displayTitle(item) }}</span>
                    {% else %}
                        <span class=\"g-separator g-menu-item-content\"{{ title|raw }}>{{ self.displayTitle(item) }}</span>
                    {% endif %}
                        {% if (item.children) and not item.dropdown_hide -%}
                            <span class=\"g-menu-parent-indicator\"></span>
                        {%- endif %}
                {% endif %}
            {% if item.url %}</a>
            {% else %}</div>{% endif %}
            {% if (item.children) -%}
                {{ self.displaySubmenu(item, menu, context, dropdown_type) }}
            {%- endif %}
        </li>
    {% endif %}
{% endmacro %}

{% macro displayContainers(item, menu, context, dropdown_type) %}
    {% import _self as self %}
    <div class=\"g-grid\">
        {% set groups = item.getDropdown() == 'standard' ? [item] : item.groups %}
        {% for column, items in groups %}
        <div class=\"g-block {{ item.columnWidth(column)|toGrid }}\">
            <ul class=\"g-sublevel\">
                <li class=\"g-level-{{ item.level }} g-go-back\">
                    <a class=\"g-menu-item-container\" href=\"#\" data-g-menuparent=\"\"><span>Back</span></a>
                </li>
                {{ self.displayItems(items, menu, context, dropdown_type) }}
            </ul>
        </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro displayItems(items, menu, context, dropdown_type) %}
    {% import _self as self %}
    {% for item in items %}
        {% if item.level == 1 %}{% set dropdown_type = item.dropdown %}{% endif %}
        {{ self.displayItem(item, menu, context, dropdown_type) }}
    {% endfor %}
{% endmacro %}

{% macro displaySubmenu(item, menu, context, dropdown_type) %}
    {% import _self as self %}
    {% if not item.dropdown_hide %}
        {% set animation = context.gantry.config.get('styles.menu.animation')|default('g-fade') %}
        {% if ((item.groups|length == 1 and not dropdown_type == 'fullwidth') or dropdown_type == 'standard') or (item.width|default('auto') != 'auto' and dropdown_type == 'fullwidth')%}{% set dropdown_dir = 'g-dropdown-' ~ item.dropdown_dir|default('right') %}{% endif %}
        <ul class=\"g-dropdown g-inactive {{ animation }} {{ dropdown_dir }}\"{{ self.getCustomWidth(item, menu, 'submenu', dropdown_type) }}>
            <li class=\"g-dropdown-column\">
                {{ self.displayContainers(item, menu, context, dropdown_type) }}
            </li>
        </ul>
    {% endif %}
{% endmacro %}

{% import _self as macro %}

{% if menu.root.count() %}
<nav class=\"g-main-nav\" role=\"navigation\"{{ particle.mobileTarget ? ' data-g-mobile-target' : '' }} data-g-hover-expand=\"{{ particle.hoverExpand|default('true') ? 'true': 'false' }}\">
    <ul class=\"g-toplevel\">
        {{ macro.displayItems(menu.root, menu, _context) }}
    </ul>
</nav>
{% endif %}
", "@particles/menu.html.twig", "C:\\grav\\grav-admin\\user\\plugins\\gantry5\\engines\\nucleus\\particles\\menu.html.twig");
    }
}
