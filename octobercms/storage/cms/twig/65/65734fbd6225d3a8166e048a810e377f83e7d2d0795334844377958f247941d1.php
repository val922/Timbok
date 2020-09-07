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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/reviews.htm */
class __TwigTemplate_a1573ab834f6557d80c481928238d8d28986ea3cf3782f5399b43ed82ef4705e extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 1));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 2
            echo "    <div class=\"mall-review border-bottom pb-5 my-5\">
        <div class=\"d-sm-flex align-items-center pt-4 pb-2\">
            ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 4)) {
                // line 5
                echo "            <h6 class=\"mall-review__title font-weight-semibold mb-0\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo "</h6>
            ";
            }
            // line 7
            echo "            <span class=\"d-none d-sm-inline mx-2 text-muted opacity-50\">|</span>
            <div class=\"mall-review__rating font-6\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 10
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['active'] = (twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 10) >= $context["i"])                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::star")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 11
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </div>
        </div>
        ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["review"], "variant", [], "any", false, false, false, 14)) {
                // line 15
                echo "        <h6 class=\"mall-review__subtitle text-muted font-5\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "variant", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
                echo "</h6>
        ";
            }
            // line 17
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 17)) {
                // line 18
                echo "        <p class=\"mall-review__content font-weight-light\">";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 18), "html", null, true));
                echo "</p>
        ";
            }
            // line 20
            echo "        <div class=\"d-sm-flex justify-content-between mall-review__details mb-4\">
            <div class=\"mall-review__category-reviews mb-4\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "category_reviews", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["category_review"]) {
                // line 23
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['rating'] = twig_get_attribute($this->env, $this->source, $context["category_review"], "rating", [], "any", false, false, false, 23)                ;
                $context['__cms_partial_params']['label'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category_review"], "review_category", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 24
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </div>
            <div class=\"mall-review__category-reviews max-w-sm\">
                <ul class=\"mall-review__pro-con-list list-unstyled mb-0\">
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "pros", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "                    <li class=\"d-flex mb-1\">
                        <i class=\"line-height-loose w-4 text-success mr-2\" data-feather=\"plus\"></i><span class=\"text-dark font-5\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 30), "html", null, true);
                echo "</span>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "cons", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "                    <li class=\"d-flex mb-1\">
                        <i class=\"line-height-loose w-4 text-danger mr-2\" data-feather=\"minus\"></i><span class=\"text-dark font-5\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 35), "html", null, true);
                echo "</span>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </ul>
            </div>
        </div>
        <div class=\"align-items-center mb-2\">
            <div class=\"d-flex flex-column\">
                <h6 class=\"mall-review__author font-5 mb-0\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "customerName", [], "any", false, false, false, 43), "html", null, true);
            echo "</h6>
                <span class=\"d-block font-5 text-muted\">
                    ";
            // line 45
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, $context["review"], "created_at", [], "any", false, false, false, 45)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::date")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 46
            echo "                </span>
            </div>
        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "    <div class=\"mall-callout mall-callout--neutral alert alert-warning\" role=\"alert\">
        ";
            // line 52
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.none"]);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 56), "hasPages", [], "any", false, false, false, 56)) {
            // line 57
            echo "    <div class=\"mall-pagination mall-pagination--reviews\">
        ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 58);
            echo "
    </div>
";
        }
        // line 61
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
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 61,  200 => 58,  197 => 57,  195 => 56,  192 => 55,  183 => 52,  180 => 51,  171 => 46,  166 => 45,  161 => 43,  154 => 38,  145 => 35,  142 => 34,  137 => 33,  128 => 30,  125 => 29,  121 => 28,  116 => 25,  110 => 24,  103 => 23,  99 => 22,  95 => 20,  89 => 18,  86 => 17,  80 => 15,  78 => 14,  74 => 12,  68 => 11,  62 => 10,  58 => 9,  54 => 7,  48 => 5,  46 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for review in __SELF__.reviews %}
    <div class=\"mall-review border-bottom pb-5 my-5\">
        <div class=\"d-sm-flex align-items-center pt-4 pb-2\">
            {% if review.title %}
            <h6 class=\"mall-review__title font-weight-semibold mb-0\">{{ review.title }}</h6>
            {% endif %}
            <span class=\"d-none d-sm-inline mx-2 text-muted opacity-50\">|</span>
            <div class=\"mall-review__rating font-6\">
                {% for i in range(1, 5) %}
                    {% partial __SELF__ ~ '::star' active=review.rating >= i %}
                {% endfor %}
            </div>
        </div>
        {% if review.variant %}
        <h6 class=\"mall-review__subtitle text-muted font-5\">{{ review.variant.name }}</h6>
        {% endif %}
        {% if review.description %}
        <p class=\"mall-review__content font-weight-light\">{{ review.description | nl2br }}</p>
        {% endif %}
        <div class=\"d-sm-flex justify-content-between mall-review__details mb-4\">
            <div class=\"mall-review__category-reviews mb-4\">
                {% for category_review in review.category_reviews %}
                    {% partial __SELF__ ~ '::stars' rating=category_review.rating label=category_review.review_category.name %}
                {% endfor %}
            </div>
            <div class=\"mall-review__category-reviews max-w-sm\">
                <ul class=\"mall-review__pro-con-list list-unstyled mb-0\">
                {% for item in review.pros %}
                    <li class=\"d-flex mb-1\">
                        <i class=\"line-height-loose w-4 text-success mr-2\" data-feather=\"plus\"></i><span class=\"text-dark font-5\">{{ item.value }}</span>
                    </li>
                {% endfor %}
                {% for item in review.cons %}
                    <li class=\"d-flex mb-1\">
                        <i class=\"line-height-loose w-4 text-danger mr-2\" data-feather=\"minus\"></i><span class=\"text-dark font-5\">{{ item.value }}</span>
                    </li>
                {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"align-items-center mb-2\">
            <div class=\"d-flex flex-column\">
                <h6 class=\"mall-review__author font-5 mb-0\">{{ review.customerName }}</h6>
                <span class=\"d-block font-5 text-muted\">
                    {% partial __SELF__ ~ '::date' date=review.created_at %}
                </span>
            </div>
        </div>
    </div>
{% else %}
    <div class=\"mall-callout mall-callout--neutral alert alert-warning\" role=\"alert\">
        {{ 'offline.mall::frontend.reviews.none' | trans }}
    </div>
{% endfor %}

{% if __SELF__.reviews.hasPages %}
    <div class=\"mall-pagination mall-pagination--reviews\">
        {{ __SELF__.reviews | raw }}
    </div>
{% endif %}

<script>
    // Feather Icons
    \$( document ).ready(function() {
        feather.replace()
    });
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/reviews.htm", "");
    }
}
