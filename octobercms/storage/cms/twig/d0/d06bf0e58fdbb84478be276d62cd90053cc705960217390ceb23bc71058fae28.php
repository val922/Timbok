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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetProducts/entries.htm */
class __TwigTemplate_70d1bbe523ba852ec880ee716e4595a9144fbe51dcf03f07e7aecf583697df27 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "items", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "items", [], "any", false, false, false, 2)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/items"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/empty"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetProducts/entries.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if products.items.count %}
    {% partial 'widgetProducts/items' items=products.items %}
{% else %}
    {% partial 'widgetProducts/empty' %}
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetProducts/entries.htm", "");
    }
}
