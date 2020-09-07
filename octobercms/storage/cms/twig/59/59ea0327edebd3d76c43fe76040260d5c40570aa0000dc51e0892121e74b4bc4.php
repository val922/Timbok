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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-total.htm */
class __TwigTemplate_dff684a710826c2e68a89431cd922933fdf865b9a4a980e913a330f8cc5e531e extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 1)) {
            // line 4
            echo "<div class=\"mall-cart__total d-flex justify-content-between mb-2\">
    <span>";
            // line 5
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
            echo ":</span><span>";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "productPostTaxes", [], "any", false, false, false, 5)]);
            echo "</span>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-total.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showShipping %}
{# if the showShipping property is set to false, the grandtotal row will equal this row #}
{# this is why we only need to display this row if the showShipping property is set to true #}
<div class=\"mall-cart__total d-flex justify-content-between mb-2\">
    <span>{{ 'offline.mall::frontend.total' | trans }}:</span><span>{{ totals.productPostTaxes | money }}</span>
</div>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-total.htm", "");
    }
}
