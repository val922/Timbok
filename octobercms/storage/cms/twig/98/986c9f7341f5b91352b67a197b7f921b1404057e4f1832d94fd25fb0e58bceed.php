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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/belowcartbutton.htm */
class __TwigTemplate_53dd4686b66df9fa90743e15b7bb0647825c5edd89a55c087d997aec8a5fad43 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['product'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product_id", [], "any", false, false, false, 1)        ;
        $context['__cms_component_params']['variant'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variant_id", [], "any", false, false, false, 1)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("wishlistButton"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/belowcartbutton.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'wishlistButton' product=item.product_id variant=item.variant_id %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/belowcartbutton.htm", "");
    }
}
