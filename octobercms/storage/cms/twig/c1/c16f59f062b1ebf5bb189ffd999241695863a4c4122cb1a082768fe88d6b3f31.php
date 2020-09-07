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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/relatedProducts/item.htm */
class __TwigTemplate_a85be71da733afe96f94a12771db89b851f32e21b61e124de3c694526e05efe0 extends \Twig\Template
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
        echo "<div class=\"mall-products-item mx-2\">
    <div class=\"position-relative w-100 max-w-sm mx-auto bg-white mb-4\">
        <div class=\"position-relative\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 4)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("relatedProducts/image"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
        <div class=\"text-center position-relative bg-white transition-40 z-10 p-4\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 7));
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
            // line 8
            echo "            <a class=\"d-inline-block mb-1 text-muted hover:opacity-50 font-4 transition-20\" href=\"/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 9)) {
                echo ", ";
            }
            // line 10
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
        // line 12
        echo "            <h3 class=\"font-6 font-weight-normal d-block mb-3 pb-4 border-bottom\">
                <a class=\"text-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 13), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 13)]);
        echo "\" data-mall-item-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 13), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</a>
            </h3>
            <span class=\"font-6\">
                ";
        // line 16
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "method", false, false, false, 16);
        // line 17
        echo "                <del class=\"text-muted mr-1 mall-products-item__old-price\">
                ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 18)) {
            // line 19
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "official", [], "any", false, false, false, 19), "string", [], "any", false, false, false, 19);
            echo "
                ";
        } else {
            // line 21
            echo "                    ";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 21), "count", [], "any", false, false, false, 21) > 0)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "method", false, false, false, 21), "string", [], "any", false, false, false, 21)) : (""));
            echo "
                ";
        }
        // line 23
        echo "                </del>
                <span class=\"mall-products-item__price ";
        // line 24
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "oldPrice", [], "any", false, false, false, 24), "count", [], "any", false, false, false, 24) > 0)) ? ("text-primary") : ("text-primary"));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "isCustomerSpecific", [], "any", false, false, false, 24)) ? ("mall-products-item__price--special") : (""));
        echo "\">
                    ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "string", [], "any", false, false, false, 25);
        echo "
                </span>
            </span>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/relatedProducts/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 25,  128 => 24,  125 => 23,  119 => 21,  113 => 19,  111 => 18,  108 => 17,  106 => 16,  96 => 13,  93 => 12,  78 => 10,  73 => 9,  68 => 8,  51 => 7,  47 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-products-item mx-2\">
    <div class=\"position-relative w-100 max-w-sm mx-auto bg-white mb-4\">
        <div class=\"position-relative\">
            {% partial 'relatedProducts/image' image=item.image %}
        </div>
        <div class=\"text-center position-relative bg-white transition-40 z-10 p-4\">
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
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/relatedProducts/item.htm", "");
    }
}
