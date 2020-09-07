<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/footer/bottombar.htm */
class __TwigTemplate_297053739626c3b749530592240468f1b9263138d0b58611b1e6e47fd99a9f80 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"bg-black-25 py-5\">
    <div class=\"container\">
        <div class=\"d-md-flex justify-content-between\">
            <div class=\"navba navbar-expand order-md-2\">
                <ul class=\"navbar-nav justify-content-center mb-4 mb-md-0\">
    \t\t\t\t";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["bottomMenu"] ?? null), "menuItems", [], "any", false, false, false, 6)) {
            // line 7
            echo "    \t\t\t\t";
            $context["items"] = twig_get_attribute($this->env, $this->source, ($context["bottomMenu"] ?? null), "menuItems", [], "any", false, false, false, 7);
            // line 8
            echo "    \t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link p-md-4 p-2 text-white opacity-50 hover:opacity-100\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 10), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10), "html", null, true);
                echo "</a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                    ";
        }
        // line 14
        echo "                </ul>
            </div>
            <div class=\"align-self-center text-center font-3 font-sm-5 text-md-left mb-5 mb-md-0 mr-md-5 text-white opacity-50 order-md-1\">
                <span>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "site_name", [], "any", false, false, false, 17), "html", null, true);
        echo "</span> © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M Y"), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "site_copyright", [], "any", false, false, false, 17), "html", null, true);
        echo "
                <a class=\"text-white\" href=\"http://";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "site_url", [], "any", false, false, false, 18), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 18), "site_url", [], "any", false, false, false, 18), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/footer/bottombar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  76 => 17,  71 => 14,  68 => 13,  57 => 10,  54 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-black-25 py-5\">
    <div class=\"container\">
        <div class=\"d-md-flex justify-content-between\">
            <div class=\"navba navbar-expand order-md-2\">
                <ul class=\"navbar-nav justify-content-center mb-4 mb-md-0\">
    \t\t\t\t{% if bottomMenu.menuItems %}
    \t\t\t\t{% set items = bottomMenu.menuItems %}
    \t\t\t\t{% for item in items %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link p-md-4 p-2 text-white opacity-50 hover:opacity-100\" href=\"{{ item.url }}\">{{ item.title }}</a>
                    </li>
                    {% endfor %}
                    {% endif %}
                </ul>
            </div>
            <div class=\"align-self-center text-center font-3 font-sm-5 text-md-left mb-5 mb-md-0 mr-md-5 text-white opacity-50 order-md-1\">
                <span>{{ this.theme.site_name }}</span> © {{ \"now\"|date(\"M Y\") }}. {{ this.theme.site_copyright }}
                <a class=\"text-white\" href=\"http://{{ this.theme.site_url }}\">{{ this.theme.site_url }}</a>
            </div>
        </div>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/footer/bottombar.htm", "");
    }
}
