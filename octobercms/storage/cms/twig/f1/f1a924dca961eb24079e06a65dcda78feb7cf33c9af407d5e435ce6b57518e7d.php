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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banner-parallax.htm */
class __TwigTemplate_12d10fb7fdecd7dccf63de62e79d746cd51e7c1ce4deccf6c583a766eadaa1cb extends \Twig\Template
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
        $context["category"] = ($context["indexCategoryBannerParallax"] ?? null);
        // line 2
        echo "<section class=\"container-fluid px-0 mb-12 mt-6 position-relative\">
    <div class=\"bg-size-cover bg-position-center py-14\" style=\"background:url('";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 3), "thumb", [0 => 1000, 1 => 750, 2 => "crop"], "method", false, false, false, 3), "html", null, true);
        echo "') 50% 50% / cover no-repeat fixed;\">
        <div class=\"position-absolute inset-0 w-100 h-100\" style=\"background: linear-gradient(to right, rgba(247, 247, 247) 0, rgba(247, 247, 247) 30%, rgba(247, 247, 247, 0.8) 60%, rgba(39, 177, 228, 0.2) 100%);\"></div>
        <div class=\"row py-lg-6 justify-content-center\">
            <div class=\"col-lg-5\">
                <div class=\"px-4 px-lg-0 text-center\" data-sal=\"zoom-in\" data-sal-duration=\"1200\">
                    <div class=\"d-flex align-items-center flex-wrap justify-content-center\">
                        <h3 class=\"font-weight-light max-w-md\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Top Sales"]);
        echo "</h3>
                        <span class=\"d-flex justify-content-center align-items-center rounded-circle w-20 h-20 bg-danger text-white font-11 font-weight-semibold ml-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["15%"]);
        echo "</span>
                    </div>
                    <h2 class=\"h1 mb-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
                    <div class=\"h4 mb-4 font-weight-light\">";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 13);
        echo "</div>
                    <div class=\"d-flex justify-content-center mb-6\">
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 15)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null), "image", [], "any", false, false, false, 15), "thumb", [0 => 175, 1 => 162, 2 => "crop"], "method", false, false, false, 15), "html", null, true);
        echo "\" width=\"175\" height=\"162\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "\" loading=\"lazy\" class=\"w-20 w-lg-100 img-fluid transition-20 opacity-80 hover:opacity-100 mr-4\"/>
                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 16)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[2] ?? null) : null), "image", [], "any", false, false, false, 16), "thumb", [0 => 175, 1 => 162, 2 => "crop"], "method", false, false, false, 16), "html", null, true);
        echo "\" width=\"175\" height=\"162\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "\" loading=\"lazy\" class=\"w-20 w-lg-100 img-fluid transition-20 opacity-80 hover:opacity-100 mr-4\"/>
                        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 17)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[3] ?? null) : null), "image", [], "any", false, false, false, 17), "thumb", [0 => 175, 1 => 162, 2 => "crop"], "method", false, false, false, 17), "html", null, true);
        echo "\" width=\"175\" height=\"162\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "\" loading=\"lazy\" class=\"w-20 w-lg-100 img-fluid transition-20 opacity-80 hover:opacity-100\"/>
                    </div>
                    <a class=\"btn btn-primary px-6\" href=\"/category/";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "nested_slug", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
                        Shop now<i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banner-parallax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  81 => 17,  75 => 16,  69 => 15,  64 => 13,  60 => 12,  55 => 10,  51 => 9,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set category = indexCategoryBannerParallax %}
<section class=\"container-fluid px-0 mb-12 mt-6 position-relative\">
    <div class=\"bg-size-cover bg-position-center py-14\" style=\"background:url('{{ category.image.thumb(1000, 750, 'crop') }}') 50% 50% / cover no-repeat fixed;\">
        <div class=\"position-absolute inset-0 w-100 h-100\" style=\"background: linear-gradient(to right, rgba(247, 247, 247) 0, rgba(247, 247, 247) 30%, rgba(247, 247, 247, 0.8) 60%, rgba(39, 177, 228, 0.2) 100%);\"></div>
        <div class=\"row py-lg-6 justify-content-center\">
            <div class=\"col-lg-5\">
                <div class=\"px-4 px-lg-0 text-center\" data-sal=\"zoom-in\" data-sal-duration=\"1200\">
                    <div class=\"d-flex align-items-center flex-wrap justify-content-center\">
                        <h3 class=\"font-weight-light max-w-md\">{{ 'Top Sales'|_ }}</h3>
                        <span class=\"d-flex justify-content-center align-items-center rounded-circle w-20 h-20 bg-danger text-white font-11 font-weight-semibold ml-4\">{{ '15%'|_ }}</span>
                    </div>
                    <h2 class=\"h1 mb-4\">{{ category.name }}</h2>
                    <div class=\"h4 mb-4 font-weight-light\">{{ category.description|raw }}</div>
                    <div class=\"d-flex justify-content-center mb-6\">
                        <img src=\"{{ category.products[1].image.thumb(175, 162, 'crop') }}\" width=\"175\" height=\"162\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"w-20 w-lg-100 img-fluid transition-20 opacity-80 hover:opacity-100 mr-4\"/>
                        <img src=\"{{ category.products[2].image.thumb(175, 162, 'crop') }}\" width=\"175\" height=\"162\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"w-20 w-lg-100 img-fluid transition-20 opacity-80 hover:opacity-100 mr-4\"/>
                        <img src=\"{{ category.products[3].image.thumb(175, 162, 'crop') }}\" width=\"175\" height=\"162\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"w-20 w-lg-100 img-fluid transition-20 opacity-80 hover:opacity-100\"/>
                    </div>
                    <a class=\"btn btn-primary px-6\" href=\"/category/{{ category.nested_slug }}\">
                        Shop now<i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banner-parallax.htm", "");
    }
}
