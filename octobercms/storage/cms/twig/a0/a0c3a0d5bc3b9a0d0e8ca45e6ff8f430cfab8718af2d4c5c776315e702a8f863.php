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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/latestProducts/default.htm */
class __TwigTemplate_fb83009522ec2fdabc2065b069b5f1cecb5f228b0de477a9f71201792c1d4084 extends \Twig\Template
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
        echo "<section class=\"mall-products container pt-sm-4 pb-6 pb-md-12\">
    <h2 class=\"h3 font-weight-semibold pb-6 max-w-md mx-auto decorated\"><span>";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Latest Products"]);
        echo "</span></h2>
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("latestProducts/entries"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</section>

";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 7
        echo "<script>
\$('.related-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 6000,
    dots: true,
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
            slidesToShow: 1
          }
        }
    ]
});
</script>
";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/latestProducts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 6,  54 => 7,  52 => 6,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mall-products container pt-sm-4 pb-6 pb-md-12\">
    <h2 class=\"h3 font-weight-semibold pb-6 max-w-md mx-auto decorated\"><span>{{ 'Latest Products'|_ }}</span></h2>
    {% partial 'latestProducts/entries' %}
</section>

{% put scripts %}
<script>
\$('.related-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 6000,
    dots: true,
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
            slidesToShow: 1
          }
        }
    ]
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/latestProducts/default.htm", "");
    }
}
