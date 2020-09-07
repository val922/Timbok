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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/sorter.htm */
class __TwigTemplate_70c26d9582762ff435aa4a3447a41b5395b2d8a5b7d08c03a5d4787790704608 extends \Twig\Template
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
    <h3 class=\"mall-property-group__name position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\" for=\"mall-sorter\">
        <span>";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.sort_order"]);
        echo "</span>
    </h3>
    <div class=\"mall-filter\">
        <div class=\"form-group\">
            <select name=\"sort\" id=\"mall-sorter\" class=\"js-mall-select-filter form-control hover:border-primary border-top-0 border-left-0 border-right-0 border-bottom rounded-0 border-white pl-0 transition-20\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "sortOptions", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 9
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            echo ((($context["key"] == twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "sortOrder", [], "any", false, false, false, 9))) ? ("selected") : (""));
            echo ">
                        ";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 10), $context["option"])) : ($context["option"])), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/sorter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  60 => 10,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-property-group mb-6 pb-1\">
    <h3 class=\"mall-property-group__name position-relative font-6 font-weight-semibold pb-3 mb-5 decorated-right\" for=\"mall-sorter\">
        <span>{{ 'offline.mall::frontend.sort_order' | trans }}</span>
    </h3>
    <div class=\"mall-filter\">
        <div class=\"form-group\">
            <select name=\"sort\" id=\"mall-sorter\" class=\"js-mall-select-filter form-control hover:border-primary border-top-0 border-left-0 border-right-0 border-bottom rounded-0 border-white pl-0 transition-20\">
                {% for key, option in __SELF__.sortOptions %}
                    <option value=\"{{ key }}\" {{ key == __SELF__.sortOrder ? 'selected' }}>
                        {{ option.label | default(option) }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/sorter.htm", "");
    }
}
