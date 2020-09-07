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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-taxes.htm */
class __TwigTemplate_95347806b5038261f485c38b0fe6c1f0c5244b4e02039e83d50870d7523bd665 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showTaxes", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "taxes", [], "any", false, false, false, 2));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 3
                echo "    <div class=\"mall-cart__taxes mall-cart__taxes--";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 3), "html", null, true);
                echo " d-flex justify-content-between mb-2\">
        <span>";
                // line 4
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tax", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "tax", [], "any", false, false, false, 4), "percentage", [], "any", false, false, false, 4), "html", null, true);
                echo " %</span><span>";
                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["entry"], "total", [], "any", false, false, false, 4)]);
                echo "</span>
    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    
    ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "taxes", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8) > 1)) {
                // line 9
                echo "    <div class=\"mall-cart__taxes-total d-flex justify-content-between mb-2\">
        <span>";
                // line 10
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total.taxes"]);
                echo ":</span><span>";
                echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "totalTaxes", [], "any", false, false, false, 10)]);
                echo "</span>
    </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-taxes.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 10,  88 => 9,  86 => 8,  83 => 7,  62 => 4,  57 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showTaxes %}
    {% for entry in totals.taxes %}
    <div class=\"mall-cart__taxes mall-cart__taxes--{{ loop.index }} d-flex justify-content-between mb-2\">
        <span>{{ entry.tax.name }}: {{ entry.tax.percentage }} %</span><span>{{ entry.total | money }}</span>
    </div>
    {% endfor %}
    
    {% if totals.taxes.count > 1 %}
    <div class=\"mall-cart__taxes-total d-flex justify-content-between mb-2\">
        <span>{{ 'offline.mall::frontend.total.taxes' | trans }}:</span><span>{{ totals.totalTaxes | money }}</span>
    </div>
    {% endif %}
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-taxes.htm", "");
    }
}
