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

/* @particles/logo.html.twig */
class __TwigTemplate_9f418b610553d228c24536ff4c880c0f8eb98e6c0854a3153ff33228a2a9df0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo.html.twig", 1);
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "url", [])), $this->getAttribute(($context["gantry"] ?? null), "siteUrl", [], "method")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []));
        echo "\" rel=\"home\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
    ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "image", [])) {
            // line 6
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["particle"] ?? null), "image", [])));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "alt", []));
            echo "\" />
    ";
        }
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "text", []));
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@particles/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  53 => 6,  51 => 5,  42 => 4,  39 => 3,  22 => 1,);
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
<a href=\"{{ url(particle.url)|default(gantry.siteUrl()) }}\" title=\"{{ particle.text|e }}\" rel=\"home\" class=\"{{ particle.class|e }}\">
    {% if particle.image %}
    <img src=\"{{ url(particle.image)|e }}\" alt=\"{{ particle.alt|e }}\" />
    {% endif %}
    {{ particle.text|e }}
</a>
{% endblock %}
", "@particles/logo.html.twig", "C:\\grav\\grav-admin\\user\\themes\\rt_requiem\\particles\\logo.html.twig");
    }
}
