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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productCategories/default.htm */
class __TwigTemplate_4a7112c21037a2b40dbb8da05eb4dd59f0e3b5da0294d8799f7d5b4b91abd8aa extends \Twig\Template
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
        echo "<div class=\"mb-6 py-1\">
    <h3 class=\"position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
\t\t<span>Categories</span>
\t</h3>
    <div id=\"category-nav\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"list-group panel\">
            ";
            // line 8
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 8)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("productCategories/items"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "        </div>
        ";
        }
        // line 11
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productCategories/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mb-6 py-1\">
    <h3 class=\"position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
\t\t<span>Categories</span>
\t</h3>
    <div id=\"category-nav\">
        {% if staticMenu.menuItems %}
        <div class=\"list-group panel\">
            {% partial 'productCategories/items' items=staticMenu.menuItems %}
        </div>
        {% endif %}
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productCategories/default.htm", "");
    }
}
