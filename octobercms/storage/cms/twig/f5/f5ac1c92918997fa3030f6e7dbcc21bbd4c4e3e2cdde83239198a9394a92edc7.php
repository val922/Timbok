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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/brand.htm */
class __TwigTemplate_d63cc2f8c82995e0994db3b5c370a2db939ad51c800c38896dfe7951816e0005 extends \Twig\Template
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
        echo "<a class=\"navbar-brand transition-20\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">
    <img class=\"w-20 w-sm-auto\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_logo", [], "any", false, false, false, 2), "getThumb", [0 => false, 1 => 60, 2 => "auto"], "method", false, false, false, 2), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_name", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
</a>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/brand.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"navbar-brand transition-20\" href=\"{{ 'index'|page }}\">
    <img class=\"w-20 w-sm-auto\" src=\"{{ this.theme.site_logo.getThumb(false, 60, 'auto') }}\" alt=\"{{ this.theme.site_name }}\">
</a>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/brand.htm", "");
    }
}
