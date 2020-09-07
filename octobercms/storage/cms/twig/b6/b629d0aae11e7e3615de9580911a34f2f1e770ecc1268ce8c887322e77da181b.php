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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/infobar.htm */
class __TwigTemplate_143364aba06c0a8411cb9e268f6851f0017bec1d19eeab870a6a00dd870e649f extends \Twig\Template
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
        echo "<div class=\"header-infobar navbar navbar-expand-md navbar-light bg-white p-0\">
\t<div class=\"container flex-sm-nowrap px-4\">
\t\t";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/brand"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "\t\t<ul class=\"navbar-nav d-flex flex-row align-items-center position-relative order-sm-3\">
            <li class=\"nav-item text-center\">
            \t<a class=\"nav-link navbar-toggler collapsed opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-12 w-md-18 border-left-0 border-top-0 border-bottom-0 border-right rounded-0\" href=\"\" data-toggle=\"collapse\" data-target=\"#headerMenu\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
            \t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"menu\"></i>
            \t\t<span class=\"d-block text-uppercase font-1 small\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Menu"]);
        echo "</span>
            \t</a>
            </li>
\t\t\t";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/account-btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/wishlists-btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/cart-btn"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "\t\t</ul>
\t\t<ul class=\"navbar-nav flex-grow-1 d-none d-md-flex py-2 pr-lg-4 order-sm-2 z-20\">
\t\t\t<li class=\"search-input nav-item flex-nowrap w-100 px-4 my-3\">
\t\t\t\t";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("searchInput"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "\t\t\t</li>
\t\t</ul>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/infobar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  76 => 17,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  51 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-infobar navbar navbar-expand-md navbar-light bg-white p-0\">
\t<div class=\"container flex-sm-nowrap px-4\">
\t\t{% partial \"header/brand\" %}
\t\t<ul class=\"navbar-nav d-flex flex-row align-items-center position-relative order-sm-3\">
            <li class=\"nav-item text-center\">
            \t<a class=\"nav-link navbar-toggler collapsed opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-12 w-md-18 border-left-0 border-top-0 border-bottom-0 border-right rounded-0\" href=\"\" data-toggle=\"collapse\" data-target=\"#headerMenu\" aria-expanded=\"true\" aria-label=\"Toggle navigation\">
            \t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"menu\"></i>
            \t\t<span class=\"d-block text-uppercase font-1 small\">{{ 'Menu'|_ }}</span>
            \t</a>
            </li>
\t\t\t{% partial 'header/account-btn' %}
\t\t\t{% partial 'header/wishlists-btn' %}
\t\t\t{% partial 'header/cart-btn' %}
\t\t</ul>
\t\t<ul class=\"navbar-nav flex-grow-1 d-none d-md-flex py-2 pr-lg-4 order-sm-2 z-20\">
\t\t\t<li class=\"search-input nav-item flex-nowrap w-100 px-4 my-3\">
\t\t\t\t{% component 'searchInput' %}
\t\t\t</li>
\t\t</ul>
\t</div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/infobar.htm", "");
    }
}
