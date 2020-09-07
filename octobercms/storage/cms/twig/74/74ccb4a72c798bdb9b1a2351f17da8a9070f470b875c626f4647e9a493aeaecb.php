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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetBanners/category-banner-bottom.htm */
class __TwigTemplate_7b9be9d156720d492fcc2f55bca3b9f55b3649397b30810e8ad1b8dc1fe2480f extends \Twig\Template
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
        echo "<a class=\"d-block mx-auto max-w-md\" href=\"/category/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "nested_slug", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"bg-secondary\">
        <div class=\"px-4 py-6 text-center\">
            <h4 class=\"font-5 font-weight-normal pt-1 mb-2\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "</h4>
            <div class=\"h5 pb-2\">";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 5);
        echo "</div>
            <div class=\"btn btn-primary btn-sm\">Shop now</div>
        </div>
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 8), "thumb", [0 => 550, 1 => 450, 2 => "crop"], "method", false, false, false, 8), "html", null, true);
        echo "\" width=\"550\" height=\"450\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\" loading=\"lazy\" class=\"img-fluid w-100\">
    </div>
</a>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetBanners/category-banner-bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"d-block mx-auto max-w-md\" href=\"/category/{{ category.nested_slug }}\">
    <div class=\"bg-secondary\">
        <div class=\"px-4 py-6 text-center\">
            <h4 class=\"font-5 font-weight-normal pt-1 mb-2\">{{ category.name }}</h4>
            <div class=\"h5 pb-2\">{{ category.description|raw }}</div>
            <div class=\"btn btn-primary btn-sm\">Shop now</div>
        </div>
        <img src=\"{{ category.image.thumb(550, 450, 'crop') }}\" width=\"550\" height=\"450\" alt=\"{{ category.name }}\" loading=\"lazy\" class=\"img-fluid w-100\">
    </div>
</a>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetBanners/category-banner-bottom.htm", "");
    }
}
