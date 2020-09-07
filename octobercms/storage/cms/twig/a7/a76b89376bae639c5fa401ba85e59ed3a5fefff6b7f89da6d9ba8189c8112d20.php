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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/brands.htm */
class __TwigTemplate_310bee2ab4465bdc77d77bb125649e3801bd956fa703f431c79f9e01f4a09b1d extends \Twig\Template
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
        echo "<section class=\"container pb-6 mt-md-4\">
    <h2 class=\"h3 pb-4 decorated max-w-md mx-auto\"><span>";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Stores"]);
        echo "</span></h2>
    <div class=\"brands-slider\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 5
            echo "        <div class=\"position-relative group\">
            <a class=\"d-block border py-4 py-sm-6 mx-4\" href=\"/brand/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "slug", [], "any", false, false, false, 6), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "slug", [], "any", false, false, false, 6), "html", null, true);
            echo "&sort=latest\">
                <img class=\"d-block mx-auto w-40 img-fluid\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["brand"], "logo", [], "any", false, false, false, 7), "thumb", [0 => 300, 1 => 160, 2 => "crop"], "method", false, false, false, 7), "html", null, true);
            echo "\" width=\"300\" height=\"160\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "\" loading=\"lazy\">
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</section>
        
";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 15
        echo "<script>
\$('.brands-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    lazyLoad: 'ondemand',
    accessibility: false,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
    ]
});
</script>
";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/brands.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 14,  77 => 15,  75 => 14,  70 => 11,  58 => 7,  52 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container pb-6 mt-md-4\">
    <h2 class=\"h3 pb-4 decorated max-w-md mx-auto\"><span>{{ 'Stores'|_ }}</span></h2>
    <div class=\"brands-slider\">
        {% for brand in brands %}
        <div class=\"position-relative group\">
            <a class=\"d-block border py-4 py-sm-6 mx-4\" href=\"/brand/{{ brand.slug }}?brand={{ brand.slug }}&sort=latest\">
                <img class=\"d-block mx-auto w-40 img-fluid\" src=\"{{ brand.logo.thumb(300, 160, 'crop') }}\" width=\"300\" height=\"160\" alt=\"{{ brand.name }}\" loading=\"lazy\">
            </a>
        </div>
        {% endfor %}
    </div>
</section>
        
{% put scripts %}
<script>
\$('.brands-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: false,
    arrows: false,
    lazyLoad: 'ondemand',
    accessibility: false,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2
          }
        }
    ]
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/brands.htm", "");
    }
}
