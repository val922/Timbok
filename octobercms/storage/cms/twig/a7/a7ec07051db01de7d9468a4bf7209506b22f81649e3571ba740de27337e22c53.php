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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-entry.htm */
class __TwigTemplate_96a62cb9a5ecc1bbbe9aa5ff4288bf59565a35e1ed4d7cba197197f3298de197 extends \Twig\Template
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
        $context["url"] = $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 1), "slug", [], "any", false, false, false, 1), "variant" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 1), "hashId", [], "any", false, false, false, 1)]);
        // line 2
        $context["image"] = ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 2)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 2), "image", [], "any", false, false, false, 2)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 2), "image", [], "any", false, false, false, 2)));
        // line 3
        echo "<div class=\"mall-cart__product d-sm-flex justify-content-between my-6 pb-6 ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "last", [], "any", false, false, false, 3)) {
            echo "border-bottom";
        }
        echo "\">
    <div class=\"media d-block d-sm-flex text-center text-sm-left\">
        ";
        // line 5
        if (($context["image"] ?? null)) {
            // line 6
            echo "        <a class=\"mx-auto mr-sm-4 d-block max-w-sm mx-auto\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">
            <img class=\"img-fluid\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "thumb", [0 => 160, 1 => 160, 2 => "crop"], "method", false, false, false, 7), "html", null, true);
            echo "\" width=\"160\" height=\"160\" alt=\"\" loading=\"lazy\"/>
        </a>
        ";
        }
        // line 10
        echo "        <div class=\"media-body pt-2 max-w-sm mx-auto text-center text-sm-left\">
            <h5 class=\"font-weight-medium font-6\">
                <a class=\"text-dark\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12))), "html", null, true);
        echo "</a>
            </h5>
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <span class=\"text-muted font-5\">
                    ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variant", [], "any", false, false, false, 16), "properties_description", [], "any", false, false, false, 16);
            echo "
                </span>
            ";
        }
        // line 19
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "custom_field_values", [], "any", false, false, false, 19)) {
            // line 20
            echo "                <br/>
                <span class=\"text-muted font-5\">
                    ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "custom_field_value_description", [], "any", false, false, false, 22);
            echo "
                </span>
            ";
        }
        // line 25
        echo "            <div class=\"pt-2 max-w-sm mx-auto\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "service_options", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26) > 0)) {
            // line 27
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "service_options", [], "any", false, false, false, 27));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 28
                echo "                <div class=\"mall-cart__services font-3 ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) ? ("border-bottom pb-1 mb-1") : (""));
                echo " text-muted d-flex justify-content-between ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 28)) ? ("mall-cart__services--first") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 28)) ? ("mall-cart__services--last") : (""));
                echo "\">
                    <span class=\"mr-2\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</span>
                    <span>+ ";
                // line 30
                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "method", false, false, false, 30), "integer", [], "any", false, false, false, 30)]);
                echo "</span>
                </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                <!--<div class=\"font-2 text-muted pt-1\">
                    { product.price() | raw }}
                    <div class=\"mall-cart__price-additions\">
                        + { product.servicePostTaxes | money }}
                    </div>
                </div>-->
                ";
        }
        // line 40
        echo "                <div class=\"text-primary font-7\">
                    ";
        // line 41
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "totalPostTaxes", [], "any", false, false, false, 41)]);
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"pt-2 pt-sm-0 pl-sm-4 mx-auto mx-sm-0 text-center text-sm-left max-w-xs\">
        ";
        // line 47
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['product'] = ($context["product"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::table-quantitydropdown")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "        <button href=\"javascript:;\"
           class=\"js-mall-remove-product btn btn-outline-danger btn-sm btn-block mb-2\"
           data-id=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hashId", [], "any", false, false, false, 50), "html", null, true);
        echo "\"
        >
            ";
        // line 52
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.remove"]);
        echo "
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-entry.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 52,  180 => 50,  176 => 48,  171 => 47,  162 => 41,  159 => 40,  150 => 33,  133 => 30,  129 => 29,  120 => 28,  102 => 27,  100 => 26,  97 => 25,  91 => 22,  87 => 20,  84 => 19,  78 => 16,  75 => 15,  73 => 14,  66 => 12,  62 => 10,  56 => 7,  51 => 6,  49 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set url = (productPage | page({slug: product.data.slug, variant: product.variant.hashId})) %}
{% set image = product.variant ? product.variant.image : product.data.image %}
<div class=\"mall-cart__product d-sm-flex justify-content-between my-6 pb-6 {% if not loop.last %}border-bottom{% endif %}\">
    <div class=\"media d-block d-sm-flex text-center text-sm-left\">
        {% if image %}
        <a class=\"mx-auto mr-sm-4 d-block max-w-sm mx-auto\" href=\"{{ url }}\">
            <img class=\"img-fluid\" src=\"{{ image.thumb(160, 160, 'crop') }}\" width=\"160\" height=\"160\" alt=\"\" loading=\"lazy\"/>
        </a>
        {% endif %}
        <div class=\"media-body pt-2 max-w-sm mx-auto text-center text-sm-left\">
            <h5 class=\"font-weight-medium font-6\">
                <a class=\"text-dark\" href=\"{{ url }}\">{{ product.variant.name ?: product.data.name }}</a>
            </h5>
            {% if product.variant %}
                <span class=\"text-muted font-5\">
                    {{ product.variant.properties_description | raw }}
                </span>
            {% endif %}
            {% if product.custom_field_values %}
                <br/>
                <span class=\"text-muted font-5\">
                    {{ product.custom_field_value_description | raw }}
                </span>
            {% endif %}
            <div class=\"pt-2 max-w-sm mx-auto\">
            {% if product.service_options.count > 0 %}
                {% for option in product.service_options %}
                <div class=\"mall-cart__services font-3 {{ loop.last ? 'border-bottom pb-1 mb-1' }} text-muted d-flex justify-content-between {{ loop.first ? 'mall-cart__services--first' }} {{ loop.last ? 'mall-cart__services--last' }}\">
                    <span class=\"mr-2\">{{ option.name }}</span>
                    <span>+ {{ option.price().integer | money }}</span>
                </div>
                {% endfor %}
                <!--<div class=\"font-2 text-muted pt-1\">
                    { product.price() | raw }}
                    <div class=\"mall-cart__price-additions\">
                        + { product.servicePostTaxes | money }}
                    </div>
                </div>-->
                {% endif %}
                <div class=\"text-primary font-7\">
                    {{ product.totalPostTaxes | money }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"pt-2 pt-sm-0 pl-sm-4 mx-auto mx-sm-0 text-center text-sm-left max-w-xs\">
        {% partial __SELF__ ~ '::table-quantitydropdown' product=product %}
        <button href=\"javascript:;\"
           class=\"js-mall-remove-product btn btn-outline-danger btn-sm btn-block mb-2\"
           data-id=\"{{ product.hashId }}\"
        >
            {{ 'offline.mall::frontend.remove' | trans }}
        </button>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-entry.htm", "");
    }
}
