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

/* blog_item.html.twig */
class __TwigTemplate_8186151b13744a2d36231248e744240294e1f6434878df79eeabdae5138486d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "blog_item.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->loadTemplate("partials/blog_item.html.twig", "blog_item.html.twig", 4)->display(array_merge($context, ["blog" => $this->getAttribute(($context["page"] ?? null), "parent", []), "truncate" => false, "show_date" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "header", []), "content", []), "show_date", [])]));
    }

    public function getTemplateName()
    {
        return "blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"partials/page.html.twig\" %}

{% block content %}
    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false, 'show_date': page.parent.header.content.show_date} %}
{% endblock %}
", "blog_item.html.twig", "C:\\grav\\grav-admin\\user\\plugins\\gantry5\\engines\\nucleus\\templates\\blog_item.html.twig");
    }
}
