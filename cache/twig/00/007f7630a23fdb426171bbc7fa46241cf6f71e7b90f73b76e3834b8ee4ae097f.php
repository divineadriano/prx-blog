<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_586b28a18a1bae7fd2c52d26e9500712f54a660251cd59a551bc11f2d7949132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.category" => "sidebar"], "order" => ["by" => "default", "dir" => "asc"]]], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            echo "  ";
            if ($this->getAttribute($context["module"], "template", [])) {
                // line 3
                echo "    ";
                $this->loadTemplate((("sidebar/" . $this->getAttribute($context["module"], "template", [])) . ".html.twig"), "partials/sidebar.html.twig", 3)->display($context);
                // line 4
                echo "  ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "

<div class=\"widget widget_text\">
    <h2 class=\"widget-title\">ProximaX</h2>
    <p>ProximaX is a next generation platform solution with an Integrated and Distributed Ledger Technology (IaDLT). The ProximaX Sirius platform is an integrated assembly of proven technologies for enterprises to develop applications with superior design while substantially reducing the total cost of ownership and time to market.</p>
    <p><a href=\"https://www.proximax.io\" target=\"_blank\">www.proximax.io</a></p>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
  {% if module.template %}
    {% include 'sidebar/' ~ module.template ~ '.html.twig' %}
  {% endif %}
{% endfor %}


<div class=\"widget widget_text\">
    <h2 class=\"widget-title\">ProximaX</h2>
    <p>ProximaX is a next generation platform solution with an Integrated and Distributed Ledger Technology (IaDLT). The ProximaX Sirius platform is an integrated assembly of proven technologies for enterprises to develop applications with superior design while substantially reducing the total cost of ownership and time to market.</p>
    <p><a href=\"https://www.proximax.io\" target=\"_blank\">www.proximax.io</a></p>
</div>

{# {% if config.plugins.simplesearch.enabled %}
<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">{{ 'SEARCH'|t }}</h2>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</aside>
{% endif %}

{% if config.plugins.random.enabled %}
<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">{{ 'RANDOM_ARTICLE'|t }}</h2>
    <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<aside class=\"widget widget_tag_cloud\">
  <h2 class=\"widget-title\">{{ 'POPULAR_TAGS'|t }}</h2>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</aside>
{% endif %}

{% if config.plugins.archives.enabled %}
<aside class=\"widget widget_recent_entries\">
  <h2 class=\"widget-title\">{{ 'LATEST_RECIPES'|t }}</h2>
    {% include 'partials/archives.html.twig' %}
</aside>
{% endif %} #}", "partials/sidebar.html.twig", "C:\\grav-admin\\user\\themes\\receptar\\templates\\partials\\sidebar.html.twig");
    }
}
