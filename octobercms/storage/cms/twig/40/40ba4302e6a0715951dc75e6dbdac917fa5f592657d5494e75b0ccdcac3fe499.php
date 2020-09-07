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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/searchinput/default.htm */
class __TwigTemplate_0b8f96ba46e7f018d5e1ec7611a0f5816279707a70fdc9e8e765384ce62410aa extends \Twig\Template
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
        echo "<form action=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", [], "any", false, false, false, 1));
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"input-group\">
\t\t<div class=\"input-group-prepend\">
\t\t\t<button class=\"btn btn-white shadow-none input-group-text\" type=\"submit\">
                <i data-feather=\"search\"></i>
\t\t\t</button>
\t\t</div>
\t\t<input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" 
\t\t\t   value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "query", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
\t\t\t   autocomplete=\"off\"
\t\t\t   autofocus
\t\t\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "useAutoComplete", [], "any", false, false, false, 12)) {
            // line 13
            echo "\t\t\t\t\tdata-track-input
\t\t\t\t\tdata-request=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onType\"
\t\t\t\t\tdata-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
\t\t\t\t\tdata-request-update=\"'";
            // line 16
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::autocomplete': '#autocomplete-results'\"
\t\t\t\t";
        }
        // line 18
        echo "\t\t>
    </div>
</form>
<div class=\"position-relative\">
    <div class=\"ss-search-form__results position-absolute inset-0 bottom-0 z-10 w-100 bg-white\" id=\"autocomplete-results\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/searchinput/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  67 => 16,  62 => 14,  59 => 13,  57 => 12,  51 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ __SELF__.searchPage | page }}?q={{ query | url_encode(true) }}\" method=\"get\">
    <div class=\"input-group\">
\t\t<div class=\"input-group-prepend\">
\t\t\t<button class=\"btn btn-white shadow-none input-group-text\" type=\"submit\">
                <i data-feather=\"search\"></i>
\t\t\t</button>
\t\t</div>
\t\t<input class=\"form-control\" name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" 
\t\t\t   value=\"{{ __SELF__.query }}\"
\t\t\t   autocomplete=\"off\"
\t\t\t   autofocus
\t\t\t\t{% if __SELF__.useAutoComplete %}
\t\t\t\t\tdata-track-input
\t\t\t\t\tdata-request=\"{{ __SELF__ }}::onType\"
\t\t\t\t\tdata-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
\t\t\t\t\tdata-request-update=\"'{{ __SELF__ }}::autocomplete': '#autocomplete-results'\"
\t\t\t\t{% endif %}
\t\t>
    </div>
</form>
<div class=\"position-relative\">
    <div class=\"ss-search-form__results position-absolute inset-0 bottom-0 z-10 w-100 bg-white\" id=\"autocomplete-results\"></div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/searchinput/default.htm", "");
    }
}
