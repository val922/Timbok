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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/price.htm */
class __TwigTemplate_08e40b07b16d59cf69e14a31efc8b2205fa71fe8a4e5a1e1db8240577d86b554 extends \Twig\Template
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
        if (( !twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "priceRange", [], "any", false, false, false, 1) == false)) {
            // line 2
            echo "    <div class=\"mall-property-group mb-6 pb-4\">
        <div class=\"mall-property-group__name mall-property-group__name--price position-relative pb-3 mb-5\">
            <h3 class=\"position-relative font-6 font-weight-semibold mb-0 decorated-right\">
\t\t\t\t<span>";
            // line 5
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.price"]);
            echo "</span>
\t\t\t</h3>
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['id'] = "price"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::clearfilter")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        </div>
        <div class=\"mall-property pt-3\">
            ";
            // line 10
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['id'] = "price"            ;
            $context['__cms_partial_params']['slug'] = "price"            ;
            $context['__cms_partial_params']['min'] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source,             // line 13
($context["__SELF__"] ?? null), "priceRange", [], "any", false, false, false, 13)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)            ;
            $context['__cms_partial_params']['max'] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source,             // line 14
($context["__SELF__"] ?? null), "priceRange", [], "any", false, false, false, 14)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 10
($context["__SELF__"] ?? null) . "::range")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/price.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  66 => 10,  64 => 14,  62 => 13,  58 => 10,  54 => 8,  49 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not __SELF__.priceRange == false %}
    <div class=\"mall-property-group mb-6 pb-4\">
        <div class=\"mall-property-group__name mall-property-group__name--price position-relative pb-3 mb-5\">
            <h3 class=\"position-relative font-6 font-weight-semibold mb-0 decorated-right\">
\t\t\t\t<span>{{ 'offline.mall::frontend.price' | trans }}</span>
\t\t\t</h3>
            {% partial __SELF__ ~ '::clearfilter' id='price' %}
        </div>
        <div class=\"mall-property pt-3\">
            {% partial __SELF__ ~ '::range'
                id  = 'price'
                slug  = 'price'
                min = __SELF__.priceRange[0]
                max = __SELF__.priceRange[1] %}
        </div>
    </div>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/price.htm", "");
    }
}
