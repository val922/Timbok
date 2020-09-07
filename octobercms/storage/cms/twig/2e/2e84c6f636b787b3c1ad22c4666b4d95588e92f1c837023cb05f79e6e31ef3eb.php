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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-quantitydropdown.htm */
class __TwigTemplate_410512f5a6607300683e9e67e25b13dbe16c6f7503c01cc891e807b4b2d1908c extends \Twig\Template
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
        echo "<div class=\"form-group mb-2\">
    <label for=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hashId", [], "any", false, false, false, 2), "html", null, true);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.quantity"]);
        echo "</label>
    <select class=\"mall-selectbox-sm js-mall-quantity form-control form-control-sm pl-2 hover:border-primary\" data-id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hashId", [], "any", false, false, false, 3), "html", null, true);
        echo "\" name=\"quantity\">
        ";
        // line 4
        $context["min"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 4), "quantity_min", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 4), "quantity_min", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMinQuantity", [], "any", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMinQuantity", [], "any", false, false, false, 4)));
        // line 5
        echo "        ";
        $context["max"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 5), "quantity_max", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "data", [], "any", false, true, false, 5), "quantity_max", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMaxQuantity", [], "any", false, false, false, 5))) : (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "defaultMaxQuantity", [], "any", false, false, false, 5)));
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["min"] ?? null), ($context["max"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            echo ((($context["i"] == twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, false, 7))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </select>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-quantitydropdown.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  60 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group mb-2\">
    <label for=\"{{ product.hashId }}\">{{ 'offline.mall::frontend.quantity' | trans }}</label>
    <select class=\"mall-selectbox-sm js-mall-quantity form-control form-control-sm pl-2 hover:border-primary\" data-id=\"{{ product.hashId }}\" name=\"quantity\">
        {% set min = product.data.quantity_min | default(__SELF__.defaultMinQuantity) %}
        {% set max = product.data.quantity_max | default(__SELF__.defaultMaxQuantity) %}
        {% for i in range(min, max) %}
            <option value=\"{{ i }}\" {{ i == product.quantity ? 'selected=\"selected\"' : '' }}>{{ i }}</option>
        {% endfor %}
    </select>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/table-quantitydropdown.htm", "");
    }
}
