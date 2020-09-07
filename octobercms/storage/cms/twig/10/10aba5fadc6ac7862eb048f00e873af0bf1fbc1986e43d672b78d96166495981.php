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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/navbar.htm */
class __TwigTemplate_37195818a710218dcea7811ed2a0136894675bb4c8ca80f95beb40a189971248 extends \Twig\Template
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
        echo "<div class=\"header-navbar navbar navbar-expand-md bg-white border-top border-bottom p-0\">
\t<div class=\"container px-md-4\">
\t\t<div class=\"collapse navbar-collapse position-relative\" id=\"headerMenu\">
\t\t\t<div class=\"hover-dropdown mr-auto\">
\t\t\t";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['staticMenu'] = ($context["mainMenu"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-navbar navbar navbar-expand-md bg-white border-top border-bottom p-0\">
\t<div class=\"container px-md-4\">
\t\t<div class=\"collapse navbar-collapse position-relative\" id=\"headerMenu\">
\t\t\t<div class=\"hover-dropdown mr-auto\">
\t\t\t{% partial 'mainMenu/default' staticMenu=mainMenu %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/navbar.htm", "");
    }
}
