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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/addtocart.htm */
class __TwigTemplate_e889eff4f684e239cd50a4010f90023d46ae3d3ebd6d40368e5216494330da58 extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div class=\"mall-product__property-stock font-5 opacity-70 pb-2 text-";
            echo (((($context["stock"] ?? null) > 0)) ? ("success") : ("danger"));
            echo "\">
    ";
            // line 3
            if ((($context["stock"] ?? null) > 10)) {
                // line 4
                echo "        ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.many_available"]);
                echo "
    ";
            } elseif ((            // line 5
($context["stock"] ?? null) > 0)) {
                // line 6
                echo "        ";
                echo call_user_func_array($this->env->getFilter('transchoice')->getCallable(), ["offline.mall::frontend.stock.available", ($context["stock"] ?? null), ["stock" => ($context["stock"] ?? null)]]);
                echo "
    ";
            } else {
                // line 8
                echo "        ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.unavailable"]);
                echo "
    ";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "<div class=\"d-flex align-items-center pt-2 pb-4\">
    ";
        // line 13
        if (((($context["stock"] ?? null) > 0) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 13))) {
            // line 14
            echo "    <div class=\"mall-product__add-to-cart-form\">
        <!--<label for=\"quantity\">";
            // line 15
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.quantity"]);
            echo "</label>-->
        <input type=\"number\"
               id=\"quantity\"
               class=\"form-control hover:border-primary px-3 mr-2 w-16\"
               min=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_min", [], "any", false, false, false, 19), "html", null, true);
            echo "\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_max", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
               name=\"quantity\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "quantity_default", [], "any", false, false, false, 20), 1)) : (1)), "html", null, true);
            echo "\">
        <div data-validate-for=\"quantity\"></div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-block\" data-attach-loading>
        <i class=\"mr-2\" data-feather=\"shopping-cart\"></i>";
            // line 24
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart.add"]);
            echo "
    </button>
    ";
        }
        // line 27
        echo "</div>
";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::belowcartbutton")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "
<script>
    // Feather Icons
    \$( document ).ready(function() {
        feather.replace()
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/addtocart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  106 => 28,  103 => 27,  97 => 24,  90 => 20,  84 => 19,  77 => 15,  74 => 14,  72 => 13,  69 => 12,  65 => 10,  59 => 8,  53 => 6,  51 => 5,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not item.allow_out_of_stock_purchases %}
<div class=\"mall-product__property-stock font-5 opacity-70 pb-2 text-{{ stock > 0 ? 'success' : 'danger' }}\">
    {% if stock > 10 %}
        {{ 'offline.mall::frontend.stock.many_available' | trans }}
    {% elseif stock > 0 %}
        {{ 'offline.mall::frontend.stock.available' | transchoice(stock, {stock: stock}) }}
    {% else %}
        {{ 'offline.mall::frontend.stock.unavailable' | trans }}
    {% endif %}
</div>
{% endif %}
<div class=\"d-flex align-items-center pt-2 pb-4\">
    {% if stock > 0 or item.allow_out_of_stock_purchases %}
    <div class=\"mall-product__add-to-cart-form\">
        <!--<label for=\"quantity\">{{ 'offline.mall::frontend.quantity' | trans }}</label>-->
        <input type=\"number\"
               id=\"quantity\"
               class=\"form-control hover:border-primary px-3 mr-2 w-16\"
               min=\"{{ item.quantity_min }}\" max=\"{{ item.quantity_max }}\"
               name=\"quantity\" value=\"{{ item.quantity_default | default(1) }}\">
        <div data-validate-for=\"quantity\"></div>
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-block\" data-attach-loading>
        <i class=\"mr-2\" data-feather=\"shopping-cart\"></i>{{ 'offline.mall::frontend.cart.add' | trans }}
    </button>
    {% endif %}
</div>
{% partial __SELF__ ~ '::belowcartbutton' %}

<script>
    // Feather Icons
    \$( document ).ready(function() {
        feather.replace()
    });
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/addtocart.htm", "");
    }
}
