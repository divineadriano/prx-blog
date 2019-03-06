<?php

/* partials/header.html.twig */
class __TwigTemplate_0499c9c345fe9691b6e2571cf485d8ef68d839fcd1eb9a2ff6add21b51b8b3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"masthead\" class=\"site-header\" >
  <div class=\"site-branding\">
    <h1 class=\"site-title logo type-text\">
      <a href='";
        // line 4
        echo ($context["base_url_absolute"] ?? null);
        echo "'><img src=\"/user/themes/receptar/images/logo.png\"></a>
    </h1>
    <h2 class=\"site-description\">";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</h2>
    ";
        // line 8
        echo "  </div>
  <section id=\"secondary\" class=\"secondary\">
   <div class=\"secondary-content\">
      <div class=\"secondary-content-container\">
        <div class=\"site-branding\">
          <h1 class=\"site-title logo type-text\">
            <a href='";
        // line 14
        echo ($context["base_url_absolute"] ?? null);
        echo "'><img src=\"/user/themes/receptar/images/logo.png\"></a>
          </h1>
          <h2 class=\"site-description\">";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</h2>
          ";
        // line 18
        echo "        </div>
         <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\" itemscope=\"\" itemtype=\"http://schema.org/SiteNavigationElement\">
            <span class=\"screen-reader-text\">Receptar site navigation</span>
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <div class=\"menu\">
              ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 26
        echo "            </div>
         </nav>
         <div class=\"widget-area sidebar\" role=\"complementary\" itemscope=\"\" itemtype=\"http://schema.org/WPSideBar\">
           ";
        // line 29
        $this->displayBlock('sidebar', $context, $blocks);
        // line 32
        echo "         </div>
      </div>
   </div>
   <div class=\"secondary-controls\">
      <button id=\"menu-toggle\" class=\"menu-toggle\" aria-controls=\"secondary\" aria-expanded=\"false\">
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"screen-reader-text\">Menu</span>
      </button>

      <div class=\"social-links\">
        <ul id=\"menu-social-links\" class=\"social-links-items\">
          <li id=\"menu-item-1\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1\">
            <a href=\"https://www.facebook.com/ProximaXio/\" target=\"_blank\">
              <span class=\"screen-reader-text\">facebook</span>
            </a>
          </li>

          <li id=\"menu-item-2\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2\">
            <a href=\"https://twitter.com/ProximaXio\" target=\"_blank\">
              <span class=\"screen-reader-text\">twitter</span>
            </a>
          </li>

          <li id=\"menu-item-3\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2\">
            <a href=\"https://www.instagram.com/proximaxio/\" target=\"_blank\">
              <span class=\"screen-reader-text\">instagram</span>
            </a>
          </li>

          <li id=\"menu-item-4\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2\">
            <a href=\"https://github.com/proximax-storage\" target=\"_blank\">
              <span class=\"screen-reader-text\">github</span>
            </a>
          </li>

          <li id=\"menu-item-5\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-6\">
              <a href=\"http://www.proximax.io\" target=\"_blank\">
                <span class=\"screen-reader-text\">home</span>
              </a>
            </li>

          ";
        // line 75
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 76
            echo "            <li id=\"menu-item-1245\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1245\">
              <a href=\"";
            // line 77
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><span class=\"screen-reader-text\">Atom 1.0</span></a>
            </li>
            <li id=\"menu-item-1246\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1246\">
              <a href=\"";
            // line 80
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><span class=\"screen-reader-text\">RSS</span></a>
            </li>
          ";
        }
        // line 83
        echo "

        </ul>
      </div>
   </div>
</section>

<div id=\"site-header-widgets\" class=\"widget-area site-header-widgets\">
";
        // line 91
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 92
            echo "    ";
            $this->loadTemplate("partials/simplesearch_searchbox_top.html.twig", "partials/header.html.twig", 92)->display($context);
        }
        // line 94
        echo "</div>

</header>
";
    }

    // line 23
    public function block_navigation($context, array $blocks = [])
    {
        // line 24
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 24)->display($context);
        // line 25
        echo "              ";
    }

    // line 29
    public function block_sidebar($context, array $blocks = [])
    {
        // line 30
        echo "             ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/header.html.twig", 30)->display($context);
        // line 31
        echo "           ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 31,  166 => 30,  163 => 29,  159 => 25,  156 => 24,  153 => 23,  146 => 94,  142 => 92,  140 => 91,  130 => 83,  124 => 80,  118 => 77,  115 => 76,  113 => 75,  68 => 32,  66 => 29,  61 => 26,  59 => 23,  52 => 18,  48 => 16,  43 => 14,  35 => 8,  31 => 6,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"masthead\" class=\"site-header\" >
  <div class=\"site-branding\">
    <h1 class=\"site-title logo type-text\">
      <a href='{{ base_url_absolute }}'><img src=\"/user/themes/receptar/images/logo.png\"></a>
    </h1>
    <h2 class=\"site-description\">{{ 'SITE.DESCRIPTION'|t }}</h2>
    {# {% include 'partials/language-selector.html.twig' %} #}
  </div>
  <section id=\"secondary\" class=\"secondary\">
   <div class=\"secondary-content\">
      <div class=\"secondary-content-container\">
        <div class=\"site-branding\">
          <h1 class=\"site-title logo type-text\">
            <a href='{{ base_url_absolute }}'><img src=\"/user/themes/receptar/images/logo.png\"></a>
          </h1>
          <h2 class=\"site-description\">{{ 'SITE.DESCRIPTION'|t }}</h2>
          {# {% include 'partials/language-selector.html.twig' %} #}
        </div>
         <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\" itemscope=\"\" itemtype=\"http://schema.org/SiteNavigationElement\">
            <span class=\"screen-reader-text\">Receptar site navigation</span>
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <div class=\"menu\">
              {% block navigation %}
                {% include 'partials/navigation.html.twig' %}
              {% endblock %}
            </div>
         </nav>
         <div class=\"widget-area sidebar\" role=\"complementary\" itemscope=\"\" itemtype=\"http://schema.org/WPSideBar\">
           {% block sidebar %}
             {% include 'partials/sidebar.html.twig' %}
           {% endblock %}
         </div>
      </div>
   </div>
   <div class=\"secondary-controls\">
      <button id=\"menu-toggle\" class=\"menu-toggle\" aria-controls=\"secondary\" aria-expanded=\"false\">
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"screen-reader-text\">Menu</span>
      </button>

      <div class=\"social-links\">
        <ul id=\"menu-social-links\" class=\"social-links-items\">
          <li id=\"menu-item-1\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1\">
            <a href=\"https://www.facebook.com/ProximaXio/\" target=\"_blank\">
              <span class=\"screen-reader-text\">facebook</span>
            </a>
          </li>

          <li id=\"menu-item-2\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2\">
            <a href=\"https://twitter.com/ProximaXio\" target=\"_blank\">
              <span class=\"screen-reader-text\">twitter</span>
            </a>
          </li>

          <li id=\"menu-item-3\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2\">
            <a href=\"https://www.instagram.com/proximaxio/\" target=\"_blank\">
              <span class=\"screen-reader-text\">instagram</span>
            </a>
          </li>

          <li id=\"menu-item-4\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-2\">
            <a href=\"https://github.com/proximax-storage\" target=\"_blank\">
              <span class=\"screen-reader-text\">github</span>
            </a>
          </li>

          <li id=\"menu-item-5\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-6\">
              <a href=\"http://www.proximax.io\" target=\"_blank\">
                <span class=\"screen-reader-text\">home</span>
              </a>
            </li>

          {% if config.plugins.feed.enabled %}
            <li id=\"menu-item-1245\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1245\">
              <a href=\"{{ feed_url }}.atom\"><span class=\"screen-reader-text\">Atom 1.0</span></a>
            </li>
            <li id=\"menu-item-1246\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1246\">
              <a href=\"{{ feed_url }}.rss\"><span class=\"screen-reader-text\">RSS</span></a>
            </li>
          {% endif %}


        </ul>
      </div>
   </div>
</section>

<div id=\"site-header-widgets\" class=\"widget-area site-header-widgets\">
{% if config.plugins.simplesearch.enabled %}
    {% include 'partials/simplesearch_searchbox_top.html.twig' %}
{% endif %}
</div>

</header>
", "partials/header.html.twig", "C:\\grav-admin\\user\\themes\\receptar\\templates\\partials\\header.html.twig");
    }
}
