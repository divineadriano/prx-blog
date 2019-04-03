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

/* @nucleus/module-chrome/gantry.html.twig */
class __TwigTemplate_5fcbe2ac0b04d78f6a47bc7676d9f3e384b45cbfb072afdd0714a4a55a7ca31f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'module' => [$this, 'block_module'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        ob_start();
        // line 2
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        ob_start();
        // line 6
        echo "    ";
        $this->displayBlock('module', $context, $blocks);
        $context["module"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        if (twig_trim_filter(($context["module"] ?? null))) {
            // line 10
            echo "<div class=\"moduletable";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["chrome"] ?? null), "class", [])) ? ((" " . $this->getAttribute(($context["chrome"] ?? null), "class", []))) : ("")), "html", null, true);
            echo "\">
    ";
            // line 11
            if (twig_trim_filter(($context["title"] ?? null))) {
                // line 12
                echo "        <h2 class=\"g-title\">";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</h2>
    ";
            }
            // line 14
            echo "
    ";
            // line 15
            echo twig_escape_filter($this->env, ($context["module"] ?? null), "html", null, true);
            echo "
</div>
";
        }
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
    }

    // line 6
    public function block_module($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@nucleus/module-chrome/gantry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  70 => 2,  62 => 15,  59 => 14,  53 => 12,  51 => 11,  46 => 10,  44 => 9,  40 => 6,  38 => 5,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set title %}
    {% block title %}{% endblock %}
{%- endset -%}

{% set module %}
    {% block module %}{% endblock %}
{%- endset -%}

{% if module|trim %}
<div class=\"moduletable{{ chrome.class ? ' ' ~ chrome.class }}\">
    {% if title|trim %}
        <h2 class=\"g-title\">{{ title }}</h2>
    {% endif %}

    {{ module }}
</div>
{% endif %}", "@nucleus/module-chrome/gantry.html.twig", "C:\\grav\\grav-admin\\user\\plugins\\gantry5\\engines\\nucleus\\templates\\module-chrome\\gantry.html.twig");
    }
}
