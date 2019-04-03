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

/* @nucleus/partials/module.html.twig */
class __TwigTemplate_719adf82f94f41f3588ba9458e618a54e7db12a30da9ed2078fe53c37216a941 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'module' => [$this, 'block_module'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate([0 => (("@nucleus/module-chrome/" . ($context["style"] ?? null)) . ".html.twig"), 1 => "@nucleus/module-chrome/gantry.html.twig"], "@nucleus/partials/module.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["id"] = (($this->getAttribute(($context["segment"] ?? null), "id", [])) ? ($this->getAttribute(($context["segment"] ?? null), "id", [])) : ((($this->getAttribute(($context["segment"] ?? null), "type", []) . "-") . rand(1000, 9999))));
        // line 4
        $context["chrome"] = $this->getAttribute(($context["segment"] ?? null), "chrome", []);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "chrome", []), "display_title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["segment"] ?? null), "title", []), "html", null, true);
        }
    }

    // line 10
    public function block_module($context, array $blocks = [])
    {
        // line 11
        echo "    ";
        if (twig_in_filter($this->getAttribute(($context["segment"] ?? null), "type", []), [0 => "particle", 1 => "spacer"])) {
            // line 12
            echo "        ";
            $context["item"] = ["id" => (($this->getAttribute(($context["position"] ?? null), "key", [])) ? ((($this->getAttribute(($context["position"] ?? null), "key", []) . "-module-") . ($context["id"] ?? null))) : (($context["id"] ?? null))), "type" => $this->getAttribute(($context["segment"] ?? null), "type", []), "subtype" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", []), "type", []), "attributes" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", []), "attributes", [])];
            // line 13
            echo "        ";
            $context["attribs"] = twig_array_merge(["inContent" => ($context["inContent"] ?? null)], ((($context["ajax"] ?? null)) ? (["ajax" => ($context["ajax"] ?? null)]) : ([])));
            // line 14
            echo "        ";
            echo $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", []), "renderContent", [0 => ($context["item"] ?? null), 1 => ($context["attribs"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            $this->loadTemplate([0 => (((("@nucleus/content/" . $this->getAttribute(            // line 17
($context["segment"] ?? null), "type", [])) . "/") . (($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", [], "any", false, true), "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", [], "any", false, true), "type", []), "default")) : ("default"))) . ".html.twig"), 1 => (("@nucleus/content/" . $this->getAttribute(            // line 18
($context["segment"] ?? null), "type", [])) . ".html.twig"), 2 => "@nucleus/content/unknown.html.twig"], "@nucleus/partials/module.html.twig", 16)->display(array_merge($context, ["segment" => ["id" =>             // line 20
($context["id"] ?? null), "type" => $this->getAttribute(($context["segment"] ?? null), "type", []), "subtype" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", []), "type", []), "options" => $this->getAttribute(($context["segment"] ?? null), "options", []), "attributes" => $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "options", []), "attributes", [])]]));
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/partials/module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  76 => 20,  75 => 18,  74 => 17,  72 => 16,  66 => 14,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  47 => 7,  44 => 6,  40 => 1,  38 => 4,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends ['@nucleus/module-chrome/' ~ style ~ '.html.twig', '@nucleus/module-chrome/gantry.html.twig'] %}

{% set id = segment.id ?: segment.type ~ '-' ~ rand(1000, 9999) %}
{% set chrome = segment.chrome %}

{% block title %}
    {% if segment.chrome.display_title %}{{ segment.title }}{% endif %}
{% endblock %}

{% block module %}
    {% if segment.type in ['particle', 'spacer'] %}
        {% set item = {id: position.key ? position.key ~ '-module-' ~ id : id, type: segment.type, subtype: segment.options.type, attributes: segment.options.attributes} %}
        {% set attribs = {inContent: inContent}|merge(ajax ? {ajax: ajax} : {}) %}
        {{ gantry.theme.renderContent(item, attribs)|raw }}
    {% else %}
        {% include [
        '@nucleus/content/' ~ segment.type ~ '/' ~ segment.options.type|default('default') ~ '.html.twig',
        '@nucleus/content/' ~ segment.type ~ '.html.twig',
        '@nucleus/content/unknown.html.twig']
        with { segment: {id: id, type: segment.type, subtype: segment.options.type, options: segment.options, attributes: segment.options.attributes }} %}
    {% endif %}
{% endblock %}
", "@nucleus/partials/module.html.twig", "C:\\grav\\grav-admin\\user\\plugins\\gantry5\\engines\\nucleus\\templates\\partials\\module.html.twig");
    }
}
