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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/toprated-featured-products.htm */
class __TwigTemplate_0b7835c0c41b94d59237f03be487be861b2c60b23d8e10b0fc746ae45d545a9f extends \Twig\Template
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
        echo "<section class=\"container pt-sm-4 pb-6 pb-md-12\">
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Top Rated"]);
        echo "</span></h3>
            ";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = ($context["widgeTopProducts"] ?? null)        ;
        $context['__cms_partial_params']['ratings'] = true        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "        </div>
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Featured"]);
        echo "</span></h3>
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = ($context["widgetFeaturedProducts"] ?? null)        ;
        $context['__cms_partial_params']['ratings'] = false        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
        <div class=\"col-md-4 col-sm-6 d-block d-sm-none d-md-block mb-4 pl-lg-8\" data-sal=\"flip-left\" data-sal-duration=\"1200\">
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = ($context["indexTopfeaturedBanner"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/category-banner-bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/toprated-featured-products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  70 => 12,  66 => 10,  60 => 9,  56 => 8,  52 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container pt-sm-4 pb-6 pb-md-12\">
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>{{ 'Top Rated'|_ }}</span></h3>
            {% partial 'widgetProducts/default' products=widgeTopProducts ratings=true %}
        </div>
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>{{ 'Featured'|_ }}</span></h3>
            {% partial 'widgetProducts/default' products=widgetFeaturedProducts ratings=false %}
        </div>
        <div class=\"col-md-4 col-sm-6 d-block d-sm-none d-md-block mb-4 pl-lg-8\" data-sal=\"flip-left\" data-sal-duration=\"1200\">
            {% partial 'widgetBanners/category-banner-bottom' category=indexTopfeaturedBanner %}
        </div>
    </div>
</section>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/toprated-featured-products.htm", "");
    }
}
