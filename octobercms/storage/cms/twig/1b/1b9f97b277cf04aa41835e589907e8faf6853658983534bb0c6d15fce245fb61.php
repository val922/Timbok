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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/product-slider.htm */
class __TwigTemplate_8c767fce957d06e3ecd8c32c22ad40b319ba463642bc22877a5f24269a071a76 extends \Twig\Template
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
        echo "<section class=\"container-fluid bg-secondary px-0\">
    <div class=\"row no-gutters align-items-center\">
        <div class=\"col-md-6\">
            <div class=\"mx-auto bg-white my-sm-4 max-w-lg\">
                <div class=\"products-slider-nav\">
                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortedSliderProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "                    <div class=\"py-12 px-4 px-sm-12\">
                        <div class=\"mall-products-item__info-teritary mb-2\">
                            ";
            // line 9
            $context["rating"] = twig_get_attribute($this->env, $this->source, $context["item"], "reviews_rating", [], "any", false, false, false, 9);
            // line 10
            echo "                            ";
            if ((($context["rating"] ?? null) > 0)) {
                // line 11
                echo "                                <div class=\"mall-products-item__stars\">
                                    ";
                // line 12
                $context["rating"] = ($context["rating"] ?? null);
                // line 13
                echo "                                    <div class=\"mall-category-review visible ";
                ((($context["variant"] ?? null)) ? (print (twig_escape_filter($this->env, ("mall-category-review--" . ($context["variant"] ?? null)), "html", null, true))) : (print ("")));
                echo "\">
                                        <div class=\"mall-category-review__rating ";
                // line 14
                echo ((($context["clickable"] ?? null)) ? ("mall-category-review__rating--clickable") : (""));
                echo "\">
                                            ";
                // line 15
                $context["rating"] = twig_round(($context["rating"] ?? null));
                // line 16
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "                                                ";
                    $context["active"] = (($context["rating"] ?? null) >= $context["i"]);
                    // line 18
                    echo "                                                ";
                    $context["value"] = $context["i"];
                    // line 19
                    echo "                                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"isolation:isolate\" viewBox=\"0 0 32 30.434\" width=\"32\" height=\"30.434\"
                                                     data-value=\"";
                    // line 20
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "\"
                                                     class=\"mall-star w-4 h-4 ";
                    // line 21
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
                // line 38
                echo "                                        </div>
                                        <div class=\"mall-category-review__name text-dark font-5\">
                                            ";
                // line 40
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 45
            echo "                        </div>
                        <h2 class=\"font-weight-semibold mb-2\">
                            <a class=\"text-link\" href=\"";
            // line 47
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 47), "variant" => twig_get_attribute($this->env, $this->source, $context["item"], "variantHashId", [], "any", false, false, false, 47)]);
            echo "\" data-mall-item-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prefixedId", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
                        </h2>
                    \t<div class=\"lead font-weight-semibold text-muted font-6 mb-2\">in
                    \t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "categories", [], "any", false, false, false, 50));
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
                // line 51
                echo "                    \t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) {
                    echo ",";
                }
                // line 52
                echo "                    \t\t";
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
            // line 53
            echo "                    \t</div>
                        ";
            // line 54
            $context["price"] = twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "method", false, false, false, 54);
            // line 55
            echo "                        <h2 class=\"font-18 font-weight-semibold\">
                            <span class=\"lead text-muted mr-2\">
                            ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 57)) {
                // line 58
                echo "                                <del>";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 58), "string", [], "any", false, false, false, 58);
                echo "</del>
                            ";
            } else {
                // line 60
                echo "                                <del>";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "oldPrice", [], "any", false, false, false, 60), "count", [], "any", false, false, false, 60) > 0)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "oldPrice", [], "method", false, false, false, 60), "string", [], "any", false, false, false, 60)) : (""));
                echo "</del>
                            ";
            }
            // line 62
            echo "                            </span>
                            <span class=\"mall-products-item__price ";
            // line 63
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "oldPrice", [], "any", false, false, false, 63), "count", [], "any", false, false, false, 63) > 0)) ? ("text-primary") : ("text-primary"));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 63)) ? ("mall-products-item__price--special") : (""));
            echo "\">
                                ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 64);
            echo "
                            </span>
                        </h2>
                        <h4 class=\"font-weight-light opacity-70 pb-1 mb-6\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description_short", [], "any", false, false, false, 67), "html", null, true);
            echo "</h4>
                        <div class=\"d-flex justify-content-between\">
                            <a class=\"my-auto btn btn-primary px-6\" href=\"";
            // line 69
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 69), "variant" => twig_get_attribute($this->env, $this->source, $context["item"], "variantHashId", [], "any", false, false, false, 69)]);
            echo "\" data-mall-item-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prefixedId", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                                Shop now <i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                            </a>
                            <a class=\"d-block mb-2\" href=\"/brand/";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "brand", [], "any", false, false, false, 72), "slug", [], "any", false, false, false, 72), "html", null, true);
            echo "?brand=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "brand", [], "any", false, false, false, 72), "slug", [], "any", false, false, false, 72), "html", null, true);
            echo "&sort=latest\">
                                <img src=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "brand", [], "any", false, false, false, 73), "logo", [], "any", false, false, false, 73), "thumb", [0 => 130, 1 => 70, 2 => "crop"], "method", false, false, false, 73), "html", null, true);
            echo "\"  width=\"130\" height=\"70\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "brand", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "\" class=\"w-24 w-md-100 img-fluid\"/>
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"products-slider-for\">
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortedSliderProducts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 84
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 84), "thumb", [0 => 1000, 1 => 750, 2 => "crop"], "method", false, false, false, 84), "html", null, true);
            echo "\" width=\"1000\" height=\"750\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "\" loading=\"lazy\" class=\"img-fluid\"/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </div>
        </div>
    </div>
</section>

";
        // line 91
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 92
        echo "<script>
\$('.products-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    dots: false,
    arrows: false,
    fade: true,
    cssEase: 'linear',
    asNavFor: '.products-slider-nav',
    lazyLoad: 'ondemand',
    accessibility: false,
    pauseOnHover:false
});

\$('.products-slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.products-slider-for',
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    lazyLoad: 'ondemand',
    vertical: false,
    accessibility: false,
    pauseOnHover:false
});
</script>
";
        // line 91
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/product-slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 91,  278 => 92,  276 => 91,  269 => 86,  258 => 84,  254 => 83,  247 => 78,  234 => 73,  228 => 72,  220 => 69,  215 => 67,  209 => 64,  203 => 63,  200 => 62,  194 => 60,  188 => 58,  186 => 57,  182 => 55,  180 => 54,  177 => 53,  163 => 52,  157 => 51,  140 => 50,  130 => 47,  126 => 45,  118 => 40,  114 => 38,  91 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  73 => 16,  71 => 15,  67 => 14,  62 => 13,  60 => 12,  57 => 11,  54 => 10,  52 => 9,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container-fluid bg-secondary px-0\">
    <div class=\"row no-gutters align-items-center\">
        <div class=\"col-md-6\">
            <div class=\"mx-auto bg-white my-sm-4 max-w-lg\">
                <div class=\"products-slider-nav\">
                    {% for item in sortedSliderProducts %}
                    <div class=\"py-12 px-4 px-sm-12\">
                        <div class=\"mall-products-item__info-teritary mb-2\">
                            {% set rating = item.reviews_rating %}
                            {% if rating > 0 %}
                                <div class=\"mall-products-item__stars\">
                                    {% set rating=rating %}
                                    <div class=\"mall-category-review visible {{ variant ? ('mall-category-review--' ~ variant) : '' }}\">
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
                        </div>
                        <h2 class=\"font-weight-semibold mb-2\">
                            <a class=\"text-link\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\">{{ item.name }}</a>
                        </h2>
                    \t<div class=\"lead font-weight-semibold text-muted font-6 mb-2\">in
                    \t\t{% for category in item.categories %}
                    \t\t{{ category.name }}{% if not loop.last %},{% endif %}
                    \t\t{% endfor %}
                    \t</div>
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
                        <h4 class=\"font-weight-light opacity-70 pb-1 mb-6\">{{ item.description_short }}</h4>
                        <div class=\"d-flex justify-content-between\">
                            <a class=\"my-auto btn btn-primary px-6\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\">
                                Shop now <i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                            </a>
                            <a class=\"d-block mb-2\" href=\"/brand/{{ item.brand.slug }}?brand={{ item.brand.slug }}&sort=latest\">
                                <img src=\"{{ item.brand.logo.thumb(130, 70, 'crop') }}\"  width=\"130\" height=\"70\" alt=\"{{ item.brand.name }}\" class=\"w-24 w-md-100 img-fluid\"/>
                            </a>
                        </div>
                    </div>
                {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"products-slider-for\">
                {% for item in sortedSliderProducts %}
                <img src=\"{{ item.image.thumb(1000, 750, 'crop') }}\" width=\"1000\" height=\"750\" alt=\"{{ item.name }}\" loading=\"lazy\" class=\"img-fluid\"/>
                {% endfor %}
            </div>
        </div>
    </div>
</section>

{% put scripts %}
<script>
\$('.products-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    dots: false,
    arrows: false,
    fade: true,
    cssEase: 'linear',
    asNavFor: '.products-slider-nav',
    lazyLoad: 'ondemand',
    accessibility: false,
    pauseOnHover:false
});

\$('.products-slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.products-slider-for',
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    lazyLoad: 'ondemand',
    vertical: false,
    accessibility: false,
    pauseOnHover:false
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/product-slider.htm", "");
    }
}
