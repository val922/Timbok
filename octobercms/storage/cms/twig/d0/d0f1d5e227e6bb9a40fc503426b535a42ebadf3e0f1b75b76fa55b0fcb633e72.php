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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/brands.htm */
class __TwigTemplate_66f7dbf832864513b54033064a21bf4f5d7f25c061df5ace858554cdf9ea2467 extends \Twig\Template
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
        echo "<div class=\"mall-property-group mb-6 pb-1\">
    <h3 class=\"mall-property-group__name position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
        <span>";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.brands"]);
        echo "</span>
    </h3>
    <div class=\"mall-filter\">
        <div class=\"form-group\">
            ";
        // line 7
        $context["selected"] = twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["filter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["brand"] ?? null) : null), "values", [], "any", false, false, false, 7);
        // line 8
        echo "            <select name=\"filter[brand][]\" id=\"mall-brands\" class=\"js-mall-select-filter form-control hover:border-primary border-top-0 border-left-0 border-right-0 border-bottom rounded-0 border-white pl-0 transition-20\">
                <option value=\"\">-- ";
        // line 9
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.show_all"]);
        echo "</option>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "brands", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 11
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "slug", [], "any", false, false, false, 11), "html", null, true);
            echo "\" ";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["brand"], "slug", [], "any", false, false, false, 11), ($context["selected"] ?? null))) ? ("selected") : (""));
            echo ">
                        ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/brands.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  68 => 12,  61 => 11,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-property-group mb-6 pb-1\">
    <h3 class=\"mall-property-group__name position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\">
        <span>{{ 'offline.mall::frontend.brands' | trans }}</span>
    </h3>
    <div class=\"mall-filter\">
        <div class=\"form-group\">
            {% set selected = filter['brand'].values %}
            <select name=\"filter[brand][]\" id=\"mall-brands\" class=\"js-mall-select-filter form-control hover:border-primary border-top-0 border-left-0 border-right-0 border-bottom rounded-0 border-white pl-0 transition-20\">
                <option value=\"\">-- {{ 'offline.mall::frontend.show_all' | trans }}</option>
                {% for brand in __SELF__.brands %}
                    <option value=\"{{ brand.slug }}\" {{ brand.slug in selected ? 'selected' }}>
                        {{ brand.name }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/brands.htm", "");
    }
}
