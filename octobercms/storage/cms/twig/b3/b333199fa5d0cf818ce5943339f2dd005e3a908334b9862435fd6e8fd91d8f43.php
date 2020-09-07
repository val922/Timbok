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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/mega-subitems.htm */
class __TwigTemplate_7d1e4dcd73243413f4d102ef011f72b570245099dcb4ecd5af0870d07d367b34 extends \Twig\Template
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
                if (((((((twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 2) == "banner-1") || (twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 2) == "banner-2")) || (twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 2) == "banner-3")) || (twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 2) == "banner-4")) || (twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 2) == "banner-5")) || (twig_get_attribute($this->env, $this->source, $context["item"], "code", [], "any", false, false, false, 2) == "banner-6"))) {
                    // line 3
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['item'] = $context["item"]                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/banner"                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                } else {
                    // line 5
                    echo "<div class=\"";
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 5), "cssClass", [], "any", false, false, false, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 5), "cssClass", [], "any", false, false, false, 5), "html", null, true))) : (print ("col-lg-2 col-md-6")));
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["itemCssClass"] ?? null), "html", null, true);
                    echo " px-3 mb-6\">
    ";
                    // line 6
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['item'] = $context["item"]                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/category-image"                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 7
                    echo "\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 7), "html", null, true);
                        echo "\" class=\"d-block ";
                        echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 7) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 7))) ? ("active") : (""));
                        echo "\">";
                    }
                    // line 8
                    echo "\t\t<h6 class=\"mb-2 font-6\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8), "html", null, true);
                    echo "</h6>
\t";
                    // line 9
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 9)) {
                        echo "</a>";
                    }
                    // line 10
                    echo "\t";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 10)) {
                        // line 11
                        echo "\t<ul class=\"list-unstyled font-5\">
\t\t";
                        // line 12
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 12)                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/mega-childitems"                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 13
                        echo "\t</ul>
\t";
                    }
                    // line 15
                    echo "</div>
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
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/mega-subitems.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 15,  91 => 13,  86 => 12,  83 => 11,  80 => 10,  76 => 9,  71 => 8,  62 => 7,  57 => 6,  50 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
{% if (item.code == 'banner-1') or (item.code == 'banner-2') or (item.code == 'banner-3') or (item.code == 'banner-4') or (item.code == 'banner-5') or (item.code == 'banner-6')  %}
{% partial 'mainMenu/banner' item=item %}
{% else %}
<div class=\"{{ item.viewBag.cssClass ? item.viewBag.cssClass : 'col-lg-2 col-md-6' }} {{ itemCssClass }} px-3 mb-6\">
    {% partial 'mainMenu/category-image' item=item %}
\t{% if item.url %}<a href=\"{{ item.url }}\" class=\"d-block {{ item.isActive or item.isChildActive ? 'active' }}\">{% endif %}
\t\t<h6 class=\"mb-2 font-6\">{{ item.title }}</h6>
\t{% if item.url %}</a>{% endif %}
\t{% if item.items %}
\t<ul class=\"list-unstyled font-5\">
\t\t{% partial 'mainMenu/mega-childitems' items=item.items %}
\t</ul>
\t{% endif %}
</div>
{% endif %}
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/mega-subitems.htm", "");
    }
}
