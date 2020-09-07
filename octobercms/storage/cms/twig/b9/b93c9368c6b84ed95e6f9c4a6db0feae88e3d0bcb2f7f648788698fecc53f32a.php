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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/products.htm */
class __TwigTemplate_0f3281c37c995ad4e02ecc6c73dcc6c7520344653b2c062fc720355f2f9f3224 extends \Twig\Template
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
        echo "<div class=\"py-10\">
    <div class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb bg-white align-items-end p-0 font-5\">
\t\t\t\t<li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\"><i class=\"w-4\" data-feather=\"home\"></i></a></li>
\t\t\t\t";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 6)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pageHeader/items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "\t\t\t</ol>
\t\t</nav>
\t\t<h1 class=\"font-weight-semibold\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "category", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
\t\t<span class=\"lead font-weight-semibold text-muted font-6\">
\t\t\t";
        // line 11
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "category", [], "any", false, false, false, 11), "description", [], "any", false, false, false, 11);
        echo "
\t\t</span>
        <hr class=\"mt-6\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  56 => 9,  52 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"py-10\">
    <div class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb bg-white align-items-end p-0 font-5\">
\t\t\t\t<li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"{{ 'index'|page }}\"><i class=\"w-4\" data-feather=\"home\"></i></a></li>
\t\t\t\t{% partial 'pageHeader/items' items=staticMenu.menuItems %}
\t\t\t</ol>
\t\t</nav>
\t\t<h1 class=\"font-weight-semibold\">{{ products.category.name }}</h1>
\t\t<span class=\"lead font-weight-semibold text-muted font-6\">
\t\t\t{{ products.category.description|raw }}
\t\t</span>
        <hr class=\"mt-6\">
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/products.htm", "");
    }
}
