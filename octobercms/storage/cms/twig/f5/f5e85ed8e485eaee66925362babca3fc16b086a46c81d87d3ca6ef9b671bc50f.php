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

/* /var/www/html/octobercms/themes/ketikidis-emarket/pages/index.htm */
class __TwigTemplate_892ea3fcc17f428aadbe3f6106b789d95c3e35c33e02612a2f2be649fa336c65 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 1), "index_slider_section", [], "any", false, false, false, 1)) {
            // line 2
            echo "<!-- Slider -->
";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "index_slider_type", [], "any", false, false, false, 3) == "products")) {
                // line 4
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/product-slider"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "index_slider_type", [], "any", false, false, false, 5) == "variants")) {
                // line 6
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/variant-slider"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 7
($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "index_slider_type", [], "any", false, false, false, 7) == "category")) {
                // line 8
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['products'] = ($context["sliderProducts"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("productsSlider/default"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "index_slider_type", [], "any", false, false, false, 9) == "categories")) {
                // line 10
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/categories-slider"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
            }
        }
        // line 13
        echo "
";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "index_category_banners_section", [], "any", false, false, false, 14)) {
            // line 15
            echo "<!-- Category Banners -->
";
            // line 16
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/category-banners"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 18
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 19), "index_categories_section", [], "any", false, false, false, 19)) {
            // line 20
            echo "<!-- Categories -->
";
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/categories"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 23
        echo "
";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 24), "index_category_banner_parallax_section", [], "any", false, false, false, 24)) {
            // line 25
            echo "<!-- Category Banner Parallax -->
";
            // line 26
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/category-banner-parallax"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 28
        echo "
";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 29), "index_latestbest_section", [], "any", false, false, false, 29)) {
            // line 30
            echo "<!-- Latest - Bestseller Products -->
";
            // line 31
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/latest-bestseller-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 33
        echo "
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 34), "index_brands_section", [], "any", false, false, false, 34)) {
            // line 35
            echo "<!-- Brands -->
";
            // line 36
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/brands"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 38
        echo "
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 39), "index_category_banner_section", [], "any", false, false, false, 39)) {
            // line 40
            echo "<!-- Category Banner -->
";
            // line 41
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/category-banner"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 43
        echo "
";
        // line 44
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 44), "index_featured_section", [], "any", false, false, false, 44)) {
            // line 45
            echo "<!-- Featured Products -->
";
            // line 46
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['products'] = ($context["featuredProducts"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("featuredProducts/default"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 48
        echo "
";
        // line 49
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 49), "index_product_banner_section", [], "any", false, false, false, 49)) {
            // line 50
            echo "<!-- Product Banner -->
";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 51), "index_product_banner_type", [], "any", false, false, false, 51) == "product")) {
                // line 52
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/product-banner"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 53
($context["this"] ?? null), "theme", [], "any", false, false, false, 53), "index_product_banner_type", [], "any", false, false, false, 53) == "variant")) {
                // line 54
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/variant-banner"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
            }
        }
        // line 57
        echo "
";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 58), "index_latest_section", [], "any", false, false, false, 58)) {
            // line 59
            echo "<!-- Latest Products -->
";
            // line 60
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['products'] = ($context["latestProducts"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("latestProducts/default"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 62
        echo "
";
        // line 63
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 63), "index_topfeatured_section", [], "any", false, false, false, 63)) {
            // line 64
            echo "<!-- Top Rated - Featured Products -->
";
            // line 65
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/toprated-featured-products"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 67
        echo "
";
        // line 68
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 68), "index_blog_section", [], "any", false, false, false, 68)) {
            // line 69
            echo "<!--  Blog -->
";
            // line 70
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("homepage/blog-posts"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 70,  215 => 69,  213 => 68,  210 => 67,  205 => 65,  202 => 64,  200 => 63,  197 => 62,  191 => 60,  188 => 59,  186 => 58,  183 => 57,  177 => 54,  175 => 53,  171 => 52,  169 => 51,  166 => 50,  164 => 49,  161 => 48,  155 => 46,  152 => 45,  150 => 44,  147 => 43,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  129 => 36,  126 => 35,  124 => 34,  121 => 33,  116 => 31,  113 => 30,  111 => 29,  108 => 28,  103 => 26,  100 => 25,  98 => 24,  95 => 23,  90 => 21,  87 => 20,  85 => 19,  82 => 18,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  63 => 10,  61 => 9,  56 => 8,  54 => 7,  50 => 6,  48 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.theme.index_slider_section %}
<!-- Slider -->
{% if this.theme.index_slider_type == 'products' %}
{% partial 'homepage/product-slider' %}
{% elseif this.theme.index_slider_type == 'variants' %}
{% partial 'homepage/variant-slider' %}
{% elseif this.theme.index_slider_type == 'category' %}
{% partial 'productsSlider/default' products=sliderProducts %}
{% elseif this.theme.index_slider_type == 'categories' %}
{% partial 'homepage/categories-slider' %}
{% endif %}
{% endif %}

{% if this.theme.index_category_banners_section %}
<!-- Category Banners -->
{% partial 'homepage/category-banners' %}
{% endif %}

{% if this.theme.index_categories_section %}
<!-- Categories -->
{% partial 'homepage/categories' %}
{% endif %}

{% if this.theme.index_category_banner_parallax_section %}
<!-- Category Banner Parallax -->
{% partial 'homepage/category-banner-parallax' %}
{% endif %}

{% if this.theme.index_latestbest_section %}
<!-- Latest - Bestseller Products -->
{% partial 'homepage/latest-bestseller-products' %}
{% endif %}

{% if this.theme.index_brands_section %}
<!-- Brands -->
{% partial 'homepage/brands' %}
{% endif %}

{% if this.theme.index_category_banner_section %}
<!-- Category Banner -->
{% partial 'homepage/category-banner' %}
{% endif %}

{% if this.theme.index_featured_section %}
<!-- Featured Products -->
{% partial 'featuredProducts/default' products=featuredProducts %}
{% endif %}

{% if this.theme.index_product_banner_section %}
<!-- Product Banner -->
{% if this.theme.index_product_banner_type == 'product' %}
{% partial 'homepage/product-banner' %}
{% elseif this.theme.index_product_banner_type == 'variant' %}
{% partial 'homepage/variant-banner' %}
{% endif %}
{% endif %}

{% if this.theme.index_latest_section %}
<!-- Latest Products -->
{% partial 'latestProducts/default' products=latestProducts %}
{% endif %}

{% if this.theme.index_topfeatured_section %}
<!-- Top Rated - Featured Products -->
{% partial 'homepage/toprated-featured-products' %}
{% endif %}

{%if this.theme.index_blog_section %}
<!--  Blog -->
{% partial 'homepage/blog-posts' %}
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/pages/index.htm", "");
    }
}
