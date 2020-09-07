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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/mega-childitems.htm */
class __TwigTemplate_257f809b73c4ab7ae13464a7ecf27d06195da35bfc0072493f5e86039e67e6ea extends \Twig\Template
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
                echo "<li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 2)) ? ("py-1") : ("pb-1"));
                echo "\">
\t";
                // line 3
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3), "html", null, true);
                    echo "\" class=\"d-block text-muted hover:text-primary ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 3) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 3))) ? ("active") : (""));
                    echo "\">";
                }
                // line 4
                echo "\t\t<i class=\"w-4 h-4 text-muted\" data-feather=\"chevron-right\"></i>
\t\t<span class=\"";
                // line 5
                echo (((($context["muted"] ?? null) == true)) ? ("text-muted") : ("text-dark"));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 5)) ? ("") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 5)) ? ("hover:text-primary") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo "<span>
\t";
                // line 6
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 6)) {
                    echo "</a>";
                }
                // line 7
                echo "\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "\t<ul class=\"list-unstyled ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 8), "items", [], "any", false, false, false, 8)) ? ("font-5") : ("pl-2 ml-2 border-left font-3 text-muted"));
                    echo "\">
\t\t";
                    // line 9
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 9)                    ;
                    $context['__cms_partial_params']['muted'] = true                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/mega-childitems"                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 10
                    echo "\t</ul>
\t";
                }
                // line 12
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
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/mega-childitems.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  86 => 10,  80 => 9,  75 => 8,  72 => 7,  68 => 6,  58 => 5,  55 => 4,  47 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
<li class=\"{{ item.items ? 'py-1' : 'pb-1' }}\">
\t{% if item.url %}<a href=\"{{ item.url }}\" class=\"d-block text-muted hover:text-primary {{ item.isActive or item.isChildActive ? 'active' }}\">{% endif %}
\t\t<i class=\"w-4 h-4 text-muted\" data-feather=\"chevron-right\"></i>
\t\t<span class=\"{{ muted==true ? 'text-muted' : 'text-dark' }} {{ item.items ? '' : '' }} {{ item.url ? 'hover:text-primary' }}\">{{ item.title }}<span>
\t{% if item.url %}</a>{% endif %}
\t{% if item.items %}
\t<ul class=\"list-unstyled {{ item.items.items ? 'font-5' : 'pl-2 ml-2 border-left font-3 text-muted' }}\">
\t\t{% partial 'mainMenu/mega-childitems' items=item.items muted=true %}
\t</ul>
\t{% endif %}
</li>
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/mega-childitems.htm", "");
    }
}
