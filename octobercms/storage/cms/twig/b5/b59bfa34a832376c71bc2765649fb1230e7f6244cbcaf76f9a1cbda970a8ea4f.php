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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productCategories/items.htm */
class __TwigTemplate_00f9bc389333b6c3d89d76a9184b51e8e0aa77e14031e93a6ab142285eb2a6d3 extends \Twig\Template
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
                echo "    <div class=\"d-flex align-items-center\">
        <a href=\"";
                // line 3
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) ? (("#" . call_user_func_array($this->env->getFilter('slug')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 3)]))) : (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3))), "html", null, true);
                echo "\" class=\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 3))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) ? ("collapsed") : (""));
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) {
                    echo "data-toggle=\"collapse\" aria-expanded=\"false\"";
                }
                echo ">
            <i class=\"w-4 mr-2 ";
                // line 4
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 4)) ? ("text-danger") : ("text-primary"));
                echo "\" data-feather=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 4)) ? ("plus") : ("arrow-right"));
                echo "\"></i>
        </a>
        <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 6), "html", null, true);
                echo "\" class=\"list-group-item d-flex flex-grow-1 align-items-center font-5 border-0 rounded-0 text-link py-2 px-0 bg-transparent ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 6) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 6))) ? ("active") : (""));
                echo "\">
            <span>";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 7), "html", null, true);
                echo "</span>
            ";
                // line 8
                if (($context["postCount"] ?? null)) {
                    // line 9
                    echo "            <span class=\"ml-auto d-flex justify-content-center align-items-center font-1 font-weight-medium text-white bg-primary rounded-circle w-4 h-4\">
                ";
                    // line 10
                    echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                    echo "
            </span>
            ";
                }
                // line 13
                echo "        </a>
    </div>
    ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "    <div class=\"list-subgroup collapse pl-3 ml-2 border-left\" id=\"";
                    echo call_user_func_array($this->env->getFilter('slug')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16)]);
                    echo "\" data-parent=\"#";
                    if (($context["value"] ?? null)) {
                        echo call_user_func_array($this->env->getFilter('slug')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 16)]);
                    } else {
                        echo "category-nav";
                    }
                    echo "\">
        ";
                    // line 17
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 17)                    ;
                    $context['__cms_partial_params']['value'] = true                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("productCategories/items"                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 18
                    echo "    </div>
    ";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productCategories/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 18,  102 => 17,  91 => 16,  89 => 15,  85 => 13,  79 => 10,  76 => 9,  74 => 8,  70 => 7,  64 => 6,  57 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
    <div class=\"d-flex align-items-center\">
        <a href=\"{{ item.items ? '#' ~ item.title|slug : item.url }}\" class=\"{{ item.isActive or item.isChildActive ? 'active' : '' }} {{ item.items ? 'collapsed' : '' }}\" {% if item.items %}data-toggle=\"collapse\" aria-expanded=\"false\"{% endif %}>
            <i class=\"w-4 mr-2 {{ item.items ? 'text-danger' : 'text-primary' }}\" data-feather=\"{{ item.items ? 'plus' : 'arrow-right' }}\"></i>
        </a>
        <a href=\"{{ item.url }}\" class=\"list-group-item d-flex flex-grow-1 align-items-center font-5 border-0 rounded-0 text-link py-2 px-0 bg-transparent {{ item.isActive or item.isChildActive ? 'active' : '' }}\">
            <span>{{ item.title }}</span>
            {% if postCount %}
            <span class=\"ml-auto d-flex justify-content-center align-items-center font-1 font-weight-medium text-white bg-primary rounded-circle w-4 h-4\">
                {{ postCount }}
            </span>
            {% endif %}
        </a>
    </div>
    {% if item.items %}
    <div class=\"list-subgroup collapse pl-3 ml-2 border-left\" id=\"{{ item.title|slug }}\" data-parent=\"#{% if value %}{{ item.title|slug }}{% else %}category-nav{% endif %}\">
        {% partial 'productCategories/items' items=item.items value=true %}
    </div>
    {% endif %}
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productCategories/items.htm", "");
    }
}
