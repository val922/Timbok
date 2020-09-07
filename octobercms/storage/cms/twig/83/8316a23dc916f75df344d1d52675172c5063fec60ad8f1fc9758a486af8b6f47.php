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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/default.htm */
class __TwigTemplate_bd0f53899e850570cbb1fd50f7ab202ef1d00053543c3465ccc6b0c0e86467eb extends \Twig\Template
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
        echo "<div class=\"col-md-4 pb-5\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "allReviews", [], "any", false, false, false, 2), "count", [], "any", false, false, false, 2) > 0)) {
            // line 3
            echo "    <div class=\"mall-product-reviews__info card mb-5\">
        ";
            // line 4
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::overall")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "    </div>
    ";
        }
        // line 7
        echo "    <a class=\"btn btn-warning btn-block\" data-toggle=\"collapse\" href=\"#leaveReview\" role=\"button\" aria-expanded=\"false\" aria-controls=\"leaveReview\">Leave a review</a>
    <div class=\"collapse\" id=\"leaveReview\">
        <div class=\"card\">
            <div class=\"mall-product-reviews__info card-body\" id=\"mall-rating-widget\">
                ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["productReviews"] ?? null) . "::userreview")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "            </div>
        </div>
    </div>
</div>
<div class=\"mall-reviews col-md-8 pb-12\">
    <h2 class=\"h3 font-weight-semibold mb-4\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.heading"]);
        echo "</h2>
    <!-- Review-->
    ";
        // line 19
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['reviews'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 19)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::reviews")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "</div>

";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  80 => 20,  75 => 19,  70 => 17,  63 => 12,  59 => 11,  53 => 7,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-4 pb-5\">
    {% if __SELF__.allReviews.count > 0 %}
    <div class=\"mall-product-reviews__info card mb-5\">
        {% partial __SELF__ ~ '::overall' %}
    </div>
    {% endif %}
    <a class=\"btn btn-warning btn-block\" data-toggle=\"collapse\" href=\"#leaveReview\" role=\"button\" aria-expanded=\"false\" aria-controls=\"leaveReview\">Leave a review</a>
    <div class=\"collapse\" id=\"leaveReview\">
        <div class=\"card\">
            <div class=\"mall-product-reviews__info card-body\" id=\"mall-rating-widget\">
                {% partial productReviews ~ '::userreview' %}
            </div>
        </div>
    </div>
</div>
<div class=\"mall-reviews col-md-8 pb-12\">
    <h2 class=\"h3 font-weight-semibold mb-4\">{{ 'offline.mall::frontend.reviews.heading' | trans }}</h2>
    <!-- Review-->
    {% partial __SELF__ ~ '::reviews' reviews=__SELF__.reviews %}
</div>

{% partial __SELF__ ~ '::scripts' %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/default.htm", "");
    }
}
