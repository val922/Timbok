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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/labels.htm */
class __TwigTemplate_7c64a7f95144465dcc599e694035231dc1c0d7a38a83828f13f67c522ee707da extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showOnSaleFilter", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"mall-property-group mb-6 pb-1\">
        <h3 class=\"mall-property-group__name position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
            <span>";
            // line 4
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.labels"]);
            echo "</span>
        </h3>

        ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showOnSaleFilter", [], "any", false, false, false, 7)) {
                // line 8
                echo "            ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::onsale")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 9
                echo "        ";
            }
            // line 10
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/labels.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  56 => 9,  51 => 8,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showOnSaleFilter %}
    <div class=\"mall-property-group mb-6 pb-1\">
        <h3 class=\"mall-property-group__name position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
            <span>{{ 'offline.mall::frontend.labels' | trans }}</span>
        </h3>

        {% if __SELF__.showOnSaleFilter %}
            {% partial __SELF__ ~ '::onsale' %}
        {% endif %}
    </div>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/labels.htm", "");
    }
}
