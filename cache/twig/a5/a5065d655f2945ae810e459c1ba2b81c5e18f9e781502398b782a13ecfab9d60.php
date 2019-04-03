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

/* @particles/infolist.html.twig */
class __TwigTemplate_c9e57646d998b31f9561e07131cbb4e6c0f0b6befebe75f414e64495ca85b617 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/infolist.html.twig", 1);
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
  ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "title", [])) {
            echo "<h2 class=\"g-title g-infolist-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", []);
            echo "</h2>";
        }
        // line 6
        echo "
  <div class=\"g-infolist ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", []));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", []));
        echo "\">
    
    ";
        // line 9
        if ($this->getAttribute(($context["particle"] ?? null), "intro", [])) {
            // line 10
            echo "    <p>";
            echo $this->getAttribute(($context["particle"] ?? null), "intro", []);
            echo "</p>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "infolists", []));
        foreach ($context['_seq'] as $context["_key"] => $context["infolist"]) {
            // line 14
            echo "      <div class=\"g-infolist-item ";
            if ($this->getAttribute($context["infolist"], "image", [])) {
                echo " g-infolist-with-img";
            }
            echo "\">
        
        ";
            // line 16
            ob_start();
            // line 17
            echo "        <div class=\"g-infolist-item-img g-block";
            if (($this->getAttribute($context["infolist"], "imagestyle", []) == "compact")) {
                echo " size-22 hidden-phone";
            }
            if (($this->getAttribute($context["infolist"], "imagestyle", []) == "browser")) {
                echo " browser";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "imageloc", []));
            echo "\">
          ";
            // line 18
            if (($this->getAttribute($context["infolist"], "imagestyle", []) == "browser")) {
                // line 19
                echo "          <div class=\"browser-wrapper\">
            <div class=\"browser-bar\">
              <span class=\"browser-button\"></span>
            </div>
          ";
            }
            // line 24
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["infolist"], "image", [])));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "title", []), "html", null, true);
            echo "\" />
          ";
            // line 25
            if (($this->getAttribute($context["infolist"], "imagestyle", []) == "browser")) {
                // line 26
                echo "          </div>
          ";
            }
            // line 28
            echo "        </div>
        ";
            $context["imagedata"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 30
            echo "        
        ";
            // line 31
            if (($this->getAttribute($context["infolist"], "image", []) && ($this->getAttribute($context["infolist"], "imageloc", []) == "left"))) {
                // line 32
                echo "        ";
                echo twig_escape_filter($this->env, ($context["imagedata"] ?? null), "html", null, true);
                echo "
        ";
            }
            // line 34
            echo "        
        <div class=\"g-infolist-item-text";
            // line 35
            if ($this->getAttribute($context["infolist"], "image", [])) {
                echo " g-block";
            }
            echo " g-infolist-textstyle-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "textstyle", []), "html", null, true);
            echo "\">
          ";
            // line 36
            if ($this->getAttribute($context["infolist"], "title", [])) {
                // line 37
                echo "          <div class=\"g-infolist-item-title ";
                if (($this->getAttribute($context["infolist"], "textstyle", []) == "bold")) {
                    echo "g-bold";
                }
                echo "\">
            ";
                // line 38
                if (($this->getAttribute($context["infolist"], "textstyle", []) == "large")) {
                    // line 39
                    echo "            <div class=\"g-title-hero\">
            ";
                }
                // line 40
                echo " 
            ";
                // line 41
                if ($this->getAttribute($context["infolist"], "link", [])) {
                    // line 42
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", []));
                    echo "\">
            ";
                }
                // line 43
                echo " 
              ";
                // line 44
                echo $this->getAttribute($context["infolist"], "title", []);
                echo "
            ";
                // line 45
                if ($this->getAttribute($context["infolist"], "link", [])) {
                    // line 46
                    echo "            </a>
            ";
                }
                // line 47
                echo " 
            ";
                // line 48
                if (($this->getAttribute($context["infolist"], "textstyle", []) == "large")) {
                    // line 49
                    echo "            </div>
            ";
                }
                // line 51
                echo "          </div>
          ";
            }
            // line 53
            echo "          
          ";
            // line 54
            if (($this->getAttribute($context["infolist"], "tag", []) || $this->getAttribute($context["infolist"], "subtag", []))) {
                // line 55
                echo "          <div class=\"g-infolist-tags\">
          ";
                // line 56
                if ($this->getAttribute($context["infolist"], "tag", [])) {
                    // line 57
                    echo "            ";
                    if ($this->getAttribute($context["infolist"], "link", [])) {
                        // line 58
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", []));
                        echo "\">
            ";
                    }
                    // line 59
                    echo " 
              <span class=\"g-tag\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "tag", []));
                    echo "</span>
            ";
                    // line 61
                    if ($this->getAttribute($context["infolist"], "link", [])) {
                        // line 62
                        echo "            </a>
            ";
                    }
                    // line 63
                    echo " 
          ";
                }
                // line 64
                echo " 
      
          ";
                // line 66
                if ($this->getAttribute($context["infolist"], "subtag", [])) {
                    // line 67
                    echo "          <span class=\"g-small\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "subtag", []));
                    echo "</span>
          ";
                }
                // line 69
                echo "          </div>
          ";
            }
            // line 71
            echo "
          ";
            // line 72
            if ($this->getAttribute($context["infolist"], "desc", [])) {
                // line 73
                echo "          <div class=\"g-infolist-item-desc\">
            ";
                // line 74
                if (($this->getAttribute($context["infolist"], "textstyle", []) == "large")) {
                    // line 75
                    echo "            <div class=\"g-large\">
            ";
                }
                // line 77
                echo "            ";
                echo $this->getAttribute($context["infolist"], "desc", []);
                echo "
            ";
                // line 78
                if (($this->getAttribute($context["infolist"], "textstyle", []) == "large")) {
                    // line 79
                    echo "            </div>
            ";
                }
                // line 81
                echo "          </div>
          ";
            }
            // line 83
            echo "          
          ";
            // line 84
            if (($this->getAttribute($context["infolist"], "link", []) && $this->getAttribute($context["infolist"], "label", []))) {
                // line 85
                echo "          <div class=\"g-infolist-link\">
            <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", []));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "readmoreclass", []));
                echo "\">";
                if ($this->getAttribute($context["infolist"], "icon", [])) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "icon", []));
                    echo "\"></i>";
                }
                // line 87
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "label", []));
                echo "
            </a>
          </div>
          ";
            }
            // line 91
            echo "        </div>
        
        ";
            // line 93
            if (($this->getAttribute($context["infolist"], "image", []) && ($this->getAttribute($context["infolist"], "imageloc", []) == "right"))) {
                // line 94
                echo "        ";
                echo twig_escape_filter($this->env, ($context["imagedata"] ?? null), "html", null, true);
                echo "
        ";
            }
            // line 96
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infolist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/infolist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 98,  317 => 96,  311 => 94,  309 => 93,  305 => 91,  297 => 87,  287 => 86,  284 => 85,  282 => 84,  279 => 83,  275 => 81,  271 => 79,  269 => 78,  264 => 77,  260 => 75,  258 => 74,  255 => 73,  253 => 72,  250 => 71,  246 => 69,  240 => 67,  238 => 66,  234 => 64,  230 => 63,  226 => 62,  224 => 61,  220 => 60,  217 => 59,  211 => 58,  208 => 57,  206 => 56,  203 => 55,  201 => 54,  198 => 53,  194 => 51,  190 => 49,  188 => 48,  185 => 47,  181 => 46,  179 => 45,  175 => 44,  172 => 43,  166 => 42,  164 => 41,  161 => 40,  157 => 39,  155 => 38,  148 => 37,  146 => 36,  138 => 35,  135 => 34,  129 => 32,  127 => 31,  124 => 30,  120 => 28,  116 => 26,  114 => 25,  107 => 24,  100 => 19,  98 => 18,  86 => 17,  84 => 16,  76 => 14,  72 => 13,  69 => 12,  63 => 10,  61 => 9,  54 => 7,  51 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 1,);
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

  {% if particle.title %}<h2 class=\"g-title g-infolist-title\">{{ particle.title|raw }}</h2>{% endif %}

  <div class=\"g-infolist {{ particle.cols|e }} {{ particle.class|e }}\">
    
    {% if particle.intro %}
    <p>{{ particle.intro|raw }}</p>
    {% endif %}

    {% for infolist in particle.infolists %}
      <div class=\"g-infolist-item {% if infolist.image %} g-infolist-with-img{% endif %}\">
        
        {% set imagedata %}
        <div class=\"g-infolist-item-img g-block{% if infolist.imagestyle == 'compact' %} size-22 hidden-phone{% endif %}{% if infolist.imagestyle == 'browser' %} browser{% endif %} {{ infolist.imageloc|e }}\">
          {% if infolist.imagestyle == 'browser' %}
          <div class=\"browser-wrapper\">
            <div class=\"browser-bar\">
              <span class=\"browser-button\"></span>
            </div>
          {% endif %}
          <img src=\"{{ url(infolist.image)|e }}\" alt=\"{{ infolist.title }}\" />
          {% if infolist.imagestyle == 'browser' %}
          </div>
          {% endif %}
        </div>
        {% endset %}
        
        {% if infolist.image and infolist.imageloc == 'left' %}
        {{ imagedata }}
        {% endif %}
        
        <div class=\"g-infolist-item-text{% if infolist.image %} g-block{% endif %} g-infolist-textstyle-{{ infolist.textstyle }}\">
          {% if infolist.title %}
          <div class=\"g-infolist-item-title {% if infolist.textstyle == 'bold' %}g-bold{% endif %}\">
            {% if infolist.textstyle == 'large' %}
            <div class=\"g-title-hero\">
            {% endif %} 
            {% if infolist.link %}
            <a href=\"{{ infolist.link|e }}\">
            {% endif %} 
              {{ infolist.title|raw }}
            {% if infolist.link %}
            </a>
            {% endif %} 
            {% if infolist.textstyle == 'large' %}
            </div>
            {% endif %}
          </div>
          {% endif %}
          
          {% if infolist.tag or infolist.subtag %}
          <div class=\"g-infolist-tags\">
          {% if infolist.tag %}
            {% if infolist.link %}
            <a href=\"{{ infolist.link|e }}\">
            {% endif %} 
              <span class=\"g-tag\">{{ infolist.tag|e }}</span>
            {% if infolist.link %}
            </a>
            {% endif %} 
          {% endif %} 
      
          {% if infolist.subtag %}
          <span class=\"g-small\">{{ infolist.subtag|e }}</span>
          {% endif %}
          </div>
          {% endif %}

          {% if infolist.desc %}
          <div class=\"g-infolist-item-desc\">
            {% if infolist.textstyle == 'large' %}
            <div class=\"g-large\">
            {% endif %}
            {{ infolist.desc|raw }}
            {% if infolist.textstyle == 'large' %}
            </div>
            {% endif %}
          </div>
          {% endif %}
          
          {% if infolist.link and infolist.label %}
          <div class=\"g-infolist-link\">
            <a href=\"{{ infolist.link|e }}\" class=\"button {{ infolist.readmoreclass|e }}\">{% if infolist.icon %}<i class=\"{{ infolist.icon|e }}\"></i>{% endif %}
              {{ infolist.label|e }}
            </a>
          </div>
          {% endif %}
        </div>
        
        {% if infolist.image and infolist.imageloc == 'right' %}
        {{ imagedata }}
        {% endif %}
      </div>
    {% endfor %}

  </div>

{% endblock %}", "@particles/infolist.html.twig", "C:\\grav\\grav-admin\\user\\themes\\rt_requiem\\particles\\infolist.html.twig");
    }
}
