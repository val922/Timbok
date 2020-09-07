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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetProducts/item.htm */
class __TwigTemplate_8bb14fb4d5ab4ad25997ecdf3684a00f07d59f357dc7779069a40617c0286aae extends \Twig\Template
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
        echo "<div class=\"d-flex align-items-start mb-4 pt-1\">
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 2)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/image"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <div class=\"d-flex flex-column\">
        <h6 class=\"font-weight-medium my-1\">
            <a class=\"d-block text-link\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 5), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 5)]);
        echo "\" data-mall-item-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
                ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "
            </a>
        </h6>
        ";
        // line 9
        if ((($context["ratings"] ?? null) == true)) {
            // line 10
            echo "        ";
            $context["rating"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "reviews_rating", [], "any", false, false, false, 10);
            // line 11
            echo "        ";
            if ((($context["rating"] ?? null) > 0)) {
                // line 12
                echo "            <div class=\"mall-products-item__stars\">
                ";
                // line 13
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['rating'] = ($context["rating"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetProducts/stars"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 14
                echo "            </div>
        ";
            }
            // line 16
            echo "        ";
        }
        // line 17
        echo "        <p class=\"mb-0 font-6\">
            <del class=\"text-muted mall-products-item__old-price mr-1\">
                ";
        // line 19
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 19);
        // line 20
        echo "                ";
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
        echo "            </del>
            <span class=\"mall-products-item__price ";
        // line 26
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 26), "count", [], "any", false, false, false, 26) > 0)) ? ("text-primary") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 26)) ? ("mall-products-item__price--special") : (""));
        echo "\">
                ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 27);
        echo "
            </span>
        </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetProducts/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  108 => 26,  105 => 25,  99 => 23,  93 => 21,  90 => 20,  88 => 19,  84 => 17,  81 => 16,  77 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  61 => 9,  55 => 6,  49 => 5,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex align-items-start mb-4 pt-1\">
    {% partial 'widgetProducts/image' image=item.image %}
    <div class=\"d-flex flex-column\">
        <h6 class=\"font-weight-medium my-1\">
            <a class=\"d-block text-link\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\">
                {{ item.name }}
            </a>
        </h6>
        {% if ratings == true %}
        {% set rating = item.reviews_rating %}
        {% if rating > 0 %}
            <div class=\"mall-products-item__stars\">
                {% partial 'widgetProducts/stars' rating=rating %}
            </div>
        {% endif %}
        {% endif %}
        <p class=\"mb-0 font-6\">
            <del class=\"text-muted mall-products-item__old-price mr-1\">
                {% set price = item.price() %}
                {% if price.official %}
                    {{ price.official.string | raw }}
                {% else %}
                    {{ item.oldPrice.count > 0 ? item.oldPrice().string | raw }}
                {% endif %}
            </del>
            <span class=\"mall-products-item__price {{ item.oldPrice.count > 0 ? 'text-primary' : '' }} {{ price.isCustomerSpecific ? 'mall-products-item__price--special' }}\">
                {{ price.string | raw }}
            </span>
        </p>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetProducts/item.htm", "");
    }
}
