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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/items.htm */
class __TwigTemplate_03528d60ab011dc6c97aca0296a4b2ba55cc0f233a261edcf84c3c91df18b4ec extends \Twig\Template
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
                echo "<li class=\"nav-item hover:bg-secondary transition-20 ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 2)) ? ("dropdown") : (""));
                echo " ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 2) == "megamenu")) ? ("mega-dropdown position-md-static") : (""));
                echo "\">
\t<a href=\"";
                // line 3
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3), "html", null, true);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 3), "isExternal", [], "any", false, false, false, 3)) ? ("target=\"_blank\"") : (""));
                echo " class=\"nav-link d-flex justify-content-between align-items-center opacity-70 hover:opacity-100 font-5 font-md-6 text-dark py-3 py-md-6 px-4 px-md-5 navbar-link ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 3))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 3)) ? ("dropdown-toggle") : (""));
                echo "\" 
\t\t";
                // line 4
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 4)) {
                    echo "id=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 4), [" " => "-"]), "html", null, true);
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"";
                }
                echo ">
\t\t";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo "
\t\t";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 6)) {
                    echo "<i class=\"ml-1\" data-feather=\"chevron-down\"></i>";
                }
                // line 7
                echo "\t</a>
\t";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 9) != "megamenu")) {
                        // line 10
                        echo "\t<ul class=\"dropdown-menu shadow border-0 animated faster ";
                        echo ((twig_in_filter("right", twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 10))) ? ("dropdown-menu-right") : (""));
                        echo " ";
                        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 10), "cssClass", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 10), "cssClass", [], "any", false, false, false, 10), "html", null, true))) : (print ("fadeInUp")));
                        echo "\" aria-labelledby=\"dropdownMenu";
                        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10), [" " => "-"]), "html", null, true);
                        echo "\">
\t\t";
                        // line 11
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11)                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/subitems"                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 12
                        echo "\t</ul>
\t";
                    }
                    // line 14
                    echo "\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 14) == "megamenu")) {
                        // line 15
                        echo "\t<div class=\"dropdown-menu shadow border-0 font-5 py-5 px-3 animated faster fadeInUp\" aria-labelledby=\"dropdownMenu";
                        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15), [" " => "-"]), "html", null, true);
                        echo "\">
\t\t<div class=\"row no-gutters\">
\t\t    ";
                        // line 17
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 17), "cssClass", [], "any", false, false, false, 17)) {
                            // line 18
                            echo "\t\t    ";
                            $context["itemCssClass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 18), "cssClass", [], "any", false, false, false, 18);
                            // line 19
                            echo "\t\t    ";
                        }
                        // line 20
                        echo "\t\t\t";
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 20)                        ;
                        $context['__cms_partial_params']['itemCssClass'] = ($context["itemCssClass"] ?? null)                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/mega-subitems"                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 21
                        echo "\t\t</div>
\t</div>
\t";
                    }
                    // line 24
                    echo "\t";
                }
                // line 25
                echo "</li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 25,  130 => 24,  125 => 21,  118 => 20,  115 => 19,  112 => 18,  110 => 17,  104 => 15,  101 => 14,  97 => 12,  92 => 11,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  71 => 6,  67 => 5,  59 => 4,  49 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
<li class=\"nav-item hover:bg-secondary transition-20 {{ item.items ? 'dropdown' : '' }} {{ item.code == 'megamenu' ? 'mega-dropdown position-md-static' : '' }}\">
\t<a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }} class=\"nav-link d-flex justify-content-between align-items-center opacity-70 hover:opacity-100 font-5 font-md-6 text-dark py-3 py-md-6 px-4 px-md-5 navbar-link {{ item.isActive or item.isChildActive ? 'active' : '' }} {{ item.items ? 'dropdown-toggle' : '' }}\" 
\t\t{% if item.items %}id=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"{% endif %}>
\t\t{{ item.title }}
\t\t{% if item.items %}<i class=\"ml-1\" data-feather=\"chevron-down\"></i>{% endif %}
\t</a>
\t{% if item.items %}
\t{% if item.code != 'megamenu' %}
\t<ul class=\"dropdown-menu shadow border-0 animated faster {{ 'right' in item.code ? 'dropdown-menu-right' }} {{ item.viewBag.cssClass ? item.viewBag.cssClass : 'fadeInUp' }}\" aria-labelledby=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\">
\t\t{% partial 'mainMenu/subitems' items=item.items %}
\t</ul>
\t{% endif %}
\t{% if item.code == 'megamenu' %}
\t<div class=\"dropdown-menu shadow border-0 font-5 py-5 px-3 animated faster fadeInUp\" aria-labelledby=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\">
\t\t<div class=\"row no-gutters\">
\t\t    {% if item.viewBag.cssClass %}
\t\t    {% set itemCssClass = item.viewBag.cssClass %}
\t\t    {% endif %}
\t\t\t{% partial 'mainMenu/mega-subitems' items=item.items itemCssClass=itemCssClass %}
\t\t</div>
\t</div>
\t{% endif %}
\t{% endif %}
</li>
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/items.htm", "");
    }
}
