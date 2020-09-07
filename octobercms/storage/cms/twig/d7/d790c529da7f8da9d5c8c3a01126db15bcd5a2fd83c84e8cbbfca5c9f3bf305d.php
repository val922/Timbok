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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/latest-bestseller-products.htm */
class __TwigTemplate_11ad020bf8ff2ad337c94011eedf19836a274917325991ae36b454544e8eee7a extends \Twig\Template
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
        <div class=\"col-md-4 col-sm-6 d-block d-sm-none d-md-block mb-4 pr-lg-8\" data-sal=\"flip-right\" data-sal-duration=\"1200\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['category'] = ($context["indexLatestbestBanner"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/category-banner-bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["BestSellers"]);
        echo "</span></h3>
            ";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = ($context["widgetBestsellerProducts"] ?? null)        ;
        $context['__cms_partial_params']['ratings'] = false        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        </div>
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Latest"]);
        echo "</span></h3>
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['products'] = ($context["widgetLatestProducts"] ?? null)        ;
        $context['__cms_partial_params']['ratings'] = false        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/latest-bestseller-products.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  69 => 12,  65 => 11,  61 => 9,  55 => 8,  51 => 7,  47 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container pt-sm-4 pb-6 pb-md-12\">
    <div class=\"row\">
        <div class=\"col-md-4 col-sm-6 d-block d-sm-none d-md-block mb-4 pr-lg-8\" data-sal=\"flip-right\" data-sal-duration=\"1200\">
            {% partial 'widgetBanners/category-banner-bottom' category=indexLatestbestBanner %}
        </div>
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>{{ 'BestSellers'|_ }}</span></h3>
            {% partial 'widgetProducts/default' products=widgetBestsellerProducts ratings=false %}
        </div>
        <div class=\"col-md-4 col-sm-6 mb-2 py-4\">
            <h3 class=\"d-block position-relative font-7 pb-2 mb-4 decorated-right\"><span>{{ 'The Latest'|_ }}</span></h3>
            {% partial 'widgetProducts/default' products=widgetLatestProducts ratings=false %}
        </div>
    </div>
</section>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/latest-bestseller-products.htm", "");
    }
}
