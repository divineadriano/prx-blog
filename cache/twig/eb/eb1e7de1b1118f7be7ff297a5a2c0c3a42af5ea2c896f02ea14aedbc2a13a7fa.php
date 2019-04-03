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

/* partials/page_head.html.twig */
class __TwigTemplate_ffdd5230c03d21a2eee6d653597e7094ebd0d34eb33b3fbe33889e214e326798 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/page_head.html.twig", "partials/page_head.html.twig", 1);
        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'head_application' => [$this, 'block_head_application'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_title($context, array $blocks = [])
    {
        // line 4
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "</title>
    ";
        // line 6
        $this->loadTemplate("partials/metadata.html.twig", "partials/page_head.html.twig", 6)->display($context);
        // line 7
        echo "    <link rel=\"canonical\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
    ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 9
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
    ";
        }
    }

    // line 13
    public function block_head_application($context, array $blocks = [])
    {
        // line 14
        echo "    ";
        $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", []), "finalize", []);
        // line 15
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 17
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  77 => 15,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  56 => 7,  54 => 6,  46 => 5,  43 => 4,  40 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@nucleus/page_head.html.twig\" %}

{% block head_title %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    {% if header.robots %}
        <meta name=\"robots\" content=\"{{ header.robots }}\">
    {% endif %}
{% endblock %}

{% block head_application %}
    {% do gantry.platform.finalize %}
    {{ assets.css()|raw }}

    {{ assets.js()|raw }}
{% endblock %}
", "partials/page_head.html.twig", "C:\\grav\\grav-admin\\user\\plugins\\gantry5\\engines\\nucleus\\templates\\partials\\page_head.html.twig");
    }
}
