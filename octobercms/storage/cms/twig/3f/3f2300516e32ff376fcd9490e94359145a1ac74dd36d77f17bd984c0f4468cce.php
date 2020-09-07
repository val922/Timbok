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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/cart.htm */
class __TwigTemplate_dd6b8bc82332dd645cd7c5f423d9a455a6d898b489a4ccbb48d291c7525e344e extends \Twig\Template
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
        echo "<div class=\"col-xl-9 col-md-8\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 2), "count", [], "any", false, false, false, 2) < 1)) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::empty")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-base")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</div>
";
        // line 8
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8) < 1)) {
            // line 9
            echo "<div class=\"col-xl-3 col-md-4 pt-6 pt-md-0\">
    <h2 class=\"font-weight-semibold font-6 px-6 py-4 bg-secondary text-center\">Order summary</h2>
    <div class=\"font-5 border-bottom pt-3 pb-4\">
        ";
            // line 12
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 12)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-total")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['discounts'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 13), "appliedDiscounts", [], "any", false, false, false, 13)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-discounts")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['shipping'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 14), "shippingTotal", [], "any", false, false, false, 14)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-shipping")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['payment'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 15), "paymentTotal", [], "any", false, false, false, 15)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-payment")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 16)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-taxes")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 17
            echo "    </div>
    ";
            // line 18
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['totals'] = twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "totals", [], "any", false, false, false, 18)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-grandtotal")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "    
    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showDiscountApplier", [], "any", false, false, false, 20)) {
                // line 21
                echo "    <div id=\"cart-accordion\" class=\"py-6\">
        <div class=\"card rounded-0 overflow-hidden\">
            <div class=\"card-header bg-transparent border-bottom px-5 mb-n1\" id=\"headingOne\">
                <h5 class=\"font-weight-semibold mb-0\">
                    <a href=\"#collapseOne\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\" class=\"d-flex align-items-center\">
                        <span class=\"font-6 text-link\">Discount Code</span>
                        <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 font-weight-medium text-muted border rounded-circle w-8 h-8\">
                            <i class=\"w-4 h-4\" data-feather=\"tag\"></i>
                        </span>
                    </a>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#cart-accordion\">
                <div class=\"card-body\">
\t\t\t\t";
                // line 35
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 35), "count", [], "any", false, false, false, 35) < 1)) {
                    // line 36
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showDiscountApplier", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "\t\t\t\t\t\t";
                        $context['__cms_partial_params'] = [];
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::discountapplier")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 38
                        echo "\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t";
                }
                // line 40
                echo "                </div>
            </div>
        </div>
    </div>
    ";
            }
            // line 45
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProceedToCheckoutButton", [], "any", false, false, false, 45) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "products", [], "any", false, false, false, 45), "count", [], "any", false, false, false, 45) > 0))) {
                // line 46
                echo "\t\t";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::proceedtocheckout")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 47
                echo "\t";
            }
            // line 48
            echo "</div>
";
        }
        // line 50
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
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 50,  160 => 48,  157 => 47,  152 => 46,  149 => 45,  142 => 40,  139 => 39,  136 => 38,  131 => 37,  128 => 36,  126 => 35,  110 => 21,  108 => 20,  105 => 19,  100 => 18,  97 => 17,  91 => 16,  85 => 15,  79 => 14,  73 => 13,  68 => 12,  63 => 9,  61 => 8,  58 => 7,  55 => 6,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xl-9 col-md-8\">
    {% if cart.products.count < 1 %}
        {% partial __SELF__ ~ '::empty' %}
    {% else %}
        {% partial __SELF__ ~ '::table-base' %}
    {% endif %}
</div>
{% if not cart.products.count < 1 %}
<div class=\"col-xl-3 col-md-4 pt-6 pt-md-0\">
    <h2 class=\"font-weight-semibold font-6 px-6 py-4 bg-secondary text-center\">Order summary</h2>
    <div class=\"font-5 border-bottom pt-3 pb-4\">
        {% partial __SELF__ ~ '::table-total'      totals=cart.totals %}
        {% partial __SELF__ ~ '::table-discounts'  discounts=cart.totals.appliedDiscounts %}
        {% partial __SELF__ ~ '::table-shipping'   shipping=cart.totals.shippingTotal %}
        {% partial __SELF__ ~ '::table-payment'    payment=cart.totals.paymentTotal %}
        {% partial __SELF__ ~ '::table-taxes'      totals=cart.totals %}
    </div>
    {% partial __SELF__ ~ '::table-grandtotal' totals=cart.totals %}
    
    {% if __SELF__.showDiscountApplier %}
    <div id=\"cart-accordion\" class=\"py-6\">
        <div class=\"card rounded-0 overflow-hidden\">
            <div class=\"card-header bg-transparent border-bottom px-5 mb-n1\" id=\"headingOne\">
                <h5 class=\"font-weight-semibold mb-0\">
                    <a href=\"#collapseOne\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\" class=\"d-flex align-items-center\">
                        <span class=\"font-6 text-link\">Discount Code</span>
                        <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 font-weight-medium text-muted border rounded-circle w-8 h-8\">
                            <i class=\"w-4 h-4\" data-feather=\"tag\"></i>
                        </span>
                    </a>
                </h5>
            </div>
            <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#cart-accordion\">
                <div class=\"card-body\">
\t\t\t\t{% if not cart.products.count < 1 %}
\t\t\t\t\t{% if __SELF__.showDiscountApplier %}
\t\t\t\t\t\t{% partial __SELF__ ~ '::discountapplier' %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
                </div>
            </div>
        </div>
    </div>
    {% endif %}
\t{% if __SELF__.showProceedToCheckoutButton and cart.products.count > 0 %}
\t\t{% partial __SELF__ ~ '::proceedtocheckout' %}
\t{% endif %}
</div>
{% endif %}

<script>
    // Feather Icons
    \$( document ).ready(function() {
        feather.replace()
    });
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/cart.htm", "");
    }
}
