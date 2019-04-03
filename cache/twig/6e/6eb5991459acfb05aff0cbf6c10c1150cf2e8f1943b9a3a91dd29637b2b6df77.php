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

/* @particles/newsletter.html.twig */
class __TwigTemplate_587e5f70aa9b55eb7e7e9777dad9f5e0d37eed612f4d64bbe443a392f019af08 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsletter.html.twig", 1);
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
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 6
        echo "
\t<div class=\"g-newsletter ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
\t\t";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "headtext", [])) {
            echo "<div class=\"g-newsletter-headtext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "headtext", []);
            echo "</div>";
        }
        // line 9
        echo "\t\t<form class=\"g-newsletter-form\" action=\"//feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('//feedburner.google.com/fb/a/mailverify?uri=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "uri", []));
        echo "', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">
\t\t\t<input class=\"g-newsletter-inputbox\" type=\"text\" placeholder=\"";
        // line 10
        echo $this->getAttribute(($context["particle"] ?? null), "inputboxtext", []);
        echo "\" name=\"email\">
\t\t\t<input type=\"hidden\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "uri", []));
        echo "\" name=\"uri\">
\t\t\t<input type=\"hidden\" name=\"loc\" value=\"en_US\">
\t\t\t<input type=\"submit\" name=\"Submit\" class=\"g-newsletter-button button ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", []));
        echo "\" value=\"";
        echo $this->getAttribute(($context["particle"] ?? null), "buttontext", []);
        echo "\">
\t\t</form>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  73 => 11,  69 => 10,  64 => 9,  58 => 8,  54 => 7,  51 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 1,);
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

\t{% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

\t<div class=\"g-newsletter {{ particle.class|e }}\">
\t\t{% if particle.headtext %}<div class=\"g-newsletter-headtext\">{{ particle.headtext|raw }}</div>{% endif %}
\t\t<form class=\"g-newsletter-form\" action=\"//feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('//feedburner.google.com/fb/a/mailverify?uri={{ particle.uri|e }}', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">
\t\t\t<input class=\"g-newsletter-inputbox\" type=\"text\" placeholder=\"{{ particle.inputboxtext|raw }}\" name=\"email\">
\t\t\t<input type=\"hidden\" value=\"{{ particle.uri|e }}\" name=\"uri\">
\t\t\t<input type=\"hidden\" name=\"loc\" value=\"en_US\">
\t\t\t<input type=\"submit\" name=\"Submit\" class=\"g-newsletter-button button {{ particle.buttonclass|e }}\" value=\"{{ particle.buttontext|raw }}\">
\t\t</form>
\t</div>

{% endblock %}", "@particles/newsletter.html.twig", "C:\\grav\\grav-admin\\user\\themes\\rt_requiem\\particles\\newsletter.html.twig");
    }
}
