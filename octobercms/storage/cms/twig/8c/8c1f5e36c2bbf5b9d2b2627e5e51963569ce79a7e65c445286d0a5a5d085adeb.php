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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/topbar.htm */
class __TwigTemplate_26133a7b35cbf28462aa3453f0cb1a2011d94128ffb49a8994277842ae6834ef extends \Twig\Template
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
        echo "<div class=\"navbar navbar-expand-md bg-dark py-1 px-0\">
\t<div class=\"container px-4\">
\t\t<ul class=\"navbar-nav d-none d-md-flex font-5\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link text-white opacity-70 hover:opacity-100 pl-0 pr-3 py-1\" href=\"tel:";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["+267 3116181"]);
        echo "\">
\t\t\t\t\t<i class=\"mr-2\" data-feather=\"phone\"></i>";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["+267 3116181"]);
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link text-white opacity-70 hover:opacity-100 pl-0 pr-3 py-1\" href=\"mailto:";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["support@bangoe.com"]);
        echo "\">
\t\t\t\t\t<i class=\"mr-2\" data-feather=\"mail\"></i>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["support@bangoe.com"]);
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav d-block d-md-none\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link text-white font-4 opacity-70 hover:opacity-100 py-1 dropdown-toggle\" href=\"#\" id=\"headerLinks\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                    ";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Us"]);
        echo "
                    <i data-feather=\"chevron-down\"></i>
                </a>
                <ul class=\"dropdown-menu shadow border-0 position-absolute animated faster fadeInUp\" aria-labelledby=\"headerLinks\">
            \t\t<li class=\"nav-item\">
            \t\t\t<a class=\"dropdown-item py-2 px-4 font-4\" href=\"tel:";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["+267 3116181"]);
        echo "\">
            \t\t\t\t<i class=\"mr-2\" data-feather=\"phone\"></i>";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["+2673116181"]);
        echo "
            \t\t\t</a>
            \t\t</li>
            \t\t<li class=\"nav-item\">
            \t\t\t<a class=\"dropdown-item py-2 px-4 font-4\" href=\"mailto:";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["support@bangoe.com"]);
        echo "\">
            \t\t\t\t<i class=\"mr-2\" data-feather=\"mail\"></i>";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["support@bangoe.com"]);
        echo "
            \t\t\t</a>
            \t\t</li>
                </ul>
            </li>
        </ul>
\t\t<div class=\"\">
\t\t\t<ul class=\"navbar-nav ml-auto flex-row justify-content-start\">
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 37), "social_media", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 38
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link opacity-70 hover:opacity-100 pl-0 pr-2 pr-md-3 py-1 text-white\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "social_media_url", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"w-3 w-sm-4 h-3 h-sm-4\" data-feather=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "social_media_icon", [], "any", false, false, false, 40), "html", null, true);
            echo "\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t<li class=\"nav-item dropdown d-block d-md-none position-static\">
\t\t\t\t\t<a class=\"nav-link opacity-70 hover:opacity-100 pl-0 pr-2 pr-md-3 py-1 dropdown-toggle text-white\" href=\"#\" id=\"headerSearch\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
\t\t\t\t\t\t<span class=\"border-left\"><span>
\t\t\t\t\t\t<i class=\"w-3 w-sm-4 h-3 h-sm-4 ml-2 ml-md-3\" data-feather=\"search\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right w-100 min-w-xs shadow border-0 p-4 position-absolute animated faster fadeInUp\" aria-labelledby=\"headerSearch\">
\t\t\t\t\t\t";
        // line 50
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['searchinput'] = ($context["searchInputMobile"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("searchInputMobile/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link opacity-70 hover:opacity-100 pl-0 pr-2 pr-md-3 py-1 dropdown-toggle text-white\" href=\"#\" id=\"headerCurrency\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
\t\t\t\t\t\t<span class=\"border-left\"><span>
\t\t\t\t\t\t<i class=\"w-3 w-sm-4 h-3 h-sm-4 ml-2 ml-md-3\" data-feather=\"dollar-sign\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right min-w-xs shadow border-0 p-4 position-absolute animated faster fadeInUp\" aria-labelledby=\"headerCurrency\">
\t\t\t\t\t\t";
        // line 59
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("currencyPicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 60
        echo "\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/topbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  146 => 59,  136 => 51,  131 => 50,  123 => 44,  113 => 40,  109 => 39,  106 => 38,  102 => 37,  91 => 29,  87 => 28,  80 => 24,  76 => 23,  68 => 18,  58 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar navbar-expand-md bg-dark py-1 px-0\">
\t<div class=\"container px-4\">
\t\t<ul class=\"navbar-nav d-none d-md-flex font-5\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link text-white opacity-70 hover:opacity-100 pl-0 pr-3 py-1\" href=\"tel:{{ '+267 3116181'|_ }}\">
\t\t\t\t\t<i class=\"mr-2\" data-feather=\"phone\"></i>{{ '+267 3116181'|_ }}
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link text-white opacity-70 hover:opacity-100 pl-0 pr-3 py-1\" href=\"mailto:{{ 'support@bangoe.com'|_ }}\">
\t\t\t\t\t<i class=\"mr-2\" data-feather=\"mail\"></i>{{ 'support@bangoe.com'|_ }}
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"navbar-nav d-block d-md-none\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link text-white font-4 opacity-70 hover:opacity-100 py-1 dropdown-toggle\" href=\"#\" id=\"headerLinks\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                    {{ 'Contact Us'|_ }}
                    <i data-feather=\"chevron-down\"></i>
                </a>
                <ul class=\"dropdown-menu shadow border-0 position-absolute animated faster fadeInUp\" aria-labelledby=\"headerLinks\">
            \t\t<li class=\"nav-item\">
            \t\t\t<a class=\"dropdown-item py-2 px-4 font-4\" href=\"tel:{{ '+267 3116181'|_ }}\">
            \t\t\t\t<i class=\"mr-2\" data-feather=\"phone\"></i>{{ '+2673116181'|_ }}
            \t\t\t</a>
            \t\t</li>
            \t\t<li class=\"nav-item\">
            \t\t\t<a class=\"dropdown-item py-2 px-4 font-4\" href=\"mailto:{{ 'support@bangoe.com'|_ }}\">
            \t\t\t\t<i class=\"mr-2\" data-feather=\"mail\"></i>{{ 'support@bangoe.com'|_ }}
            \t\t\t</a>
            \t\t</li>
                </ul>
            </li>
        </ul>
\t\t<div class=\"\">
\t\t\t<ul class=\"navbar-nav ml-auto flex-row justify-content-start\">
\t\t\t\t{% for fields in this.theme.social_media %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link opacity-70 hover:opacity-100 pl-0 pr-2 pr-md-3 py-1 text-white\" href=\"{{ fields.social_media_url }}\">
\t\t\t\t\t\t<i class=\"w-3 w-sm-4 h-3 h-sm-4\" data-feather=\"{{ fields.social_media_icon }}\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t<li class=\"nav-item dropdown d-block d-md-none position-static\">
\t\t\t\t\t<a class=\"nav-link opacity-70 hover:opacity-100 pl-0 pr-2 pr-md-3 py-1 dropdown-toggle text-white\" href=\"#\" id=\"headerSearch\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
\t\t\t\t\t\t<span class=\"border-left\"><span>
\t\t\t\t\t\t<i class=\"w-3 w-sm-4 h-3 h-sm-4 ml-2 ml-md-3\" data-feather=\"search\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right w-100 min-w-xs shadow border-0 p-4 position-absolute animated faster fadeInUp\" aria-labelledby=\"headerSearch\">
\t\t\t\t\t\t{% partial 'searchInputMobile/default' searchinput=searchInputMobile %}
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link opacity-70 hover:opacity-100 pl-0 pr-2 pr-md-3 py-1 dropdown-toggle text-white\" href=\"#\" id=\"headerCurrency\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
\t\t\t\t\t\t<span class=\"border-left\"><span>
\t\t\t\t\t\t<i class=\"w-3 w-sm-4 h-3 h-sm-4 ml-2 ml-md-3\" data-feather=\"dollar-sign\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right min-w-xs shadow border-0 p-4 position-absolute animated faster fadeInUp\" aria-labelledby=\"headerCurrency\">
\t\t\t\t\t\t{% component 'currencyPicker' %}
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
        </div>
\t</div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/topbar.htm", "");
    }
}
