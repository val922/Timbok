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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/userreview.htm */
class __TwigTemplate_87859bf035a14109ec0e37badb6e5cbb7af1c3294b5f1d9c17cebc01eb89a33a extends \Twig\Template
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
        echo "<h5 class=\"mall-product-reviews__info-name font-weight-semibold font-6 text-center mb-4\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.your_rating"]);
        echo "</h5>
<div class=\"mall-product-reviews__info-content\">
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canReview", [], "any", false, false, false, 3)) {
            // line 4
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['review'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "customerReview", [], "any", false, false, false, 4)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::form")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "accountPage", [], "any", false, false, false, 6));
            echo "\" class=\"mall-product-reviews__login-required\">
            Login to create a review.
        </a>
    ";
        }
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/userreview.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  54 => 6,  51 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h5 class=\"mall-product-reviews__info-name font-weight-semibold font-6 text-center mb-4\">{{ 'offline.mall::frontend.reviews.your_rating' | trans }}</h5>
<div class=\"mall-product-reviews__info-content\">
    {% if __SELF__.canReview %}
        {% partial __SELF__ ~ '::form' review=__SELF__.customerReview %}
    {% else %}
        <a href=\"{{ __SELF__.accountPage | page }}\" class=\"mall-product-reviews__login-required\">
            Login to create a review.
        </a>
    {% endif %}
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productreviews/userreview.htm", "");
    }
}
