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

/* @particles/iconmenu.html.twig */
class __TwigTemplate_23472e5c1d9769fad452348eef76742e1e50f9f6aad44275b6b279ddf2791c87 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/iconmenu.html.twig", 1);
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
        echo "    <div class=\"g-iconmenu ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            <a target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "target", []), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", []));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true);
            echo "\" class=\"g-iconmenu-item\">
               ";
            // line 7
            if ($this->getAttribute($context["item"], "icon", [])) {
                echo "<span class=\"g-iconmenu-icon ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                echo "\"></span>";
            }
            // line 8
            echo "               ";
            if ($this->getAttribute($context["item"], "text", [])) {
                echo "<span class=\"g-iconmenu-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", []), "html", null, true);
                echo "</span>";
            }
            // line 9
            echo "            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/iconmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  73 => 9,  66 => 8,  60 => 7,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  22 => 1,);
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
    <div class=\"g-iconmenu {{ particle.class|e }}\">
        {% for item in particle.items %}
            <a target=\"{{ particle.target }}\" href=\"{{ item.link|e }}\" title=\"{{ item.text }}\" class=\"g-iconmenu-item\">
               {% if item.icon %}<span class=\"g-iconmenu-icon {{ item.icon }}\"></span>{% endif %}
               {% if item.text %}<span class=\"g-iconmenu-text\">{{ item.text }}</span>{% endif %}
            </a>
        {% endfor %}
    </div>
{% endblock %}", "@particles/iconmenu.html.twig", "C:\\grav\\grav-admin\\user\\themes\\rt_requiem\\particles\\iconmenu.html.twig");
    }
}
