<?php

/* pagination.html.twig */
class __TwigTemplate_ba35c286b8016be6d4936aca8c579ad237e8ec369b5db473fa3b9c5c68e231d9 extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 2
            if ((($context["base_url"] ?? null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"pagination\">
    <div class=\"pagenavi\">
    ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 9
                echo "        <a rel=\"prev\" class=\"prev page-numbers\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&laquo;</a>
    ";
            }
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 13
                    echo "            <span class=\"page-numbers current\">";
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 14
$context["paginate"], "isInDelta", [])) {
                    // line 15
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 16
                    echo "            <a class=\"page-numbers\" href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</a>
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 20
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 21
                echo "        <a rel=\"next\" class=\"next page-numbers\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&raquo;</a>
    ";
            }
            // line 23
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  80 => 21,  77 => 20,  74 => 19,  68 => 18,  60 => 16,  57 => 15,  55 => 14,  50 => 13,  47 => 12,  42 => 11,  36 => 9,  33 => 8,  31 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination|length > 1 %}
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"pagination\">
    <div class=\"pagenavi\">
    {% if pagination.hasPrev %}
        {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a rel=\"prev\" class=\"prev page-numbers\" href=\"{{ url }}\">&laquo;</a>
    {% endif %}
    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <span class=\"page-numbers current\">{{ paginate.number }}</span>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <a class=\"page-numbers\" href=\"{{ url }}\">{{ paginate.number }}</a>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a rel=\"next\" class=\"next page-numbers\" href=\"{{ url }}\">&raquo;</a>
    {% endif %}
    </div>
</div>
{% endif %}
", "pagination.html.twig", "C:\\grav-admin\\user\\themes\\receptar\\templates\\pagination.html.twig");
    }
}
