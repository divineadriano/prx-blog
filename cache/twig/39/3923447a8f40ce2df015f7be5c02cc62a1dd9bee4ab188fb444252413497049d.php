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

/* @particles/promocontent.html.twig */
class __TwigTemplate_eb2e7321c674d6d196e1dc289388141159263d5ddc43f021c7a237c1887637ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/promocontent.html.twig", 1);
        $this->blocks = [
            'particle' => [$this, 'block_particle'],
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
\t";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            // line 6
            echo "\t<h2 class=\"g-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", []));
            echo "</h2>
\t";
        }
        // line 8
        echo "
\t<div class=\"g-promocontent ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
\t\t";
        // line 10
        ob_start();
        // line 11
        echo "\t\t\t";
        if (($this->getAttribute(($context["particle"] ?? null), "link", []) && ($this->getAttribute(($context["particle"] ?? null), "linkstyle", []) == "inline"))) {
            // line 12
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "readmoreclass", []));
            echo "\">";
            echo $this->getAttribute(($context["particle"] ?? null), "readmore", []);
            echo "</a>
\t\t\t";
        }
        // line 14
        echo "\t\t";
        $context["readmoreInline"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "\t\t";
        if (($this->getAttribute(($context["particle"] ?? null), "link", []) && ($this->getAttribute(($context["particle"] ?? null), "linkstyle", []) == "aside"))) {
            // line 16
            echo "\t\t<div class=\"g-inline-action-content\"><div class=\"g-inline-action-text\">
\t\t";
        }
        // line 18
        echo "
\t\t";
        // line 19
        if ($this->getAttribute(($context["particle"] ?? null), "tags", [])) {
            // line 20
            echo "\t\t<ul class=\"g-tags\">
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "tags", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 22
                echo "\t\t\t<li>
\t\t\t\t";
                // line 23
                if ($this->getAttribute($context["tag"], "link", [])) {
                    // line 24
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "link", []));
                    echo "\">
\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["tag"], "icon", [])) {
                    // line 27
                    echo "\t\t\t\t\t<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "icon", []));
                    echo "\"></i>
\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "text", []));
                echo "
\t\t\t\t";
                // line 30
                if ($this->getAttribute($context["tag"], "link", [])) {
                    // line 31
                    echo "\t\t\t\t</a>
\t\t\t\t";
                }
                // line 33
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t</ul>
\t\t";
        }
        // line 37
        echo "
\t\t";
        // line 38
        if ((($this->getAttribute(($context["particle"] ?? null), "promostyle", []) == "standard") && $this->getAttribute(($context["particle"] ?? null), "title", []))) {
            // line 39
            echo "\t\t<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "promo", []);
            echo "</h2>
\t\t";
            // line 40
            echo twig_escape_filter($this->env, ($context["readmoreInline"] ?? null), "html", null, true);
            echo "
\t\t";
        }
        // line 42
        echo "
\t\t";
        // line 43
        if (($this->getAttribute(($context["particle"] ?? null), "promostyle", []) == "promo")) {
            // line 44
            echo "\t\t<div class=\"g-promo\">";
            echo $this->getAttribute(($context["particle"] ?? null), "promo", []);
            echo "</div>
\t\t";
            // line 45
            echo twig_escape_filter($this->env, ($context["readmoreInline"] ?? null), "html", null, true);
            echo "
\t\t";
        }
        // line 47
        echo "
\t\t";
        // line 48
        if (($this->getAttribute(($context["particle"] ?? null), "promostyle", []) == "superpromo")) {
            // line 49
            echo "\t\t<h2 class=\"g-superpromo\">
\t\t\t";
            // line 50
            if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
                // line 51
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
                echo "\">
\t\t\t";
            }
            // line 53
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["particle"] ?? null), "promo", []);
            echo "
\t\t\t";
            // line 54
            if ($this->getAttribute(($context["particle"] ?? null), "link", [])) {
                // line 55
                echo "\t\t\t</a>
\t\t\t";
            }
            // line 57
            echo "\t\t</h2>
\t\t";
            // line 58
            echo twig_escape_filter($this->env, ($context["readmoreInline"] ?? null), "html", null, true);
            echo "
\t\t";
        }
        // line 60
        echo "
\t\t";
        // line 61
        if (($this->getAttribute(($context["particle"] ?? null), "promostyle", []) == "subpromo")) {
            // line 62
            echo "\t\t<div class=\"g-subpromo\">
\t\t\t<span>";
            // line 63
            echo $this->getAttribute(($context["particle"] ?? null), "promo", []);
            echo "</span>
\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, ($context["readmoreInline"] ?? null), "html", null, true);
            echo "
\t\t</div>
\t\t";
        }
        // line 67
        echo "
\t\t";
        // line 68
        if ((($this->getAttribute(($context["particle"] ?? null), "desc", []) || $this->getAttribute(($context["particle"] ?? null), "desc2", [])) || $this->getAttribute(($context["particle"] ?? null), "regularlinktext", []))) {
            // line 69
            echo "\t\t<div class=\"g-promocontent-desc-wrapper\">
\t\t\t";
            // line 70
            if (($this->getAttribute(($context["particle"] ?? null), "desc", []) || $this->getAttribute(($context["particle"] ?? null), "desc2", []))) {
                // line 71
                echo "\t\t\t\t";
                if (($this->getAttribute(($context["particle"] ?? null), "descanimation", []) == "typewriter")) {
                    // line 72
                    echo "\t\t\t\t\t<span class=\"g-textpromo g-textpromo-typed ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animationElementID", []));
                    echo "\">
\t\t\t\t\t\t";
                    // line 73
                    if ($this->getAttribute(($context["particle"] ?? null), "desc", [])) {
                        echo $this->getAttribute(($context["particle"] ?? null), "desc", []);
                    }
                    // line 74
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute(($context["particle"] ?? null), "desc2", [])) {
                        echo $this->getAttribute(($context["particle"] ?? null), "desc2", []);
                    }
                    // line 75
                    echo "\t\t\t\t\t</span>
\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t\t<span class=\"g-textpromo\">
\t\t\t\t\t\t";
                    // line 78
                    if ($this->getAttribute(($context["particle"] ?? null), "desc", [])) {
                        echo $this->getAttribute(($context["particle"] ?? null), "desc", []);
                    }
                    // line 79
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute(($context["particle"] ?? null), "desc2", [])) {
                        echo $this->getAttribute(($context["particle"] ?? null), "desc2", []);
                    }
                    // line 80
                    echo "\t\t\t\t\t</span>
\t\t\t\t";
                }
                // line 82
                echo "\t\t\t";
            }
            // line 83
            echo "\t\t</div>
\t\t<div>
\t\t\t";
            // line 85
            if ($this->getAttribute(($context["particle"] ?? null), "regularlinktext", [])) {
                // line 86
                echo "\t\t\t<a class=\"g-readon\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "regularlinkurl", []));
                echo "\">";
                echo $this->getAttribute(($context["particle"] ?? null), "regularlinktext", []);
                echo "</a>
\t\t\t";
            }
            // line 88
            echo "\t\t</div>
\t\t";
        }
        // line 90
        echo "
\t\t";
        // line 91
        if (($this->getAttribute(($context["particle"] ?? null), "link", []) && ($this->getAttribute(($context["particle"] ?? null), "linkstyle", []) == "aside"))) {
            // line 92
            echo "\t\t</div>
\t\t<div class=\"g-inline-action-button\">
\t\t";
        }
        // line 95
        echo "
\t\t";
        // line 96
        if (($this->getAttribute(($context["particle"] ?? null), "link", []) && (($this->getAttribute(($context["particle"] ?? null), "linkstyle", []) == "block") || ($this->getAttribute(($context["particle"] ?? null), "linkstyle", []) == "aside")))) {
            // line 97
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" class=\"button ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "readmoreclass", []));
            echo "\">";
            echo $this->getAttribute(($context["particle"] ?? null), "readmore", []);
            echo "</a>
\t\t";
        }
        // line 99
        echo "
\t\t";
        // line 100
        if (($this->getAttribute(($context["particle"] ?? null), "link", []) && ($this->getAttribute(($context["particle"] ?? null), "linkstyle", []) == "aside"))) {
            // line 101
            echo "\t\t</div></div>
\t\t";
        }
        // line 103
        echo "\t</div>

  ";
        // line 105
        if (($this->getAttribute(($context["particle"] ?? null), "descanimation", []) == "typewriter")) {
            // line 106
            echo "  \t<script>
  \t    jQuery(function(){
  \t        jQuery(\".g-textpromo-typed.";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "animationElementID", []));
            echo "\").typed({
  \t            strings: [";
            // line 109
            if ($this->getAttribute(($context["particle"] ?? null), "desc", [])) {
                echo "'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "desc", []), "js"), "html", null, true);
                echo "'";
            }
            echo " ";
            if ($this->getAttribute(($context["particle"] ?? null), "desc2", [])) {
                echo ", '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "desc2", []), "js"), "html", null, true);
                echo "'";
            }
            echo "],
  \t            typeSpeed: 0,
  \t            preStringTyped: function() {
  \t            \tjQuery(\".g-textpromo-typed\").css('visibility', 'visible');
  \t            }
  \t        });
  \t    });
  \t</script>
  ";
        }
        // line 118
        echo "
";
    }

    // line 121
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 122
        echo "  ";
        if (($this->getAttribute(($context["particle"] ?? null), "descanimation", []) == "typewriter")) {
            // line 123
            echo "    ";
            $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
            // line 124
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/typewriter.js"), "html", null, true);
            echo "\"></script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/promocontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 124,  372 => 123,  369 => 122,  366 => 121,  361 => 118,  339 => 109,  335 => 108,  331 => 106,  329 => 105,  325 => 103,  321 => 101,  319 => 100,  316 => 99,  306 => 97,  304 => 96,  301 => 95,  296 => 92,  294 => 91,  291 => 90,  287 => 88,  279 => 86,  277 => 85,  273 => 83,  270 => 82,  266 => 80,  261 => 79,  257 => 78,  254 => 77,  250 => 75,  245 => 74,  241 => 73,  236 => 72,  233 => 71,  231 => 70,  228 => 69,  226 => 68,  223 => 67,  217 => 64,  213 => 63,  210 => 62,  208 => 61,  205 => 60,  200 => 58,  197 => 57,  193 => 55,  191 => 54,  186 => 53,  180 => 51,  178 => 50,  175 => 49,  173 => 48,  170 => 47,  165 => 45,  160 => 44,  158 => 43,  155 => 42,  150 => 40,  145 => 39,  143 => 38,  140 => 37,  136 => 35,  129 => 33,  125 => 31,  123 => 30,  118 => 29,  112 => 27,  109 => 26,  103 => 24,  101 => 23,  98 => 22,  94 => 21,  91 => 20,  89 => 19,  86 => 18,  82 => 16,  79 => 15,  76 => 14,  66 => 12,  63 => 11,  61 => 10,  57 => 9,  54 => 8,  48 => 6,  46 => 5,  43 => 4,  40 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}

\t{% if particle.title %}
\t<h2 class=\"g-title\">{{ particle.title|e }}</h2>
\t{% endif %}

\t<div class=\"g-promocontent {{ particle.class|e }}\">
\t\t{% set readmoreInline %}
\t\t\t{% if particle.link and particle.linkstyle == 'inline' %}
\t\t\t<a href=\"{{ particle.link|e }}\" class=\"button {{ particle.readmoreclass|e }}\">{{ particle.readmore|raw }}</a>
\t\t\t{% endif %}
\t\t{% endset %}
\t\t{% if particle.link and particle.linkstyle == 'aside' %}
\t\t<div class=\"g-inline-action-content\"><div class=\"g-inline-action-text\">
\t\t{% endif %}

\t\t{% if particle.tags %}
\t\t<ul class=\"g-tags\">
\t\t{% for tag in particle.tags %}
\t\t\t<li>
\t\t\t\t{% if tag.link %}
\t\t\t\t<a href=\"{{ tag.link|e }}\">
\t\t\t\t{% endif %}
\t\t\t\t\t{% if tag.icon %}
\t\t\t\t\t<i class=\"{{ tag.icon|e }}\"></i>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ tag.text|e }}
\t\t\t\t{% if tag.link %}
\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t{% endfor %}
\t\t</ul>
\t\t{% endif %}

\t\t{% if particle.promostyle == 'standard' and particle.title %}
\t\t<h2 class=\"g-title\">{{ particle.promo|raw }}</h2>
\t\t{{ readmoreInline }}
\t\t{% endif %}

\t\t{% if particle.promostyle == 'promo' %}
\t\t<div class=\"g-promo\">{{ particle.promo|raw }}</div>
\t\t{{ readmoreInline }}
\t\t{% endif %}

\t\t{% if particle.promostyle == 'superpromo' %}
\t\t<h2 class=\"g-superpromo\">
\t\t\t{% if particle.link %}
\t\t\t<a href=\"{{ particle.link|e }}\">
\t\t\t{% endif %}
\t\t\t\t{{ particle.promo|raw }}
\t\t\t{% if particle.link %}
\t\t\t</a>
\t\t\t{% endif %}
\t\t</h2>
\t\t{{ readmoreInline }}
\t\t{% endif %}

\t\t{% if particle.promostyle == 'subpromo' %}
\t\t<div class=\"g-subpromo\">
\t\t\t<span>{{ particle.promo|raw }}</span>
\t\t\t{{ readmoreInline }}
\t\t</div>
\t\t{% endif %}

\t\t{% if particle.desc or particle.desc2 or particle.regularlinktext %}
\t\t<div class=\"g-promocontent-desc-wrapper\">
\t\t\t{% if particle.desc or particle.desc2 %}
\t\t\t\t{% if particle.descanimation == 'typewriter' %}
\t\t\t\t\t<span class=\"g-textpromo g-textpromo-typed {{ particle.animationElementID|e }}\">
\t\t\t\t\t\t{% if particle.desc %}{{ particle.desc|raw }}{% endif %}
\t\t\t\t\t\t{% if particle.desc2 %}{{ particle.desc2|raw }}{% endif %}
\t\t\t\t\t</span>
\t\t\t\t{% else %}
\t\t\t\t\t<span class=\"g-textpromo\">
\t\t\t\t\t\t{% if particle.desc %}{{ particle.desc|raw }}{% endif %}
\t\t\t\t\t\t{% if particle.desc2 %}{{ particle.desc2|raw }}{% endif %}
\t\t\t\t\t</span>
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t</div>
\t\t<div>
\t\t\t{% if particle.regularlinktext %}
\t\t\t<a class=\"g-readon\" href=\"{{ particle.regularlinkurl|e }}\">{{ particle.regularlinktext|raw }}</a>
\t\t\t{% endif %}
\t\t</div>
\t\t{% endif %}

\t\t{% if particle.link and particle.linkstyle == 'aside' %}
\t\t</div>
\t\t<div class=\"g-inline-action-button\">
\t\t{% endif %}

\t\t{% if particle.link and (particle.linkstyle == 'block' or particle.linkstyle == 'aside') %}
\t\t<a href=\"{{ particle.link|e }}\" class=\"button {{ particle.readmoreclass|e }}\">{{ particle.readmore|raw }}</a>
\t\t{% endif %}

\t\t{% if particle.link and particle.linkstyle == 'aside' %}
\t\t</div></div>
\t\t{% endif %}
\t</div>

  {% if particle.descanimation == 'typewriter' %}
  \t<script>
  \t    jQuery(function(){
  \t        jQuery(\".g-textpromo-typed.{{ particle.animationElementID|e }}\").typed({
  \t            strings: [{% if particle.desc %}'{{ particle.desc|e('js') }}'{% endif %} {% if particle.desc2 %}, '{{ particle.desc2|e('js') }}'{% endif %}],
  \t            typeSpeed: 0,
  \t            preStringTyped: function() {
  \t            \tjQuery(\".g-textpromo-typed\").css('visibility', 'visible');
  \t            }
  \t        });
  \t    });
  \t</script>
  {% endif %}

{% endblock %}

{% block javascript_footer %}
  {% if particle.descanimation == 'typewriter' %}
    {% do gantry.load('jquery') %}
    <script src=\"{{ url('gantry-theme://js/typewriter.js') }}\"></script>
  {% endif %}
{% endblock %}
", "@particles/promocontent.html.twig", "C:\\grav\\grav-admin\\user\\themes\\rt_requiem\\particles\\promocontent.html.twig");
    }
}
