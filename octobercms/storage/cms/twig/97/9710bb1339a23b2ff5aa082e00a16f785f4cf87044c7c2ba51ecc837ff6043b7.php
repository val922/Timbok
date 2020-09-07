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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/categories.htm */
class __TwigTemplate_0a9211d5a92be9f4de1f631e9a382ecf96a04bcfbd5ad04a4f30cdf4ef2c0256 extends \Twig\Template
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
        echo "<section class=\"container pb-12 mt-4\">
    <h2 class=\"h3 pb-4 decorated max-w-md mx-auto\"><span>";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our Stock"]);
        echo "</span></h2>
    <div class=\"categories-slider\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortedCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "        <div class=\"card border-0 mx-4\">
            <a class=\"d-flex\" href=\"/category/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
                <div class=\"mr-3\">
                    <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 8)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "image", [], "any", false, false, false, 8), "thumb", [0 => 350, 1 => 345, 2 => "crop"], "method", false, false, false, 8), "html", null, true);
            echo "\" width=\"350\" height=\"345\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                </div>
                <div class=\"\">
                    <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 11)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "image", [], "any", false, false, false, 11), "thumb", [0 => 175, 1 => 162, 2 => "crop"], "method", false, false, false, 11), "html", null, true);
            echo "\" width=\"175\" height=\"162\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\" loading=\"lazy\" class=\"d-block img-fluid mb-3\"/>
                    <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 12)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), "image", [], "any", false, false, false, 12), "thumb", [0 => 175, 1 => 162, 2 => "crop"], "method", false, false, false, 12), "html", null, true);
            echo "\" width=\"175\" height=\"162\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                </div>
            </a>
            <div class=\"card-body border border-top-0 mt-n1 py-6 text-center\">
                <h2 class=\"h5 mb-1\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
                <div class=\"font-size-xs font-4 text-muted font-weight-light mb-4\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 17);
            echo "</div>
                <a class=\"btn btn-sm btn-outline-primary px-3\" href=\"/category/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 18), "html", null, true);
            echo "\">Shop&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
</section>

";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 26
        echo "<script>
\$('.categories-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 6000,
    dots: false,
    arrows: false,
    lazyLoad: 'ondemand',
    accessibility: false,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
    ]
});
</script>
";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 25,  107 => 26,  105 => 25,  100 => 22,  88 => 18,  84 => 17,  80 => 16,  71 => 12,  65 => 11,  57 => 8,  52 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container pb-12 mt-4\">
    <h2 class=\"h3 pb-4 decorated max-w-md mx-auto\"><span>{{ 'Our Stock'|_ }}</span></h2>
    <div class=\"categories-slider\">
        {% for category in sortedCategories %}
        <div class=\"card border-0 mx-4\">
            <a class=\"d-flex\" href=\"/category/{{ category.nested_slug }}\">
                <div class=\"mr-3\">
                    <img src=\"{{ category.products[0].image.thumb(350, 345, 'crop') }}\" width=\"350\" height=\"345\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                </div>
                <div class=\"\">
                    <img src=\"{{ category.products[1].image.thumb(175, 162, 'crop') }}\" width=\"175\" height=\"162\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"d-block img-fluid mb-3\"/>
                    <img src=\"{{ category.products[2].image.thumb(175, 162, 'crop') }}\" width=\"175\" height=\"162\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                </div>
            </a>
            <div class=\"card-body border border-top-0 mt-n1 py-6 text-center\">
                <h2 class=\"h5 mb-1\">{{ category.name }}</h2>
                <div class=\"font-size-xs font-4 text-muted font-weight-light mb-4\">{{ category.description|raw }}</div>
                <a class=\"btn btn-sm btn-outline-primary px-3\" href=\"/category/{{ category.nested_slug }}\">Shop&nbsp;{{ category.name }}</a>
            </div>
        </div>
        {% endfor %}
    </div>
</section>

{% put scripts %}
<script>
\$('.categories-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 6000,
    dots: false,
    arrows: false,
    lazyLoad: 'ondemand',
    accessibility: false,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }
    ]
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/categories.htm", "");
    }
}
