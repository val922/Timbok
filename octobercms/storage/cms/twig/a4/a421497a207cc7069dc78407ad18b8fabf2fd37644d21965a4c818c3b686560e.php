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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/info.htm */
class __TwigTemplate_35a249cd75f3180a002c1befec40902190f6f3eea36b630bc985f19b559ec2d0 extends \Twig\Template
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
        echo "<div class=\"bg-secondary pt-12 pb-6\" id=\"product-details\">
    <div class=\"container pt-sm-3 pb-sm-3\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3 class=\"h5 font-weight-semibold mb-4\">Description</h3>
                <div class=\"mb-6 pb-2\">
                    ";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 7);
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::propertyvalues")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "            </div>
        </div>
    </div>
</div>

<div class=\"container pt-12 pb-1 pb-md-6\" id=\"product-reviews\">
    <div class=\"row pt-sm-4\">
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showReviews", [], "any", false, false, false, 19)) {
            // line 20
            echo "            ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("productReviews"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 21
            echo "        ";
        }
        // line 22
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  72 => 21,  67 => 20,  65 => 19,  56 => 12,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-secondary pt-12 pb-6\" id=\"product-details\">
    <div class=\"container pt-sm-3 pb-sm-3\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h3 class=\"h5 font-weight-semibold mb-4\">Description</h3>
                <div class=\"mb-6 pb-2\">
                    {{ item.description | raw }}
                </div>
            </div>
            <div class=\"col-md-6\">
                {% partial __SELF__ ~ '::propertyvalues' %}
            </div>
        </div>
    </div>
</div>

<div class=\"container pt-12 pb-1 pb-md-6\" id=\"product-reviews\">
    <div class=\"row pt-sm-4\">
        {% if __SELF__.showReviews %}
            {% component 'productReviews' %}
        {% endif %}
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/info.htm", "");
    }
}
