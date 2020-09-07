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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/price.htm */
class __TwigTemplate_ece81c1d7df38d64017b0d2f21ad6f4f2f982aeed8d2019ae98fcdd6ba81543f extends \Twig\Template
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
        $context["price"] = (((isset($context["price"]) || array_key_exists("price", $context))) ? (_twig_default_filter(($context["price"] ?? null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 1))) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 1)));
        // line 2
        echo "
<h2 class=\"mall-product__current-price font-18 pt-4\">
    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 4), "integer", [], "any", false, false, false, 4))) {
            // line 5
            echo "    <span class=\"mall-product__old-price lead text-muted mr-2\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 6)) {
                // line 7
                echo "            <del>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 7), "string", [], "any", false, false, false, 7);
                echo "</del>
        ";
            } else {
                // line 9
                echo "            <del>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 9), "string", [], "any", false, false, false, 9);
                echo "</del>
        ";
            }
            // line 11
            echo "    </span>
    ";
        }
        // line 13
        echo "    <span class=\"mall-product__current-price text-primary\">
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['price'] = twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 14)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::currentprice")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "    </span>
</h2>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/price.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  69 => 14,  66 => 13,  62 => 11,  56 => 9,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set price = price|default(item.price()) %}

<h2 class=\"mall-product__current-price font-18 pt-4\">
    {% if price.official or item.oldPrice().integer %}
    <span class=\"mall-product__old-price lead text-muted mr-2\">
        {% if price.official %}
            <del>{{ price.official.string | raw }}</del>
        {% else %}
            <del>{{ item.oldPrice().string | raw }}</del>
        {% endif %}
    </span>
    {% endif %}
    <span class=\"mall-product__current-price text-primary\">
        {% partial __SELF__ ~ '::currentprice' price=price.string %}
    </span>
</h2>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/price.htm", "");
    }
}
