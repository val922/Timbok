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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/cart.htm */
class __TwigTemplate_6c8d22487b8fe1545e3850bb0f337c7d85e8a4d4ff73def77b9673321d5c0490 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 1), "items", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1) < 1)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::empty")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "
    ";
            // line 5
            $context["items"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 5), "items", [], "any", false, false, false, 5);
            // line 6
            echo "    ";
            $context["totals"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 6), "totals", [], "any", false, false, false, 6);
            // line 7
            echo "
    <div class=\"mall-cart__wrapper\">
        <div class=\"mall-cart__table\">
            <div>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 11), "items", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['product'] = $context["product"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart::table-entry"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 13
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "            </div>
            
            <div class=\"flex-wrap justify-content-between bg-secondary font-5\">
                <div class=\"px-4 pt-3\">
                    <span>";
            // line 18
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['totals'] = ($context["totals"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart::table-total"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "</span>
                </div>
                <div class=\"px-4 pb-1\">
                    <span>
\t\t\t\t\t\t";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 22)) {
                // line 23
                echo "\t\t\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['shipping'] = twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "shippingTotal", [], "any", false, false, false, 23)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::shipping")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 24
                echo "\t\t\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['totals'] = ($context["totals"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart::table-grandtotal"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 25
                echo "\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['totals'] = ($context["totals"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cart::table-taxes"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 27
            echo "\t\t\t\t\t</span>
                </div>
            </div>
            
        </div>
    </div>


";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  108 => 26,  105 => 25,  99 => 24,  93 => 23,  91 => 22,  81 => 18,  75 => 14,  69 => 13,  63 => 12,  59 => 11,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.currentItem.items.count < 1 %}
    {% partial __SELF__ ~ '::empty' %}
{% else %}

    {% set items = __SELF__.currentItem.items %}
    {% set totals = __SELF__.currentItem.totals %}

    <div class=\"mall-cart__wrapper\">
        <div class=\"mall-cart__table\">
            <div>
            {% for product in __SELF__.currentItem.items %}
                {% partial 'cart::table-entry' product=product %}
            {% endfor %}
            </div>
            
            <div class=\"flex-wrap justify-content-between bg-secondary font-5\">
                <div class=\"px-4 pt-3\">
                    <span>{% partial 'cart::table-total' totals=totals %}</span>
                </div>
                <div class=\"px-4 pb-1\">
                    <span>
\t\t\t\t\t\t{% if __SELF__.showShipping %}
\t\t\t\t\t\t\t{% partial __SELF__ ~ '::shipping'  shipping=totals.shippingTotal %}
\t\t\t\t\t\t\t{% partial 'cart::table-grandtotal' totals=totals %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% partial 'cart::table-taxes' totals=totals %}
\t\t\t\t\t</span>
                </div>
            </div>
            
        </div>
    </div>


{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/cart.htm", "");
    }
}
