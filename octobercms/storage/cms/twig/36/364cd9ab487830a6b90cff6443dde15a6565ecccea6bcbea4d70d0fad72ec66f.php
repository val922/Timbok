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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/product-banner.htm */
class __TwigTemplate_cb6c32a1cd5385b240c053cab80064802a322d9cdcfc0188ee555904af8bc9ae extends \Twig\Template
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
        $context["item"] = ($context["indexProductBanner"] ?? null);
        // line 2
        echo "<section class=\"container-fluid px-0 mb-12 mt-6 position-relative\">
    <div class=\"bg-size-cover bg-position-center py-12\" style=\"background:url('";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 3), "thumb", [0 => 1000, 1 => 750, 2 => "crop"], "method", false, false, false, 3), "html", null, true);
        echo "');\">
        <div class=\"position-absolute inset-0 w-100 h-100\" style=\"background: linear-gradient(to left, rgba(247, 247, 247) 0, rgba(247, 247, 247) 40%, rgba(247, 247, 247, 0) 100%);\"></div>
        <div class=\"row no-gutters py-lg-6\">
            <div class=\"col-lg-5 col-md-6 col-sm-7 ml-auto\">
                <div class=\"px-4 px-lg-0\" data-sal=\"slide-left\" data-sal-duration=\"1200\">
                    <div class=\"d-flex align-items-center flex-wrap\">
                        <h3 class=\"font-weight-light max-w-md\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Timely Sales"]);
        echo "</h3>
                        <span class=\"d-flex justify-content-center align-items-center rounded-circle w-20 h-20 bg-danger text-white font-11 font-weight-semibold ml-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["20%"]);
        echo "</span>
                    </div>
                    <span class=\"mall-products-item__info-teritary\">
                        ";
        // line 13
        $context["rating"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "reviews_rating", [], "any", false, false, false, 13);
        // line 14
        echo "                        ";
        if ((($context["rating"] ?? null) > 0)) {
            // line 15
            echo "                            <div class=\"mall-products-item__stars\">
                                <div class=\"mall-category-review d-flex align-items-center visible ";
            // line 16
            ((($context["variant"] ?? null)) ? (print (twig_escape_filter($this->env, ("mall-category-review--" . ($context["variant"] ?? null)), "html", null, true))) : (print ("")));
            echo "\">
                                    <div class=\"mall-category-review__rating ";
            // line 17
            echo ((($context["clickable"] ?? null)) ? ("mall-category-review__rating--clickable") : (""));
            echo "\">
                                        ";
            // line 18
            $context["rating"] = twig_round(($context["rating"] ?? null));
            // line 19
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "                                            ";
                $context["active"] = (($context["rating"] ?? null) >= $context["i"]);
                // line 21
                echo "                                            ";
                $context["value"] = $context["i"];
                // line 22
                echo "                                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"isolation:isolate\" viewBox=\"0 0 32 30.434\" width=\"32\" height=\"30.434\"
                                                 data-value=\"";
                // line 23
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\"
                                                 class=\"mall-star w-4 h-4 ";
                // line 24
                echo ((($context["active"] ?? null)) ? ("mall-star--active") : (""));
                echo "\">
                                                <defs>
                                                    <clipPath id=\"a\">
                                                        <path d=\"M0 0h32v30.434H0z\"/>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path=\"url(#a)\">
                                                    <path
                                                        d=\"M16 2.593l4.101 8.311 9.173 1.333-6.637 6.469 1.566 9.136L16 23.529l-8.204 4.313 1.567-9.136-6.637-6.469 9.172-1.333L16 2.593z\"
                                                        class=\"mall-star__bg\"/>
                                                    <path
                                                        d=\"M16 3.528l3.907 7.917 8.738 1.27-6.322 6.163 1.492 8.702L16 23.471 8.185 27.58l1.493-8.702-6.323-6.163 8.738-1.27L16 3.528zM16 0l4.944 10.019L32 11.625l-8 7.798 1.888 11.011L16 25.235l-9.888 5.199L8 19.423l-8-7.798 11.056-1.606L16 0z\"
                                                        class=\"mall-star__border\"
                                                        fill-rule=\"evenodd\"/>
                                                </g>
                                            </svg>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                    </div>
                                    <div class=\"mall-category-review__name text-dark font-5\">
                                        ";
            // line 43
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 48
        echo "                    </span>
                    <h2 class=\"h1 mb-4\">
                        <a class=\"text-link\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 50), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 50)]);
        echo "\" data-mall-item-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 50), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</a>
                    </h2>
                    ";
        // line 52
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 52);
        // line 53
        echo "                    <h2 class=\"font-18 font-weight-semibold\">
                        <span class=\"lead text-muted mr-2\">
                        ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 55)) {
            // line 56
            echo "                            <del>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 56), "string", [], "any", false, false, false, 56);
            echo "</del>
                        ";
        } else {
            // line 58
            echo "                            <del>";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 58), "count", [], "any", false, false, false, 58) > 0)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 58), "string", [], "any", false, false, false, 58)) : (""));
            echo "</del>
                        ";
        }
        // line 60
        echo "                        </span>
                        <span class=\"mall-products-item__price ";
        // line 61
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 61), "count", [], "any", false, false, false, 61) > 0)) ? ("text-primary") : ("text-primary"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 61)) ? ("mall-products-item__price--special") : (""));
        echo "\">
                            ";
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 62);
        echo "
                        </span>
                    </h2>  
                    <div class=\"h4 mb-4 font-weight-light\">";
        // line 65
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 65), "html", null, true));
        echo "</div>
                    <div class=\"max-w-sm bg-white pt-6 p-4 mb-6\">
                        <div id=\"count-p\" class=\"d-flex h3 mb-0\">
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold days-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">d</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold hours-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">h</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold minutes-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">m</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold seconds-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">s</div>
                            </div>
                        </div>
                    </div>
                    <a class=\"btn btn-primary px-6\" href=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 86), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 86)]);
        echo "\" data-mall-item-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
                        Shop now<i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 95
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 96
        echo "<script> 
\$(\"#count-p\").countdown(\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 97), "index_product_banner_countdown", [], "any", false, false, false, 97), "html", null, true);
        echo "\", function(event) {
    \$('.days-p').html(event.strftime('%-D'));
    \$('.hours-p').html(event.strftime('%H'));
    \$('.minutes-p').html(event.strftime('%M'));
    \$('.seconds-p').html(event.strftime('%S'));
});
</script>
";
        // line 95
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/product-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 95,  223 => 97,  220 => 96,  218 => 95,  204 => 86,  180 => 65,  174 => 62,  168 => 61,  165 => 60,  159 => 58,  153 => 56,  151 => 55,  147 => 53,  145 => 52,  136 => 50,  132 => 48,  124 => 43,  120 => 41,  97 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  79 => 19,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  63 => 14,  61 => 13,  55 => 10,  51 => 9,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set item = indexProductBanner %}
<section class=\"container-fluid px-0 mb-12 mt-6 position-relative\">
    <div class=\"bg-size-cover bg-position-center py-12\" style=\"background:url('{{ item.image.thumb(1000, 750, 'crop') }}');\">
        <div class=\"position-absolute inset-0 w-100 h-100\" style=\"background: linear-gradient(to left, rgba(247, 247, 247) 0, rgba(247, 247, 247) 40%, rgba(247, 247, 247, 0) 100%);\"></div>
        <div class=\"row no-gutters py-lg-6\">
            <div class=\"col-lg-5 col-md-6 col-sm-7 ml-auto\">
                <div class=\"px-4 px-lg-0\" data-sal=\"slide-left\" data-sal-duration=\"1200\">
                    <div class=\"d-flex align-items-center flex-wrap\">
                        <h3 class=\"font-weight-light max-w-md\">{{ 'Timely Sales'|_ }}</h3>
                        <span class=\"d-flex justify-content-center align-items-center rounded-circle w-20 h-20 bg-danger text-white font-11 font-weight-semibold ml-4\">{{ '20%'|_ }}</span>
                    </div>
                    <span class=\"mall-products-item__info-teritary\">
                        {% set rating = item.reviews_rating %}
                        {% if rating > 0 %}
                            <div class=\"mall-products-item__stars\">
                                <div class=\"mall-category-review d-flex align-items-center visible {{ variant ? ('mall-category-review--' ~ variant) : '' }}\">
                                    <div class=\"mall-category-review__rating {{ clickable ? 'mall-category-review__rating--clickable' }}\">
                                        {% set rating = rating|round %}
                                        {% for i in range(1, 5) %}
                                            {% set active=rating >= i %}
                                            {% set value=i %}
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"isolation:isolate\" viewBox=\"0 0 32 30.434\" width=\"32\" height=\"30.434\"
                                                 data-value=\"{{ value }}\"
                                                 class=\"mall-star w-4 h-4 {{ active ? 'mall-star--active' }}\">
                                                <defs>
                                                    <clipPath id=\"a\">
                                                        <path d=\"M0 0h32v30.434H0z\"/>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path=\"url(#a)\">
                                                    <path
                                                        d=\"M16 2.593l4.101 8.311 9.173 1.333-6.637 6.469 1.566 9.136L16 23.529l-8.204 4.313 1.567-9.136-6.637-6.469 9.172-1.333L16 2.593z\"
                                                        class=\"mall-star__bg\"/>
                                                    <path
                                                        d=\"M16 3.528l3.907 7.917 8.738 1.27-6.322 6.163 1.492 8.702L16 23.471 8.185 27.58l1.493-8.702-6.323-6.163 8.738-1.27L16 3.528zM16 0l4.944 10.019L32 11.625l-8 7.798 1.888 11.011L16 25.235l-9.888 5.199L8 19.423l-8-7.798 11.056-1.606L16 0z\"
                                                        class=\"mall-star__border\"
                                                        fill-rule=\"evenodd\"/>
                                                </g>
                                            </svg>
                                        {% endfor %}
                                    </div>
                                    <div class=\"mall-category-review__name text-dark font-5\">
                                        {{ label }}
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </span>
                    <h2 class=\"h1 mb-4\">
                        <a class=\"text-link\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\">{{ item.name }}</a>
                    </h2>
                    {% set price = item.price() %}
                    <h2 class=\"font-18 font-weight-semibold\">
                        <span class=\"lead text-muted mr-2\">
                        {% if price.official %}
                            <del>{{ price.official.string | raw }}</del>
                        {% else %}
                            <del>{{ item.oldPrice.count > 0 ? item.oldPrice().string | raw }}</del>
                        {% endif %}
                        </span>
                        <span class=\"mall-products-item__price {{ item.oldPrice.count > 0 ? 'text-primary' : 'text-primary' }} {{ price.isCustomerSpecific ? 'mall-products-item__price--special' }}\">
                            {{ price.string | raw }}
                        </span>
                    </h2>  
                    <div class=\"h4 mb-4 font-weight-light\">{{ item.description_short|nl2br }}</div>
                    <div class=\"max-w-sm bg-white pt-6 p-4 mb-6\">
                        <div id=\"count-p\" class=\"d-flex h3 mb-0\">
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold days-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">d</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold hours-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">h</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold minutes-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">m</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold seconds-p\"></div>
                                <div class=\"text-muted font-3 ml-1\">s</div>
                            </div>
                        </div>
                    </div>
                    <a class=\"btn btn-primary px-6\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\">
                        Shop now<i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{% put scripts %}
<script> 
\$(\"#count-p\").countdown(\"{{ this.theme.index_product_banner_countdown }}\", function(event) {
    \$('.days-p').html(event.strftime('%-D'));
    \$('.hours-p').html(event.strftime('%H'));
    \$('.minutes-p').html(event.strftime('%M'));
    \$('.seconds-p').html(event.strftime('%S'));
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/product-banner.htm", "");
    }
}
