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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/form.htm */
class __TwigTemplate_ec504bdf94e46550d3077bf83cdea7326a9c8244c9720c09f7f5e2ee17570e1b extends \Twig\Template
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
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::";
        echo ((($context["review"] ?? null)) ? ("onUpdate") : ("onCreate"));
        echo "\"
      data-request-validate
      data-request-flash
      class=\"mall-review-form\">
    <div class=\"mall-product-reviews__overall-ratings\">
        <div class=\"js-mall-rating mb-4\">
            <input id=\"rating\" name=\"rating\" type=\"hidden\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "rating", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
            ";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['rating'] = twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "rating", [], "any", false, false, false, 8)        ;
        $context['__cms_partial_params']['variant'] = "big"        ;
        $context['__cms_partial_params']['clickable'] = true        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "            <div class=\"mall-product-reviews__summary font-5 text-dark mr-4\">
                ";
        // line 10
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.overall_rating"]);
        echo "
                <div data-validate-for=\"rating\"></div>
            </div>
        </div>
        <div class=\"js-mall-rating mb-4\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviewCategories", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "                ";
            $context["rating"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "category_reviews", [], "any", false, false, false, 16), "where", [0 => "review_category_id", 1 => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 16)], "method", false, false, false, 16), "first", [], "method", false, false, false, 16), "rating", [], "any", false, false, false, 16);
            // line 17
            echo "                <input id=\"category_rating_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\"
                       name=\"category_rating[";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "]\"
                       value=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["rating"] ?? null), "html", null, true);
            echo "\"
                       type=\"hidden\">
                ";
            // line 21
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['rating'] = ($context["rating"] ?? null)            ;
            $context['__cms_partial_params']['label'] = twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21)            ;
            $context['__cms_partial_params']['variant'] = "big"            ;
            $context['__cms_partial_params']['clickable'] = true            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
    ";
        // line 25
        if (($context["review"] ?? null)) {
            // line 26
            echo "        <div class=\"mall-product-reviews__user-review\">
            <div class=\"mall-review\">
                ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 28)) {
                // line 29
                echo "                    <h4 class=\"mall-review__title font-weight-medium font-5\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 30), "html", null, true);
                echo "
                    </h4>
                ";
            }
            // line 33
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "description", [], "any", false, false, false, 33)) {
                // line 34
                echo "                    <div class=\"mall-review__content mt-4\">
                        ";
                // line 35
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "description", [], "any", false, false, false, 35), "html", null, true));
                echo "
                    </div>
                ";
            }
            // line 38
            echo "            </div>
            <div class=\"mall-product-reviews__user-review-actions text-right pt-4\">
                <button class=\"mall-btn mall-btn--text js-mall-edit-review btn btn-sm btn-warning\">
                    ";
            // line 41
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.edit"]);
            echo "
                </button>
            </div>
        </div>
    ";
        }
        // line 46
        echo "    <div class=\"mall-product-reviews__form-details d-none border-top pt-4\">
        <div class=\"form-group\">
            <label for=\"title\">";
        // line 48
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.reviews.title"]);
        echo "</label>
            <div class=\"mall-form-comment font-3\">
                ";
        // line 50
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.optional"]);
        echo "
            </div>
            <input id=\"title\" name=\"title\" type=\"text\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "title", [], "any", false, false, false, 52), "html", null, true);
        echo "\" class=\"form-control hover:border-primary\">
            <div data-validate-for=\"title\" class=\"text-danger font-4 mt-2 ml-1\"></div>
        </div>
        <div class=\"form-group\">
            <label for=\"description\">";
        // line 56
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.reviews.review"]);
        echo "</label>
            <div class=\"mall-form-comment font-3\">
                ";
        // line 58
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.optional"]);
        echo "
            </div>
            <textarea id=\"description\" name=\"description\" rows=\"4\" class=\"form-control hover:border-primary\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "description", [], "any", false, false, false, 60), "html", null, true);
        echo "</textarea>
            <div data-validate-for=\"description\" class=\"text-danger font-4 mt-2 ml-1\"></div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"pros\">";
        // line 66
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.reviews.pros"]);
        echo "</label>
                    <div class=\"mall-form-comment font-3\">
                        ";
        // line 68
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.one_per_line"]);
        echo "
                    </div>
                    <textarea id=\"pros\" name=\"pros\" rows=\"3\" class=\"form-control hover:border-primary\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "pros_string", [], "any", false, false, false, 70), "html", null, true);
        echo "</textarea>
                    <div data-validate-for=\"pros\" class=\"text-danger font-4 mt-2 ml-1\"></div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"cons\">";
        // line 76
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::lang.reviews.cons"]);
        echo "</label>
                    <div class=\"mall-form-comment font-3\">
                        ";
        // line 78
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.one_per_line"]);
        echo "
                    </div>
                    <textarea id=\"cons\" name=\"cons\" rows=\"3\" class=\"form-control hover:border-primary\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "cons_string", [], "any", false, false, false, 80), "html", null, true);
        echo "</textarea>
                    <div data-validate-for=\"cons\" class=\"text-danger font-4 mt-2 ml-1\"></div>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"text-right pt-4\">
            <button class=\"mall-btn mall-btn--primary btn btn-sm btn-warning\" type=\"submit\" data-attach-loading>
                ";
        // line 88
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [("offline.mall::frontend.reviews." . ((($context["review"] ?? null)) ? ("update") : ("create")))]);
        echo "
            </button>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 88,  221 => 80,  216 => 78,  211 => 76,  202 => 70,  197 => 68,  192 => 66,  183 => 60,  178 => 58,  173 => 56,  166 => 52,  161 => 50,  156 => 48,  152 => 46,  144 => 41,  139 => 38,  133 => 35,  130 => 34,  127 => 33,  121 => 30,  118 => 29,  116 => 28,  112 => 26,  110 => 25,  106 => 23,  100 => 22,  92 => 21,  87 => 19,  83 => 18,  78 => 17,  75 => 16,  71 => 15,  63 => 10,  60 => 9,  53 => 8,  49 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"{{ __SELF__ }}::{{ review ? 'onUpdate' : 'onCreate' }}\"
      data-request-validate
      data-request-flash
      class=\"mall-review-form\">
    <div class=\"mall-product-reviews__overall-ratings\">
        <div class=\"js-mall-rating mb-4\">
            <input id=\"rating\" name=\"rating\" type=\"hidden\" value=\"{{ review.rating }}\">
            {% partial __SELF__ ~ '::stars' rating=review.rating variant=\"big\" clickable=true %}
            <div class=\"mall-product-reviews__summary font-5 text-dark mr-4\">
                {{ 'offline.mall::frontend.reviews.overall_rating' | trans }}
                <div data-validate-for=\"rating\"></div>
            </div>
        </div>
        <div class=\"js-mall-rating mb-4\">
            {% for category in __SELF__.reviewCategories %}
                {% set rating = review.category_reviews.where('review_category_id', category.id).first().rating %}
                <input id=\"category_rating_{{ category.id }}\"
                       name=\"category_rating[{{ category.id }}]\"
                       value=\"{{ rating }}\"
                       type=\"hidden\">
                {% partial __SELF__ ~ '::stars' rating=rating label=category.name variant=\"big\" clickable=true %}
            {% endfor %}
        </div>
    </div>
    {% if review %}
        <div class=\"mall-product-reviews__user-review\">
            <div class=\"mall-review\">
                {% if review.title %}
                    <h4 class=\"mall-review__title font-weight-medium font-5\">
                        {{ review.title }}
                    </h4>
                {% endif %}
                {% if review.description %}
                    <div class=\"mall-review__content mt-4\">
                        {{ review.description | nl2br }}
                    </div>
                {% endif %}
            </div>
            <div class=\"mall-product-reviews__user-review-actions text-right pt-4\">
                <button class=\"mall-btn mall-btn--text js-mall-edit-review btn btn-sm btn-warning\">
                    {{ 'offline.mall::frontend.reviews.edit' | trans }}
                </button>
            </div>
        </div>
    {% endif %}
    <div class=\"mall-product-reviews__form-details d-none border-top pt-4\">
        <div class=\"form-group\">
            <label for=\"title\">{{ 'offline.mall::lang.reviews.title' | trans }}</label>
            <div class=\"mall-form-comment font-3\">
                {{ 'offline.mall::frontend.reviews.optional' | trans }}
            </div>
            <input id=\"title\" name=\"title\" type=\"text\" value=\"{{ review.title }}\" class=\"form-control hover:border-primary\">
            <div data-validate-for=\"title\" class=\"text-danger font-4 mt-2 ml-1\"></div>
        </div>
        <div class=\"form-group\">
            <label for=\"description\">{{ 'offline.mall::lang.reviews.review' | trans }}</label>
            <div class=\"mall-form-comment font-3\">
                {{ 'offline.mall::frontend.reviews.optional' | trans }}
            </div>
            <textarea id=\"description\" name=\"description\" rows=\"4\" class=\"form-control hover:border-primary\">{{ review.description }}</textarea>
            <div data-validate-for=\"description\" class=\"text-danger font-4 mt-2 ml-1\"></div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"pros\">{{ 'offline.mall::lang.reviews.pros' | trans }}</label>
                    <div class=\"mall-form-comment font-3\">
                        {{ 'offline.mall::frontend.reviews.one_per_line' | trans }}
                    </div>
                    <textarea id=\"pros\" name=\"pros\" rows=\"3\" class=\"form-control hover:border-primary\">{{ review.pros_string }}</textarea>
                    <div data-validate-for=\"pros\" class=\"text-danger font-4 mt-2 ml-1\"></div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    <label for=\"cons\">{{ 'offline.mall::lang.reviews.cons' | trans }}</label>
                    <div class=\"mall-form-comment font-3\">
                        {{ 'offline.mall::frontend.reviews.one_per_line' | trans }}
                    </div>
                    <textarea id=\"cons\" name=\"cons\" rows=\"3\" class=\"form-control hover:border-primary\">{{ review.cons_string }}</textarea>
                    <div data-validate-for=\"cons\" class=\"text-danger font-4 mt-2 ml-1\"></div>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"text-right pt-4\">
            <button class=\"mall-btn mall-btn--primary btn btn-sm btn-warning\" type=\"submit\" data-attach-loading>
                {{ ('offline.mall::frontend.reviews.' ~ (review ? 'update' : 'create')) | trans }}
            </button>
        </div>
    </div>
</form>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/form.htm", "");
    }
}
