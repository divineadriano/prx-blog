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

/* @particles/copyright.html.twig */
class __TwigTemplate_d926487a3ba09c6f13a38ad3aaa62a5ae1668544a6a40b020afec3b141de923b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/copyright.html.twig", 1);
        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["start_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", [])), [0 => "now", 1 => ""])) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "start", []))));
        // line 4
        $context["end_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", [])), [0 => "now", 1 => ""])) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "date", []), "end", []))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_particle($context, array $blocks = [])
    {
        // line 7
        echo "<div class=\"g-copyright ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", []), "class", []), "html", null, true);
        echo "\">
\tCopyright &copy;
\t";
        // line 9
        if ((($context["start_date"] ?? null) != ($context["end_date"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["start_date"] ?? null));
            echo " - ";
        }
        // line 10
        echo "\t";
        echo twig_escape_filter($this->env, ($context["end_date"] ?? null));
        echo "
\t";
        // line 11
        if ($this->getAttribute(($context["particle"] ?? null), "owner", [])) {
            echo "<a target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "target", []), "_blank")) : ("_blank")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "owner", []));
            echo "\">";
        }
        // line 12
        echo "\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "owner", []));
        echo "
\t";
        // line 13
        if ($this->getAttribute(($context["particle"] ?? null), "owner", [])) {
            echo "</a>";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  78 => 13,  73 => 12,  63 => 11,  58 => 10,  53 => 9,  47 => 7,  44 => 6,  40 => 1,  38 => 4,  36 => 3,  22 => 1,);
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

{% set start_date = particle.date.start|trim in ['now', ''] ? 'now'|date('Y') : particle.date.start|e %}
{% set end_date = particle.date.end|trim in ['now', ''] ? 'now'|date('Y') : particle.date.end|e %}

{% block particle %}
<div class=\"g-copyright {{ particle.css.class }}\">
\tCopyright &copy;
\t{% if (start_date != end_date) %}{{ start_date|e }} - {% endif %}
\t{{ end_date|e }}
\t{% if particle.owner %}<a target=\"{{ particle.target|default('_blank')|e }}\" href=\"{{ particle.link|e }}\" title=\"{{ particle.owner|e }}\">{% endif %}
\t\t{{ particle.owner|e }}
\t{% if particle.owner %}</a>{% endif %}
</div>
{% endblock %}
", "@particles/copyright.html.twig", "C:\\grav\\grav-admin\\user\\themes\\rt_requiem\\particles\\copyright.html.twig");
    }
}
