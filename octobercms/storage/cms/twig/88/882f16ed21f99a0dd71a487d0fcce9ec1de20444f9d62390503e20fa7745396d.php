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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/propertyvalues.htm */
class __TwigTemplate_58b4205af0e288ad6ccad101358bcc6054584b04f260ce212d1642701fa899eb extends \Twig\Template
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
        echo "<div class=\"mall-product__properties\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "grouped_properties", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 3
            echo "        <h3 class=\"mall-product__properties-heading h5 font-weight-semibold mb-4\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entry"], "group", [], "any", false, false, false, 3), "display_name", [], "any", false, false, false, 3), "html", null, true);
            echo "</h3>
        <ul class=\"mall-three-columns list-unstyled mb-6 pb-2\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entry"], "values", [], "any", false, false, false, 5));
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
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 6
                echo "                <li class=\"mall-column d-block ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) ? ("py-2") : ("py-2"));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 6) == 1)) ? ("") : ("border-bottom"));
                echo "\">
                    <strong>";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "property", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
                echo ":</strong>&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["value"], "display_value", [], "any", false, false, false, 7);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "property", [], "any", false, false, false, 7), "unit", [], "any", false, false, false, 7), "html", null, true);
                echo "
                </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/propertyvalues.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 12,  95 => 10,  74 => 7,  67 => 6,  50 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-product__properties\">
    {% for entry in item.grouped_properties %}
        <h3 class=\"mall-product__properties-heading h5 font-weight-semibold mb-4\">{{ entry.group.display_name }}</h3>
        <ul class=\"mall-three-columns list-unstyled mb-6 pb-2\">
            {% for value in entry.values %}
                <li class=\"mall-column d-block {{ loop.first ? 'py-2' : 'py-2' }} {{ loop.length == 1 ? '' : 'border-bottom' }}\">
                    <strong>{{ value.property.name }}:</strong>&nbsp;{{ value.display_value | raw }} {{ value.property.unit }}
                </li>
            {% endfor %}
        </ul>
    {% endfor %}
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/propertyvalues.htm", "");
    }
}
