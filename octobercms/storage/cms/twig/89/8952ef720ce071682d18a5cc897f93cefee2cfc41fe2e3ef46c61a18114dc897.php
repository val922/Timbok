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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/cart.htm */
class __TwigTemplate_bb8a6ed3ac8a79b039adb81f6df8aa13ef808c0afc801b8a78fbe75975857681 extends \Twig\Template
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
        echo "<div class=\"pb-6\">
    ";
        // line 2
        $context["rating"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productReviews"] ?? null), "product", [], "any", false, false, false, 2), "reviews_rating", [], "any", false, false, false, 2);
        // line 3
        echo "    <a href=\"#product-reviews\" class=\"scroll mall-category-review text-dark d-flex align-items-center ";
        ((($context["variant"] ?? null)) ? (print (twig_escape_filter($this->env, ("mall-category-review--" . "big"), "html", null, true))) : (print ("")));
        echo "\">
        <div class=\"mall-category-review__rating mr-2 ";
        // line 4
        echo ((($context["clickable"] ?? null)) ? ("mall-category-review__rating--clickable") : (""));
        echo "\">
            ";
        // line 5
        $context["rating"] = twig_round(($context["rating"] ?? null));
        // line 6
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['active'] = (($context["rating"] ?? null) >= $context["i"])            ;
            $context['__cms_partial_params']['value'] = $context["i"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("productreviews/star"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </div>
        <div class=\"font-5\">
        ";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productReviews"] ?? null), "allReviews", [], "any", false, false, false, 11), "count", [], "any", false, false, false, 11) . " ") . call_user_func_array($this->env->getFilter('transchoice')->getCallable(), ["offline.mall::frontend.reviews.ratings", (((isset($context["count"]) || array_key_exists("count", $context))) ? (_twig_default_filter(($context["count"] ?? null), 0)) : (0))])), "html", null, true);
        echo "
        </div>
    </a>
    <form data-request=\"onAddToCart\"
          data-request-success=\"data.added && \$.publish('mall.cart.productAdded', data)\"
          data-request-validate
          data-request-flash
          id=\"mall-add-to-cart\">
          
        <div class=\"mb-2 pb-2\">
            <div class=\"mall-product__price\">
                ";
        // line 22
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["item"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::price")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "            </div>
            <div class=\"font-3 opacity-70\">
                ";
        // line 25
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['item'] = ($context["item"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::tax-info")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "            </div>
        </div>
        
        ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["variants"] ?? null), "count", [], "any", false, false, false, 29) > 0)) {
            // line 30
            echo "        <div class=\"form-group\">
            <label class=\"font-6 text-dark\" for=\"1dPgR4B8\">";
            // line 31
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.variants"]);
            echo "</label>
            <div class=\"mall-product__variants d-flex\">
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["variants"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["variant"]) {
                // line 34
                echo "                ";
                $context["variant"] = twig_get_attribute($this->env, $this->source, $context["variant"], "first", [], "method", false, false, false, 34);
                // line 35
                echo "                <div class=\"mall-product__variant mr-2\">
                    <a href=\"";
                // line 36
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 36), "fileName", [], "any", false, false, false, 36), ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, false, 36), "slug", [], "any", false, false, false, 36), "variant" => twig_get_attribute($this->env, $this->source, $context["variant"], "hashId", [], "any", false, false, false, 36)]);
                echo "\"
                       title=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "\" class=\"d-block border hover:border-primary transition-20\" data-toggle=\"tooltip\" data-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["variant"], "main_image", [], "any", false, false, false, 38), "thumb", [0 => 70, 1 => 70, 2 => "crop"], "method", false, false, false, 38), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["variant"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "\"/>
                    </a>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </div>
        </div>
        ";
        }
        // line 45
        echo "    
        ";
        // line 46
        if (((twig_get_attribute($this->env, $this->source, ($context["props"] ?? null), "count", [], "any", false, false, false, 46) > 0) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "inventory_management_method", [], "any", false, false, false, 46) == "variant"))) {
            // line 47
            echo "        <div class=\"mall-product__variant-properties mb-4\">
            ";
            // line 48
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['props'] = ($context["props"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::properties")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 49
            echo "        </div>
        ";
        }
        // line 51
        echo "    
        ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "custom_fields", [], "any", false, false, false, 52), "count", [], "any", false, false, false, 52) > 0)) {
            // line 53
            echo "        <div class=\"mall-product__custom-fields mb-6\">
            ";
            // line 54
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['fields'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "custom_fields", [], "any", false, false, false, 54)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::customfields")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 55
            echo "        </div>
        ";
        }
        // line 57
        echo "    
        <div class=\"mall-product__add-to-cart\">
            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "allow_out_of_stock_purchases", [], "any", false, false, false, 59)) {
            // line 60
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = ($context["item"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::addtocart.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 61
            echo "            ";
        } else {
            // line 62
            echo "                <div class=\"mall-product__property-stock mall-product__property-stock--checking\">
                    ";
            // line 63
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.stock.checking"]);
            echo "
                </div>
            ";
        }
        // line 66
        echo "        </div>

    </form>
</div>

<div id=\"product-accordion\" class=\"\">
    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 72)) {
            // line 73
            echo "    <div class=\"card border-bottom-0 rounded-0 overflow-hidden\">
        <div class=\"card-header bg-transparent px-5 py-3 mb-n1\" id=\"headingOne\">
            <h3 class=\"font-6 mb-0\">
                <a href=\"#collapseOne\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\" class=\"d-flex align-items-center text-dark\">
                    <span class=\"pr-2 border-right mr-2\">
                        <i data-feather=\"info\"></i>
                    </span>
                    <span>Short Description</span>
                    <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 text-dark text-muted border rounded-circle w-8 h-8\">
                        <i class=\"w-4 h-4\" data-feather=\"chevron-down\"></i>
                    </span>
                </a>
            </h3>
        </div>
        <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#product-accordion\">
            <div class=\"card-body\">
                <p class=\"\">";
            // line 89
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 89), "html", null, true));
            echo "</p>
                <a class=\"scroll font-weight-semibold\" href=\"#product-details\">Read more</a>
            </div>
        </div>
    </div>
    ";
        }
        // line 95
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "brand", [], "any", false, false, false, 95)) {
            // line 96
            echo "    <div class=\"card border-bottom-0 rounded-0 overflow-hidden\">
        <div class=\"card-header bg-transparent px-5 py-3 mb-n1\" id=\"headingTwo\">
            <h3 class=\"font-6 mb-0\">
                <a href=\"#collapseTwo\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseTwo\" class=\"d-flex align-items-center text-dark\">
                    <span class=\"pr-2 border-right mr-2\">
                        <i data-feather=\"award\"></i>
                    </span>
                    <span>Brand</span>
                    <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 text-dark text-muted border rounded-circle w-8 h-8\">
                        <i class=\"w-4 h-4\" data-feather=\"chevron-down\"></i>
                    </span>
                </a>
            </h3>
        </div>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#product-accordion\">
            <div class=\"card-body\">
                <a class=\"d-inline-block border p-2\" href=\"/brand/";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "brand", [], "any", false, false, false, 112), "slug", [], "any", false, false, false, 112), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "brand", [], "any", false, false, false, 112), "slug", [], "any", false, false, false, 112), "html", null, true);
            echo "&sort=latest\">
                    <img src=\"";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "brand", [], "any", false, false, false, 113), "logo", [], "any", false, false, false, 113), "thumb", [0 => 130, 1 => 70, 2 => "crop"], "method", false, false, false, 113), "html", null, true);
            echo "\" width=\"130\" height=\"70\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "brand", [], "any", false, false, false, 113), "name", [], "any", false, false, false, 113), "html", null, true);
            echo "\" class=\"w-24 w-md-100 img-fluid\"/>
                </a>
            </div>
        </div>
    </div>
    ";
        }
        // line 119
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 119)) {
            // line 120
            echo "    <div class=\"card rounded-0 overflow-hidden\">
        <div class=\"card-header bg-transparent px-5 py-3 mb-n1\" id=\"headingThree\">
            <h3 class=\"font-6 mb-0\">
                <a href=\"#collapseThree\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseThree\" class=\"d-flex align-items-center text-dark\">
                    <span class=\"pr-2 border-right mr-2\">
                        <i data-feather=\"tag\"></i>
                    </span>
                    <span>Category</span>
                    <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 text-dark text-muted border rounded-circle w-8 h-8\">
                        <i class=\"w-4 h-4\" data-feather=\"chevron-down\"></i>
                    </span>
                </a>
            </h3>
        </div>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#product-accordion\">
            <div class=\"card-body\">
                ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 136));
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
                // line 137
                echo "                <a class=\"btn btn-sm btn-outline-light text-dark font-3 ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 137)) {
                    echo "mr-2";
                }
                echo " mb-2\" href=\"/category/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 137), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 137), "html", null, true);
                echo "</a>
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
            // line 139
            echo "            </div>
        </div>
    </div>
    ";
        }
        // line 143
        echo "</div>
<div class=\"py-6\">
";
        // line 145
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("ShareButtons"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 146
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 146,  359 => 145,  355 => 143,  349 => 139,  326 => 137,  309 => 136,  291 => 120,  288 => 119,  277 => 113,  271 => 112,  253 => 96,  250 => 95,  241 => 89,  223 => 73,  221 => 72,  213 => 66,  207 => 63,  204 => 62,  201 => 61,  195 => 60,  193 => 59,  189 => 57,  185 => 55,  180 => 54,  177 => 53,  175 => 52,  172 => 51,  168 => 49,  163 => 48,  160 => 47,  158 => 46,  155 => 45,  150 => 42,  138 => 38,  132 => 37,  128 => 36,  125 => 35,  122 => 34,  118 => 33,  113 => 31,  110 => 30,  108 => 29,  103 => 26,  98 => 25,  94 => 23,  89 => 22,  75 => 11,  71 => 9,  65 => 8,  58 => 7,  53 => 6,  51 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pb-6\">
    {% set rating=productReviews.product.reviews_rating %}
    <a href=\"#product-reviews\" class=\"scroll mall-category-review text-dark d-flex align-items-center {{ variant ? ('mall-category-review--' ~ 'big') : '' }}\">
        <div class=\"mall-category-review__rating mr-2 {{ clickable ? 'mall-category-review__rating--clickable' }}\">
            {% set rating = rating|round %}
            {% for i in range(1, 5) %}
                {% partial 'productreviews/star' active=rating >= i value=i %}
            {% endfor %}
        </div>
        <div class=\"font-5\">
        {{ productReviews.allReviews.count ~ ' ' ~ ('offline.mall::frontend.reviews.ratings' | transchoice(count | default(0))) }}
        </div>
    </a>
    <form data-request=\"onAddToCart\"
          data-request-success=\"data.added && \$.publish('mall.cart.productAdded', data)\"
          data-request-validate
          data-request-flash
          id=\"mall-add-to-cart\">
          
        <div class=\"mb-2 pb-2\">
            <div class=\"mall-product__price\">
                {% partial __SELF__ ~ '::price' item=item %}
            </div>
            <div class=\"font-3 opacity-70\">
                {% partial __SELF__ ~ '::tax-info' item=item %}
            </div>
        </div>
        
        {% if variants.count > 0 %}
        <div class=\"form-group\">
            <label class=\"font-6 text-dark\" for=\"1dPgR4B8\">{{ 'offline.mall::frontend.variants' | trans }}</label>
            <div class=\"mall-product__variants d-flex\">
                {% for value, variant in variants %}
                {% set variant = variant.first() %}
                <div class=\"mall-product__variant mr-2\">
                    <a href=\"{{ this.page.fileName|page({slug: this.param.slug, variant: variant.hashId}) }}\"
                       title=\"{{ variant.name }}\" class=\"d-block border hover:border-primary transition-20\" data-toggle=\"tooltip\" data-title=\"{{ variant.name }}\">
                        <img src=\"{{ variant.main_image.thumb(70, 70, 'crop') }}\" class=\"img-fluid\" alt=\"{{ variant.name }}\"/>
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>
        {% endif %}
    
        {% if props.count > 0 and item.inventory_management_method == 'variant' %}
        <div class=\"mall-product__variant-properties mb-4\">
            {% partial __SELF__ ~ '::properties' props=props %}
        </div>
        {% endif %}
    
        {% if item.custom_fields.count > 0 %}
        <div class=\"mall-product__custom-fields mb-6\">
            {% partial __SELF__ ~ '::customfields' fields=item.custom_fields %}
        </div>
        {% endif %}
    
        <div class=\"mall-product__add-to-cart\">
            {% if item.allow_out_of_stock_purchases %}
                {% partial __SELF__ ~ '::addtocart.htm' item=item %}
            {% else %}
                <div class=\"mall-product__property-stock mall-product__property-stock--checking\">
                    {{ 'offline.mall::frontend.stock.checking' | trans }}
                </div>
            {% endif %}
        </div>

    </form>
</div>

<div id=\"product-accordion\" class=\"\">
    {% if item.description_short %}
    <div class=\"card border-bottom-0 rounded-0 overflow-hidden\">
        <div class=\"card-header bg-transparent px-5 py-3 mb-n1\" id=\"headingOne\">
            <h3 class=\"font-6 mb-0\">
                <a href=\"#collapseOne\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseOne\" class=\"d-flex align-items-center text-dark\">
                    <span class=\"pr-2 border-right mr-2\">
                        <i data-feather=\"info\"></i>
                    </span>
                    <span>Short Description</span>
                    <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 text-dark text-muted border rounded-circle w-8 h-8\">
                        <i class=\"w-4 h-4\" data-feather=\"chevron-down\"></i>
                    </span>
                </a>
            </h3>
        </div>
        <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#product-accordion\">
            <div class=\"card-body\">
                <p class=\"\">{{ item.description_short|nl2br }}</p>
                <a class=\"scroll font-weight-semibold\" href=\"#product-details\">Read more</a>
            </div>
        </div>
    </div>
    {% endif %}
    {% if item.brand %}
    <div class=\"card border-bottom-0 rounded-0 overflow-hidden\">
        <div class=\"card-header bg-transparent px-5 py-3 mb-n1\" id=\"headingTwo\">
            <h3 class=\"font-6 mb-0\">
                <a href=\"#collapseTwo\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseTwo\" class=\"d-flex align-items-center text-dark\">
                    <span class=\"pr-2 border-right mr-2\">
                        <i data-feather=\"award\"></i>
                    </span>
                    <span>Brand</span>
                    <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 text-dark text-muted border rounded-circle w-8 h-8\">
                        <i class=\"w-4 h-4\" data-feather=\"chevron-down\"></i>
                    </span>
                </a>
            </h3>
        </div>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#product-accordion\">
            <div class=\"card-body\">
                <a class=\"d-inline-block border p-2\" href=\"/brand/{{ item.brand.slug }}?brand={{ item.brand.slug }}&sort=latest\">
                    <img src=\"{{ item.brand.logo.thumb(130, 70, 'crop') }}\" width=\"130\" height=\"70\" alt=\"{{ item.brand.name }}\" class=\"w-24 w-md-100 img-fluid\"/>
                </a>
            </div>
        </div>
    </div>
    {% endif %}
    {% if item.categories %}
    <div class=\"card rounded-0 overflow-hidden\">
        <div class=\"card-header bg-transparent px-5 py-3 mb-n1\" id=\"headingThree\">
            <h3 class=\"font-6 mb-0\">
                <a href=\"#collapseThree\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapseThree\" class=\"d-flex align-items-center text-dark\">
                    <span class=\"pr-2 border-right mr-2\">
                        <i data-feather=\"tag\"></i>
                    </span>
                    <span>Category</span>
                    <span class=\"ml-auto d-flex justify-content-center align-items-center font-3 text-dark text-muted border rounded-circle w-8 h-8\">
                        <i class=\"w-4 h-4\" data-feather=\"chevron-down\"></i>
                    </span>
                </a>
            </h3>
        </div>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#product-accordion\">
            <div class=\"card-body\">
                {% for category in item.categories %}
                <a class=\"btn btn-sm btn-outline-light text-dark font-3 {% if not loop.last %}mr-2{% endif %} mb-2\" href=\"/category/{{ category.nested_slug}}\">{{ category.name }}</a>
                {% endfor %}
            </div>
        </div>
    </div>
    {% endif %}
</div>
<div class=\"py-6\">
{% component 'ShareButtons' %}
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/cart.htm", "");
    }
}
