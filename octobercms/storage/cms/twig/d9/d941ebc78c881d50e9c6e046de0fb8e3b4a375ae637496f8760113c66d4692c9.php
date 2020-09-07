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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/products/item.htm */
class __TwigTemplate_e74ca73823b85f1d89ecfc5bfc9510e549f8842d9654b8f305cfa220c4d6a5c3 extends \Twig\Template
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
        echo "<div class=\"col-md-4 col-sm-6 mall-products-item\">
    <div class=\"group position-relative w-100 max-w-sm mx-auto bg-white mb-4\">
        <div class=\"position-relative transition-40 group-hover:shadow-lg\">
            <a class=\"position-absolute top-0 left-0 d-block w-100 h-100\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 4), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 4)]);
        echo "\" data-mall-item-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 4), "html", null, true);
        echo "\"></a>
            ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("wishlistButtons/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "            ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 6)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::image")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "        </div>
        <div class=\"text-center position-relative bg-white transition-40 group-hover:shadow-lg z-10 p-4\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 9));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "            <a class=\"d-inline-block mb-1 text-muted hover:opacity-50 font-4 transition-20\" href=\"/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) {
                echo ", ";
            }
            // line 12
            echo "            </a>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            <h3 class=\"font-6 font-weight-normal d-block mb-3 pb-4 border-bottom\">
                <a class=\"text-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 15), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 15)]);
        echo "\" data-mall-item-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</a>
            </h3>
            <span class=\"font-6\">
                ";
        // line 18
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 18);
        // line 19
        echo "                <del class=\"text-muted mr-1 mall-products-item__old-price\">
                ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 20)) {
            // line 21
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 21), "string", [], "any", false, false, false, 21);
            echo "
                ";
        } else {
            // line 23
            echo "                    ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23) > 0)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 23), "string", [], "any", false, false, false, 23)) : (""));
            echo "
                ";
        }
        // line 25
        echo "                </del>
                <span class=\"mall-products-item__price ";
        // line 26
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26) > 0)) ? ("text-primary") : ("text-primary"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 26)) ? ("mall-products-item__price--special") : (""));
        echo "\">
                    ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 27);
        echo "
                </span>
            </span>
        </div>
        <div class=\"bg-white p-4 position-absolute top-full left-0 w-100 mt-n14 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-40 group-hover:shadow-lg z-10\">
            <div class=\"pb-2 text-center\">
                <span class=\"mall-products-item__info-teritary\">
                    ";
        // line 34
        $context["rating"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "reviews_rating", [], "any", false, false, false, 34);
        // line 35
        echo "                    ";
        if ((($context["rating"] ?? null) > 0)) {
            // line 36
            echo "                        <div class=\"mall-products-item__stars\">
                            ";
            // line 37
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['rating'] = ($context["rating"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 38
            echo "                        </div>
                    ";
        }
        // line 40
        echo "                </span>
            </div>
            <button type=\"submit\" class=\"mall-products-item__cart-button btn btn-sm btn-primary btn-block\"
               href=\"javascript:;\"
               data-request=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onAddToCart\"
               data-request-success=\"\$.publish('mall.cart.productAdded', data)\"
               data-request-data=\"product: '";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "productHashId", [], "any", false, false, false, 46), "html", null, true);
        echo "', variant: '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 46), "html", null, true);
        echo "'\"
               data-request-flash
            >
                <span> ";
        // line 49
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart.add"]);
        echo " <i class=\"ml-1\" data-feather=\"shopping-cart\"></i></span>
            </button>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 49,  183 => 46,  178 => 44,  172 => 40,  168 => 38,  163 => 37,  160 => 36,  157 => 35,  155 => 34,  145 => 27,  139 => 26,  136 => 25,  130 => 23,  124 => 21,  122 => 20,  119 => 19,  117 => 18,  107 => 15,  104 => 14,  89 => 12,  84 => 11,  79 => 10,  62 => 9,  58 => 7,  52 => 6,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-4 col-sm-6 mall-products-item\">
    <div class=\"group position-relative w-100 max-w-sm mx-auto bg-white mb-4\">
        <div class=\"position-relative transition-40 group-hover:shadow-lg\">
            <a class=\"position-absolute top-0 left-0 d-block w-100 h-100\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\"></a>
            {% partial 'wishlistButtons/default' %}
            {% partial __SELF__ ~ '::image' image=item.image %}
        </div>
        <div class=\"text-center position-relative bg-white transition-40 group-hover:shadow-lg z-10 p-4\">
            {% for category in item.categories %}
            <a class=\"d-inline-block mb-1 text-muted hover:opacity-50 font-4 transition-20\" href=\"/category/{{ category.nested_slug }}\">
                {{ category.name }}{% if not loop.last %}, {% endif %}
            </a>
            {% endfor %}
            <h3 class=\"font-6 font-weight-normal d-block mb-3 pb-4 border-bottom\">
                <a class=\"text-link\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\">{{ item.name }}</a>
            </h3>
            <span class=\"font-6\">
                {% set price = item.price() %}
                <del class=\"text-muted mr-1 mall-products-item__old-price\">
                {% if price.official %}
                    {{ price.official.string | raw }}
                {% else %}
                    {{ item.oldPrice.count > 0 ? item.oldPrice().string | raw }}
                {% endif %}
                </del>
                <span class=\"mall-products-item__price {{ item.oldPrice.count > 0 ? 'text-primary' : 'text-primary' }} {{ price.isCustomerSpecific ? 'mall-products-item__price--special' }}\">
                    {{ price.string | raw }}
                </span>
            </span>
        </div>
        <div class=\"bg-white p-4 position-absolute top-full left-0 w-100 mt-n14 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-40 group-hover:shadow-lg z-10\">
            <div class=\"pb-2 text-center\">
                <span class=\"mall-products-item__info-teritary\">
                    {% set rating = item.reviews_rating %}
                    {% if rating > 0 %}
                        <div class=\"mall-products-item__stars\">
                            {% partial __SELF__ ~ '::stars' rating=rating %}
                        </div>
                    {% endif %}
                </span>
            </div>
            <button type=\"submit\" class=\"mall-products-item__cart-button btn btn-sm btn-primary btn-block\"
               href=\"javascript:;\"
               data-request=\"{{ __SELF__ }}::onAddToCart\"
               data-request-success=\"\$.publish('mall.cart.productAdded', data)\"
               data-request-data=\"product: '{{ item.productHashId }}', variant: '{{ item.variantHashId }}'\"
               data-request-flash
            >
                <span> {{ 'offline.mall::frontend.cart.add' | trans }} <i class=\"ml-1\" data-feather=\"shopping-cart\"></i></span>
            </button>
        </div>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/item.htm", "");
    }
}
