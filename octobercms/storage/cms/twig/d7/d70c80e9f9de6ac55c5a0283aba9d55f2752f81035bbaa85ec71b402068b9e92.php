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

/* /var/www/html/octobercms/themes/ketikidis-emarket/pages/category.htm */
class __TwigTemplate_72f3b2c0f24c8dd6b60f7745795b31d142055e05e9ca5527957d07cb3e1fb9ab extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pageHeader/products"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"container pb-12\">
    <div class=\"row\">
        <div class=\"col-lg-9 mb-6 ";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "shop_layout", [], "any", false, false, false, 5) == "order-lg-1")) ? ("order-lg-2") : ("order-lg-1"));
        echo "\">
            ";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("products"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "        </div>
        <div class=\"col-lg-3 mb-6 ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "shop_layout", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("productCategories/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("productsFilter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "shop_product_banner_section", [], "any", false, false, false, 11)) {
            // line 12
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "shop_product_banner_type", [], "any", false, false, false, 12) == "product")) {
                // line 13
                echo "            ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/product-banner-bottom"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 14
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "shop_product_banner_type", [], "any", false, false, false, 14) == "variant")) {
                // line 15
                echo "            ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/variant-banner-bottom"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 16
                echo "            ";
            }
            // line 17
            echo "            ";
        }
        // line 18
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  92 => 17,  89 => 16,  84 => 15,  81 => 14,  76 => 13,  73 => 12,  70 => 11,  65 => 10,  61 => 9,  57 => 8,  54 => 7,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'pageHeader/products' %}

<div class=\"container pb-12\">
    <div class=\"row\">
        <div class=\"col-lg-9 mb-6 {{ this.theme.shop_layout == 'order-lg-1' ? 'order-lg-2' : 'order-lg-1' }}\">
            {% component 'products' %}
        </div>
        <div class=\"col-lg-3 mb-6 {{ this.theme.shop_layout }}\">
            {% partial 'productCategories/default' %}
            {% component 'productsFilter' %}
            {% if this.theme.shop_product_banner_section %}
            {% if this.theme.shop_product_banner_type == 'product' %}
            {% partial 'widgetBanners/product-banner-bottom' %}
            {% elseif this.theme.shop_product_banner_type == 'variant' %}
            {% partial 'widgetBanners/variant-banner-bottom' %}
            {% endif %}
            {% endif %}
        </div>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/pages/category.htm", "");
    }
}
