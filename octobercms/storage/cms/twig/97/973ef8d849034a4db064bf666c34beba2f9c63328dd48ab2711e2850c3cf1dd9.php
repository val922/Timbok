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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/items.htm */
class __TwigTemplate_0e2975e6cbfdfef9315e90033ab2cc576f29b4d375fbcdcd9d167f01a44b0199 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 1), "isHidden", [], "any", false, false, false, 1)) {
                // line 2
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 2) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 2))) {
                    // line 3
                    echo "        <li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 3), "html", null, true);
                    echo "</a></li>
        ";
                    // line 4
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 4)) {
                        // line 5
                        echo "            ";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 5)                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pageHeader/items"                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 6
                        echo "        ";
                    }
                    // line 7
                    echo "    ";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  60 => 6,  54 => 5,  52 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
    {% if item.isActive or item.isChildActive %}
        <li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"{{ item.url }}\">{{ item.title }}</a></li>
        {% if item.items %}
            {% partial 'pageHeader/items' items=item.items %}
        {% endif %}
    {% endif %}
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/items.htm", "");
    }
}
