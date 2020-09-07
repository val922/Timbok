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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/relatedProducts/image.htm */
class __TwigTemplate_d92dc96100ed928312476e7ff299c8be78f366708b0b9adb3ce96ab1e441d400 extends \Twig\Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 1), "thumb", [0 => 340, 1 => 340, 2 => "crop"], "method", false, false, false, 1), "html", null, true);
        echo "\" width=\"340\" height=\"340\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "\" loading=\"lazy\" class=\"card-img-top w-100 img-fluid\"/>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/relatedProducts/image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<img src=\"{{ item.image.thumb(340, 340, 'crop') }}\" width=\"340\" height=\"340\" alt=\"{{ item.name }}\" loading=\"lazy\" class=\"card-img-top w-100 img-fluid\"/>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/relatedProducts/image.htm", "");
    }
}
