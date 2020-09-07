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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistButtons/item.htm */
class __TwigTemplate_fe70dcf0b06f04214d7a4226f71f6936d44a73e17b0401a7c216aa0e808c9f5d extends \Twig\Template
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
        echo "<a href=\"javascript:;\"
   class=\"position-absolute top-2 right-2 d-flex justify-content-center align-items-center text-muted bg-white btn p-0 rounded-circle opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-40 w-8 h-8 z-10\"
   data-request=\"onAdd\"
   data-request-flash
   data-request-success=\"\$.publish('mall.wishlist.productAdded', data);\"
   data-request-data=\"
         wishlist_id: '";
        // line 7
        echo twig_escape_filter($this->env, ($context["list_id"] ?? null), "html", null, true);
        echo "',
         product_id: '";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productHashId", [], "any", false, false, false, 8), "html", null, true);
        echo "',
         variant_id: '";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 9), "html", null, true);
        echo "'
    \">
    <i data-feather=\"heart\"></i>
</a>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistButtons/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"javascript:;\"
   class=\"position-absolute top-2 right-2 d-flex justify-content-center align-items-center text-muted bg-white btn p-0 rounded-circle opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-40 w-8 h-8 z-10\"
   data-request=\"onAdd\"
   data-request-flash
   data-request-success=\"\$.publish('mall.wishlist.productAdded', data);\"
   data-request-data=\"
         wishlist_id: '{{ list_id }}',
         product_id: '{{ item.productHashId }}',
         variant_id: '{{ item.variantHashId }}'
    \">
    <i data-feather=\"heart\"></i>
</a>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistButtons/item.htm", "");
    }
}
